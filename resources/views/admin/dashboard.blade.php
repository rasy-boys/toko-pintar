<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Link ke file Tailwind CSS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 font-sans leading-normal tracking-normal">
    <div class="flex flex-col min-h-screen">
    
        <header class="bg-white shadow p-4">
            <div class="flex flex-col md:flex-row items-center justify-between">
                
                <!-- Logo -->
                <div class="flex flex-col items-start md:ml-12 mb-4 md:mb-0">
                    <span class="text-2xl font-bold text-blue-600">Toko</span>
                    <span class="text-xl font-bold text-gray-700">Pintar.</span>
                </div>
        
                <!-- Search Bar -->
                <div class="flex items-center w-full md:w-1/2 mb-4 md:mb-0">
                    <input type="text" placeholder="Cari..."
                        class="w-full px-4 py-2 text-sm border rounded-full focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-blue-400"
                    />
                </div>
        
                <!-- User Profile -->
                <div class="flex items-center space-x-3">
                    <span class="hidden md:block">
                        <span class="text-sm font-medium text-blue-600">Toko</span>
                        <span class="text-sm font-medium text-gray-700">Pintar</span>
                    </span>
                    <img src="https://via.placeholder.com/40" alt="User Avatar" class="w-10 h-10 rounded-full">
                    <button class="text-gray-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.293 9.707a1 1 0 010-1.414L10 3.586a1 1 0 011.414 0l4.707 4.707a1 1 0 01-1.414 1.414L11 6.414V14a1 1 0 11-2 0V6.414L6.707 9.707a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>
            </div>
        </header>
        

        <div class="flex flex-1">
         <!-- Sidebar -->
<aside class="bg-white text-gray-800 w-64 hidden sm:block shadow-lg lg:w-1/4 xl:w-1/5 fixed sm:relative top-0 left-0 h-full z-50">
    <nav class="mt-6">
        <ul class="space-y-4">
            <!-- Group 1 -->
            <li class="px-4">
                <a href="dashboard" class="flex items-center px-4 py-2 text-black hover:bg-gray-200 transition rounded-lg">
                    <img src="{{ asset('images/ds icon.png') }}" alt="Icon" class="h-6 w-6 mr-3">
                    Dashboard
                </a>
            </li>
            <li class="px-4">
                <a href="#" class="flex items-center px-4 py-2 text-black hover:bg-gray-200 transition rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A9 9 0 1118.88 5.12a9 9 0 01-13.757 12.683zM12 15v6m0-6h6m-6 0H6" />
                    </svg>
                    Register
                </a>
            </li>
            <li class="px-4">
                <a href="#" class="flex items-center px-4 py-2 text-black hover:bg-gray-200 transition rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h11M9 21V3m5 3h5m-5 9h5m-5 6h5" />
                    </svg>
                    Login
                </a>
            </li>
            <hr class="my-2 border-gray-300" />
            <!-- Group 2 -->
            <li class="px-4">
                <a href="#" class="flex items-center px-4 py-2 text-black hover:bg-gray-200 transition rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4h16M4 8h16M4 12h16M4 16h16M4 20h16" />
                    </svg>
                    Manajemen Produk
                </a>
            </li>
            <li class="px-4">
                <a href="#" class="flex items-center px-4 py-2 text-black hover:bg-gray-200 transition rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h11m4 0h5m-5 0v11m-4 0h4" />
                    </svg>
                    Penjualan
                </a>
            </li>
            <li class="px-4">
                <a href="#" class="flex items-center px-4 py-2 text-black hover:bg-gray-200 transition rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 3h4a1 1 0 011 1v16a1 1 0 01-1 1h-4M9 3h4M5 3h4" />
                    </svg>
                    Pengelola Karyawan
                </a>
            </li>
            <hr class="my-2 border-gray-300" />
            <!-- Group 3 -->
            <li class="px-4">
                <a href="#" class="flex items-center px-4 py-2 text-black hover:bg-gray-200 transition rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 9v3m4-3v3m-4 4h4" />
                    </svg>
                    Pengaturan
                </a>
            </li>
            <li class="px-4">
                <a href="#" class="flex items-center px-4 py-2 text-black hover:bg-gray-200 transition rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12h3m4 0h-7M5 3h16v6H5V3zm16 12H3" />
                    </svg>
                    Notifikasi
                </a>
            </li>
            <li class="px-4">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="flex items-center w-full px-4 py-2 text-black hover:bg-gray-200 transition rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5l7 7m0 0l7-7M5 19l7-7m0 0l7 7" />
                        </svg>
                        Logout
                    </button>
                </form>
            </li>
        </ul>
    </nav>
</aside>

