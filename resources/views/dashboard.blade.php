<x-app-layout>
    <div class="min-h-screen flex flex-col justify-center items-center">
        <!-- Navbar -->
        <nav class="bg-blue-600 p-4 shadow-md w-full">
            <div class="max-w-7xl mx-auto flex justify-between items-center">
                <a href="/" class="flex items-center text-black text-xl font-bold">
                    <img src="{{ asset('images/Rocchy.png') }}" class="h-6 w-auto mr-2" alt="Rocchy Logo">
                </a>

                <div class="flex space-x-8">
                    <a href="/" class="text-black hover:text-gray-300">Home</a>
                    <a href="/about" class="text-black hover:text-gray-300">Profil</a>
                    <a href="/dashboard" class="text-black hover:text-gray-300">Dashboard</a>
                </div>
            </div>
        </nav>

        <!-- Main content -->
        <main class="flex-1 p-6 flex flex-col justify-center items-center mt-10">
            <div class="text-center w-full max-w-lg">
                <h3 class="text-2xl mb-6">Generate QR Code dari Link</h3>

                <!-- Form untuk input URL -->
                <form method="POST" action="{{ route('generate.qr') }}" class="mb-6">
                    @csrf
                    <input type="url" name="url" class="px-4 py-2 border rounded-md w-full" placeholder="Masukkan URL" required />
                    <button type="submit" class="mt-4 px-6 py-2 bg-blue-600 text-black rounded-md w-full">Generate QR Code</button>
                </form>

                @if (isset($qrCodeImage))
                    <div class="mt-6">
                        <!-- Menampilkan QR Code dalam format gambar PNG -->
                        <img src="data:image/png;base64, {!! base64_encode($qrCodeImage) !!} " alt="QR Code" class="rounded-lg shadow-md" />
                    </div>
                @endif
            </div>
        </main>

        <!-- Footer -->
        <footer class="bg-blue-600 text-black text-center py-4 mt-8">
            <div class="flex justify-center items-center space-x-2">
                <img src="{{ asset('images/Rocchy.png') }}" class="h-6 w-auto" alt="Rocchy Logo">
                <p>2025 Your Company. All rights reserved.</p>
            </div>
        </footer>
    </div>
</x-app-layout>
