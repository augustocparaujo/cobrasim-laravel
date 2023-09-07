@extends('layouts.main')
@section('content')

    <div class="row">
        <div class="col-12 mb-4 order-0">
        <div class="card">
            <div class="d-flex align-items-end row">
            <div class="col-12">
                <div class="card-body">
                <h5 class="card-title text-primary">Lista cliente</h5>
                </div>
            </div>
            <div class="col-12">

                <div class="card-body">
                    <div class="table-responsive text-nowrap">
                        <table class="table table-bordered">
                            <thead>
                            <tr class="text-center">
                                <th>Nome</th>
                                <th>CPF/CNPJ</th>
                                <th>Contato</th>
                                <th>Status</th>
                                <th>Ação</th>
                            </tr>
                            </thead>
                            <tbody>

                                @if(!empty($busca))
                                @foreach($busca as $cliente)
                                <tr>
                                    <td>
                                        <i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $cliente->nome }}</strong>
                                    </td>
                                    <td>{{ $cliente->cpf }}</td>
                                    <td class="mobile">{{ $cliente->contato }}</td>
                                    <td><span class="badge bg-label-success me-1">{{ $cliente->situacao }}</span></td>
                                    <td>
                                        <a href="/cliente/exibir" title="editar dados"><i class="bx bx-edit-alt me-1"></i></a>
                                        <a href="" title="excluir cliente"><i class="bx bx-trash me-1 text-danger"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                                @else
                                    <tr>
                                        <td colspan="5">Sem registro</td>
                                    </tr>
                                @endif
                            
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