@extends('main')
@section('content')
<h1>Index usuarios</h1>
<p class="text-right">
    <a href="{{ route('usuarios.create') }}">Nuevo usuario</a>
</p>
@endsection