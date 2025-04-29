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

    <x-header />

    <!-- Welcome -->
    <h3 class="text-center text-3xl text-light-text dark:text-dark-text mt-40">
        Welcome back <span class="font-bold">{{ explode(' ', Auth::user()->name)[0] }}!</span>
    </h3>

    <!-- Search and Filter in One Line -->
    <div class="flex justify-center my-10">
        <form method="GET" action="{{ route('search') }}" class="flex items-center bg-gray-300 shadow-md rounded-full px-6 py-2 w-10/12 max-w-4xl border space-x-4">

            <!-- Search Input -->
            <div class="flex items-center w-full">
                <svg width="24" height="24" viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-black">
                    <path d="M31.85 34.125L21.6125 23.8875C20.8 24.5375 19.8656 25.0521 18.8094 25.4313C17.7531 25.8104 16.6292 26 15.4375 26C12.4854 26 9.98698 24.9776 7.94219 22.9328C5.8974 20.888 4.875 18.3896 4.875 15.4375C4.875 12.4854 5.8974 9.98698 7.94219 7.94219C9.98698 5.8974 12.4854 4.875 15.4375 4.875C18.3896 4.875 20.888 5.8974 22.9328 7.94219C24.9776 9.98698 26 12.4854 26 15.4375C26 16.6292 25.8104 17.7531 25.4313 18.8094C25.0521 19.8656 24.5375 20.8 23.8875 21.6125L34.125 31.85L31.85 34.125ZM15.4375 22.75C17.4688 22.75 19.1953 22.0391 20.6172 20.6172C22.0391 19.1953 22.75 17.4688 22.75 15.4375C22.75 13.4062 22.0391 11.6797 20.6172 10.2578C19.1953 8.83594 17.4688 8.125 15.4375 8.125C13.4062 8.125 11.6797 8.83594 10.2578 10.2578C8.83594 11.6797 8.125 13.4062 8.125 15.4375C8.125 17.4688 8.83594 19.1953 10.2578 20.6172C11.6797 22.0391 13.4062 22.75 15.4375 22.75Z" fill="#1D1B20"/>
                </svg>
                <input value="{{ request('search') }}" name="search" type="text" placeholder="Search for Events..." class="ml-4 bg-gray-300 placeholder:text-gray-500 focus:outline-none text-gray-800 w-full">
            </div>

            <!-- Category Filter -->
            <select name="category" class="px-4 py-2 rounded-full bg-gray-300 text-dark-half focus:outline-none">
                <option value="" selected>All Categories</option>
                @forelse ($categories as $category)
                <option value="{{ $category->id }}" {{ request('category') == $category->id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>

                @empty
                    <option value="">No Categories Available</option>
                @endforelse
            </select>

            <!-- Submit Button -->
            <button type="submit" class="bg-dark-accent hover:bg-dark-secondary duration-300 text-white font-bold py-2 px-6 rounded-full shadow">
                Search
            </button>

        </form>
    </div>


    <!-- Stat cards -->
    <div class="px-4 sm:px-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
        <!-- Your tickets -->
        <div class="bg-dark-accent text-dark-text py-7 hover:text-dark-text rounded-lg p-4 flex flex-col transition-all duration-300 hover:scale-[1.02] dark:hover:bg-dark-accent hover:bg-light-accent">
            <div class="flex justify-between mb-2">
                <span>Your tickets</span>
                <i class="fas fa-ticket"></i>
            </div>
            <div class="text-4xl font-bold ">4</div>
            <button class="text-xs text-right"><i class="fas fa-eye mr-2"></i>view</button>
        </div>

        <!-- Create New Event -->
        <div class="bg-dark-half py-7 rounded-lg p-4 flex flex-col transition-all text-dark-text hover:text-dark-text duration-300 hover:scale-[1.02] dark:hover:bg-dark-accent hover:bg-light-accent">
            <div class="flex justify-between mb-2">
                <span class="dark:text-dark-text">Create Event</span>
                <i class="fas fa-calendar-plus dark:text-dark-text"></i>
            </div>
            <div class="text-4xl font-bold dark:text-dark-text">+</div>
            <button onclick="openAddPopup()" class="text-xs text-right"><i class="fas fa-plus mr-2"></i>Create</button>
        </div>

        <!-- Incoming Events -->
        <div class="bg-dark-half py-7 rounded-lg p-4 flex flex-col transition-all duration-300 hover:scale-[1.02] dark:hover:bg-dark-accent hover:bg-light-accent">
            <div class="flex justify-between mb-2">
                <span class="text-dark-text dark:text-dark-text">Incoming Events <span class="text-xs">(30days Left)</span> </span>
                <i class="fas fa-arrow-circle-down text-dark-text dark:text-dark-text"></i>
            </div>
            <div class="text-4xl font-bold text-dark-text dark:text-dark-text">{{ $incomingEvents }}</div>
            <a href="{{ route('incomingEvents') }}" class="text-xs text-right text-dark-text"><i class="fas fa-eye mr-2"></i>view</a>
        </div>

        <!-- Closed Events -->
        <div class="bg-dark-half py-7 rounded-lg p-4 flex flex-col transition-all duration-300 hover:scale-[1.02] dark:hover:bg-dark-accent hover:bg-light-accent">
            <div class="flex justify-between mb-2">
                <span class="text-dark-text dark:text-dark-text">Closed Events</span>
                <i class="fas fa-ban text-dark-text dark:text-dark-text"></i>
            </div>
            <div class="text-4xl font-bold text-dark-text dark:text-dark-text">{{ $pastEventsCount  }}</div>
            <a href="{{ route('pastEvents') }}" class="text-xs text-right text-dark-text"><i class="fas fa-eye mr-2"></i>view</a>
        </div>
    </div>
    @if (session('error'))
        <div id="successMessage" class="bg-red-100 text-dark-error p-4 mb-4 rounded">
            {{ session('error') }}
        </div>
        <script>
            setTimeout(() => {
                const msg = document.getElementById('successMessage');
                if (msg) msg.style.display = 'none';
            }, 5000);
        </script>
    @endif

    @if ($errors->any())
        <div class="bg-red-100 text-red-700 p-4 mb-4 rounded">
            <ul class="list-disc pl-5">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="w-8/12 mx-auto mt-10">
        <h1 class="text-2xl md:text-4xl uppercase font-semibold text-center font-poppins">upcoming Events</h1>
        <p class="font-poppins text-center text-sm md:text-xl font-light my-10">Don't miss out on the best concerts, club nights, and sporting action book your spot now and make memories that last a lifetime!</p>
    </div>

    <!-- events card -->
    @forelse ($allEvents as $event)

    @php
        $isPast = \Carbon\Carbon::parse($event->start_time)->isPast(); // convert to carbon object and check .. IsPast-> true false
    @endphp

     <div class="px-4 sm:px-8 mt-5 font-poppins mb-10">
        <div class="relative max-w-[1000px] mx-auto bg-cover bg-center sm:aspect-[2/1] aspect-[4/3] max-h-[500px] sm:max-h-[500px] overflow-hidden rounded-xl drop-shadow-lg"
        style="background-image: url('{{ asset('storage/' . $event->image) }}')">

        @if ($isPast)
            <div class="absolute top-7 -right-10 bg-light-error text-white text-sm font-medium py-2 px-10 rotate-45 shadow-lg z-30 tracking-wide">
                Event Ended
            </div> 
        @endif
        <!-- Overlay gradient -->
        <div class="absolute inset-0 bg-gradient-to-r from-black/100 to-black/0 z-10"></div>
        
        <!-- Content -->
        <div class="relative z-20 p-6 text-white flex flex-col justify-center h-full max-w-[60%] space-y-5">
            <p class="text-sm mb-1">{{ $event->start_time }}</p>
            <h2 class="text-3xl sm:text-4xl font-extrabold leading-tight mb-2">{{ $event->title }}</h2>
            <p class="text-base sm:text-lg mb-4">{{ $event->description }}</p>
            
            @if ($isPast)
            <div class="px-5 py-2 border font-light  border-white tracking-widest hover:bg-light-error text-dark-text transition-all duration-300 w-fit">
                CLOSED
            </div>
            @else
            <a href="{{ route('details', ['id' => $event->id]) }}" class="px-5 py-2 border font-light  border-white tracking-widest text-white hover:bg-white hover:text-black transition-all duration-300 w-fit">
                VIEW DETAILS
            </a>
            @endif
            
        </div>
    </div>
    </div>
    @empty
        <div class="w-full flex justify-center items-center mt-10">
            <p class="text-xl text-gray-500">No events available at the moment.</p>
        </div>
    @endforelse
    
    <div class="w-full">
        <div class="mt-4 mx-auto w-8/12">
            {{ $allEvents->links() }}
        </div>
    </div>     
    
    <!-- Add Modal -->
    <div id="addModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden z-50">
        <form action="{{ route('store.requested') }}" method="POST" enctype="multipart/form-data" class="bg-white dark:bg-dark-half p-6 rounded-lg shadow-lg w-96">
            @csrf
            <h2 class="text-xl font-semibold mb-4">Add New Event</h2>

            <input type="text" name="title" placeholder="Title" class="w-full p-2 rounded-lg border dark:bg-dark-background dark:text-dark-text mb-2" />

            <textarea name="description" placeholder="Description" class="w-full p-2 rounded-lg border dark:bg-dark-background dark:text-dark-text mb-2"></textarea>

            <input type="datetime-local" name="start_time" class="w-full p-2 rounded-lg border dark:bg-dark-background dark:text-dark-text mb-2" />

            <select name="category_id" class="w-full p-2 rounded-lg border dark:bg-dark-background dark:text-dark-text mb-2">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>

            <!-- Price -->
            <input type="number" name="price" placeholder="Leave empty for Free" class="w-full p-2 rounded-lg border dark:bg-dark-background dark:text-dark-text mb-2">

            <!-- Number of Tickets -->
            <input type="number" name="number_of_tickets" placeholder="Number of Tickets" class="w-full p-2 rounded-lg border dark:bg-dark-background dark:text-dark-text mb-2">

            <!-- Image Upload -->
            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Upload Image</label>
            <input type="file" name="image" accept="image/*" class="w-full mb-4 dark:bg-dark-background dark:text-dark-text" />

            <div class="flex justify-end space-x-2">
                <button type="button" onclick="closeAddPopup()" class="px-4 py-2 bg-gray-300 dark:bg-gray-700 rounded-lg">Cancel</button>
                <button type="submit" class="px-4 py-2 bg-light-primary dark:bg-dark-accent text-white rounded-lg">Add</button>
            </div>
        </form>
    </div>

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

        function openAddPopup() {
        document.getElementById('addModal').classList.remove('hidden');
        }
        function closeAddPopup() {
            document.getElementById('addModal').classList.add('hidden');
        }
    </script>
</body>
</html>