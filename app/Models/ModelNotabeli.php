<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ModelNotabeli extends Model
{
    use HasFactory;

    protected $table = "pbnotabeli";

    public function tambah_nota($data)
    {
        DB::table($this->table)->insert($data);
    }

    public function data_nota()
    {
        $data = DB::table($this->table)
            ->select('*')
            ->join('pbpemasok', 'pbpemasok.kode', '=', 'pbnotabeli.kdpemasok')
            ->join('pbbarang', 'pbnotabeli.kdbarang', '=', 'pbbarang.kode')
            ->get();

        return $data;
    }

    public function cari_pembelian($data)
    {
        $data = DB::table($this->table)
            ->select('*')
            ->join('pbpemasok', 'pbpemasok.kode', '=', 'pbnotabeli.kdpemasok')
            ->where('kdbarang', 'like', "{$data}%")
            ->get();
        return $data;
    }

    public function update_not($id, $data){    
            DB::table($this->table)
            ->where('kdbarang', $id)
            ->update($data);        
    }

    public function hapus($kode){
        $deleted = DB::table($this->table)->where('kdbarang', '=', $kode)->delete();
    }
}
