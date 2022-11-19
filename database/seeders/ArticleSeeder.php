<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            'id' => 1,
            'name' => "Edredón Nórdico de Invierno con Estampado Digital - Nude",
            'description' => "Edredón nórdico de 300 gramos ideal para no pasar nada de frío esta temporada. Es un diseño de alta calidad que gracias a su fibra hueca siliconada tiene un tacto pluma muy agradable y por tanto es muy suave. Además viene con tratamiento antialérgico, es transpirable y lavable en lavadora. Fabricado en España.",      
            'price' => 54.90,
            'subsection_id' => 2,
            'division_id' => 1
        ]);

        DB::table('articles')->insert([
            'id' => 2,
            'name' => "Edredón Duvet con Sherpa Borreguito de Burrito Blanco - Planetario Azul",
            'description' => "Edredón infantil diseño con un estampado divertido de planetas y un fondo azul estrellado. Fabricado por su parte exterior con tejido de nacarina extremadamente suave y ligero por lo que ir a dormir será un placer par los más peques. Su parte interior viene diseñada en un azul celeste con tejido de borreguito también muy suave y muy calentito. Los dos tejidos utilizados para confeccionar este edredón infantil son de alta calidad. Admiten múltiples lavados sin que su aspecto o su tacto pierdan ni un ápice de sus características de nuevo. Pertenece a la firma Burrito Blanco que garantiza una alta calidad en sus productos.",
            'price' => 64.90,
            'subsection_id' => 2,
            'division_id' => 2
        ]);

        DB::table('articles')->insert([
            'id' => 3,
            'name' => "Colcha Bouti Extrasuave en Color Azul de Don Algodón - Natalie",
            'description' => "Colcha Bouti ideal para las temporadas de entretiempo con un tacto especialmente suave ya que viene con tratamiento de lavado a la piedra (stone washed). Es un diseño sencillo con fondo azul y detalle cosido al tono. Incluye fundas de cojín a juego con detalle de pompón cosido. La combinación con la colcha la hace un diseño único y diferente. Es una colcha ligera y por lo tanto muy cómoda para el descanso. A su vez es un diseño acolchado por lo que dará formar a la cama ya que incluye un relleno cosido de 100gramos en su interior. Gracias a su tejido tiene un lavado muy fácil y no necesita plancha.",
            'price' => 56.90,
            'subsection_id' => 1            
        ]);
    }
}
