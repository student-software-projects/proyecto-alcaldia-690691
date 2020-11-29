
@extends('layouts.admin.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-6 mt-4">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <th>ID</th>
                            <td>{{ $jugadores->id }}</td>
                        </tr>
                        <tr>
                            <th>NOMBRE LOCALIDAD</th>
                            <td>{{ $jugadores->localidad }}</td>
                        </tr>
                        <tr>
                            <th>FECHA CREACIÓN</th>
                            <td>{{ $jugadores->created_at }}</td>
                        </tr>
                        <tr>
                            <th>ACTUALIZACION</th>
                            <td>{{ $jugadores->updated_at }}</td>
                        </tr>
                    </table>
                    <a class="btn btn-primary btn-sm" href="{{ route('localidad.index') }}">Volver</a>
                </div>
            </div>
        </div>
    </div>

@endsection




