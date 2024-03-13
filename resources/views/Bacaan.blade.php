<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bacaan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- alpinejs -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2" defer></script>
</head>
<body>
    <!-- navbar -->
    <div id="chapter" class="static z-40 grid grid-cols-3 bg-slate-800 p-4">
        <div class="items-center flex"><a href="./Chapter.html" class="p-2 px-10 justify-start shadow-xl" style="background-color: red;" >Back</a></div>
        <div class="items-center text-center text-4xl p-2 font-bold text-white">CHAPTER</div>
    </div>

    
    <div class="px-40">
        <div class="bg-slate-200 w-full h-[1000px] mb-5"></div>
        <div class="grid grid-cols-2 ">
            <select class="flex bg-slate-200 py-1 justify-start px-4 rounded-lg w-[25%]" name="CHAPTER" id="">
                <option value="1">Chapter 1</option>
                <option value="2">Chapter 2</option>
                <option value="3">Chapter 3</option>
                <option value="4">Chapter 4</option>
                <option value="5">Chapter 5</option>
            </select>

            <div class="flex justify-end gap-4">
                <a href="" class="bg-slate-200  text-center pb-2 w-[25%]"><b class="text-2xl"><</b>    Prev</a>
                <a href="" class="bg-slate-200  text-center pb-2 w-[25%]">Next<b class="text-2xl">   ></b></a>
            </div>
        </div>
    </div>

    <a href="#chapter" class="fixed bottom-5 right-10  justify-center flex z-50 mt- w-12 h-14 bg-slate-200"><img src="asset/-_.png" alt="arrow" class="w-7 h-7 mt-4"></a>

    <br><br><br><br><br>
</body>
</html>