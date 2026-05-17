<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce User Dashboard</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Alpine.js CDN -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="bg-gray-100 font-sans min-h-screen">
    <div x-data="{ openSidebar: false, activeSection: 'dashboard' }" class="flex flex-col md:flex-row min-h-screen">
        <!-- Sidebar -->
        <aside
            class="bg-white shadow-lg transition-all duration-300 ease-in-out fixed md:static inset-y-0 left-0 z-50 w-20 md:w-64"
            :class="{ 'w-64': openSidebar, 'hidden md:block': !openSidebar }">
            <div class="p-4 flex items-center justify-between border-b">
                <h1 :class="{ 'opacity-100': openSidebar || window.innerWidth >= 768, 'opacity-0 hidden': !openSidebar && window.innerWidth < 768 }"
                    class="text-xl font-bold text-green-600 transition-opacity duration-300">Employee Dashboard</h1>
                <button @click="openSidebar = !openSidebar" class="md:hidden p-2 rounded-full hover:bg-gray-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                </button>
            </div>
            <nav>
                <ul>
                    <li>
                        <a href="{{ route('employee.dashboard') }}" :class="{ 'bg-gray-200': activeSection === 'dashboard' }"
                            class="block px-4 py-2 text-gray-700 hover:bg-gray-200">
                            Dashboard
                        </a>
                    </li>
                </ul>
            </nav>
      
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-4 md:p-6 overflow-y-auto">
            <!-- Mobile Menu Toggle -->
            <div class="md:hidden flex justify-between items-center mb-4">
                <h1 class="text-xl font-bold text-gray-800">E-Commerce</h1>
                <button @click="openSidebar = !openSidebar" class="p-2 rounded-full hover:bg-gray-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                </button>
            </div>

            <!-- Dashboard Section -->
            <div x-show="activeSection === 'dashboard'" class="space-y-6">
                <header>
                    <h1 class="text-2xl font-bold text-gray-800">Welcome Back, John Doe!</h1>
                    <p class="text-gray-600">Here's what's happening with your account today.</p>
                </header>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                    <div class="bg-white p-4 rounded-lg shadow-md">
                        <h2 class="text-lg font-semibold text-gray-700">Total Leave Taken</h2>
                        <p class="text-2xl font-bold text-green-600">12</p>
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow-md">
                        <h2 class="text-lg font-semibold text-gray-700">Pending Leave</h2>
                        <p class="text-2xl font-bold text-yellow-600">3</p>
                    </div>
                    
                </div>
            </div>

                    <div class="mt-8">
    <a href="{{ route('employee.request') }}"
        class="inline-flex items-center gap-2 bg-indigo-600 text-white px-6 py-3 rounded-xl shadow-md hover:bg-indigo-700 hover:shadow-lg transition duration-300 font-semibold">

        <svg xmlns="http://www.w3.org/2000/svg" 
            class="h-5 w-5" 
            fill="none" 
            viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" 
                stroke-linejoin="round" 
                stroke-width="2" 
                d="M12 4v16m8-8H4" />
        </svg>

        Request Leave
    </a>
</div>

          





        </main>
    </div>





</body>

</html>