@extends('admin.BaseAdmin')

@section('title')
    Visualizar Ofertas
@endsection

@section('content')
    <div class="row">
        <div class="offset-3 col-6">
            <div class="card">
                <div class="card body">
                    @include('admin.vacancy.FormVacancy')
                    <br>

                    <div class="d-flex justify-content-center">
                        <a href="{{ route('vacancy.index') }}" class="btn btn-primary">Atras</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
