@extends('layouts.admin.app')


@section('content')
<h1>Hola {{session('USER')->names}}</h1>
@endsection
