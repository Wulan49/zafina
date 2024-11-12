<!-- resources/views/account-profile.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile - ZFN Sport</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>
<body class="bg-gray-100 font-roboto">
    <!-- Navbar -->
    <nav class="bg-blue-600 p-4 flex justify-between items-center">
        <div class="flex items-center">
            <a href="javascript:window.history.back()" class="text-white mr-2">
                <i class="fas fa-arrow-left"></i> <!-- Tanda panah ke kiri dengan warna putih dan bisa diklik -->
            </a>
            <span class="text-white text-2xl">Akun</span>
    </nav>

    <!-- Profile Section -->
    <div class="container mx-auto p-8">
        <div class="flex flex-col md:flex-row bg-white rounded-lg shadow-lg p-6 space-y-6 md:space-y-0 md:space-x-6 mb-8">
            <!-- Profile Picture and Info -->
            <div class="flex-shrink-0 text-center md:text-left">
                <img src="https://via.placeholder.com/150" alt="Profile Picture" class="w-32 h-32 rounded-full mx-auto md:mx-0 mb-4 md:mb-0">
                <h2 class="text-2xl font-bold text-gray-800">John Doe</h2>
                <p class="text-gray-600">john.doe@example.com</p>
                <a href="{{ route('profile.edit') }}" class="text-blue-600 mt-2 inline-block">Edit Profile</a>

            </div>
            <!-- Account Details -->
            <div class="flex-grow space-y-4">
                <div class="bg-gray-50 p-4 rounded-lg">
                    <h3 class="text-lg font-semibold text-gray-800">Account Information</h3>
                    <p><strong>Phone:</strong> +123456789</p>
                    <p><strong>Address:</strong> 123 Main St, City, Country</p>
                </div>
                <div class="bg-gray-50 p-4 rounded-lg">
                    <h3 class="text-lg font-semibold text-gray-800">Order History</h3>
                    <ul class="space-y-2">
                        <li class="flex justify-between items-center">
                            <span><strong>Order #12345</strong> - Completed</span>
                            <a href="#" class="text-blue-600">View</a>
                        </li>
                        <li class="flex justify-between items-center">
                            <span><strong>Order #12346</strong> - Pending</span>
                            <a href="#" class="text-blue-600">View</a>
                        </li>
                        <a href="#" class="text-blue-600 block mt-2">View All Orders</a>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Settings Section -->
        <div class="bg-white p-6 rounded-lg shadow-lg space-y-4">
            <h2 class="text-2xl font-bold text-gray-800">Account Settings</h2>
            <div class="space-y-2">
                <p class="flex justify-between items-center"><span>Change Password</span><a href="#" class="text-blue-600">Update</a></p>
                <p class="flex justify-between items-center"><span>Manage Addresses</span><a href="#" class="text-blue-600">Edit</a></p>
                <p class="flex justify-between items-center"><span>Notification Preferences</span><a href="#" class="text-blue-600">Manage</a></p>
            </div>
        </div>
    </div>
</body>
</html>
