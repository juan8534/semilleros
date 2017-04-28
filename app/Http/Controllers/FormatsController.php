<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Format;
use App\Archivo;

class FormatsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $formats = Format::search($request->title)->paginate(8);
        $formats->each(function($formats){
            $formats->archivo;
            $formats->user;
          });
        return view('admin.formats.index')->with('formats', $formats);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.formats.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $file = $request->file('file');
      //Metodo para concatenar el nombre del archivo con la hora para no colicionar nombres y tomar la extension de la imagen
      $name = 'semillero_' . time() . '.' . $file->getClientOriginalExtension();
      $path = public_path() . '/archivos/formatos/'; //Carpeta donde caen los archivos
      $file->move($path, $name);

      $format = new Format($request->all());
      $format->user_id = \Auth::user()->id; //Obtenemos el user_id del usuario que inicio la sesion
      $format->save();


      $archivo = new Archivo();
      $archivo->name = $name;
      $archivo->format()->associate($format); //Asociamos el id del docmento con la imagen posible colision
      $archivo->save();

      flash("Se ha publicado el archivo de manera correcta!",'success');
      return redirect()->route('formats.index');



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $formats = Format::find($id);
        $formats->each(function($formats){
            $formats->archivo;
          });
        return view('admin.formats.file')->with('formats', $formats);
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

    public function download($file_name)
    {
        $file_path = public_path('archivos/formatos/'.$file_name);
        return response()->download($file_path);
    }















}
