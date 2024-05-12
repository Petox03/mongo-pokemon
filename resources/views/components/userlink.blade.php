<li>
    <a href="{{ $url }}"
        class="block px-4 py-2 text-sm {{ request()->is($url) ? 'text-blue-700 hover:bg-blue-100' : 'text-gray-700 hover:bg-gray-100' }} transition duration-300">
        {{ $slot }}
    </a>
</li>