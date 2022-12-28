<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'pbuser';
    protected $primarykey = 'id';
    public $timestamps = false;

    public function register_input($data)
    {
        DB::table($this->table)->insert($data);
    }

    public function view_register()
    {
        $data = DB::table($this->table)
            ->select('*')
            ->join('pbpeminjam', 'pbuser.kode', '=', 'pbpeminjam.kode')
            ->where('level', '3')
            ->get();
        return $data;
    }

    protected $fillable = [
        'uname',
        'name',
        'email',
        'upass',
        'level'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function cek($username)
    {
        $data = DB::table($this->table)->where('uname', $username)->first();
        return $data;
    }
}
