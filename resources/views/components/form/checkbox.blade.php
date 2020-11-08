<div class="switchToggle">
    <input type="hidden" name="{{ $name }}" value="0">
    <input
        type="checkbox"
        id="{{ $id ?? $name  }}"
        name="{{ $name }}"
        value="1"
        {{ set_checked(old($name, $model->{$name} ?? 1), 1) }}
    >
    <label for="{{ $id ?? $name  }}">Toggle</label>
</div>

