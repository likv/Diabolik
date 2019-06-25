@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <div class="container">
        <div class="row">
            <div class="m-5">
                <form class="form-horizontal" action="{{route('temporadas.store')}}" method="post"
                      enctype="multipart/form-data">
                    @csrf
                    <label for="titulo">Título</label>
                    <input class="form-control justify-content-center" name="titulo" type="text"
                           placeholder="Título">
                    @if ($errors->has('titulo'))
                        <div class="error">{{ $errors->first('titulo') }}</div>
                    @endif
                <!--       <input class="form-control form-control-lg" name="descripcion" type="textareas" placeholder="Descripción">-->
                    <label for="descripcion">Descripción</label>
                    <textarea class="form-control" name="descripcion" rows="3" placeholder="Descripción"></textarea>

                    @if ($errors->has('descripcion'))
                        <div class="error">{{ $errors->first('descripcion') }}</div>
                    @endif
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Imagen</label>
                        <input type="file" name="imagen" class="form-control-file" id="exampleFormControlFile1">
                        <div class="container py-5">
                        <button type="submit" class="btn btn-primary btn-lg btn-block">Aceptar</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection

