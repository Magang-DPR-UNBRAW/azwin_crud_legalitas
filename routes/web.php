<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\MenuController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

// use Ramsey\Collection\Map\NamedParameterMap;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect('/login');
});

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login')->middleware('guest');

Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');
    Route::resource('menu', MenuController::class);

    // Referensi
    Route::get('/mahasiswa', [App\Http\Controllers\Referensi\MahasiswaController::class, 'index'])->name('Daftar mahasiswa');
    Route::get('/mahasiswa/create', [App\Http\Controllers\Referensi\MahasiswaController::class, 'create'])->name('Add mahasiswa');
    Route::post('/mahasiswa/add', [App\Http\Controllers\Referensi\MahasiswaController::class, 'store'])->name('Tambah mahasiswa');
    Route::get('/mahasiswa/{id}/detail', [App\Http\Controllers\Referensi\MahasiswaController::class, 'show'])->name('Detail mahasiswa');
    Route::get('/mahasiswa/{id}', [App\Http\Controllers\Referensi\MahasiswaController::class, 'edit'])->name('Edit mahasiswa');
    Route::post('/mahasiswa/{id}', [App\Http\Controllers\Referensi\MahasiswaController::class, 'update'])->name('Update mahasiswa');
    Route::delete('/mahasiswa/{id}', [App\Http\Controllers\Referensi\MahasiswaController::class, 'destroy'])->name('Hapus mahasiswa');

    Route::get('/tipe', [App\Http\Controllers\Referensi\TipeController::class, 'index'])->name('Daftar Tipe');
    Route::get('/tipe/add', [App\Http\Controllers\Referensi\TipeController::class, 'create'])->name('Add Tipe');
    Route::post('/tipe/add', [App\Http\Controllers\Referensi\TipeController::class, 'store'])->name('Tambah Tipe');
    Route::get('/tipe/{id}', [App\Http\Controllers\Referensi\TipeController::class, 'edit'])->name('Edit Tipe');
    Route::post('/tipe/{id}', [App\Http\Controllers\Referensi\TipeController::class, 'update'])->name('Update Tipe');
    Route::put('/tipe/{id}', [App\Http\Controllers\Referensi\TipeController::class, 'destroy'])->name('Hapus Tipe');

    Route::get('/dokumen', [App\Http\Controllers\Referensi\DokumenLegalitasController::class, 'index'])->name('Daftar DokumenLegalitas');
    Route::get('/dokumen/add', [App\Http\Controllers\Referensi\DokumenLegalitasController::class, 'create'])->name('Add DokumenLegalitas');
    Route::post('/dokumen/add', [App\Http\Controllers\Referensi\DokumenLegalitasController::class, 'store'])->name('Tambah DokumenLegalitas');
    Route::get('/dokumen/{id}', [App\Http\Controllers\Referensi\DokumenLegalitasController::class, 'edit'])->name('Edit DokumenLegalitas');
    Route::post('/dokumen/{id}', [App\Http\Controllers\Referensi\DokumenLegalitasController::class, 'update'])->name('Update DokumenLegalitas');
    Route::put('/dokumen/{id}', [App\Http\Controllers\Referensi\DokumenLegalitasController::class, 'destroy'])->name('Hapus DokumenLegalitas');

    Route::get('/jenis', [App\Http\Controllers\Referensi\JenisController::class, 'index'])->name('Daftar Jenis');
    Route::get('/jenis/add', [App\Http\Controllers\Referensi\JenisController::class, 'create'])->name('Add Jenis');
    Route::post('/jenis/add', [App\Http\Controllers\Referensi\JenisController::class, 'store'])->name('Tambah Jenis');
    Route::get('/jenis/{id}', [App\Http\Controllers\Referensi\JenisController::class, 'edit'])->name('Edit Jenis');
    Route::post('/jenis/{id}', [App\Http\Controllers\Referensi\JenisController::class, 'update'])->name('Update Jenis');
    Route::put('/jenis/{id}', [App\Http\Controllers\Referensi\JenisController::class, 'destroy'])->name('Hapus Jenis');

    Route::get('/subjenis', [App\Http\Controllers\Referensi\SubjenisController::class, 'index'])->name('Daftar Subjenis');
    Route::get('/subjenis/add', [App\Http\Controllers\Referensi\SubjenisController::class, 'create'])->name('Add Subjenis');
    Route::post('/subjenis/add', [App\Http\Controllers\Referensi\SubjenisController::class, 'store'])->name('Tambah Subjenis');
    Route::get('/subjenis/{id}', [App\Http\Controllers\Referensi\SubjenisController::class, 'edit'])->name('Edit Subjenis');
    Route::post('/subjenis/{id}', [App\Http\Controllers\Referensi\SubjenisController::class, 'update'])->name('Update Subjenis');
    Route::put('/subjenis/{id}', [App\Http\Controllers\Referensi\SubjenisController::class, 'destroy'])->name('Hapus Subjenis');

    Route::get('/rekomendasi', [App\Http\Controllers\Referensi\RekomendasiController::class, 'index'])->name('Daftar Rekomendasi');
    Route::get('/rekomendasi/add', [App\Http\Controllers\Referensi\RekomendasiController::class, 'create'])->name('Add Rekomendasi');
    Route::post('/rekomendasi/add', [App\Http\Controllers\Referensi\RekomendasiController::class, 'store'])->name('Tambah Rekomendasi');
    Route::get('/rekomendasi/{id}', [App\Http\Controllers\Referensi\RekomendasiController::class, 'edit'])->name('Edit Rekomendasi');
    Route::post('/rekomendasi/{id}', [App\Http\Controllers\Referensi\RekomendasiController::class, 'update'])->name('Update Rekomendasi');
    Route::put('/rekomendasi/{id}', [App\Http\Controllers\Referensi\RekomendasiController::class, 'destroy'])->name('Hapus Rekomendasi');

    Route::get('/tahapan', [App\Http\Controllers\Referensi\TahapanController::class, 'index'])->name('Daftar Tahapan');
    Route::get('/tahapan/add', [App\Http\Controllers\Referensi\TahapanController::class, 'create'])->name('Add Tahapan');
    Route::post('/tahapan/add', [App\Http\Controllers\Referensi\TahapanController::class, 'store'])->name('Tambah Tahapan');
    Route::get('/tahapan/{id}', [App\Http\Controllers\Referensi\TahapanController::class, 'edit'])->name('Edit Tahapan');
    Route::post('/tahapan/{id}', [App\Http\Controllers\Referensi\TahapanController::class, 'update'])->name('Update Tahapan');
    Route::put('/tahapan/{id}', [App\Http\Controllers\Referensi\TahapanController::class, 'destroy'])->name('Hapus Tahapan');

    Route::get('/kesimpulan', [App\Http\Controllers\Referensi\KesimpulanController::class, 'index'])->name('Daftar Kesimpulan');
    Route::get('/kesimpulan/add', [App\Http\Controllers\Referensi\KesimpulanController::class, 'create'])->name('Add Kesimpulan');
    Route::post('/kesimpulan/add', [App\Http\Controllers\Referensi\KesimpulanController::class, 'store'])->name('Tambah Kesimpulan');
    Route::get('/kesimpulan/{id}', [App\Http\Controllers\Referensi\KesimpulanController::class, 'edit'])->name('Edit Kesimpulan');
    Route::post('/kesimpulan/{id}', [App\Http\Controllers\Referensi\KesimpulanController::class, 'update'])->name('Update Kesimpulan');
    Route::put('/kesimpulan/{id}', [App\Http\Controllers\Referensi\KesimpulanController::class, 'destroy'])->name('Hapus Kesimpulan');

    Route::get('/kegiatan', [App\Http\Controllers\Referensi\KegiatanController::class, 'index'])->name('Daftar Kegiatan');
    Route::get('/kegiatan/add', [App\Http\Controllers\Referensi\KegiatanController::class, 'create'])->name('Add Kegiatan');
    Route::post('/kegiatan/add', [App\Http\Controllers\Referensi\KegiatanController::class, 'store'])->name('Tambah Kegiatan');
    Route::get('/kegiatan/{id}', [App\Http\Controllers\Referensi\KegiatanController::class, 'edit'])->name('Edit Kegiatan');
    Route::post('/kegiatan/{id}', [App\Http\Controllers\Referensi\KegiatanController::class, 'update'])->name('Update Kegiatan');
    Route::put('/kegiatan/{id}', [App\Http\Controllers\Referensi\KegiatanController::class, 'destroy'])->name('Hapus Kegiatan');

    Route::get('/status', [App\Http\Controllers\Referensi\StatusProdukController::class, 'index'])->name('Daftar Status Produk');
    Route::get('/status/add', [App\Http\Controllers\Referensi\StatusProdukController::class, 'create'])->name('Add Status Produk');
    Route::post('/status/add', [App\Http\Controllers\Referensi\StatusProdukController::class, 'store'])->name('Tambah Status Produk');
    Route::get('/status/{id}', [App\Http\Controllers\Referensi\StatusProdukController::class, 'edit'])->name('Edit Status Produk');
    Route::post('/status/{id}', [App\Http\Controllers\Referensi\StatusProdukController::class, 'update'])->name('Update Status Produk');
    Route::put('/status/{id}', [App\Http\Controllers\Referensi\StatusProdukController::class, 'destroy'])->name('Hapus Status Produk');

    Route::get('/jabatan', [App\Http\Controllers\Referensi\JabatanController::class, 'index'])->name('Daftar Jabatan');
    Route::get('/jabatan/add', [App\Http\Controllers\Referensi\JabatanController::class, 'create'])->name('Add Jabatan');
    Route::post('/jabatan/add', [App\Http\Controllers\Referensi\JabatanController::class, 'store'])->name('Tambah Jabatan');
    Route::get('/jabatan/{id}', [App\Http\Controllers\Referensi\JabatanController::class, 'edit'])->name('Edit Jabatan');
    Route::post('/jabatan/{id}', [App\Http\Controllers\Referensi\JabatanController::class, 'update'])->name('Update Jabatan');
    Route::put('/jabatan/{id}', [App\Http\Controllers\Referensi\JabatanController::class, 'destroy'])->name('Hapus Jabatan');

    Route::get('/pengguna', [App\Http\Controllers\Referensi\PenggunaReferensiController::class, 'index'])->name('Daftar Pengguna Referensi');
    Route::get('/pengguna/add', [App\Http\Controllers\Referensi\PenggunaReferensiController::class, 'create'])->name('Add Pengguna Referensi');
    Route::post('/pengguna/add', [App\Http\Controllers\Referensi\PenggunaReferensiController::class, 'store'])->name('Tambah Pengguna Referensi');
    Route::get('/pengguna/{id}', [App\Http\Controllers\Referensi\PenggunaReferensiController::class, 'edit'])->name('Edit Pengguna Referensi');
    Route::post('/pengguna/{id}', [App\Http\Controllers\Referensi\PenggunaReferensiController::class, 'update'])->name('Update Pengguna Referensi');
    Route::put('/pengguna/{id}', [App\Http\Controllers\Referensi\PenggunaReferensiController::class, 'destroy'])->name('Hapus Pengguna Referensi');

    Route::get('/template', [App\Http\Controllers\Referensi\TemplateWAController::class, 'index'])->name('Daftar TemplateWA');
    Route::get('/template/add', [App\Http\Controllers\Referensi\TemplateWAController::class, 'create'])->name('Add TemplateWA');
    Route::post('/template/add', [App\Http\Controllers\Referensi\TemplateWAController::class, 'store'])->name('Tambah TemplateWA');
    Route::get('/template/{id}', [App\Http\Controllers\Referensi\TemplateWAController::class, 'edit'])->name('Edit TemplateWA');
    Route::post('/template/{id}', [App\Http\Controllers\Referensi\TemplateWAController::class, 'update'])->name('Update TemplateWA');
    Route::put('/template/{id}', [App\Http\Controllers\Referensi\TemplateWAController::class, 'destroy'])->name('Hapus TemplateWA');

    //Transaksi
    Route::get('/usulan', [App\Http\Controllers\Transaksi\UsulanController::class, 'index'])->name('Daftar Usulan');
    Route::get('/usulan/add', [App\Http\Controllers\Transaksi\UsulanController::class, 'create'])->name('Add Usulan');
    Route::post('/usulan/add', [App\Http\Controllers\Transaksi\UsulanController::class, 'store'])->name('Tambah Usulan');
    Route::get('/usulan/{id}', [App\Http\Controllers\Transaksi\UsulanController::class, 'edit'])->name('Edit Usulan');
    Route::post('/usulan/{id}', [App\Http\Controllers\Transaksi\UsulanController::class, 'update'])->name('Update Usulan');
    Route::put('/usulan/{id}', [App\Http\Controllers\Transaksi\UsulanController::class, 'destroy'])->name('Hapus Usulan');

    //Data Laporan
    // Route::get('/laporan', [App\Http\Controllers\Referensi\LaporanController::class, 'index'])->name('Daftar Laporan');
    // Route::get('/laporan/add', [App\Http\Controllers\Referensi\LaporanController::class, 'create'])->name('Add Laporan');
    // Route::post('/laporan/add', [App\Http\Controllers\Referensi\LaporanController::class, 'store'])->name('Tambah Laporan');
    // Route::get('/laporan/{id}', [App\Http\Controllers\Referensi\LaporanController::class, 'edit'])->name('Edit Laporan');
    // Route::post('/laporan/{id}', [App\Http\Controllers\Referensi\LaporanController::class, 'update'])->name('Update Laporan');
    // Route::put('/laporan/{id}', [App\Http\Controllers\Referensi\LaporanController::class, 'destroy'])->name('Hapus Laporan');

    // Route::get('/statistik', [App\Http\Controllers\Referensi\StatistikController::class, 'index'])->name('Daftar Statistik');
    // Route::get('/statistik/add', [App\Http\Controllers\Referensi\StatistikController::class, 'create'])->name('Add Statistik');
    // Route::post('/statistik/add', [App\Http\Controllers\Referensi\StatistikController::class, 'store'])->name('Tambah Statistik');
    // Route::get('/statistik/{id}', [App\Http\Controllers\Referensi\StatistikController::class, 'edit'])->name('Edit Statistik');
    // Route::post('/statistik/{id}', [App\Http\Controllers\Referensi\StatistikController::class, 'update'])->name('Update Statistik');
    // Route::put('/statistik/{id}', [App\Http\Controllers\Referensi\StatistikController::class, 'destroy'])->name('Hapus Statistik');
});
