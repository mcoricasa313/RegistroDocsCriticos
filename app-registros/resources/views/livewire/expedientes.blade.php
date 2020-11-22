<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          Mesa de Partes - Registro de Expedientes
    </h2>
</x-slot>
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
            @if (session()->has('message'))
                <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3" role="alert">
                  <div class="flex">
                    <div>
                      <p class="text-sm">{{ session('message') }}</p>
                    </div>
                  </div>
                </div>
            @endif
            <button wire:click='create' class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded my-3">Nuevo Registro</button>

            <button wire:click="$emit('showModal', 'projects.create', '')">New Project</button>


            @if($isOpen)
                @include('livewire.create')
            @endif
            <table class="table-fixed w-full">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="px-4 py-2 w-20">No.</th>
                        <th class="px-4 py-2">numero_expediente</th>
                        <th class="px-4 py-2">asunto</th>
                        <th class="px-4 py-2">numero_documento</th>
                        <th class="px-4 py-2">folios</th>
                        <th class="px-4 py-2">remitente</th>
                        <th class="px-4 py-2">prioridad</th>
                        <th class="px-4 py-2">uo_destino</th>
                        <th class="px-4 py-2">estado</th>
                        <th class="px-4 py-2">observacion</th>
                        <th class="px-4 py-2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($expedientes as $expediente)
                    <tr>
                        <td class="border px-4 py-2">{{ $expediente->id }}</td>
                        <td class="border px-4 py-2">{{ $expediente->numero_expediente }}</td>
                        <td class="border px-4 py-2">{{ $expediente->asunto }}</td>
                        <td class="border px-4 py-2">{{ $expediente->numero_documento }}</td>
                        <td class="border px-4 py-2">{{ $expediente->folios }}</td>
                        <td class="border px-4 py-2">{{ $expediente->remitente }}</td>
                        <td class="border px-4 py-2">{{ $expediente->prioridad }}</td>
                        <td class="border px-4 py-2">{{ $expediente->uo_destino }}</td>
                        <td class="border px-4 py-2">{{ $expediente->estado }}</td>
                        <td class="border px-4 py-2">{{ $expediente->observacion }}</td>
                        <td class="border px-4 py-2">
                        <button wire:click="edit({{ $expediente->id }})" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</button>
                            <button wire:click="delete({{ $expediente->id }})" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
