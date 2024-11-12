<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZFN Sport</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet" />
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-100">
    <nav class="bg-blue-600 p-4 flex items-center justify-between">
        <div class="flex items-center space-x-2">
            <a href="/shop" class="text-white mr-2">
                <i class="fas fa-arrow-left"></i>
            </a>
            <div class="text-white text-2xl font-bold">ZFN</div>
            <div class="text-white text-sm">Sport</div>
        </div>

        <div class="flex space-x-4">
            <a href="/home" class="text-white">Home</a>
            <a href="/shop" class="text-white">Shop</a>
            <a href="/sale" class="text-white">Sale</a>
            <a href="/confirm" class="text-white">Confirm</a>
            <a class="text-white" href="#">Logout</a>
        </div>

        <div class="flex items-center space-x-4">
            <input class="px-2 py-1 rounded border border-gray-300" placeholder="Search" type="text" />
            <i class="fas fa-search text-white"></i>
            <i class="fas fa-user text-white"></i>
            <i class="fas fa-shopping-cart text-white"></i>
        </div>
    </nav>

    <div class="container mx-auto p-8">
        <div class="flex space-x-8">
            <div class="w-1/2">
                <img src="{{ $product->image }}" alt="{{ $product->name }}" width="300" height="300" />
            </div>
            <div class="w-1/2">
                <h1 class="text-xl font-bold">{{ $product->name }}</h1>
                <p class="text-xl font-bold mt-4">Rp. {{ number_format($product->price, 0, ',', '.') }}</p>

                <div class="mt-4">
                    <p class="font-bold">Size</p>
                    <div class="flex space-x-2 mt-2">
                        <button class="px-4 py-2 border border-gray-300">M</button>
                        <button class="px-4 py-2 border border-gray-300">L</button>
                        <button class="px-4 py-2 border border-gray-300">XL</button>
                    </div>
                </div>

                <div class="flex space-x-4 mt-4">
                    <i class="fas fa-heart text-2xl"></i>
                    <i class="fas fa-share text-2xl"></i>
                </div>

                <div class="flex space-x-4 mt-4">
                    <form action="/keranjang" method="POST"> <!-- Form untuk menambahkan ke keranjang -->
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <button type="submit" class="px-4 py-2 bg-gray-200 border border-gray-300">Tambah Ke Keranjang</button>
                    </form>
                    <button class="px-4 py-2 bg-gray-200 border border-gray-300">Beli Sekarang</button>
                </div>
            </div>
        </div>

        <div class="mt-8">
            <h3 class="text-lg font-bold">DESCRIPTION</h3>
            <p class="mt-2">{{ $product->description }}</p>
        </div>
    </div>
</body>
</html>
