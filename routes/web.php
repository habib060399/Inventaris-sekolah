<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerIndex;
use App\Http\Controllers\ControllerLaporan;
use App\Http\Controllers\ControllerMaster;
use App\Http\Controllers\ControllerTransaksi;
use App\Http\Controllers\ControllerUser;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('layout');
// });

//login
Route::get('/', [ControllerUser::class, 'loginindex']);
//ke halaman admin
Route::get('/admin', [ControllerIndex::class, 'index']);
//ke halaman user
Route::get('/user', [ControllerUser::class, 'index']);

Route::post('/auth', [ControllerUser::class, 'login']);

Route::get('/logout', [ControllerUser::class, 'logout'])->name('logout');

Route::get('/register', [ControllerUser::class, 'registerindex']);

Route::post('/register', [ControllerUser::class, 'registerinput']);
Route::get('/view_register', [ControllerUser::class, 'view_regis']);

Route::get('/transaksi_barang_keluar', [ControllerTransaksi::class, 'index_brg_keluar']);
Route::get('/transaksi_pembelian', [ControllerTransaksi::class, 'index_pembelian']);

Route::get('/proses_terima/{id}', [ControllerTransaksi::class, 'terima']);
Route::get('/proses_tolak/{id}', [ControllerTransaksi::class, 'tolak']);


Route::get('/tambah_barang', [ControllerMaster::class, 'barang']);
Route::post('/proses_tambah_barang', [ControllerMaster::class, 'tambah_barang']);

Route::get('/tambah_data_pemasuk', [ControllerMaster::class, 'pemasuk']);
Route::post('/proses_data_pemasuk', [ControllerMaster::class, 'tambah_pemasuk']);
Route::get('/edit_pemasuk/{id}', [ControllerMaster::class, 'edit_pemasuk'])->name('edit.pemasuk');
Route::post('/proses_edit_pemasok', [ControllerMaster::class, 'edit_pemasok']);
Route::get('/hapus_pemasok/{id}', [ControllerMaster::class, 'hapus_pemasok']);


Route::get('/tambah_data_peminjam', [ControllerMaster::class, 'peminjam']);
Route::post('/proses_data_peminjam', [ControllerMaster::class, 'tambah_peminjam']);

Route::get('/data_barang', [ControllerMaster::class, 'index_brg']);
Route::get('/data_peminjam', [ControllerMaster::class, 'index_peminjam']);
Route::get('/data_pemasuk', [ControllerMaster::class, 'index_pemasuk']);
Route::get('/edit_barang/{id}', [ControllerMaster::class, 'edit']);
Route::post('/update_barang', [ControllerMaster::class, 'update_barang'])->name('edit.barang');
Route::get('/hapus/{id}', [ControllerMaster::class, 'hapus']);
Route::get('/sum/{value?}', [ControllerUser::class, 'value'])->name('sum.value');
Route::get('/pengembalian2/{id}', [ControllerMaster::class, 'pengembalian']);
Route::get('/hapus_transaksi/{kode}', [ControllerMaster::class, 'hapus_transaksi'])->name('kembali');


Route::get('/laporan_pembelian', [ControllerLaporan::class, 'index_pembelian']);
Route::get('/cetak_brg_keluar', [ControllerLaporan::class, 'cetak_brg_keluar']);
Route::get('/cetak_pembelian', [ControllerLaporan::class, 'cetak_brg_beli']);


Route::get('/laporan_barang', [ControllerLaporan::class, 'index_barang']);
Route::get('/cetak_barang', [ControllerLaporan::class, 'cetak_barang']);
Route::get('/cetak_stok/{data?}', [ControllerLaporan::class, 'cetak_stok'])->name('cetak.stok');

Route::get('/laporan_brg_keluar', [ControllerLaporan::class, 'index_brg_keluar']);

Route::get('/user', [ControllerUser::class, 'index']);
Route::get('/tambah_pinjam_barang', [ControllerUser::class, 'pinjam_barang']);
Route::get('/status_pinjam', [ControllerUser::class, 'status_pinjam']);
Route::post('/proses_pinjam', [ControllerUser::class, 'proses_pinjam']);
Route::get('/pengembalian/{id}', [ControllerUser::class, 'proses_pengembalian']);


Route::get('/histori', [ControllerTransaksi::class, 'index_history'])->middleware('session');
