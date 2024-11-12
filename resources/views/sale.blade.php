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
            <a class="text-white" href="#">Logout</a>
        </nav>
        <div class="flex items-center space-x-2">
            <input class="p-2 rounded border border-gray-300" type="text" placeholder="Search" />
            <i class="fas fa-search text-white"></i>
            <a href="/akun"><i class="fas fa-user text-white"></i></a> <!-- Icon Akun -->
            <a href="/storage"><i class="fas fa-shopping-cart text-white"></i></a> <!-- Icon Keranjang -->
        </div>
    </header>
    <main class="p-8 grid grid-cols-4 gap-8">
        <div class="bg-white p-4 rounded shadow">
            <img src="https://storage.googleapis.com/a1aa/image/bvavBe8FHWQ5GiNurPFbIf3mRnT5eHK8VNu1etJLj4oCwGuOB.jpg" alt="Blue T-shirt" class="w-full h-48 object-cover" />
            <div class="mt-2 flex justify-between items-center">
                <span class="bg-red-500 text-white px-2 py-1 text-xs rounded">50%</span>
                <div class="flex items-center">
                    <span class="text-yellow-500"><i class="fas fa-star"></i></span>
                    <span class="ml-1 text-sm">4.9</span>
                </div>
            </div>
            <div class="mt-2 text-sm">PUMA INDIVIDUALRISE GRAPHIC</div>
            <div class="mt-1 text-sm text-gray-500">Rp. 99.000</div>
        </div>

        <div class="bg-white p-4 rounded shadow">
            <img src="https://storage.googleapis.com/a1aa/image/wblzbvdft53mCikAHkzebRiQfMFzxGufwxDVOgsAmrOlwGuOB.jpg" alt="Black Futsal Shirt" class="w-full h-48 object-cover" />
            <div class="mt-2 flex justify-between items-center">
                <span class="bg-red-500 text-white px-2 py-1 text-xs rounded">15%</span>
                <div class="flex items-center">
                    <span class="text-yellow-500"><i class="fas fa-star"></i></span>
                    <span class="ml-1 text-sm">4.5</span>
                </div>
            </div>
            <div class="mt-2 text-sm">1SET BAJU BOLA BAJU FUTSAL</div>
            <div class="mt-1 text-sm text-gray-500">Rp. 99.750</div>
        </div>

        <div class="bg-white p-4 rounded shadow">
            <img src="https://storage.googleapis.com/a1aa/image/J9REVzUM7AZJPp6b3LeSxyA0fXzPOpuEvgFsz7aWOdPKshrTA.jpg" alt="Black Jacket and Pants" class="w-full h-48 object-cover" />
            <div class="mt-2 flex justify-between items-center">
                <span class="bg-red-500 text-white px-2 py-1 text-xs rounded">15%</span>
                <div class="flex items-center">
                    <span class="text-yellow-500"><i class="fas fa-star"></i></span>
                    <span class="ml-1 text-sm">4.8</span>
                </div>
            </div>
            <div class="mt-2 text-sm">UA Woven Full-Zip Jacket</div>
            <div class="mt-1 text-sm text-gray-500">Rp. 297.750</div>
        </div>

        <div class="bg-white p-4 rounded shadow">
            <img src="https://storage.googleapis.com/a1aa/image/IY82EKjDeT3ZX6PfVXbPBft3h0rEIzMlRfnlhT4dtmnIwGuOB.jpg" alt="White Running Shoes" class="w-full h-48 object-cover" />
            <div class="mt-2 flex justify-between items-center">
                <span class="bg-red-500 text-white px-2 py-1 text-xs rounded">20%</span>
                <div class="flex items-center">
                    <span class="text-yellow-500"><i class="fas fa-star"></i></span>
                    <span class="ml-1 text-sm">4.8</span>
                </div>
            </div>
            <div class="mt-2 text-sm">SEPATU RUNNING WANITA ATHLETICZ</div>
            <div class="mt-1 text-sm text-gray-500">Rp. 224.000</div>
        </div>

        <!-- Additional Product Cards -->

        <!-- Continue with similar structure for remaining products -->

    </main>
</body>
</html>
