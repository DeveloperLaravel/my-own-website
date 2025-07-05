@props([
    'type' => 'text',
    'name',
    'label' => null,
    'value' => '',
    'required' => false,
    'autocomplete' => null,
    'icon' => null,
    'placeholder' => '',
])

<div class="form-field d-flex align-items-center mb-3">
    @if($icon)
        <span class="{{ $icon }} p-2"></span>
    @endif

     <input
        type="{{ $type }}"
        name="{{ $name }}"
        id="{{ $name }}"
        value="{{ old($name, $value) }}"
        placeholder="{{ $placeholder }}"
        {{ $required ? 'required' : '' }}
        autocomplete="{{ $autocomplete }}"
        class=" @error($name) is-invalid @enderror"/>
    
</div>