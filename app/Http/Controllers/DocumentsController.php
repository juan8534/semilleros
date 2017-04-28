<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Document;
use App\Image;
use App\User;
use Carbon\Carbon;


class DocumentsController extends Controller
{

    public function __construct()
    {
        Carbon::setLocale('es');  //Mostrar las fechas diffForHumans en español
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      $documents = Document::search($request->title)->paginate(6);
      $documents->each(function($documents){
          $documents->image;
        });
      return view('admin.documents.index',['documents' => $documents]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.documents.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //Manipulacion de imagenes
        $file = $request->file('image');
        //Metodo para concatenar el nombre del archivo con la hora para no colicionar nombres y tomar la extension de la imagen
        $name = 'semillero_' . time() . '.' . $file->getClientOriginalExtension();
        $path = public_path() . '/archivos/imagenes/'; //Carpeta donde caen los archivos
        $file->move($path, $name);


        $document = new Document($request->all());
        $document->user_id = \Auth::user()->id; //Obtenemos el user_id del usuario que inicio la sesion
        $document->save();

        $image = new Image();
        $image->name = $name;
        $image->document()->associate($document); //Asociamos el id del docmento con la imagen posible colision
        $image->save(); //Se guarda el nombre de la imagen

        flash("Se ha publicado el documento de manera correcta!",'success');
        return redirect()->route('documents.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $documents = Document::find($id);
        $documents->each(function($documents){
            $documents->image;
          });
        return view('admin.documents.document')->with('documents', $documents);
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
