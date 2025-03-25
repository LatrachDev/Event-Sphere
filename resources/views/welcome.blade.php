<!DOCTYPE html>
<html lang="en">
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
<body class="bg-light-background dark:bg-dark-background dark:text-dark-text">

    <header class="fixed top-0 w-full flex justify-between items-center px-10 py-5 font-poppins bg-light-background/50 bg-dark-background/50 backdrop-blur-xl z-50">
        <img src="{{ asset('images/EventSphere_Logo.png') }}" alt="Logo" class="w-48">
        <nav class="flex space-x-8 items-center">
            <a href="" class="text-dark-text  hover:text-dark-accent dark:hover:text-dark-accent duration-300">Home</a>
            <a href="" class="text-dark-text hover:text-dark-accent dark:hover:text-dark-accent duration-300">Explore</a>
            <a href="" class="text-dark-text hover:text-dark-accent dark:hover:text-dark-accent duration-300">Contact</a>
            <a href="" class="text-dark-text hover:text-dark-accent dark:hover:text-dark-accent duration-300">About</a>
            
            <button href="" class="text-dark-text hover:text-dark-accent dark:hover:text-dark-accent duration-300" onclick="toggleDarkMode()"><i class="fa-solid fa-sun"></i> Mode</button>

            <a href="" class="text-light-background bg-light-accent py-2 px-6 rounded-full dark:text-dark-text dark:bg-dark-accent hover:bg-light-primary dark:hover:bg-light-primary duration-300">Login</a>
        </nav>
    </header>

    <main style="background-image: url({{ asset('images/main-background.jpg') }})" 
        class="bg-[{{ asset('images/main-background.jpg') }}] font-montserrat bg-cover bg-center bg-no-repeat h-screen flex flex-col justify-center items-center text-center">
        
        <h1 class="text-3xl sm:text-4xl md:text-6xl lg:text-8xl uppercase font-extrabold text-dark-text">
            Discover & Book
        </h1>

        <div class="w-[300px] md:w-[600px] lg:w-[950px] my-5">
            <img src="{{ asset('images/Exciting Events.png') }}" alt="Logo">
        </div>

        <p class="px-4 font-light sm:text-2xl text-dark-text ">
            Explore a variety of events, from tech meetups to music concerts.
        </p>

        <button class="h-14 bg-linear-to-r from-cyan-500 to-blue-500">
            Discover Events
        </button>
        
       
        <!-- <p style="-webkit-text-stroke: 2px white;" class="text-3xl sm:text-4xl md:text-6xl lg:text-8xl font-extrabold uppercase text-transparent stroke-white tracking-wide">Exciting Events</p> -->

    </main>
    
    <div class="p-10 sm:p-20">
    </div>


    <script>
        function toggleDarkMode() {
            document.documentElement.classList.toggle("dark");
            localStorage.setItem("theme", document.documentElement.classList.contains("dark") ? "dark" : "light");
        }

        if (localStorage.getItem("theme") === "dark") {
            document.documentElement.classList.add("dark");
        }
    </script>
</body>
</html>
