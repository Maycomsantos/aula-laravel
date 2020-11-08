@php($id ??= 'modal-dialog')
@php($size ??= 'md')

<div id="{{ $id }}" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-{{ $size }}" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">
                    {{ $title ?? 'Sistema admpiaui'}}
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                {{ $slot }}
            </div>

            <div class="modal-footer">
                {{ $footer ?? '' }}
                <button type="button" class="btn btn-warning" data-dismiss="modal">
                    Fechar
                </button>
            </div>
        </div>
    </div>
</div>

<script>
    $('#modal-dialog').modal('show')
</script>

@stack('scripts')
