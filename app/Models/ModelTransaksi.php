<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ModelTransaksi extends Model
{
    use HasFactory;

    protected $table = 'pbtransaksi';

    public function data_transaksi()
    {
        $data = DB::table($this->table)
            ->select('*')
            ->get();

        return $data;
    }

    public function data_barang($uname)
    {
        $data = DB::table($this->table)->where('uname', $uname)->get();

        return $data;
    }

    public function get_row($id)
    {
        $data = DB::table($this->table)->where('id', $id)->first();

        return $data;
    }

    public static function tambah_transaksi($data)
    {
        DB::table('pbtransaksi')->insert($data);
    }

    public static function update_transaksi($id)
    {
        $data = DB::table('pbtransaksi')
            ->where('id', $id)
            ->update(['status' => 'pinjaman diterima']);
        //   ddd($data);
    }

    public static function update_transaksi2($id)
    {
        DB::table('pbtransaksi')
            ->where('id', $id)
            ->update(['status' => 'pinjaman ditolak',
                        'jml_barang' => null
        ]);
    }

    public static function update_transaksi3($id)
    {
        DB::table('pbtransaksi')
            ->where('id', $id)
            ->update(['status' => 'Proses Pengembalian']);
    }

    public static function update_transaksi4($id)
    {
        DB::table('pbtransaksi')
            ->where('id', $id)
            ->update(['jml_barang' => null,
                       'status' => 'pengembalian berhasil' 
        ]);
    }   

    public function A($id){
        $data = DB::table('pbtransaksi')
        ->select('*')
        ->where('id', $id)
        ->get();
        return $data;
    }

    public static function brg_keluar()
    {
        $data = DB::table('pbtransaksi')
            ->where('status', 'pinjaman diterima')
            ->get();

        return $data;
    }

    public static function cari_brg_keluar($data)
    {
        $data = DB::table('pbtransaksi')
            ->where('kdbarang', $data)
            ->Where('status', 'pinjaman diterima')
            ->get();

        return $data;
    }

    public function hapus($kode)
    {
        DB::table($this->table)->where('kdbarang', '=', $kode)->delete();
    }

    public function hapus2($id)
    {
        DB::table($this->table)->where('id', '=', $id)->delete();
    }
}
