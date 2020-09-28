@extends('admin.layout')

@section('header')

    <h1>
        Permisos
        <small> Listado</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="far fa-tachometer-alt"></i> Inicio</a></li>
        <li class="active">Permisos</li>
    </ol>

@stop

@section('content')

    <!-- /.box -->

    <div class="box box-danger">
        <div class="box-header">
            <h3 class="box-title">Listados Permisos</h3>

        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table id="posts-table" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Identificador</th>
                    <th>Nombre</th>
                    @can('update', $permission)
                    <th>Acciones</th>
                    @endcan
                </tr>
                </thead>
                <tbody>
                @foreach ($permissions as $permission)
                    <tr>
                        <td>{{ $permission->id }}</td>
                        <td>{{ $permission->name }}</td>
                        <td>{{ $permission->display_name  }}</td>

                        <td>
                            @can('update', $permission)
                            <a href="{{ route('admin.permissions.edit', $permission)}}" class="btn btn-xs btn-info"><i class="far fa-pencil"></i></a>
                            @endcan
                        </td>
                    </tr>
                @endforeach
                </tbody>
                {{--                <tfoot>--}}
                {{--                    <tr>--}}
                {{--                        <th>Rendering engine</th>--}}
                {{--                        <th>Browser</th>--}}
                {{--                    </tr>--}}
                {{--                </tfoot>--}}
            </table>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->
@stop

<!-- bootstrap datepicker -->
@push('style')
    <!-- DataTables -->
    <link rel="stylesheet" href="/adminlte/plugins/datatables/dataTables.bootstrap.css">
@endpush

@push('script')

    <!-- DataTables -->
    <script src="/adminlte/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="/adminlte/plugins/datatables/dataTables.bootstrap.min.js"></script>
    <script>
        $(function () {
            $('#permissions-table').DataTable({
                "responsive": true,
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": true,
                "language": {
                    "url": '//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json'
                }
            });
        });
    </script>


@endpush
