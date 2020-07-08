@extends('adminlte::page')



@section('content')

<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="page-header-title">
                    <h5 class="m-b-10">
                        <a href="{{ route('payment.index') }}">
                        </a>
                    </h5>
                </div>
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb bg-transparent">
                        <li class="breadcrumb-item active" aria-current="page">Pagamentos</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <i class="fa fa-list"></i>
        <h4>Listagem de Pagamentos</h4>
        <hr class="m-b-5">
    </div>

    <div class="card-body">
        <div class="row">

            <div class="col-md-6">
                <form method="GET" action="{{ route('payment.index') }}">
                    <div class="input-group mb-3">
                        <input class="form-control" name="search" value="{{ request('search') ?? '' }}"
                            placeholder="Pesquisar por nome ou descrição..." />
                        <div class="input-group-append">
                            <button class="btn btn-info" type="submit">
                                <i class="fa fa-search"></i> Buscar
                            </button>
                        </div>
                    </div>
                </form>
            </div>



            <div class="col-md-6 text-right">
                <a href="{{ route('payment.create') }}" class="btn btn-info">
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
                            <th>Documento</th>
                            <th>Emissão</th>
                            <th>Data de Vencimento</th>
                            <th>Custo</th>
                            <th>Valor</th>
                            <th>Rateios</th>
                            <th>Criado em:</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($payment as $pay)
                        <tr>
                            <td>{{ $pay->id }}</td>
                            <td class="white-space">{{ $pay->name }}</td>
                            <td>{{ $pay->document }}</td>
                            <td>{{ $pay->emissao }}</td>
                            <td>{{ $pay->dtvencimento }}</td>
                            <td>{{ $pay->custo }}</td>
                            <td>{{ money_db($pay->valor) }}</td>
                            <td>{{ $pay->rateios }}</td>
                            <td>{{ $pay->created_at }}</td>
                            <td>{{ icon_status($pay->status) }}</td>
                            <td class="text-center">



                                <a class="btn btn-success" href="{{ route('payment.edit',$pay->id) }}">Editar
                                    <i class="fa fa-edit"></i>
                                </a>

                                <form action="{{ route('payment.destroy',$pay->id) }}" method="POST">


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
