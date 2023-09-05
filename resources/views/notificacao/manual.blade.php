@extends('layouts.main');
@section('content')

<div class="row">
    <div class="col-12 mb-4 order-0">
      <div class="card">
        <div class="d-flex align-items-end row">
          <div class="col-12">
            <div class="card-body">
              <h5 class="card-title text-primary">Enviar notificação</h5>
            </div>
          </div>
          <div class="col-12 text-center">
            <div class="card-body pb-0 px-0 px-md-4">

                <form>
                    <div class="mb-3">
                      <label class="form-label" for="basic-default-fullname">Nome</label>
                      <input type="text" class="form-control" id="basic-default-fullname" placeholder="Nome1,Nome2,Nome3,...">
                    </div>                  
                   
                    <div class="mb-3">
                      <label class="form-label" for="basic-default-phone">Contato</label>
                      <input type="text" id="basic-default-phone" class="form-control phone-mask" placeholder="91991968433,91991968433,91991968433,...">
                    </div>
                    <div class="mb-3">
                      <label class="form-label" for="basic-default-message">Menssagem</label>
                      <textarea id="basic-default-message" class="form-control" placeholder="Olá, passando pra informar que estamos com promoção ate dia 30"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                  </form>

            </div>
          
          </div>
        </div>
      </div>
    </div>
  </div>


@endsection