<?php
require '../../vendor/autoload.php'; // 

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Font;

require_once "connect.php";

$blood_group = isset($_GET['blood_group']) ? $_GET['blood_group'] : '';
$date = isset($_GET['date']) ? $_GET['date'] : '';


$sql = "SELECT * FROM donation WHERE 1=1"; // Start with a base condition

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


$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

$sheet->setCellValue('A1', 'Donation Data');


$sheet->mergeCells('A1:J1'); 

$sheet->getStyle('A1')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);

$sheet->getStyle('A1')->getFont()->setBold(true)->setSize(16);

$sheet->setCellValue('A2', '');

$sheet->setCellValue('A3', 'Id')
      ->setCellValue('B3', 'Name')
      ->setCellValue('C3', 'Phone')
      ->setCellValue('D3', 'Email')
      ->setCellValue('E3', 'Address')
      ->setCellValue('F3', 'Blood Unit')
      ->setCellValue('G3', 'Blood Group')
      ->setCellValue('H3', 'Gender')
      ->setCellValue('I3', 'Disease')
      ->setCellValue('J3', 'Date');

$rowNum = 4;
foreach ($rows as $row) {
    $sheet->setCellValue('A' . $rowNum, $row['id'])
          ->setCellValue('B' . $rowNum, $row['name'])
          ->setCellValue('C' . $rowNum, $row['phone'])
          ->setCellValue('D' . $rowNum, $row['email'])
          ->setCellValue('E' . $rowNum, $row['address'])
          ->setCellValue('F' . $rowNum, $row['bloodunit'])
          ->setCellValue('G' . $rowNum, $row['bloodgroup'])
          ->setCellValue('H' . $rowNum, $row['gender'])
          ->setCellValue('I' . $rowNum, $row['disease'])
          ->setCellValue('J' . $rowNum, date('Y-m-d', strtotime($row['Date']))); // Format the date
    $rowNum++;
}

header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment; filename="DonationData.xlsx"');

$writer = new Xlsx($spreadsheet);
$writer->save('php://output');
exit;
?>
