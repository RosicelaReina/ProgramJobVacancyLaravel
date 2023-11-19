@extends('admin.BaseAdmin')

@section('styles')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endsection

@section('title')
    Ofertas
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-end">
                        <a href="{{ route('vacancy.create') }}" class="btn btn-warning">
                            <i class="fas fa-plus-circle nav-icon"> </i>
                        </a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Codigo</th>
                                <th>Cargo</th>
                                <th>Ciudad</th>
                                <th>Empresa</th>
                                <th>Salario</th>
                                <th>Contrato</th>
                                <th>Titulo</th>
                                <th>Requisitos</th>
                                <th>visibilidad</th>
                                <th>Postulados</th>
                                <th>Editar</th>
                                <th>Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @isset($vacancies)
                                @foreach ($vacancies as $vacancy)
                                    <tr>

                                        <td>{{ $vacancy->id }}</td>
                                        <td>{{ $vacancy->charge }}</td>
                                        <td>{{ $vacancy->city }}</td>
                                        <td>{{ $vacancy->company }}</td>
                                        <td>{{ $vacancy->salary }}</td>
                                        <td>{{ $vacancy->typeContract }}</td>
                                        <td>{{ $vacancy->title }}</td>
                                        <td>{{ $vacancy->requeriments }}</td>
                                        <td>{{ $vacancy->visibility }}</td>

                                        <td class="text-center">
                                            <a href="{{ route('vacancy.show', $vacancy) }}" class="btn btn-info">
                                                <i class="fas fa-eye nav-icon"></i>
                                            </a>
                                        </td>


                                        <td class="text-center">
                                            <a href="{{ route('vacancy.edit', $vacancy) }}" class="btn btn-info">
                                                <i class="fas fa-edit nav-icon"></i>
                                            </a>
                                        </td>
                                        <td class="text-center">
                                            <form action="{{ route('vacancy.destroy', $vacancy) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">
                                                    <i class="fas fa-minus-circle nav-icon"> </i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            @endisset
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endsection

    @section('scripts')
        <!-- DataTables  & Plugins -->
        <script src="{{ asset('admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('admin/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset('admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('admin/plugins/jszip/jszip.min.js') }}"></script>
        <script src="{{ asset('admin/plugins/pdfmake/pdfmake.min.js') }}"></script>
        <script src="{{ asset('admin/plugins/pdfmake/vfs_fonts.js') }}"></script>
        <script src="{{ asset('admin/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
        <script src="{{ asset('admin/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
        <script src="{{ asset('admin/plugins/datatables-buttons/js/buttons.colVis.min.j') }}s"></script>

        <script type="text/javascript">
            $(function() {
                $("#example1").DataTable({
                    "responsive": true,
                    "lengthChange": true,
                    "autoWidth": true,
                    "language": {
                        "lengthMenu": "Mostrar " +
                            `<select class="custom-select custom-select-sm form-control form-control-sm">
                            <option value="10">10</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                        </select>` +
                            " registros por página",
                        "zeroRecords": "No hay registros",
                        "info": "Mostrando la página _PAGE_ de _PAGES_",
                        "infoEmpty": "No hay registros disponibles",
                        "infoFiltered": "(filtrado de _MAX_ registros totales)",
                        "search": "Buscar:",
                        "paginate": {
                            "next": "Siguiente",
                            "previous": "Anterior"
                        },
                        "processing": "Procesando...",
                        "buttons": {
                            "copy": "Copiar",
                            "print": "Imprimir",
                            "colvis": "Ocultar columnas"
                        }
                    },

                    "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
                }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            });
        </script>
    @endsection
