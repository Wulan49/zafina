<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data Shop - ZFN Sport</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Additional CSS for better aesthetics */
        body {
            background: linear-gradient(135deg, #0f4c75, #00b3e3); /* Elegant deep blue to soft cyan gradient */
            font-family: 'Roboto', sans-serif; /* Modern font */
            color: #333; /* Darker text color for better contrast */
        }

        .container {
            background: rgba(255, 255, 255, 0.9); /* Slightly more opaque for better readability */
            border-radius: 20px; /* More pronounced rounded corners */
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.25); /* Deeper shadow for a more lifted effect */
            padding: 40px; /* Increased padding */
            margin-top: 50px; /* Spacing from the top */
        }

        h2 {
            text-align: center; /* Centered title */
            margin-bottom: 20px; /* Spacing below the title */
            color: #0f4c75; /* Title color matching the background */
        }

        .form-group label {
            font-weight: bold; /* Bold labels */
            color: #0f4c75; /* Label color */
        }

        .btn {
            border-radius: 20px; /* More rounded buttons */
            padding: 10px 20px; /* Increased padding for buttons */
            font-size: 16px; /* Larger font for buttons */
        }

        .btn-primary {
            background-color: #00b3e3; /* Primary button color */
            border: none; /* Remove border */
        }

        .btn-primary:hover {
            background-color: #0095c8; /* Darker shade on hover */
        }

        .btn-warning {
            background-color: #ffcd39; /* Warning button color */
            border: none; /* Remove border */
        }

        .btn-warning:hover {
            background-color: #e6b72a; /* Darker shade on hover */
        }

        .alert {
            margin-top: 10px; /* Spacing above alert messages */
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Tambah Data Shop</h2> <!-- Added a title -->
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <form action="{{ route('shop.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label>GAMBAR</label>
                                <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">
                                @error('image')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>JUDUL</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" placeholder="Masukkan Judul Shop">
                                @error('title')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>KETERANGAN</label>
                                <input type="text" class="form-control @error('keterangan') is-invalid @enderror" name="keterangan" value="{{ old('keterangan') }}" placeholder="Masukkan Keterangan (opsional)">
                                @error('keterangan')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>HARGA</label>
                                <input type="number" class="form-control @error('harga') is-invalid @enderror" name="harga" value="{{ old('harga') }}" placeholder="Masukkan Harga" step="0.01">
                                @error('harga')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                            <button type="reset" class="btn btn-md btn-warning">RESET</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
