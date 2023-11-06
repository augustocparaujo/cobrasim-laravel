@extends('layouts.main')
@section('content')
@section('configuracoes-banco', 'active')

<div class="row">
    <div class="col-12 mb-4 order-0">
        <div class="card">
            <div class="d-flex align-items-end row">
                <div class="col-12">
                    <div class="card-body">
                        <h5 class="card-title text-primary">Bancos</h5>
                    </div>
                </div>
                <div class="col-12 text-center">
                    <h4 style="text-align: center">Mercado Pago</h4>

                    <div class="col-lg-3 col-md-3 col-sm-12 mb-3">
                        <label for="defaultSelect" class="form-label">Situação</label>
                        <select id="defaultSelect" class="form-select" name="situacao">
                            <option value="ativo">ativo</option>
                            <option value="bloqueado">bloqueado</option>
                            <option value="cancelado">cancelado</option>
                        </select>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-12 mb-3">
                        <label for="defaultSelect" class="form-label">Forma cobrança</label>
                        <select id="defaultSelect" class="form-select" name="formacobranca">
                            <option value="boleto">boleto</option>
                            <option value="pix">pix</option>
                        </select>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-12 mb-3">
                        <label class="form-label" for="vencimento">Vencimento</label>
                        <input type="text" class="form-control" id="vencimento" placeholder="00" name="vencimento">
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-12 mb-3">
                        <label class="form-label" for="ativacao">Ativação</label>
                        <input type="date" class="form-control" id="ativacao" placeholder="00-00-00" name="ativacao">
                    </div>


                    <hr style="border: 1px solid E6E1E0" />

                    <h4 style="text-align: center">Gerencianet</h4>

                    <hr style="border: 1px solid E6E1E0" />

                    <h4 style="text-align: center">PagSeguro</h4>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection