@props([
    'columns' => [],
    'id' => 'ID',
    ''
])

<table class="mt-4 table-fixed w-full border-collapse border border-gray-300">
    
    <thead class="bg-neutral-900 text-white">
        <tr>
        @foreach($columns as $column => $width)
            <th class="px-4 py-2 text-center border-b w-[{{$width}}%]">{{$column}}</th>
        @endforeach
        </tr>
    </thead>

    <tbody>
        {{$slot}}
    </tbody>

</table>