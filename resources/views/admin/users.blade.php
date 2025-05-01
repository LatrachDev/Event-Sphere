<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EventSphere - User Management</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script>
      if (
        localStorage.getItem("theme") === "dark" ||
        (!localStorage.getItem("theme") && window.matchMedia("(prefers-color-scheme: dark)").matches)
      ) {
        document.documentElement.classList.add("dark");
      }
    </script>
</head>
<body class="bg-light-background text-light-text dark:bg-dark-background dark:text-dark-text font-poppins">

    <div class="flex min-h-screen">
    @include('partials.sidebar', ['requestedCount' => $requestedCount])
        
        <!-- Main content -->
        <div class="flex-1 px-8 py-6 font-montserrat">
           
            <h1 class="text-3xl font-semibold my-10">User Management</h1>
            
            <!-- Stat cards -->
            <div class="grid grid-cols-4 gap-4 mb-6">
                <!-- Total Users -->
                <div class="bg-dark-accent bg-opacity-90 rounded-lg p-4 flex flex-col transition-all duration-300 hover:scale-[1.02] dark:hover:bg-dark-accent hover:bg-light-accent">
                    <div class="flex justify-between mb-2">
                        <span class="text-[#ddeffa] opacity-80">Total Users</span>
                        <i class="fas fa-users text-[#ddeffa] opacity-80"></i>
                    </div>
                    <div class="text-4xl text-[#ddeffa] font-bold">{{ $totalUsers }}</div>
                </div>
                
                <!-- Active Users -->
                <div class="bg-dark-half rounded-lg p-4 flex flex-col transition-all text-light-success dark:text-dark-success dark:hover:text-dark-text hover:text-dark-text duration-300 hover:scale-[1.02] dark:hover:bg-dark-accent hover:bg-light-accent">
                    <div class="flex justify-between mb-2">
                        <span class="text-dark-text opacity-80">Active Users</span>
                        <i class="fas fa-user-check text-dark-text opacity-80"></i>
                    </div>
                    <div class="text-4xl font-bold ">{{ $activeUsers }}</div>
                </div>
                
                <!-- Banned Users -->
                <div class="bg-dark-half rounded-lg p-4 flex flex-col text-light-error dark:text-dark-error transition-all duration-300 dark:hover:text-dark-text hover:text-dark-text hover:scale-[1.02] dark:hover:bg-dark-accent hover:bg-light-accent">
                    <div class="flex justify-between mb-2">
                        <span class="text-dark-text opacity-80">Banned Users</span>
                        <i class="fas fa-user-slash text-dark-text opacity-80"></i>
                    </div>
                    <div class="text-4xl font-bold">{{ $bannedUsers }}</div>
                </div>
                
                <!-- Events Created -->
                <div class="bg-dark-half rounded-lg p-4 flex flex-col text-dark-primary transition-all duration-300 dark:hover:text-dark-text hover:text-dark-text hover:scale-[1.02] dark:hover:bg-dark-accent hover:bg-light-accent">
                    <div class="flex justify-between mb-2">
                        <span class="text-dark-text opacity-80">Total Events Created</span>
                        <i class="fas fa-calendar-alt text-dark-text opacity-80"></i>
                    </div>
                    <div class="text-4xl font-bold ">{{ $totalEvents }}</div>
                </div>
            </div>

            @if (session('success'))
                <div id="successMessage" class="bg-green-100 border border-green-400 text-dark-success px-4 py-3 rounded mb-4">
                    {{ session('success') }}
                </div>
                <script>
                    setTimeout(() => {
                        const msg = document.getElementById('successMessage');
                        if (msg) msg.style.display = 'none';
                    }, 5000);
                </script>
            @endif

            @if ($errors->any())
                <div class="bg-red-100 text-red-700 p-4 mb-4 rounded">
                    <ul class="list-disc pl-5">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            
            <!-- User Table -->
            <div class="bg-white dark:bg-dark-half rounded-lg shadow overflow-hidden">
                <div class="overflow-x-auto">

                    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                        <thead class="bg-gray-50 dark:bg-gray-800">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">ID</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Name</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Email</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Events Created</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Status</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white dark:bg-dark-half divide-y divide-gray-200 dark:divide-gray-700">
                            
                        @forelse ($users as $user)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-gray-100">#{{ $user->id }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                    <img class="h-10 w-10 rounded-full" src="https://ui-avatars.com/api/?name={{ urlencode($user->name) }}&background=random" alt="User Avatar">

                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900 dark:text-gray-100">{{ $user->name }}</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-300">{{ $user->email }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-300">{{ $user->events_count }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full uppercase {{ $user->status === 'active' ? 'bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-200' : 'bg-red-100 text-red-800 dark:bg-red-900 dark:text-red-200' }}">{{ $user->status }}</span>
                            </td>
                            <td>

                                <form class="px-6 py-4 whitespace-nowrap text-sm font-medium flex" action="{{ route('admin.users.toggleStatus', $user->id) }}" method="POST">
                                    @csrf
                                    <button type="submit"
                                        class="{{ $user->status === 'active' ? 'text-red-500 hover:text-red-700 mx-auto' : 'mx-auto text-green-500 hover:text-green-700' }}">
                                        <i class="fas {{ $user->status === 'active' ? 'fa-ban' : 'fa-check' }}"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        
                        @empty
                        <p>NO user</p>
                       
                        @endforelse          
                    </tbody>
                            
                    </table>
                    <div class="mt-4">
                        {{ $users->links() }}
                    </div>
                </div>
                
                <!-- Pagination -->
                <div class="bg-white dark:bg-dark-half px-4 py-3 flex items-center justify-between border-t border-gray-200 dark:border-gray-700 sm:px-6">
                    
                </div>
            </div>
        </div>
    </div>

    <script>
        const menu = document.getElementById('mobile-menu');
        const menuLinks = document.querySelectorAll('#mobile-menu a');
        
        document.getElementById('menu-button').onclick = () => menu.classList.remove('-translate-y-full');
        document.getElementById('close-button').onclick = () => menu.classList.add('-translate-y-full');
        
        menuLinks.forEach(link => {
            link.onclick = () => menu.classList.add('-translate-y-full');
        });
        
        function toggleDarkMode() {
          document.documentElement.classList.toggle("dark");
          localStorage.setItem("theme", document.documentElement.classList.contains("dark") ? "dark" : "light");
        }
    </script>
    
</body>
</html>