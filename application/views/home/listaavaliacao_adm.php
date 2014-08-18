<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE9">
    <meta http-equiv="Content-Language" content="pt-br">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>SEMEC Avaliação</title>
    <meta name="generator" content="WYSIWYG Web Builder 9 - http://www.wysiwygwebbuilder.com">
    <link href="<?php echo URL; ?>/public/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo URL; ?>/public/css/jquery-ui.css"/>
    <link rel="stylesheet" href="<?php echo URL; ?>/public/css/bootstrap-theme.min.css">
    <link href="<?php echo URL; ?>/public/css/jquery.dataTables.css" type="text/css" rel="stylesheet">
    <link href="<?php echo URL; ?>/public/img/teresina.jpeg" rel="shortcut icon">
    <link href="<?php echo URL; ?>/public/css/tokenfield-typeahead.min.css" type="text/css" rel="stylesheet">
    <link href="<?php echo URL; ?>/public/css/bootstrap-tokenfield.min.css" type="text/css" rel="stylesheet">
    <link href="<?php echo URL; ?>/public/css/dataTables.tableTools.min.css" type="text/css" rel="stylesheet">
    <link href="<?php echo URL; ?>/public/css/listaavaliacao_adm.min.css" type="text/css" rel="stylesheet">
</head>

<body>

<div id="Layer2"
     style="position:absolute;text-align:left;left:0px;top:84px;width:100%;min-width:994px;height:82px;z-index:19;"
     title="">
    <div id="wb_LoginName1" style="position:absolute;left:6px;top:33px;width:320px;height:18px;z-index:14;">
        <span id="LoginName1">Bem vindo(a) <?php
            if (isset($_SESSION['fullname'])) {
                echo $_SESSION['fullname'];
            } else {
                echo 'Não esta logado';
            }?>!
        </span>
        <input id="matriculausuario" name="matriculausuario" type="hidden" value="<?php echo $_SESSION['matricula'] ?>">
    </div>
</div>

<!--<div id="Layer3"
     style="position:absolute;overflow:auto;text-align:left;left:0px;top:634px;width:100%;min-width:994px;height:161px;z-index:20;"
     class="col-md-12 column" class="row">
</div>-->
<div class="modal modalloading"><!-- Place at bottom of page --></div>
<!--####################################### modal edita gabarito prova ##############################################################-->
<div class="modal fade" id="modalalteragabarito">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    &times;</button>
                <h4 class="modal-title">Alterar gabarito</h4>
            </div>
            <div class="modal-body">
                <!-- ######################### mesma forma que ocorre no cadastrar prova ###################################################### -->
                <form id="criargabarito" method="post">
                    <!-- Select Basic -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="selectquestao">Estilo de questão </label>

                        <div class="col-md-4">
                            <select id="selectquestao" name="selectquestao" class="form-control">
                                <option value="1">de A a E</option>
                                <option value="2">de A a D</option>
                                <option value="3">V ou F</option>
                                <option value="4">numérico</option>
                            </select>
                        </div>
                    </div>
                    <table id="alterarlistagabarito" class="table table-striped">
                        <thead>
                        <tr>
                            <th></th>
                            <th>Questão</th>
                            <th>Alternativa</th>

                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                    <!–Irá armazenar a quantidade de linhas–>
                    <input id="total" type="hidden" value="1" name="Alternativa"/>
                    <!--<a href="#" id="enviar">enviar</a>-->

                </form>
            </div>
            <div class="modal-footer">

                <button data-dismiss='modal' aria-hidden='true' class='btn btn-danger'>Cancelar
                </button>
                <button data-dismiss='modal' aria-hidden='true' id="editaprova" class='btn btn-warning'>Alterar
                </button>

            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<!--################################## modal editar prova ################################################################-->
<div class="modal fade" id="modaleditar">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
        &times;</button>
    <h4 class="modal-title">Alterar prova</h4>
</div>
<div class="modal-body">
<div class="row container-fluid">
<!-- ######################### mesma forma que ocorre no cadastrar prova ########################################################## -->
<form id="editarprova" method="post" action="/listaavaliacao_adm/gabaritoprova">


