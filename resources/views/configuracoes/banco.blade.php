@extends('layouts.main')
@section('content')
@section('configuracoes-banco', 'active')

<div class="row">
    <div class="col-12 mb-4 order-0">
        <div class="card">
            <div class="d-flex align-items-end row">
                <div class="col-12">
                    <div class="card-body">
                        <h5 class="card-title text-primary">Banco Mercado Pago</h5>
                    </div>
                </div>
                <div class="col-12 card-body">

                    <form action="{{ route('cadastrar.banco') }}" method="POST">
                        @csrf
                        <input type="hidden" name="banco" value="Mercado Pago" />
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-tokenprivado">Token
                                privado</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control @error('tokenrpivado') is-invalid @enderror"
                                    id="basic-default-tokenprivado" placeholder="" name="tokenprivado"
                                    value="{{ old('tokenprivado') }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-url">URL de notificação</label>
                            <div class="col-sm-10">
                                <input type="text" id="basic-default-url"
                                    class="form-control @error('url') is-invalid @enderror" placeholder="" aria-label=""
                                    aria-describedby="basic-default-url" name="url" value="{{ old('url') }}">
                            </div>
                        </div>

                        <div class="row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Cadastrar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection