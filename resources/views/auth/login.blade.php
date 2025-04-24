<!DOCTYPE html>
<html lang="en" class="scroll-smooth overflow-x-hidden">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup - EventSphere</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&family=Montserrat:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    @vite('resources/css/app.css')
</head>
<body class="bg-light-background dark:bg-dark-background dark:text-dark-text transition-colors duration-2000 overflow-x-hidden">

    
    <section style="background-image: url({{ asset('images/mainBGlogin.jpg') }})" 
    class="flex flex-col md:flex-row w-full min-h-screen text-dark-text justify-center items-center bg-cover bg-center p-4 font-montserrat">
        
        <!-- left image - hidden on mobile -->
        <div class="hidden md:block md:w-full lg:w-4/12 h-[400px] md:h-[500px] lg:h-[600px] mr-0 md:mr-2">
            <img src="{{ asset('images/left-image-login.jpg') }}" alt="Logo of EventSphere" 
            class="w-full h-full object-cover rounded-lg">
        </div>

        <!-- right form -->
        <div class="w-full sm:w-3/4 md:w-2/3 lg:w-4/12 h-auto min-h-[500px] md:h-[500px] lg:h-[600px] rounded-md bg-[#741295]/50 backdrop-blur-xl border px-4 py-6 sm:px-8 sm:py-8 md:px-4 md:py-0 md:ml-2 my-4 overflow-y-auto">
            <div class="flex flex-col h-full">
                <div>
                    <div class="text-center mb-4 sm:mb-4 lg:mb-6">
                        <a href="{{ route('index') }}"><img src="{{ asset('images/EventSphere_Logo1.png') }}" alt="Eventsphere Logo" class="mx-auto w-24 md:w-40 drop-shadow-md"></a>
                        <h2 class="text-sm sm:text-xl md:text-xl font-semibold text-dark-text">Welcome Back</h2>
                        <p class="text-dark-text text-xs sm:text-sm md:text-xs font-medium mt-1">Let's get you started</p>
                    </div>

                    <form action="{{ route('login') }}" method="POST" class="space-y-2 text-xs sm:space-y-2 md:px-10">
                        @csrf

                        
                        <!-- validation errors -->
                        @if ($errors->any())
                            <div class="bg-red-100 text-light-error p-2 text-xs mt-2">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
    
                        <!-- email -->
                        <div>
                            <label for="email" class="block text-xs sm:text-sm font-medium text-dark-text mb-1">Email Address</label>
                            <input type="email" name="email" id="email" required 
                            class="w-full px-4 py-2 text-xs rounded-[4px] bg-transparent border text-dark-text placeholder-white/80 placeholder:font-light focus:outline-none" 
                            placeholder="m.latrach@example.com">
                        </div>
                        
                        <!-- password -->
                        <div>
                            <label for="password" class="block text-xs sm:text-sm font-medium text-dark-text mb-1">Password</label>
                            <input type="password" name="password" id="password" required 
                            class="w-full px-4 py-2 text-xs rounded-[4px] bg-transparent border text-dark-text placeholder-white/80 placeholder:font-light focus:outline-none" 
                                   placeholder="Password">
                                </div>
                                <!-- remember me -->
                                <div class="flex items-center mt-3">
                                    <input type="checkbox" name="remember" id="remember" class="h-2 w-2 sm:h-3 sm:w-3 text-[#721093] focus:ring-[#721093] border-gray-300 rounded">
                                    <label for="remember" class="ml-2 block text-xs text-dark-text">
                                        Remember me
                            </label>
                        </div>
                        
                        <div class="pt-2">
                            <button type="submit" 
                                    class="w-full flex justify-center px-4 py-2 text-xs sm:text-sm rounded-[4px] border shadow-sm font-semibold text-dark-text bg-[#721093] hover:bg-[#511366] focus:outline-none transition duration-300">
                                Login
                            </button>
                        </div>
                    </form>
                </div>

                <div class="text-center mt-2 sm:mt-5 pt-2">
                    <p class="text-dark-text text-xs">Don't have an account? 
                    <a href="{{ route('show.register') }}" class="font-semibold text-dark-text hover:underline">Register</a></p>
                </div>
            </div>
        </div>
    </section>

</body>
</html>