<div id="wb_FormConf">

<form class="form-horizontal" method="post"
      enctype="text/plain" id="Form-horizontal">
<fieldset>

    <!-- Form Name -->

    <div class="alert alert-danger alert-dismissable" id="diverror1">
        <input type='text' id='error1' name="error" value='' style="width:80em" autocomplete='off'>
    </div>
    <!-- Textarea -->
    <div class="form-group">
        <label class="col-md-4 control-label" for="textdescricao">Descrição da avaliação</label>

        <div class="col-md-6">
            <textarea class="form-control" id="textdescricao" name="textdescricao"></textarea>
        </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
        <label class="col-md-4 control-label" for="inputnumero">Número da avaliação</label>

        <div class="col-md-2">
            <input id="inputnumero" name="inputnumero" type="text" placeholder=""
                   class="form-control input-md" required="">

        </div>
    </div>

    <!-- Select Basic -->
    <div class="form-group">
        <label class="col-md-4 control-label" for="tipodeprova">Tipo de prova</label>

        <div class="col-md-4">
            <select id="tipodeprova" name="tipodeprova" class="form-control">
                <option value="1"></option>
                <option value="2">Interna</option>
                <option value="3">Externa</option>
            </select>
            <span class="help-block">(Selecione se a prova é interna ou externa à rede de ensino)</span>
        </div>
    </div>
    <!-- Text input-->
    <div class="form-group">
        <label class="col-md-4 control-label" for="inputano">Ano</label>

        <div class="col-md-4">
            <input id="inputano" name="inputano" type="text" placeholder="" class="form-control input-md">
            <span class="help-block">(ano de aplicação da prova)</span>
        </div>
    </div>
