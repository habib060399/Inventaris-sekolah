<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ModelBarang;
use App\Models\ModelPemasuk;
use App\Models\ModelPeminjam;
use App\Models\ModelTransaksi;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ControllerUser extends Controller
{
    public function __construct()
    {
        $this->user = new User();
        $this->barang = new ModelBarang();
        $this->transaksi = new ModelTransaksi();
        $this->peminjam = new ModelPeminjam();
    }

    public function hidden()
    {
        $level = request()->session()->get('level');
        if ($level === 2) {
            $hidden = 'hidden';
        }
        $data = array(
            'hidden' => $hidden
        );
        return view('menu', $data);
    }

    public function index()
    {
        $barang = $this->barang->data_barang();
        $level = request()->session()->get('level');
        if ($level === 3) {
            // $iduser = request()->session()->get('iduser');
            $username = request()->session()->get('username');
            // $nama = request()->session()->get('nama');
            $data = array(
                'barang' => $barang,
                'nama' => request()->session()->get('nama'),
                'id_user' => request()->session()->get('iduser'),
            );
            return view('user.index', $data);
        } else {
            return redirect('/logout');
        }
    }

    public function loginindex()
    {
        return view('user/login');
    }


    public function registerindex()
    {
        $level = request()->session()->get('level');
        if ($level === 1 || $level === 2) {
            return view('/user/register');
        } else {
            return redirect('/logout');
        }
    }

    public function pinjam_barang()
    {
        $barang = $this->barang->data_barang();
        $level = request()->session()->get('level');
        if ($level === 3) {
            $data = array(
                'barang' => $barang,
                'nama' => request()->session()->get('nama'),
                'id_user' => request()->session()->get('iduser'),
            );
            return view('user.tambah_pinjam_barang', $data);
        }
    }

    public function status_pinjam()
    {
        $uname = request()->session()->get('username');
        $barang = $this->transaksi->data_barang($uname);
        $level = request()->session()->get('level');
        // ddd($level);
        if ($level === 3) {
            $data = array(
                'barang' => $barang,
                'nama' => request()->session()->get('nama'),
                'id_user' => request()->session()->get('iduser'),
            );
            return view('user.status_pinjam', $data);
        }
    }

    public function login(Request $request)
    {
        $username = $request->input('uname');
        $password = $request->input('upass');

        $user = $this->user->cek($username);
        $level = $user->level;
        $nama = $user->nama;
        $level = $user->level;
        $iduser = $user->id;
        // dd( $user->upass);
        if (Hash::check($password, $user->upass)) {
            // if ($user->upass === $password) {
            if ($user->level === 1) {
                // $komen = "";
                // $komen"2" = "";
                $hidden = "show";
                $request->session()->put('username', $username);
                $request->session()->put('level', $level);
                $request->session()->put('nama', $nama);
                $request->session()->put('hidden', $hidden);

                return redirect('/admin');
            } elseif ($user->level === 2) {
                $hidden = "hidden";
                $request->session()->put('username', $username);
                $request->session()->put('level', $level);
                $request->session()->put('nama', $nama);
                $request->session()->put('hidden', $hidden);

                return redirect('/admin');
            } elseif ($user->level === 3) {
                $request->session()->put('iduser', $iduser);
                $request->session()->put('username', $username);
                $request->session()->put('level', $level);
                $request->session()->put('nama', $nama);
                return redirect('/user');
            }
        } else {
            return redirect('/')->with('error', 'username dan password salah');
        }
    }

    public function registerinput(Request $request)
    {
        $message = [
            'uname.required' => 'Username Wajib diisi',
            'upass.required' => 'Password wajib diisi',
            'nama.required' => 'Nama wajib diisi',
            'email.required' => 'Email wajib diisi',
            'level.required' => 'Level wajib diisi',
            'telp.required' => 'Telp Wajib diisi',
            'alamat.required' => 'Alamat wajib diisi',
            'jabatan.required' => 'Jabatan wajib diisi',
            'kota.required' => 'Kota wajib diisi',
        ];

        $validated = $request->validate([
            'uname' => 'required|unique:pbuser',
            'upass' => 'required',
            'nama' => 'required',
            'email' => 'required',
            'level' => 'required',
            'telp' => 'required',
            'alamat' => 'required',
            'jabatan' => 'required',
            'kota' => 'required'
        ], $message);
        //insert data id 	kode 	nama 	alamat 	telp 	kota 	tgl_masuk 	jabatan 	
        $kode = $request->input('kode');
        $alamat = $request->input('alamat');
        $telp = $request->input('telp');
        $kota = $request->input('kota');
        $tgl_masuk =  date('y/m/d');
        $jabatan = $request->input('jabatan');
        $uname = $request->input('uname');
        $upass = $request->input('upass');
        $nama = $request->input('nama');
        $email = $request->input('email');
        $level = $request->input('level');

        $data = array(
            'uname' => $uname,
            'kode' => $kode,
            'upass' => Hash::Make($upass),
            'telp' => $telp,
            'alamat' => $alamat,
            'nama' => $nama,
            'email' => $email,
            'kota' => $kota,
            'jabatan' => $jabatan,
            'level' => $level,
            'tgl_masuk' => $tgl_masuk
        );

        $data2 = array(
            'nama' => $nama,
            'kode' => $kode,
            'alamat' => $alamat,
            'telp' => $telp,
            'kota' => $kota,
            'jabatan' => $jabatan,
            'tgl_masuk' => $tgl_masuk
        );

        if ($level === '3') {
            if (count($data2) > 0) {
                $this->peminjam->tambah_peminjam($data2);
            }
        }

        if (count($data) > 0) {
            $this->user->register_input($data);
            return redirect('/register')->with('success', 'Data telah berhasil ditambahkan');
        }
        return view('/register', ['data' => $validated]);
    }

    public function logout(Request $request)
    {
        $request->session()->forget('username');
        $request->session()->forget('level');
        $request->session()->forget('nama');

        return redirect('/');
    }
    public function view_regis()
    {
        $view_register = $this->peminjam->data_peminjam();
        return view('user/view_register', ['user' => $view_register]);
    }

    public function proses_pinjam(Request $request)
    {

        $message = [
            'nmBrg.required' => 'Nama barang harus diisi'
        ];
        $uname = request()->session()->get('username');
        $validated = $request->validate([
            'nmBrg' => 'required',
            'jml_pinjam' => 'required',
            'tgl_pinjam' => 'required',
            'tgl_kembali' => 'required',
            // 'keterangan' => 'required'
        ], $message);

        $jml = request()->input('jml_pinjam');
        $total = request()->input('total_barang');
        $kd_barang = request()->input('kode_barang');
        $con_jml = intval($jml);
        $con_total = intval($total);
        $sum = $con_total - $con_jml;

        // ddd($sum);
        if ($jml <= $total) {
            $data = ([
                'stock' => $sum
            ]);

            $validated = ([
                'uname' => $uname,
                'nama' => request()->session()->get('nama'),
                'nmBrg' => request()->input('nmBrg'),
                'kdbarang' => $kd_barang,
                'tgl_pinjam' => request()->input('tgl_pinjam'),
                'tgl_kembali' => request()->input('tgl_kembali'),
                'keterangan' => request()->input('keterangan'),
                'status' => 'Request Pinjam',
                'jml_barang' => $jml
            ]);

            // $this->barang->up_brg_pinjam($kd_barang, $data);
            ModelTransaksi::tambah_transaksi($validated);
            return redirect('/tambah_pinjam_barang')->with('success', 'Data berhasil ditambahkan');
        } else {
            return redirect('/tambah_pinjam_barang')->with('error', 'Jumlah barang tidak mencukupi');
        }
    }

    public function proses_pengembalian($id)
    {
        $this->transaksi->update_transaksi3($id);
        return redirect('/status_pinjam');
    }

    public function value(?string $sum)
    {
        return $sum;
    }
}
