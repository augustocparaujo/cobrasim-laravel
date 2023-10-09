@extends('layouts.main')
@section('content')


<!-- Error -->
<div class="row">
    <div class="container-xxl container-p-y text-center">
        <div class="misc-wrapper">
            <h2 class="mb-2 mx-2">Page Not Found :(</h2>
            <p class="mb-4 mx-2">Ops! 😖 A URL solicitada não foi encontrada neste servidor.</p>
            <div class="mt-3">
                <img src="/painel/img/illustrations/page-misc-error-light.png" alt="page-misc-error-light" width="500"
                    class="img-fluid" data-app-dark-img="illustrations/page-misc-error-dark.png"
                    data-app-light-img="illustrations/page-misc-error-light.png" />
            </div>
        </div>
        <br /><a href="{{ route('dashboard') }}" class="btn btn-primary">Voltar para home</a>
    </div>
</div>
<!-- /Error -->

@endsection