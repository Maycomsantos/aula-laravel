@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <i class="fa fa-info-circle"></i>
        <h5>Preencha os campos e clique em Salvar Aula</h5>
        <hr class="m-b-5">
    </div>

    <div class="card-body">
        @isset($aula)
            <form method="POST" action="{{ route('aula.update', $aula->id) }}">
                @method('PUT')
        @else
            <form method="POST" action="{{ route('aula.store') }}">
        @endif

            @csrf



            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Nome *</label>
                <div class="col-md-9">
                    <input type="text" id="name" name="name" class="form-control @error('name') @errror is-invalid @enderror" value="{{ old('name', $aula->name ?? null) }}" onkeyup="toUpper(this)" placeholder="Nome" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Descrição *</label>
                <div class="col-md-9">
                    <input type="text" id="description" name="description" class="form-control @error('description') @errror is-invalid @enderror" value="{{ old('description', $aula->description ?? null) }}" onkeyup="toUpper(this)" placeholder="Número para esse descrição" autofocus>

                    @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>


            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Teste *</label>
                <div class="col-md-9">
                    <input type="text" id="teste" name="teste" class="form-control @error('teste') @errror is-invalid @enderror" value="{{ old('teste', $aula->teste ?? null) }}" onkeyup="toUpper(this)" placeholder="Número para esse descrição" autofocus>

                    @error('teste')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row mb-0">
            <div class="col-md-9 offset-md-2">
                <button type="submit" class="btn btn-success">
                    <i class="fa fa-check"></i> Salvar Aula
                </button>
                <a class="btn btn-warning" href="{{ route('aula.index') }}">
                    <i class="fa fa-undo"></i> Voltar à listagem
                </a>
            </div>
        </div>
        </form>

        </div>
        </div>
@endsection
