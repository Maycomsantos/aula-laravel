@php($id ??= $name)
@php($type ??= 'image')
@php($name_url ??= $name . '_url')

<input type="hidden" name="old_{{ $name }}" value="{{ $model->$name ?? null }}">
<div class="file-loading">
    <input
        type="file"
        id="{{ $id }}"
        name="{{ $name }}"
        @error($name) is-invalid @enderror
        data-browse-on-zone-click="true"
        value="{{ old($name) }}"
    >
</div>

@push('scripts')
<script type="text/javascript">
    $('#{{ $id }}').fileinput({
        theme: 'fas',
        language: 'pt-BR',
        showUpload: false,
        showCancel: false,
        showClose: false,
        showCaption: false,
        removeClass: 'btn btn-danger',
        title: 'teste',
        @if ($type == 'image')
            allowedFileExtensions: [
                'jpg', 'jpeg', 'png',
            ],
            defaultPreviewContent: [
                "<img src='{{ $model->{$name_url} ?? '' }}' class='file-preview-image' width='180'>",
            ],
        @else
            allowedFileExtensions: [
                'jpg', 'jpeg', 'png', 'pdf',
            ],
            @isset($model)
                defaultPreviewContent: [
                    `<div class="embed-responsive embed-responsive-16by9">
                        <embed src="{{ route('documents.serve', $model) }}#toolbar=0" class="embed-responsive-item">
                    </div>`,
                ],
            @endisset
        @endif
        fileActionSettings: {
            showRemove: false,
        },
        overwriteInitial: true,
        purifyHtml: true,
    })
</script>
@endpush
