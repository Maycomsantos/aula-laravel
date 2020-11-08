{{-- WIP --}}
@php($label ??= 'name')
@php($optionNull ??= 'Selecione...')
@php($required ??= '')

<select
    id="{{ $id ?? $name }}"
    name="{{ $name }}"
    label="{{ $name }}"
    class="form-control @error($name) @errror is-invalid @enderror select2"
    {{ $required }}
>
    <option value="">{{ $optionNull }}</option>
    @foreach ($options as $option)
        <option
            value="{{ $option->id }}"
            {{ set_selected($option->id, old($name, $model->{$name} ?? null)) }}
        >
        {{ $option->{$label} }}
        </option>
    @endforeach
</select>
