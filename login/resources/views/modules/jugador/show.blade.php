@extends('layouts.admin.app')
@section('content')


    <div class="container">
        <div class="row">
            <div class="col-md-6 mt-4">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <th>ID</th>
                            <td>{{ $jugador->id }}</td>
                        </tr>
                        <tr>
                            <th>NOMBRE JUGADOR</th>
                            <td>{{ $jugador->nombres }}</td>
                        </tr>
                        <tr>
                            <th>APELLIDO JUGADOR</th>
                            <td>{{ $jugador->apellidos }}</td>
                        </tr>
                        <tr>
                            <th>DORSAL</th>
                            <td>{{ $jugador->numero_camisa}}</td>
                        </tr>
                        <tr>
                            <th>APODO</th>
                            <td>{{ $jugador->apodo }}</td>
                        </tr>
                        <tr>
                            <th>NOMBRE DE EQUIPO</th>
                            <td>{{ $jugador->equipos->nombre_equipo }}</td>
                        </tr>
                        <tr>
                            <th>ACTUALIZACION</th>
                            <td>{{ $jugador->updated_at }}</td>
                        </tr>
                    </table>
                    <a class="btn btn-primary btn-sm" href="{{ route('jugador.index') }}">Volver</a>
                </div>
            </div>
        </div>
    </div>




@endsection
