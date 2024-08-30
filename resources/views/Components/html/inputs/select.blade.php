<div class="flex flex-col flex-1 w-min-64 space-y-2 items-start">
    <label for="{{$label}}" class="font-medium">{{$label}}</label>
    <select style="height: {{$height ?? 50}}px" x-model="{{$model}}" @change="{{$function}}" class="bg-gray-200 border border-gray-300 rounded p-2 w-full text-left">
        {{$slot}}
    </select>
</div>
