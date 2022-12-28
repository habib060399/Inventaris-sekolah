<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelNotabeli;
use App\Models\ModelTransaksi;
use App\Models\ModelBarang;

class ControllerTransaksi extends Controller
{
    public function __construct(Request $request)
    { 
        // $this->sessionn();  
        $this->notabeli = new ModelNotabeli();
        $this->transaksi = new ModelTransaksi();       
        $this->barang = new ModelBarang();       
    }

    public function index_brg_keluar()
    {
        $data = ModelTransaksi::brg_keluar();
        return view('transaksi.barang_keluar', ['barang_keluar' => $data]);
    }

    public function index_pembelian()
    {
        $nota = $this->notabeli->data_nota();

        return view('transaksi.pembelian', ['nota' => $nota]);
    }

    public function index_history()
    {
        $transaksi = $this->transaksi->data_transaksi();
        $session =request()->session()->get('level');
        $data = array(
            'transaksi' => $transaksi
        );
        return view('transaksi.histori_transaksi', $data);
    }

    public function terima($id)
    {
        $row_brg_transaksi = $this->transaksi->get_row($id);
        $kd_barang = $row_brg_transaksi->kdbarang;
        $row_barang = $this->barang->get_row($kd_barang);
        $jml_barang = $row_barang->stock;
        $jml_brg_transaksi = $row_brg_transaksi->jml_barang;
        // dd($row_barang);
        $con_jml = intval($jml_barang);
        $con_total = intval($jml_brg_transaksi);

        // dd([$con_jml, $con_total]);
        $sum = $con_jml - $con_total;
        // dd($sum);
        if ($con_total <= $con_jml) {
            $data = ([
                'stock' => $sum
            ]);
            // dd($data);
            $this->barang->up_brg_pinjam($kd_barang, $data);
            $data2 = ModelTransaksi::update_transaksi($id);
            return redirect('/histori');
        }else{
            return redirect('/histori');
        }

       
    }

    public function tolak($id)
    {
        $kode = $this->transaksi->A($id);
        foreach($kode as $k){
        $row_kode = $k->kdbarang;
    }
    // ddd($row_kode);
        $kodestr = strval($row_kode);
        $row_transaksi = $this->transaksi->get_row($id);
        $row_barang = $this->barang->get_row($kodestr);
        $jml_brg_pnjm = $row_transaksi->jml_barang;
        $jml_stock = $row_barang->stock;

        // $sum_stok = intval($jml_brg_pnjm) + intval($jml_stock);
        // $data = ([
        //     'stock' => $sum_stok
        // ]);

        // ddd([$row_transaksi]);
        // if ($data) {
            // $this->barang->update_brg($kodestr, $data);
            $this->transaksi->update_transaksi2($id);
            return redirect('/histori')->with('success', 'Tolak Barang berhasil');
        // } else {
        //     return redirect('/histori')->with('error', 'Pengembalian barang gagal');
        // }
    }
}
