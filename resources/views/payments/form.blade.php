@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header">
        <i class="fa fa-info-circle"></i>
        <h5>Preencha os campos e clique em Salvar Pagamento</h5>
        <hr class="m-b-5">
    </div>

    <div class="card-body">

        <x-form.model route="payment" :model="$payment ?? null" />

            @csrf

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Nome *</label>
                <div class="col-md-9">
                    <x-form.input
                     name="name"
                     class="form-control"
                     is-invalid onkeyup="toUpper(this)"
                     placeholder="Nome" autofocus 
                     
                    />

                <x-error field="name" />

                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Documento *</label>
                <div class="col-md-9">
                    <x-form.input name="document" class="form-control" onkeyup="toUpper(this)" placeholder="Número para esse documento" autofocus />

                    <x-error field="document" />
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Rateios *</label>
                <div class="col-md-9">
                    <x-form.select name="rateios" :options="get_yes_no()" help="Selecione....." class="form-control" is-invalid />
                    <x-error field="rateios" />
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Data de Emissão *</label>
                <div class="col-md-9">
                    <x-form.input type="date" name="emissao" class="form-control" placeholder="Data de Emissão" autofocus />

                    <x-error field="emissao" />
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Data de Vencimento *</label>
                <div class="col-md-9">
                
                    <x-form.input type="date" name="dtvencimento" class="form-control" placeholder="Data de Emissão" autofocus />

                   <x-error field="dtvencimento" />
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Custo *</label>
                <div class="col-md-9">
                    <x-form.input 
                        name="custo"
                        class="form-control" is-invalid
                        placeholder="Nome do Custo" 
                        autofocus
                        
                        />

                   <x-error field="custo" />
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Valor *</label>
                <div class="col-md-9">
                    <x-form.input
                        name="valor"
                        class="form-control" 
                        placeholder="Valor" 
                        autofocus 
                        />

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
                    <x-form.checkbox name="status" :model="$payment ?? null" value="" />
                    <x-error field="status" />
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
