<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelBarang;
use App\Models\ModelNotabeli;
use App\Models\ModelTransaksi;


class ControllerLaporan extends Controller
{

    public function __construct()
    {
        $this->barang = new ModelBarang();
        $this->pembelian = new ModelNotabeli();
        $this->transaksi = new ModelTransaksi();
    }

    public function index_pembelian()
    {
        $level = request()->session()->get('level');
        if ($level === 1 || $level === 2) {

            return view('laporan.data_pembelian');
        } else {
            return redirect('/logout');
        }
    }

    public function index_barang()
    {
        $level = request()->session()->get('level');
        if ($level === 1 || $level === 2) {

            return view('laporan.data_barang');
        } else {
            return redirect('/logout');
        }
    }

    public function index_brg_keluar()
    {
        $level = request()->session()->get('level');
        if ($level === 1 || $level === 2) {

            return view('laporan.data_barang_keluar');
        } else {
            return redirect('/logout');
        }
    }

    public function cetak_barang(Request $request)
    {
        $data = $request->input('search');
        if ($data === "All" || $data === 'all') {
            $data_barang = $this->barang->data_barang();
        } else {
            $data_barang = $this->barang->cari_barang($data);
        }
        return view('laporan.cetak_barang', ['barang' => $data_barang]);
    }

    public function cetak_brg_keluar(Request $request)
    {
        $data = $request->input('search');
        if ($data === "All" || $data === 'all') {
            $data_barang = $this->transaksi->brg_keluar();
            return view('laporan.cetak1', ['brg_keluar' => $data_barang]);
        } else {
            $data_barang = $this->transaksi->cari_brg_keluar($data);
            if($data_barang){
                return view('laporan.cetak1', ['brg_keluar' => $data_barang]);        
            }else{
                return redirect('/laporan_pembelian');
            }
            
        }
    }

    public function cetak_brg_beli(Request $request)
    {
        $data = $request->input('search');
        if ($data === "All" || $data === 'all') {
            $data_brg_beli = $this->pembelian->data_nota();
            return view('laporan.priview_pembelian', ['brg_beli' => $data_brg_beli]);
        } else {
            $data_barang = $this->pembelian->cari_pembelian($data);
            if($data_barang){
                return view('laporan.priview_pembelian', ['brg_beli' => $data_barang]);        
            }else{
                return redirect('/laporan_pembelian');
            }
            
        }

        // return view('laporan.priview_pembelian', ['pembelian' => $data_barang]);
        
    }

    public function cetak_stok($data)
    {
        // ddd($data);
        if ($data === "All" || $data === 'all') {
            $data_barang = $this->barang->data_barang();
        } else {
            $data_barang = $this->barang->cari_barang($data);
        }
        return view('laporan.cetak_history', ['barang' => $data_barang]);
    }
}
