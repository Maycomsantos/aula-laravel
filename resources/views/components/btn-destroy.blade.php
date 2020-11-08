@can($router . '.destroy')
    <a href="javascript:;" class="btn btn-sm btn-danger" onclick="confirmDelete({{ $model->id }})" data-toggle="tooltip" data-placement="top" title="{{ $title ?? 'Excluir' }}">
        <i class="fa fa-trash"></i>
    </a>

    <form id="btn-delete-{{ $model->id }}" action="{{ route($router . '.destroy', $model->id) }}" method="post" class="hidden">
        @method('DELETE')
        @csrf
    </form>
@endcan
