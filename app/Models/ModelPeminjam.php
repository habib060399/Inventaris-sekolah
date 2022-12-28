<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ModelPeminjam extends Model
{
    use HasFactory;

    protected $table = 'pbpeminjam';
    public $timestamps = false;

    public function tambah_peminjam($data)
    {
        DB::table($this->table)->insert($data);
    }

    public function data_peminjam()
    {
        $data = DB::table($this->table)
            ->select('*')
            ->join('pbuser', 'pbpeminjam.kode', '=', 'pbuser.kode')
            ->get();

        return $data;
    }
}
