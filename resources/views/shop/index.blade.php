@extends('welcome')

@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Data Shop - ZFN Sport</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

        <style>
            body {
                background: linear-gradient(to right, #e6e9f0, #eef1f5);
                font-family: Arial, sans-serif;
            }

            .container {
                margin-top: 3rem;
            }

            .card {
                border-radius: 15px;
                border: none;
                box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
                background: linear-gradient(135deg, #ffffff, #f8f9fa);
                transition: transform 0.3s ease, box-shadow 0.3s ease;
            }

            .card:hover {
                transform: translateY(-10px);
                box-shadow: 0 12px 24px rgba(0, 0, 0, 0.3);
            }

            .card-body {
                padding: 2rem;
            }

            .btn-success {
                background: linear-gradient(135deg, #28a745, #218838);
                border: none;
                color: #fff;
                font-weight: bold;
                padding: 10px 20px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
                transition: transform 0.3s ease, box-shadow 0.3s ease;
            }

            .btn-success:hover {
                transform: translateY(-5px);
                box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
                background: linear-gradient(135deg, #218838, #1e7e34);
            }

            .table {
                margin-top: 1rem;
            }

            .table thead th {
                background: linear-gradient(135deg, #343a40, #495057);
                color: #fff;
                border: none;
            }

            .table tbody tr {
                background-color: #fff;
                transition: background-color 0.3s, transform 0.3s;
            }

            .table tbody tr:hover {
                background-color: #f1f1f1;
                transform: scale(1.01);
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            }

            .table td,
            .table th {
                vertical-align: middle;
                text-align: center;
            }

            .rounded {
                border-radius: 8px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            }

            .btn-primary,
            .btn-danger {
                border: none;
                font-weight: bold;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
                transition: transform 0.3s ease, box-shadow 0.3s ease;
            }

            .btn-primary:hover {
                background: #0056b3;
                transform: translateY(-3px);
                box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
            }

            .btn-danger:hover {
                background: #c82333;
                transform: translateY(-3px);
                box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
            }

            .alert {
                margin: 2rem 0;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                border-radius: 10px;
            }
        </style>
    </head>

    <body>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="text-center mb-4">Data Shop - ZFN Sport</h2>
                            <a href="{{ route('shop.create') }}" class="btn btn-md btn-success mb-3">Tambah Shop</a>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">Gambar</th>
                                        <th scope="col">Judul</th>
                                        <th scope="col">Keterangan</th>
                                        <th scope="col">Harga</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($shops as $shop)
                                        <tr>
                                            <td><img src="{{ Storage::url($shop->image) }}" alt="{{ $shop->title }}"
                                                    width="100"></td>
                                            </td>
                                            <td>{{ $shop->title }}</td>
                                            <td>{{ $shop->keterangan }}</td>
                                            <td>{{ number_format($shop->harga, 2, ',', '.') }} IDR</td>
                                            <td>
                                                <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                    action="{{ route('shop.destroy', $shop->id) }}" method="POST">
                                                    <a href="{{ route('shop.edit', $shop->id) }}"
                                                        class="btn btn-sm btn-primary">Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="5">
                                                <div class="alert alert-danger text-center">
                                                    Data Shop belum Tersedia.
                                                </div>
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                            {{ $shops->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

        <script>
            // Message with toastr
            @if (session()->has('success'))
                toastr.success('{{ session('success') }}', 'Berhasil!');
            @elseif (session()->has('error'))
                toastr.error('{{ session('error') }}', 'Gagal!');
            @endif
        </script>

    </body>

    </html>
@endsection
