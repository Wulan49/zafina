<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ShopController extends Controller
{
    /**
     * index
     *
     * @return void
     */

    public function index()
    {
        $shops = Shop::latest()->paginate(10);
        return view('shop.index', compact('shops'));
    }

    /**
     * create
     *
     * @return void
     */
    public function create()
    {
        return view('shop.create');
    }

    /**
     * store
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'title' => 'required|string|max:255',

            'keterangan' => 'nullable|string',
            'harga' => 'required|numeric',
        ]);


        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('shops', 'public');
        }

        Shop::create([
            'image' => $path,
            'title' => $request->title,

            'keterangan' => $request->keterangan,
            'harga' => $request->harga,
        ]);

        return redirect()->route('shop.index')->with('success', 'Shop created successfully.');
    }

    /**
     * edit
     *
     * @param Shop $shop
     * @return void
     */
    public function edit(Shop $shop)
    {
        return view('shop.edit', compact('shop'));
    }

    /**
     * update
     *
     * @param Request $request
     * @param Shop $shop
     * @return void
     */
    public function update(Request $request, Shop $shop)
    {
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'title' => 'required|string|max:255',

            'keterangan' => 'nullable|string',
            'harga' => 'required|numeric',
        ]);

        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($shop->image) {
                Storage::disk('public')->delete($shop->image);
            }
            $path = $request->file('image')->store('images/shops', 'public');
        }

        // Update entri di tabel shops
        $shop->update([
            'image' => $request->hasFile('image') ? $path : $shop->image,
            'title' => $request->title,
            'keterangan' => $request->keterangan,
            'harga' => $request->harga,
        ]);

        return redirect()->route('shop.index')->with('success', 'Shop updated successfully.');
    }

    /**
     * destroy
     *
     * @param Shop $shop
     * @return void
     */
    public function destroy(Shop $shop)
    {
        // Hapus gambar jika ada
        if ($shop->image) {
            Storage::disk('public')->delete($shop->image);
        }

        $shop->delete();

        return redirect()->route('shop.index')->with('success', 'Shop deleted successfully.');
    }
}
