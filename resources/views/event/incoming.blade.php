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

    <x-header />
    
    <!-- events card -->
    <div class="mt-28">
        @forelse ($incomingEvents as $event)

        <div class="px-4 sm:px-8 mt-5 font-poppins mb-10">
        <div class="relative max-w-[1000px] mx-auto bg-cover bg-center sm:aspect-[2/1] aspect-[4/3] max-h-[500px] sm:max-h-[500px] overflow-hidden rounded-xl drop-shadow-lg"
        style="background-image: url('{{ asset('storage/' . $event->image) }}')">

        <!-- Overlay gradient -->
        <div class="absolute inset-0 bg-gradient-to-r from-black/100 to-black/0 z-10"></div>
        
        <!-- Content -->
        <div class="relative z-20 p-6 text-white flex flex-col justify-center h-full max-w-[60%] space-y-5">
            <p class="text-sm mb-1">{{ $event->start_time }}</p>
            <h2 class="text-3xl sm:text-4xl font-extrabold leading-tight mb-2">{{ $event->title }}</h2>
            <p class="text-base sm:text-lg mb-4">{{ $event->description }}</p>

            <a href="{{ route('details', ['id' => $event->id]) }}" class="px-5 py-2 border font-light  border-white tracking-widest text-white hover:bg-white hover:text-black transition-all duration-300 w-fit">
                VIEW DETAILS
            </a>
            
        </div>
        </div>
        </div>
        @empty
        <div class="w-full flex justify-center items-center mt-10">
            <p class="text-xl text-gray-500">No events available at the moment.</p>
        </div>
        @endforelse
    </div>
    
    <div class="w-full">
        <div class="mt-4 mx-auto w-8/12">
            {{ $incomingEvents->links() }}
        </div>
    </div>

        

    <x-footer />
    
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