@extends('adminlte::page')

@section('content')
<div class="card">
    <div class="card-header">
        <i class="fa fa-info-circle"></i>
        <h5>Preencha os campos e clique em Salvar Pagamento</h5>
        <hr class="m-b-5">
    </div>

    <div class="card-body">
        @isset($tasks)
            <form method="POST" action="{{ route('tasks.update', $pay->id) }}">
                @method('PUT')
        @else
            <form method="POST" action="{{ route('tasks.store') }}">
        @endif

            @csrf


            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Nome *</label>
                <div class="col-md-9">
                    <input type="text" id="name" name="name" class="form-control @error('name') @errror is-invalid @enderror" value="{{ old('name', $tasks->name ?? null) }}" onkeyup="toUpper(this)" placeholder="Nome" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Detalhes *</label>
                <div class="col-md-9">
                    <input type="text" id="details" name="details" class="form-control @error('name') @errror is-invalid @enderror" value="{{ old('name', $tasks->details ?? null) }}" onkeyup="toUpper(this)" placeholder="Detalhes" autofocus>

                    @error('details')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>


                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Usuário</label>
                                <div class="col-md-5">
                                <select name="user_id" class="form-control required @error('user_id') is-invalid @enderror select2">
                                    <option value="">Selecione o responsável</option>
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id }}" {{ set_selected($user->id, old('user_id')) }}>
                                            {{ $user->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>




            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Status</label>
                <div class="col-md-9">
                    <input type="hidden" name="status" value="0">
                    <input type="checkbox" name="status" value="1" {{ set_checked(old('status', $tasks->status ?? 1), 1) }}>

                    @error('status')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <hr>

        <div class="form-group row mb-0">
            <div class="col-md-9 offset-md-2">
                <button type="submit" class="btn btn-success">
                    <i class="fa fa-check"></i> Salvar Pagamento
                </button>
                <a class="btn btn-warning" href="{{ route('tasks.index') }}">
                    <i class="fa fa-undo"></i> Voltar à listagem
                </a>
            </div>
        </div>
        </form>

        </div>
        </div>


@endsection
