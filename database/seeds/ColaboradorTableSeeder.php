<?php

use Illuminate\Database\Seeder;

class ColaboradorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('colaboradores')->insert([
            'nome' => 'Aloísio Caetano',
            'departamento_id' => 5,
        ]);

        DB::table('colaboradores')->insert([
            'nome' => 'Andréa Faneca',
            'departamento_id' => 5,
        ]);

        DB::table('colaboradores')->insert([
            'nome' => 'Francisco Chicone',
            'departamento_id' => 3,
        ]);

        DB::table('colaboradores')->insert([
            'nome' => 'Cíntia Siqueira',
            'departamento_id' => 1,
        ]);

        DB::table('colaboradores')->insert([
            'nome' => 'Dênis Silva',
            'departamento_id' =>3,
        ]);

        DB::table('colaboradores')->insert([
            'nome' => 'Flávia Barborsa',
            'departamento_id' => 3,
        ]);


        DB::table('colaboradores')->insert([
            'nome' => 'Gabriel Gomes',
            'departamento_id' => 7,
        ]);
    }
}
