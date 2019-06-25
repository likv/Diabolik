@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <div class="container">
        <div class="row">
            <div class="m-5">
                <form class="form-horizontal" action="{{route('temporadas.update',$temporadas->id)}}" method="post">
        @csrf
        {{method_field('PUT')}}

            <label for="titulo">Título</label>
            <input class="form-control py-2" value="{{$temporadas->titulo}}" name="titulo" type="text" placeholder="Default input">
            @if ($errors->has('titulo'))
                <div class="error">{{ $errors->first('titulo') }}</div>
            @endif
            <label for="descripcion">Descripción</label>
            <input class="form-control form-control-lg py-5" value="{{$temporadas->descripcion}}" name="descripcion" type="text" placeholder=".form-control-lg">
            @if ($errors->has('descripcion'))
                <div class="error">{{ $errors->first('descripcion') }}</div>
            @endif
        <div class="form-group">
            <label for="imagen">Imagen</label>
            <input type="file" name="imagen" class="form-control-file" value="{{$temporadas->imagen}}" id="imagen">
            <div class="container py-5">
            <button type="submit" class="btn btn-success btn-lg btn-block">Guardar</button>
            </div>
        </div>


            </form>
            </div>
        </div>
    </div>
@endsection
