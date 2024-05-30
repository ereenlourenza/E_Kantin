<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginCustomerController;
use App\Http\Controllers\LoginAdminController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CustomerHomeController;
use App\Http\Controllers\DescriptionProductController;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\QRISController;
use App\Http\Controllers\TunaiController;
use App\Http\Controllers\RiwayatTransaksiController;
use App\Http\Controllers\RatingdanReviewController;

// Admin
use App\Http\Controllers\KelolaAkunCustomerController;
use App\Http\Controllers\BerandaAdminController;
use App\Http\Controllers\InputLaporanController;
use App\Http\Controllers\TambahProductController;
use App\Http\Controllers\RatingdanReviewAdminController;
use App\Http\Controllers\SuntingProductController;
use App\Http\Controllers\LaporanPenjualanController;
use App\Http\Controllers\KelolaPesananController;
use App\Http\Controllers\LaporanController;

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
Route::get('/', [LoginCustomerController::class, 'showLoginForm'])->name('login.Customer');
Route::post('/loginCustomer', [LoginCustomerController::class, 'login'])->name('login.post');

Route::get('/Logout', [LoginCustomerController::class, 'showLoginForm'])->name('login.Customer');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register.form');
Route::post('/register', [RegisterController::class, 'register'])->name('register.post');

Route::get('/homepage', [CustomerHomeController::class, 'home'])->name('Customer.home');
Route::post('/homepage', [CustomerHomeController::class, 'handlePost'])->name('Customer.home.post');

Route::get('/description', [DescriptionProductController::class, 'index'])->name('Customer.productdeskripsi');

Route::get('/keranjang', [KeranjangController::class, 'index'])->name('Customer.keranjang');
// Route::post('/keranjang/tambah', [KeranjangController::class, 'tambah'])->name('Customer.keranjang.tambah');
// Route::post('/keranjang/hapus/{id}', [KeranjangController::class, 'hapus'])->name('Customer.keranjang.hapus');

Route::get('/pesanan', [PesananController::class, 'index'])->name('Customer.pesanan');

Route::get('/pembayaran', [PembayaranController::class, 'index'])->name('Customer.pembayaran');

Route::get('/qris', [QRISController::class, 'index'])->name('Customer.qris');

Route::get('/tunai', [TunaiController::class, 'index'])->name('Customer.tunai');

Route::get('/RiwayatTransaksi', [RiwayatTransaksiController::class, 'index'])->name('Customer.RiwayatTransaksi');

Route::get('/RatingdanReview', [RatingdanReviewController::class, 'index'])->name('Customer.RatingdanReview');


//  Admin 
Route::get('/loginAdmin', [LoginAdminController::class, 'showLoginForm'])->name('login.Admin');
Route::post('/loginAdmin', [LoginAdminController::class, 'login'])->name('login.post');

Route::get('/KelolaAkunCustomer', [KelolaAkunCustomerController::class, 'index'])->name('Admin.KelolaAkunCustomer');

Route::get('/BerandaAdmin', [BerandaAdminController::class, 'index'])->name('Admin.BerandaAdmin');

Route::get('/TambahProduct', [TambahProductController::class, 'index'])->name('Admin.TambahProduct');
Route::post('/TambahProduct', [TambahProductController::class, 'store'])->name('Admin.TambahProduct.store');

Route::get('/RatingdanReviewAdmin', [RatingdanReviewAdminController::class, 'index'])->name('Admin.RatingdanReview');

Route::get('/SuntingProduct', [SuntingProductController::class, 'index'])->name('Admin.SuntingProduct');

Route::get('/LaporanPenjualan', [LaporanPenjualanController::class, 'showLaporanPenjualan'])->name('Admin.LaporanPenjualan');
Route::get('/LaporanPenjualan/chart', [LaporanPenjualanController::class, 'chart'])->name('Admin.LaporanPenjualan.chart');
Route::get('/LaporanPenjualan/table', [LaporanPenjualanController::class, 'table'])->name('Admin.LaporanPenjualan.table');
Route::get('/LaporanPenjualan/export', [LaporanPenjualanController::class, 'export'])->name('Admin.LaporanPenjualan.export');
Route::post('/LaporanPenjualan/tambah-penjualan/{idPesanan}', [LaporanPenjualanController::class, 'tambahPenjualan'])->name('Admin.LaporanPenjualan.tambahPenjualan');


Route::get('/InputLaporan', [InputLaporanController::class, 'index'])->name('Admin.InputLaporan');
Route::post('/InputLaporan/store', [InputLaporanController::class, 'store'])->name('Admin.InputLaporan.store');
Route::post('/InputLaporan/batal', [InputLaporanController::class, 'batal'])->name('Admin.InputLaporan.batal');

Route::get('/KelolaPesanan', [KelolaPesananController::class, 'index'])->name('Admin.KelolaPesanan');
