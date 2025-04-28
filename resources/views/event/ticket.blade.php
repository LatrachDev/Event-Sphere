<!DOCTYPE html>
<html lang="en" class="scroll-smooth overflow-x-hidden">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EventSphere</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&family=Montserrat:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    @vite('resources/css/app.css')
</head>
<body class="bg-light-background dark:bg-dark-background dark:text-dark-text transition-colors duration-2000 overflow-x-hidden">

<header class="fixed top-0 w-full flex items-center justify-between px-4 sm:px-10 py-5 font-poppins bg-dark-background/50 backdrop-blur-xl z-50">
        
        <!-- desktop -->
        <a href="{{ route('home') }}"><img src="{{ asset('images/EventSphere_Logo.png') }}" alt="Logo" class="w-32 sm:w-48"></a>
        <nav class="text-dark-text hidden md:flex space-x-6 lg:space-x-8 items-center">
            <a href="{{ route('ticket') }}" class="text-dark-text hover:text-dark-accent dark:hover:text-dark-accent duration-300">My tickets</a>
            <a href="{{ route('pastEvents') }}" class="text-dark-text hover:text-dark-accent dark:hover:text-dark-accent duration-300">Closed</a>
            <a href="{{ route('incomingEvents') }}" class="text-dark-text hover:text-dark-accent dark:hover:text-dark-accent duration-300">Incoming</a>
            
            
            <button class="dark:text-dark-text hover:text-dark-accent dark:hover:text-dark-accent duration-300" onclick="toggleDarkMode()">
                <i class="fa-solid fa-sun"></i> <span class="hidden sm:inline">Mode</span>
            </button>

            <form action="{{ route('logout') }}" method="POST" class="text-light-background bg-light-accent py-2 px-4 sm:px-6 rounded-full dark:text-dark-text dark:bg-dark-accent hover:bg-light-primary dark:hover:bg-light-primary duration-300">
                @csrf
                <button>logout</button>
            </form>
            
        </nav>
        
        <!-- mobile button -->
        <button id="menu-button" class="md:hidden text-2xl text-dark-text">
            <i class="fa-solid fa-bars"></i>
        </button>

        <!-- mobile -->
        <div id="mobile-menu" class="absolute top-0 left-0 w-full h-screen bg-light-background dark:bg-dark-background shadow-lg md:hidden transform -translate-y-full transition duration-500 ease-in-out">  
            <div class="flex flex-col space-y-10 p-6 mt-16 text-center">
                
            <button id="close-button" class="absolute right-6 px-6 top-10 text-2xl">
                    <i class="fa-solid fa-xmark"></i>
                </button>

                <a href="{{ route('ticket') }}" class="text-dark-text hover:text-dark-accent dark:hover:text-dark-accent duration-300">My tickets</a>
                <a href="{{ route('pastEvents') }}" class="text-dark-text hover:text-dark-accent dark:hover:text-dark-accent duration-300">Closed</a>
                <a href="{{ route('incomingEvents') }}" class="text-dark-text hover:text-dark-accent dark:hover:text-dark-accent duration-300">Incoming</a>
                
                <button class="mx-auto text-light-text dark:text-dark-text hover:text-dark-accent dark:hover:text-dark-accent duration-300 flex items-center" onclick="toggleDarkMode()">
                    <i class="fa-solid fa-sun mr-2"></i> Dark Mode
                </button>

                <a href="{{ route('show.login') }}" class="bg-light-accent text-dark-text px-6 py-2 rounded-full">Login</a>
            
            </div>
        </div>
    </header>

    
    <div class="mt-28 font-poppins px-4 sm:px-10">
    <h1 class="text-3xl sm:text-4xl font-bold mb-8 dark:text-dark-text text-center">
        Welcome, {{ Auth::user()->name }} 👋
    </h1>

    @forelse ($tickets as $ticket)
        <div class="max-w-4xl mx-auto bg-dark-secondary rounded-xl shadow-lg mb-8 overflow-hidden transition transform hover:scale-[1.01] duration-300">
            <div class="grid sm:grid-cols-3">
                <!-- Event Image -->
                <div class="col-span-1">
                    <img src="{{ asset('storage/' . $ticket->event->image) }}" alt="{{ $ticket->event->title }}" class="w-full h-full object-cover">
                </div>
                
                <!-- Event Info -->
                <div class="col-span-2 p-6 space-y-4">
                    <h2 class="text-2xl font-semibold text-white">{{ $ticket->event->title }}</h2>
                    <h2 class="text-sm font-semibold text-white">{{ $ticket->user->name }}</h2>
                    
                    <p class="text-base text-gray-300">{{ $ticket->event->description }}</p>
                    <div class="text-sm  text-gray-300">
                        <p><strong>Start Date:</strong> {{ \Carbon\Carbon::parse($ticket->event->start_time)->format('F j, Y - H:i') }}</p>
                        <p><strong>Price:</strong> {{ number_format($ticket->event->price, 2) }} $</p>
                    </div>
                    <div class="flex justify-end">
                        <a href="{{ route('download.ticket', $ticket->id) }}" 
                            class="bg-light-accent text-dark-text px-4 py-2 rounded-full hover:bg-light-primary dark:hover:bg-light-primary transition">
                            Download PDF
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @empty
        <div class="text-center text-lg text-gray-500 mt-10">
            You haven't booked any tickets yet.
        </div>
    @endforelse
    </div>

        

    <!-- footer -->
    <footer class="bg-[#721093] text-dark-text py-6 font-poppins mt-10">
        <div class="text-center text-sm">
            <p>Copyright: EventSphere © 2025</p>
            <div class="flex justify-center space-x-4 mt-4">
                <a href="https://facebook.com" target="_blank" class="hover:text-dark-accent">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="https://instagram.com" target="_blank" class="hover:text-dark-accent">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="https://twitter.com" target="_blank" class="hover:text-dark-accent">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="https://linkedin.com" target="_blank" class="hover:text-dark-accent">
                    <i class="fab fa-linkedin-in"></i>
                </a>
            </div>
        </div>
    </footer>
    
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