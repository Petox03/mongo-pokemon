<div class="grid grid-cols-12 gap-4">
    @foreach ($pokemon as $item)
        <div wire:key='pokemon-{{ $item->_id }}'>
            @for ($i = 0; $i < rand(2, 12); $i++)
                <div class="col-span-1"></div>
            @endfor

            <div>
                <img wire:key='pokemon-{{ $item->_id }}' data-modal-target="{{ $item->name }}-modal" data-modal-toggle="{{ $item->name }}-modal"
                    class="cursor-pointer w-44" src="{{ $item->sprite }}" alt="">
                <div wire:key='pokemon-{{ $item->_id }}' id="{{ $item->name }}-modal" tabindex="-1" aria-hidden="true"
                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative p-4 w-full max-w-2xl max-h-full">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg shadow">
                            <!-- Modal header -->
                            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                                <button type="button"
                                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                                    data-modal-hide="{{ $item->name }}-modal">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                            </div>
                            <!-- Modal body -->
                            <div class="p-4 md:p-5 space-y-4 text-xl">
                                Oh, un {{ $item->name }} salvaje ha aparecido
                            </div>
                            <!-- Modal footer -->
                            <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b">
                                <button wire:click='catch("{{ $item->_id }}")'
                                    data-modal-hide="{{ $item->name }}-modal" type="button"
                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                    Atrapar
                                </button>
                                <button data-modal-hide="{{ $item->name }}-modal" type="button"
                                    class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100">Decline</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            @for ($i = 0; $i < rand(2, 5); $i++)
                <div class="col-span-1"></div>
            @endfor
        </div>
    @endforeach
</div>
