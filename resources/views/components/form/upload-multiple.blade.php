@php($id ??= $name)

<div class="file-loading">
    <input
        type="file"
        id="{{ $id }}"
        name="{{ $name }}[]"
        multiple
        @error($name) is-invalid @enderror
        data-browse-on-zone-click="true"
    >
</div>

@push('scripts')
<script>
    $('#{{ $id }}').fileinput({
        theme: 'fas',
        language: 'pt-BR',
        showUpload: false,
        showCancel: false,
        showClose: false,
        showCaption: false,
        removeClass: 'btn btn-danger',
        fileActionSettings: {
            showRemove: false,
        },
        allowedFileExtensions: [
            'jpg', 'jpeg', 'png', 'pdf',
        ],
        purifyHtml: true,
        overwriteInitial: true,
    })
</script>
@endpush
