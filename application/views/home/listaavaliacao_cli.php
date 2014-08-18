<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
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
<link href="<?php echo URL; ?>/public/css/tokenfield-typeahead.css" type="text/css" rel="stylesheet">
<link href="<?php echo URL; ?>/public/css/bootstrap-tokenfield.css" type="text/css" rel="stylesheet">
<link href="<?php echo URL; ?>/public/css/listaavaliacao_cli.min.css" type="text/css" rel="stylesheet">

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
            <input type="hidden" id="lotacaoservidor" name="lotacaoservidor" value="<?php echo $_SESSION['lotacao'];?>" class="form-control"/>
         <input id="matriculausuario" name="matriculausuario" type="hidden" value="<?php echo $_SESSION['matricula'] ?>">
       </span>
    </div>
</div>

<!--<div id="Layer3"
     style="position:absolute;overflow:auto;text-align:left;left:0px;top:634px;width:100%;min-width:994px;height:161px;z-index:20;"
     class="col-md-12 column" class="row">
</div>-->
<div class="modal modalloading"><!-- Place at bottom of page --></div>
<!--####################################### modal gabarito aluno ##############################################################-->
<div class="modal fade [modal-fill-height] [modal-grids-14]" id="modalgabaritoaluno">
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
                        <div id="wb_FormGabarito">
                            <form class="form-horizontal" method="post"
                                  enctype="text/plain" id="Form-horizontal">
                                <!-- Select Basic -->
                                <fieldset>
                                    <div class="alert alert-danger alert-dismissable" id="diverror2">
                                        <!--<button type="button" class="close" data-dismiss="alert" aria-hidden="true"
                                                id="alerterror">&times;</button>-->
                                        <input type='text' id='error2' name="error" value='' style="width:20em"
                                               autocomplete='off'>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="selectano">Ano :</label>

                                        <div class="col-md-5">
                                            <input id="selectano" name="selectano" class="form-control"/>

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="selectescola">Escola :</label>

                                        <div class="col-md-5">
                                            <input id="selectescola" disabled name="selectescola" class="form-control"/>

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
                                    <!--<thead>
                                    ####cabeçalho criado em javascript #######
                                    </thead>
                                    <tbody>
                                    ####corpo criado em javascript ########
                                    </tbody>-->
                                </table>

                            </form>
                        </div>
                    </div>
                </form>

            </div>
            <div class="modal-footer">

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
        <div id="wb_FormFiltro" style="position:relative;top:170px;z-index:21;">
            <table id="example" class="display" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Série</th>
                    <th>Teste</th>
                    <th>Tipo</th>
                    <th>Disciplina</th>
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
                    <form name="logoutform" method="post" action="<?php echo URL; ?>/listaavaliacao_cli/logout"
                          id="logoutform">
                        <input type="hidden" name="form_name" value="logoutform">
                        <input type="image" name="logout" id="logout" src="<?php echo URL; ?>/public/img/logout.gif"/>
                    </form>
                </div>
                <div id="wb_Logout2" style="position:absolute;left:905px;top:19px;width:45px;height:23px;z-index:16;">
                    <form name="logoutform" method="post" action="<?php echo URL; ?>/listaavaliacao_cli/logout"
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
                    <li><a href="<?php echo URL; ?>/masterpage_cli" target="_self">Inicio&nbsp;</a></li>

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
<script type="text/javascript" src="<?php echo URL; ?>/public/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="<?php echo URL; ?>/public/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo URL; ?>/public/js/dataTables.bootstrap.js"></script>
<script type="text/javascript" src="<?php echo URL; ?>/public/js/jquery.autotab.js"></script>
<script type="text/javascript" src="<?php echo URL; ?>/public/js/bootstrap-tokenfield.js"></script>
<script type="text/javascript" src="<?php echo URL; ?>/public/js/listaavaliacao_cli.min.js"></script>

</body>
</html>