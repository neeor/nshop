<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('divisions')->insert([
            'id' => 1,
            'name' => "Edredones",
            'description' => "Novedades Europa pone a tu disposición los mejores edredones del mercado. Diferentes tipos de diseños, colores y estampados, para todos los gustos.  Disponibles en diferentes grosores para adaptarnos así a los lugares más fríos pero también a los más calurosos. Nos diferenciamos por especializarnos en tejido portugués y en diseños lenceros: edredones con puntilla, edredones con volante, edredones con fleco, etc. ¡Entra y descubre la nueva colección de edredones de Novedades Europa!",      
            'subsection_id' => 2
        ]);

        DB::table('divisions')->insert([
            'id' => 2,
            'name' => "Edredones infantiles / juveniles",
            'description' => "Novedades Europa pone a tu disposición su colección de edredones infatniles y juveniles para vestir los dormitorios de los más peques de forma divertida. Diferentes diseños, colores, tejidos, para elegir como decorar la cama de la habitación de los niños.",
            'subsection_id' => 2
        ]);
    }
}
