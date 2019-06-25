<?php

namespace App\Http\Controllers;

use App\Temporadas;
use Illuminate\Http\Request;

class TemporadasController extends Controller
{

    public function index()
    {
        $temporadas=Temporadas::all();
            return view('Temporadas.index',['temporadas'=>$temporadas]);
    }


    public function create()
    {
        return view('Temporadas.create');
    }


    public function store(Request $request)
    {
        $request->validate(array(
            "titulo"=>'required',
            "descripcion"=>'required',
            "imagen"=>'required'
        ));

        $temporadas=new Temporadas();
        $temporadas->titulo=$request->titulo;
        $temporadas->descripcion=$request->descripcion;
        if($request->hasFile('imagen'))
        {
            if($request->file('imagen')->isValid())
            {
                $path = $request->imagen->store('temporadas', 'public');
                $temporadas->imagen = asset($path);
            }
        }
        $temporadas->save();
        return redirect()->route('temporadas.index');
    }


    public function show($temporadas)
    {
        $temporadas=Temporadas::find($temporadas);
        return view('Temporadas.show', ['temporadas'=>$temporadas]);
    }

    public function edit($temporadas)
    {
        $temporadas=Temporadas::find($temporadas);
        return view('Temporadas.edit',['temporadas'=>$temporadas]);
    }


    public function update(Request $request,$id)
    {
        $request->validate(array(
            "titulo"=>'required',
            "descripcion"=>'required',
            "imagen"=>'required'

        ));

        $temporadas=Temporadas::find($id);
        $temporadas->titulo=$request->titulo;
        $temporadas->descripcion=$request->descripcion;
        if($request->hasFile('imagen'))
        {
            if($request->file('imagen')->isValid())
            {
                $path = $request->imagen->store('temporadas', 'public');
                $temporadas->imagen = asset($path);
            }
        }

        $temporadas->save();
        return redirect()->route('temporadas.index');
    }

    public function destroy($temporadas)
    {
        $temporadas=Temporadas::find($temporadas);
        $temporadas->delete();
        return redirect()->route('temporadas.index');
    }
}
