<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <div class="items-center flex"></div>
    <div class="flex">
    <div class="">

        <input type="file" name="image" wire:model="imagemodel">
        @if ($imagemodel)
            <img src="{{ $imagemodel->temporaryUrl() }}" class="w-[296px] h-[451px] border-2">
        @endif
    </div>
    <div class="ml-10">
            <div class=" mt-10 text-3xl">{{ __('Title') }}</div>
            <input id="title" type="text" class=" border-2 w-1/2 border-black py-1 px-1"  wire:model="titlemodel" autofocus>
            <div class=" mt-10 text-3xl">{{ __('Sinopsis') }}</div>
            <textarea name="" wire:model="sinopsismodel" id="" cols="80" rows="6" class=" border-2 border-black py-1 px-1"></textarea>
            <div class=" mt-10 text-md">{{ __('Genre : ') }}
                <select wire:model="genremodel" class=" border-2 border-black py-1 px-1" >
                    @foreach($genres as $genre)
                        <option value="{{ $genre }}">{{ $genre }}</option>
                    @endforeach
                </select>
            </div>
            <div class=" absolute top-10 right-3"><a class="p-1 mr-4 px-8 shadow-xl text-center rounded-md cursor-pointer" style="background-color: red;" wire:click="simpan">Save</a></div>
    </div>
    </div>
</div>
