<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Semillero;

class SemillerosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $semilleros = Semillero::paginate(8);
        return view('admin.semilleros.index')->with('semilleros', $semilleros);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.semilleros.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $semillero = new Semillero($request->all());
      $semillero->user_id = \Auth::user()->id; //Obtenemos el user_id del usuario que inicio la sesion
      $semillero->save();

      flash("Se ha creado el grupo de manera exitosa!",'success');
      return redirect()->route('semilleros.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $semilleros = Semillero::find($id);
      return view('admin.semilleros.semillero')->with('semilleros', $semilleros);
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
