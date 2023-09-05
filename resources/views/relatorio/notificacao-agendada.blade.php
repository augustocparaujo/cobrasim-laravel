@extends('layouts.main')
@section('content')

<div class="row">
    <div class="col-12 mb-4 order-0">
    <div class="card">
        <div class="d-flex align-items-end row">
        <div class="col-12">
            <div class="card-body">
            <h5 class="card-title text-primary">Lista notifcações agendadas</h5>
            </div>
        </div>
        <div class="col-12 text-center">
        
            <div class="card-body">
                <div class="table-responsive text-nowrap">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Project</th>
                        <th>Client</th>
                        <th>Users</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                        <i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Angular Project</strong>
                        </td>
                        <td>Albert Cook</td>                       
                        <td><span class="badge bg-label-primary me-1">Active</span></td>
                        <td>
                            <a href="" title="editar dados"><i class="bx bx-edit-alt me-1"></i></a>
                            <a href="" title="excluir cliente"><i class="bx bx-trash me-1 text-danger"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>React Project</strong></td>
                        <td>Barry Hunter</td>                       
                        <td><span class="badge bg-label-success me-1">Completed</span></td>
                        <td>
                            <a href="" title="editar dados"><i class="bx bx-edit-alt me-1"></i></a>
                            <a href="" title="excluir cliente"><i class="bx bx-trash me-1 text-danger"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td><i class="fab fa-vuejs fa-lg text-success me-3"></i> <strong>VueJs Project</strong></td>
                        <td>Trevor Baker</td>                      
                        <td><span class="badge bg-label-info me-1">Scheduled</span></td>
                        <td>
                            <a href="" title="editar dados"><i class="bx bx-edit-alt me-1"></i></a>
                            <a href="" title="excluir cliente"><i class="bx bx-trash me-1 text-danger"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>Bootstrap Project</strong>
                        </td>
                        <td>Jerry Milton</td>                      
                        <td><span class="badge bg-label-warning me-1">Pending</span></td>
                        <td>
                            <a href="" title="editar dados"><i class="bx bx-edit-alt me-1"></i></a>
                            <a href="" title="excluir cliente"><i class="bx bx-trash me-1 text-danger"></i></a>
                        </td>
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