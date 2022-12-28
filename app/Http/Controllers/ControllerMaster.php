<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelBarang;
use App\Models\ModelPemasuk;
use App\Models\ModelPeminjam;
use App\Models\ModelNotabeli;
use App\Models\ModelTransaksi;

class ControllerMaster extends Controller
{
    protected $barang;

    public function __construct()
    {                
        $this->barang = new ModelBarang();
        $this->pemasuk = new ModelPemasuk();
        $this->peminjam = new ModelPeminjam();
        $this->notabeli = new ModelNotabeli();
        $this->transaksi = new ModelTransaksi();    
    }

    public function index_brg()
    {
        $level = request()->session()->get('level');
        if ($level === 1 || $level === 2) {
            $data_barang = $this->barang->data_barang();
            // $username = $request->session()->get('username');
            // $level = $request->session()->get('level');
            return view('master.data_barang', ['barang' => $data_barang]);
        } else {
            return redirect('/logout');
        }
    }

    public function index_peminjam()
    {

        $level = request()->session()->get('level');
        if ($level === 1 || $level === 2) {
            $data_peminjam = $this->peminjam->data_peminjam();
            // dd($data_peminjam);
            return view('master.data_peminjam', ['peminjam' => $data_peminjam]);
        } else {
            return redirect('/logout');
        }
    }

    public function index_pemasuk()
    {
        $level = request()->session()->get('level');
        if ($level === 1 || $level === 2) {

            $data_pemasuk = $this->pemasuk->data_pemasuk();
            return view('master.data_pemasuk', ['pemasuk' => $data_pemasuk]);
        } else {
            return redirect('/logout');
        }
    }

    public function barang()
    {
        $level = request()->session()->get('level');
        if ($level === 1 || $level === 2) {

            $data_pemasuk = $this->pemasuk->data_pemasuk();
            return view('master.tambah_barang', ['pemasuk' => $data_pemasuk]);
        } else {
            return redirect('/logout');
        }
    }

    public function pemasuk()
    {
        $level = request()->session()->get('level');
        if ($level === 1 || $level === 2) {

            return view('master.tambah_pemasuk');
        } else {
            return redirect('/logout');
        }
    }

    public function edit_pemasuk($kode)
    {
        $level = request()->session()->get('level');
        if ($level === 1 || $level === 2) {
            $nama = request()->session()->get('nama');
            $data_pemasuk = $this->pemasuk->row_pemasok($kode);
            // ddd($data_pemasuk);
            return view('master.edit_pemasuk', ['pemasuk' => $data_pemasuk]);
        } else {
            return redirect('/logout');
        }
    }

    public function peminjam()
    {
        $level = request()->session()->get('level');
        if ($level === 1 || $level === 2) {

            return view('master.tambah_peminjam');
        } else {
            return redirect('/logout');
        }
    }

    public function edit($id)
    {
        $level = request()->session()->get('level');
        if ($level === 1 || $level === 2) {
            $nama = request()->session()->get('nama');
            $data_pemasok = $this->pemasuk->data_pemasuk();
            $row = $this->barang->edit($id);
            // ddd($row);

            return view('master.edit', ['barang' => $row, 'pemasok' => $data_pemasok]);
            // return redirect("/edit/$id/barang");
        } else {
            return redirect('/logout');
        }
    }

    public function update_barang(Request $request)
    {
        // $message = [
        //     'kd.required' => 'kode barang wajib diisi',
        //     'nmbrg.required' => 'nama barang wajib diisi',
        //     'hrgbeli.required' => 'harga beli wajib diisi',
        //     'stock.required' => 'stock wajib diisi',
        //     'tahun_pembuatan.required' => 'tahun pembuatan wajib diisi'
        // ];

        // $validated = $request->validate([
        //     'kd' => 'required',
        //     'nmbrg' => 'required',
        //     'hrgbeli' => 'required',
        //     'stock' => 'required',
        //     'tahun_pembuatan' => 'required'
        // ], $message);

        //insert data
        $kode = $request->input('kd');
        $nama_barang = $request->input('nmbrg');
        $satuan = $request->input('satuan');
        $harga_beli = $request->input('hrgbeli');
        $stock = $request->input('stock');
        $ket = $request->input('ket');
        $status = $request->input('status');
        $merek = $request->input('merek');
        $tahun = $request->input('tahun_pembuatan');

        // insert data1
        $potongan = $request->input('potongan');
        $pemasok = $request->input('pemasok');
        $jumlah = floatval($harga_beli) - floatval($potongan);
        $tgl = date('Y-m-d');
        // $tgl1 = date('Ymd');
        // $nonota = strval($tgl1) . strval($kode);
        $id = $request->input('id');
        $id_int = intval($id);

        $data = array(
            'kode' => $kode,
            'nmBrg' => $nama_barang,
            'satuan' => $satuan,
            'hrgBeli' => $harga_beli,
            'stock' => $stock,
            'ket' => $ket,
            'status' => $status,
            'merk' => $merek,
            'tahun_pembuatan' => $tahun
        );
        $data1 = array(
            // 'noNota' => $nonota,
            'kdpemasok' => $pemasok,
            'potongan' => $potongan,
            'jml' => $jumlah,
            'tgl' => $tgl,
            'kdbarang' => $kode,
            'ket' => $ket,
        );
        $this->barang->update_brg($kode, $data);
        $this->notabeli->update_not($kode, $data1);
        // dd($id_int);
        return redirect('/data_barang')->with('success', 'Data berhasil diubah');
    }

    public function tambah_barang(Request $request)
    {
        $message = [
            'kd.required' => 'kode barang wajib diisi',
            'nmbrg.required' => 'nama barang wajib diisi',
            'hrgbeli.required' => 'harga beli wajib diisi',
            'stock.required' => 'stock wajib diisi',
            'tahun_pembuatan.required' => 'tahun pembuatan wajib diisi'
        ];

        $validated = $request->validate([
            'kd' => 'required',
            'nmbrg' => 'required',
            'hrgbeli' => 'required',
            'stock' => 'required',
            'tahun_pembuatan' => 'required'
        ], $message);

        //insert data
        $kode = $request->input('kd');
        $nama_barang = $request->input('nmbrg');
        $satuan = $request->input('satuan');
        $harga_beli = $request->input('hrgbeli');
        $stock = $request->input('stock');
        $ket = $request->input('ket');
        $status = $request->input('status');
        $merek = $request->input('merek');
        $tahun = $request->input('tahun_pembuatan');

        // insert data1
        $potongan = $request->input('potongan');
        $pemasok = $request->input('pemasok');
        $jumlah = floatval($harga_beli) - floatval($potongan);
        $tgl = date('Y-m-d');
        $tgl1 = date('Ymd');
        $nonota = strval($tgl1) . strval($kode);

        $data = array(
            'kode' => $kode,
            'nmBrg' => $nama_barang,
            'satuan' => $satuan,
            'hrgBeli' => $harga_beli,
            'stock' => $stock,
            'ket' => $ket,
            'status' => $status,
            'merk' => $merek,
            'tahun_pembuatan' => $tahun
        );
        $data1 = array(
            'noNota' => $nonota,
            'kdpemasok' => $pemasok,
            'potongan' => $potongan,
            'jml' => $jumlah,
            'tgl' => $tgl,
            'kdbarang' => $kode,
            'ket' => $ket,
        );

        if (count($data) && count($data1) > 0) {
            $this->barang->tambah_barang($data);
            $this->notabeli->tambah_nota($data1);
            return redirect('/data_barang')->with('success', 'Data telah berhasil ditambahkan');
        }
        return view('master.data_barang', ['data' => $validated]);
    }

