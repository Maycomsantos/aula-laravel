@extends('adminlte::page')


@section('content')

<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="page-header-title">
                    <h5 class="m-b-10">
                        <a href="{{ route('aula.index') }}">
                        </a>
                    </h5>
                </div>
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb bg-transparent">
                        <li class="breadcrumb-item active" aria-current="page">Aula cadastrar</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <i class="fa fa-list"></i>
            <h4>Listagem de Aulas a Cadastrar</h4>
        <hr class="m-b-5">
    </div>



    <div class="card-body">
        <div class="row">

            <div class="col-md-6">
                 <form method="GET" action="{{ route('aula.index') }}">
                    <div class="input-group mb-3">
                        <input class="form-control" name="search" value="{{ request('search') ?? '' }}" placeholder="Pesquisar por nome ou descrição..."/>
                        <div class="input-group-append">
                            <button class="btn btn-info" type="submit" >
                                <i class="fa fa-search"></i> Buscar
                            </button>
                        </div>
                    </div>
                </form>
            </div>



                <div class="col-md-6 text-right">
                    <a href="{{ route('aula.create') }}" class="btn btn-info">
                        <i class="fa fa-plus"></i> Nova Aula
                    </a>
                </div>


            <hr>

            <div class="col-md-12 table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nome</th>
                            <th>Descrição</th>
                            <th>Teste</th>
                            <th class="text-center">Ações</th>
                        </tr>
                    </thead>
                    <tbody>

                    @forelse ($aula as $aula)
                        <tr>
                            <td>{{ $aula->id }}</td>
                            <td class="white-space">{{ $aula->name }}</td>
                            <td>{{ $aula->description }}</td>
                            <td>{{ $aula->teste }}</td>
                            <td class="text-center">



                                <a class="btn btn-success" href="{{ route('aula.edit',$aula->id) }}">Editar
                                    <i class="fa fa-edit"></i>
                                </a>

                                <form action="{{ route('aula.destroy',$aula->id) }}" method="POST">


                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger">Deletar</button>
                            </form>

                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8">
                                <div class="alert alert-danger text-center">
                                    <i class="fa fa-exclamation-triangle"></i>
                                    Oops... nenhum registro encontrado!
                                </div>
                            </td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>


            </div>

@endsection
