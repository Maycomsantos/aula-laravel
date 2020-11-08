<select
    id="{{ $id ?? $name }}"
    name="{{ $name }}"
    class="form-control @error($name) is-invalid @enderror select2"
>
    @isset($help)
        <option value="">{{ $help }}</option>
    @endisset

    @foreach ($options as $key => $value)
        <option
            value="{{ $key }}"
            {{ set_selected($key, old($name, $model->$name ?? null)) }}
        >
            {{ $value }}
        </option>
    @endforeach

</select>
