<a href="{{route($route)}}" class="flex flex-col justify-center items-center rounded-lg {{$color}} transition-transform duration-300 transform hover:scale-105">
    <x-dynamic-component :component="$icon" color="black" scale="48"/>
    <span class="font-semibold">
        {{ $slot }}
    </span>
</a>