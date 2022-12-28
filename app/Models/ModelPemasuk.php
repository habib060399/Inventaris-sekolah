<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ModelPemasuk extends Model
{
    use HasFactory;

    protected $table = 'pbpemasok';
    public $timestamps = false;

    public function tambah_pemasuk($data)
    {
        DB::table($this->table)->insert($data);
    }

    public function data_pemasuk()
    {
        $data = DB::table($this->table)
            ->select('*')
            ->get();

        return $data;
    }

    public function row_pemasok($kode){
        $data = DB::table($this->table)->where('kode', $kode)->first();
        return $data;
    }

    public function update_pemasok($kode, $data){
        DB::table($this->table)->where('kode', $kode)->update($data);
    }

    public function hapus($id){
        DB::table($this->table)->where('id', $id)->delete();
    }
}
