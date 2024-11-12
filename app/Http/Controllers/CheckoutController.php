<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; // Pastikan model Product diimpor

class CheckoutController extends Controller
{
    // Menampilkan detail produk berdasarkan ID
    public function index($id)
    {
        // Ambil detail produk berdasarkan ID
        $product = Product::find($id);

        // Cek apakah produk ditemukan
        if (!$product) {
            return abort(404); // Jika tidak ditemukan, tampilkan halaman 404
        }

        // Kirim data produk ke view checkout
        return view('checkout', compact('product'));
    }

    // Menambahkan produk ke keranjang
    public function addToCart(Request $request)
    {
        // Ambil ID produk dari request
        $productId = $request->input('product_id');
        $cart = session()->get('cart', []); // Ambil keranjang dari session, atau buat array kosong jika belum ada

        // Cek apakah produk sudah ada di keranjang
        if (isset($cart[$productId])) {
            $cart[$productId]['quantity']++; // Jika ada, tambahkan jumlahnya
        } else {
            // Jika tidak ada, tambahkan produk baru ke keranjang
            $cart[$productId] = [
                'quantity' => 1,
                // Tambahkan informasi produk yang diperlukan, seperti nama dan harga
                // Anda mungkin ingin mengambil produk dari database untuk menambah detail
                'name' => Product::find($productId)->name, // Contoh menambahkan nama produk
                'price' => Product::find($productId)->price, // Contoh menambahkan harga produk
            ];
        }

        // Simpan kembali keranjang ke session
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Produk berhasil ditambahkan ke keranjang!'); // Redirect dengan pesan sukses
    }
}
