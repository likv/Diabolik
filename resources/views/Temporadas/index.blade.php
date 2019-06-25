@extends('layouts.app')

@section('content')
    <div class="container" style="text-align:center">

        <h1><strong>Bienvenido</strong></h1>

        <form action="{{route('temporadas.create')}}" style="text-align: left">
            <button type="input" class="btn btn-primary">Agregar temporada</button>
        </form>

        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Imagen</th>
                <th scope="col">Titulo</th>

                <th scope="col">Acciones</th>
            </tr>


            </thead>

            <tbody>
            @foreach($temporadas as $temporada)
                <tr>
                    <td>{{$temporada->id}}</td>
                    <td><img src="{{$temporada->imagen}}" height="50px" alt="imagen"></td>
                    <td>{{$temporada->titulo}}</td>

                    <td>
                        <div class="btn-group">
                            <a class="btn btn-primary" href="{{route('temporadas.show',$temporada->id)}}"
                               role="button">Ver</a>
                            <form action="{{route('temporadas.edit',$temporada->id)}}">
                                <button class="btn btn-success" type="input" value="Editar">Editar</button>
                            </form>
                            <form action="{{route('temporadas.destroy',$temporada->id)}}" method="post">
                                @csrf
                                {{method_field('DELETE')}}
                                <button class="btn btn-danger" type="submit" value="Eliminar">Eliminar</button>
                            </form>
                        </div>
    </div>
    </td>
    </tr>
    @endforeach
    </tbody>




    </div>


@endsection
