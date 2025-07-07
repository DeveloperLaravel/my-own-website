<x-ul>
  @foreach($items as $item)
    <li>
      <i class="bi bi-check-circle"></i>
      <x-link href="{{ $item['link'] ?? '#' }}">
        {{ $item['text'] }}
      </x-link>
    </li>
  @endforeach
</x-ul>