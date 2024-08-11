<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Servicio;
use App\Http\Requests\CreateServicioRequest;

use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use App\Http\Controllers\Controller;
use Intervention\Image\Laravel\Facades\Image;
use App\Events\ServicioSaved;
use App\Models\Category;

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
        
        // $servicios = Servicio::latest()->paginate(2);
        // return view('servicios',compact('servicios'));

        return view('servicios',[
            'servicios' => Servicio::with('category')->latest()->paginate(4)
        ]);

    }

    public function show($id){

        return view('show',[
            'servicio' => Servicio::find($id)
        ]);
    }

    public function create(){
        return view('create', [
            'servicio' => new Servicio,
            'categories' => Category::pluck('name', 'id')
        ]);
    }
    

    public function store(CreateServicioRequest $request){
        $servicio = new Servicio($request->validated());
        $servicio->image = $request->file('image')->store('images');
        $servicio->save();

        return redirect()->route('servicios.index')->with('estado','El servicio fue creado correctamente');

    }
    public function edit(Servicio $servicio){
        return view('edit', 
        [   'servicio' => $servicio,
            'categories' => Category::pluck('name','id')
        ]);

    }

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
            'image' => 'nullable|mimes:jpeg,png,jpg',
            'category_id' => 'nullable|exists:categories,id', 

        ]);

        $data = [
            'titulo' => $request->titulo,
            'descripcion' => $request->descripcion,
            'category_id' => $request->category_id,

        ];
        //dd($data); 


        if ($request->hasFile('image')) {
            if ($servicio->image) {
                Storage::delete($servicio->image);
            }

            $manager = new ImageManager(new Driver());

            $image = $manager->read($request->file('image')->getPathname());

            // Redimensionar 600px
            $image->cover(600, 600);

            //nombre único y definir la ruta de almacenamiento
            $imagePath = 'images/' . $request->file('image')->hashName();

            // Guardar la imagen redimensionada en formato PNG
            Storage::put($imagePath, (string) $image->toPng());

            // Actualizar la ruta de la imagen en los datos
            $data['image'] = $imagePath;
        }

        // Disparar el evento
        

        $servicio->update($data);
         ServicioSaved::dispatch($servicio);
        return redirect()->route('servicios.show', $servicio)->with('estado', 'El servicio fue actualizado correctamente');
    }

    public function destroy(Servicio $servicio){
        Storage::delete($servicio->image);
        $servicio->delete();
        return redirect()->route('servicios.index')->with('estado','El servicio fue eliminado correctamente');
    }
}
