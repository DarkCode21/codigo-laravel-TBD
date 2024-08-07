<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Support\Facades\Storage;
use App\Events\ServicioSaved;

class OptimizeServicioImage
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    // public function handle(object $event): void
    // {
    //     //
    // }

    // public function handle(ServicioSaved $event)
    // {
    //     $servicio = $event->servicio;

    //     if ($servicio->image) {
    //         $manager = new ImageManager(new Driver());
    //         $imagePath = storage_path('app/' . $servicio->image);
    //         $image = $manager->read($imagePath);

    //         // Optimizar la imagen
    //         $optimizedImage = $image->resize(height: 200); 

    //         // Guardar la imagen optimizada
    //         Storage::put($servicio->image, (string) $optimizedImage->toPng());
    //     }
    // }
        public function handle(ServicioSaved $event)
    {
        $servicio = $event->servicio;

        if ($servicio->image) {
            $manager = new ImageManager(new Driver());
            $imagePath = storage_path('app/' . $servicio->image);

            // Verificar si el archivo existe
            if (!file_exists($imagePath)) {
                // Manejar el error si el archivo no existe
                return;
            }

            $image = $manager->read($imagePath);

            // Optimizar la imagen
            $optimizedImage = $image->pickColor(23, 9, 10); 

            // Guardar la imagen optimizada
            Storage::put($servicio->image, (string) $optimizedImage->encode('png'));
        }
    }   
}
