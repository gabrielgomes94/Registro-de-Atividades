<?php

use Illuminate\Database\Seeder;

class ExecutoraTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('executoras')->insert([
            'nome' => 'DAC ENGENHARIA',
        ]);

        DB::table('executoras')->insert([
            'nome' => 'FAPEPE',
        ]);

        DB::table('executoras')->insert([
            'nome' => 'FUPAI',
        ]);
    }
}
