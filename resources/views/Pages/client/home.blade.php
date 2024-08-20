@extends('templates.app')

@section('title', $title)

@section('content')

<div class="flex flex-col md:flex-row md:space-x-2">

    <section class="order-1 w-full md:w-1/3 h-[40vh] flex justify-center items-center my-2 md:my-0">

        <div class="grid grid-cols-2 grid-rows-2 gap-2 w-full h-full">
            <x-html.btn-menu icon="icons.plus" route="home" color="bg-green-400">
                Novo Chamado
            </x-html.btn-menu>
            <x-html.btn-menu icon="icons.history" route="home" color="bg-pink-400">
                Historico
            </x-html.btn-menu>
            <x-html.btn-menu icon="icons.file" route="home" color="bg-orange-400">
                Auditoria
            </x-html.btn-menu>
            <x-html.btn-menu icon="icons.book" route="home" color="bg-blue-400">
                Artigos
            </x-html.btn-menu>
        </div>
        
    </section>

    <section class="bg-gray-200 order-2 w-full md:w-2/3 h-[40vh] flex flex-col my-2 md:my-0 border-8 border-white">

        <div class="h-[20%] flex justify-center items-center text-2xl">
            <b>Meus Chamados</b>
        </div>

        <div class="h-[80%] grid grid-cols-2 grid-rows-2 md:grid-cols-4 md:grid-rows-1 gap-4 m-4">
            <x-html.display-home text="Abertos" value="10"/>
            <x-html.display-home text="Em Andamento" value="15"/>
            <x-html.display-home text="Finalizados" value="10"/>
            <x-html.display-home text="Cancelados" value="01"/>
        </div>

    </section>
</div>

<div class="space-y-4">

    <div class="flex justify-start items-center space-x-4">
        <x-icons.menu color="black" scale="36"/>
        <span class="font-bold text-2xl">Informativos</span>
    </div>

    <div class="flex flex-col md:grid md:grid-cols-5 md:gap-4 md:space-y-0 space-y-4">

    @foreach ($posts as $post)
        
        <x-html.posts title="{{$post['title']}}" summary="{{$post['summary']}}" date="{{$post['date']}}" image="{{$post['image']}}"/>

    @endforeach 

</div>

@endsection
