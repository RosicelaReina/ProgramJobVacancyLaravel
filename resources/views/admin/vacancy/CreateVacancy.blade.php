@extends('admin.BaseAdmin')

@section('title')
    Registrar Ofertas
@endsection

@section('content')
    <div class="row">
        <div class="offset-3 col-6">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('vacancy.store') }}" method="POST">
                        @include('admin.vacancy.FormVacancy')
                        <br>

                        <div class="d-flex justify-content-center">
                            <button class="btn btn-primary" type="submit"> Registrar </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
