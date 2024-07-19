<?php
require_once "connect.php";

// Retrieve filter values
$blood_group = isset($_GET['blood_group']) ? $_GET['blood_group'] : '';
$date = isset($_GET['date']) ? $_GET['date'] : '';

// Prepare SQL query with filters
$sql = "SELECT * FROM donation WHERE 1=1"; // Start with a base condition

// Add filter conditions
if (!empty($blood_group)) {
    $blood_group = $conn->real_escape_string($blood_group);
    $sql .= " AND bloodgroup = '$blood_group'";
}
if (!empty($date)) {
    $date = $conn->real_escape_string($date);
    $sql .= " AND DATE(date) = '$date'";
}

$result = $conn->query($sql);
$rows = $result->fetch_all(MYSQLI_ASSOC);

// Set the headers to output a CSV file
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=DonationData.csv');

// Open output stream
$output = fopen('php://output', 'w');

// Output the title
fputcsv($output, array('Donation Data'));

// Output an empty row for spacing
fputcsv($output, array());

// Output the column headings
fputcsv($output, array('Id', 'Name', 'Phone', 'Email', 'Address', 'Blood Unit', 'Blood Group', 'Gender', 'Disease', 'Date'));

// Output the data
foreach ($rows as $row) {
    // Ensure that the row data matches the column headings order
    fputcsv($output, array(
        $row['id'],
        $row['name'],
        $row['phone'],
        $row['email'],
        $row['address'],
        $row['bloodunit'],
        $row['bloodgroup'],
        $row['gender'],
        $row['disease'],
        date('Y-m-d', strtotime($row['Date'])) // Format the date
    ));
}

// Close the output stream
fclose($output);
exit;
?>
