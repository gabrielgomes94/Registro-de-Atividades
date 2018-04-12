<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
        <link rel="stylesheet" href="css/app.css">
        <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="js/app.js"></script>
    </head>
    <body>
        <!-- Uses a header that scrolls with the text, rather than staying
          locked at the top -->
        <div class="mdl-layout mdl-js-layout">
            <header class="mdl-layout__header mdl-layout__header--scroll">
                <div class="mdl-layout__header-row">
                    <!-- Title -->
                    <span class="mdl-layout-title">DAC - Registro de Atividades</span>
                        <!-- Add spacer, to align navigation to the right -->
                    <div class="mdl-layout-spacer"></div>
                    <!-- Navigation -->
                    <nav class="mdl-navigation">
                        {{-- <a class="mdl-navigation__link" href="">Link</a> --}}                        
                    </nav>
                </div>
            </header>
            <div class="mdl-layout__drawer">
                <span class="mdl-layout-title">Title</span>
                <nav class="mdl-navigation">
                    {{-- <a class="mdl-navigation__link" href="">Link</a> --}}                    
                </nav>
            </div>
            <main class="mdl-layout__content">
                <div class="page-content">
                    <!-- Your content goes here -->
                    <div class="mdl-grid">
                        <div class="mdl-cell mdl-cell--2-col"></div>
                        <div class="mdl-cell mdl-cell--8-col">
                            <div class="lista-atividades">
                                <div class="filtros">
                                    <form id="form__filtro--atividades" method="GET" action="/atividadesColaborador">
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form__filtro">
                                            <select id="form__filtro--ano" 
                                                name="ano" 
                                                class="mdl-textfield__input form__filtro--ano"
                                                form="form__filtro--atividades">                                    
                                                    
                                            </select>
                                            <label class="mdl-textfield__label" for="form__filtro--ano">Ano</label>
                                        </div>

                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form__filtro">
                                            <select id="form__filtro--mes" 
                                                name="mes" 
                                                class="mdl-textfield__input form__filtro--mes"
                                                form="form__filtro--atividades">                                    
                                                    <option value="1">Janeiro</option>
                                                    <option value="2">Fevereiro</option>
                                                    <option value="3">Março</option>
                                                    <option value="4">Abril</option>
                                                    <option value="5">Maio</option>
                                                    <option value="6">Junho</option>
                                                    <option value="7">Julho</option>
                                                    <option value="8">Agosto</option>
                                                    <option value="9">Setembro</option>
                                                    <option value="10">Outubro</option>
                                                    <option value="11">Novembro</option>
                                                    <option value="12">Dezembro</option>
                                            </select>
                                            <label class="mdl-textfield__label" for="form__filtro--mes">Mês</label>
                                        </div>

                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form__colaborador">
                                            <select id="form__filtro--colaborador"
                                                name="colaborador"
                                                class="mdl-textfield__input form__filtro--colaborador"
                                                form="form__filtro--atividades">

                                                <option value=""> </option>
                                                @foreach($colaboradores as $colaborador)
                                                    <option value="{{ $colaborador->id }}"> {{ $colaborador->nome }} </option>
                                                @endforeach
                                            </select>
                                            <label class="mdl-textfield__label" for="form__filtro--colaborador">Colaborador</label>
                                        </div>


                                        <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored botao--filtro" type="submit"> Filtrar
                                        </button>
                                    </form>
                                </div>

                                <div class="mdl-card mdl-shadow--2dp card__tabela">
                                    <table class="mdl-data-table mdl-js-data-table tabela__atividades">
                                        <thead>
                                            <tr>
                                                <th class="mdl-data-table__cell--non-numeric">Dia</th>
                                                <th class="mdl-data-table__cell--non-numeric">Colaborador</th>
                                                <th class="mdl-data-table__cell--non-numeric">Projeto</th>
                                                <th>Horas</th>
                                            </tr>
                                        </thead> 
                                        <tbody>
                                        
                                            @foreach($atividades as $atividade)
                                                <tr>

                                                    <td class="mdl-data-table__cell--non-numeric">{{ $atividade->data }}</td>
                                                    <td class="mdl-data-table__cell--non-numeric">{{ $atividade->colaborador->nome}}</td>
                                                    <td class="mdl-data-table__cell--non-numeric">{{ $atividade->projeto->nome }}</td>
                                                    <td>{{ $atividade->horas }}</td>
                                                </tr>
                                            @endforeach                        
                                            
                                        </tbody>
                                        <tfoot>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td class="tabela__atividades--total-horas">
                                                Total de horas: {{ $atividades->pluck('horas')->sum() }}
                                            </td>
                                        </tfoot>
                                    </table>
                                </div>

                                <div class="atividade__form">

                                    <form method="POST" action="/atividade">
                                        @csrf

                                        <div class="mdl-grid">
                                            <div class="mdl-cell mdl-cell--3-col">
                                                <div class="select-data--wrapper">
                                                    <label class="select-data--label">Data</label>
                                                    <input type="date" name="data" min="2017-12-31" id="select-data">
                                                </div>                                                
                                            </div>
                                            <div class="mdl-cell mdl-cell--2-col">
                                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                                    <select id="select-colaborador" 
                                                        name="colaborador" 
                                                        class="mdl-textfield__input">
                                                        @foreach($colaboradores as $colaborador)
                                                        <option value="{{ $colaborador->id }}">{{ $colaborador->nome }}</option>
                                                        @endforeach
                                                    </select>
                                                    <label class="mdl-textfield__label" for="select-colaborador">Colaborador</label>
                                                </div>      
                                            </div>
                                            <div class="mdl-cell mdl-cell--2-col">
                                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                                    <select id="select-departamento" 
                                                        name="departamento" 
                                                        class="mdl-textfield__input select-departamento">
                                                        @foreach($departamentos as $departamento)
                                                        <option value="{{ $departamento->id }}">{{ $departamento->nome }}</option>
                                                        @endforeach
                                                    </select>
                                                    <label class="mdl-textfield__label" for="select-departamento">Departamento</label>
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--2-col">
                                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                                    <select id="select-projeto" 
                                                        name="projeto" 
                                                        class="mdl-textfield__input select-projeto">
                                                        
                                                    </select>
                                                    <label class="mdl-textfield__label" for="select-projeto">Projeto</label>
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--2-col">
                                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                                    <input class="mdl-textfield__input" type="number" pattern="-?[0-9]*(\.[0-9]+)?" 
                                                        id="horas" name="horas">
                                                    <label class="mdl-textfield__label" for="horas">Horas</label>
                                                    <span class="mdl-textfield__error">Input is not a number!</span>
                                                </div>        
                                            </div>
                                            <div class="mdl-cell mdl-cell--1-col">
                                                <button class="mdl-button mdl-js-button mdl-button--icon mdl-button--colored submit__form-registro">
                                                    <i class="material-icons">send</i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="mdl-cell mdl-cell--2-col"></div>
                    </div>
                </div>
                                        <button class="mdl-button mdl-js-button mdl-button--fab mdl-button--colored js-atividade--add button__adicionar-atividade" type="submit">
                                            <i class="material-icons">add</i>
                                        </button>
            </main>
        </div>
    </body>

</html>
