<?php
require('../fpdf/fpdf.php');
require_once "connect.php";

// Fetch data based on filters
$blood_group = isset($_GET['blood_group']) ? $_GET['blood_group'] : '';
$date = isset($_GET['date']) ? $_GET['date'] : '';

$sql = "SELECT * FROM donation where date='$date' AND bloodgroup = '$blood_group' ";
if (!empty($blood_group)) {
    $sql .= " AND bloodgroup = '$blood_group'";
}
if (!empty($date)) {
    $sql .= " AND DATE(date) = '$date'";
}
$result = $conn->query($sql);

class PDF extends FPDF {
    // Page header
    function Header() {
        $this->SetFont('Arial', 'B', 12);
        $this->Cell(0, 10, 'Donation Data', 0, 1, 'C');
        $this->Ln(10);
    }

    // Page footer
    function Footer() {
        $this->SetY(-15);
        $this->SetFont('Arial', 'I', 8);
        $this->Cell(0, 10, 'Page ' . $this->PageNo(), 0, 0, 'C');
    }

    // Table
    function Table($header, $data) {
        // Header
        $this->SetFont('Arial', 'B', 10);
        foreach ($header as $col) {
            $this->Cell(20, 7, $col, 1);
        }
        $this->Ln();
        // Data
        $this->SetFont('Arial', '', 10);
        foreach ($data as $row) {
            foreach ($row as $col) {
                $this->Cell(20, 6, $col, 1);
            }
            $this->Ln();
        }
    }
}

$pdf = new PDF();
$pdf->AddPage();

// Column headings
$header = array('Id', 'Name', 'Phone', 'Email', 'Address', 'Blood unit', 'Blood group', 'Gender', 'Disease', 'Date');

// Data loading
$data = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = array(
            $row['id'],
            $row['name'],
            $row['phone'],
            $row['email'],
            $row['address'],
            $row['bloodunit'],
            $row['bloodgroup'],
            $row['gender'],
            $row['disease'],
            $row['Date']
        );
    }
}

$pdf->Table($header, $data);
$pdf->Output();
?>