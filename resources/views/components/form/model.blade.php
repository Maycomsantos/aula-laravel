@php($action = $model ? 'update' : 'store')
@php($id ??= $route . '-' . $action)

<form id="{{ $id }}" method="POST" action="{{ route($route . '.' . $action, $model) }}" {{ $attributes }}>
    @method($model ? 'PUT' : 'POST')
    @csrf
