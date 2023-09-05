@extends('layouts.main');
@section('content')

    <div class="row">
        <div class="col-12 mb-4 order-0">
        <div class="card">
            <div class="d-flex align-items-end row">
            <div class="col-12">
                <div class="card-body">
                <h5 class="card-title text-primary">Agendar notificação</h5>
                </div>
            </div>
            <div class="col-12 text-center">
                <div class="card-body pb-0 px-0 px-md-4">

                    <form>
                        <div class="mb-3">
                        <h3>Total de clientes 999</h3>
                        </div>
                    
                        <div class="mb-3">
                        <label class="form-label" >Data do disparo</label>
                        <input type="date" class="form-control" placeholder="">
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