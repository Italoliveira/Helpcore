<div class="relative">
    @if($notificationCount)
        <span class="absolute bottom-3 left-3 bg-red-500 text-white rounded-full text-xs w-4 h-4 flex items-center justify-center">
            {{ $notificationCount }}
        </span>
    @endif
    <x-dynamic-component :component="$icon" scale="{{$scale}}" color="{{$color}}"/>
</div>