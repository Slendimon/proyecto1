<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stand;
class StandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stands = Stand::all();

        return view('stands.index', compact('stands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('stands.create');
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
            'letra'=>'required',
            'numero'=>'required|integer',
            'padron'=>'required|integer'
        ]);

        $stand = new Stand([
            'letra'=>$request->get('letra'),
            'numero'=>$request->get('numero'),
            'padron'=>$request->get('padron'),
        ]);
        $stand->save();
        return redirect('/stands')->with('success',('El Stand ha sido agregado'));
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
        $stand = Stand::find($id);
        
        return view('stands.edit', compact('stand'));
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
            'letra'=>'required',
            'numero'=>'required|integer',
            'padron'=>'required|integer'
        ]);

        $stand = Stand::find($id);
        $stand->letra = $request->get('letra');
        $stand->numero = $request->get('numero');
        $stand->padron = $request->get('padron');
        $stand->save();

        return redirect('/stands')->with('success','El stand ha sido actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $stand = Stand::find($id);
        $stand->delete();
        return redirect('/stands')->with('success','El stand ha sido borrado');
    }
}
