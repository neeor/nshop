<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sections')->insert([
            'id' => 1,
            'name' => "Dormitorio",
            'description' => "Aquí encontrarás todo lo necesario para vestir tu dormitorio, crea un lugar intimo y acogedor.",            
        ]);

        DB::table('sections')->insert([
            'id' => 2,
            'name' => "Salón",
            'description' => "En este rincón podrás elegir todo lo necesario para fomentar un ambiente relajado y confortable. Combina fundas de sofá, alfombras, cojines, mantitas, mantelerías...",
        ]);

        DB::table('sections')->insert([
            'id' => 3,
            'name' => "Baño",
            'description' => "Viste tu aseo con toallas, albornoces, alfombras ... con una máxima calidad en rizo de algodón.",
        ]);

        DB::table('sections')->insert([
            'id' => 4,
            'name' => "Bebé",
            'description' => "Mima a tu pequeñín dandole lo mejor. Edredones de cuna, sábanas, toallas, mantitas...",
        ]);

        DB::table('sections')->insert([
            'id' => 5,
            'name' => "Alfombras",
            'description' => "De pelo, vinilo, lana, naylon, polipropileno, acrílicas, yute, sisal...",
        ]);

        DB::table('sections')->insert([
            'id' => 6,
            'name' => "Cortinas",
            'description' => "Aquí podrás encontrar cortinas para tu dormitorio, salón, cocina ect. Se pueden encargar bajo catálogo.",
        ]);

        DB::table('sections')->insert([
            'id' => 7,
            'name' => "Hoteles",
            'description' => "Ropa de cama, de baño, mantelerías... Todo en téxtil para hoteles, hostales, casas rurales, restaurantes... Ropa laboral: ropa sanitaria, de hostelería, estética, colegial...",
        ]);
    }
}
