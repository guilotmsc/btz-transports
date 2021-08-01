<div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400">
    <div class="flex justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:p-0">
    
        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>

        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>

        <div class="align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full max-h-100" role="dialog" aria-modal="true" aria-labelledby="modal-headline">    
            <form>

                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div>
                        @if (session()->has('invalid-data'))
                            <div class="alert alert-success bg-red-700">
                                <p class="text-white">{{ session('invalid-data') }}</p>
                            </div>
                        @endif
                    </div>

                    <div class="mb-4">
                        <label for="date" class="block text-gray-700 text-sm font-bold mb-2">Data:</label>
                        <input type="date" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="date" wire:model="date">
                        @error('date') <span class="error">{{ $message }}</span> @enderror
                    </div>

                    <div class="mb-4">
                        <label for="driver" class="block text-gray-700 text-sm font-bold mb-2">Motorista Responsável:</label>
                        <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="driver_id" id="driver_id" wire:model="driver_id">
                            <option>Selecione um motorista</option>
                            @foreach ($drivers as $driver)
                                <option value="{{ $driver->id }}"> 
                                    {{ $driver->name }} 
                                </option>
                            @endforeach    
                        </select>
                        @error('driver_id') <span class="error">{{ $message }}</span> @enderror
                    </div>

                    <div class="mb-4">
                        <label for="car_id" class="block text-gray-700 text-sm font-bold mb-2">Carro:</label>
                        <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="car_id" id="driver_id" wire:model="car_id">
                            <option>Selecione um carro</option>
                            @foreach ($cars as $car)
                                <option value="{{ $car->id }}"> 
                                    {{ $car->manufacturer }} - {{ $car->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('car_id') <span class="error">{{ $message }}</span> @enderror
                    </div>

                    <div class="mb-4">
                        <label for="fuel_type" class="block text-gray-700 text-sm font-bold mb-2">Tipo de combustível:</label>
                        <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="fuel_type" id="fuel_type" wire:model="fuel_type">
                            <option>Selecione tipo de combustível</option>
                            @foreach($fuels as $fuel) {
                                <option value="{{ $fuel['name'] }}"> 
                                    {{ $fuel['name'] }}
                                </option>
                            @endforeach
                        </select>
                        @error('fuel_type') <span class="error">{{ $message }}</span> @enderror
                    </div>

                    <div class="mb-4">
                        <label for="quantity_supplied" class="block text-gray-700 text-sm font-bold mb-2">Quantidade abastecida:</label>
                        <input type="number" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="quantity_supplied" wire:model="quantity_supplied">
                        @error('quantity_supplied') <span class="error">{{ $message }}</span> @enderror
                    </div>

                    <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                        <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                            <button wire:click="store()" type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-gray-200 text-base leading-6 font-medium text-gray-700 shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">Salvar</button>
                        </span>

                        <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                            <button wire:click="closeModal()" type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-gray-200 text-base leading-6 font-medium text-gray-700 shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">Cancelar</button>
                        </span>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>