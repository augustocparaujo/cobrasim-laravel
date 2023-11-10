@extends('layouts.main')
@section('content')
@section('configuracoes-banco', 'active')

<div class="row">
    <div class="col-12 mb-4 order-0">
        <div class="card">
            {{-- tranformar em componente, pois será usado varias vezes de acorod com banco --}}
            <div class="d-flex align-items-end row">
                <div class="col-12">
                    <div class="card-body">
                        <h5 class="card-title text-primary">Banco Mercado Pago</h5>
                    </div>
                </div>
                <div class="col-12 card-body">

                    <form action="
                    @if($banco)
                    {{ route('cadastrar.banco.update', $banco->id) }}
                    @else
                    {{ route('cadastrar.banco') }}
                    @endif
                    " method="POST">
                        @csrf
                        @if($banco) @method('put') @endif
                        <input type="hidden" name="id" @if($banco) value="{{$banco->id}}" @endif />
                        <input type="hidden" name="banco" value="Mercado Pago" />
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-tokenprivado">Token
                                privado</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control @error('tokenpivado') is-invalid @enderror"
                                    id="basic-default-tokenprivado" placeholder="" name="tokenprivado"
                                    value="@if($banco){{$banco->tokenprivado}}@else{{old('tokenprivado')}}@endif" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-url">URL de notificação</label>
                            <div class="col-sm-10">
                                <input type="text" id="basic-default-url"
                                    class="form-control @error('url') is-invalid @enderror" placeholder="" aria-label=""
                                    aria-describedby="basic-default-url" name="url"
                                    value="https://cobrasim.com.br/acesso/notificacao-mercadopago.php">
                            </div>
                        </div>

                        <div class="row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">@if ($banco) Atualizar @else Cadastrar
                                    @endif</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            {{-- tranformar em componente, pois será usado varias vezes de acorod com banco --}}
        </div>
    </div>
</div>

@endsection