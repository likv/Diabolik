@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h1><b>{{$temporadas->titulo}}</b></h1>
    <h2>{{$temporadas->descripcion}}</h2>
    <img src="{{$temporadas->imagen}}" alt="imagen">
    <div class="btn-group">
    <form action="{{route('temporadas.edit',$temporadas->id)}}">
        <button type="input" class="btn btn-primary btn-sm">Editar</button>
    </form>
    </div>
<div class="btn-group">
    <form action="{{route('temporadas.destroy',$temporadas->id)}}" method="post">
        @csrf
        {{method_field('DELETE')}}
        <button type="submit" class="btn btn-warning btn-sm">Eliminar</button>
    </form>
    </div>
</div>
@endsection