<!-- Mobile Sidebar -->
<div class="sm:hidden">
    <div class="fixed inset-0 bg-gray-900 bg-opacity-50 z-40" id="mobile-sidebar-overlay"></div>
    <aside class="bg-white text-gray-800 w-64 sm:w-full fixed top-0 left-0 h-full z-50 transform -translate-x-full mt-16" id="mobile-sidebar">
        <nav class="mt-6">
            <ul class="space-y-4">
                <!-- Group 1 -->
                <li class="px-4">
                    <a href="dashboard" class="flex items-center px-4 py-2 text-black hover:bg-gray-200 transition rounded-lg">
                        <img src="{{ asset('images/ds icon.png') }}" alt="Icon" class="h-6 w-6 mr-3">

                        Dashboard
                    </a>
                </li>
                <li class="px-4">
                    <a href="#" class="flex items-center px-4 py-2 text-black hover:bg-gray-200 transition rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A9 9 0 1118.88 5.12a9 9 0 01-13.757 12.683zM12 15v6m0-6h6m-6 0H6" />
                        </svg>
                        Register
                    </a>
                </li>
                <!-- Add more items as needed -->
            </ul>
        </nav>
    </aside>
</div>

<!-- Toggle Button for Mobile Sidebar -->
<button id="sidebar-toggle" class="sm:hidden p-3 bg-transparent text-black transition-all duration-300 ease-in-out transform hover:bg-white active:scale-95 focus:outline-none focus:ring-2 focus:ring-white focus:ring-opacity-50 absolute top-0 left-4 z-50 mt-4">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
    </svg>
</button>



<script>
    document.getElementById('sidebar-toggle').addEventListener('click', function() {
        const sidebar = document.getElementById('mobile-sidebar');
        const overlay = document.getElementById('mobile-sidebar-overlay');
        sidebar.classList.toggle('transform');
        sidebar.classList.toggle('-translate-x-full');
        overlay.classList.toggle('hidden');
    });

    document.getElementById('mobile-sidebar-overlay').addEventListener('click', function() {
        const sidebar = document.getElementById('mobile-sidebar');
        const overlay = document.getElementById('mobile-sidebar-overlay');
        sidebar.classList.add('transform');
        sidebar.classList.add('-translate-x-full');
        overlay.classList.add('hidden');
    });
</script>

            
            <!-- Main Content -->
            <main class="flex-1 p-6 bg-gray-50">
                <!-- Statistik Ringkasan -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Card 1 -->
                    <div class="bg-teal-100 shadow rounded-lg flex items-center p-4 h-32">
                        <div class="flex-1">
                            <h3 class="text-md font-bold text-gray-700">Penjualan Harian ini</h3>
                            <p class="text-lg font-bold text-gray-800">Rp 1JT</p>
                        </div>
                        <div>
                            <svg class="w-10 h-10 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h11M9 21V3m3 18l-3-3-3 3" />
                            </svg>
                        </div>
                    </div>
                    
                    
                    <!-- Card 2 -->
                    <div class="bg-teal-100 shadow rounded-lg flex items-center p-4 h-32">
                        <div class="flex-1">
                            <h3 class="text-md font-bold text-gray-700">Laporan</h3>
                            <p class="text-lg font-bold text-gray-800">Pembelian</p>
                        </div>
                    </div>
                    
                    <!-- Card 3 -->
                    <div class="bg-teal-100 shadow rounded-lg flex items-center p-4">
                        <div class="flex-1">
                            <h3 class="text-md font-bold text-gray-700">100</h3>
                            <p class="text-lg font-bold text-gray-800">Pembelian hari ini</p>
                        </div>
                        <div>
                            <svg class="w-10 h-10 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h11M9 21V3m3 18l-3-3-3 3" />
                            </svg>
                        </div>
                    </div>
                    
                    <!-- Card 4 -->
                    <div class="bg-teal-100 shadow rounded-lg flex items-center p-4 h-32">
                        <div class="flex-1">
                            <h3 class="text-md font-bold text-gray-700">Jumlah Barang</h3>
                            <p class="text-lg font-bold text-gray-800">200</p>
                        </div>
                    </div>
                    
                    <!-- Card 5 -->
                    <div class="bg-teal-100 shadow rounded-lg flex items-center p-4">
                        <div class="flex-1">
                            <h3 class="text-md font-bold text-gray-700">100 Terjual</h3>
                            <p class="text-lg font-bold text-gray-800">Jumlah Pembelian</p>
                        </div>
                    </div>
                    
                    <!-- Card 6 -->
                    <div class="bg-teal-100 shadow rounded-lg flex items-center p-4">
                        <div class="flex-1">
                            <h3 class="text-md font-bold text-gray-700">100</h3>
                            <p class="text-lg font-bold text-gray-800">Jumlah Pelanggan</p>
                        </div>
                    </div>
                </div>
            </main>
            
        </div>

        <!-- Footer -->
        <footer class="bg-white text-black text-center p-4">
            <p>© 2025 Admin Dashboard. All rights reserved.</p>
        </footer>
    </div>
</body>

</html>

