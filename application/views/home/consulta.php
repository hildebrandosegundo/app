<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
<meta http-equiv="X-UA-Compatible" content="chrome=1">
<meta http-equiv="Content-Language" content="pt-br">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>
    SEMEC Avaliação
</title>
    <link href="<?php echo URL; ?>/public/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo URL; ?>/public/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="<?php echo URL; ?>/public/css/consulta.css">
    <link href="<?php echo URL; ?>/public/img/teresina.jpeg" rel="shortcut icon">
</head>

<body>
<div id="container">
<div id="wb_signupform" style="position:absolute;top:166px;z-index:21;">
        <div class="container">
            <div class="row">
                <p style="padding: 0px 100px">
                <form class="form-horizontal" enctype="text/plain" name="signupform" method="post" id="signupform">
                    <input type="hidden" name="formid" value="signupform">
                    <input type="hidden" name="form_name" value="signupform">
                    <fieldset>

                        <!-- Form Name -->
                        <legend>Consulta de usuário</legend>

                        <!-- Appended Input-->
                        <div class="alert alert-danger alert-dismissable" id="diverror">

                            <input type='text' id='error' name="error" value='' style="width:40em" autocomplete='off'>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="matricula">Matricula</label>

                            <div class="col-md-6">
                                <div class="input-group">
                                    <input id="matricula" name="matricula" class="form-control" placeholder="matricula"
                                           type="text" required="">
                                    <span class="input-group-btn">
                                        <!-- Button -->

                                            <button id="Pesquisar" name="Pesquisar" class="btn btn-primary">Pesquisar</button>

                                    </span>
                                </div>
                                <p class="help-block">(digite a sua matricula da SEMEC)</p>
                            </div>
                        </div>
                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="fullname">Nome</label>

                            <div class="col-md-6">
                                <input id="fullname" name="fullname" type="text" placeholder="seu nome"
                                       class="form-control input-md" >

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="atividade">Atividade</label>

                            <div class="col-md-6">
                                <input id="atividade" name="atividade" type="Text" placeholder="Atividade"
                                       class="form-control input-md" >

                            </div>
                        </div>
                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="lotacao">Lotação</label>

                            <div class="col-md-6">
                                <input id="lotacao" name="lotacao" type="Text" placeholder="Lotação"
                                       class="form-control input-md" >
                                <p class="help-block">(Ultilize o código da lotação para logar no sistema)</p>
                            </div>
                        </div>
                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="lotacao">Situação</label>

                            <div class="col-md-6">
                                <input id="situacao" name="situacao" type="Text" placeholder="Situação do servidor"
                                       class="form-control input-md" >
                                <p class="help-block">(Situação em que se encontra o servidor: ativa ou encerrada)</p>
                            </div>
                        </div>
                        <!-- Multiple Radios -->
                        <!--<div class="form-group">
                            <label class="col-md-4 control-label" for="rad">Tipo de usuário</label>

                            <div class="col-md-4">
                                <div class="radio">
                                    <label for="rad-0">
                                        <input type="radio" name="rad" id="rad-0" value="1">
                                        Secretário(a)/Professor(a)
                                    </label>
                                </div>
                                <div class="radio">
                                    <label for="rad-1">
                                        <input type="radio" name="rad" id="rad-1" value="2">
                                        Administração/Setor de avaliação
                                    </label>
                                </div>
                            </div>
                        </div>-->


                        <!-- Button (Double) -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="Cadastrar"></label>

                            <div class="col-md-8">
                                <!--<button id="Cadastrar" name="Cadastrar" class="btn btn-success">Cadastrar</button>-->
                                <button id="Cancelar" name="Cancelar" class="btn btn-info glyphicon glyphicon-hand-left">Login</button>
                            </div>
                        </div>

                    </fieldset>
                </form>
                </p>
            </div>
        </div>

</div>
<!-- Pesquisar -->
<div id="Layer1"
     style="position:absolute;overflow:auto;text-align:center;left:11px;top:0px;width:972px;height:68px;z-index:24;"
     title="">
    <div id="Layer1_Container"
         style="width:972px;position:relative;margin-left:auto;margin-right:auto;text-align:left;">
        <div id="wb_Logout1" style="position:absolute;left:855px;top:9px;width:45px;height:45px;z-index:19;">
            <form name="logoutform" method="post" action="<?php echo URL; ?>/index"
                  id="logoutform">
                <input type="hidden" name="form_name" value="logoutform">
                <input type="image" name="logout" id="logout" src="<?php echo URL; ?>/public/img/logout.gif"
                    />
            </form>
        </div>
        <div id="wb_Logout2" style="position:absolute;left:905px;top:19px;width:45px;height:23px;z-index:20;">
            <form name="logoutform" method="post" action="<?php echo URL; ?>/index"
                  id="logoutform">
                <input type="hidden" name="form_name" value="logoutform">
                <input class="logoutform_button" type="submit" name="logout" value="Sair"
                       id="logout" style="width:45px;height:23px;"/>
            </form>
        </div>
    </div>
</div>
</div>
<script type="text/javascript" src="<?php echo URL; ?>/public/js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="<?php echo URL; ?>/public/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="<?php echo URL; ?>/public/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo URL; ?>/public/js/dataTables.bootstrap.js"></script>
<script type="text/javascript" src="<?php echo URL; ?>/public/js/consulta.js"></script>
</body>

</html>