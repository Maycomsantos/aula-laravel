@extends('layouts.app')

@section('content')


@foreach($tarefas as $tarefas)
<li>{{$tarefas->nome}}</li>
<li>{{$tarefas->data}}</li>
<li>{{$tarefas->email}}</li>

@endforeach
     
@endsection
