<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HalamanController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\CheckoutController;

// Halaman utama
Route::get('/home', [HalamanController::class, 'home'])->name('home');
Route::get('/about', [HalamanController::class, 'about'])->name('about');
Route::get('/menu', [HalamanController::class, 'menu'])->name('menu');

// Contact
Route::get('/contact', [ContactController::class, 'showForm'])->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

// Gallery
Route::resource('gallery', GalleryController::class);

// Keranjang
Route::get('/keranjang', [KeranjangController::class, 'index'])->name('keranjang.index'); // Tampilkan keranjang
Route::post('/keranjang', [KeranjangController::class, 'store'])->name('keranjang.store'); // Tambah ke keranjang
Route::put('/keranjang/{id}', [KeranjangController::class, 'update'])->name('keranjang.update'); // Update jumlah produk
Route::delete('/keranjang/{id}', [KeranjangController::class, 'destroy'])->name('keranjang.destroy'); // Hapus item dari keranjang
Route::get('/keranjang/clear', [KeranjangController::class, 'clear'])->name('keranjang.clear'); // Kosongkan keranjang

// Checkout
Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');

// Produk
Route::get('/product/{id}', [HalamanController::class, 'show'])->name('product.details');

// Posts
Route::resource('/posts', PostController::class);
