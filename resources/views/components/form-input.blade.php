@props([
    'name' => '',
    'label' => '',
    'type' => 'text',
    'value' => '',
    'required' => false,
])

<div class="form-group">
    @if ($label)
        <label for="{{ $name }}">
            {{ $label }}
            @if ($required)
                <span class="req">*</span>
            @endif
        </label>
    @endif

    <input
        type="{{ $type }}"
        id="{{ $name }}"
        name="{{ $name }}"
        value="{{ old($name, $value) }}"
        @if ($required) required @endif
        {{ $attributes->merge(['class' => 'form-control' . ($errors->has($name) ? ' is-invalid' : '')]) }}
    >

    @error($name)
        <p class="form-error">{{ $message }}</p>
    @enderror
</div>