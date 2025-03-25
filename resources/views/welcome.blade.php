<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel 11 with Tailwind</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
</head>
<body class="bg-light-background text-light-text dark:bg-dark-background dark:text-dark-text">

    <div class="flex justify-between p-4">
        <h1 class="text-xl font-bold">Laravel Dark Mode</h1>
        <button onclick="toggleDarkMode()" class="px-4 py-2 border rounded">
            Toggle Dark Mode 🌙
        </button>
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
