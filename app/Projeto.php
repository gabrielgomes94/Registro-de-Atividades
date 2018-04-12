<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projeto extends Model
{
	protected $table = 'projetos';

	public function departamento(){
    	return $this->belongsTo('App\Departamento');
    }

    public function colaborador(){
    	return $this->belongsToMany('App\Colaborador', 'horas_trabalhadas');
    }
    
    public function atividades(){
    	return $this->hasMany('App\Atividade');
    }
}
