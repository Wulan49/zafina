<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ShopController;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/shop', [AccountController::class, 'showShop'])->name('shop');
Route::get('/sale', function () {
    return view('sale');
});

Route::get('/confirm', function () {
    return view('confirm');
});

Route::get('/keranjang', function () {
    return view('keranjang');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/shop', function () {
    return view('shop');
});


// Route untuk halaman checkout
Route::get('/checkout/{id}', [CheckoutController::class, 'index']);

// Route untuk menambahkan produk ke keranjang
Route::post('/keranjang', [CheckoutController::class, 'addToCart'])->name('cart.add');

// Route untuk halaman keranjang
Route::get('/keranjang', function () {
    return view('keranjang', compact('cart'));
});

Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');
// Users Routes
Route::middleware(['auth', 'user-access:user'])->group(function () {

    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
});
// Super Admin Routes
Route::middleware(['auth', 'user-access:super-admin'])->group(function () {

    Route::get('/super-admin/dashboard', [HomeController::class, 'superAdminDashboard'])->name('super.admin.dashboard');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/akun', [AccountController::class, 'index'])->name('akun');

Route::get('/storage', [AccountController::class, 'showStorage'])->name('storage');
Route::get('/store', [AccountController::class, 'showStore'])->name('store');
Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
});

Route::resource('blog', BlogController::class);
Route::resource('shop', ShopController::class);


