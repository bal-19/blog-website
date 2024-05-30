@props(['active' => false]) {{-- untuk mengeluarkan attributes --}}

<a {{ $attributes }}
    class="{{ $active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium transition-all duration-300"
    aria-current="{{ $active ? 'page' : false }}">{{ $slot }}</a>
{{-- $attributes untuk memanggil atribut apapun yang diketik pada tag component --}}