@extends('admin.BaseAdmin')

@section('title')
    Postularse
@endsection

@section('content')
    <div class="row">
        <div class="offset-3 col-6">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('postulate.store') }}" method="POST">
                        @include('admin.postulate.FormPostulate')
                        <br>

                        <div class="d-flex justify-content-center">
                            <button type="button" class="btn btn-secondary" onclick="validAceptField()">Aceptar</button>


                        </div>


                    </form>

                </div>
            </div>
        </div>
    </div>

@endsection
<div id = "alert-success">
    <div class="alert alert-success d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
            <use xlink:href="#check-circle-fill" />
        </svg>
        <div>
            Inicio de sesión.Exitoso!
        </div>
    </div>

</div>




