<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')

    <title>Document</title>
</head>
<body>
    <header class="h-[100px] bg-[#1b3864] flex items-center pl-[20px] shadow-xl/20 mb-[20px]">        
        @yield('header')
    </header>
    <main class="flex flex-wrap justify-center">
        @yield('content')        
    </main>
    <footer class="bg-[#1b3864] text-white flex flex-col items-center">        
        @yield('footer')
    </footer>
</body>
</html>