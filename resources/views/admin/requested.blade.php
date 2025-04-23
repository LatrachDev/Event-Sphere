<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EventSphere - Events</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script>
      if (
        localStorage.getItem("theme") === "dark" ||
        (!localStorage.getItem("theme") && window.matchMedia("(prefers-color-scheme: dark)").matches)
      ) {
        document.documentElement.classList.add("dark");
      }
    </script>
</head>
<body class="bg-light-background text-light-text dark:bg-dark-background dark:text-dark-text font-poppins">
<div class="flex min-h-screen">

    <!-- include('partials.sidebar', ['requestedCount' => $requestedCount]) -->
    <x-sidebar :requested-count="$requestedCount" />



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
        <div class="overflow-x-auto shadow-md rounded-lg">
            <table class="w-full table-auto border-collapse bg-light-half dark:bg-dark-half rounded-md shadow-md">
                <thead>
                <tr class="text-left border-b border-gray-300 dark:border-gray-700  bg-light-hvr dark:bg-dark-hvr">
                    <th class="p-4">#</th>
                    <th class="p-4">Title</th>
                    <th class="p-4">Tickets</th>
                    <th class="p-4">Price</th>
                    <th class="p-4">Submitted By</th>
                    <th class="p-4">Actions</th>
                </tr>
                </thead>
                <tbody>
                @forelse ($requestedEvents as $event)
                    <tr class="border-b border-gray-200 dark:border-gray-700 hover:bg-light-hvr dark:hover:bg-dark-hvr duration-300">
                        <td class="p-4">{{ $event->id }}</td>
                        <td class="p-4">{{ $event->title }}</td>
                        <td class="p-4">{{ $event->number_of_tickets }}</td>
                        <td class="p-4">{{ $event->price }}$</td>
                        <td class="p-4">Sender</td>
                        <td class="p-4">
                            <!-- approved -->
                            <form action="{{ route('requested.approve', $event->id) }}"  method="POST" class="inline">
                                @csrf
                                <button type="submit" class="text-green-500 hover:underline"><i class="fas fa-check"></i></button>
                            </form>
                            <!-- rejected -->
                            <form action="{{ route('requested.reject', $event->id) }}" method="POST" class="inline ml-4">
                                @csrf
                                <button type="submit" class="text-red-500 hover:underline"><i class="fas fa-ban"></i></button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr class="border-b border-gray-200 dark:border-gray-700">
                        <td colspan="6" class="p-10 text-center">No requested events found.</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>

    function toggleDarkMode() {
        document.documentElement.classList.toggle("dark");
        localStorage.setItem("theme", document.documentElement.classList.contains("dark") ? "dark" : "light");
    }
</script>


</body>
</html>