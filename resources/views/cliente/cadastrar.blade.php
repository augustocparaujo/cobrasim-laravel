@extends('layouts.main')
@section('content')
@section('cliente-cadastrar', 'active')

<div class="row">
  <div class="col-12 mb-4 order-0">
    <div class="card">
      <div class="d-flex align-items-end row">
        <div class="col-12">
          <div class="card-body">
            <h5 class="card-title text-primary">Cadastro rápido</h5>
          </div>
        </div>
        <div class="col-12 card-body">

          <form action="{{ route('cadastrar.cliente') }}" method="POST">
            @csrf
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="basic-default-name">Nome</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="basic-default-name" placeholder="John Doe" name="nome"
                  value="{{ old('nome') }}">
                @error('nome')
                <small style="color:red">{{ $message }}</small>
                @enderror
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="basic-default-phone">Contato</label>
              <div class="col-sm-10">
                <input type="text" id="basic-default-phone" class="form-control mobile" placeholder="(99)99196-8433"
                  aria-label="(99)99196-8433" aria-describedby="basic-default-phone" name="contato"
                  value="{{ old('contato') }}">
                @error('contato')
                <small style="color:red">{{ $message }}</small>
                @enderror
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="basic-default-email">E-mail</label>
              <div class="col-sm-10">
                <div class="input-group input-group-merge">
                  <input type="email" id="basic-default-email" class="form-control" placeholder="john.doe@exemple.com"
                    aria-label="john.doe" aria-describedby="basic-default-email2" name="email"
                    value="{{ old('email') }}">
                </div>
                @error('email')
                <small style="color:red">{{ $message }}</small>
                @enderror
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