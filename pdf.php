<?php
require('./fpdf/fpdf.php');

$pdf = new FPDF('L','pt','letter');
$pdf->AddPage();
$pdf->SetFont('Arial','',16);
$pdf->Cell(40,10,'Hello World!');
$pdf->Text(150,200,'Whats Up?');
$pdf->Text(255,200,'Doc');
$pdf->Line(50,220,500,220);
$pdf->Rect(50,175,450,300);
$pdf->SetXY(60,225);
$pdf->SetLeftMargin(60);
$pdf->SetFont('Arial');
$pdf->SetFontSize(10);
$pdf->Write(12,"Now is the time\nfor all good dogs\nto quit pooping on my \nfricking lawn.");
$pdf->AddPage();
$pdf->SetFont('Arial','',16);
$pdf->Cell(40,10,'Hello World!');
$pdf->Text(150,200,'Whats Up?');
$pdf->Text(255,200,'Doc');
$pdf->Line(50,220,500,220);
$pdf->Rect(50,175,450,300);
$pdf->SetXY(60,225);
$pdf->SetLeftMargin(60);
$pdf->SetFont('Arial');
$pdf->SetFontSize(10);
$pdf->Write(12,"Now is the time\nfor all good dogs\nto quit pooping on my \nfricking lawn.");
$p$pdf->Output();
?>