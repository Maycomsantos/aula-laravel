@extends('adminlte::page')


@section('content')

<div class="card">
    <div class="card-header">
        <i class="fa fa-info-circle"></i>
        <h5>Preencha os campos e clique em Salvar Pagamento</h5>
        <hr class="m-b-5">
    </div>

    <div class="card-body">
        @isset($shop)
            <form method="POST" enctype="multipart/form-data" action="{{ route('shop.update', $shop->id) }}">
                @method('PUT')
        @else
            <form method="POST" action="{{ route('shop.store') }}">
        @endif

            @csrf


            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Nome *</label>
                <div class="col-md-9">
                    <input type="text" id="name" name="name" class="form-control @error('name') @errror is-invalid @enderror" value="{{ old('name', $shop->name ?? null) }}" onkeyup="toUpper(this)" placeholder="Nome" autofocus>

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
                    <input type="text" id="description" name="description" class="form-control @error('description') @errror is-invalid @enderror" value="{{ old('name', $shop->description ?? null) }}" onkeyup="toUpper(this)" placeholder="Detalhes" autofocus>

                    @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Preço *</label>
                <div class="col-md-9">
                    <input type="text" id="price" name="price" class="form-control @error('price') @errror is-invalid @enderror" value="{{ old('price', $shop->price ?? null) }}" onkeyup="toUpper(this)" placeholder="Detalhes" autofocus>

                    @error('price')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="photo" class="col-sm-2 col-form-label">{{ __('Photo (optional)') }}</label>

            <div class="col-md-6">
                <input id="photo" type="file" value="{{ old('photo', $shop->photo ?? null) }} class="form-control" name="photo">
            </div>
        </div>

        <div class="logo">
            <img src="{{ $shop->photo ?? '' }}">
        </div>



            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Status</label>
                <div class="col-md-9">
                    <input type="hidden" name="status" value="0">
                    <input type="checkbox" name="status" value="1" {{ set_checked(old('status', $shop->status ?? 1), 1) }}>

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
                    <i class="fa fa-check"></i> Salvar Produto
                </button>
                <a class="btn btn-warning" href="{{ route('shop.index') }}">
                    <i class="fa fa-undo"></i> Voltar à listagem
                </a>
            </div>
        </div>
        </form>

        </div>
        </div>


@endsection
