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
        <img src="{{ asset('images/EventSphere_Logo.png') }}" alt="Logo" class="w-32 sm:w-48">
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

                <a href="#main" class="text-light-text dark:text-dark-text hover:text-dark-accent dark:hover:text-dark-accent duration-300">Home</a>
                <a href="#events" class="text-light-text dark:text-dark-text hover:text-dark-accent dark:hover:text-dark-accent duration-300">Explore</a>
                <a href="#contact" class="text-light-text dark:text-dark-text hover:text-dark-accent dark:hover:text-dark-accent duration-300">Contact</a>
                <a href="#about" class="text-light-text dark:text-dark-text hover:text-dark-accent dark:hover:text-dark-accent duration-300">About</a>
                
                <button class="mx-auto text-light-text dark:text-dark-text hover:text-dark-accent dark:hover:text-dark-accent duration-300 flex items-center" onclick="toggleDarkMode()">
                    <i class="fa-solid fa-sun mr-2"></i> Dark Mode
                </button>

                <a href="{{ route('show.login') }}" class="bg-light-accent text-dark-text px-6 py-2 rounded-full">Login</a>
            
            </div>
        </div>
    </header>

    <h3 class="text-center text-3xl text-light-text dark:text-dark-text mt-40">welcome back <span class="font-bold">{{ explode(' ', Auth::user()->name)[0] }} !</span></h3>

    <div class="flex justify-center my-10">
        <div class="flex items-center bg-gray-300 shadow-md rounded-full px-4 py-2 w-full max-w-xl border">
            <div class="flex-shrink-0">
                <svg width="24" height="24" viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-black">
                    <path d="M31.85 34.125L21.6125 23.8875C20.8 24.5375 19.8656 25.0521 18.8094 25.4313C17.7531 25.8104 16.6292 26 15.4375 26C12.4854 26 9.98698 24.9776 7.94219 22.9328C5.8974 20.888 4.875 18.3896 4.875 15.4375C4.875 12.4854 5.8974 9.98698 7.94219 7.94219C9.98698 5.8974 12.4854 4.875 15.4375 4.875C18.3896 4.875 20.888 5.8974 22.9328 7.94219C24.9776 9.98698 26 12.4854 26 15.4375C26 16.6292 25.8104 17.7531 25.4313 18.8094C25.0521 19.8656 24.5375 20.8 23.8875 21.6125L34.125 31.85L31.85 34.125ZM15.4375 22.75C17.4688 22.75 19.1953 22.0391 20.6172 20.6172C22.0391 19.1953 22.75 17.4688 22.75 15.4375C22.75 13.4062 22.0391 11.6797 20.6172 10.2578C19.1953 8.83594 17.4688 8.125 15.4375 8.125C13.4062 8.125 11.6797 8.83594 10.2578 10.2578C8.83594 11.6797 8.125 13.4062 8.125 15.4375C8.125 17.4688 8.83594 19.1953 10.2578 20.6172C11.6797 22.0391 13.4062 22.75 15.4375 22.75Z" fill="#1D1B20"/>
                </svg>
            </div>
            <input type="text" placeholder="Search For Events.." class="ml-4 bg-gray-300 placeholder:text-gray-400 placeholder:tracking-widest focus:outline-none text-gray-800 w-full">
        </div>
    </div>

    <div class="w-8/12 mx-auto mt-10">
        <h1 class="text-2xl md:text-4xl uppercase font-semibold text-center font-poppins">upcoming Events</h1>
        <p class="font-poppins text-center text-sm md:text-xl font-light my-10">Don't miss out on the best concerts, club nights, and sporting action book your spot now and make memories that last a lifetime!</p>
    </div>

    <!-- events card -->
    <div class="px-4 sm:px-8 mt-5 font-poppins mb-10">
        <div class="relative max-w-[1000px] mx-auto bg-cover bg-center sm:aspect-[2/1] aspect-[4/3] max-h-[500px] sm:max-h-[500px] overflow-hidden rounded-xl drop-shadow-lg"
            style="background-image: url('{{ asset('images/event-pic.jpg') }}')">
            
            <!-- Overlay gradient -->
            <div class="absolute inset-0 bg-gradient-to-r from-black/100 to-black/0 z-10"></div>

            <!-- Content -->
            <div class="relative z-20 p-6 text-white flex flex-col justify-center h-full max-w-[60%] space-y-5">
                <p class="text-sm mb-1">July 27/05/2026</p>
                <h2 class="text-3xl sm:text-4xl font-extrabold leading-tight mb-2">MUSIC FEST 2025</h2>
                <p class="text-base sm:text-lg mb-4">An unforgettable night of live performances and entertainment.</p>
                <button class="px-5 py-2 border font-light  border-white tracking-widest text-white hover:bg-white hover:text-black transition-all duration-300 w-fit">
                    VIEW DETAILS
                </button>
            </div>
            
        </div>
    </div>

    <!-- events card 2 -->
    <div class="px-4 sm:px-8 mt-5 font-poppins mb-10">
        <div class="relative max-w-[1000px] mx-auto bg-cover bg-center sm:aspect-[2/1] aspect-[4/3] max-h-[500px] sm:max-h-[500px] overflow-hidden rounded-xl drop-shadow-lg"
            style="background-image: url('{{ asset('images/rock.jpg') }}')">
            
            <!-- Overlay gradient -->
            <div class="absolute inset-0 bg-gradient-to-r from-black/100 to-black/0 z-10"></div>

            <!-- Content -->
            <div class="relative z-20 p-6 text-white flex flex-col justify-center h-full max-w-[60%]">
                <p class="text-sm mb-1">September 3, 2025</p>
                <h2 class="text-3xl sm:text-4xl font-extrabold leading-tight mb-2">Rock & Roll Live Night</h2>
                <p class="text-base sm:text-lg mb-4">Experience the energy of live rock bands performing your favorite hits in an unforgettable concert!</p>
                <button class="px-5 py-2 border font-light  border-white tracking-widest text-white hover:bg-white hover:text-black transition-all duration-300 w-fit">
                    VIEW DETAILS
                </button>
            </div>
            
        </div>
    </div>

    <!-- events card 3 -->
    <div class="px-4 sm:px-8 mt-5 font-poppins mb-10">
        <div class="relative max-w-[1000px] mx-auto bg-cover bg-center sm:aspect-[2/1] aspect-[4/3] max-h-[500px] sm:max-h-[500px] overflow-hidden rounded-xl drop-shadow-lg"
            style="background-image: url('{{ asset('images/event-pic.jpg') }}')">
            
            <!-- overlay gradient -->
            <div class="absolute inset-0 bg-gradient-to-r from-black/100 to-black/0 z-10"></div>

            <!-- content -->
            <div class="relative z-20 p-6 text-white flex flex-col justify-center h-full max-w-[60%]">
                <p class="text-sm mb-1">27/05/2026</p>
                <h2 class="text-3xl sm:text-4xl font-extrabold leading-tight mb-2">MUSIC FEST 2025</h2>
                <p class="text-base sm:text-lg mb-4">An unforgettable night of live performances and entertainment.</p>
                <button class="px-5 py-2 border font-light  border-white tracking-widest text-white hover:bg-white hover:text-black transition-all duration-300 w-fit">
                    VIEW DETAILS
                </button>
            </div>
            
        </div>
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