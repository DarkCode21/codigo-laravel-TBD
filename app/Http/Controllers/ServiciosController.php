<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Servicio;
use App\Http\Requests\CreateServicioRequest;

class ServiciosController extends Controller
{
    public function __construct()
    {
       // $this->middleware('auth')->only('create','edit');
        $this->middleware('auth')->except('index','show');
    }
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
    }

    public function create(){
        return view('create',[
            'servicio' => new Servicio
        ]);
    }

    // public function store(){
    
    //     $camposv = request()->validate([
    //         'titulo' => 'required',
    //         'descripcion' => 'required'
    //     ]);

    //     Servicio::create($camposv);
        
    //     return redirect()->route('servicios.index')->with('estado','El servicio fue creado correctamente');

    // }
    public function store(CreateServicioRequest $request){
        $servicio = new Servicio($request->validated());
        $servicio->image = $request->file('image')->store('images');
        $servicio->save();

        return redirect()->route('servicios.index')->with('estado','El servicio fue creado correctamente');

    }
    public function edit(Servicio $servicio){
        return view('edit', ['servicio' => $servicio]);

    }


    // public function update(Request $request, Servicio $servicio)
    // {
    //     $request->validate([
    //         'titulo' => 'required',
    //         'descripcion' => 'required',
    //     ]);

    //     $servicio->update([
    //         'titulo' => $request->titulo,
    //         'descripcion' => $request->descripcion,
    //     ]);

    //     return redirect()->route('servicios.show', $servicio)->with('estado','El servicio fue actualizado correctamente');
    // }
    
    
    //Validando Actualización
    // public function update(Servicio $servicio, CreateServicioRequest $request){
    //     $servicio->update($request->validate());

    //     return redirect()->route('servicios.show',$servicio);
    // }

    public function update(Request $request, Servicio $servicio)
    {
        $request->validate([
            'titulo' => 'required',
            'descripcion' => 'required',
            'image' => 'nullable','mimes:jpeg,png,jpg',
        ]);

        $data = [
            'titulo' => $request->titulo,
            'descripcion' => $request->descripcion,
        ];
    
        // if ($request->hasFile('image')) {
        //     $data['image'] = $request->file('image')->store('images');
        // }

        // Verificar si se ha enviado un archivo de imagen
        if ($request->hasFile('image')) {
            // Eliminar la imagen anterior si existe
            if ($servicio->image) {
                Storage::delete($servicio->image);
            }

            // Subir la nueva imagen y obtener la ruta
            $data['image'] = $request->file('image')->store('images');
        }
    
        $servicio->update($data);

        return redirect()->route('servicios.show', $servicio)->with('estado','El servicio fue actualizado correctamente');
    }

    public function destroy(Servicio $servicio){
        Storage::delete($servicio->image);
        $servicio->delete();
        return redirect()->route('servicios.index')->with('estado','El servicio fue eliminado correctamente');
    }
}
