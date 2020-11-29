@extends('layouts.admin.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <form action="{{ route('jugador.store') }}" method="post">
                    @csrf
                    <div class="form-group mt-5">
                        <label for="nombres">Nombre del jugador</label>
                        <input name="nombres" id="nombres" type="text" class="form-control">
                    </div>
                    <div class="form-group mt-5">
                        <label for="apellidos">Apellidos del jugador</label>
                        <input name="apellidos" id="apellidos" type="text" class="form-control">
                    </div>
                    <div class="form-group mt-5">
                        <label for="numero_camisa">Numero de la jugador</label>
                        <input name="numero_camisa" id="numero_camisa" type="text" class="form-control">
                    </div>
                    <div class="form-group mt-5">
                        <label for="apodo">Apodo del jugador</label>
                        <input name="apodo" id="apodo" type="text" class="form-control">
                    </div>
                    <lavel>Nombre del Equipo</lavel>
                    <select name="equipos_id" id="equipos_id" class="form-control" required>
                        <option value="0">Seleccione</option>
                        @foreach($jugadores as $jugador)
                            <option value="{{$jugador->id}}"> {{$jugador->nombre_equipo}}</option>
                        @endforeach
                    </select>
                    <hr>
                    <button type="submit" class="btn btn-primary">GUARDAR NUEVA JUGADOR</button>
                    <a href="{{ route('jugador.index') }}">Cancelar</a>
                </form>
            </div>
        </div>
    </div>

@endsection
