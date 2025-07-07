<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn mt-3 w-100']) }}>
    {{ $slot }}
</button>