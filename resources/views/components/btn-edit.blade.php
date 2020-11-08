@can($router . '.edit')
    <a href="{{ route( $router . '.edit', $model->id) }}" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="{{ $title ?? 'Editar' }}">
        <i class="fa fa-edit"></i>
    </a>
@endcan

