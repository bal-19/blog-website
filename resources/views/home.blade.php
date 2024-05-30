<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>
  <x-slot:header>{{ $header }}</x-slot:header>
  {{-- mengirim variabel diatas dari routes menuju ke component layout --}}

  <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <div class="px-4 py-6 sm:px-0">
      <div class="border-4 border-dashed border-gray-200 rounded-lg h-96"></div>
    </div>
  </div>
</x-layout>