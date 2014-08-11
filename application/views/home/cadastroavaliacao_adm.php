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
<link href="<?php echo URL; ?>/public/img/teresina.jpeg" rel="shortcut icon">
<link href="<?php echo URL; ?>/public/css/tokenfield-typeahead.css" type="text/css" rel="stylesheet">
<link href="<?php echo URL; ?>/public/css/bootstrap-tokenfield.css" type="text/css" rel="stylesheet">
<link href="<?php echo URL; ?>/public/css/cadastroavaliacao_adm.min.css" type="text/css" rel="stylesheet">
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
    </div>
    <input id="matriculausuario" name="matriculausuario" type="hidden" value="<?php echo $_SESSION['matricula'] ?>">
</div>

<!--<div id="Layer3"
     style="position:absolute;overflow:auto;text-align:left;left:0px;top:634px;width:100%;min-width:994px;height:161px;z-index:20;"
     class="col-md-12 column" class="row">
</div>-->
<div class="modal fade" id="modalcadprogmat">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    &times;</button>
                <h4 class="modal-title">Cadastro de programa/matéria</h4>
            </div>
            <div class="modal-body">
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

                <!--##############################################################################################-->
            </div>
            <div class="modal-footer">

                <button data-dismiss='modal' aria-hidden='true' class='modalbutton btn btn-danger'>Cancelar
                </button>

            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<div id="container">
<div class="container">

<div id="wb_FormConf" style="position:relative;top:176px;z-index:21;">

    <div class="row">
        <form class="form-horizontal" method="post"
              enctype="text/plain" id="Form-horizontal">
            <fieldset>

                <!-- Form Name -->
                <legend>Cadastro de avaliação</legend>
                <div class="alert alert-danger alert-dismissable" id="diverror1">
                    <!--<button type="button" class="close" data-dismiss="alert" aria-hidden="true"
                            id="alerterror">&times;</button>-->

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

                <div id="progmat">
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="tokenfield-anoserie">Ano/Série</label>

                        <div class="col-md-6">

                            <input type="text" class="input-xxlarge" id="tokenfield-anoserie"
                                   placeholder="Selecione as séries desejadas"/>

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="tokenfield-programa">Programa</label>

                        <div class="col-md-6">

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
                    <!-- Button Drop Down -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="tokenfield-materia">Matéria</label>

                        <div class="col-md-6">

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

                    <!-- Button -->
                    <div class="form-group">
                        <label class="col-md-4 control-label"></label>

                        <div class="col-md-8">
                            <button type="submit" name="singlebutton1"
                                    class="buttonsalvar1 btn btn-success glyphicon glyphicon-floppy-save">
                                Salvar
                            </button>
                            <a href="<?php echo URL; ?>/listaavaliacao_adm" id="editargabarito" name="editargabarito"
                                    class="btn btn-info glyphicon glyphicon-share-alt">Gabaritar?
                            </a>
                        </div>
                    </div>
                </div>
            </fieldset>
        </form>

    </div>

</div>
</div>
<div id="Layer1"
     style="position:absolute;overflow:auto;text-align:center;left:0px;top:0px;width:972px;height:68px;z-index:22;"
     title="">
    <div id="Layer1_Container"
         style="width:972px;position:relative;margin-left:auto;margin-right:auto;text-align:left;">
        <div id="wb_Logout1" style="position:absolute;left:855px;top:9px;width:45px;height:45px;z-index:15;">
            <form name="logoutform" method="post" action="<?php echo URL; ?>/cadastroavaliacao_adm/logout"
                  id="logoutform">
                <input type="hidden" name="form_name" value="logoutform">
                <input type="image" name="logout" id="logout" src="<?php echo URL; ?>/public/img/logout.gif"/>
            </form>
        </div>
        <div id="wb_Logout2" style="position:absolute;left:905px;top:19px;width:45px;height:23px;z-index:16;">
            <form name="logoutform" method="post" action="<?php echo URL; ?>/cadastroavaliacao_adm/logout"
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
            <li class="firstmain"><a class="active" href="<?php echo URL; ?>/cadastroavaliacao_adm" target="_self">Cadastrar
                    avaliação</a>
            </li>
            <li><a href="<?php echo URL; ?>/listaavaliacao_adm" target="_self">Avaliações</a>
            </li>

        </ul>
        <br>
    </div>
</div>
</div>
<script type="text/javascript" src="<?php echo URL; ?>/public/js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="<?php echo URL; ?>/public/js/jquery-ui.js"></script>
<script type="text/javascript" src="<?php echo URL; ?>/public/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo URL; ?>/public/js/bootstrap-tokenfield.js"></script>
<script type="text/javascript" src="<?php echo URL; ?>/public/js/cadastroavaliacao_adm.min.js"></script>
</body>
</html>