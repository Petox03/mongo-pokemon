<span x-on:click="$wire.setType('{{ $id }}')" class="cursor-pointer bg-[#{{ $color }}] hover:bg-[#{{ $color }}]/60 transition duration-300 text-slate-200 text-{{ $size }} font-medium me-2 px-3 py-1 rounded-full">
    {{ $slot }}
</span>
