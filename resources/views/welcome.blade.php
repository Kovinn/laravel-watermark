<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome | Laravel Breeze</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-blue-200 via-blue-300 to-purple-400 min-h-screen flex flex-col">

    <!-- Navbar -->
    <nav class="absolute top-0 right-0 m-5 flex space-x-4">
        @auth
            <a href="{{ url('/dashboard') }}" 
                class="px-6 py-2 bg-blue-600 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 transition">
                Dashboard
            </a>
        @else
            <a href="{{ route('login') }}" 
                class="px-6 py-2 bg-transparent border-2 border-blue-600 text-blue-600 font-semibold rounded-lg shadow-md hover:bg-blue-600 hover:text-white transition">
                Sign In
            </a>
            <a href="{{ route('register') }}" 
                class="px-6 py-2 bg-blue-500 text-white font-semibold rounded-lg shadow-md hover:bg-blue-600 transition">
                Sign Up
            </a>
        @endauth
    </nav>

    <!-- Content -->
    <div class="flex-grow flex items-center justify-center">
        <div class="text-center bg-white p-10 rounded-3xl shadow-xl max-w-lg w-full transform transition-all hover:scale-105">
            <h1 class="text-5xl font-extrabold text-gray-800 mb-4 animate-bounce">Generate Code</h1>
            <p class="text-gray-600 mb-6 text-lg leading-relaxed">
                Website sederhana untuk generate QR Code
            </p>

        </div>
    </div>

</body>
</html>
