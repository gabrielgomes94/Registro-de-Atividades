<?php

use Illuminate\Database\Seeder;

class AtividadeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('atividades')->insert([
            'projeto_id' => 1,
            'colaborador_id' => 7,
            'horas' => 7,
            'data' => '2018-03-13',
        ]);
        
        DB::table('atividades')->insert([
            'projeto_id' => 1,
            'colaborador_id' => 7,
            'horas' => 2,
            'data' => '2018-03-14',
        ]);

        DB::table('atividades')->insert([
            'projeto_id' => 1,
            'colaborador_id' => 7,
            'horas' => 5,
            'data' => '2018-03-15',
        ]);
    }
}
