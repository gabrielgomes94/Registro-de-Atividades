<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call([
	        DepartamentoTableSeeder::class,
            ColaboradorTableSeeder::class,
	        ExecutoraTableSeeder::class,
            ProjetoTableSeeder::class,
	        AtividadeTableSeeder::class,	        
	    ]);
    }
}
