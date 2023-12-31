@extends('layouts.main')
@section('content')
@section('cliente-listar', 'active')

<div class="row">
    <div class="col-12 mb-4 order-0">
        <div class="card">
            <div class="d-flex align-items-end row">
                <div class="col-12">
                    <div class="card-body">
                        <h5 class="card-title text-primary">Dados cliente</h5>
                    </div>
                </div>
                <div class="col-12 card-body">
                    <form action="/cliente/update/{{ $cliente->id }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-12 mb-3">
                                <label for="defaultSelect" class="form-label">Situação</label>
                                <select id="defaultSelect" class="form-select" name="situacao">
                                    <option value="{{ $cliente->situacao }}">{{ $cliente->situacao }}</option>
                                    <option value="ativo">ativo</option>
                                    <option value="bloqueado">bloqueado</option>
                                    <option value="cancelado">cancelado</option>
                                </select>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-12 mb-3">
                                <label for="defaultSelect" class="form-label">Forma cobrança</label>
                                <select id="defaultSelect" class="form-select" name="formacobranca">
                                    <option>{{ $cliente->formacobranca }}</option>
                                    <option value="boleto">boleto</option>
                                    <option value="pix">pix</option>
                                </select>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-12 mb-3">
                                <label class="form-label" for="vencimento">Vencimento</label>
                                <input type="text" class="form-control" id="vencimento" placeholder="00"
                                    name="vencimento" value="{{ $cliente->vencimento }}">
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-12 mb-3">
                                <label class="form-label" for="ativacao">Ativação</label>
                                <input type="date" class="form-control" id="ativacao" placeholder="00-00-00"
                                    name="ativacao" value="{{ $cliente->ativacao }}">
                            </div>

                        </div>

                        <hr style="border: 1px solid E6E1E0" />

                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                                <label class="form-label" for="basic-default-fullname">Nome</label>
                                <input type="text" class="form-control" id="basic-default-fullname"
                                    placeholder="John Doe" name="nome" value="{{ $cliente->nome }}">
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                                <label class="form-label" for="basic-default-cpf">CPF/CNPJ</label>
                                <input type="text" class="form-control" id="basic-default-cpf" placeholder="CPF/CNPJ"
                                    name="cpf_cnpj" value="{{ $cliente->cpf_cnpj }}">
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                                <label class="form-label" for="basic-default-nascimento">Nascimento</label>
                                <input type="date" class="form-control" id="basic-default-nascimento"
                                    placeholder="00-00-0000" name="nascimento" value="{{ $cliente->nascimento }}">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                                <label class="form-label" for="basic-default-phone">Contato</label>
                                <input type="text" id="basic-default-phone" class="form-control mobile"
                                    placeholder="(91) 99999-9999" name="contato" value="{{ $cliente->contato }}">
                            </div>

                            <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                                <label class="form-label" for="basic-default-phone2">Contato</label>
                                <input type="text" id="basic-default-phone2" class="form-control mobile"
                                    placeholder="(91) 99999-9999" name="contato2" value="{{ $cliente->contato2 }}">
                            </div>

                            <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                                <label class="form-label" for="basic-default-email">Email</label>
                                <div class="input-group input-group-merge">
                                    <input type="email" id="basic-default-email" class="form-control"
                                        placeholder="john.doe@exemple.com" name="email" value="{{ $cliente->email }}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-2 col-md-2 col-sm-12 mb-3">
                                <label class="form-label" for="basic-default-cep">CEP</label>
                                <input type="text" id="basic-default-cep" class="form-control cepBusca"
                                    placeholder="68000-000" name="cep" value="{{ $cliente->cep }}">
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                <label class="form-label" for="basic-default-endereco">Rua/Alameda/Avenida/etc</label>
                                <input type="text" id="basic-default-endereco" class="form-control enderecoBusca"
                                    placeholder="Rua/Alameda/Avenida/etc" name="rua" value="{{ $cliente->rua }}">
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-12 mb-3">
                                <label class="form-label" for="basic-default-bairro">Bairro</label>
                                <div class="input-group input-group-merge">
                                    <input type="text" id="basic-default-bairro" class="form-control bairroBusca"
                                        placeholder="Bairro" name="bairro" value="{{ $cliente->bairro }}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-12 mb-3">
                                <label class="form-label" for="basic-default-municipio">Município</label>
                                <input type="text" id="basic-default-municipio" class="form-control cidadeBusca"
                                    placeholder="Município" name="municipio" value="{{ $cliente->municipio }}">
                            </div>

                            <div class="col-lg-2 col-md-2 col-sm-12 mb-3">
                                <label class="form-label" for="basic-default-uf">UF</label>
                                <input type="text" id="basic-default-uf" class="form-control ufBusca" placeholder="UF"
                                    name="estado" min="2" max="2" value="{{ $cliente->estado }}">
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                <label class="form-label" for="basic-default-complemento">Complemento</label>
                                <div class="input-group input-group-merge">
                                    <input type="text" id="basic-default-complemento" class="form-control"
                                        placeholder="Complemento" name="complemento"
                                        value="{{ $cliente->complemento }}">
                                </div>
                            </div>
                        </div>


                        <div class="mb-3">
                            <label class="form-label" for="basic-default-message">Observação</label>
                            <textarea id="basic-default-message" class="form-control"
                                placeholder="Digite aqui alguma observação ou anotação"
                                name="obs">{{ $cliente->obs }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </form>

                    <hr style="border: 1px solid E6E1E0" />

                    <h4 style="text-align: center">Financeiro</h4>
                    <div class="card-body">
                        <div class="table-responsive text-nowrap">
                            <table class="table table-bordered">
                                <thead class="table-primary">
                                    <tr class="text-center">
                                        <th>Título</th>
                                        <th>PAR</th>
                                        <th>Valor</th>
                                        <th>VENC</th>
                                        <th>Valor/Pag</th>
                                        <th>Data/Pag</th>
                                        <th>Situação</th>
                                        <th>Ação</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>N</td>
                                        <td>Parcela</td>
                                        <td>Valor</td>
                                        <td>Vencimento</td>
                                        <td>Valor/Pag</td>
                                        <td>Data/Pag</td>
                                        <td>Situação</td>
                                        <td>Ação</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection