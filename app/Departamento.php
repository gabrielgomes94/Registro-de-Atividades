<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
	protected $table = 'departamentos';

    public function projetos(){
    	return $this->hasMany('App\Projeto');
    }

    public function colaboradores(){
    	return $this->hasMany('App\Colaborador');
    }
}
