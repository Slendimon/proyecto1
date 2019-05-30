<?php

namespace App\Http\Controllers;
use App\Socio;
use Illuminate\Http\Request;

class SocioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $socios = Socio::all();

        return view('socios.index',compact('socios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('socios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'apellido_p'=>'required',
            'apellido_m'=>'required',
            'nombre'=>'required',
            'cargo'=>'required',
            'habilitado'=>'required'
        ]);
        $socio = new Socio ([
            'apellido_p'=> $request->get('apellido_p'),
            'apellido_m'=> $request->get('apellido_m'),
            'nombre'=> $request->get('nombre'),
            'cargo'=> $request->get('cargo'),
            'habilitado'=> $request->get('habilitado'),
            'descripcion'=> $request->get('descripcion'),
        ]);
        $socio->save();
        return redirect('/socios')->with('success','El socio ha sido agregado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
