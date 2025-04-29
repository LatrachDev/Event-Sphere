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

    <x-header />
    
    <div class=" mx-auto bg-cover bg-center h-[89vh] drop-shadow-lg mt-20" style="background-image: url('{{ asset('storage/' . $event->image) }}')">
    @if (session('error'))
        <div class="fixed top-24 left-1/2 transform -translate-x-1/2 w-[90%] max-w-md z-50">
            <div id="errorMessage" class="flex items-start justify-between gap-4 bg-red-100 text-red-800 dark:bg-red-200 dark:text-red-900 border border-red-300 dark:border-red-400 p-4 rounded-xl shadow-lg animate-slide-down">
                <div class="flex-1">
                    <strong class="block font-semibold">Oops!</strong>
                    <span class="block text-sm mt-1">{{ session('error') }}</span>
                </div>
            </div>
        </div>



        <style>
            @keyframes slide-down {
                from { opacity: 0; transform: translateY(-20px); }
                to { opacity: 1; transform: translateY(0); }
            }
        </style>
    @endif
        
        <!-- Overlay gradient -->
        <div class="absolute inset-0
         bg-gradient-to-r from-black/100 to-black/0 z-10"></div>
        
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
