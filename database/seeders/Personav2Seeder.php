<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class Personav2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Datos de ejemplo para insertar
        $datos = [
            [
                'cPerApellido' => 'González',
                'cPerNombre' => 'Juan',
                'cPerDireccion' => 'Calle Principal 123',
                'dPerFechaNac' => '1990-05-15',
                'nPerEdad' => 32,
                'nPerSueldo' => 2500.00,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'cPerApellido' => 'López',
                'cPerNombre' => 'María',
                'cPerDireccion' => 'Avenida Central 456',
                'dPerFechaNac' => '1985-09-20',
                'nPerEdad' => 37,
                'nPerSueldo' => 2800.50,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'cPerApellido' => 'Martínez',
                'cPerNombre' => 'Pedro',
                'cPerDireccion' => 'Av. Libertador 789',
                'dPerFechaNac' => '1982-04-10',
                'nPerEdad' => 40,
                'nPerSueldo' => 3200.75,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'cPerApellido' => 'Rodríguez',
                'cPerNombre' => 'Ana',
                'cPerDireccion' => 'Plaza Bolívar 321',
                'dPerFechaNac' => '1995-07-25',
                'nPerEdad' => 29,
                'nPerSueldo' => 2300.00,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'cPerApellido' => 'Gómez',
                'cPerNombre' => 'Luis',
                'cPerDireccion' => 'Av. Universidad 567',
                'dPerFechaNac' => '1988-02-18',
                'nPerEdad' => 36,
                'nPerSueldo' => 2900.25,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'cPerApellido' => 'Pérez',
                'cPerNombre' => 'Laura',
                'cPerDireccion' => 'Calle Real 987',
                'dPerFechaNac' => '1993-11-30',
                'nPerEdad' => 31,
                'nPerSueldo' => 2700.50,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'cPerApellido' => 'Díaz',
                'cPerNombre' => 'Carlos',
                'cPerDireccion' => 'Av. Principal 654',
                'dPerFechaNac' => '1980-08-05',
                'nPerEdad' => 44,
                'nPerSueldo' => 3500.00,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'cPerApellido' => 'Hernández',
                'cPerNombre' => 'Sofía',
                'cPerDireccion' => 'Calle Mayor 234',
                'dPerFechaNac' => '1987-03-12',
                'nPerEdad' => 37,
                'nPerSueldo' => 3000.75,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'cPerApellido' => 'Romero',
                'cPerNombre' => 'Diego',
                'cPerDireccion' => 'Av. Bolívar 876',
                'dPerFechaNac' => '1991-06-28',
                'nPerEdad' => 33,
                'nPerSueldo' => 2600.00,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'cPerApellido' => 'Alvarez',
                'cPerNombre' => 'Elena',
                'cPerDireccion' => 'Av. Libertad 543',
                'dPerFechaNac' => '1983-09-08',
                'nPerEdad' => 41,
                'nPerSueldo' => 3100.50,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        DB::table('persona')->insert($datos);
    }
}
