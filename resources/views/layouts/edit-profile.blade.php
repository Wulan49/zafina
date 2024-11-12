<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile - ZFN Sport</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-roboto">
    <div class="container mx-auto p-8">
        <h2 class="text-2xl font-bold mb-4">Edit Profile</h2>
        <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="name" class="block text-gray-700">Name</label>
                <input type="text" id="name" name="name" value="{{ $user->name }}" class="border border-gray-300 p-2 w-full" required>
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700">Email</label>
                <input type="email" id="email" name="email" value="{{ $user->email }}" class="border border-gray-300 p-2 w-full" required>
            </div>
            <button type="submit" class="bg-blue-600 text-white p-2">Update Profile</button>
        </form>
    </div>
</body>
</html>
