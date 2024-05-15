<div class="grid grid-cols-6 gap-4 justify-items-center">
    @foreach ($myMons as $mon)
        <div class="" wire:key='poke-{{ $mon->_id }}'>
            <img data-modal-target="{{ $mon->name }}-modal-{{ $mon->_id }}" data-modal-toggle="{{ $mon->name }}-modal-{{ $mon->_id }}" class="cursor-pointer w-12"
                src="{{ $mon->pokemon->sprite }}" alt="">
            <div id="{{ $mon->name }}-modal-{{ $mon->_id }}" tabindex="-1" aria-hidden="true"
                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full max-w-2xl max-h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow">
                        <!-- Modal header -->
                        <div
                            class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                            <h3 class="text-xl font-semibold text-gray-900">
                                {{ $mon->name }}
                            </h3>
                            <button type="button"
                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                                data-modal-hide="{{ $mon->name }}-modal-{{ $mon->_id }}">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <div class="p-4 md:p-5 space-y-4">
                            <p class="text-base leading-relaxed text-gray-500">
                                Nombre de la especie: {{ $mon->pokemon->name }}
                            </p>
                            <p data-tooltip-target="tooltip-{{ $mon->pokemon->name }}-{{ $mon->name }}-{{ $mon->ability->name }}" data-tooltip-style="light" class="text-base leading-relaxed text-gray-500">
                                Abilidad: {{ $mon->ability->name }}
                            </p>
                            <div id="tooltip-{{ $mon->pokemon->name }}-{{ $mon->name }}-{{ $mon->ability->name }}" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 tooltip">
                                {{ $mon->ability->effect }}
                                <div class="tooltip-arrow" data-popper-arrow></div>
                            </div>
                        </div>
                        <!-- Modal footer -->
                        <div
                            class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b">
                            <button data-modal-hide="{{ $mon->name }}-modal-{{ $mon->_id }}" type="button"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                Aceptar
                            </button>
                            <button wire:click='delete("{{ $mon->_id }}")' data-modal-hide="{{ $mon->name }}-modal-{{ $mon->_id }}" type="button"
                                class="py-2.5 px-5 ms-3 text-sm font-medium text-white focus:outline-none bg-red-700 rounded-lg border border-red-200 hover:bg-red-800 focus:z-10 focus:ring-4 focus:ring-red-100">
                            Liberar Pokémon
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
