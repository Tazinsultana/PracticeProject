@props([
    'type' => 'checkbox',
    'title' => 'title',
    'name' => 'name',
    'value' => '1',
    'checked' => null,
])

<div class="mb-3 form-check">
    <input class="form-check-input" name="{{ $name }}" type="{{ $type }}" value="{{ $value }}"
        id="{{ $name }}" @if (old($name, $checked)) checked @endif />
    <label class="form-check-label" for="{{ $name }}">{{ $title }}</label>
</div>
