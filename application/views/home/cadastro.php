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
    <link rel="stylesheet" href="<?php echo URL; ?>/public/css/jquery-ui.css"/>
    <script type="text/javascript" src="<?php echo URL; ?>/public/js/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="<?php echo URL; ?>/public/js/jquery-ui.js"></script>
    <script type="text/javascript" src="<?php echo URL; ?>/public/js/jquery.dataTables.js"></script>
    <script type="text/javascript" src="<?php echo URL; ?>/public/js/bootstrap.min.js"></script>
    <script type="text/javascript"
            src="<?php echo URL; ?>/public/js/dataTables.bootstrap.js"></script>
    <link rel="stylesheet" href="<?php echo URL; ?>/public/css/bootstrap-theme.min.css">
    <link href="<?php echo URL; ?>/public/css/jquery.dataTables.css" type="text/css" rel="stylesheet">
    <link href="<?php echo URL; ?>/public/img/teresina.jpeg" rel="shortcut icon">
    <script type="text/javascript" src="<?php echo URL; ?>/public/js/bootstrap-tokenfield.js"></script>
    <link href="<?php echo URL; ?>/public/css/tokenfield-typeahead.css" type="text/css" rel="stylesheet">
    <link href="<?php echo URL; ?>/public/css/bootstrap-tokenfield.css" type="text/css" rel="stylesheet">
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $("#diverror").hide();
        $("#fullname").hide();
        $("#cpf").hide();
        $("#password").hide();
        $("#confirmpassword").hide();
        //quando o link for clicado
        $("#Pesquisar").click(function (e) {

            e.preventDefault();
            e.stopPropagation();

            $("#fullname").show();
            $("#cpf").show();

            var _matricula = $("#matricula").val();

            $("#fullname").val('Carregando...');
            $("#cpf").val('Carregando...');

            $.post('<?php echo URL; ?>/cadastro/checkmatricula',{matricula: _matricula},function(dados){
                var json = jQuery.parseJSON(dados);
                console.log(json.sucesso);
                console.log(json.values);
                if (json.sucesso) {
                    for (var i in json.values) {
                        $(i).val(json.values[i]);
                    }
                    $("#error").val('');
                    $("#diverror").hide();
                    $("#password").show();
                    $("#confirmpassword").show();
                } else {
                    $("#fullname").val('');
                    $("#cpf").val('');
                    $("#error").val(json.values);
                    $("#diverror").show();
                }

            });

        });
        $("#Cancelar").click(function(e){
            e.preventDefault();
            e.stopPropagation();
            window.location="<?php echo URL; ?>/index";
        });
        $("#Cadastrar").click(function (e) {

            e.preventDefault();
            e.stopPropagation();
              // Fazemos a requisão ajax com o arquivo envia.php e enviamos os valores de cada campo através do método POST
            var _matricula = $("#matricula").val();
            var _fullname = $("#fullname").val();
            var _password = $("#password").val();
            var _cpf = $("#cpf").val();
            var _confirmpassword = $("#confirmpassword").val();
            var _op = $('input:radio[name=rad]:checked').val();

            $.ajax({
                type: "POST",
                url: "<?php echo URL; ?>/cadastro/cadastrar",
                data: {
                    matricula: _matricula,
                    fullname: _fullname,
                    password: _password,
                    cpf: _cpf,
                    confirmpassword: _confirmpassword,
                    op: _op
                },
                success: function (data) {

                    data = JSON.parse(data);
                    if (data.sucesso) {
                        $("#error").val('');
                        $("#diverror").hide();
                        alert('Cadastro realizado com sucesso!');
                        window.location = "<?php echo URL; ?>/index";
                    } else {

                        $("#error").val(data.values);
                        $("#diverror").show();
                    }
                }
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
#wb_signupform {
    background-color: #FAFAFA;
    border: 0px #000000 solid;
    text-align: left;
}
#form-horizontal{
    text-align: left;
}

#error
{
    border: 0px #EEEEEE solid;
    background-color: transparent;
    color :#FF0000;
    font-family: Arial;
    font-size: 16px;
    text-align: left;
    vertical-align: middle;
}
#Pesquisar {
    border: 1px #A9A9A9 solid;
    background-color: transparent;
    background-image: url(<?php echo URL; ?>/public/img/b_search.png);
    background-repeat: no-repeat;
    background-position: left top;
    background-size: contain;
    color: #000000;
    font-family: Arial;
    font-size: 13px;
}

#Layer1 {
    background-color: transparent;
    background-image: url(<?php echo URL; ?>/public/img/logo_semec.png);
    background-repeat: no-repeat;
    background-position: center top;
}

.logoutform_button {
    background-color: #EEEEEE;
    border-color: #878787;
    border-width: 1px;
    border-style: solid;
    color: #000000;
    font-family: Arial;
    font-size: 19px;
}
</style>
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
                        <legend>Cadastro de usuário</legend>

                        <!-- Appended Input-->

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
                                       class="form-control input-md" required="">

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="cpf">CPF</label>

                            <div class="col-md-6">
                                <input id="cpf" name="cpf" type="text" placeholder="seu CPF"
                                       class="form-control input-md" required="">

                            </div>
                        </div>

                        <!-- Password input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="password">Senha</label>

                            <div class="col-md-6">
                                <input id="password" name="password" type="password" placeholder="senha"
                                       class="form-control input-md" required="">
                                <span class="help-block">(crie uma senha)</span>
                            </div>
                        </div>

                        <!-- Password input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="confirmpassword">Confirmar senha</label>

                            <div class="col-md-6">
                                <input id="confirmpassword" name="confirmpassword" type="password" placeholder="senha"
                                       class="form-control input-md" required="">
                                <span class="help-block">(Confirme sua senha)</span>
                            </div>
                        </div>

                        <!-- Multiple Radios -->
                        <div class="form-group">
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
                        </div>
                        <div class="alert alert-danger alert-dismissable" id="diverror">
                         <button type="button" class="close" data-dismiss="alert" aria-hidden="true" id="alerterror" >&times;</button>

                        <input type='text' id='error' name="error" value='' style="width:80em" autocomplete='off'>
                         </div>

                        <!-- Button (Double) -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="Cadastrar"></label>

                            <div class="col-md-8">
                                <button id="Cadastrar" name="Cadastrar" class="btn btn-success">Cadastrar</button>
                                <button id="Cancelar" name="Cancelar" class="btn btn-danger">Cancelar</button>
                            </div>
                        </div>

                    </fieldset>
                </form>
                </p>
            </div>
        </div>

</div>
<!-- Pesquisar -->
<div id="Html2" style="position:absolute;left:54px;top:118px;width:257px;height:100px;z-index:23">
    <script>
        function Executa_abilita() {
            document.signupform.fullname.disabled = false;
            document.signupform.password.disabled = false;
            document.signupform.confirmpassword.disabled = false;
            document.signupform.cpf.disabled = false;
            document.signupform.RadioButton1.disabled = false;
            document.signupform.RadioButton2.disabled = false;
        }
    </script>
</div>
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
</body>

</html>