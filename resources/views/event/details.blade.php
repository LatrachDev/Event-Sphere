<!DOCTYPE html>
<html lang="en" class="scroll-smooth overflow-x-hidden">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EventSphere - Event Details</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&family=Montserrat:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    @vite('resources/css/app.css')
</head>
<body class="bg-light-background dark:bg-dark-background dark:text-dark-text transition-colors duration-2000 overflow-x-hidden">

    <header class="fixed top-0 w-full flex items-center justify-between px-4 sm:px-10 py-5 font-poppins bg-dark-background/50 backdrop-blur-xl z-50">
        <a href="{{ route('home') }}"><img src="{{ asset('images/EventSphere_Logo.png') }}" alt="Logo" class="w-32 sm:w-48"></a>
        <nav class="text-dark-text hidden md:flex space-x-6 lg:space-x-8 items-center">
            <a href="#main" class="text-dark-text hover:text-dark-accent dark:hover:text-dark-accent duration-300">My tickets</a>
            <button class="dark:text-dark-text hover:text-dark-accent dark:hover:text-dark-accent duration-300" onclick="toggleDarkMode()">
                <i class="fa-solid fa-sun"></i> <span class="hidden sm:inline">Mode</span>
            </button>
            <form action="{{ route('logout') }}" method="POST" class="text-light-background bg-light-accent py-2 px-4 sm:px-6 rounded-full dark:text-dark-text dark:bg-dark-accent hover:bg-light-primary dark:hover:bg-light-primary duration-300">
                @csrf
                <button>logout</button>
            </form>
        </nav>
    </header>

    <div class=" mx-auto bg-cover bg-center h-[90vh] rounded-xl drop-shadow-lg mt-20" style="background-image: url('{{ asset('storage/' . $event->image) }}')">
        <!-- Overlay gradient -->
        <div class="absolute inset-0 rounded-xl bg-gradient-to-r from-black/100 to-black/0 z-10"></div>
        
        <!-- Event Details -->
        <div class="relative z-20 p-10 text-white flex flex-col justify-center h-full max-w-[50%] space-y-5">
            <p class="text-sm mb-1">{{ \Carbon\Carbon::parse($event->start_time)->format('M d, Y h:i A') }}</p>
            <h2 class="text-4xl font-extrabold leading-tight mb-2">{{ $event->title }}</h2>
            <p class="text-base sm:text-lg mb-4">{{ $event->description }}</p>
            <div class="flex items-center space-x-4">
                <div class="bg-light-accent py-2 px-4 rounded-full text-sm">
                    <span class="font-bold text-dark-text">Price:</span> ${{ $event->price }}
                </div>
                <div class="bg-light-accent py-2 px-4 rounded-full text-sm">
                    <span class="font-bold text-dark-text">Tickets:</span> {{ $event->number_of_tickets }} Available
                </div>
            </div>
            
            @if (\Carbon\Carbon::parse($event->start_time)->isPast())
            <div class="px-5 py-2 border font-light border-white tracking-widest hover:bg-light-error text-dark-text transition-all duration-300 w-fit">
                CLOSED
            </div>
            @else
            <form action="{{ route('checkout.session') }}" method="POST" class="px-5 py-2 border font-light border-white tracking-widest text-white hover:bg-white hover:text-black transition-all duration-300 w-fit">
                @csrf
                <input type="hidden" name="event_id" value="{{ $event->id }}">
                <button type="submit">BOOK NOW</button>    
            </form>
            @endif
        </div>
    </div>

    <div class="w-full flex justify-center items-center mt-28 px-4 sm:px-10">
        <!-- Comments Section -->
        <div class="mt-16 max-w-7xl mx-auto px-4 sm:px-10">
            <h3 class="text-2xl font-semibold text-light-text dark:text-dark-text mb-4">Comments</h3>
            
            <!-- Static Comments -->
            <div class="space-y-6">
                <!-- Comment 1 -->
                <div class="p-4 border border-light-accent rounded-lg shadow-md bg-gray-50 dark:bg-dark-background dark:border-dark-accent">
                    <p class="font-bold text-light-text dark:text-dark-text">John Doe</p>
                    <p class="text-sm text-gray-600 dark:text-gray-400">March 25, 2025 2:15 PM</p>
                    <p class="mt-2 text-gray-700 dark:text-dark-text">This event looks amazing! I'm so excited to attend it. Hope to see you all there!</p>
                </div>
                
                <!-- Comment 2 -->
                <div class="p-4 border border-light-accent rounded-lg shadow-md bg-gray-50 dark:bg-dark-background dark:border-dark-accent">
                    <p class="font-bold text-light-text dark:text-dark-text">Jane Smith</p>
                    <p class="text-sm text-gray-600 dark:text-gray-400">March 26, 2025 11:30 AM</p>
                    <p class="mt-2 text-gray-700 dark:text-dark-text">I have a question about the tickets. Are there any discounts for group bookings?</p>
                </div>
                
                <!-- Comment 3 -->
                <div class="p-4 border border-light-accent rounded-lg shadow-md bg-gray-50 dark:bg-dark-background dark:border-dark-accent">
                    <p class="font-bold text-light-text dark:text-dark-text">Mike Johnson</p>
                    <p class="text-sm text-gray-600 dark:text-gray-400">March 27, 2025 8:50 AM</p>
                    <p class="mt-2 text-gray-700 dark:text-dark-text">Looking forward to this event! Do we need to bring printed tickets or can we show them on our phones?</p>
                </div>
            </div>

            <!-- Comment Form -->
            <div class="mt-8">
                <h4 class="text-xl font-semibold text-light-text dark:text-dark-text mb-4">Leave a Comment</h4>
                
                <form  method="POST" class="space-y-4">
                    @csrf
                    <textarea name="comment" rows="4" class="shadow-md w-full p-4 border rounded-lg bg-gray-100 text-light-text dark:bg-dark-background dark:text-dark-text placeholder-gray-500 placeholder:text-sm" placeholder="Write your comment..."></textarea>
                    
                    <div class="text-right">
                        <button type="submit" class="px-6 py-2 bg-light-accent text-light-text rounded-full hover:bg-light-primary dark:text-dark-text dark:bg-dark-accent dark:hover:bg-light-primary duration-300">
                            Submit Comment
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

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
