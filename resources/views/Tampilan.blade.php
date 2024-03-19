<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('home', 'Novel') }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- alpinejs -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2" defer></script>
</head>
<body>
    <!-- Navbar -->
    <nav class="fixed w-full z-50" x-data="{ navOpen: false }">
        <!-- Background Blur Overlay -->
        <div x-show="navOpen" class="lg:hidden fixed top-0 left-0 w-full h-full bg-gray-800 bg-opacity-75 z-40 backdrop-blur-md"></div>

        <div class="mx-auto relative flex justify-between items-center" style="background: linear-gradient(to right, black, red); padding: 1rem;">

            <!-- Mobile Menu Button -->
            <div class="lg:hidden">
                <button @click="navOpen = !navOpen" class="text-white hover:text-gray-300 focus:outline-none">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
            </div>
            <!-- Logo -->
            <a class="hidden sm:block text-white text-lg font-semibold" href="{{ url('/') }}">
                {{ config('home', 'Novel') }}
            </a>

            <!-- Navbar Links (Desktop) -->
            <div class="hidden lg:flex space-x-4">
                <a href="{{ url('/') }}" class="text-white hover:text-gray-300">Home</a>
                <a href="{{ url('/') }}" class="text-white hover:text-gray-300">Genre</a>
                <a href="#" class="text-white hover:text-gray-300">History</a>
                <a href="{{ url('/create') }}" class="text-white hover:text-gray-300">Create</a>
                <a href="#" class="text-white hover:text-gray-300">Profile</a>
            </div>

            <!-- Navbar Links (Mobile) -->
            <div x-show="navOpen" class="lg:hidden fixed top-0 left-0 w-64 h-full bg-opacity-75 z-50 transform translate-x-0 transition-transform ease-in-out duration-300"
            style="background: linear-gradient(to right, black, red);"
            x-transition:enter="transition-transform ease-out duration-300"
            x-transition:enter-start="-translate-x-full"
            x-transition:enter-end="translate-x-0"
            x-transition:leave="transition-transform ease-in duration-300"
            x-transition:leave-start="translate-x-0"
            x-transition:leave-end="-translate-x-full">
                <div class="flex justify-end p-4">
                    <button @click="navOpen = !navOpen" class="text-white hover:text-gray-300 focus:outline-none">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
                <div class="flex flex-col items-center">
                    <a href="{{ url('/') }}" class="block text-white text-lg py-2 hover:text-gray-300" x-on:click="navOpen = !navOpen">Home</a>
                    <a href="#" class="block text-white text-lg py-2 hover:text-gray-300" x-on:click="navOpen = !navOpen">Genre</a>
                    <a href="#" class="block text-white text-lg py-2 hover:text-gray-300" x-on:click="navOpen = !navOpen">History</a>
                    <a href="{{ url('/create') }}" class="block text-white text-lg py-2 hover:text-gray-300" x-on:click="navOpen = !navOpen">Creat</a>
                    <a href="#" class="block text-white text-lg py-2 hover:text-gray-300" x-on:click="navOpen = !navOpen">Profile</a>
                </div>
            </div>

            <div id="navbarSupportedContent">
                <!-- Right Side Of Navbar -->
                <ul>
                    <!-- Authentication Links -->
                    @guest
                    <div class="flex gap-4">
                        @if (Route::has('login'))
                            <li class="">
                                <a class="px-0" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="">
                                <a class="px-0" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    </div>
                    @else
                        {{-- dropdown --}}
                        <div x-data="{ isOpen: false }" class="relative">
                            <button @click="isOpen = !isOpen" class="block text-white text-lg hover:text-gray-300 focus:outline-none">
                                {{ Auth::user()->name }}
                                <svg class="h-4 w-4 inline-block ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                            <div x-show="isOpen" @click.away="isOpen = false" class="absolute z-50 bg-white rounded-md shadow-lg">
                                <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                  document.getElementById('logout-form').submit();">
                                     {{ __('Logout') }}</a>

                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                            </div>
                        </div>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <!-- Cover -->
    <div class="bg-slate-200 pt-32 pl-24 pb-6">
            <div class=" grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 xl:grid-cols-5 gap-4 max-w-[1300px]">
                <div>
                    <img src="{{ asset('storage/'.$Tampilan->image) }}" alt="Cover" class="w-[230px] h-[350px]">
                </div>
                <div class="text-left p-4 lg:col-span-3 xl:col-span-4">

                    <div>{{ $Tampilan->chapter }}</div>

                    <p class="text-black font-bold text-4xl pb-5">{{ $Tampilan->title }}</p>
                    <p class="text-black font-bold pb-5">Author(s) : {{ $Tampilan->user_name }}</p>
                    <p class="text-black">Sinopsis:</p>
                    <div class="w-11/12 h-40 px-1 hidden sm:block mb-1 xl:mb-4 container break-words overflow-y-auto border-2">{{ $Tampilan->sinopsis }}</div>
                </div>
            </div>
    </div>

    <!-- Chapter -->
    <div class=" p-20">
        <div class="bg-slate-200 pb-8">
            <div class="text-center text-4xl p-2 font-bold text-white mb-6" style="background-color: red;">CHAPTER</div>

            <div class="grid grid-cols-2 gap-5 px-6">
                @foreach (App\Models\Chapter::where('datanovel_id', $Tampilan->id)->get() as $chapter)
                    <a href="{{ url('/Bacaan/' . $chapter->id) }}" class="bg-transparent border-4 border-black text-black hover:text-sky-500 hover:border-sky-500 text-center px-3 py-3 rounded-2xl text-3xl">Chapter {{ $loop->iteration }}</a>
                @endforeach
            </div>

        </div>
    </div>

</body>
</html>