</fieldset>
<div id="progmat">
    <fieldset>
        <div class="form-group">
            <label class="col-md-4 control-label" for="tokenfield-anoserie">Ano/Série</label>

            <div class="col-md-6">

                <input type="text" class="input-xxlarge" id="tokenfield-anoserie"
                       placeholder="Selecione as séries desejadas"/>

            </div>
        </div>
        <div class="form-group">
            <label class="col-md-4 control-label" for="tokenfield-programa">Programa</label>

            <div class="col-md-5">

                <input type="text" class="input-xlarge" id="tokenfield-programa"
                       placeholder="Selecione o programa da prova"/>

            </div>
            <div class="btn-group">
                <button id="novoprograma" type="button" class="btn btn-success glyphicon glyphicon-plus">
                </button>
                <button id="editaprograma" type="button"
                        class="btn btn-warning  glyphicon glyphicon-pencil">
                </button>
                <button id="excluiprograma" type="button"
                        class="btn btn-danger  glyphicon glyphicon-remove-circle">
                </button>
            </div>

        </div>
        <!--################################# cadastrar progragra #####################################-->
        <div id="cadPrograma" class="form-group">
            <label class="col-md-4 control-label" for="inputprograma">Novo Programa</label>

            <div class="col-md-6">
                <div class="input-group">
                    <input id="inputprograma" type="text" class="form-control input-xxlarge"
                           placeholder="Digite o programa da prova"/>

                    <div class="input-group-btn">
                        <button id="cadastrarprograma" type="button"
                                class="programa btn btn-success dropdown-toggle"
                                data-toggle="dropdown">
                            Cadastrar
                        </button>
                    </div>

                </div>
            </div>
        </div>
        <!--################################# editar progragra #####################################-->
        <div id="edPrograma" class="form-group">
            <label class="col-md-4 control-label" for="inputprograma">Editar Programa</label>

            <div class="col-md-2">
                <input id="inputedprogramaid" type="text" class="form-control input-md" disabled/>
            </div>
            <div class="col-md-6">
                <div class="input-group">
                    <input id="inputedprograma" type="text" class="form-control input-xxlarge"
                           placeholder="Digite o programa da prova"/>

                    <div class="input-group-btn">
                        <button id="editarprograma" type="button"
                                class="programa btn btn-warning dropdown-toggle"
                                data-toggle="dropdown">
                            Editar
                        </button>
                    </div>

                </div>
            </div>
        </div>
        <!-- Button Drop Down -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="tokenfield-materia">Matéria</label>

            <div class="col-md-5">

                <input class="input-xlarge" id="tokenfield-materia"
                       placeholder="Selecione a materia" type="text">

            </div>
            <div class="btn-group">
                <button id="novamateria" type="button" class="btn btn-success glyphicon glyphicon-plus">
                </button>
                <button id="editamateria" type="button"
                        class="btn btn-warning glyphicon glyphicon-pencil">
                </button>
                <button id="excluimateria" type="button"
                        class="btn btn-danger glyphicon glyphicon-remove-circle">

                </button>
            </div>

        </div>
        <!--################################# cadastrar Materia #####################################-->
        <div id="cadMateria" class="form-group">
            <label class="col-md-4 control-label" for="inputmateria">Nova matéria</label>

            <div class="col-md-6">
                <div class="input-group">
                    <input id="inputmateria" type="text" class="form-control input-xxlarge"
                           placeholder="Digite a matéria da prova"/>

                    <div class="input-group-btn">
                        <button id="cadastrarmateria" data-dismiss='modal' aria-hidden='true' type="button"
                                class="materia btn btn-success dropdown-toggle"
                                data-toggle="dropdown">
                            Cadastrar
                        </button>
                    </div>

                </div>
            </div>
        </div>

        <!--################################# editar Materia #####################################-->
        <div id="edMateria" class="form-group">
            <label class="col-md-4 control-label" for="inputmateria">Alterar matéria</label>


            <div class="col-md-2">
                <input id="inputedmateriaid" type="text" class="form-control input-md" disabled/>
            </div>
            <div class="col-md-6">
                <div class="input-group">

                    <input id="inputedmateria" type="text" class="form-control input-xxlarge"
                           placeholder="Digite a matéria da prova"/>

                    <div class="input-group-btn">
                        <button id="editarmateria" data-dismiss='modal' aria-hidden='true' type="button"
                                class="materia btn btn-warning dropdown-toggle"
                                data-toggle="dropdown">
                            Editar
                        </button>
                    </div>

                </div>
            </div>
        </div>
        <!-- Button -->
        <div class="form-group">
            <label class="col-md-4 control-label"></label>

            <div class="col-md-4">

                <button type="submit" aria-hidden="true" name="singlebutton1"
                        class="buttoneditar1 btn btn-warning glyphicon glyphicon-pencil">
                    Alterar
                </button>

            </div>
        </div>

    </fieldset>
</div>

</form>


</div>

</form>
</div>
</div>
<div class="modal-footer">

    <button class='btn btn-danger' data-dismiss="modal" aria-hidden="true">Cancelar</button>

</div>
</div>
<!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
<!-- Modal -->
</div>
<!--####################################### modal gabarito prova ##############################################################-->
<div class="modal fade" id="modalgabarito">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    &times;</button>
                <h4 class="modal-title">Criar gabarito</h4>
            </div>
            <div class="modal-body">
                <!-- ######################### mesma forma que ocorre no cadastrar prova ###################################################### -->
                <form id="criargabarito" method="post">
                    <!-- Select Basic -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="selectquestao">Estilo de questão </label>

                        <div class="col-md-4">
                            <select id="selectquestao" name="selectquestao" class="form-control">
                                <option value="1">de A a E</option>
                                <option value="2">de A a D</option>
                                <option value="3">V ou F</option>
                                <option value="4">numérico</option>
                            </select>
                        </div>
                    </div>
                    <table id="listagabarito" class="table table-striped">
                        <thead>
                        <tr>
                            <th>Questão</th>
                            <th>Alternativa</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                    <!–Irá armazenar a quantidade de linhas–>
                    <input id="total" type="hidden" value="1" name="Alternativa"/>
                    <!--<a href="#" id="enviar">enviar</a>-->
                    <button id="mais" class='btn btn-info glyphicon glyphicon-plus-sign'>Add questão
                    </button>
                    <h3>Atenção: Defina com critério a quantidade de questões da avaliação, após salvar não será
                        possível alterar a quantidade de questões!</h3>
                </form>
            </div>
            <div class="modal-footer">

                <button data-dismiss='modal' aria-hidden='true' class='btn btn-danger'>Cancelar
                </button>
                <button data-dismiss='modal' aria-hidden='true' id="salvaprova" class='btn btn-success'>Salvar
                </button>

            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!--####################################### modal gabarito aluno ##############################################################-->
