<x-app-layout>

    <nav class="bg-blue-600 p-4 shadow-md">
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

    <div class="py-6 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Card 1: Welcome Message -->
                <div class="bg-white p-6 rounded-lg shadow-md border border-gray-200 dark:bg-gray-800 dark:border-gray-700">
                    <h3 class="text-xl font-semibold text-gray-800 dark:text-gray-200">Welcome Back!</h3>
                    <p class="text-gray-600 dark:text-gray-400 mt-2">You're logged in and ready to go.</p>
                </div>

                <!-- Card 2: Stats or Other Info -->
                <div class="bg-white p-6 rounded-lg shadow-md border border-gray-200 dark:bg-gray-800 dark:border-gray-700">
                    <h3 class="text-xl font-semibold text-gray-800 dark:text-gray-200">Stats</h3>
                    <p class="text-gray-600 dark:text-gray-400 mt-2">Here's some interesting stats about your account.</p>
                </div>

                <!-- Card 3: Action or Info -->
                <div class="bg-white p-6 rounded-lg shadow-md border border-gray-200 dark:bg-gray-800 dark:border-gray-700">
                    <h3 class="text-xl font-semibold text-gray-800 dark:text-gray-200">Actions</h3>
                    <p class="text-gray-600 dark:text-gray-400 mt-2">Manage your account settings or view reports.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer with Logo centered -->
    <footer class="bg-blue-600 text-black text-center py-4 mt-8">
        <div class="flex justify-center items-center space-x-2">
            <img src="{{ asset('images/Rocchy.png') }}" class="h-6 w-auto" alt="Rocchy Logo">
            <p> 2025 Your Company. All rights reserved.</p>
        </div>
    </footer>
</x-app-layout>
