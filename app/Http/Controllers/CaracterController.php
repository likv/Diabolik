<?php

namespace App\Http\Controllers;

use App\Caracter;
use Illuminate\Http\Request;

class CaracterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caracter=Caracter::all();
        return view('Caracter.index',['caracter'=>$caracter]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Caracter  $caracter
     * @return \Illuminate\Http\Response
     */
    public function show(Caracter $caracter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Caracter  $caracter
     * @return \Illuminate\Http\Response
     */
    public function edit(Caracter $caracter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Caracter  $caracter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Caracter $caracter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Caracter  $caracter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Caracter $caracter)
    {
        //
    }
}
