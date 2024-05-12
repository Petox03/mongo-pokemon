<div>
    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow">
        <img class="rounded-t-lg p-3" src="{{ $pokemon->sprite }}" alt="" />
        <div class="p-5">
            <a href="#">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">
                    {{ $pokemon->name }}
                </h5>
            </a>
            <p class="mb-5">
                @foreach ($types as $type)
                    @component('components.TypeBadge', ['color' => $type->color, 'size' => 'md',  'id' => $type->id, 'name' => $pokemon->name])
                        {{ $type->name }}
                    @endcomponent
                @endforeach
            </p>
            <a href="/pokedex/{{ $pokemon->id }}"
                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 transition duration-300">
                Aprender más
                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 5h12m0 0L9 1m4 4L9 9" />
                </svg>
            </a>
        </div>
    </div>
</div>