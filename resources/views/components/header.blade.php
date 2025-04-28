<header class="fixed top-0 w-full flex items-center justify-between px-4 sm:px-10 py-5 font-poppins bg-dark-background/50 backdrop-blur-xl z-50">
    
    <!-- desktop -->
    <a href="{{ route('home') }}"><img src="{{ asset('images/EventSphere_Logo.png') }}" alt="Logo" class="w-32 sm:w-48"></a>
    <nav class="text-dark-text hidden md:flex space-x-6 lg:space-x-8 items-center">
        <a href="{{ route('home') }}" class="text-dark-text hover:text-dark-accent dark:hover:text-dark-accent duration-300">Home</a>
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

            <a href="{{ route('ticket') }}" class="text-light-text dark:text-dark-text hover:text-dark-accent dark:hover:text-dark-accent duration-300">My tickets</a>
            <a href="{{ route('pastEvents') }}" class="text-light-text dark:text-dark-text hover:text-dark-accent dark:hover:text-dark-accent duration-300">Closed</a>
            <a href="{{ route('incomingEvents') }}" class="text-light-text dark:text-dark-text hover:text-dark-accent dark:hover:text-dark-accent duration-300">Incoming</a>
            
            <button class="mx-auto text-light-text dark:text-dark-text hover:text-dark-accent dark:hover:text-dark-accent duration-300 flex items-center" onclick="toggleDarkMode()">
                <i class="fa-solid fa-sun mr-2"></i> Dark Mode
            </button>

            <a href="{{ route('show.login') }}" class="bg-light-accent text-dark-text px-6 py-2 rounded-full">Login</a>
        
        </div>
    </div>
</header>