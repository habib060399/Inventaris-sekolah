@php
$pdf = app('Fpdf');

$pdf->AliasNbPages();
$pdf->AddPage('L', 'A4');
$pdf->SetFont('Times', '', 12);

$pdf->SetFont('Arial', 'B', 7);
$pdf->Cell(10, 7, 'NO', 1,0, 'C');
$pdf->Cell(50, 7, 'KODE', 1,0, 'C');
$pdf->Cell(40, 7, 'NAMA BARANG', 1,0, 'C');
$pdf->Cell(20, 7, 'SATUAN', 1,0, 'C');
$pdf->Cell(30, 7, 'HARGA BELI', 1,0, 'C');
$pdf->Cell(15, 7, 'STOK', 1,0, 'C');
$pdf->Cell(40, 7, 'KETERANGAN', 1,0, 'C');
$pdf->Cell(20, 7, 'STATUS', 1,0, 'C');
$pdf->Cell(20, 7, 'MEREK', 1,0, 'C');
$pdf->Cell(35, 7, 'TAHUN PEMBUATAN', 1,0, 'C');
$pdf->Ln();

    $no = 1;
    foreach ($barang as $data) {                
        $pdf->SetFont('Arial', '', 8);
        $pdf->Cell(10, 6, $no++, 1,0, 'C');
        $pdf->Cell(50, 6, $data->kode, 1,0,'C');
        $pdf->Cell(40, 6, $data->nmBrg, 1,0,'L');
        $pdf->Cell(20, 6, $data->satuan, 1,0, 'L');
        $pdf->Cell(30, 6, $data->hrgBeli, 1,0, 'L');
        $pdf->Cell(15, 6, $data->stock, 1,0, 'C');
        $pdf->Cell(40, 6, $data->ket, 1,0, 'C');
        $pdf->Cell(20, 6, $data->status, 1,0,'L');
        $pdf->Cell(20, 6, $data->merk, 1,0,'L');
        $pdf->Cell(35, 6, $data->tahun_pembuatan, 1,0,'L');
        $pdf->Ln();        
    }


$pdf->Output("Laporan Semua Data Barang.pdf", "I");
exit;
@endphp