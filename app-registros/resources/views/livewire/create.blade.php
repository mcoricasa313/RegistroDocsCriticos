<div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400" id="modal-1" >
  <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
      
    <div class="fixed inset-0 transition-opacity">
      <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
    </div>
  
    <!-- This element is to trick the browser into centering the modal contents. -->
    <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>​
  
    <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
      <form>
      <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
        <div class="">
              <div class="mb-6">
                  <label for="id" class="block text-gray-700 text-sm font-bold mb-2">Id:</label>
                  <input type="number" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="id" placeholder="" wire:model="idexpediente" readonly>
                  @error('idexpediente') <span class="text-red-500">{{ $message }}</span>@enderror
              </div>
              <div class="mb-6">
                  <label for="numero_expediente" class="block text-gray-700 text-sm font-bold mb-2">Número de Expediente:</label>
                  <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="numero_expediente" placeholder="Número de Expediente" wire:model="numero_expediente">
                  @error('numero_expediente') <span class="text-red-500">{{ $message }}</span>@enderror
              </div>
              <div class="mb-6">
                  <label for="exampleFormControlInput1" class="block text-gray-700 text-sm font-bold mb-2">Asunto:</label>
                  <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput1" placeholder="Asunto" wire:model="asunto">
                  @error('asunto') <span class="text-red-500">{{ $message }}</span>@enderror
              </div>
              <div class="mb-6">
                  <label for="exampleFormControlInput1" class="block text-gray-700 text-sm font-bold mb-2">Número de Documento:</label>
                  <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput1" placeholder="Número de Documento" wire:model="numero_documento">
                  @error('numero_documento') <span class="text-red-500">{{ $message }}</span>@enderror
              </div>
              <div class="mb-6">
                  <label for="exampleFormControlInput1" class="block text-gray-700 text-sm font-bold mb-2">Folios:</label>
                  <input type="number" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput1" placeholder="Folios" wire:model="folios">
                  @error('folios') <span class="text-red-500">{{ $message }}</span>@enderror
              </div>
              <div class="mb-6">
                  <label for="exampleFormControlInput1" class="block text-gray-700 text-sm font-bold mb-2">Remitente:</label>
                  <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput1" placeholder="Remitente" wire:model="remitente">
                  @error('remitente') <span class="text-red-500">{{ $message }}</span>@enderror
              </div>
              <div class="mb-4">
                  <label for="exampleFormControlInput2" class="block text-gray-700 text-sm font-bold mb-2">Observación:</label>
                  <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput2" wire:model="observacion" placeholder="Observación"></textarea>
                  @error('observacion') <span class="text-red-500">{{ $message }}</span>@enderror
              </div>
              <div class="mb-6">
                  <label for="exampleFormControlInput1" class="block text-gray-700 text-sm font-bold mb-2">Estado:</label>
                  <select name="estado" wire:model="estado" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    <option value="1">Activo</option>
                    <option value="0">Desactivado</option>
                  </select>
                  @error('estado') <span class="text-red-500">{{ $message }}</span>@enderror
              </div>

        </div>
      </div>
  
      <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
        <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
          <button wire:click.prevent="store()" type="button" class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-green-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-green-500 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5">
            Grabar
          </button>
        </span>
        <span class="mt-3 flex w-full rounded-md shadow-sm sm:mt-0 sm:w-auto">
            
          <button wire:click="closeModal()" type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-white text-base leading-6 font-medium text-gray-700 shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">
            Cancelar
          </button>
        </span>
        </form>
      </div>
        
    </div>
  </div>
</div>