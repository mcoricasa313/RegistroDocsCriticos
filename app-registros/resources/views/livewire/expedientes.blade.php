<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          Mesa de Partes - Registro de Expedientes
    </h2>
</x-slot>
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-4 lg:px-8">
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
            <button wire:click='create' class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-4 rounded my-3">Nuevo Registro</button>




            @if($isOpen)
                @include('livewire.create')
            @endif


            <table class="min-w-full divide-y divide-gray-200" style="width:100%;font-size:11px !important">
                <thead>
                    <tr class="bg-gray-100">
                        <th scope="col" class="px-4 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            NO.
                        </th>
                        <th scope="col" class="px-4 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">EXPEDIENTE</th>
                        <th scope="col" class="px-4 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ASUNTO</th>
                        <th scope="col" class="px-4 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">NÚMERO DE DOCUMENTO</th>
                        <th scope="col" class="px-4 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">FOLIOS</th>
                        <th scope="col" class="px-4 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">REMITENTE</th>
                        <th scope="col" class="px-4 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">PRIORIDAD</th>
                        <th scope="col" class="px-4 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">UNIDAD ORGÁNICA</th>
                        <th scope="col" class="px-4 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ESTADO</th>
                        <th scope="col" class="px-4 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">OBSERVACIÓN</th>
                        <th scope="col" class="px-4 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ACCIÓN</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach($expedientes as $expediente)
                    <tr>
                        <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500">{{ $expediente->id }}</td>
                        <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500">{{ $expediente->numero_expediente }}</td>
                        <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500">{{ $expediente->asunto }}</td>
                        <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500">{{ $expediente->numero_documento }}</td>
                        <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500">{{ $expediente->folios }}</td>
                        <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500">{{ $expediente->remitente }}</td>
                        <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500">{{ $expediente->prioridad }}</td>
                        <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500">{{ $expediente->uo_destino }}</td>
                        <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500">
                        <?php if($expediente->estado==1){ ?>
                        
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                Activo
                            </span>
                        
                        <?php }else{ ?>
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                Desactivado
                            </span>
                        <?php } ?>

                        </td>
                        <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500">{{ $expediente->observacion }}</td>
                        <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500">
                        <button wire:click="edit({{ $expediente->id }})" class="text-blue-600 hover:text-blue-900">Editar</button>
                            <button wire:click="delete({{ $expediente->id }})" class="text-red-600 hover:text-red-900">Eliminar</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
