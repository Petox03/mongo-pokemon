<section>
    <div class="mb-4 flex justify-center">
        @foreach ($types as $type)
            @component('components.TypeBadge', ['color' => $type->color, 'size' => 'sm', 'id' => $type->id])
                {{ $type->name }}
            @endcomponent
        @endforeach
        @component('components.TypeBadge', ['color' => '169b7e', 'size' => 'sm', 'id' => ""])
                Todos
        @endcomponent
    </div>

    <section class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-5">

        @foreach ($pokemon as $item)
            <div class="flex justify-center" wire:key="{{ $item->id }}">
                @component('components.poke-card', ['pokemon' => $item, 'types' => $item->types])
                @endcomponent
            </div>
        @endforeach
    </section>
</section>
