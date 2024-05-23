<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>My SuperClean Blog</title>
    <script src="https://kit.fontawesome.com/4cb68bf540.js" crossorigin="anonymous"></script>
</head>
<body class="container mx-auto">
    <header>
        <div class="border-b-gray-300 border-b min-h-16 items-center justify-between flex rounded-sm my-8">
            <nav class="pl-5 flex justify-between items-center w-full">
                <a href="/">
                    <button class="text-xl uppercase tracking-[.6rem]">Blogg</button>
                </a>
                {{-- <button class="py-2 px-5">
                    <div class="relative h-5 w-5 block">
                        <div class="w-5 bg-black h-[2px] absolute top-1 right-0"></div>
                        <div class="w-5 bg-black h-[2px] absolute bottom-1 right-0"></div>
                    </div>
                </button> --}}
                <ul class="flex gap-5 px-5 mt-1">
                    <li><a class="uppercase tracking-widest text-sm" href="/about">About</a></li>
                    <li><a class="uppercase tracking-widest text-sm" href="/contact">Contact</a></li>
                    @if (Auth::check())
                    <li><a class="uppercase tracking-widest text-sm border hover:bg-red-100 px-3 py-1 bg-red-50 rounded-md" href="/logout">Log out</a></li>
                    @else
                    <li><a class="uppercase tracking-widest text-sm border hover:bg-orange-100 px-3 py-1 bg-orange-50 rounded-md" href="/login">Log in</a></li>
                    @endif
                </ul>
            </nav>
        </div>
    </header>
    <main>
        {{ $slot }}
    </main>
</body>
</html>