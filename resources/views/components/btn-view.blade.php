@can($router . '.show')
    <a href="{{ route( $router . '.show', $model->id) }}" class="btn btn-sm btn-secondary" data-toggle="tooltip" data-placement="top" title="{{ $title ?? 'Visualizar' }}">
        <i class="fa fa-search"></i>
    </a>
@endcan
