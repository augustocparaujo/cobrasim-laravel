@extends('layouts.main')
@section('content')

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
            
              <form action="/cadastrar" method="POST">
                @csrf
                  <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-name">Nome</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="basic-default-name" placeholder="John Doe" name="nome" required>
                    </div>
                  </div>
                  <div class="row mb-3">
                      <label class="col-sm-2 col-form-label" for="basic-default-phone">Contato</label>
                      <div class="col-sm-10">
                          <input type="text" id="basic-default-phone" class="form-control mobile" placeholder="(99)99196-8433" aria-label="(99)99196-8433" aria-describedby="basic-default-phone" name="contato" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                      <label class="col-sm-2 col-form-label" for="basic-default-email">E-mail</label>
                      <div class="col-sm-10">
                        <div class="input-group input-group-merge">
                          <input type="email" id="basic-default-email" class="form-control" placeholder="john.doe" aria-label="john.doe" aria-describedby="basic-default-email2" name="email">
                          <span class="input-group-text" id="basic-default-email2">@example.com</span>
                        </div>
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