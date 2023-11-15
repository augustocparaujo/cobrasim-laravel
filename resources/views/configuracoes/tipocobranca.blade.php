@extends('layouts.main')
@section('content')
@section('configuracoes-tipocobranca', 'active')

<div class="row">
    <div class="col-12 mb-4 order-0">
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="card-title m-0 me-2">Tipos de cobrança</h5>
                <div class="dropdown">
                    <button class="btn p-0" type="button" id="transactionID" data-bs-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionID">
                        <a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal"
                            data-bs-target="#cadastrar"><i class="bx bx-plus"></i> Cadastrar</a>
                    </div>
                </div>
            </div>

            <div class="table-responsive text-nowrap">
                <table class="table table-dark">
                    <thead">
                        <tr class="text-center">
                            <th>Código</th>
                            <th>Descrição</th>
                            <th>Valor</th>
                            <th>QTN</th>
                            <th>Ação</th>
                        </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @if (count($catalogos) > 0)
                            @foreach ($catalogos as $catalogo)
                            <tr>
                                <td class="text-center">{{ $catalogo->id }}</td>
                                <td class="text-center">
                                    <i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{
                                        $catalogo->descricao }}</strong>
                                </td>
                                <td class="text-center">{{ number_format($catalogo->valor, 2, ',', '.') }}</td>
                                <td class="text-center">{{ $catalogo->quantidade }}</td>

                                <td class="text-center">
                                    <a href="{{ route('tipocobranca.edit', $catalogo->id) }}" data-bs-toggle="modal"
                                        data-bs-target="#alterar" data-bs-toggle="tooltip" data-bs-offset="0,4"
                                        data-bs-placement="top" data-bs-html="true" title=""
                                        data-bs-original-title="<span>Editar</span>"><i
                                            class="bx bx-edit-alt me-1"></i></a>

                                    <a href="{{ route('tipocobranca.destroy', $catalogo->id) }}"
                                        data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top"
                                        data-bs-html="true" title="" data-bs-original-title="<span>Excluir</span>">
                                        <i class="bx bx-trash me-1 text-danger"></i></a>
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

{{-- modal cadastrar --}}
<div class="modal fade" id="cadastrar" aria-labelledby="modalToggleLabel" tabindex="-1" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-sm modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalToggleLabel">Cadastrar</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('cadastrar.tipocobranca') }}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="col-12">
                        <label class="form-label">Descrição</label>
                        <input type="text" class="form-control @error('descricao') is-invalid @enderror"
                            placeholder="Descrição" name="descricao" value="{{ old('descricao') }}">
                    </div>
                    <div class="col-12">
                        <label class="form-label">Valor</label>
                        <input type="text" class="form-control @error('valor') is-invalid @enderror" placeholder="10.00"
                            name="valor" value="{{ old('valor') }}">
                    </div>
                    <div class="col-12">
                        <label class="form-label">Quantidade</label>
                        <input type="number" class="form-control @error('quantidade') is-invalid @enderror"
                            placeholder="10" name="quantidade" value="{{ old('quantidade') }}">
                    </div>

                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger" data-bs-target="#modalToggle2" data-bs-toggle="modal"
                        data-bs-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection