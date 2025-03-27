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

                <a href="#" class="bg-light-accent text-dark-text px-6 py-2 rounded-full">Login</a>
            
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
    
    <!-- about -->
    <div id="about" class="p-10 sm:p-20 font-poppins">
        <h3 class="uppercase font-semibold text-center text-xl sm:text-2xl lg:text-4xl">The Sphere of Memorable Moments</h3>
        <img src="{{ asset('images/EventSphere_Logo1.png') }}" alt="Logo" class="lg:w-80 w-48 sm:w-56 md:w-64 mx-auto">
        <p class="text-justify px-4 font-light">EventSphere is designed to simplify event planning and participation. Whether you're an organizer looking to create seamless events or an attendee searching for memorable experiences, EventSphere has everything you need in one place.</p>
    </div>

    <!-- trending events -->
    <div class="p-10 sm:p-20 font-poppins">
        <h3 class="uppercase font-semibold text-center text-xl sm:text-2xl lg:text-4xl">Trending Events</h3>
        <p class="text-center px-4 font-light text-sm sm:text-xl my-5 sm:my-10">Stay updated with the most popular events happening around you.</p>
        
        <!-- cards container -->
        <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-3 gap-6 justify-center items-center">
            
            <!-- card 1 -->
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
        
        <div class="w-full flex">
            <button class="mx-auto font-bold text-sm h-10 md:text-xl md:h-12 bg-gradient-to-r from-dark-accent to-dark-secondary text-light-background px-4 md:px-6 py-2 rounded-full mt-8 md:mt-10 transition-all hover:bg-gradient-to-r hover:from-dark-secondary hover:to-dark-secondary hover:shadow-lg duration-300">
                View all Events
            </button>
        </div> 
    </div>

    <!-- why choose eventsphere -->
    <div class="px-10 sm:px-20 font-poppins">
        <h3 class=" font-semibold text-center text-xl sm:text-2xl lg:text-4xl mb-10">Why choose EventSphere?</h3>
        
        <!-- cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 p-6 text-light-text dark:text-dark-text">
        
            <!-- Card 1 -->
            <div class="flex flex-col items-left gap-4 p-6 bg-light-half dark:bg-dark-half drop-shadow-md rounded-xl">
                <div class="w-3/12 lg:w-[20%] drop-shadow-[0_0_5px_rgba(210,139,234,0.4)] text-light-primary shadow-light-primary dark:fill-light-primary text-4xl">
                <svg  viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" id="secure" class="icon glyph fill-light-primary dark:fill-dark-primary"><path d="M19.42,3.83,12.24,2h0A.67.67,0,0,0,12,2a.67.67,0,0,0-.2,0h0L4.58,3.83A2,2,0,0,0,3.07,5.92l.42,5.51a12,12,0,0,0,7.24,10.11l.88.38h0a.91.91,0,0,0,.7,0h0l.88-.38a12,12,0,0,0,7.24-10.11l.42-5.51A2,2,0,0,0,19.42,3.83ZM15.71,9.71l-4,4a1,1,0,0,1-1.42,0l-2-2a1,1,0,0,1,1.42-1.42L11,11.59l3.29-3.3a1,1,0,0,1,1.42,1.42Z"></path></svg>
                </div>
                <p class="sm:text-lg font-light text-sm">Secure and fast booking process.</p>
            </div>

            <!-- Card 2 -->
            <div class="flex flex-col items-left gap-4 p-6 bg-light-half dark:bg-dark-half drop-shadow-md rounded-xl">
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
            <div class="flex flex-col items-left gap-4 p-6 bg-light-half dark:bg-dark-half drop-shadow-md rounded-xl">
                <div class="w-3/12 lg:w-[20%] drop-shadow-[0_0_5px_rgba(210,139,234,0.4)] text-[#D892F9] text-4xl">
                    <svg class="fill-light-primary dark:fill-dark-primary"  viewBox="0 -3.5 39 39" version="1.1" xmlns="http://www.w3.org/2000/svg">
                    <title>ticket2</title>
                    <path d="M39 19.438v5.562c0 1.104-0.896 2-2 2h-35c-1.104 0-2-0.896-2-2v-5.5c1.657 0 3-1.344 3-3 0-1.657-1.343-3-3-3v-5.5c0-1.104 0.896-2 2-2h35c1.104 0 2 0.896 2 2v5.438c-1.657 0-3 1.343-3 3 0 1.656 1.343 3 3 3zM34 11c0-1.104-0.896-2-2-2h-25c-1.104 0-2 0.896-2 2v11c0 1.104 0.896 2 2 2h25c1.104 0 2-0.896 2-2v-11zM32 23h-25c-0.553 0-1-0.448-1-1v-11c0-0.553 0.447-1 1-1h25c0.552 0 1 0.447 1 1v11c0 0.552-0.448 1-1 1zM12.47 15.538l-0.907-2.58-0.907 2.58-2.614 0.11 2.054 1.704-0.709 2.648 2.176-1.526 2.175 1.526-0.708-2.647 2.053-1.704-2.613-0.111zM20.47 15.538l-0.907-2.58-0.907 2.58-2.614 0.11 2.054 1.704-0.709 2.648 2.176-1.526 2.175 1.526-0.708-2.647 2.053-1.704-2.613-0.111zM28.47 15.538l-0.907-2.58-0.907 2.58-2.613 0.11 2.053 1.704-0.709 2.648 2.176-1.526 2.175 1.526-0.708-2.647 2.053-1.704-2.613-0.111z"></path>
                    </svg>
                </div>
                <p class="sm:text-lg font-light text-sm">Easy event browsing and ticket reservations.</p>
            </div>

            <!-- Card 4 -->
            <div class="flex flex-col items-left gap-4 p-6 bg-light-half dark:bg-dark-half drop-shadow-md rounded-xl">
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
        
    </div>
        
    <!-- reviews -->
    
    <div class="p-10 font-poppins">
        <h3 class=" font-semibold text-center text-xl sm:text-2xl lg:text-4xl ">What Our Users Say</h3>
    </div>
    
    <!-- container -->
    <div class="lg:flex px-10 mt-3 sm:px-20 font-poppins space-y-8 lg:space-x-5 lg:space-y-0">
        <!-- review1 -->
        <div class="px-5 py-3 sm:p-10 bg-light-half dark:bg-dark-half  drop-shadow-md mx-auto text-light-text dark:text-dark-text">
           <div class="flex space-x-3 mb-5 items-center">
               <!-- quote -->
               <svg width="41" height="35" viewBox="0 0 41 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                   <path d="M10.3301 15.2802L10.3612 15.747H10.829H15.7122V33.9011H0.5L0.5 16.499C0.5 16.499 0.5 16.4989 0.5 16.4988C0.50286 9.53046 3.04697 5.86029 6.39401 3.83253C9.66308 1.852 13.7688 1.38966 17.318 1.12933L18.6853 7.41905C16.5675 7.9028 14.4796 8.49643 12.9242 9.57368C12.0765 10.1608 11.3748 10.8989 10.912 11.849C10.4491 12.7991 10.2401 13.9302 10.3301 15.2802ZM32.0507 15.2802L32.0819 15.747H32.5496H37.4329V33.9011H22.2206V16.499C22.2206 16.499 22.2206 16.4989 22.2206 16.4988C22.2234 9.53048 24.7675 5.8603 28.1146 3.83254C31.3836 1.85201 35.4894 1.38966 39.0386 1.12933L40.4059 7.41905C38.2882 7.9028 36.2002 8.49644 34.6448 9.57368C33.7971 10.1608 33.0954 10.8989 32.6326 11.849C32.1697 12.7991 31.9607 13.9302 32.0507 15.2802Z" stroke="#D28BEA"/>
               </svg>
               <h4 class="font-semibold text-xs sm:text-sm">Sarah M.</h4>
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
         <div class="px-5 py-3 sm:p-10 lg:scale-105 dark:bg-dark-primary bg-light-primary drop-shadow-md mx-auto text-dark-text dark:text-light-text">
            <div class="flex space-x-3 mb-5 items-center">
                <!-- quote -->
                <svg class="stroke-light-half dark:stroke-dark-half" width="41" height="35" viewBox="0 0 41 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.3301 15.2802L10.3612 15.747H10.829H15.7122V33.9011H0.5L0.5 16.499C0.5 16.499 0.5 16.4989 0.5 16.4988C0.50286 9.53046 3.04697 5.86029 6.39401 3.83253C9.66308 1.852 13.7688 1.38966 17.318 1.12933L18.6853 7.41905C16.5675 7.9028 14.4796 8.49643 12.9242 9.57368C12.0765 10.1608 11.3748 10.8989 10.912 11.849C10.4491 12.7991 10.2401 13.9302 10.3301 15.2802ZM32.0507 15.2802L32.0819 15.747H32.5496H37.4329V33.9011H22.2206V16.499C22.2206 16.499 22.2206 16.4989 22.2206 16.4988C22.2234 9.53048 24.7675 5.8603 28.1146 3.83254C31.3836 1.85201 35.4894 1.38966 39.0386 1.12933L40.4059 7.41905C38.2882 7.9028 36.2002 8.49644 34.6448 9.57368C33.7971 10.1608 33.0954 10.8989 32.6326 11.849C32.1697 12.7991 31.9607 13.9302 32.0507 15.2802Z"/>
                </svg>
                <h4 class="font-semibold text-xs sm:text-sm">Sarah M.</h4>
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
         <div class="px-5 py-3 sm:p-10 bg-light-half dark:bg-dark-half  drop-shadow-md mx-auto text-light-text dark:text-dark-text">
            <div class="flex space-x-3 mb-5 items-center">
                <!-- quote -->
                <svg width="41" height="35" viewBox="0 0 41 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.3301 15.2802L10.3612 15.747H10.829H15.7122V33.9011H0.5L0.5 16.499C0.5 16.499 0.5 16.4989 0.5 16.4988C0.50286 9.53046 3.04697 5.86029 6.39401 3.83253C9.66308 1.852 13.7688 1.38966 17.318 1.12933L18.6853 7.41905C16.5675 7.9028 14.4796 8.49643 12.9242 9.57368C12.0765 10.1608 11.3748 10.8989 10.912 11.849C10.4491 12.7991 10.2401 13.9302 10.3301 15.2802ZM32.0507 15.2802L32.0819 15.747H32.5496H37.4329V33.9011H22.2206V16.499C22.2206 16.499 22.2206 16.4989 22.2206 16.4988C22.2234 9.53048 24.7675 5.8603 28.1146 3.83254C31.3836 1.85201 35.4894 1.38966 39.0386 1.12933L40.4059 7.41905C38.2882 7.9028 36.2002 8.49644 34.6448 9.57368C33.7971 10.1608 33.0954 10.8989 32.6326 11.849C32.1697 12.7991 31.9607 13.9302 32.0507 15.2802Z" stroke="#D28BEA"/>
                </svg>
                <h4 class="font-semibold text-xs sm:text-sm">Sarah M.</h4>
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

    <!-- contact -->

    <!-- footer -->

    
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