<div class="modal fade" id="modalgabaritoaluno">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    &times;</button>
                <h4 class="modal-title">Gabarito de aluno p/ turma</h4>
            </div>
            <div class="modal-body">
                <!-- #########################mesma forma que ocorre no cadastrar prova ########################################################## -->
                <form id="criargabarito" method="post">
                    <div class="row container-fluid">

                        <div id="wb_FormLista">

                            <form class="form-horizontal" method="post"
                                  enctype="text/plain" id="Form-horizontal">
                                <fieldset>
                                    <!-- Form Name -->
                                    <!--<legend>Filtrar avaliação</legend>-->
                                    <div class="alert alert-danger alert-dismissable" id="diverror2">
                                        <!--<button type="button" class="close" data-dismiss="alert" aria-hidden="true"
                                                id="alerterror">&times;</button>-->
                                        <input type='text' id='error2' name="error" value='' style="width:80em"
                                               autocomplete='off'>
                                    </div>
                                    <!-- Button Drop Down -->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="tokenfield-zona">Zona</label>

                                        <div class="col-md-6">
                                            <input type="text" class="form-control" id="tokenfield-zona"
                                                   value=""
                                                   placeholder="Selecione as zonas desejadas"/>
                                        </div>
                                    </div>

                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label"
                                               for="tokenfield-escolas">Escolas</label>

                                        <div class="col-md-6">
                                            <input type="text" class="form-control" id="tokenfield-escolas" value=""
                                                   placeholder="Selecione as escolas desejadas"/>
                                            <span class="help-block">(digite o código da escola)</span>
                                        </div>
                                    </div>

                                    <!-- Button Drop Down -->
                                    <div class="form-group">


                                        <div class="col-md-12">
                                            <input type="text" class="form-control" id="tokenfield-escolas-nomes"
                                                   value=""
                                                   placeholder="Lista de escolas"/>
                                        </div>
                                    </div>
                                    <!-- Button Drop Down -->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label"
                                               for="tokenfield-serie">Ano/Série</label>

                                        <div class="col-md-6">

                                            <input type="text" class="form-control" id="tokenfield-serie"
                                                   placeholder="Selecione as séries desejadas"/>

                                        </div>
                                    </div>
                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label " for="tokenfield-turma">Turmas</label>

                                        <div class="col-md-6">

                                            <input type="text" class="form-control" id="tokenfield-turma"
                                                   placeholder="Selecione as turmas desejadas"/>
                                            <span class="help-block">(digite o código da turma)</span>

                                        </div>
                                    </div>

                                    <!-- Button -->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="singlebutton1"></label>

                                        <div class="col-md-4">
                                            <button type="submit" id="buttonfiltrar" name="singlebutton1"
                                                    class="btn btn-info glyphicon glyphicon-search">
                                                Filtrar
                                            </button>
                                        </div>
                                    </div>

                                </fieldset>
                            </form>

                        </div>
                        <div id="wb_FormGabarito">
                            <form class="form-horizontal" method="post"
                                  enctype="text/plain" id="Form-horizontal">
                                <!-- Select Basic -->
                                <fieldset>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="selectano">Ano :</label>

                                        <div class="col-md-5">
                                            <input id="selectano" name="selectano" class="form-control"/>

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="selectescola">Escola :</label>

                                        <div class="col-md-5">
                                            <input id="selectescola" name="selectescola" class="form-control"/>

                                        </div>
                                    </div>

                                    <!-- Select Basic -->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="selectturma">Turma :</label>

                                        <div class="col-md-5">
                                            <select id="selectturma" name="selectturma" class="form-control">
                                            </select>
                                        </div>
                                    </div>
                                    <button id="buscar" class='btn btn-primary'>Buscar
                                    </button>

                                </fieldset>
                                <legend>Preencha as alternativas dos alunos</legend>
                                <!--#####################tabela de gabarito de aluno ##############################################################################-->
                                <table cellpadding="0" cellspacing="0" border="0" id="gabaritarprova"
                                       class="display table table-striped" width="100%">
                                </table>

                            </form>
                        </div>
                    </div>
                </form>

            </div>
            <div class="modal-footer">

                <button data-dismiss='modal' aria-hidden='true' class='btn btn-danger'>Cancelar
                </button>
                <button id="enviarprovaaluno" class='btn btn-success'>OK
                </button>

            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<!--######################################## pagina com lista de provas ##############################################-->
