<?php

use Illuminate\Database\Seeder;

class DepartamentoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departamentos')->insert([
            'nome' => 'Administrativo',
        ]);

        DB::table('departamentos')->insert([
            'nome' => 'Comercial',
        ]);

        DB::table('departamentos')->insert([
            'nome' => 'Infraestrutura',
        ]);

        DB::table('departamentos')->insert([
            'nome' => 'Energia',
        ]);

        DB::table('departamentos')->insert([
            'nome' => 'Meio Ambiente',
        ]);

        DB::table('departamentos')->insert([
            'nome' => 'Planejamento',
        ]);
        DB::table('departamentos')->insert([
            'nome' => 'TI',
        ]);
    }
}
