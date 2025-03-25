<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EventSphere</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
</head>
<body class="bg-light-background dark:bg-dark-background dark:text-dark-text">

    <header class="fixed top-0 w-full flex justify-between items-center px-10 py-5 bg-light-background/50 dark:bg-dark-background/50 backdrop-blur-xl z-50">
        <img src="{{ asset('images/EventSphere_Logo.png') }}" alt="Logo" class="w-48">
        <nav class="flex space-x-8 items-center">
            <a href="" class="text-light-text dark:text-dark-text hover:text-dark-accent dark:hover:text-dark-accent duration-300">Home</a>
            <a href="" class="text-light-text dark:text-dark-text hover:text-dark-accent dark:hover:text-dark-accent duration-300">Explore</a>
            <a href="" class="text-light-text dark:text-dark-text hover:text-dark-accent dark:hover:text-dark-accent duration-300">Contact</a>
            <a href="" class="text-light-text dark:text-dark-text hover:text-dark-accent dark:hover:text-dark-accent duration-300">About</a>
            
            <button href="" class="text-light-text dark:text-dark-text hover:text-dark-accent dark:hover:text-dark-accent duration-300" onclick="toggleDarkMode()"><i class="fa-solid fa-sun"></i> Mode</button>

            <a href="" class="text-light-background bg-light-accent py-2 px-6 rounded-full dark:text-dark-text dark:bg-dark-accent hover:bg-light-primary dark:hover:bg-light-primary duration-300">Login</a>
        </nav>
    </header>

    


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
