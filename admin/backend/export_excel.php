<?php
require_once "connect.php";

// Retrieve filter values
$blood_group = isset($_GET['blood_group']) ? $_GET['blood_group'] : '';
$date = isset($_GET['date']) ? $_GET['date'] : '';

// Prepare SQL query with filters
$sql = "SELECT * FROM donation where date='$date' AND bloodgroup = '$blood_group'";
if (!empty($blood_group)) {
    $sql .= " AND bloodgroup = '$blood_group'";
}
if (!empty($date)) {
    $sql .= " AND DATE(date) = '$date'";
}

$result = $conn->query($sql);
$rows = $result->fetch_all(MYSQLI_ASSOC);

// Set the headers to output a CSV file
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=DonationData.csv');

// Open output stream
$output = fopen('php://output', 'w');

// Output the column headings
fputcsv($output, array('Id', 'Name', 'Phone', 'Email', 'Address', 'Blood Unit', 'Blood Group', 'Gender', 'Disease', 'Date'));

// Output the data
foreach ($rows as $row) {
    fputcsv($output, $row);
}

// Close the output stream
fclose($output);
exit;
?>