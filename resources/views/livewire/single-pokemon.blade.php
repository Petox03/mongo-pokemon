<div class="grid justify-items-center">
    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow">
        <img class="rounded-t-lg p-3" src="{{ $pokemon->sprite }}" alt="" />
        <div class="p-5">
            <a href="#">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">
                    {{ $pokemon->name }}
                </h5>
            </a>
            <div class="mb-5">
                @foreach ($pokemon->types as $type)
                    <span
                        class="cursor-pointer bg-[#{{ $type->color }}] hover:bg-[#{{ $type->color }}]/60 transition duration-300 text-slate-200 text-md font-medium me-2 px-3 py-1 rounded-full">
                        {{ $type->name }}
                    </span>
                @endforeach
            </div>
            <div class="mb-5">
                <p class="text-center size-md">Datos</p>
                <hr class="h-px mt-1 mb-6 bg-gray-300 border-0">

                <section>
                    Habilidad{{ count($pokemon->abilities) != 1 ? 'es' : '' }}:
                    @foreach ($pokemon->abilities as $ability)
                        <span class="cursor-pointer bg-blue-100 text-blue-800 text-xs font-medium me-2 px-1.5 py-0.5 rounded" data-tooltip-target="tooltip-{{ $ability->name }}" data-tooltip-placement="top">{{ $ability->name }}</span>

                        <div id="tooltip-{{ $ability->name }}" role="tooltip"
                            class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                            {{ ucfirst($ability->effect) }}
                            <div class="tooltip-arrow" data-popper-arrow></div>
                        </div>
                    @endforeach
                </section>
            </div>
        </div>
    </div>
</div>
