<?php

namespace App\Http\Controllers;
use App\Models\Respuesta;
use Illuminate\Http\Request;

class RespuestaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $respuestas=Respuesta::all();
        return view('Respuestas.index',['respuestas' => $respuestas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('respuestas.create');
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
            'estudiante_id' => 'required',
            'encuesta_id' => 'required',
        ]);
    
        $respuesta::update($request->all());
     
        return redirect()->route('Respuestas.index')
                        ->with('success','Respuestas created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('respuestas.show',compact('respuesta'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('respuestas.edit',compact('respuesta'));
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
            'estudiante_id' => 'required',
            'encuesta' => 'required',
        ]);
    
        $respuesta->update($request->all());
    
        return redirect()->route('Respuestas.index')
                        ->with('success','Respuesta updated successfully'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response 
     */

    public function destroy($id)

    {
        $respuesta->delete();
    
        return redirect()->route('Respuestas.index')
                        ->with('success','Respuestas deleted successfully');

     }
  }