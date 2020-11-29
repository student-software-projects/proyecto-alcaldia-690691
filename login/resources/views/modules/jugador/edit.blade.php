@extends('layouts.admin.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <form action="{{ route('jugador.update',$jugadores->id) }}" method="post">
                    @csrf
                    @method('put')
                    <div class="form-group mt-5">
                        <label for="nombres">Nombres del jugador</label>
                        <input name="nombres" id="nombres" type="text" class="form-control" value="{{$jugadores->nombres}}">
                    </div>
                    <div class="form-group mt-5">
                        <label for="apellidos">Apellidos del jugador</label>
                        <input name="apellidos" id="apellidos" type="text" class="form-control" value="{{$jugadores->apellidos}}">
                    </div>
                    <div class="form-group mt-5">
                        <label for="numero_camisa">Numero de la jugador</label>
                        <input name="numero_camisa" id="numero_camisa" type="text" class="form-control" value="{{$jugadores->numero_camisa}}">
                    </div>
                    <div class="form-group mt-5">
                        <label for="apodo">Apodo del jugador</label>
                        <input name="apodo" id="apodo" type="text" class="form-control" value="{{$jugadores->apodo}}">
                    </div>

                    <button type="submit" class="btn btn-primary">ACTUALIZAR</button>
                    <a href="{{ route('jugador.index') }}">Cancelar</a>
                </form>
            </div>
        </div>
    </div>

@endsection



