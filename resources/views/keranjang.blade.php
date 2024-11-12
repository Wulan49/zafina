<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body class="bg-gray-100">
    <!-- Header -->
    <div class="bg-blue-600 text-white p-4 flex justify-between items-center">
        <div class="flex items-center">
            <a href="/shop"><i class="fas fa-arrow-left mr-4"></i></a>
            <h1 class="text-xl">Keranjang (2)</h1>
        </div>
        <a href="#" class="text-white font-semibold">Edit</a>
    </div>

    <!-- Cart Content -->
    <div class="p-4">
        <!-- Select All Option -->
        <div class="flex items-center mb-4">
            <input type="checkbox" id="select-all" class="mr-2">
            <label for="select-all">Pilih Semua</label>
        </div>

        <!-- Cart Items Table -->
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <table class="min-w-full bg-white">
                <thead>
                    <tr class="w-full bg-gray-100 text-left text-gray-600 uppercase text-sm leading-normal">
                        <th class="py-3 px-6">PRODUK</th>
                        <th class="py-3 px-6">HARGA</th>
                        <th class="py-3 px-6">JUMLAH</th>
                        <th class="py-3 px-6 text-right">TOTAL HARGA</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600 text-sm font-light">
                    <!-- Item 1 -->
                    <tr class="border-b border-gray-200 hover:bg-gray-100">
                        <td class="py-3 px-6 flex items-center">
                            <input type="checkbox" class="mr-4">
                            <img src="https://storage.googleapis.com/a1aa/image/SEBWsoR4bm4eGKyf4J5fJ0xWFLH0ubNBtpG7kQhr7VETXnXnA.jpg" alt="Adidas Polo" class="w-16 h-16 mr-4 rounded">
                            <div>
                                <p>ADIDAS GOLF BOYS ZIP POLO - GREEN</p>
                                <p class="text-gray-500">Size: M</p>
                                <p class="text-gray-500">Sisa: 27</p>
                            </div>
                        </td>
                        <td class="py-3 px-6">Rp. 136.000</td>
                        <td class="py-3 px-6 flex items-center">
                            <button class="bg-gray-200 text-gray-600 px-2 py-1 rounded">-</button>
                            <input type="text" value="1" class="w-8 text-center mx-2 border border-gray-300 rounded">
                            <button class="bg-gray-200 text-gray-600 px-2 py-1 rounded">+</button>
                        </td>
                        <td class="py-3 px-6 text-right">
                            <span>Rp. 136.000</span>
                            <a href="{{ route('checkout') }}" class="bg-blue-600 text-white px-4 py-2 rounded ml-4 hover:bg-blue-700">Checkout</a>
                        </td>
                    </tr>

                    <!-- Item 2 -->
                    <tr class="border-b border-gray-200 hover:bg-gray-100">
                        <td class="py-3 px-6 flex items-center">
                            <input type="checkbox" class="mr-4">
                            <img src="https://storage.googleapis.com/a1aa/image/FIn1OLuCw3YQI52O0gbqfzyLfC18gbMZoknrOC5s0PRqrzrTA.jpg" alt="Hijab" class="w-16 h-16 mr-4 rounded">
                            <div>
                                <p>Woman Instant Hijab Running</p>
                                <p class="text-gray-500">Size: S</p>
                                <p class="text-gray-500">Sisa: 25</p>
                            </div>
                        </td>
                        <td class="py-3 px-6">Rp. 25.000</td>
                        <td class="py-3 px-6 flex items-center">
                            <button class="bg-gray-200 text-gray-600 px-2 py-1 rounded">-</button>
                            <input type="text" value="3" class="w-8 text-center mx-2 border border-gray-300 rounded">
                            <button class="bg-gray-200 text-gray-600 px-2 py-1 rounded">+</button>
                        </td>
                        <td class="py-3 px-6 text-right">
                            <span>Rp. 75.000</span>
                            <a href="{{ route('checkout') }}" class="bg-blue-600 text-white px-4 py-2 rounded ml-4 hover:bg-blue-700">Checkout</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
