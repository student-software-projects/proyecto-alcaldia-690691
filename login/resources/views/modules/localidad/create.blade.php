@extends('layouts.admin.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <form action="{{ route('localidad.store') }}" method="post">
                    @csrf
                    <div class="form-group mt-5">
                        <label for="localidad">Nombre de la localidad</label>
                        <input name="localidad" id="localidad" type="text" class="form-control">
                    </div>
                    <hr>
                    <button type="submit" class="btn btn-primary">GUARDAR NUEVA LOCALIDAD</button>
                    <a href="{{ route('localidad.index') }}">Cancelar</a>
                </form>
            </div>
        </div>
    </div>

@endsection
