@extends('admin.layout')

@section('content')

    <div class="row">
        <div class="col-md-6">

            <div class="box box-danger">
                <div class="box-header with-border">
                    <h3 class="box-title">Actualizar Role</h3>
                </div>
                <div class="box-body">

                    @include('admin.partials.error-messages')

                    <form method="POST" action="{{ route('admin.roles.update',$role)}}">
                        @method('PUT')
                        @include('admin.roles.form')
                        <div class="form-group">
                            <button class="btn btn-danger btn-block">Actualizar Role</button>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>

@endsection
