<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Laravel Breeze</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        /* Avatar / Logo di atas form */
        .avatar {
            position: absolute;
            top: -50px; /* Jarak dari form */
            left: 50%;
            transform: translateX(-50%);
            width: 90px; /* Ukuran avatar */
            height: 90px;
            border-radius: 50%;
            border: 5px solid rgba(255, 255, 255, 0.5);
            background-color: white;
        }
    </style>
</head>
<body class="bg-gradient-to-br from-purple-500 via-blue-500 to-blue-400 min-h-screen flex items-center justify-center relative">

    <div class="relative bg-white/20 p-8 rounded-3xl shadow-2xl max-w-md w-full text-center border border-white/30 mt-12">
        <!-- Avatar -->
        <img src="{{ asset('images/Rocchy.png') }}" alt="Avatar" class="avatar">

        <h2 class="text-4xl font-extrabold text-white mb-10 mt-12 flex items-center justify-center">
            🔑 <span class="ml-2">Sign In</span>
        </h2>

        <!-- Form Login -->
        <form method="POST" action="{{ route('login') }}" class="space-y-4">
            @csrf

            <div>
                <input type="email" name="email" placeholder="Email" required
                    class="w-full p-3 bg-white/30 text-white placeholder-white rounded-lg focus:outline-none focus:ring-2 focus:ring-white">
            </div>

            <div>
                <input type="password" name="password" placeholder="Password" required
                    class="w-full p-3 bg-white/30 text-white placeholder-white rounded-lg focus:outline-none focus:ring-2 focus:ring-white">
            </div>

            <button type="submit" 
                class="w-full p-3 bg-blue-600 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 transition">
                Masuk
            </button>
        </form>

        <!-- Link Tambahan -->
        <div class="mt-6">
            <a href="{{ route('register') }}" class="text-white hover:underline">Belum punya akun? Daftar</a>
        </div>
    </div>

</body>
</html>
