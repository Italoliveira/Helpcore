<div class="bg-gray-200 shadow-lg w-full rounded-lg overflow-hidden flex flex-col hover:scale-[101%] transition-transform duration-300">
    <img
        class="object-cover w-full h-40 bg-transparent opacity-80 transition-opacity duration-300 hover:opacity-100"
        src="{{ asset("Posts/$image") }}"
        alt="Imagem Logo Outlook"
    />
    <div class="m-3 flex flex-col flex-1">
        <div class="mb-2 font-bold text-xl">
            <h3>{{$title}}</h3>
        </div>
        <div class="flex-1">
            <p class="text-base">
                {{$summary}}
            </p>
        </div>
        <div class="text-sm text-right mt-2">
            {{$date}}
        </div>
    </div>
</div>