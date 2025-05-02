<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EventSphere - Contact Us</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    @vite('resources/css/app.css')
</head>
<body class="bg-light-background dark:bg-dark-background text-dark-text dark:text-light-text font-montserrat min-h-screen flex flex-col justify-between">

    <div class="w-full text-center mt-10">
        <h1 class="text-4xl sm:text-6xl font-bold text-light-accent dark:text-dark-accent uppercase">Contact Us</h1>
    </div>

    <div class="w-6/12 mx-auto text-light-text dark:text-dark-text flex flex-col items-center justify-center flex-grow space-y-8 mt-10">
        <div class="flex items-center space-x-4">
            <i class="fas fa-envelope text-2xl text-dark-accent"></i>
            <span class="text-lg">m.latrach.youcode@gmail.com</span>
        </div>

        <div class="flex items-center space-x-4">
            <i class="fas fa-phone text-2xl text-dark-accent"></i>
            <span class="text-lg">+212 645 338 599</span>
        </div>

        <div class="flex items-center space-x-4">
            <i class="fas fa-map-marker-alt text-2xl text-dark-accent"></i>
            <span class="text-lg">123 YouCode Morocco, Nador City</span>
        </div>

        <a href="https://mail.google.com/mail/?view=cm&fs=1&to=contact@eventsphere.com" target="_blank"
           class="mt-6 px-6 py-3 bg-dark-accent text-white font-bold rounded-md hover:bg-opacity-90 mx-auto transition-all duration-300 flex items-center space-x-2">
            <i class="fas fa-paper-plane"></i>
            <span>Email Us</span>
        </a>
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

</body>
</html>
