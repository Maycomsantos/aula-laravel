@extends('adminlte::page')

@section('content')
<div class="card">
    <div class="card-header">
        <i class="fa fa-info-circle"></i>
        <h5>Preencha os campos e clique em Salvar Pagamento</h5>
        <hr class="m-b-5">
    </div>

    <div class="card-body">
        @isset($payment)
            <form method="POST" action="{{ route('payment.update', $pay->id) }}">
                @method('PUT')
        @else
            <form method="POST" action="{{ route('payment.store') }}">
        @endif

            @csrf


            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Nome *</label>
                <div class="col-md-9">
                    <input type="text" id="name" name="name" class="form-control @error('name') @errror is-invalid @enderror" value="{{ old('name', $payment->name ?? null) }}" onkeyup="toUpper(this)" placeholder="Nome" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Documento *</label>
                <div class="col-md-9">
                    <input type="text" id="document" name="document" class="form-control @error('document') @errror is-invalid @enderror" value="{{ old('document', $payment->document ?? null) }}" onkeyup="toUpper(this)" placeholder="Número para esse documento" autofocus>

                    @error('document')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Rateios *</label>
                <div class="col-md-9">
                    <select id="rateios" name="rateios" class="form-control @error('rateios') @errror is-invalid @enderror" value="{{ old('rateios', $payment->rateios ?? null) }}">
                    <option selected>GERAR</option>
                    <option>...</option>
                    <option value="SIM">SIM</option>
                    <option value="NÃO">NÃO</option>
                </select>

                    @error('rateios')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Data de Emissão *</label>
                <div class="col-md-9">
                    <input type="date" id="emissao" name="emissao" class="form-control @error('emissao') @errror is-invalid @enderror" value="{{ old('emissao', $payment->emissao ?? null) }}" onkeyup="toUpper(this)" placeholder="Data de Emissão" autofocus>

                    @error('emissao')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Data de Vencimento *</label>
                <div class="col-md-9">
                    <input type="date" id="dtvencimento" name="dtvencimento" class="form-control @error('dtvencimento') @errror is-invalid @enderror" value="{{ old('dtvencimento', $payment->dtvencimento ?? null) }}" onkeyup="toUpper(this)" placeholder="Data de Emissão" autofocus>

                    @error('dtvencimento')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Custo *</label>
                <div class="col-md-9">
                    <input type="text" id="custo" name="custo" class="form-control @error('custo') @errror is-invalid @enderror" value="{{ old('custo', $payment->custo ?? null) }}" onkeyup="toUpper(this)" placeholder="Nome do Custo" autofocus>

                    @error('custo')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Valor *</label>
                <div class="col-md-9">
                    <input type="text" id="valor" name="valor" class="form-control @error('valor') @errror is-invalid @enderror" value="{{ old('valor', $payment->valor ?? null) }}" onkeyup="toUpper(this)" placeholder="Valor" autofocus>

                    @error('valor')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Status</label>
                <div class="col-md-9">
                    <input type="hidden" name="status" value="0">
                    <input type="checkbox" name="status" value="1" {{ set_checked(old('status', $payment->status ?? 1), 1) }}>

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
                <a class="btn btn-warning" href="{{ route('payment.index') }}">
                    <i class="fa fa-undo"></i> Voltar à listagem
                </a>
            </div>
        </div>
        </form>

        </div>
        </div>


@endsection
