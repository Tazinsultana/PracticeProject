@props(['type' => 'text', 'title' => 'Title', 'name' => 'name', 'placeholder' => 'placeholder', 'value' => ''])
<div>
    <label for="{{ $name }}" class="form-label">{{ $title }}</label>
    <input type="{{ $type }}" class="form-control" id={{$name }}" name="{{ $name }}"
        placeholder="{{ $placeholder }}" value={{ old($name,$value)}} />
    @if ($errors->has($name))
        <div class="error">{{ $errors->first($name) }}</div>
    @endif
</div>
