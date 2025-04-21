<div class="min-h-screen w-48 bg-dark-half flex flex-col">
    <div class="p-4 flex items-center">
        <img src="{{ asset('images/EventSphere_Logo1.png') }}" alt="Logo" class="w-full h-full object-cover rounded-full">
    </div>
    
    <nav class="flex-1">
        <a href="{{ route('dashboard') }}" class="flex items-center py-3 px-4 text-sm text-dark-text hover:border-l-4 hover:bg-[#10131e] duration-200">
        <div class="mr-3">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path opacity="0.4" d="M13.3964 1.66663H16.2181C17.3866 1.66663 18.3335 2.6215 18.3335 3.79993V6.6454C18.3335 7.82382 17.3866 8.7787 16.2181 8.7787H13.3964C12.2279 8.7787 11.281 7.82382 11.281 6.6454V3.79993C11.281 2.6215 12.2279 1.66663 13.3964 1.66663Z" fill="#D28BEA"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M3.78219 1.66663H6.60382C7.77238 1.66663 8.71926 2.6215 8.71926 3.79993V6.6454C8.71926 7.82382 7.77238 8.7787 6.60382 8.7787H3.78219C2.61363 8.7787 1.66675 7.82382 1.66675 6.6454V3.79993C1.66675 2.6215 2.61363 1.66663 3.78219 1.66663ZM3.78219 11.2212H6.60382C7.77238 11.2212 8.71926 12.1761 8.71926 13.3545V16.2C8.71926 17.3776 7.77238 18.3333 6.60382 18.3333H3.78219C2.61363 18.3333 1.66675 17.3776 1.66675 16.2V13.3545C1.66675 12.1761 2.61363 11.2212 3.78219 11.2212ZM16.218 11.2212H13.3963C12.2278 11.2212 11.2809 12.1761 11.2809 13.3545V16.2C11.2809 17.3776 12.2278 18.3333 13.3963 18.3333H16.218C17.3865 18.3333 18.3334 17.3776 18.3334 16.2V13.3545C18.3334 12.1761 17.3865 11.2212 16.218 11.2212Z" fill="#D28BEA"/>
            </svg>
        </div>
            <span>Dashboard</span>
        </a>
        <a href="{{ route('users.index') }}" class="flex items-center py-3 px-4 text-sm text-dark-text hover:border-l-4 hover:bg-[#10131e] duration-200">
            <i class="fas fa-users w-5 text-center mr-3"></i>
            <span>Users</span>
        </a>
        <a href="{{ route('events.index') }}" class="flex items-center py-3 px-4 text-sm text-dark-text hover:border-l-4 hover:bg-[#10131e] duration-200">
           <div class="mr-3">
            <svg width="20" height="22" viewBox="0 0 20 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M17.9999 6.30005V16.8C17.9999 18.5 16.6999 19.8 14.9999 19.8H3.8999C3.8999 20.9 4.7999 21.8 5.8999 21.8H15.9999C18.1999 21.8 19.9999 20 19.9999 17.8V8.30005C19.9999 7.20005 19.0999 6.30005 17.9999 6.30005Z" fill="#D28BEA"/>
                <path d="M3 0V2H2C0.9 2 0 2.9 0 4V16C0 17.1 0.9 18 2 18H14.2C15.3 18 16.2 17.1 16.2 16V4C16.2 2.9 15.3 2 14.2 2H13.2V0H11.2V2H5V0H3ZM2 7H14.2V16H2V7Z" fill="#D28BEA"/>
                <path d="M11.7 15.2L9.3 13.8L7 15.2L7.6 12.5L5.5 10.7L8.3 10.5L9.4 7.90002L10.5 10.4L13.3 10.7L11.2 12.5L11.7 15.2Z" fill="#D28BEA"/>
                </svg>
           </div>
            <span>Events</span>
        </a>
        <a href="{{ route('categories.index') }}" class="flex items-center py-3 px-4 text-sm text-dark-text hover:border-l-4 hover:bg-[#10131e] duration-200">
            <i class="fas fa-tags w-5 text-center mr-3"></i>
            <span>Categories</span>
        </a>
        <a href="{{ route('requested.index') }}" class="flex items-center py-3 px-4 text-sm text-dark-text hover:border-l-4 hover:bg-[#10131e] duration-200">
            <div class="mr-3">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M18.3305 6.97927H14.8016C13.1593 6.98216 11.829 8.27929 11.826 9.88047C11.8238 11.4853 13.1556 12.7882 14.8016 12.7903H18.3334V13.0453C18.3334 15.8446 16.6364 17.5 13.7645 17.5H6.23638C3.36379 17.5 1.66675 15.8446 1.66675 13.0453V6.94822C1.66675 4.14885 3.36379 2.5 6.23638 2.5H13.7616C16.6334 2.5 18.3305 4.14885 18.3305 6.94822V6.97927ZM5.61638 6.97277H10.3164H10.3193H10.3253C10.6771 6.97133 10.9616 6.69182 10.9601 6.34804C10.9586 6.00498 10.6712 5.72765 10.3193 5.72909H5.61638C5.26675 5.73054 4.98304 6.00715 4.98156 6.34876C4.98008 6.69182 5.26453 6.97133 5.61638 6.97277Z" fill="#ADB3CC"/>
                <path opacity="0.4" d="M13.3647 10.2472C13.5389 11.0399 14.2339 11.5976 15.0273 11.5831H17.7356C18.0657 11.5831 18.3335 11.3097 18.3335 10.9717V8.86208C18.3328 8.52485 18.0657 8.25073 17.7356 8.25H14.9636C14.061 8.2529 13.3321 9.00204 13.3335 9.92523C13.3335 10.0333 13.3441 10.1413 13.3647 10.2472Z" fill="#ADB3CC"/>
                <circle cx="15.0001" cy="9.91671" r="0.833333" fill="#ADB3CC"/>
                </svg>
            </div>
            <span>Request</span>
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
