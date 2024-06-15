<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Servicio;

class ServiciosController extends Controller
{
    public function index(){
        // $servicios = DB::table('servicios')->get();
        // $servicios = Servicio::orderby('titulo','asc')->get();
        $servicios = Servicio::latest()->paginate(2);

        return view('servicios',compact('servicios'));
    }

    public function show($id){

        return view('show',[
            'servicio' => Servicio::find($id)
        ]);

        // return Servicio::find($id);
    }


    public function create(){
        return view('create');
    }

    public function store(){
        //Primer Metodo
        // $titulo = request('titulo');
        // $descripcion = request('descripcion');

        // Servicio::create([
        //     'titulo' => $titulo,
        //     'descripcion' => $descripcion
        // ]);

        // return redirect()->route('servicios');

        $camposv = request()->validate([
            'titulo' => 'required',
            'descripcion' => 'required'
        ]);

        //Almacenamos en la BD usando el modelo Servicio
        Servicio::create($camposv);
        return redirect()->route('servicios');
    }


}
