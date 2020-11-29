@extends('layouts.admin.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <a class="btn btn-primary mt-4 mb-3" href="{{ route('localidad.create') }}">CREAR NUEVA LOCALIDAD</a>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>NOMBRE LOCALIDAD</th>
                            <th>FECHA CREACIÓN</th>
                            <th>OPCIONES</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($localidades  as $localidad)
                            <tr>
                                <td>{{ $localidad->id }}</td>
                                <td>{{ $localidad->localidad}}</td>
                                <td>{{ $localidad->created_at }}</td>
                                <td>
                                   <form action="{{route('localidad.destroy',$localidad->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ route('localidad.show',$localidad->id) }}" class="btn btn-sm btn-info">Detalles</a>
                                        <a href="{{route('localidad.edit',$localidad->id)}}" class="btn btn-sm btn-warning">Editar</a>
                                        <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>


                </div>
            </div>
        </div>
    </div>
@endsection
