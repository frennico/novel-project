<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter</title>
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
            <a href="#" class="text-white text-lg font-semibold">Logo</a>

            <!-- Navbar Links (Desktop) -->
            <div class="hidden lg:flex space-x-4">
                <a href="./Novel.html" class="text-white hover:text-gray-300">Home</a>
                <a href="#" class="text-white hover:text-gray-300">Genre</a>
                <a href="#" class="text-white hover:text-gray-300">History</a>
                <a href="#" class="text-white hover:text-gray-300">Create</a>
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
                    <a href="./Novel.html" class="block text-white text-lg py-2 hover:text-gray-300" x-on:click="navOpen = !navOpen">Home</a>
                    <a href="#" class="block text-white text-lg py-2 hover:text-gray-300" x-on:click="navOpen = !navOpen">Genre</a>
                    <a href="#" class="block text-white text-lg py-2 hover:text-gray-300" x-on:click="navOpen = !navOpen">History</a>
                    <a href="#" class="block text-white text-lg py-2 hover:text-gray-300" x-on:click="navOpen = !navOpen">Creat</a>
                    <a href="#" class="block text-white text-lg py-2 hover:text-gray-300" x-on:click="navOpen = !navOpen">Profile</a>
                </div>
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
                    <p class="text-black font-bold text-4xl pb-5">{{ $Tampilan->title }}</p>
                    <p class="text-black font-bold pb-5">Author(s) : Jee Gab Song</p>
                    <p class="text-black">Sinopsis: Waking up, Kim Hajin finds himself in a familiar world but an unfamiliar body.
                        The world he created himself and the story he wrote, however, never ended.
                        He has become an extra in the novel, a filler character with no importance to the story.
                        The only clue to escape is to stay close to the main storyline.
                        However, he soon learns that this world is not exactly identical to his creation.</p>
                </div>
            </div>
    </div>

    <!-- Chapter -->
    <div class=" p-20">
        <div class="bg-slate-200 pb-8">
            <div class="text-center text-4xl p-2 font-bold text-white mb-6" style="background-color: red;">CHAPTER</div>

            @foreach (App\Models\chapter::all() as $data)
                <div class="grid grid-cols-2 gap-5 px-6">
                    <a href="{{ url('/Bacaan') }}" class="bg-transparent border-4 border-black text-black text-center px-3 py-3 rounded-2xl text-3xl">Chapter 1</a>
                    <a href="./" class="bg-transparent border-4 border-black text-black text-center px-3 py-3 rounded-2xl text-3xl">Chapter 2</a>
                    <a href="./" class="bg-transparent border-4 border-black text-black text-center px-3 py-3 rounded-2xl text-3xl">Chapter 3</a>
                    <a href="./" class="bg-transparent border-4 border-black text-black text-center px-3 py-3 rounded-2xl text-3xl">Chapter 4</a>
                    <a href="./" class="bg-transparent border-4 border-black text-black text-center px-3 py-3 rounded-2xl text-3xl">Chapter 5</a>
                    <a href="./" class="bg-transparent border-4 border-black text-black text-center px-3 py-3 rounded-2xl text-3xl">Chapter 6</a>
                    <a href="./" class="bg-transparent border-4 border-black text-black text-center px-3 py-3 rounded-2xl text-3xl">Chapter 7</a>
                    <a href="./" class="bg-transparent border-4 border-black text-black text-center px-3 py-3 rounded-2xl text-3xl">Chapter 8</a>
                    <a href="./" class="bg-transparent border-4 border-black text-black text-center px-3 py-3 rounded-2xl text-3xl">Chapter 9</a>
                    <a href="./" class="bg-transparent border-4 border-black text-black text-center px-3 py-3 rounded-2xl text-3xl">Chapter 10</a>
                </div>
            @endforeach
        </div>
    </div>

</body>
</html>
