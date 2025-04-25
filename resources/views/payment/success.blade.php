<!DOCTYPE html>
<html lang="en" class="scroll-smooth overflow-x-hidden">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Success - EventSphere</title>
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
    </header>

    <main class="min-h-screen flex items-center justify-center pt-32 pb-20 px-4 sm:px-6">
        <div class="bg-white dark:bg-dark-background rounded-xl shadow-2xl p-10 max-w-xl w-full text-center space-y-6 border border-light-accent dark:border-dark-accent">
            <div class="text-green-500 text-6xl">
                <i class="fas fa-check-circle"></i>
            </div>
            <h1 class="text-3xl font-bold text-light-text dark:text-dark-text">Payment Successful!</h1>
            <p class="text-lg text-gray-600 dark:text-gray-400">Your ticket has been booked. Thank you for choosing EventSphere. We look forward to seeing you at the event!</p>
            
            <a href="{{ route('home') }}" class="inline-block mt-6 px-6 py-3 rounded-full bg-light-accent text-light-text hover:bg-light-primary dark:bg-dark-accent dark:hover:bg-light-primary dark:text-dark-text transition duration-300">
                Go to Home
            </a>
        </div>
    </main>

    <footer class="bg-[#721093] text-dark-text py-6 font-poppins">
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
        if (localStorage.getItem("theme") === "dark" || 
            (!localStorage.getItem("theme") && window.matchMedia("(prefers-color-scheme: dark)").matches)) {
            document.documentElement.classList.add("dark");
        }
    </script>
</body>
</html>
