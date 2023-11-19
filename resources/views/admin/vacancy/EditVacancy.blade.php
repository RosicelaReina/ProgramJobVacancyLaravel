@extends('admin.BaseAdmin')

@section('title')
    Editar Ofertas
@endsection

@section('content')
    <div class="row">
        <div class="offset-3 col-6">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('vacancy.update', $vacancy) }}" method="POST">
                        @method('PUT')
                        @include('admin.vacancy.FormVacancy')
                        <br>

                        <div class="d-flex justify-content-center">
                            <button class="btn btn-primary" type="submit"> Editar </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
