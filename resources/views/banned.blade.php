<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EventSphere - Account Banned</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    @vite('resources/css/app.css')
</head>
<body class="bg-light-background text-center dark:bg-dark-background font-montserrat min-h-screen flex flex-col justify-between">

    <div class="w-full overflow-hidden whitespace-nowrap">
        <p class="w-full font-poppins text-4xl sm:text-6xl uppercase font-bold tracking-wider text-transparent mt-5 text-center" style="-webkit-text-stroke: 1px #c228f6;">
            ACCESS DENIED - EVENT SPHERE - ACCESS DENIED
        </p>
    </div>

    <div class="flex flex-col space-y-5 items-center justify-center flex-grow">
        <h1 class="font-bold text-6xl text-light-accent dark:text-dark-accent">BANNED</h1>
        <h2 class="font-semibold uppercase text-3xl text-light-text dark:text-dark-text">Account Suspended</h2>

        <p class="text-xs px-4 sm:text-lg uppercase text-dark-text opacity-80 dark:text-dark-text">
            Your account has been banned due to a violation of our terms. Please contact support if you believe this is a mistake.
        </p>

        <a href="{{ route('index') }}" class="px-4 py-2 sm:px-6 sm:py-3 text-sm sm:text-lg font-bold bg-dark-accent text-white rounded-md hover:bg-opacity-90 transition-all duration-300 flex items-center">
            <i class="fas fa-envelope mr-2"></i> Contact Support
        </a>
    </div>

    <div class="w-full overflow-hidden whitespace-nowrap">
        <p class="w-full font-poppins text-4xl sm:text-6xl uppercase font-bold tracking-wider text-transparent mb-5 text-center" style="-webkit-text-stroke: 1px #c228f6;">
            EVENT SPHERE - ACCOUNT BANNED - EVENT SPHERE
        </p>
    </div>

</body>
</html>
