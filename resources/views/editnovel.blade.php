<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('home', 'Novel') }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
@livewireStyles
<body>
    <!-- navbar -->
    <div class="static flex z-40 items-center justify-between bg-slate-800 p-4">
        <div class="items-center flex"><a href="{{ url()->previous() }}" class="p-2 px-10 justify-start"><img src="../asset/Panah-kiri.png" alt="arrow"></a></div>
        <div class="items-center text-center justify-center text-4xl p-2 pr-16 font-bold text-white">CHANGE</div>
        <div></div>
    </div>
    <div class="px-20 pt-14">
        <div class="flex">

            @livewire('edithapusnovel', ['id' => request()->route('id')])

        </div>
    </div>
    @livewireScripts
</body>
</html>
