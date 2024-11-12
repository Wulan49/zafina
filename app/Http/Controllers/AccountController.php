<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index()
    {
        return view('akun'); // Pastikan file 'akun.blade.php' ada di resources/views/
    }

    public function showShop()
    {
        return view('shop');
    }

    public function showStorage()
    {
        return view('storage'); // sale
    }

    public function showStore()
    {
        return view('store'); // home
    }
}


