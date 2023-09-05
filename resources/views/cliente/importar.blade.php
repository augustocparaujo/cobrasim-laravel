@extends('layouts.main')
@section('content')


<div class="row">
    <div class="col-12 mb-4 order-0">
      <div class="card">
        <div class="d-flex align-items-end row">
          <div class="col-12">
            <div class="card-body">
              <h5 class="card-title text-primary">Importar dados cliente</h5>
            </div>
          </div>
          <div class="col-12 text-center">
            <div class="card-body pb-0 px-0 px-md-4">
                <div class="input-group">
                    <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                    <button class="btn btn-outline-primary" type="button" id="inputGroupFileAddon04">Importar</button>
                  </div>
            </div>
            <br />
              
           
          </div>
        </div>
      </div>
    </div>
  </div>



@endsection

