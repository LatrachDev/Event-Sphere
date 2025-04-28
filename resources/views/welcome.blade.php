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

    <header class="fixed top-0 w-full flex justify-between items-center px-4 sm:px-10 py-5 font-poppins bg-dark-background/50 backdrop-blur-xl z-50">
        <img src="{{ asset('images/EventSphere_Logo.png') }}" alt="Logo" class="w-32 sm:w-48">
        
        <!-- desktop -->
        <nav class="hidden md:flex space-x-6 lg:space-x-8 items-center">
            <a href="#main" class="text-dark-text hover:text-dark-accent dark:hover:text-dark-accent duration-300">Home</a>
            <a href="#events" class="text-dark-text hover:text-dark-accent dark:hover:text-dark-accent duration-300">Explore</a>
            <a href="#contact" class="text-dark-text hover:text-dark-accent dark:hover:text-dark-accent duration-300">Contact</a>
            <a href="#about" class="text-dark-text hover:text-dark-accent dark:hover:text-dark-accent duration-300">About</a>
            
            <button class="text-dark-text hover:text-dark-accent dark:hover:text-dark-accent duration-300" onclick="toggleDarkMode()">
                <i class="fa-solid fa-sun"></i> <span class="hidden sm:inline">Mode</span>
            </button>

            <a href="{{ route('show.login') }}" class="text-light-background bg-light-accent py-2 px-4 sm:px-6 rounded-full dark:text-dark-text dark:bg-dark-accent hover:bg-light-primary dark:hover:bg-light-primary duration-300">Login</a>
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

    <main id="main" style="background-image: url({{ asset('images/main-background.jpg') }})" 
        class="bg-[{{ asset('images/main-background.jpg') }}] font-montserrat bg-cover bg-center bg-no-repeat h-screen flex flex-col justify-center items-center text-center">
        
        <h1 class="text-2xl sm:text-4xl md:text-6xl lg:text-8xl uppercase font-extrabold text-dark-text" data-aos="zoom-in">
            Discover & Book
        </h1>

        <div class="w-[240px] sm:w-[360px] md:w-[600px] lg:w-[950px] my-3 lg:my-5" data-aos="zoom-in">
            <img src="{{ asset('images/Exciting Events.png') }}" alt="Logo">
        </div>

        <div class="w-10/12 px-2 sm:px-0" data-aos="zoom-in">

            <p class="px-2 font-light text-sm sm:text-2xl text-dark-text ">
                Explore a variety of events, from tech meetups to music concerts.
            </p>
            
        </div>
        <button class="font-bold text-sm h-10 md:text-xl md:h-12 bg-gradient-to-r from-dark-accent to-dark-secondary text-light-background px-4 px-2 py-1 text-xs md:text-sm md:px-6 md:py-2 rounded-md mt-8 md:mt-10 transition-all hover:bg-gradient-to-r hover:from-dark-secondary hover:to-dark-secondary hover:shadow-lg duration-300" data-aos="zoom-in">
            Discover Events
        </button>
        
       
        <!-- <p style="-webkit-text-stroke: 2px white;" class="text-3xl sm:text-4xl md:text-6xl lg:text-8xl font-extrabold uppercase text-transparent stroke-white tracking-wide">Exciting Events</p> -->

    </main>
    
    <!-- about -->
    <section id="about" class="px-10 sm:px-20 font-poppins mt-20">
        <div class="max-w-4xl  mx-auto text-center">
            <h3 class="uppercase font-semibold text-center text-xl sm:text-2xl lg:text-4xl" data-aos="fade-up"> 
                The Sphere of Memorable Moments
            </h3>
            <div class="flex flex-col md:flex-row justify-center items-center">
                <img src="{{ asset('images/EventSphere_Logo1.png') }}" 
                    alt="EventSphere Logo" 
                    class="w-40 sm:w-52 md:w-60 lg:w-72" data-aos="fade-up">
                
                <p class="text-xs sm:text-xl text-light-tex text-justify dark:text-dark-text font-light leading-relaxed px-6" data-aos="fade-up">
                    EventSphere is designed to simplify event planning and participation. 
                    Whether you're an organizer looking to create seamless events or an attendee 
                    searching for memorable experiences, EventSphere has everything you need in one place.
                </p>

            </div>
        </div>
    </section>


    <!-- trending events -->
    <section id="events" class="px-5 md:px-10 py-10 sm:px-20 sm:py-10 font-poppins" data-aos="fade-up">
        <h3 class="uppercase font-semibold text-center text-xl sm:text-2xl lg:text-4xl" >Trending Events</h3>
        <p class="text-center px-4 font-light text-sm sm:text-xl my-5 sm:my-10" >Stay updated with the most popular events happening around you.</p>
        
        <!-- cards container -->
        <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-3 gap-6 justify-center items-center px-0 sm:px-6">
            
            <!-- card 1 -->
            <div class="bg-gradient-to-r from-[#C228F6] to-[#721093] text-dark-text w-11/12 sm:w-8/12 lg:w-full rounded-lg shadow-md mx-auto border border-light-accent dark:border-dark-text hover:!scale-105 duration-300" data-aos="fade-right">
                <img src="{{ asset('images/singers-singing-studio.jpg') }}" alt="Event" class="w-full h-40 sm:h-44 object-cover rounded-t-lg">
                
                <h4 class="px-3 pt-2 font-semibold text-lg w-full sm:text-xl text-dark-text">Rock & Roll Live Night</h4>
                
                <div class="px-4 py-2 flex justify-between items-end text-xs sm:text-sm">   
                    <p class="font-light text-[10px] lg:text-[0.8rem] text-dark-text pr-2">An unforgettable night of live performances and entertainment.</p>
                    
                    <div class="text-right">
                        <p class="text-xs sm:text-sm font-light text-dark-text">27/05/2026</p>
                        <a href="" class="text-[10px] sm:text-xs font-semibold text-dark-text">View details</a>
                    </div>
                </div>
            </div>
            
            <!-- card 2 -->
            <div class="bg-gradient-to-r from-[#C228F6] to-[#721093] text-dark-text w-11/12 sm:w-8/12 lg:w-full rounded-lg shadow-md mx-auto border border-light-accent dark:border-dark-text hover:!scale-105 duration-300" data-aos="fade-up">
                <img src="{{ asset('images/crowd-people-concert-with-their-hands-air.jpg') }}" alt="Event" class="w-full h-40 sm:h-44 object-cover rounded-t-lg">
                
                <h4 class="px-3 pt-2 font-semibold text-lg w-full sm:text-xl text-dark-text">Music Fest 2025</h4>
                
                <div class="px-3 py-2 flex justify-between items-end text-xs sm:text-sm">   
                    <p class="font-light text-[10px] lg:text-[0.8rem] text-dark-text pr-2">An unforgettable night of live performances and entertainment.</p>
                    
                    <div class="text-right">
                        <p class="text-xs sm:text-sm font-light text-dark-text">27/05/2026</p>
                        <a href="" class="text-[10px] sm:text-xs font-semibold text-dark-text">View details</a>
                    </div>
                </div>
            </div>
            
            <!-- card 3 -->
            <div class="bg-gradient-to-r from-[#C228F6] to-[#721093] text-dark-text w-11/12 sm:w-8/12 lg:w-full rounded-lg shadow-md mx-auto border border-light-accent dark:border-dark-text hover:!scale-105 duration-300" data-aos="fade-left">
                <img src="{{ asset('images/people.jpg') }}" alt="Event" class="w-full h-40 sm:h-44 object-cover rounded-t-lg">
                
                <h4 class="px-3 pt-2 font-semibold text-lg w-full sm:text-xl text-dark-text">Street Football Cup</h4>
                
                <div class="px-3 py-2 flex justify-between items-end text-xs sm:text-sm">   
                    <p class="font-light text-[10px]  lg:text-[0.8rem] text-dark-text pr-2">An unforgettable night of live performances and entertainment.</p>
                    
                    <div class="text-right">
                        <p class="text-xs sm:text-sm font-light text-dark-text">27/05/2026</p>
                        <a href="" class="text-[10px] sm:text-xs font-semibold text-dark-text">View details</a>
                    </div>
                </div>
            </div>
            
            
        </div>
        
        <div class="w-full flex" data-aos="fade-up">
            <button class="mx-auto font-bold text-sm h-10 md:text-xl md:h-12 bg-gradient-to-r from-dark-accent to-dark-secondary text-light-background px-4 md:px-6 py-2 rounded-full mt-8 md:mt-10 transition-all hover:bg-gradient-to-r hover:from-dark-secondary hover:to-dark-secondary hover:shadow-lg duration-300">
                View all Events
            </button>
        </div> 
    </section>

    <!-- why choose eventsphere -->
    <section class="px-10 sm:px-20 font-poppins">
        <h3 data-aos="fade-up" class=" font-semibold text-center text-xl sm:text-2xl lg:text-4xl mb-10">Why choose EventSphere?</h3>
        
        <!-- cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 p-6 text-light-text dark:text-dark-text">
        
            <!-- Card 1 -->
            <div data-aos="zoom-in" class="flex flex-col items-left gap-4 p-6 bg-light-half dark:bg-dark-half drop-shadow-md rounded-xl hover:!scale-105 duration-300">
                <div class="w-3/12 lg:w-[20%] drop-shadow-[0_0_5px_rgba(210,139,234,0.4)] text-light-primary shadow-light-primary dark:fill-light-primary text-4xl">
                <svg  viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" id="secure" class="icon glyph fill-light-primary dark:fill-dark-primary"><path d="M19.42,3.83,12.24,2h0A.67.67,0,0,0,12,2a.67.67,0,0,0-.2,0h0L4.58,3.83A2,2,0,0,0,3.07,5.92l.42,5.51a12,12,0,0,0,7.24,10.11l.88.38h0a.91.91,0,0,0,.7,0h0l.88-.38a12,12,0,0,0,7.24-10.11l.42-5.51A2,2,0,0,0,19.42,3.83ZM15.71,9.71l-4,4a1,1,0,0,1-1.42,0l-2-2a1,1,0,0,1,1.42-1.42L11,11.59l3.29-3.3a1,1,0,0,1,1.42,1.42Z"></path></svg>
                </div>
                <p class="sm:text-lg font-light text-sm">Secure and fast booking process.</p>
            </div>

            <!-- Card 2 -->
            <div data-aos="zoom-in" class="flex flex-col items-left gap-4 p-6 bg-light-half dark:bg-dark-half drop-shadow-md rounded-xl hover:!scale-105 duration-300">
                <div class="text-[#D892F9] text-4xl">
                <svg class="w-3/12 lg:w-[20%] drop-shadow-[0_0_5px_rgba(210,139,234,0.4)] fill-light-primary dark:fill-dark-primary"  viewBox="0 0 155 169" xmlns="http://www.w3.org/2000/svg">
                    <path d="M139.5 48.8252V130.2C139.5 143.375 129.425 153.45 116.25 153.45H30.2251C30.2251 161.975 37.2001 168.95 45.7251 168.95H124C141.05 168.95 155 155 155 137.95V64.3252C155 55.8002 148.025 48.8252 139.5 48.8252Z"/>
                    <path d="M23.25 0V15.5H15.5C6.975 15.5 0 22.475 0 31V124C0 132.525 6.975 139.5 15.5 139.5H110.05C118.575 139.5 125.55 132.525 125.55 124V31C125.55 22.475 118.575 15.5 110.05 15.5H102.3V0H86.8V15.5H38.75V0H23.25ZM15.5 54.25H110.05V124H15.5V54.25Z" "/>
                    <path d="M90.675 117.8L72.075 106.95L54.25 117.8L58.9 96.8751L42.625 82.9251L64.325 81.3751L72.85 61.2251L81.375 80.6001L103.075 82.9251L86.8 96.8751L90.675 117.8Z"/>
                </svg>

                </div>
                <p class="sm:text-lg font-light text-sm">Wide range of categories including music, sports, and tech.</p>
            </div>

            <!-- Card 3 -->
            <div data-aos="zoom-in" class="flex flex-col items-left gap-4 p-6 bg-light-half dark:bg-dark-half drop-shadow-md rounded-xl hover:!scale-105 duration-300">
                <div class="w-3/12 lg:w-[20%] drop-shadow-[0_0_5px_rgba(210,139,234,0.4)] text-[#D892F9] text-4xl">
                    <svg class="fill-light-primary dark:fill-dark-primary"  viewBox="0 -3.5 39 39" version="1.1" xmlns="http://www.w3.org/2000/svg">
                    <title>ticket2</title>
                    <path d="M39 19.438v5.562c0 1.104-0.896 2-2 2h-35c-1.104 0-2-0.896-2-2v-5.5c1.657 0 3-1.344 3-3 0-1.657-1.343-3-3-3v-5.5c0-1.104 0.896-2 2-2h35c1.104 0 2 0.896 2 2v5.438c-1.657 0-3 1.343-3 3 0 1.656 1.343 3 3 3zM34 11c0-1.104-0.896-2-2-2h-25c-1.104 0-2 0.896-2 2v11c0 1.104 0.896 2 2 2h25c1.104 0 2-0.896 2-2v-11zM32 23h-25c-0.553 0-1-0.448-1-1v-11c0-0.553 0.447-1 1-1h25c0.552 0 1 0.447 1 1v11c0 0.552-0.448 1-1 1zM12.47 15.538l-0.907-2.58-0.907 2.58-2.614 0.11 2.054 1.704-0.709 2.648 2.176-1.526 2.175 1.526-0.708-2.647 2.053-1.704-2.613-0.111zM20.47 15.538l-0.907-2.58-0.907 2.58-2.614 0.11 2.054 1.704-0.709 2.648 2.176-1.526 2.175 1.526-0.708-2.647 2.053-1.704-2.613-0.111zM28.47 15.538l-0.907-2.58-0.907 2.58-2.613 0.11 2.053 1.704-0.709 2.648 2.176-1.526 2.175 1.526-0.708-2.647 2.053-1.704-2.613-0.111z"></path>
                    </svg>
                </div>
                <p class="sm:text-lg font-light text-sm">Easy event browsing and ticket reservations.</p>
            </div>

            <!-- Card 4 -->
            <div data-aos="zoom-in" class="flex flex-col items-left gap-4 p-6 bg-light-half dark:bg-dark-half drop-shadow-md rounded-xl hover:!scale-105 duration-300">
                <div class="w-3/12 lg:w-[20%] drop-shadow-[0_0_5px_rgba(210,139,234,0.2)] fill-light-primary dark:fill-dark-primary text-4xl">
                    <svg class="stroke-light-primary drop-shadow-[0_0_5px_rgba(210,139,234,0.2)] dark:stroke-dark-primary"  viewBox="0 0 167 152" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5 130V122.125C5 91.6803 28.7289 67 58 67"  stroke-width="10" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M111.596 69.1552C116.641 63.6149 125.359 63.6149 130.404 69.1552C132.955 71.9556 136.62 73.4737 140.403 73.2969C147.888 72.947 154.053 79.1115 153.703 86.5968C153.526 90.38 155.044 94.0452 157.845 96.5956C163.385 101.641 163.385 110.359 157.845 115.404C155.044 117.955 153.526 121.62 153.703 125.403C154.053 132.888 147.888 139.053 140.403 138.703C136.62 138.526 132.955 140.044 130.404 142.845C125.359 148.385 116.641 148.385 111.596 142.845C109.045 140.044 105.38 138.526 101.597 138.703C94.1115 139.053 87.947 132.888 88.2969 125.403C88.4737 121.62 86.9556 117.955 84.1552 115.404C78.6149 110.359 78.6149 101.641 84.1552 96.5956C86.9556 94.0452 88.4737 90.38 88.2969 86.5968C87.947 79.1115 94.1115 72.947 101.597 73.2969C105.38 73.4737 109.045 71.9556 111.596 69.1552Z"  stroke-width="10"/>
                        <path d="M109 105.5L117.667 114L135 97"  stroke-width="10" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M59 67C76.6728 67 91 53.1205 91 36C91 18.8792 76.6728 5 59 5C41.3269 5 27 18.8792 27 36C27 53.1205 41.3269 67 59 67Z"  stroke-width="10" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <p class="sm:text-lg font-light text-sm">User-friendly experience with intuitive navigation.</p>
            </div>

        </div>
        
    </section>
        
    <!-- reviews -->
    
    <div class="p-10 font-poppins">
        <h3 data-aos="fade-up" class=" font-semibold text-center text-xl sm:text-2xl lg:text-4xl ">What Our Users Say</h3>
    </div>
    
    <!-- container -->
    <div class="lg:flex px-10 mt-3 sm:px-20 font-poppins lg:space-x-5 lg:space-y-0">
        <!-- review1 -->
        <div data-aos="fade-up" class="border border-gray-200 dark:border-gray-700 px-5 py-3 sm:p-10 bg-light-half dark:bg-dark-half  drop-shadow-md mx-auto text-light-text dark:text-dark-text hover:!scale-105 duration-300">
           <div class="flex space-x-3 mb-5 items-center">
               <!-- quote -->
               <svg width="41" height="35" viewBox="0 0 41 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                   <path d="M10.3301 15.2802L10.3612 15.747H10.829H15.7122V33.9011H0.5L0.5 16.499C0.5 16.499 0.5 16.4989 0.5 16.4988C0.50286 9.53046 3.04697 5.86029 6.39401 3.83253C9.66308 1.852 13.7688 1.38966 17.318 1.12933L18.6853 7.41905C16.5675 7.9028 14.4796 8.49643 12.9242 9.57368C12.0765 10.1608 11.3748 10.8989 10.912 11.849C10.4491 12.7991 10.2401 13.9302 10.3301 15.2802ZM32.0507 15.2802L32.0819 15.747H32.5496H37.4329V33.9011H22.2206V16.499C22.2206 16.499 22.2206 16.4989 22.2206 16.4988C22.2234 9.53048 24.7675 5.8603 28.1146 3.83254C31.3836 1.85201 35.4894 1.38966 39.0386 1.12933L40.4059 7.41905C38.2882 7.9028 36.2002 8.49644 34.6448 9.57368C33.7971 10.1608 33.0954 10.8989 32.6326 11.849C32.1697 12.7991 31.9607 13.9302 32.0507 15.2802Z" stroke="#D28BEA"/>
               </svg>
               <h4 class="font-semibold text-xs sm:text-sm">Latrach M.</h4>
               <!-- 5 stars -->
               <p class="text-xs flex items-center w-20 h-20 space-x-1">
                   <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="drop-shadow-md text-yellow-500 inline-block" viewBox="0 0 24 24">
                   <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.857 1.428 8.837-7.364-3.868-7.364 3.868 1.428-8.837-6.064-5.857 8.332-1.151z"/>
                   </svg>
                   <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="drop-shadow-md text-yellow-500 inline-block" viewBox="0 0 24 24">
                   <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.857 1.428 8.837-7.364-3.868-7.364 3.868 1.428-8.837-6.064-5.857 8.332-1.151z"/>
                   </svg>
                   <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="drop-shadow-md text-yellow-500 inline-block" viewBox="0 0 24 24">
                   <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.857 1.428 8.837-7.364-3.868-7.364 3.868 1.428-8.837-6.064-5.857 8.332-1.151z"/>
                   </svg>
                   <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="drop-shadow-md text-yellow-500 inline-block" viewBox="0 0 24 24">
                   <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.857 1.428 8.837-7.364-3.868-7.364 3.868 1.428-8.837-6.064-5.857 8.332-1.151z"/>
                   </svg>
                   <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="drop-shadow-md text-yellow-500 inline-block" viewBox="0 0 24 24">
                   <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.857 1.428 8.837-7.364-3.868-7.364 3.868 1.428-8.837-6.064-5.857 8.332-1.151z"/>
                   </svg>
                   </svg>
               </p>
           </div>
           <p class="text-xs sm:text-sm">EventSphere made it so easy to find and book events. I loved the seamless experience!</p>
        </div>
        
         <!-- review2 -->
         <div data-aos="fade-up" class="px-5 py-3 my-4 sm:p-10 lg:scale-105 dark:bg-dark-primary bg-light-primary drop-shadow-md mx-auto text-dark-text dark:text-light-text hover:!scale-105 duration-300">
            <div class="flex space-x-3 mb-5 items-center">
                <!-- quote -->
                <svg class="stroke-light-half dark:stroke-dark-half" width="41" height="35" viewBox="0 0 41 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.3301 15.2802L10.3612 15.747H10.829H15.7122V33.9011H0.5L0.5 16.499C0.5 16.499 0.5 16.4989 0.5 16.4988C0.50286 9.53046 3.04697 5.86029 6.39401 3.83253C9.66308 1.852 13.7688 1.38966 17.318 1.12933L18.6853 7.41905C16.5675 7.9028 14.4796 8.49643 12.9242 9.57368C12.0765 10.1608 11.3748 10.8989 10.912 11.849C10.4491 12.7991 10.2401 13.9302 10.3301 15.2802ZM32.0507 15.2802L32.0819 15.747H32.5496H37.4329V33.9011H22.2206V16.499C22.2206 16.499 22.2206 16.4989 22.2206 16.4988C22.2234 9.53048 24.7675 5.8603 28.1146 3.83254C31.3836 1.85201 35.4894 1.38966 39.0386 1.12933L40.4059 7.41905C38.2882 7.9028 36.2002 8.49644 34.6448 9.57368C33.7971 10.1608 33.0954 10.8989 32.6326 11.849C32.1697 12.7991 31.9607 13.9302 32.0507 15.2802Z"/>
                </svg>
                <h4 class="font-semibold text-xs sm:text-sm">Latrach M.</h4>
                <!-- 5 stars -->
                <p class="text-xs flex items-center w-20 h-20 space-x-1">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="drop-shadow-md w-5 h-5 text-yellow-500 inline-block" viewBox="0 0 24 24">
                    <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.857 1.428 8.837-7.364-3.868-7.364 3.868 1.428-8.837-6.064-5.857 8.332-1.151z"/>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="drop-shadow-md w-5 h-5 text-yellow-500 inline-block" viewBox="0 0 24 24">
                    <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.857 1.428 8.837-7.364-3.868-7.364 3.868 1.428-8.837-6.064-5.857 8.332-1.151z"/>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="drop-shadow-md w-5 h-5 text-yellow-500 inline-block" viewBox="0 0 24 24">
                    <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.857 1.428 8.837-7.364-3.868-7.364 3.868 1.428-8.837-6.064-5.857 8.332-1.151z"/>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="drop-shadow-md w-5 h-5 text-yellow-500 inline-block" viewBox="0 0 24 24">
                    <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.857 1.428 8.837-7.364-3.868-7.364 3.868 1.428-8.837-6.064-5.857 8.332-1.151z"/>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="drop-shadow-md w-5 h-5 text-yellow-500 inline-block" viewBox="0 0 24 24">
                    <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.857 1.428 8.837-7.364-3.868-7.364 3.868 1.428-8.837-6.064-5.857 8.332-1.151z"/>
                    </svg>
                    </svg>
                </p>
            </div>
            <p class="text-xs sm:text-sm">I attended the Tech Summit and it was incredible! Booking was hassle-free.</p>
         </div>

         <!-- review3 -->
         <div data-aos="fade-up" class="border border-gray-200 dark:border-gray-700 px-5 py-3 sm:p-10 bg-light-half dark:bg-dark-half  drop-shadow-md mx-auto text-light-text dark:text-dark-text hover:!scale-105 duration-300">
            <div class="flex space-x-3 mb-5 items-center">
                <!-- quote -->
                <svg width="41" height="35" viewBox="0 0 41 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.3301 15.2802L10.3612 15.747H10.829H15.7122V33.9011H0.5L0.5 16.499C0.5 16.499 0.5 16.4989 0.5 16.4988C0.50286 9.53046 3.04697 5.86029 6.39401 3.83253C9.66308 1.852 13.7688 1.38966 17.318 1.12933L18.6853 7.41905C16.5675 7.9028 14.4796 8.49643 12.9242 9.57368C12.0765 10.1608 11.3748 10.8989 10.912 11.849C10.4491 12.7991 10.2401 13.9302 10.3301 15.2802ZM32.0507 15.2802L32.0819 15.747H32.5496H37.4329V33.9011H22.2206V16.499C22.2206 16.499 22.2206 16.4989 22.2206 16.4988C22.2234 9.53048 24.7675 5.8603 28.1146 3.83254C31.3836 1.85201 35.4894 1.38966 39.0386 1.12933L40.4059 7.41905C38.2882 7.9028 36.2002 8.49644 34.6448 9.57368C33.7971 10.1608 33.0954 10.8989 32.6326 11.849C32.1697 12.7991 31.9607 13.9302 32.0507 15.2802Z" stroke="#D28BEA"/>
                </svg>
                <h4 class="font-semibold text-xs sm:text-sm">Latrach M.</h4>
                <!-- 5 stars -->
                <p class="text-xs flex items-center w-20 h-20 space-x-1">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="drop-shadow-md w-5 h-5 text-yellow-500 inline-block" viewBox="0 0 24 24">
                    <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.857 1.428 8.837-7.364-3.868-7.364 3.868 1.428-8.837-6.064-5.857 8.332-1.151z"/>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="drop-shadow-md w-5 h-5 text-yellow-500 inline-block" viewBox="0 0 24 24">
                    <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.857 1.428 8.837-7.364-3.868-7.364 3.868 1.428-8.837-6.064-5.857 8.332-1.151z"/>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="drop-shadow-md w-5 h-5 text-yellow-500 inline-block" viewBox="0 0 24 24">
                    <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.857 1.428 8.837-7.364-3.868-7.364 3.868 1.428-8.837-6.064-5.857 8.332-1.151z"/>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="drop-shadow-md w-5 h-5 text-yellow-500 inline-block" viewBox="0 0 24 24">
                    <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.857 1.428 8.837-7.364-3.868-7.364 3.868 1.428-8.837-6.064-5.857 8.332-1.151z"/>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="drop-shadow-md w-5 h-5 text-yellow-500 inline-block" viewBox="0 0 24 24">
                    <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.857 1.428 8.837-7.364-3.868-7.364 3.868 1.428-8.837-6.064-5.857 8.332-1.151z"/>
                    </svg>
                    </svg>
                </p>
            </div>
            <p class="text-xs sm:text-sm">Finally, an intuitive platform that helps me discover and attend amazing events hassle-free.</p>
         </div>
    </div>

    <!-- how works -->
    <section class="p-10 sm:p-20 font-poppins">
        <h3 data-aos="fade-up" class="font-semibold text-center text-xl sm:text-2xl lg:text-4xl">How EventSphere Works</h3>
        <p data-aos="fade-up" class="text-center px-4 font-light text-sm sm:text-xl my-10 sm:my-10">Stay updated with the most popular events happening around you.</p>

        <!-- desktop -->
        <div class="hidden mt-5 sm:flex items-center justify-around"> 
            <!-- browse -->
            <div data-aos="zoom-in">
                <svg class="mx-auto w-32 h-32 lg:w-52 lg:h-52 stroke-light-accent dark:stroke-dark-accent" viewBox="0 0 220 220" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="110" cy="110" r="107.5" stroke-width="5" stroke-dasharray="30 30"/>
                    <path d="M150.923 158.462L117 124.539C114.308 126.693 111.212 128.398 107.712 129.654C104.212 130.911 100.487 131.539 96.5386 131.539C86.7565 131.539 78.4777 128.151 71.702 121.376C64.9264 114.6 61.5386 106.321 61.5386 96.5391C61.5386 86.757 64.9264 78.4782 71.702 71.7025C78.4777 64.9269 86.7565 61.5391 96.5386 61.5391C106.321 61.5391 114.599 64.9269 121.375 71.7025C128.151 78.4782 131.539 86.757 131.539 96.5391C131.539 100.488 130.91 104.212 129.654 107.712C128.398 111.212 126.692 114.308 124.539 117.001L158.462 150.924L150.923 158.462ZM96.5386 120.77C103.269 120.77 108.99 118.414 113.702 113.703C118.414 108.991 120.769 103.27 120.769 96.5391C120.769 89.8083 118.414 84.0871 113.702 79.3756C108.99 74.6641 103.269 72.3083 96.5386 72.3083C89.8078 72.3083 84.0867 74.6641 79.3751 79.3756C74.6636 84.0871 72.3078 89.8083 72.3078 96.5391C72.3078 103.27 74.6636 108.991 79.3751 113.703C84.0867 118.414 89.8078 120.77 96.5386 120.77Z" fill="#C228F6"/>
                </svg>
            </div>
            
            <!-- arrow -->
            <div data-aos="zoom-in" class="w-5 my-4">
                <svg class=" mx-auto rotate-90 sm:rotate-0" viewBox="0 0 24 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M24 13.5L0.750001 26.9234L0.750002 0.0766057L24 13.5Z" fill="#C228F6"/>
                </svg>
            </div>

            <!-- reserve -->
            <div data-aos="zoom-in">
                <svg class="mx-auto w-32 h-32 lg:w-52 lg:h-52 stroke-light-accent dark:stroke-dark-accent" viewBox="0 0 220 220" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="110" cy="110" r="107.5" stroke-width="5" stroke-dasharray="30 30"/>
                    <path d="M166.154 86.572L160.444 102.516V102.459C157.504 101.385 154.62 101.555 151.793 102.912C148.966 104.269 146.988 106.417 145.913 109.357C144.839 112.297 145.009 115.18 146.309 118.007C147.666 120.834 149.814 122.757 152.811 123.831V123.887L147.101 139.831L61.9537 109.414L67.551 93.6393C70.491 94.7135 73.3745 94.5439 76.2014 93.187C79.0283 91.8866 80.9506 89.7381 82.0248 86.7981C83.0991 83.8581 82.9295 80.9747 81.5725 78.1478C80.2721 75.3774 78.1237 73.4551 75.1837 72.3808L80.9506 56.1543L166.154 86.572ZM138.054 118.742L145.8 97.4839C146.479 95.7312 146.366 93.8089 145.574 92.1128C144.783 90.4166 143.369 89.1162 141.616 88.4378L99.0995 73.0028C95.481 71.7024 91.3537 73.6812 90.0533 77.1866L82.3075 98.4451C80.9506 102.12 82.8729 106.191 86.4914 107.491L129.008 122.983C129.8 123.265 130.591 123.435 131.439 123.435C134.379 123.435 137.093 121.569 138.054 118.742ZM98.1383 75.6601L140.599 91.0951C141.673 91.4908 142.521 92.2824 143.03 93.3001C143.482 94.3178 143.539 95.4485 143.143 96.5228L135.397 117.781C134.662 119.93 132.118 121.117 129.969 120.325L87.5091 104.834C85.3041 104.042 84.1733 101.611 84.9648 99.4062L92.7106 78.1478C93.276 76.5081 94.9156 75.3774 96.6683 75.3774C97.1771 75.3774 97.6295 75.4904 98.1383 75.6601ZM136.698 144.298C138.676 145.824 140.938 146.616 143.482 146.616H143.539V163.577H53.0771V146.842C56.1868 146.842 58.9006 145.711 61.0491 143.506C63.2541 141.358 64.3848 138.644 64.3848 135.534C64.3848 132.425 63.2541 129.767 61.0491 127.562C58.8441 125.357 56.1868 124.227 53.0771 124.227V107.039H59.0137L57.4306 111.562L73.6571 117.329C70.7737 118.234 68.6252 120.834 68.6252 124V146.616C68.6252 150.517 71.7914 153.683 75.6925 153.683H120.923C124.824 153.683 127.991 150.517 127.991 146.616V136.722L132.683 138.418C133.362 140.849 134.719 142.828 136.698 144.298ZM71.4521 146.616V124C71.4521 121.682 73.3745 119.76 75.6925 119.76H80.3852L125.164 135.76V146.616C125.164 148.934 123.241 150.856 120.923 150.856H75.6925C73.3745 150.856 71.4521 148.934 71.4521 146.616Z" fill="#C228F6"/>
                </svg>
            </div>
            
            <!-- arrow -->
            <div data-aos="zoom-in" class="w-5 my-4">
                <svg class=" mx-auto rotate-90 sm:rotate-0" viewBox="0 0 24 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M24 13.5L0.750001 26.9234L0.750002 0.0766057L24 13.5Z" fill="#C228F6"/>
                </svg>
            </div>
            
            <!-- enjoy -->
            <div data-aos="zoom-in">
                <svg class="mx-auto w-32 h-32 lg:w-52 lg:h-52 stroke-light-accent dark:stroke-dark-accent" viewBox="0 0 220 220" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="110" cy="110" r="107.5" stroke-width="5" stroke-dasharray="30 30"/>
                    <path d="M130.647 74.6059C107.762 66.5219 82.6509 78.4722 74.5669 101.357C66.4828 124.243 78.4331 149.354 101.318 157.438C124.204 165.522 149.315 153.572 157.399 130.686C165.522 107.801 153.533 82.6899 130.647 74.6059ZM109.988 85.9704L108.738 90.6178C99.8343 88.2355 92.5314 92.7657 92.4533 92.8438L89.8757 88.7822C90.2663 88.5089 99.0923 83.0414 109.988 85.9704ZM103.74 97.1006C108.543 98.7799 111.16 103.896 109.832 108.738L91.6722 102.295C93.703 97.7254 98.9361 95.4213 103.74 97.1006ZM106.005 145.449C97.2178 142.363 92.1408 133.537 93.3905 124.672L128.89 137.247C124.282 144.902 114.792 148.534 106.005 145.449ZM142.871 120.415L124.711 113.972C126.742 109.402 131.975 107.059 136.779 108.778C141.543 110.496 144.16 115.612 142.871 120.415ZM148.807 112.761C148.768 112.683 145.878 104.521 137.521 100.772L139.473 96.3976C149.783 101.006 153.22 110.808 153.337 111.199L148.807 112.761ZM77.7692 68.2012L79.9953 68.787L77.9645 69.8805C74.9183 71.5598 72.6923 74.4107 71.7941 77.7692L71.2083 79.9953L70.1148 77.9645C68.4355 74.9183 65.5846 72.6923 62.226 71.7941L60 71.2083L62.0308 70.1148C65.116 68.4746 67.342 65.5846 68.2012 62.226L68.787 60L69.8805 62.0308C71.5598 65.0769 74.4107 67.303 77.7692 68.2012ZM97.8036 62.0698C99.9905 62.0698 101.748 63.8272 101.748 66.0142C101.748 68.2012 99.9905 69.9586 97.8036 69.9586C95.6166 69.9586 93.8592 68.2012 93.8592 66.0142C93.8592 63.8272 95.6166 62.0698 97.8036 62.0698ZM66.0142 85.7752C69.3337 85.7752 72.0284 88.4698 72.0284 91.7894C72.0284 95.1089 69.3337 97.8036 66.0142 97.8036C62.6947 97.8036 60 95.1089 60 91.7894C60 88.4698 62.6947 85.7752 66.0142 85.7752Z" fill="#C228F6"/>
                </svg>
            </div>
        </div>
        <div class="hidden mt-5 sm:flex items-start justify-around">
            <p data-aos="zoom-in" class="text-center mt-8 font-medium">Browse upcoming <br> events</p>
            
            <div class="opacity-0"></div>
            
            <p data-aos="zoom-in" class="text-center mt-8 font-medium">Reserve your ticket</p>
            
            <div class="opacity-0"></div>
            
            <p data-aos="zoom-in" class="text-center mt-8 font-medium">Attend & enjoy!</p>
        </div>


        <!-- mobile -->
        <div class="mt-5 flex flex-col items-center justify-center sm:hidden"> 
            <!-- browse -->
            <div data-aos="zoom-in">
                <svg class="mx-auto w-32 h-32 stroke-light-accent dark:stroke-dark-accent" viewBox="0 0 220 220" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="110" cy="110" r="107.5" stroke-width="5" stroke-dasharray="30 30"/>
                    <path d="M150.923 158.462L117 124.539C114.308 126.693 111.212 128.398 107.712 129.654C104.212 130.911 100.487 131.539 96.5386 131.539C86.7565 131.539 78.4777 128.151 71.702 121.376C64.9264 114.6 61.5386 106.321 61.5386 96.5391C61.5386 86.757 64.9264 78.4782 71.702 71.7025C78.4777 64.9269 86.7565 61.5391 96.5386 61.5391C106.321 61.5391 114.599 64.9269 121.375 71.7025C128.151 78.4782 131.539 86.757 131.539 96.5391C131.539 100.488 130.91 104.212 129.654 107.712C128.398 111.212 126.692 114.308 124.539 117.001L158.462 150.924L150.923 158.462ZM96.5386 120.77C103.269 120.77 108.99 118.414 113.702 113.703C118.414 108.991 120.769 103.27 120.769 96.5391C120.769 89.8083 118.414 84.0871 113.702 79.3756C108.99 74.6641 103.269 72.3083 96.5386 72.3083C89.8078 72.3083 84.0867 74.6641 79.3751 79.3756C74.6636 84.0871 72.3078 89.8083 72.3078 96.5391C72.3078 103.27 74.6636 108.991 79.3751 113.703C84.0867 118.414 89.8078 120.77 96.5386 120.77Z" fill="#C228F6"/>
                </svg>
                <p class="text-center mt-8 font-medium">Browse upcoming events</p>
            </div>
            
            <!-- arrow -->
            <div data-aos="zoom-in" class="w-4 transform translate-y-0 my-6">
                <svg class=" mx-auto rotate-90" viewBox="0 0 24 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M24 13.5L0.750001 26.9234L0.750002 0.0766057L24 13.5Z" fill="#C228F6"/>
                </svg>
            </div>

            <!-- reserve -->
            <div data-aos="zoom-in">
                <svg class="mx-auto w-32 h-32 stroke-light-accent dark:stroke-dark-accent" viewBox="0 0 220 220" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="110" cy="110" r="107.5" stroke-width="5" stroke-dasharray="30 30"/>
                    <path d="M166.154 86.572L160.444 102.516V102.459C157.504 101.385 154.62 101.555 151.793 102.912C148.966 104.269 146.988 106.417 145.913 109.357C144.839 112.297 145.009 115.18 146.309 118.007C147.666 120.834 149.814 122.757 152.811 123.831V123.887L147.101 139.831L61.9537 109.414L67.551 93.6393C70.491 94.7135 73.3745 94.5439 76.2014 93.187C79.0283 91.8866 80.9506 89.7381 82.0248 86.7981C83.0991 83.8581 82.9295 80.9747 81.5725 78.1478C80.2721 75.3774 78.1237 73.4551 75.1837 72.3808L80.9506 56.1543L166.154 86.572ZM138.054 118.742L145.8 97.4839C146.479 95.7312 146.366 93.8089 145.574 92.1128C144.783 90.4166 143.369 89.1162 141.616 88.4378L99.0995 73.0028C95.481 71.7024 91.3537 73.6812 90.0533 77.1866L82.3075 98.4451C80.9506 102.12 82.8729 106.191 86.4914 107.491L129.008 122.983C129.8 123.265 130.591 123.435 131.439 123.435C134.379 123.435 137.093 121.569 138.054 118.742ZM98.1383 75.6601L140.599 91.0951C141.673 91.4908 142.521 92.2824 143.03 93.3001C143.482 94.3178 143.539 95.4485 143.143 96.5228L135.397 117.781C134.662 119.93 132.118 121.117 129.969 120.325L87.5091 104.834C85.3041 104.042 84.1733 101.611 84.9648 99.4062L92.7106 78.1478C93.276 76.5081 94.9156 75.3774 96.6683 75.3774C97.1771 75.3774 97.6295 75.4904 98.1383 75.6601ZM136.698 144.298C138.676 145.824 140.938 146.616 143.482 146.616H143.539V163.577H53.0771V146.842C56.1868 146.842 58.9006 145.711 61.0491 143.506C63.2541 141.358 64.3848 138.644 64.3848 135.534C64.3848 132.425 63.2541 129.767 61.0491 127.562C58.8441 125.357 56.1868 124.227 53.0771 124.227V107.039H59.0137L57.4306 111.562L73.6571 117.329C70.7737 118.234 68.6252 120.834 68.6252 124V146.616C68.6252 150.517 71.7914 153.683 75.6925 153.683H120.923C124.824 153.683 127.991 150.517 127.991 146.616V136.722L132.683 138.418C133.362 140.849 134.719 142.828 136.698 144.298ZM71.4521 146.616V124C71.4521 121.682 73.3745 119.76 75.6925 119.76H80.3852L125.164 135.76V146.616C125.164 148.934 123.241 150.856 120.923 150.856H75.6925C73.3745 150.856 71.4521 148.934 71.4521 146.616Z" fill="#C228F6"/>
                </svg>
                <p class="text-center mt-8 font-medium">Reserve your ticket</p>
            </div>
            
            <!-- arrow -->
            <div data-aos="zoom-in" class="w-4 transform translate-y-0 my-6">
                <svg class=" mx-auto rotate-90" viewBox="0 0 24 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M24 13.5L0.750001 26.9234L0.750002 0.0766057L24 13.5Z" fill="#C228F6"/>
                </svg>
            </div>
            
            <!-- enjoy -->
            <div data-aos="zoom-in">
                <svg class="mx-auto w-32 h-32 stroke-light-accent dark:stroke-dark-accent" viewBox="0 0 220 220" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="110" cy="110" r="107.5" stroke-width="5" stroke-dasharray="30 30"/>
                    <path d="M130.647 74.6059C107.762 66.5219 82.6509 78.4722 74.5669 101.357C66.4828 124.243 78.4331 149.354 101.318 157.438C124.204 165.522 149.315 153.572 157.399 130.686C165.522 107.801 153.533 82.6899 130.647 74.6059ZM109.988 85.9704L108.738 90.6178C99.8343 88.2355 92.5314 92.7657 92.4533 92.8438L89.8757 88.7822C90.2663 88.5089 99.0923 83.0414 109.988 85.9704ZM103.74 97.1006C108.543 98.7799 111.16 103.896 109.832 108.738L91.6722 102.295C93.703 97.7254 98.9361 95.4213 103.74 97.1006ZM106.005 145.449C97.2178 142.363 92.1408 133.537 93.3905 124.672L128.89 137.247C124.282 144.902 114.792 148.534 106.005 145.449ZM142.871 120.415L124.711 113.972C126.742 109.402 131.975 107.059 136.779 108.778C141.543 110.496 144.16 115.612 142.871 120.415ZM148.807 112.761C148.768 112.683 145.878 104.521 137.521 100.772L139.473 96.3976C149.783 101.006 153.22 110.808 153.337 111.199L148.807 112.761ZM77.7692 68.2012L79.9953 68.787L77.9645 69.8805C74.9183 71.5598 72.6923 74.4107 71.7941 77.7692L71.2083 79.9953L70.1148 77.9645C68.4355 74.9183 65.5846 72.6923 62.226 71.7941L60 71.2083L62.0308 70.1148C65.116 68.4746 67.342 65.5846 68.2012 62.226L68.787 60L69.8805 62.0308C71.5598 65.0769 74.4107 67.303 77.7692 68.2012ZM97.8036 62.0698C99.9905 62.0698 101.748 63.8272 101.748 66.0142C101.748 68.2012 99.9905 69.9586 97.8036 69.9586C95.6166 69.9586 93.8592 68.2012 93.8592 66.0142C93.8592 63.8272 95.6166 62.0698 97.8036 62.0698ZM66.0142 85.7752C69.3337 85.7752 72.0284 88.4698 72.0284 91.7894C72.0284 95.1089 69.3337 97.8036 66.0142 97.8036C62.6947 97.8036 60 95.1089 60 91.7894C60 88.4698 62.6947 85.7752 66.0142 85.7752Z" fill="#C228F6"/>
                </svg>
                <p class="text-center mt-8 font-medium">Attend & enjoy!</p>
            </div>
        </div>

    </section>

    <!-- contact -->
    <section id="contact" 
        style="background-image: url({{ asset('images/main-background.jpg') }})" 
        class="flex flex-col text-dark-text justify-center bg-cover items-center p-10 font-poppins text-[F4E9F7] h-[90vh]">
        <div>
            <h3 data-aos="zoom-in" class="tracking-wide text-xl md:text-4xl font-semibold">
                Ready To Join the Fun?
            </h3>
            <div class="flex justify-between mt-5 font-montserrat">
                <button data-aos="fade-up" class="tracking-wide font-bold px-2 py-1 text-xs md:text-sm md:px-8 md:py-3 bg-[#a409d7] hover:bg-[#721093] duration-300">SIGN UP NOW</button>
                <button data-aos="fade-up" class="tracking-wide font-bold px-2 py-1 text-xs md:text-sm md:px-8 md:py-3 border-[#a409d7] border-2 hover:bg-[#a409d7] duration-300">CONTACT US</button>
            </div>
        </div>
    </section>

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

    <!-- script for aos -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>