<div id="container">
    <div class="container">
        <div id="wb_FormFiltro" style="position:relative;top:190px;z-index:21;">
            <table id="example" class="display" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Série</th>
                    <th>Teste</th>
                    <th>Tipo</th>
                    <th>Disciplina</th>
                    <th>Prova</th>
                    <th>Alunos/Turmas</th>
                </tr>
                </thead>
            </table>
        </div>
        <div id="Layer1"
             style="position:absolute;overflow:auto;text-align:center;left:0px;top:0px;width:972px;height:68px;z-index:22;"
             title="">
            <div id="Layer1_Container"
                 style="width:972px;position:relative;margin-left:auto;margin-right:auto;text-align:left;">
                <div id="wb_Logout1" style="position:absolute;left:855px;top:9px;width:45px;height:45px;z-index:15;">
                    <form name="logoutform" method="post" action="<?php echo URL; ?>/listaavaliacao_adm/logout"
                          id="logoutform">
                        <input type="hidden" name="form_name" value="logoutform">
                        <input type="image" name="logout" id="logout" src="<?php echo URL; ?>/public/img/logout.gif"/>
                    </form>
                </div>
                <div id="wb_Logout2" style="position:absolute;left:905px;top:19px;width:45px;height:23px;z-index:16;">
                    <form name="logoutform" method="post" action="<?php echo URL; ?>/listaavaliacao_adm/logout"
                          id="logoutform">
                        <input type="hidden" name="form_name" value="logoutform">
                        <input class="logoutform_button" type="submit" name="logout" value="Sair" id="logout"
                               style="width:45px;height:23px;"/>
                    </form>
                </div>
            </div>
        </div>
        <div id="wb_MasterObjects1" style="position:absolute;left:0px;top:84px;width:665px;height:79px;z-index:23;">
            <div id="wb_CssMenu1"
                 style="position:absolute;left:329px;top:3px;width:556px;height:76px;text-align:center;z-index:18;">
                <ul>
                    <li><a href="<?php echo URL; ?>/masterpage_adm" target="_self">Inicio&nbsp;</a></li>
                    <li><a href="<?php echo URL; ?>/cadastroavaliacao_adm" target="_self">Cadastrar
                            avaliação</a>
                    </li>
                    <li class="firstmain"><a class="active" href="#" target="_self">Avaliações</a>
                    </li>
                </ul>
                <br>
            </div>
        </div>
    </div>

</div>
<script type="text/javascript" src="<?php echo URL; ?>/public/js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="<?php echo URL; ?>/public/js/jquery-ui.js"></script>
<script type="text/javascript" src="<?php echo URL; ?>/public/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?php echo URL; ?>/public/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo URL; ?>/public/js/dataTables.bootstrap.js"></script>
<script type="text/javascript" src="<?php echo URL; ?>/public/js/bootstrap-tokenfield.min.js"></script>
<script type="text/javascript" src="<?php echo URL; ?>/public/js/jquery.autotab.js"></script>
<script type="text/javascript" src="<?php echo URL; ?>/public/js/dataTables.tableTools.min.js"></script>
<script type="text/javascript" src="<?php echo URL; ?>/public/js/listaavaliacao_adm.min.js"></script>

</body>

</html>