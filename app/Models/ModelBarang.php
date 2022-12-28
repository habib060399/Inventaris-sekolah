<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ModelBarang extends Model
{
    use HasFactory;

    protected $table = 'pbbarang';
    public $timestamps = false;
    protected $fillable = [
        'hrgBeli',
        'stock',
        'ket',
        'status',
        'merk',
        'tahun_pembuatan'
    ];
    protected $guarded = [];


    public function tambah_barang($data)
    {
        DB::table($this->table)->insert($data);
    }

    public function data_barang()
    {
        $data = DB::table($this->table)
            ->select('*')
            ->get();

        return $data;
    }

    public function get_row($kode)
    {
        $data = DB::table($this->table)->where('kode', $kode)->first();

        return $data;
    }

    public function cari_barang($data)
    {
        $data = DB::table($this->table)
            ->select('*')
            ->where('kode', 'like', "{$data}%")
            ->get();

        return $data;
    }
    // ->join('contacts', 'users.id', '=', 'contacts.user_id')
    public function edit($id)
    {
        $data = DB::table($this->table)
            ->join('pbnotabeli', 'pbbarang.kode', '=', 'pbnotabeli.kdbarang')
            ->join('pbpemasok', 'pbpemasok.kode', '=', 'pbnotabeli.kdpemasok')
            ->where('pbbarang.kode', $id)
            ->first();
        return $data;
    }

    public function update_brg($id, $data)
    {
        DB::table($this->table)
            ->where('kode', $id)
            ->update($data);
    }

    public function up_brg_pinjam($kode, $data)
    {
        DB::table($this->table)
            ->where('kode', $kode)
            ->update($data);
    }

    public function hapus($kode)
    {
        $deleted = DB::table($this->table)->where('kode', '=', $kode)->delete();
    }
}
