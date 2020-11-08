@can($router . '.create')
    <a href="{{ route($router . '.create') }}" class="btn btn-primary">
        <i class="fa fa-plus"></i> {{ $label ?? 'Novo' }}
    </a>
@endcan
