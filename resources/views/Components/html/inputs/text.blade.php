<div class="flex flex-1 flex-col justify-end space-y-2">
    <label for="" class="font-medium">{{$label}}</label>
    <div class="relative inline-block min-w-64">
        <input type="text"
        x-model="{{$model}}" @input="{{$function}}"
        style="height: {{$height ?? 50}}px"
        class="bg-gray-200 border border-gray-300 rounded p-2 w-full text-left">
    </div>
</div>