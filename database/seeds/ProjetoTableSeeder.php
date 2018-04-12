<?php

use Illuminate\Database\Seeder;

class ProjetoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projetos')->insert([
            'nome' => 'LOT. CAMPO VERDE - SANTA RITA DO SAPUCAÍ',
            'cliente' => 'H-BENS',
            'executora_id' => 1, 
            'departamento_id' => 3, 
            'data_inicio' => '2015-03-12',
        ]);
        DB::table('projetos')->insert([
            'nome' => 'LOT. DA PEDRA',
            'cliente' => 'MARCOS CHAVES',
            'executora_id' => 1, 
            'departamento_id' => 3, 
            'data_inicio' => '2015-12-07',
        ]);
        DB::table('projetos')->insert([
            'nome' => 'GERDAU',
            'cliente' => 'ARCADIS',
            'executora_id' => 1, 
            'departamento_id' => 3, 
            'data_inicio' => '2016-01-29',
        ]);
        DB::table('projetos')->insert([
            'nome' => 'LOT. JD. TAMOIO',
            'cliente' => 'FUMAS',
            'executora_id' => 1, 
            'departamento_id' => 3, 
            'data_inicio' => '2016-06-13',
        ]);
        DB::table('projetos')->insert([
            'nome' => 'LOT. PILAR DO SUL',
            'cliente' => 'BRESSIANO BORDÃO CONSTRUTORA',
            'executora_id' => 1, 
            'departamento_id' => 3, 
            'data_inicio' => '2016-10-18',
        ]);
        DB::table('projetos')->insert([
            'nome' => 'LOT. ESTUDOS DE VIABILIDADE',
            'cliente' => 'FERNANDO RIGOTO',
            'executora_id' => 1, 
            'departamento_id' => 3, 
            'data_inicio' => '2017-11-13',
        ]);
        DB::table('projetos')->insert([
            'nome' => 'LOT. SANTA RITA DO SAPUCAÍ',
            'cliente' => 'MEL',
            'executora_id' => 1, 
            'departamento_id' => 3, 
            'data_inicio' => '2017-01-05',
        ]);
        
        DB::table('projetos')->insert([
            'nome' => 'LOT. ABASTECIMENTO DE ÁGUA - ÁGUAS DA PRATA',
            'cliente' => 'SEQUOIA',
            'executora_id' => 1, 
            'departamento_id' => 3, 
            'data_inicio' => '2017-03-02',
        ]);
        
        DB::table('projetos')->insert([
            'cliente' => 'F. PAIVA',
            'nome' => 'ACESSO LOTEAMENTO RECANTO REAL',
            'executora_id' => 1, 
            'departamento_id' => 3, 
            'data_inicio' => '2017-03-15',
        ]);
        
        DB::table('projetos')->insert([
            'cliente' => 'ADFM',
            'nome' => 'PROJETO DE IMPLANTAÇÃO - DISTRITO EMPRESARIAL ITAJUBÁ',
            'executora_id' => 1, 
            'departamento_id' => 3, 
            'data_inicio' => '2017-04-01',
        ]);
        
        DB::table('projetos')->insert([
            'cliente' => 'HELOISA',
            'nome' => 'AVALIAÇÃO ESTRUTURAL - MURO DE ARRIMO',
            'executora_id' => 1, 
            'departamento_id' => 3, 
            'data_inicio' => '2017-05-10',
        ]);
        DB::table('projetos')->insert([
            'cliente' => 'CONSTRUTORA RIBEIRO',
            'nome' => 'ACESSO LOTEAMENTO OURO VERDE',
            'executora_id' => 1, 
            'departamento_id' => 3, 
            'data_inicio' => '2017-05-27',
        ]);
        DB::table('projetos')->insert([
            'cliente' => 'LUIS CALIXTO',
            'nome' => 'ACESSO LOTEAMENTO VIVENDA ALEGRE',
            'executora_id' => 1, 
            'departamento_id' => 3, 
            'data_inicio' => '2017-07-04',
        ]);
        DB::table('projetos')->insert([
            'cliente' => 'PM POUSO ALEGRE',
            'nome' => 'AVALIAÇÃO ESTRUTURAL - ESCOLA FAISQUEIRA',
            'executora_id' => 3, 
            'departamento_id' => 3, 
            'data_inicio' => '2017-07-18',
        ]);
        DB::table('projetos')->insert([
            'cliente' => 'ARCADIS',
            'nome' => 'MAPEAMENTO AÉREO GM S. J. CAMPOS',
            'executora_id' => 1, 
            'departamento_id' => 3, 
            'data_inicio' => '2017-08-21',
        ]);
        DB::table('projetos')->insert([
            'cliente' => 'RENOBRAX
',
            'nome' => 'ANÁLISE DE TERRAPLENAGEM',
            'executora_id' => 1, 
            'departamento_id' => 3, 
            'data_inicio' => '2017-12-01',
        ]);
        DB::table('projetos')->insert([
            'cliente' => 'PM POUSO ALEGRE',
            'nome' => 'INPLANTAÇÕES DE VIAS',
            'executora_id' => 3, 
            'departamento_id' => 3, 
            'data_inicio' => '2017-08-16',
        ]);
        DB::table('projetos')->insert([
            'cliente' => 'PM DE PARAGUAÇU',
            'nome' => 'POLICLÍNICA MUNICIPAL',
            'executora_id' => 2, 
            'departamento_id' => 3, 
            'data_inicio' => '2017-09-01',
        ]);
        DB::table('projetos')->insert([
            'cliente' => 'RYZA',
            'nome' => 'BARRAQUINHAS',
            'executora_id' => 1, 
            'departamento_id' => 3, 
            'data_inicio' => '2017-09-01',
        ]);

        DB::table('projetos')->insert([
            'cliente' => 'MEL',
            'nome' => 'VALE DAS HORTÃŠNCIAS',
            'executora_id' => 1, 
            'departamento_id' => 3, 
            'data_inicio' => '2017-09-14',
        ]);

        DB::table('projetos')->insert([
            'cliente' => 'MATHEUS',
            'nome' => 'LOT. INDUSTRIAL DA USINA',
            'executora_id' => 1, 
            'departamento_id' => 3, 
            'data_inicio' => '2017-10-06',
        ]);

        DB::table('projetos')->insert([
            'cliente' => 'EDP',
            'nome' => 'ACESSO A EDT JUQUEY',
            'executora_id' => 1, 
            'departamento_id' => 3, 
            'data_inicio' => '2017-11-06',
        ]);

        DB::table('projetos')->insert([
            'cliente' => 'ACG DO BRASIL',
            'nome' => 'IMPLANTAÇÃO DE VIA DE ACESSO',
            'executora_id' => 2, 
            'departamento_id' => 3, 
            'data_inicio' => '2018-01-16',
        ]);

        DB::table('projetos')->insert([
            'cliente' => 'UNIFEI',
            'nome' => 'LABORATÓRIOS',
            'executora_id' => 2, 
            'departamento_id' => 3, 
            'data_inicio' => '2018-01-25',
        ]);

        DB::table('projetos')->insert([
            'cliente' => 'PM DE SERRANIA',
            'nome' => 'PRO TRANSPORTE',
            'executora_id' => 2, 
            'departamento_id' => 6, 
            'data_inicio' => '2017-08-25',
        ]);

        DB::table('projetos')->insert([
            'cliente' => 'CASA DE APOIO',
            'nome' => 'ESTUDO DE TERRAPLENAGEM',
            'executora_id' => 1, 
            'departamento_id' => 3,
            'data_inicio' => '2018-02-01',
        ]);

        DB::table('projetos')->insert([
            'cliente' => 'VECCON MORADAS POUSO ALEGRE',
            'nome' => 'VECCON',
            'executora_id' => 1, 
            'departamento_id' => 3,
            'data_inicio' => '2014-07-09',
        ]);

        DB::table('projetos')->insert([
            'cliente' => 'VECCON MORADAS MOGI MIRIM - SIMMCON',
            'nome' => 'VECCON',
            'executora_id' => 1, 
            'departamento_id' => 3,
            'data_inicio' => '2015-04-07',
        ]);
        DB::table('projetos')->insert([
            'cliente' => 'PM DE ITAJUBÁ',
            'nome' => 'SINALIZAÇÃO',
            'executora_id' => 2, 
            'departamento_id' => 3,
            'data_inicio' => '2018-02-01',
        ]);
        DB::table('projetos')->insert([
            'cliente' => 'CIMASAS',
            'nome' => 'PMSB',
            'executora_id' => 2, 
            'departamento_id' => 5,
            'data_inicio' => '2014-03-31',
        ]);
        DB::table('projetos')->insert([
            'cliente' => 'PM ITAMONTE',
            'nome' => 'RECADASTRAMENTO IMOBILIÁRIO',
            'executora_id' => 3, 
            'departamento_id' => 5,
            'data_inicio' => '2017-08-01',
        ]);
        DB::table('projetos')->insert([
            'cliente' => 'SKY EMPREENDIMENTOS',
            'nome' => 'DESASSOREAMENTO MEIO AMBIENTE',
            'executora_id' => 1, 
            'departamento_id' => 5,
            'data_inicio' => '2016-10-18',
        ]);
        DB::table('projetos')->insert([
            'cliente' => 'MEL',
            'nome' => 'EIA-EIU SANTA RITA',
            'executora_id' => 1, 
            'departamento_id' => 5,
            'data_inicio' => '2017-11-01',
        ]);
        DB::table('projetos')->insert([
            'cliente' => 'ADFM',
            'nome' => 'EIA-RIMA DISTRITO EMPRESARIAL ITAJUBÃ',
            'executora_id' => 1, 
            'departamento_id' => 5,
            'data_inicio' => '2017-11-07',
        ]);
        DB::table('projetos')->insert([
            'cliente' => 'PM PARAGUAÇU',
            'nome' => 'PLANO DIRETOR',
            'executora_id' => 2, 
            'departamento_id' => 6,
            'data_inicio' => '2017-09-01',
        ]);
        DB::table('projetos')->insert([
            'cliente' => 'FUNDAÇÃO ROGÊ',
            'nome' => 'PCH BALSA DA CACHOEIRA',
            'executora_id' => 1, 
            'departamento_id' => 5,
            'data_inicio' => '2017-11-14',
        ]);
        DB::table('projetos')->insert([
            'cliente' => 'EDP JUQUEY',
            'nome' => 'DESCARACTERIZAÇÃO DE NASCENTE',
            'executora_id' => 1, 
            'departamento_id' => 5,
            'data_inicio' => '2018-01-03',
        ]);
        DB::table('projetos')->insert([
            'cliente' => 'FERNANDO',
            'nome' => 'ARBORIZAÇÃO PRAÇA S. J. ALEGRE',
            'executora_id' => 1, 
            'departamento_id' => 5,
            'data_inicio' => '2017-11-17',
        ]);
        DB::table('projetos')->insert([
            'cliente' => 'ACG DO BRASIL',
            'nome' => 'LICENCIAMENTO AMBIENTAL',
            'executora_id' => 2, 
            'departamento_id' => 5,
            'data_inicio' => '2018-01-09',
        ]);
        DB::table('projetos')->insert([
            'cliente' => 'PM SERRANIA',
            'nome' => 'CARTAS CONSULTA MINISTÉRIO DAS CIDADES',
            'executora_id' => 2, 
            'departamento_id' => 6,
            'data_inicio' => '2017-08-25',
        ]);
        DB::table('projetos')->insert([
            'cliente' => 'PM POUSO ALEGRE',
            'nome' => 'CARTAS CONSULTA - MOBILIDADE URBANA',
            'executora_id' => 2, 
            'departamento_id' => 6,
            'data_inicio' => '2018-01-22',
        ]);
        DB::table('projetos')->insert([
            'cliente' => 'PM POUSO ALEGRE',
            'nome' => 'CARTAS CONSULTA - DRENAGEM URBANA',
            'executora_id' => 2, 
            'departamento_id' => 6,
            'data_inicio' => '2018-02-15',
        ]);

        DB::table('projetos')->insert([
            'cliente' => 'PM LAMBARI',
            'nome' => 'CGH LAGO',
            'executora_id' => 2, 
            'departamento_id' => 4,
            'data_inicio' => '2017-07-01',
        ]);
        DB::table('projetos')->insert([
            'cliente' => 'IDEIAS SOLAR',
            'nome' => 'FAZENDA SOLAR CACHOEIRA PAULISTA',
            'executora_id' => 2, 
            'departamento_id' => 4,
            'data_inicio' => '2017-10-23',
        ]);
        DB::table('projetos')->insert([
            'cliente' => 'SAYEGH LAGE ENGENHARIA',
            'nome' => 'USINAS CGH - RONDÔNIA',
            'executora_id' => 2, 
            'departamento_id' => 4,
            'data_inicio' => '2018-01-03',
        ]);
        DB::table('projetos')->insert([
            'cliente' => 'L&M ENGENHARIA',
            'nome' => 'ESTUDO DE GARANTIA FISICA',
            'executora_id' => 2, 
            'departamento_id' => 4,
            'data_inicio' => '2018-01-15',
        ]);
    }
}
