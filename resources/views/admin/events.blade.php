{{-- resources/views/admin/dashboard.blade.php --}}
<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EventSphere - Admin Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-light-background text-light-text dark:bg-dark-background dark:text-dark-text font-poppins">

    <div class="flex min-h-screen">

        @include('partials.sidebar')
        <!-- Main content -->
        <div class="flex-1 p-8 font-montserrat">
            <h1 class="text-3xl font-semibold my-10">Event</h1>
            
            <h2 class="text-lg mb-6">Statistics</h2>
            
            <!-- Stat cards -->
            <div class="grid grid-cols-4 gap-4 mb-6">
                <!-- Total Users -->
                <div class="bg-dark-accent bg-opacity-90 rounded-lg p-4 flex flex-col">
                    <div class="flex justify-between mb-2">
                        <span class="text-[#ddeffa] opacity-80">Total Users</span>
                        <i class="fas fa-users text-[#ddeffa] opacity-80"></i>
                    </div>
                    <div class="text-4xl text-[#ddeffa] font-bold">92,680</div>
                </div>
                
                <!-- Total Events -->
                <div class="bg-dark-half rounded-lg p-4 flex flex-col">
                    <div class="flex justify-between mb-2">
                        <span class="text-dark-text opacity-80">Total Events</span>
                        <i class="fas fa-eye text-dark-text opacity-80"></i>
                    </div>
                    <div class="text-4xl font-bold text-dark-primary">580.5K</div>
                </div>
                
                <!-- Incoming Events -->
                <div class="bg-dark-half rounded-lg p-4 flex flex-col">
                    <div class="flex justify-between mb-2">
                        <span class="text-dark-text opacity-80">Incomming events</span>
                        <i class="fas fa-chart-line text-dark-text opacity-80"></i>
                    </div>
                    <div class="text-4xl font-bold text-dark-primary">15.43%</div>
                </div>
                
                <!-- Closed Events -->
                <div class="bg-dark-half rounded-lg p-4 flex flex-col">
                    <div class="flex justify-between mb-2">
                        <span class="text-dark-text opacity-80">Closed event</span>
                        <i class="fas fa-chart-line text-dark-text opacity-80"></i>
                    </div>
                    <div class="text-4xl font-bold text-dark-primary">15.43%</div>
                </div>
            </div>
            
            <!-- Charts Row -->
            <div class="grid grid-cols-3 gap-4">
                <!-- Pie Chart -->
                <div class="bg-white rounded-lg p-4">
                    <h3 class="text-light-text mb-4">Chapter Wise Status</h3>
                    <div class="flex justify-center">
                        <!-- SVG Donut chart implementation -->
                        <svg viewBox="0 0 100 100" width="200" height="200">
                            <!-- Main donut segments -->
                            <circle cx="50" cy="50" r="25" fill="transparent" stroke="#F3E5F5" stroke-width="25" stroke-dasharray="157" stroke-dashoffset="0" />
                            
                            <!-- Chapter A - Purple -->
                            <circle cx="50" cy="50" r="25" fill="transparent" stroke="#d28bea" stroke-width="25" stroke-dasharray="157" stroke-dashoffset="0" stroke-dashoffset="0" />
                            <circle cx="50" cy="50" r="25" fill="transparent" stroke="#d28bea" stroke-width="25" stroke-dasharray="157" stroke-dashoffset="118" />
                            
                            <!-- Chapter B - Light Purple -->
                            <circle cx="50" cy="50" r="25" fill="transparent" stroke="#E1BEE7" stroke-width="25" stroke-dasharray="157" stroke-dashoffset="118" />
                            <circle cx="50" cy="50" r="25" fill="transparent" stroke="#E1BEE7" stroke-width="25" stroke-dasharray="157" stroke-dashoffset="85" />
                            
                            <!-- Chapter C - Medium Purple -->
                            <circle cx="50" cy="50" r="25" fill="transparent" stroke="#721093" stroke-width="25" stroke-dasharray="157" stroke-dashoffset="85" />
                            <circle cx="50" cy="50" r="25" fill="transparent" stroke="#721093" stroke-width="25" stroke-dasharray="157" stroke-dashoffset="54" />
                            
                            <!-- Haven't Started - Lightest Purple -->
                            <circle cx="50" cy="50" r="25" fill="transparent" stroke="#F3E5F5" stroke-width="25" stroke-dasharray="157" stroke-dashoffset="54" />
                            <circle cx="50" cy="50" r="25" fill="transparent" stroke="#F3E5F5" stroke-width="25" stroke-dasharray="157" stroke-dashoffset="43" />
                            
                            <!-- Center white circle for donut look -->
                            <circle cx="50" cy="50" r="12.5" fill="white" />
                            
                            <!-- Percentage labels -->
                            <text x="40" y="42" font-size="4" fill="#666">34%</text>
                            <text x="60" y="42" font-size="4" fill="#666">22%</text>
                            <text x="60" y="60" font-size="4" fill="#666">20%</text>
                            <text x="42" y="60" font-size="4" fill="#666">7%</text>
                            
                            <!-- Center label -->
                            <text x="40" y="48" font-size="3" fill="#666">Finished</text>
                            <text x="40" y="52" font-size="3" fill="#666">Training</text>
                        </svg>
                    </div>
                    
                    <!-- Legend -->
                    <div class="mt-4 grid grid-cols-2 gap-2 text-xs text-light-text">
                        <div class="flex items-center">
                            <span class="w-3 h-3 inline-block bg-blue-600 mr-1 rounded-full"></span>
                            Finished Training
                        </div>
                        <div class="flex items-center">
                            <span class="w-3 h-3 inline-block bg-dark-primary mr-1 rounded-full"></span>
                            Chapter A
                        </div>
                        <div class="flex items-center">
                            <span class="w-3 h-3 inline-block bg-purple-300 mr-1 rounded-full"></span>
                            Chapter B
                        </div>
                        <div class="flex items-center">
                            <span class="w-3 h-3 inline-block bg-dark-secondary mr-1 rounded-full"></span>
                            Chapter C
                        </div>
                        <div class="flex items-center">
                            <span class="w-3 h-3 inline-block bg-dark-error mr-1 rounded-full"></span>
                            Haven't Started Yet
                        </div>
                    </div>
                </div>
                
                <!-- Bar Chart - Span 2 columns -->
                <div class="bg-dark-half rounded-lg p-4 col-span-2">
                    <!-- Bar chart implementation -->
                    <div class="h-64">
                        <div class="flex h-full items-end justify-between space-x-2">
                            <!-- Bar for each date -->
                            @foreach(['3 Jun', '4 Jun', '5 Jun', '6 Jun', '7 Jun', '8 Jun', '9 Jun', '10 Jun', '11 Jun', '12 Jun', '13 Jun', '14 Jun'] as $date)
                                <div class="w-full flex flex-col items-center">
                                    <!-- White bar -->
                                    <div class="w-8 bg-white {{ $date === '3 Jun' ? 'h-24' : ($date === '4 Jun' ? 'h-32' : ($date === '5 Jun' ? 'h-28' : ($date === '6 Jun' ? 'h-32' : ($date === '7 Jun' ? 'h-32' : ($date === '8 Jun' ? 'h-32' : ($date === '9 Jun' ? 'h-32' : ($date === '10 Jun' ? 'h-32' : ($date === '11 Jun' ? 'h-24' : ($date === '12 Jun' ? 'h-32' : ($date === '13 Jun' ? 'h-36' : 'h-40')))))))))) }}"></div>
                                    
                                    <!-- Purple overlay bar -->
                                    <div class="w-8 bg-dark-primary -mt-{{ $date === '3 Jun' ? '16' : ($date === '4 Jun' ? '24' : ($date === '5 Jun' ? '16' : ($date === '6 Jun' ? '24' : ($date === '7 Jun' ? '16' : ($date === '8 Jun' ? '24' : ($date === '9 Jun' ? '16' : ($date === '10 Jun' ? '8' : ($date === '11 Jun' ? '16' : ($date === '12 Jun' ? '24' : ($date === '13 Jun' ? '32' : '36')))))))))) }}">
                                        <div class="h-{{ $date === '3 Jun' ? '16' : ($date === '4 Jun' ? '24' : ($date === '5 Jun' ? '16' : ($date === '6 Jun' ? '24' : ($date === '7 Jun' ? '16' : ($date === '8 Jun' ? '24' : ($date === '9 Jun' ? '16' : ($date === '10 Jun' ? '8' : ($date === '11 Jun' ? '16' : ($date === '12 Jun' ? '24' : ($date === '13 Jun' ? '32' : '36')))))))))) }}"></div>
                                    </div>
                                    
                                    <!-- Date label -->
                                    <div class="text-xs mt-2 text-gray-400">{{ $date }}</div>
                                </div>
                            @endforeach
                        </div>
                        

                    </div>
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
        
        // dark mode toggle
        function toggleDarkMode() {
            document.documentElement.classList.toggle("dark");
            localStorage.setItem("theme", document.documentElement.classList.contains("dark") ? "dark" : "light");
        }

        // check for saved theme preference
        if (localStorage.getItem("theme") === "dark" || 
            (!localStorage.getItem("theme") && window.matchMedia("(prefers-color-scheme: dark)").matches)) {
            document.documentElement.classList.add("dark");
        }
    </script>
    
</body>
</html>