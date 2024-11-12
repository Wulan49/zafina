@extends('welcome')

@section('content')
<div class="container mt-5">
    <h2>Data Shop - ZFN Sport</h2>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <style>
    body {
        background: linear-gradient(to right, #e6e9f0, #eef1f5);
        font-family: 'Roboto', sans-serif;
        display: flex;
        flex-direction: column;
        min-height: 100vh;
    }

    .container {
        flex: 1; /* This ensures the container expands to fill available space */
    }

    h2 {
        margin-bottom: 20px;
        color: #2c3e50;
        text-align: center;
        text-transform: uppercase;
        font-weight: 700;
        font-size: 2rem;
        text-shadow: 2px 2px 3px rgba(0, 0, 0, 0.2);
    }

    .table {
        width: 100%;
        background: white;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
        margin-top: 20px;
    }

    th {
        background: linear-gradient(135deg, #343a40, #495057);
        color: white;
        text-align: center;
        padding: 15px;
        font-size: 1.2rem;
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
    }

    td {
        text-align: center;
        padding: 15px;
        transition: background-color 0.3s, transform 0.3s;
    }

    .btn {
        border-radius: 5px;
        padding: 8px 12px;
        font-weight: 500;
    }

    .btn-warning {
        background: #007bff;
        color: #fff;
        border: none;
        margin-right: 5px;
    }

    .btn-danger {
        background: #dc3545;
        color: #fff;
        border: none;
    }

    .footer {
        background: #343a40;
        color: #ffffff;
        padding: 20px 0;
        text-align: center;
        margin-top: auto; /* This pushes the footer to the bottom */
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
    }

    .footer h4 {
        font-size: 1.2rem;
        margin-bottom: 10px;
    }

    .footer p {
        margin: 0;
        font-size: 0.9rem;
    }

    .footer a {
        color: #ffffff;
        text-decoration: none;
        margin: 0 10px;
    }

    .footer a:hover {
        color: #d1d1d1;
    }

    .social-icons {
        margin-top: 10px;
    }

    .social-icons a {
        display: inline-block;
        margin: 0 5px;
        color: #ffffff;
        font-size: 1.2rem;
        transition: color 0.3s;
    }

    .social-icons a:hover {
        color: #d1d1d1;
    }

    </style>

    <div class="content">
        <!-- Button Tambah Produk -->
        <div class="mb-3 text-end">
            <a href="{{ route('blog.create') }}" class="btn btn-success">Tambah Shop</a>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th>Gambar</th>
                    <th>Judul</th>
                    <th>Keterangan</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($blogs as $blog)
                    <tr>
                        <td><img src="{{ asset('storage/blogs/' . $blog->image) }}" alt="{{ $blog->product }}" width="100"></td>
                        <td>{{ $blog->product }}</td>
                        <td>{{ $blog->keterangan }}</td>
                        <td>{{ number_format($blog->harga, 2) }} IDR</td>
                        <td>
                            <a href="{{ route('blog.edit', $blog->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('blog.destroy', $blog->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>

@endsection
