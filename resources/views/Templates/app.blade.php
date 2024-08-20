<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Helpcore')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body>
    
    <x-layouts.Header/>

    <main class="p-4 space-y-4 bg-gray-100">
        @yield('content')
    </main>
    
    <div class="fixed bottom-10 right-4">
        <div class="bg-orange-500 text-white p-4 rounded-lg shadow-lg flex items-center space-x-2 cursor-pointer">
            <span class="font-semibold">Assistencia Virtual</span>
            <x-icons.help color="white" scale=24/>
        </div>
    </div>
    
    <x-layouts.Footer/>

    @livewireScripts

</body>

</html>