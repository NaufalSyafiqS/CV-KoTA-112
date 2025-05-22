<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Models\Member; // Penting: Import model Member jika menggunakan Route Model Binding

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

// Route for the Home page (using your existing setup)
Route::get('/', function () {
    return view('index');
})->name('index');

// Route for the About page displaying all members (Already correct)
Route::get('/about', [AboutController::class, 'index'])->name('about');

// --- UNCOMMENT DAN AKTIFKAN ROUTE UNTUK DETAIL PROFIL ANGGOTA ---
// Ini akan mencocokkan URL seperti /member/1, /member/2, dst.
// Menggunakan Route Model Binding ({member}) secara otomatis akan mengambil Member model
// Pastikan nama wildcard {member} cocok dengan parameter method show(Member $member) di AboutController
Route::get('/member/{member}', [AboutController::class, 'show'])->name('member.show');

// Jika Anda memilih method show(id) tanpa Route Model Binding, gunakan ini:
// Route::get('/member/{id}', [AboutController::class, 'show'])->name('member.show');
// Tapi disarankan menggunakan Route Model Binding ({member}).