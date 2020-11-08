<textarea
    id="{{ $id ?? $name }}"
    name="{{ $name }}"
    rows="5"
    class="form-control @error($name) @errror is-invalid @enderror"
    placeholder="{{ $placeholder ?? '' }}"
>{{ old($name, $model->{$name} ?? null) }}</textarea>
