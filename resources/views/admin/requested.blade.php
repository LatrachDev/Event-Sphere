<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EventSphere - Events</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-light-background text-light-text dark:bg-dark-background dark:text-dark-text font-poppins">
<div class="flex min-h-screen">

    @include('partials.sidebar')

    <div class="flex-1 p-8 font-montserrat">
        <h1 class="text-3xl font-semibold my-10">Requested Events</h1>

        @if (session('success'))
            <div id="successMessage" class="bg-green-100 border border-green-400 text-dark-success px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
            <script>
                setTimeout(() => {
                    const msg = document.getElementById('successMessage');
                    if (msg) msg.style.display = 'none';
                }, 5000);
            </script>
        @endif


        <!-- Requested Events Table -->
        <div class="overflow-x-auto">
            <table class="w-full table-auto border-collapse bg-light-half dark:bg-dark-half rounded-lg">
                <thead>
                <tr class="text-left border-b border-gray-300 dark:border-gray-700">
                    <th class="p-4">#</th>
                    <th class="p-4">Title</th>
                    <th class="p-4">Submitted By</th>
                    <th class="p-4">Actions</th>
                </tr>
                </thead>
                <tbody>
                @forelse ($requestedEvents as $event)
                    <tr class="border-b border-gray-200 dark:border-gray-700">
                        <td class="p-4">id</td>
                        <td class="p-4">{{ $event->name }}</td>
                        <td class="p-4">title</td>
                        <td class="p-4">name</td>
                        <td class="p-4">
                            <form  method="POST" class="inline">
                                @csrf
                                <button type="submit" class="text-green-500 hover:underline">Approve</button>
                            </form>
                            <form  method="POST" class="inline ml-4">
                                @csrf
                                <button type="submit" class="text-red-500 hover:underline">Reject</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr class="border-b border-gray-200 dark:border-gray-700">
                        <td colspan="4" class="p-4 text-center">No requested events found.</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>

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