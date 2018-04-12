<?php

namespace App\Http\Controllers;

use App\Atividade;
use App\Colaborador;
use App\Departamento;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AtividadeController extends Controller
{
	public function index()
    {
        //$atividades = new Atividade;
        $atividades = collect([]);
        //dd($atividades);
        $colaboradores = Colaborador::all();
        $departamentos = Departamento::all();

        return view('welcome')->with('atividades', $atividades)->with('colaboradores', $colaboradores)->with('departamentos', $departamentos);
    }
    
    public function indexColaborador(Request $request)
    {
    	$colaborador_id = $request['colaborador'];
    	$ano = $request['ano'];
    	$mes = $request['mes'];    	

    	$atividades = Atividade::where('colaborador_id', $colaborador_id)->get();    	
    	
    	$index = 0;
    	foreach($atividades as $atividade){    		
    		
			$atividade_mes = date("m", strtotime($atividade->data));
			$atividade_ano = date("Y", strtotime($atividade->data));
			
			
			if($atividade_mes != $request['mes'] || $atividade_ano != $request['ano']){
				$atividades->pull($index);
			}			
    		
    		$index++;
    	}    	

    	$colaboradores = Colaborador::all();
    	$departamentos = Departamento::all();

    	return view('welcome')->with('atividades', $atividades)->with('colaboradores', $colaboradores)->with('departamentos', $departamentos);

    }

    public function store(Request $request)
    {    	
    	$atividade = new Atividade;

    	$atividade->projeto_id = $request["projeto"];
    	$atividade->colaborador_id = $request["colaborador"];
    	$atividade->data = $request["data"];
    	$atividade->horas = $request["horas"];

    	$atividade->save();

    	return $this->index();
    }
}
