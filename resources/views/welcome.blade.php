<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EventSphere</title>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&family=Montserrat:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
</head>
<body class="bg-light-background dark:bg-dark-background dark:text-dark-text transition-colors duration-2000">

    <header class="fixed top-0 w-full flex justify-between items-center px-4 sm:px-10 py-5 font-poppins bg-dark-background/50 backdrop-blur-xl z-50">
        <img src="{{ asset('images/EventSphere_Logo.png') }}" alt="Logo" class="w-32 sm:w-48">
        
        <!-- desktop -->
        <nav class="hidden md:flex space-x-6 lg:space-x-8 items-center">
            <a href="" class="text-dark-text hover:text-dark-accent dark:hover:text-dark-accent duration-300">Home</a>
            <a href="" class="text-dark-text hover:text-dark-accent dark:hover:text-dark-accent duration-300">Explore</a>
            <a href="" class="text-dark-text hover:text-dark-accent dark:hover:text-dark-accent duration-300">Contact</a>
            <a href="#about" class="text-dark-text hover:text-dark-accent dark:hover:text-dark-accent duration-300">About</a>
            
            <button class="text-dark-text hover:text-dark-accent dark:hover:text-dark-accent duration-300" onclick="toggleDarkMode()">
                <i class="fa-solid fa-sun"></i> <span class="hidden sm:inline">Mode</span>
            </button>

            <a href="" class="text-light-background bg-light-accent py-2 px-4 sm:px-6 rounded-full dark:text-dark-text dark:bg-dark-accent hover:bg-light-primary dark:hover:bg-light-primary duration-300">Login</a>
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

                <a href="" class="text-light-text dark:text-dark-text hover:text-dark-accent dark:hover:text-dark-accent duration-300">Home</a>
                <a href="" class="text-light-text dark:text-dark-text hover:text-dark-accent dark:hover:text-dark-accent duration-300">Explore</a>
                <a href="" class="text-light-text dark:text-dark-text hover:text-dark-accent dark:hover:text-dark-accent duration-300">Contact</a>
                <a href="#about" class="text-light-text dark:text-dark-text hover:text-dark-accent dark:hover:text-dark-accent duration-300">About</a>
                
                <button class="mx-auto text-light-text dark:text-dark-text hover:text-dark-accent dark:hover:text-dark-accent duration-300 flex items-center" onclick="toggleDarkMode()">
                    <i class="fa-solid fa-sun mr-2"></i> Dark Mode
                </button>

                <a href="#" class="bg-light-accent px-6 py-2 rounded-full">Login</a>
            
            </div>
        </div>
    </header>

    <main style="background-image: url({{ asset('images/main-background.jpg') }})" 
        class="bg-[{{ asset('images/main-background.jpg') }}] font-montserrat bg-cover bg-center bg-no-repeat h-screen flex flex-col justify-center items-center text-center">
        
        <h1 class="text-2xl sm:text-4xl md:text-6xl lg:text-8xl uppercase font-extrabold text-dark-text">
            Discover & Book
        </h1>

        <div class="w-[240px] md:w-[600px] lg:w-[950px] my-3 lg:my-5">
            <img src="{{ asset('images/Exciting Events.png') }}" alt="Logo">
        </div>

        <div class="w-10/12 px-2 sm:px-0">

            <p class="px-2 font-light text-sm sm:text-2xl text-dark-text ">
                Explore a variety of events, from tech meetups to music concerts.
            </p>
            
        </div>
        <button class="font-bold text-sm h-10 md:text-xl md:h-12 bg-gradient-to-r from-dark-accent to-dark-secondary text-light-background px-4 md:px-6 py-2 rounded-md mt-8 md:mt-10 transition-all hover:bg-gradient-to-r hover:from-dark-secondary hover:to-dark-secondary hover:shadow-lg duration-300">
            Discover Events
        </button>
        
       
        <!-- <p style="-webkit-text-stroke: 2px white;" class="text-3xl sm:text-4xl md:text-6xl lg:text-8xl font-extrabold uppercase text-transparent stroke-white tracking-wide">Exciting Events</p> -->

    </main>
    
    <div id="about" class="p-10 sm:p-20 font-poppins">
        <h3 class="uppercase font-semibold text-center text-xl sm:text-2xl lg:text-4xl">The Sphere of Memorable Moments</h3>
        <img src="{{ asset('images/EventSphere_Logo1.png') }}" alt="Logo" class="lg:w-80 w-48 sm:w-56 md:w-64 mx-auto">
        <p class="text-justify px-4 font-light">EventSphere is designed to simplify event planning and participation. Whether you're an organizer looking to create seamless events or an attendee searching for memorable experiences, EventSphere has everything you need in one place.</p>
    </div>

    <div class="p-10 sm:p-20 font-poppins">
        <h3 class="uppercase font-semibold text-center text-xl sm:text-2xl lg:text-4xl">Trending Events</h3>
        <p class="text-center px-4 font-light text-sm sm:text-xl my-5">Stay updated with the most popular events happening around you.</p>
        
        <!-- Cards Container -->
        <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-3 gap-6 justify-center items-center">

            <!-- Card 1 -->
            <div class="bg-gradient-to-r from-[#C228F6] to-[#721093] text-dark-text w-11/12 sm:w-8/12 lg:w-full rounded-lg drop-shadow-md mx-auto border border-light-accent dark:border-dark-text">
                <img src="{{ asset('images/live-music.jpg') }}" alt="Event" class="w-full h-40 sm:h-44 object-cover rounded-t-lg">
                
                <h4 class="px-3 pt-2 font-semibold text-lg w-full sm:text-xl text-dark-text">Music Fest 2025</h4>
                
                <div class="px-3 py-2 flex justify-between items-end text-xs sm:text-sm">   
                    <p class="font-light text-[10px] text-dark-text pr-2">An unforgettable night of live performances and entertainment.</p>
                    
                    <div class="text-right">
                        <p class="text-xs sm:text-sm font-light text-dark-text">27/05/2026</p>
                        <a href="" class="text-[10px] sm:text-xs font-semibold text-dark-text">View details</a>
                    </div>
                </div>
            </div>

            <!-- card 2 -->
            <div class="bg-gradient-to-r from-[#C228F6] to-[#721093] text-dark-text w-11/12 sm:w-8/12 lg:w-full rounded-lg drop-shadow-md mx-auto border border-light-accent dark:border-dark-text">
                <img src="{{ asset('images/live-music.jpg') }}" alt="Event" class="w-full h-40 sm:h-44 object-cover rounded-t-lg">
                
                <h4 class="px-3 pt-2 font-semibold text-lg w-full sm:text-xl text-dark-text">Music Fest 2025</h4>
                
                <div class="px-3 py-2 flex justify-between items-end text-xs sm:text-sm">   
                    <p class="font-light text-[10px] text-dark-text pr-2">An unforgettable night of live performances and entertainment.</p>
                    
                    <div class="text-right">
                        <p class="text-xs sm:text-sm font-light text-dark-text">27/05/2026</p>
                        <a href="" class="text-[10px] sm:text-xs font-semibold text-dark-text">View details</a>
                    </div>
                </div>
            </div>
            
            <!-- card 3 -->
            <div class="bg-gradient-to-r from-[#C228F6] to-[#721093] text-dark-text w-11/12 sm:w-8/12 lg:w-full rounded-lg drop-shadow-md mx-auto border border-light-accent dark:border-dark-text">
                <img src="{{ asset('images/live-music.jpg') }}" alt="Event" class="w-full h-40 sm:h-44 object-cover rounded-t-lg">
                
                <h4 class="px-3 pt-2 font-semibold text-lg w-full sm:text-xl text-dark-text">Music Fest 2025</h4>
                
                <div class="px-3 py-2 flex justify-between items-end text-xs sm:text-sm">   
                    <p class="font-light text-[10px] text-dark-text pr-2">An unforgettable night of live performances and entertainment.</p>
                    
                    <div class="text-right">
                        <p class="text-xs sm:text-sm font-light text-dark-text">27/05/2026</p>
                        <a href="" class="text-[10px] sm:text-xs font-semibold text-dark-text">View details</a>
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
