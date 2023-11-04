@extends('layouts.main')
@section('content')
@section('cliente-listar', 'active')

<div class="row">
    <div class="col-12 mb-4 order-0">
        <div class="card">
            <div class="d-flex align-items-end row">
                <div class="col-12">
                    <div class="card-body">
                        <h5 class="card-title text-primary">Lista cliente</h5>
                        <p>Buscando por: {{ $search }}</p>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card-body">
                        <div class="table-responsive text-nowrap">
                            <table class="table table-bordered">
                                <thead class="table-dark">
                                    <tr class="text-center">
                                        <th>Nome</th>
                                        <th>CPF/CNPJ</th>
                                        <th>Vencimento</th>
                                        <th>Contato</th>
                                        <th>Status</th>
                                        <th>Ação</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($cliente as $clienteinfo)
                                    <tr>
                                        <td>
                                            <i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{
                                                $clienteinfo->nome }}</strong>
                                        </td>
                                        <td class="text-center">{{ $clienteinfo->cpf_cnpj }}</td>
                                        <td class="text-center">{{ $clienteinfo->vencimento }}</td>
                                        <td class="mobile text-center">{{ $clienteinfo->contato }}</td>
                                        <td class="text-center"><span class="badge bg-label-success me-1">{{
                                                $clienteinfo->situacao }}</span></td>
                                        <td class="text-center">
                                            <a href="/cliente/exibir/{{ $clienteinfo->id }}" data-bs-toggle="tooltip"
                                                data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true"
                                                title="" data-bs-original-title="<span>Editar cliente</span>"><i
                                                    class="bx bx-edit-alt me-1"></i></a>

                                            <a href="/cliente/{{ $clienteinfo->id }}" data-bs-toggle="tooltip"
                                                data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true"
                                                title="" data-bs-original-title="<span>Excluir cliente</span>">
                                                <i class="bx bx-trash me-1 text-danger"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                    @if(count($cliente) == 0 && $search)
                                    <tr>
                                        <td colspan="5">Não foi possível encontrato {{ $search }} - <a
                                                href="/cliente/listar">Ver todos</a></td>
                                    </tr>
                                    @elseif(count($cliente) == 0)
                                    <tr>
                                        <td colspan="5">Não há cliente cadastrado</td>
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