@extends('layouts.app')

@section('content')
    <!-- Carousel -->
    <div class=" relative pt-10 z-0">
        <div class="w-full mx-auto relative" x-data="{
        activeSlide: 1,
        slides: [
        { id: 1, title: 'The Novel’s Extra', body: 'Waking up, Kim Hajin finds himself in a familiar world but an unfamiliar body. A world he created himself and a story he wrote, yet never finished.....', Genre: 'Genre: Action, Adventure, Drama, Fantasy, School Life, Shounen, Slice of Life', imageUrl: 'asset/the novels extra.jpg'},
        { id: 2, title: 'Omniscient Reader’s Viewpoint', body: 'One day our MC finds himself stuck in the world of his favorite webnovel. What does he do to survive? It is a world struck by catastrophe and danger all around.....', Genre: 'Genre: Fantasy, Manga, Light Novel, Science Fiction, Dystopia', imageUrl: 'asset/Omniscient Readers Viewpoint.jpg'},
        { id: 3, title: 'The Return of the Disaster-Class Hero', body: 'the rise of the hunters (awakened) who are ready to fight the monsters, and there the heroes who are called 13 star heroes are also born. and this is one of the stories of 1 of those 13 people.', Genre: 'Genre: Action, Adventure, Shounen, Fantasy', imageUrl: 'asset/The Return of the Disaster-Class Hero.jpg'},
        { id: 4, title: 'Solo Leveling', body: 'In this world where Hunters with various magical powers battle monsters from invading the defenceless humanity, Seong Jin-Woo was the weakest of all the Hunters, barely able to make a living.....', Genre: 'Genre: Action, Adventure, Fantasy', imageUrl: 'asset/solo-laveling.png'},
        { id: 5, title: 'Kono Subarashii Sekai ni Shukufuku wo!', body: 'follows the adventures of Kazuma Satou, a teenager who is transported to a fantasy world after dying in a fairly embarrassing way. Upon arrival, he joins a group of strange friends and embarks on various comedic and action-packed adventures.', Genre: 'Genre: Comedy, Adventure, Fantasy', imageUrl: 'asset/konosuba.jpeg'},
        ],
        loop(){
            setInterval(() => {this.activeSlide = this.activeSlide === 5 ? 1 : this.activeSlide + 1}, 5000);
        }
        }"
        x-init="loop"
        >

            <!-- Date Loop -->
            <template x-for="slide in slides" :key="slide.id">
            <div x-show="activeSlide === slide.id" class="p-24 h-80 flex items-center text-white bg-cover xl:h-[578px]"
            :style="'background-image: url(\'' + slide.imageUrl + '\'); background-size: cover; background-position: center;'">
                <div class="w-full h-[130px] md:h-[165px] xl:w-auto xl:h-auto absolute bg-black opacity-80 -ml-[95px] mt-[190px] md:mt-[155px] xl:ml-[500px] xl:mt-72 xl:mr-12 p-5 rounded-t-xl xl:rounded-xl">
                    <div class="opacity-100">
                        <h2 class="font-bold text-lg sm:text-xl lg:text-2xl xl:text-3xl pb-2" x-text="slide.title"></h2>
                        <p class="text-[8px] md:text-[9px] lg:text-[10px] xl:text-[13px] pb-2" x-text="slide.Genre"></p>
                        <p x-text="slide.body" class="hidden md:block xl:text-base"></p>
                    </div>
                </div>
            </div>
            </template>

            <!-- Buttons -->
            <div class="absolute flex items-center justify-center">
                <template x-for="slide in slides" :key="slide.id">
                    <button class="flex-1 w-2 h-2 -mt-4 mx-2 mb-2 rounded-full overflow-hidden transition-colors duration-200
                    ease-out hover:bg-slate-600 hover:shadow-lg"
                    :class="{
                        'bg-blue-600' : activeSlide === slide.id,
                        'bg-slate-300' : activeSlide !== slide.id,
                    }"
                    x-on:click="activeSlide = slide.id"
                    ></button>
                </template>
            </div>

        </div>
    </div>

    <!-- Populer hari ini -->
    <div class="pt-12"></div>
    <div class="text-3xl ml-9">Terpopuler Hari ini:</div>
    <div class="flex lg:w-5/12 xl:w-full overflow-x-auto mt-3">
        <div class="flex">

        <!-- Populer 1 -->
        <div class="bg-slate-200 ml-4 sm:ml-8 p-4 rounded shadow-md w-28 md:w-32">
            <img src="asset/Ayaka.jpeg" alt="Novel Cover" class="mb-4 w-20 h-32 md:w-28 md:h-36 object-cover rounded">
            <h1 class="text-sm md:text-md font-semibold mb-2 xl:ml-2">Judul Novel</h1>
            <ul class="list-disc pl-4 md:pl-6">
                <li class="mb-2 text-xs md:text-sm"><a href="#chapter-1">Chapter 1</a></li>
                <li class="mb-2 text-xs md:text-sm"><a href="#chapter-2">Chapter 2</a></li>
                <li class="mb-2 text-xs md:text-sm"><a href="#chapter-3">Chapter 3</a></li>
            </ul>
        </div>

        <!-- Populer 2 -->
        <div class="bg-slate-200 ml-4 sm:ml-8 md:ml-4 p-4 rounded shadow-md w-28 md:w-32">
            <img src="asset/Ayaka.jpeg" alt="Novel Cover" class="mb-4 w-20 h-32 md:w-28 md:h-36 object-cover rounded">
            <h1 class="text-sm md:text-md font-semibold mb-2 xl:ml-2">Judul Novel</h1>
            <ul class="list-disc pl-4 md:pl-6">
                <li class="mb-2 text-xs md:text-sm"><a href="#chapter-1">Chapter 1</a></li>
                <li class="mb-2 text-xs md:text-sm"><a href="#chapter-2">Chapter 2</a></li>
                <li class="mb-2 text-xs md:text-sm"><a href="#chapter-3">Chapter 3</a></li>
            </ul>
        </div>

        <!-- Populer 3 -->
        <div class="bg-slate-200 ml-4 sm:ml-8 md:ml-4 p-4 rounded shadow-md w-28 md:w-32">
            <img src="asset/Ayaka.jpeg" alt="Novel Cover" class="mb-4 w-20 h-32 md:w-28 md:h-36 object-cover rounded">
            <h1 class="text-sm md:text-md font-semibold mb-2 xl:ml-2">Judul Novel</h1>
            <ul class="list-disc pl-4 md:pl-6">
                <li class="mb-2 text-xs md:text-sm"><a href="#chapter-1">Chapter 1</a></li>
                <li class="mb-2 text-xs md:text-sm"><a href="#chapter-2">Chapter 2</a></li>
                <li class="mb-2 text-xs md:text-sm"><a href="#chapter-3">Chapter 3</a></li>
            </ul>
        </div>

        <!-- Populer 4 -->
        <div class="bg-slate-200 ml-4 sm:ml-8 md:ml-4 p-4 rounded shadow-md w-28 md:w-32">
            <img src="asset/Ayaka.jpeg" alt="Novel Cover" class="mb-4 w-20 h-32 md:w-28 md:h-36 object-cover rounded">
            <h1 class="text-sm md:text-md font-semibold mb-2 xl:ml-2">Judul Novel</h1>
            <ul class="list-disc pl-4 md:pl-6">
                <li class="mb-2 text-xs md:text-sm"><a href="#chapter-1">Chapter 1</a></li>
                <li class="mb-2 text-xs md:text-sm"><a href="#chapter-2">Chapter 2</a></li>
                <li class="mb-2 text-xs md:text-sm"><a href="#chapter-3">Chapter 3</a></li>
            </ul>
        </div>

        <!-- Populer 5 -->
        <div class="bg-slate-200 ml-4 sm:ml-8 md:ml-4 p-4 rounded shadow-md w-28 md:w-32">
            <img src="asset/Ayaka.jpeg" alt="Novel Cover" class="mb-4 w-20 h-32 md:w-28 md:h-36 object-cover rounded">
            <h1 class="text-sm md:text-md font-semibold mb-2 xl:ml-2">Judul Novel</h1>
            <ul class="list-disc pl-4 md:pl-6">
                <li class="mb-2 text-xs md:text-sm"><a href="#chapter-1">Chapter 1</a></li>
                <li class="mb-2 text-xs md:text-sm"><a href="#chapter-2">Chapter 2</a></li>
                <li class="mb-2 text-xs md:text-sm"><a href="#chapter-3">Chapter 3</a></li>
            </ul>
        </div>
        </div>
    </div>
    <hr class="hidden lg:block mt-4 xl:ml-6 lg:w-[430px] xl:w-[735px] border-black">

    <!-- Bulan-semua -->
    <div class="w-11/12 lg:w-[570px] ml-3 sm:ml-7 md:ml-4 mt-10 lg:ml-[450px] lg:-mt-[340px] xl:ml-[770px] xl:-mt-[355px] rounded-xl overflow-hidden bg-slate-300">
        <div class="text-2xl text-white p-2 text-center" style="background: linear-gradient(to right, black, red);">Populer</div>

        <div class="px-4 py-4 mb-4">
            <div class="flex relative bg-black px-2 py-2">
                <div class="w-1/2 text-center text-white" style="background-color: red;">Bulanan</div>
                <div class="ml-3 w-1/2 text-center text-white" style="background-color: red;">Semua</div>
            </div>
        </div>

        <div>
            <!-- Novel Menu 1 -->
            <hr class="w-full border-black">
            <div class="flex flex-wrap p-4 w-full shadow-md rounded-lg">
                <div class="flex space-x-4">
                    <div class="bg-transparent w-14 h-12 xl:w-16 xl:h-12 text-center border-4  mt-4 xl:ml-2 xl:mr-4 xl:mt-6 rounded-2xl text-2xl xl:text-3xl" style="border-color: red; color: red;">1</div>
                    <img src="asset/Ayaka.jpeg" alt="Novel Image" class="w-[90px] h-[90px] xl:w-28 xl:h-28 ">
                    <div class="w-3/4 text-black">
                        <h3 class="text-lg xl:text-xl font-semibold mb-3">Calamity World</h3>
                            <p class="text-sm xl:text-base mb-2 ml-2">Penulis :</p>
                            <p class="text-sm xl:text-base mb-2 ml-2">Genre :</p>
                    </div>
                </div>
            </div>
            <hr class="w-full border-black">

            <!-- Novel Menu 2 -->
            <div class="flex flex-wrap p-4 w-full shadow-md rounded-lg">
                <div class="flex space-x-4">
                    <div class="bg-transparent w-14 h-12 xl:w-16 xl:h-12 text-center border-4  mt-4 xl:ml-2 xl:mr-4 xl:mt-6 rounded-2xl text-2xl xl:text-3xl" style="border-color: red; color: red;">2</div>
                    <img src="asset/Ayaka.jpeg" alt="Novel Image" class="w-[90px] h-[90px] xl:w-28 xl:h-28 ">
                    <div class="w-3/4 text-black">
                        <h3 class="text-lg xl:text-xl font-semibold mb-3">Calamity World</h3>
                            <p class="text-sm xl:text-base mb-2 ml-2">Penulis :</p>
                            <p class="text-sm xl:text-base mb-2 ml-2">Genre :</p>
                    </div>
                </div>
            </div>
            <hr class="w-full border-black">

            <!-- Novel Menu 3 -->
            <div class="flex flex-wrap p-4 w-full shadow-md rounded-lg">
                <div class="flex space-x-4">
                    <div class="bg-transparent w-14 h-12 xl:w-16 xl:h-12 text-center border-4  mt-4 xl:ml-2 xl:mr-4 xl:mt-6 rounded-2xl text-2xl xl:text-3xl" style="border-color: red; color: red;">3</div>
                    <img src="asset/Ayaka.jpeg" alt="Novel Image" class="w-[90px] h-[90px] xl:w-28 xl:h-28 ">
                    <div class="w-3/4 text-black">
                        <h3 class="text-lg xl:text-xl font-semibold mb-3">Calamity World</h3>
                            <p class="text-sm xl:text-base mb-2 ml-2">Penulis :</p>
                            <p class="text-sm xl:text-base mb-2 ml-2">Genre :</p>
                    </div>
                </div>
            </div>
            <hr class="w-full border-black">

            <!-- Novel Menu 4 -->
            <div class="flex flex-wrap p-4 w-full shadow-md rounded-lg">
                <div class="flex space-x-4">
                    <div class="bg-transparent w-14 h-12 xl:w-16 xl:h-12 text-center border-4  mt-4 xl:ml-2 xl:mr-4 xl:mt-6 rounded-2xl text-2xl xl:text-3xl" style="border-color: red; color: red;">4</div>
                    <img src="asset/Ayaka.jpeg" alt="Novel Image" class="w-[90px] h-[90px] xl:w-28 xl:h-28 ">
                    <div class="w-3/4 text-black">
                        <h3 class="text-lg xl:text-xl font-semibold mb-3">Calamity World</h3>
                            <p class="text-sm xl:text-base mb-2 ml-2">Penulis :</p>
                            <p class="text-sm xl:text-base mb-2 ml-2">Genre :</p>
                    </div>
                </div>
            </div>
            <hr class="w-full border-black">

            <!-- Novel Menu 5 -->
            <div class="flex flex-wrap p-4 w-full shadow-md rounded-lg">
                <div class="flex space-x-4">
                    <div class="bg-transparent w-14 h-12 xl:w-16 xl:h-12 text-center border-4  mt-4 xl:ml-2 xl:mr-4 xl:mt-6 rounded-2xl text-2xl xl:text-3xl" style="border-color: red; color: red;">5</div>
                    <img src="asset/Ayaka.jpeg" alt="Novel Image" class="w-[90px] h-[90px] xl:w-28 xl:h-28 ">
                    <div class="w-3/4 text-black">
                        <h3 class="text-lg xl:text-xl font-semibold mb-3">Calamity World</h3>
                            <p class="text-sm xl:text-base mb-2 ml-2">Penulis :</p>
                            <p class="text-sm xl:text-base mb-2 ml-2">Genre :</p>
                    </div>
                </div>
            </div>
            <hr class="w-full border-black">
        </div>
    </div>

        <!-- Baru -->
        <div class="w-11/12 lg:w-5/12 relative mt-10 lg:-mt-[420px] ml-4 xl:ml-7 xl:w-[720px]">
            <div class="text-2xl text-white p-2 text-center" style="background: linear-gradient(to right, black, red);">Baru</div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-1 xl:grid-cols-2 gap-4 px-4">
                <!-- Novel Baru Menu 1 -->
                @foreach (App\Models\Datanovel::all() as $data)
                <div class="flex flex-wrap p-3 mt-6 xl:mt-8 ml-4 sm:ml-6 md:ml-0 lg:ml-4 xl:ml-0 w-11/12 md:w-[336px] lg:w-11/12 xl:w-[336px] shadow-md">
                    <div class="flex space-x-4">
                        <div class="flex space-x-4">
                            <img src="{{ asset('storage/'.$data->image) }}" alt="" class="w-24 h-36 ">
                            <div class="w-3/4">
                                <h3 class="w-48 text-xl font-semibold mb-3 truncate"><a href="/Tampilan/{{ $data->id }}">{{ $data->title }}</a></h3>
                                <ul class="list-disc pl-4 md:pl-6">
                                    <li class="mb-2 ml-2">
                                        <a href="" class="text-gray-700">Chapter 1</a>
                                    </li>
                                    <li class="mb-2 ml-2">
                                        <a href="#" class="text-gray-700">Chapter 2</a>
                                    </li>
                                    <li class="mb-2 ml-2">
                                        <a href="#" class="text-gray-700">Chapter 3</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>


            <div class="flex justify-center py-8 ">
                <button class="bg-slate-400 rounded-md shadow-lg py-2 px-10 ">NEXT</button>
            </div>

        </div>
@endsection
