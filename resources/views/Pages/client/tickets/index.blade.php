@extends('templates.app')

@section('title', $title)

@section('content')

    <div class="spcace-y-4 h-full" x-data="Consumer('tickets')" x-init="fetchData()">

        <div class="flex justify-around px-10 space-x-6">
            
            <x-html.inputs.text label="Pesquisa" model="filters.search" function="fetchData()" />

            <x-html.inputs.select label="Prioridade" model="filters.priority" function="fetchData()">
                <x-html.inputs.option label="Todos" value="Todos"/>
                <x-html.inputs.option label="Alta" value="Alta"/>
                <x-html.inputs.option label="Média" value="Média"/>
                <x-html.inputs.option label="Baixa" value="Baixa"/>
            </x-html.inputs.select>

            <x-html.inputs.select label="Responsavel" model="filters.responsible" function="fetchData()">
                <x-html.inputs.option label="Todos" value="Todos"/>
                <x-html.inputs.option label="João" value="João"/>
                <x-html.inputs.option label="Maria" value="Maria"/>
                <x-html.inputs.option label="Pedro" value="Pedro"/>
                <x-html.inputs.option label="Ana" value="Ana"/>
                <x-html.inputs.option label="José" value="José"/>
            </x-html.inputs.select>
            
            <x-html.inputs.select label="Assunto" model="filters.subject" function="fetchData()">
                <x-html.inputs.option label="Todos" value="Todos"/>
                <x-html.inputs.option label="Desenvolvimento" value="Desenvolvimento"/>
                <x-html.inputs.option label="Design" value="Design"/>
                <x-html.inputs.option label="Marketing" value="Marketing"/>
            </x-html.inputs.select>

            <x-html.inputs.select label="Status" model="filters.status" function="fetchData()">
                <x-html.inputs.option label="Todos" value="Todos"/>
                <x-html.inputs.option label="Em andamento" value="Em andamento"/>
                <x-html.inputs.option label="Concluído" value="Concluído"/>
                <x-html.inputs.option label="Pendente" value="Pendente"/>
            </x-html.inputs.select>

        </div>

        <x-html.list.table :columns="['N°' => 5,'Nome' => 20, 'Prioridade' => 10, 'Responsável' => 30, 'Assunto' => 10, 'Status' => 10, '' => 5]">

            <template x-for="item in filteredData" :key="item.id">
                <tr class="odd:bg-gray-100 even:bg-white">
                    <td class="px-4 py-2 text-start bg-red-100" x-text="item.id"/>
                    <td class="px-4 py-2 text-center flex-1" x-text="item.name"//>
                    <td class="px-4 py-2 text-center flex-1" x-text="item.priority"/>
                    <td class="px-4 py-2 text-center flex-1" x-text="item.responsible"/>
                    <td class="px-4 py-2 text-center flex-1" x-text="item.subject"/>
                    <td class="px-4 py-2 text-center flex-1" x-text="item.status"/>
                    <td class="px-4 py-2 text-center flex-1">Fechar</td>
                </tr>
            </template>

        </x-html.list.table>

    </div>

@endsection