    public function tambah_pemasuk(Request $request)
    {
        $message = [
            'kd.required' => 'kode barang wajib diisi',
            'nama.required' => 'nama wajib diisi',
            'alamat' => 'alamat wajib diisi',
            'telp.required' => 'No telepon wajib diisi',
            'kota.required' => 'kota wajib diisi',
            'tgl_masuk.required' => 'tanggal masuk wajib diisi'
        ];

        $validated = $request->validate([
            'kd' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'telp' => 'required',
            'kota' => 'required',
            'tgl_masuk' => 'required'
        ], $message);

        $kode = $request->input('kd');
        $nama = $request->input('nama');
        $alamat = $request->input('alamat');
        $telp = $request->input('telp');
        $kota = $request->input('kota');
        $tgl_masuk = $request->input('tgl_masuk');

        $data = array(
            'kode' => $kode,
            'nama' => $nama,
            'alamat' => $alamat,
            'telp' => $telp,
            'kota' => $kota,
            'tgl_masuk' => $tgl_masuk
        );
        if (count($data) > 0) {
            $this->pemasuk->tambah_pemasuk($data);
            return redirect('/data_pemasuk')->with('success', 'Data telah berhasil ditambahkan');
        }

        return view('/tambah_data_pemasuk', ['data' => $validated]);
    }

    public function edit_pemasok (Request $request){

        $kode = $request->input('kd');
        $nama = $request->input('nama');
        $alamat = $request->input('alamat');
        $telp = $request->input('telp');
        $kota = $request->input('kota');
        $tgl_masuk = $request->input('tgl_masuk');

        $data = array(
            'kode' => $kode,
            'nama' => $nama,
            'alamat' => $alamat,
            'telp' => $telp,
            'kota' => $kota,
            'tgl_masuk' => $tgl_masuk
        );
        $this->pemasuk->update_pemasok($kode, $data);
            return redirect('/data_pemasuk')->with('success', 'Data berhasil diubah');
    }

    public function hapus_pemasok($id){
        $this->pemasuk->hapus($id);
        return redirect('/data_pemasuk')->with('success', 'Data berhasil dihapus');
    }

    public function tambah_peminjam(Request $request)
    {
        $message = [
            'kd.required' => 'kode barang wajib diisi',
            'nama.required' => 'nama wajib diisi',
            'alamat' => 'alamat wajib diisi',
            'telp.required' => 'No telepon wajib diisi',
            'kota.required' => 'kota wajib diisi',
            'tgl_masuk.required' => 'tanggal masuk wajib diisi',
            'jabatan.required' => 'jabatan wajib diisi'
        ];

        $validated = $request->validate([
            'kd' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'telp' => 'required',
            'kota' => 'required',
            'tgl_masuk' => 'required',
            'jabatan' => 'required'
        ], $message);

        $kode = $request->input('kd');
        $nama = $request->input('nama');
        $alamat = $request->input('alamat');
        $telp = $request->input('telp');
        $kota = $request->input('kota');
        $tgl_masuk = $request->input('tgl_masuk');
        $jabatan = $request->input('jabatan');

        $data = array(
            'kode' => $kode,
            'nama' => $nama,
            'alamat' => $alamat,
            'telp' => $telp,
            'kota' => $kota,
            'tgl_masuk' => $tgl_masuk,
            'jabatan' => $jabatan
        );
        if (count($data) > 0) {
            $this->peminjam->tambah_peminjam($data);
            return redirect('/data_peminjam')->with('success', 'Data telah berhasil ditambahkan');
        }

        return view('/tambah_data_peminjam', ['data' => $validated]);
    }

    public function hapus($kode)
    {
        $this->barang->hapus($kode);
        $this->notabeli->hapus($kode);

        return redirect('/data_barang')->with('success', 'Data telah berhasil dihapus');
    }

    public function hapus_transaksi($id){
        $this->transaksi->hapus2($id);
        return redirect('/histori')->with('success', 'Data telah berhasil dihapus');
    }

    public function pengembalian($id)
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

        $sum_stok = intval($jml_brg_pnjm) + intval($jml_stock);
        $data = ([
            'stock' => $sum_stok
        ]);

        // ddd([$row_transaksi]);
        if ($data) {
            $this->barang->update_brg($kodestr, $data);
            $this->transaksi->update_transaksi4($id);
            return redirect('/histori')->with('success', 'Pengembalian barang berhasil');
        } else {
            return redirect('/histori')->with('error', 'Pengembalian barang gagal');
        }
    }
}
