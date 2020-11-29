@extends('layouts.admin.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <form action="{{ route('equipo.store') }}" method="post">
                    @csrf
                    <div class="form-group mt-5">
                        <label for="nombre_equipo">Nombre del equipo</label>
                        <input name="nombre_equipo" id="nombre_equipo" type="text" class="form-control">
                    </div>
                    <div class="form-group mt-5">
                        <label for="logo">Logo</label>
                        <input name="logo" id="logo" type="text" class="form-control">
                    </div>
                    <div class="form-group mt-5">
                        <label for="localidad_id">Loalidad</label>
                        <select name="localidad_id" id="localidad_id" class="form-control" required>
                            <option value="0">Seleccione</option>
                            @foreach($equipos as $equipo)
                                <option value="{{$equipo->id}}"> {{$equipo->localidad}}</option>
                            @endforeach
                        </select>
                    </div>
                    <hr>
                    <button type="submit" class="btn btn-primary">GUARDAR NUEVO EQUIPO</button>
                    <a href="{{ route('equipo.index') }}">Cancelar</a>
                </form>
            </div>
        </div>
    </div>

@endsection
