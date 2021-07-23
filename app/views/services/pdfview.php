<?php
require APPROOT . '/config/fpdf/fpdf.php';
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(80);
$pdf->Cell(20, 20, 'Hello World!', 0, 1, 'C');
$pdf->Cell(80);
$pdf->Cell(20, 20, 'Welcome to the party', 0, 1, 'C');
$pdf->Output();
