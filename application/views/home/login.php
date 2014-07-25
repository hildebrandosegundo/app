<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE9">
    <meta http-equiv="Content-Language" content="pt-br">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>SEMEC Avaliação</title>
    <meta name="generator" content="WYSIWYG Web Builder 9 - http://www.wysiwygwebbuilder.com">
    <link href="<?php echo URL; ?>/public/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo URL; ?>/public/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="<?php echo URL; ?>/public/css/index.css">
    <link href="<?php echo URL; ?>/public/img/teresina.jpeg" rel="shortcut icon">
</head>
<body>
<div class="modal fade" id="modalbrowser">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    &times;</button>
                <h4 class="modal-title">Atenção</h4>
            </div>
            <div class="modal-body">
                <h4>Seu Browser é incompatível, pode ocorrer erros ou indisponibilidade de dados!</h4>
                <a href='http://www.google.com/intl/pt-BR/chrome/browser/' target='parent'><img
                        src='<?php echo URL; ?>/public/img/chrome.png' alt='Chrome' title='Google Chrome'
                        border='none'/></a>
                <a href='http://www.mozilla.org/pt-BR/firefox/new/' target='parent'><img
                        src='<?php echo URL; ?>/public/img/firefox.png' alt='Firefox' title='Firefox'
                        border='none'/></a>
                <a href='http://support.apple.com/pt_BR/downloads/#safari' target='parent'><img
                        src='<?php echo URL; ?>/public/img/safari.png' alt='Safari' title='Safari' border='none'/></a>
                <a href='http://www.opera.com/pt-br/computer' target='parent'><img
                        src='<?php echo URL; ?>/public/img/opera.png' alt='Opera' title='Opera' border='none'/></a>
                <h4>Browsers compatíveis</h4>
            </div>
            <div class="modal-footer">

                <button class='btn btn-danger' data-dismiss="modal" aria-hidden="true">Cancelar
                </button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
    <!-- Modal -->
</div>

<div id="container">

    <form class="form form-signup" role="form" style="position:absolute;top:140px;">
        <fieldset>
            <!-- Form Name -->
            <legend></legend>
            <div id="form_login" class="col-md-5 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="alert alert-danger alert-dismissable" id="diverror2">

                            <input type='text' id='error2' name="error" value='' style="width:25em"
                                   autocomplete='off'>
                        </div>
                        <h5 class="text-center">
                            Entrar no sistema</h5>

                        <div class="form-group">
                            <div class="input-group">
                                    <span class="input-group-addon"><span
                                            class="glyphicon glyphicon-user"></span></span>
                                <input type="text" class="form-control" placeholder="Matricula"
                                       value="<?php echo $matricula; ?>"
                                       id="matricula" name="matricula"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                    <span class="input-group-addon"><span
                                            class="glyphicon glyphicon-briefcase"></span></span>
                                <input type="text" class="form-control" placeholder="Lotação"
                                       value="<?php echo $lotacao; ?>"
                                       id="lotacao" name="lotacao"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                    <span class="input-group-addon"><span
                                            class="glyphicon glyphicon-lock"></span></span>
                                <input type="password" class="form-control" placeholder="CPF"

                                       id="cpf" name="cpf"/>
                            </div>
                        </div>
                        <!-- Multiple Checkboxes (inline) -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="checkboxes">Lembrar-me</label>

                            <div class="col-md-4">
                                <label class="checkbox-inline" for="checkboxes-0">
                                    <input type="checkbox" id="rememberme" name="rememberme" value="on">
                                    sim
                                </label>
                            </div>
                        </div>

                        <button type="submit" class="glyphicon glyphicon-log-in btn btn-primary btn-success  btn-block btn-lg" id="login"
                                name="login"> Entrar
                        </button>
                        <!--<span class=""</span>-->
                        <a href="<?php echo URL; ?>/consulta" role="button"
                           class="btn btn-primary btn-info  btn-block"><span
                                class="glyphicon glyphicon-ok-sign"></span> Consultar lotação </a>

                    </div>
                </div>
            </div>
        </fieldset>
    </form>
    <!--</div>-->

    <div id="Layer1"
         style="position:absolute;overflow:auto;text-align:center;left:11px;top:4px;width:972px;height:68px;z-index:11;"
         title="">
        <div id="Layer1_Container"
             style="width:972px;position:relative;margin-left:auto;margin-right:auto;text-align:left;">
        </div>
    </div>
</div>
<script type="text/javascript" src="<?php echo URL; ?>/public/js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="<?php echo URL; ?>/public/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo URL; ?>/public/js/jquery.browser.min.js"></script>
<script type="text/javascript" src="<?php echo URL; ?>/public/js/index.js"></script>

</body>
</html>