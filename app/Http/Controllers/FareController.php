<?php

namespace App\Http\Controllers;
use App\Tarifa;
use Illuminate\Http\Request;

class FareController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fares = Tarifa::all();

        return view('fares.index', compact('fares'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fares.create');
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
            'descripcion' => 'required',
            'costo'=>'required'
        ]);

        $fare = new Tarifa([
            'descripcion' => $request->get('descripcion'),
            'costo' => $request->get('costo')
        ]);
        $fare->save();
        return redirect('/fares')->with('success','Tarifa Agregada');
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
        $fare = Tarifa::find($id);

        return view('fares.edit', compact('fare'));
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
        $request->validate([
            'descripcion'=>'required',
            'costo'=>'required|integer'
        ]);
        $fare = Tarifa::find($id);
        $fare->descripcion = $request->get('descripcion');
        $fare->costo = $request->get('costo');
        $fare->save();

        return redirect('/fares')->with('success','La tarifa ha sido actualizada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fare = Tarifa::find($id);
        $fare->delete();

        return redirect('/fares')->with('success','La tarifa ha sido borrada');
    }
}
