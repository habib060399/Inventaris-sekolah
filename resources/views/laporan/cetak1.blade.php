@php
$pdf = app('Fpdf');

$pdf->AliasNbPages();
$pdf->AddPage('L', 'A4');
$pdf->SetFont('Times', '', 12);

$pdf->SetFont('Arial', 'B', 7);
$pdf->Cell(15, 7, 'NO', 1,0, 'C');
$pdf->Cell(30, 7, 'NAMA', 1,0, 'C');
$pdf->Cell(40, 7, 'NAMA BARANG', 1,0, 'C');
$pdf->Cell(50, 7, 'KODE BARANG', 1,0, 'C');
$pdf->Cell(40, 7, 'JUMLAH BARANG', 1,0, 'C');
$pdf->Cell(40, 7, 'TANGGAL PINJAM', 1,0, 'C');
$pdf->Cell(40, 7, 'TANGGAL KEMBALI', 1,0, 'C');
$pdf->Cell(40, 7, 'KETERANGAN', 1,0, 'C');
$pdf->Ln();

    $no = 1;
    foreach ($brg_keluar as $data) {                
        $pdf->SetFont('Arial', '', 8);
        $pdf->Cell(15, 6, $no++, 1,0, 'C');
        $pdf->Cell(30, 6, $data->nama, 1,0,'C');
        $pdf->Cell(40, 6, $data->nmBrg, 1,0,'L');
        $pdf->Cell(50, 6, $data->kdbarang, 1,0, 'L');
        $pdf->Cell(40, 6, $data->jml_barang, 1,0, 'L');
        $pdf->Cell(40, 6, $data->tgl_pinjam, 1,0, 'C');
        $pdf->Cell(40, 6, $data->tgl_kembali, 1,0, 'C');
        $pdf->Cell(40, 6, $data->keterangan, 1,0,'L');
        $pdf->Ln();        
    }


$pdf->Output("Laporan Semua Data Pasien.pdf", "I");
exit;
@endphp