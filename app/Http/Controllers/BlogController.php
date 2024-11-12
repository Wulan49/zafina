<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view('blog.index', compact('blogs'));
    }

    /**
     * create
     *
     * @return void
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * store
     *
     * @param  mixed $request
     * @return void
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'image' => 'required|image|mimes:png,jpg,jpeg',
            'product' => 'required',
            'keterangan' => 'nullable|string',
            'harga' => 'required|numeric',
            'diskon' => 'nullable|numeric|min:0|max:100',
        ]);

        // Upload image
        $image = $request->file('image');
        $image->storeAs('public/blogs', $image->hashName());

        $blog = Blog::create([
            'image' => $image->hashName(),
            'product' => $request->product, // Menggunakan 'product' sebagai atribut
            'keterangan' => $request->keterangan,
            'harga' => $request->harga,
            'diskon' => $request->diskon,
        ]);

        if ($blog) {
            // Redirect dengan pesan sukses
            return redirect()->route('blog.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            // Redirect dengan pesan error
            return redirect()->route('blog.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /**
     * edit
     *
     * @param  mixed $blog
     * @return void
     */
    public function edit(Blog $blog)
    {
        return view('blog.edit', compact('blog'));
    }

    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $blog
     * @return void
     */
    public function update(Request $request, Blog $blog)
    {
        $this->validate($request, [
            'product' => 'required',
            'keterangan' => 'nullable|string',
            'harga' => 'required|numeric',
            'diskon' => 'nullable|numeric|min:0|max:100',
        ]);

        // Get data Blog by ID
        $blog = Blog::findOrFail($blog->id);

        if ($request->file('image') == "") {
            $blog->update([
                'product' => $request->product,
                'keterangan' => $request->keterangan,
                'harga' => $request->harga,
                'diskon' => $request->diskon,
            ]);
        } else {
            // Hapus old image
            Storage::disk('local')->delete('public/blogs/' . $blog->image);

            // Upload new image
            $image = $request->file('image');
            $image->storeAs('public/blogs', $image->hashName());

            $blog->update([
                'image' => $image->hashName(),
                'product' => $request->product,
                'keterangan' => $request->keterangan,
                'harga' => $request->harga,
                'diskon' => $request->diskon,
            ]);
        }

        if ($blog) {
            // Redirect dengan pesan sukses
            return redirect()->route('blog.index')->with(['success' => 'Data Berhasil Diupdate!']);
        } else {
            // Redirect dengan pesan error
            return redirect()->route('blog.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    /**
     * destroy
     *
     * @param  mixed $id
     * @return void
     */
    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        Storage::disk('local')->delete('public/blogs/' . $blog->image);
        $blog->delete();

        if ($blog) {
            // Redirect dengan pesan sukses
            return redirect()->route('blog.index')->with(['success' => 'Data Berhasil Dihapus!']);
        } else {
            // Redirect dengan pesan error
            return redirect()->route('blog.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}
