<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubsectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subsections')->insert([
            'id' => 1,
            'name' => "Colchas y Boutis",
            'description' => "Novedades Europa pone a tu disposición la mejor colección de colchas del mercado con una gran calidad y a buenos precios. Ofrecemos colchas de todo tipo desde la colcha básica de piqué en algodón 100% hasta la colcha bouti estampada o lisa. Nos diferenciamos por trabajar tejido portugués de gran calidad lencero y con diseños diferentes: Colchas con volante, colchas con puntilla, colchas con fleco, etc. ¡Entra y descubre la colección de colchas de Novedades Europa!",            
            'section_id' => 1
        ]);

        DB::table('subsections')->insert([
            'id' => 2,
            'name' => "Edredones",
            'description' => "Novedades Europa pone a tu disposición los mejores edredones del mercado. Diferentes tipos de diseños, colores y estampados, para todos los gustos.  Disponibles en diferentes grosores para adaptarnos así a los lugares más fríos pero también a los más calurosos. Nos diferenciamos por especializarnos en tejido portugués y en diseños lenceros: edredones con puntilla, edredones con volante, edredones con fleco, etc. ¡Entra y descubre la nueva colección de edredones de Novedades Europa!",
            'section_id' => 1
        ]);

        
    }
}
