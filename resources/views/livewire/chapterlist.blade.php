<div>
    {{-- The whole world belongs to you. --}}
    <div class="px-40">
        <textarea name="chapter" id="chaptercreate" class="w-full h-screen px-2 py-1 mb-5 mt-2 border-2" wire:model="chaptermodel" autofocus></textarea>
        <div class="">
            <a class="absolute top-10 right-3 p-1 mr-4 px-8 shadow-xl text-center rounded-md" style="background-color: red;" wire:click="simpan">Save</a>
        </div>
    </div>
</div>
