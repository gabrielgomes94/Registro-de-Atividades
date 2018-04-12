<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Colaborador extends Model
{
    protected $fillable = ['id', 'nome'];

    protected $table = 'colaboradores';

    public function departamento(){
    	return $this->belongsTo('App\Departamento');
    }

    public function projetos(){
    	return $this->belongsToMany('App\Projeto', 'atividades');
    }

    public function atividades(){
    	return $this->hasMany('App\Atividade');
    }
}
