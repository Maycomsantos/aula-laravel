@extends('layouts.app')

@section('content')
<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="page-header-title">
                    <h5 class="m-b-10">
                        <a href="{{ route('shop.index') }}">
                        </a>
                    </h5>
                </div>
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb bg-transparent">
                        <li class="breadcrumb-item active" aria-current="page">Produtos</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>


<div class="card">
    <div class="card-header">
        <i class="fa fa-list"></i>
            <h4>Listagem de Produtos</h4>
        <hr class="m-b-5">
    </div>

    <div class="card-body">
        <div class="row">

            <div class="col-md-6">
                 <form method="GET" action="{{ route('shop.index') }}">
                    <div class="input-group mb-3">
                        <input class="form-control" name="search" value="{{ request('search') ?? '' }}" placeholder="Pesquisar por nome ou descrição..."/>
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit" >
                                <i class="fa fa-search"></i> Buscar
                            </button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-md-6 text-right">
                    <a href="{{ route('shop.create') }}" class="btn btn-primary">
                        <i class="fa fa-plus"></i> Novo Pagamento
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
                            <th>Preço</th>
                            <th>Criado em:</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Ações</th>
                        </tr>
                    </thead>
                    <tbody>

                    @forelse ($shops as $shop)
                        <tr>
                            <td>{{ $shop->id }}</td>
                            <td class="white-space">{{ $shop->name }}</td>
                            <td>{{ $shop->description }}</td>
                            <td>{{ $shop->price }}</td>
                            <td>{{ $shop->created_at }}</td>
                            <td>{{ icon_status($shop->status) }}</td>
                            <td class="text-center">



                                <a class="btn btn-success" href="{{ route('shop.edit',$shop->id) }}">Editar
                                    <i class="fa fa-edit"></i>
                                </a>

                                <a class="btn btn-primary" href="{{ route('shop.show',$shop->id) }}">Ver
                                    <i class="fa fa-edit"></i>
                                </a>

                                <form action="{{ route('shop.destroy',$shop->id) }}" method="POST">


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
