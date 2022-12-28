@php
$pdf = app('Fpdf');

$pdf->AliasNbPages();
$pdf->AddPage('L', 'A4');
$pdf->SetFont('Times', '', 12);


$pdf->SetFont('Arial', 'B', 7);
$pdf->Cell(15, 7, 'NO', 1,0, 'C');
$pdf->Cell(50, 7, 'KODE', 1,0, 'C');
$pdf->Cell(30, 7, 'NAMA BARANG', 1,0, 'C');
$pdf->Cell(30, 7, 'STOK', 1,0, 'C');
$pdf->Cell(60, 7, 'KET', 1,0, 'C');

$pdf->Ln();

    $no = 1;
    foreach ($barang as $data) {                
        $pdf->SetFont('Arial', '', 8);
        $pdf->Cell(15, 6, $no++, 1,0, 'C');
        $pdf->Cell(50, 6, $data->kode, 1,0,'C');
        $pdf->Cell(30, 6, $data->nmBrg, 1,0,'C');
        $pdf->Cell(30, 6, $data->stock, 1,0,'C');
        $pdf->Cell(60, 6, $data->ket, 1,0,'L');
        $pdf->Ln();        
    }


$pdf->Output("Laporan Semua Data Pasien.pdf", "I");
exit;
@endphp