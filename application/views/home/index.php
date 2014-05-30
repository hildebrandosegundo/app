<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Language" content="pt-br">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>SEMEC Avaliação</title>
    <meta name="generator" content="WYSIWYG Web Builder 9 - http://www.wysiwygwebbuilder.com">
    <link href="<?php echo URL; ?>/public/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css"/>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo URL; ?>/public/js/jquery-ui.js"></script>
    <script type="text/javascript" src="//cdn.datatables.net/1.10.0/js/jquery.dataTables.js"></script>
    <script type="text/javascript" src="<?php echo URL; ?>/public/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="//cdn.datatables.net/plug-ins/28e7751dbec/integration/bootstrap/3/dataTables.bootstrap.js"></script>
    <link rel="stylesheet" href="<?php echo URL; ?>/public/css/bootstrap-theme.min.css">
    <link href="http://cdn.datatables.net/1.10.0/css/jquery.dataTables.css" type="text/css" rel="stylesheet">
    <link href="<?php echo URL; ?>/public/img/teresina.jpeg" rel="shortcut icon">
    <script type="text/javascript" src="<?php echo URL; ?>/public/js/bootstrap-tokenfield.js"></script>
    <link href="<?php echo URL; ?>/public/css/tokenfield-typeahead.css" type="text/css" rel="stylesheet">
    <link href="<?php echo URL; ?>/public/css/bootstrap-tokenfield.css" type="text/css" rel="stylesheet">
    <script type="text/javascript">
        $(function ($) {
            //quando o link for clicado
            $("#login").click(function (e) {
                e.preventDefault();
                e.stopPropagation();

                var _matricula = $("#matricula").val();
                var _senha = $("#password").val();

                $.ajax({
                    url: "<?php echo URL; ?>/index/entrar",
                    type: "POST",
                    data: {
                        matricula: _matricula,
                        password: _senha
                    }
                    /*success: function (data) {
                     data = JSON.parse(data);
                     if (data.sucesso) {
                     for (var i in data.values) {
                     $(i).val(data.values[i]);
                     }
                     }
                     }*/
                });
            });

        });
    </script>
    <style type="text/css">
        div#container {
            width: 994px;
            position: relative;
            margin: 0 auto 0 auto;
            text-align: left;
        }

        body {
            background-color: #FFFFFF;
            color: #000000;
            font-family: Arial;
            font-size: 13px;
            margin: 0;
            text-align: center;
        }
    </style>
    <style type="text/css">
        a {
            color: #0000FF;
            text-decoration: underline;
        }

        a:visited {
            color: #800080;
        }

        a:active {
            color: #FF0000;
        }

        a:hover {
            color: #0000FF;
            text-decoration: underline;
        }
    </style>
    <style type="text/css">
        #wb_loginform {
            background-color: #EEEEEE;
            border: 1px #878787 solid;
        }

        #wb_Text1 {
            background-color: #878787;
            border: 0px #000000 solid;
            padding: 0;
            text-align: center;
        }

        #wb_Text1 div {
            text-align: center;
        }

        #wb_Text2 {
            background-color: transparent;
            border: 0px #000000 solid;
            padding: 0;
            text-align: right;
        }

        #wb_Text2 div {
            text-align: right;
        }

        #wb_Text3 {
            background-color: transparent;
            border: 0px #000000 solid;
            padding: 0;
            text-align: right;
        }

        #wb_Text3 div {
            text-align: right;
        }

        #wb_Text4 {
            background-color: transparent;
            border: 0px #000000 solid;
            padding: 0;
            text-align: left;
        }

        #wb_Text4 div {
            text-align: left;
        }

        #Layer1 {
            background-color: transparent;
            background-image: url(<?php echo URL; ?>/public/img/logo_semec.png);
            background-repeat: no-repeat;
            background-position: center top;
        }


    </style>
    <style type="text/css">
        body {
            background-color: #FFF;
            padding-top: 40px;
        }

        .input-group-addon {
            background-color: rgb(50, 118, 177);
            border-color: rgb(40, 94, 142);
            color: rgb(255, 255, 255);
        }

        .form-control:focus {
            background-color: rgb(50, 118, 177);
            border-color: rgb(40, 94, 142);
            color: rgb(255, 255, 255);
        }

        .form-signup input[type="text"], .form-signup input[type="password"] {
            border: 1px solid rgb(50, 118, 177);
        }
    </style>

</head>
<body>
<div id="container">
    <div class="container">

        <div id="wb_loginform" style="position:absolute;top:140px;">
            <form name="loginform" method="post" action="<?php echo URL; ?>/index/entrar" id="loginform">
                <input type="hidden" name="formid" value="loginform">
                <input type="hidden" name="form_name" value="loginform">

                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <h5 class="text-center">
                                    Entrar no sistema</h5>

                                <form class="form form-signup" role="form">
                                    <div class="form-group">
                                        <div class="input-group">
                                    <span class="input-group-addon"><span
                                            class="glyphicon glyphicon-user"></span></span>
                                            <input type="text" class="form-control" placeholder="Matricula"
                                                   id="matricula" name="matricula" value="<?php echo $matricula; ?>"/>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="input-group">
                                    <span class="input-group-addon"><span
                                            class="glyphicon glyphicon-lock"></span></span>
                                            <input type="password" class="form-control" placeholder="Senha"
                                                   id="password" name="password" value="<?php echo $password; ?>"/>
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

                            </div>
                            <p style="padding: 0px 30px">
                                <button type="submit" class="btn btn-primary btn-success  btn-block" id="login"
                                        name="login"><span class="glyphicon glyphicon-log-in"</span> Entrar
                                </button>
                                <a href="<?php echo URL; ?>/cadastro" class="btn btn-primary btn-info  btn-block"><span
                                        class="glyphicon glyphicon-ok-sign"></span> Cadastrar </a>
                            </p>
            </form>

        </div>
    </div>
</div>
</div>
</form>
</div>

<div id="Layer1"
     style="position:absolute;overflow:auto;text-align:center;left:11px;top:4px;width:972px;height:68px;z-index:11;"
     title="">
    <div id="Layer1_Container"
         style="width:972px;position:relative;margin-left:auto;margin-right:auto;text-align:left;">
    </div>
</div>
</div>

</body>
</html>