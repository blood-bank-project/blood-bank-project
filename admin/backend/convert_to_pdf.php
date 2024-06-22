<?php
require('../fpdf/fpdf.php');

class PDF extends FPDF
{
    function Header()
    {
        // Page header
        $this->SetFont('Arial', 'B', 12);
        $this->Cell(0, 10, 'Document Title', 0, 1, 'C');
    }

    function Footer()
    {
        // Page footer
        $this->SetY(-15);
        $this->SetFont('Arial', 'I', 8);
        $this->Cell(0, 10, 'Page ' . $this->PageNo(), 0, 0, 'C');
    }

    function ChapterTitle($title)
    {
        // Title
        $this->SetFont('Arial', 'B', 12);
        $this->Cell(0, 10, $title, 0, 1, 'L');
        $this->Ln(5);
    }

    function ChapterBody($body)
    {
        // Body
        $this->SetFont('Arial', '', 12);
        $this->MultiCell(0, 10, $body);
        $this->Ln();
    }

    function AddImage($file)
    {
        // Image
        $this->Image($file, 10, $this->GetY(), 0, 0);
        $this->Ln(10);
    }

    function PrintChapter($title, $body, $images = [])
    {
        $this->AddPage();
        $this->ChapterTitle($title);
        $this->ChapterBody($body);

        foreach ($images as $image) {
            $this->AddImage($image);
        }
    }
}

$filePath = $_GET['file'];

// Security check to prevent directory traversal attacks
if (strpos($filePath, '..') !== false || !file_exists($filePath)) {
    echo "Invalid file.";
    exit;
}

// Read the content of the file
$htmlContent = file_get_contents($filePath);

// Parse HTML content to find images
preg_match_all('/<img src="([^"]+)"/', $htmlContent, $matches);
$images = $matches[1];

// Remove image tags from HTML content for text processing
$htmlContent = preg_replace('/<img[^>]+\>/i', '', $htmlContent);

// Create a new PDF document
$pdf = new PDF();
$pdf->SetTitle('Converted PDF');

// Split the content into chapters
// Assuming the HTML content is simple and split by lines
$lines = explode("\n", $htmlContent);

foreach ($lines as $line) {
    $pdf->PrintChapter('Chapter', $line, $images);
}

// Output the PDF to the browser
$pdf->Output('I', 'output.pdf');
?>