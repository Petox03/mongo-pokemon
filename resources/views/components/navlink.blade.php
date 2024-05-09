<li>
    <a
    @if ($url != '/')
     href="/{{ $url }}"
    @else
        href="{{ $url }}"
    @endif
    class="block py-2 px-3 {{ request()->is($url) ? 'text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700' : 'text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700' }} md:p-0"
        aria-current="page">
    {{ $slot }}
    </a>
</li>