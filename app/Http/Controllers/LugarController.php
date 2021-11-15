<?php

namespace App\Http\Controllers;
use App\Models\Lugar;
use Illuminate\Http\Request;

class LugarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lugares=Lugar::all();
        return view('Lugares.index',['lugares' => $lugares]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $db=new Lugar();

    $id=$request->file('img');
    $nombre=time().'.'.$images->getClientOriginalExtension();
    $capacidad=public_path('images');
    $request->img->move($capacidad,$nombre);
    $db ::create([
        "nombre"=>$request->nombre,
        "foto"=>$nombre,
    ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $lugares=array(
            'id'=>$request-> id,
            'nombre'=> $request-> nombre,
            'capacidad'=> $request-> capacidad,
            'status'=> $request-> status,
            'foto'=> $request-> foto,
        );
        Lugar:: create($lugares);

        return redirect()->route('Lugares.index');
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
