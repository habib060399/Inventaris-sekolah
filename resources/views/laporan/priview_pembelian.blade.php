@php
$pdf = app('Fpdf');

$pdf->AliasNbPages();
$pdf->AddPage('L', 'A4');
$pdf->SetFont('Times', '', 12);

$pdf->SetFont('Arial', 'B', 7);
$pdf->Cell(10, 7, 'NO', 1,0, 'C');
$pdf->Cell(50, 7, 'NO NOTA', 1,0, 'C');
$pdf->Cell(40, 7, 'TANGGAL', 1,0, 'C');
$pdf->Cell(20, 7, 'NAMA', 1,0, 'C');
$pdf->Cell(30, 7, 'KODE BARANG', 1,0, 'C');
$pdf->Cell(40, 7, 'JUMLAH HARGA', 1,0, 'C');
$pdf->Cell(20, 7, 'POTONGAN', 1,0, 'C');
$pdf->Cell(20, 7, 'KETERANGAN', 1,0, 'C');
$pdf->Ln();

    $no = 1;
    foreach ($brg_beli as $data) {                
        $pdf->SetFont('Arial', '', 8);
        $pdf->Cell(10, 6, $no++, 1,0, 'C');
        $pdf->Cell(50, 6, $data->noNota, 1,0,'C');
        $pdf->Cell(40, 6, $data->tgl, 1,0,'L');
        $pdf->Cell(20, 6, $data->nama, 1,0, 'L');
        $pdf->Cell(30, 6, $data->kdbarang, 1,0, 'L');        
        $pdf->Cell(40, 6, $data->jml, 1,0, 'C');
        $pdf->Cell(20, 6, $data->potongan, 1,0,'L');
        $pdf->Cell(20, 6, $data->ket, 1,0,'L');    
        $pdf->Ln();        
    }


    $pdf->Output("Laporan Semua Data Barang Beli.pdf", "I");
exit;
@endphp