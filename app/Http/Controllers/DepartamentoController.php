<?php

namespace App\Http\Controllers;

use App\Projeto;
use Illuminate\Http\Request;

class DepartamentoController extends Controller
{
    public function getProjetos(Request $request){
    	$departamento_id = $request->id;
    	
    	$projetos = Projeto::where('departamento_id', $departamento_id)->get();
    	return $projetos->toJson();
    }
}
