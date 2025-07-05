@props([
    'method' => 'POST',
    'action' => '',
    'class' => '',
    'hasFiles' => false,
])

<form method="{{ strtoupper($method) === 'GET' ? 'GET' : 'POST' }}"
      action="{{ $action }}"
      class="{{ $class }}"
      @if($hasFiles) enctype="multipart/form-data" @endif
>
    @csrf

    @if (!in_array(strtoupper($method), ['GET', 'POST']))
        @method($method)
    @endif

    {{ $slot }}
</form>