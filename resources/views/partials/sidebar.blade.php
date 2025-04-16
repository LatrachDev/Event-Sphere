<div class="w-48 bg-dark-half flex flex-col">
    <div class="p-4 flex items-center">
        <img src="{{ asset('images/EventSphere_Logo1.png') }}" alt="Logo" class="w-full h-full object-cover rounded-full">
    </div>
    
    <nav class="flex-1">
        <a href="{{ route('dashboard') }}" class="flex items-center py-3 px-4 text-sm text-dark-text hover:border-l-4 hover:bg-dark-accent duration-200">
            <i class="fas fa-th-large w-5 text-center mr-3"></i>
            <span>Dashboard</span>
        </a>
        <a href="{{ route('users.index') }}" class="flex items-center py-3 px-4 text-sm text-dark-text hover:border-l-4 hover:bg-dark-accent duration-200">
            <i class="fas fa-users w-5 text-center mr-3"></i>
            <span>Manage Users</span>
        </a>
        <a href="{{ route('events.index') }}" class="flex items-center py-3 px-4 text-sm text-dark-text hover:border-l-4 hover:bg-dark-accent duration-200">
            <i class="fas fa-calendar-alt w-5 text-center mr-3"></i>
            <span>Manage Events</span>
        </a>
        <a href="{{ route('categories.index') }}" class="flex items-center py-3 px-4 text-sm text-dark-text hover:border-l-4 hover:bg-dark-accent duration-200">
            <i class="fas fa-tags w-5 text-center mr-3"></i>
            <span>Manage Categories</span>
        </a>
    </nav>

    <div class="p-4 mt-auto border-t border-gray-700">

    <button class="flex items-center text-sm text-gray-400 mb-4"  onclick="toggleDarkMode()">
        <i class="fas fa-sun w-5 text-center mr-3 text-yellow-400"></i>
        <span>LIGHT MODE</span>
    </button>
        <form action="{{ route('logout') }}" method="POST" class="flex items-center text-sm text-gray-400">
            @csrf
            <i class="fas fa-sign-out-alt w-5 text-center mr-3"></i>
            <button>LOGOUT</button>
        </form>
    </div>
</div>
