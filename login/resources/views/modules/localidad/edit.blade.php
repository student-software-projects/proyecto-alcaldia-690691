@extends('layouts.admin.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <form action="{{ route('localidad.update',$localidades->id) }}" method="post">
                @csrf
                @method('put')
                <div class="form-group mt-5">
                    <label for="localidad">Nombre de la localidad</label>
                    <input name="localidad" id="localidad" type="text" class="form-control" value="{{$localidades->localidad}}">
                </div>


                <button type="submit" class="btn btn-primary">ACTUALIZAR</button>
                <a href="{{ route('localidad.index') }}">Cancelar</a>
            </form>
        </div>
    </div>
</div>

@endsection



