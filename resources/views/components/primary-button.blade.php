<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2  border border-solid rounded-md font-semibold uppercase ']) }}>
    {{ $slot }}
</button>
