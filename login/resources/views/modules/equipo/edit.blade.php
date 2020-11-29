@extends('layouts.admin.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <form action="{{ route('equipo.update',$equipos->id) }}" method="post">
                    @csrf
                    @method('put')
                    <div class="form-group mt-5">
                        <label for="name_companies">Nombre del equipo</label>
                        <input name="name_companies" id="name_companies" type="text" class="form-control" value="{{$equipos->nombre_equipo}}">
                    </div>
                    <div class="form-group mt-5">
                        <label for="name_companies">Logo</label>
                        <input name="name_companies" id="name_companies" type="text" class="form-control" value="{{$equipos->logo}}">
                    </div>
                    <button type="submit" class="btn btn-primary">ACTUALIZAR</button>
                    <a href="{{ route('equipo.index') }}">Cancelar</a>
                </form>
            </div>
        </div>
    </div>

@endsection




