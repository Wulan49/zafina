<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <title>ZFN Sport - Ask Admin</title>
</head>
<body class="bg-gray-100 font-roboto">
    <nav class="bg-blue-600 p-4 flex justify-between items-center">
        <div class="flex items-center">
            <a href="javascript:window.history.back()" class="text-white mr-2">
                <i class="fas fa-arrow-left"></i> <!-- Panah ke kiri yang bisa diklik -->
            </a>
            <span class="text-white text-2xl">Confirm</span>
        </div>
    </nav>
    <div class="container mx-auto p-8">
        <h1 class="text-4xl font-bold text-center mb-8">Ask Admin</h1>
        <div class="bg-white p-6 rounded shadow-md mb-8">
            <label for="question" class="block text-lg font-semibold mb-2">Your Question</label>
            <textarea id="question" class="w-full p-2 border rounded mb-4"></textarea>
            <button class="bg-blue-600 text-white px-4 py-2 rounded">Submit Question</button>
        </div>
        <h2 class="text-2xl font-bold mb-4">Questions & Answers</h2>
        <div class="bg-white p-4 rounded shadow-md mb-4">
            <h3 class="font-semibold">What is the return policy?</h3>
            <p>You can return items within 30 days of purchase.</p>
        </div>
        <div class="bg-white p-4 rounded shadow-md">
            <h3 class="font-semibold">Do you offer international shipping?</h3>
            <p>Yes, we do offer international shipping options.</p>
        </div>
    </div>
</body>
</html>
