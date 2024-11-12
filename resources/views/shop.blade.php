<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZFN Sport</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet" />
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-100">
    <header class="bg-blue-500 p-4 flex items-center justify-between">
        <div class="flex items-center space-x-2">
            <div class="text-white text-2xl font-bold">ZFN</div>
            <div class="text-white text-sm">Sport</div>
        </div>
        <nav class="flex space-x-4">
            <a href="/home" class="text-white">Home</a>
            <a href="/shop" class="text-white">Shop</a>
            <a href="/sale" class="text-white">Sale</a>
            <a href="/confirm" class="text-white">Confirm</a>
            <a href="#" class="text-white">Logout</a>
        </nav>
        <div class="flex items-center space-x-2">
            <input class="p-2 rounded border border-gray-300" type="text" placeholder="Search" />
            <i class="fas fa-search text-white"></i>
            <a href="/akun">
                <i class="fas fa-user text-white"></i>
            </a>
            <a href="/keranjang"><i class="fas fa-shopping-cart text-white"></i></a>
        </div>
    </header>
    <main class="p-8 grid grid-cols-4 gap-8">
        <!-- Produk pertama -->
        <div class="bg-white p-4 rounded shadow">
            <a href="/checkout/"> <!-- Link ke halaman checkout dengan ID produk -->
                <img class="w-full h-48 object-cover" src="" alt="" />
                <div class="mt-2 flex justify-between items-center">
                    <div class="flex items-center">
                        <span class="text-yellow-500"><i class="fas fa-star"></i></span>
                        <span class="ml-1 text-sm"></span>
                    </div>
                </div>
                <div class="mt-2 text-sm"></div>
                <div class="mt-1 text-sm text-gray-500">Rp.</div>
            </a>
        </div>
    </main>
</body>
</html>
