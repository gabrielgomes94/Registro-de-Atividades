<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Atividade extends Model
{
    protected $fillable = ['nome', 'projeto_id', 'colaborador_id', 'data', 'horas'];

   	protected $table = 'atividades';

   	public $timestamps = false;

   	public function colaborador(){
    	return $this->belongsTo('App\Colaborador');
    }

    public function projeto(){
    	return $this->belongsTo('App\Projeto');
    }
}
