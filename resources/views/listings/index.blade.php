<x-layout>

@include('partials._hero')
@include('partials._search')

<x-card class="p-4">

  @foreach ($listings as $item)
  <x-listing-card :listing="$item" />
  @endforeach

  </x-card>
</x-layout>

