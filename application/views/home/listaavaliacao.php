<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE9">
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
<script type="text/javascript"
        src="//cdn.datatables.net/plug-ins/28e7751dbec/integration/bootstrap/3/dataTables.bootstrap.js"></script>
<link href="http://cdn.datatables.net/1.10.0/css/jquery.dataTables.css" type="text/css" rel="stylesheet">
<link href="<?php echo URL; ?>/public/img/teresina.jpeg" rel="shortcut icon">
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
    #wb_FormFiltro {
        background-color: #FAFAFA;
        border: 0px #000000 solid;
        text-align: left;
    }

    #form-horizontal {
        text-align: left;
    }

    #wb_Text1 div {
        text-align: left;
    }

    #wb_Text2 div {
        text-align: left;
    }

    #wb_Text3 div {
        text-align: left;
    }

    #wb_Text4 div {
        text-align: left;
    }

    #wb_Text5 div {
        text-align: left;
    }

    #Layer2 {
        background-color: transparent;
        background-image: url(<?php echo URL; ?>/public/img/masterpage_Layer2_bkgrnd.png);
        background-repeat: repeat-x;
        background-position: left top;
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

    #wb_CssMenu1 {
        border: 0px #C0C0C0 solid;
        background-color: transparent;
    }

    #wb_CssMenu1 ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        position: relative;
        display: inline-block;
    }

    #wb_CssMenu1 li {
        float: left;
        margin: 0;
        padding: 0px 4px 0px 0px;
        width: 135px;
    }

    #wb_CssMenu1 a {
        display: block;
        float: left;
        color: #FFFFFF;
        border: 0px #C0C0C0 groove;
        -moz-border-radius: 10px;
        -webkit-border-radius: 10px;
        border-radius: 10px;
        background-color: #000000;
        background: -moz-linear-gradient(top, #292929 0%, #1B1B1B 50%, #020202 50%, #202020 100%);
        background: -webkit-linear-gradient(top, #292929 0%, #1B1B1B 50%, #020202 50%, #202020 100%);
        background: -o-linear-gradient(top, #292929 0%, #1B1B1B 50%, #020202 50%, #202020 100%);
        background: -ms-linear-gradient(top, #292929 0%, #1B1B1B 50%, #020202 50%, #202020 100%);
        background: linear-gradient(top, #292929 0%, #1B1B1B 50%, #020202 50%, #202020 100%);
        font-family: Arial;
        font-size: 13px;
        font-weight: normal;
        font-style: normal;
        text-decoration: none;
        width: 125px;
        height: 76px;
        padding: 0px 5px 0px 5px;
        vertical-align: middle;
        line-height: 76px;
        text-align: center;
    }

    #wb_CssMenu1 li:hover a, #wb_CssMenu1 a:hover, #wb_CssMenu1 .active {
        color: #FFFFFF;
        background-color: #4169E1;
        background: -moz-linear-gradient(top, #273FEC 0%, #304DE8 50%, #3F66E1 50%, #2C48EA 100%);
        background: -webkit-linear-gradient(top, #273FEC 0%, #304DE8 50%, #3F66E1 50%, #2C48EA 100%);
        background: -o-linear-gradient(top, #273FEC 0%, #304DE8 50%, #3F66E1 50%, #2C48EA 100%);
        background: -ms-linear-gradient(top, #273FEC 0%, #304DE8 50%, #3F66E1 50%, #2C48EA 100%);
        background: linear-gradient(top, #273FEC 0%, #304DE8 50%, #3F66E1 50%, #2C48EA 100%);
        border: 0px #C0C0C0 groove;
    }

    #wb_CssMenu1 li.firstmain {
        padding-left: 0px;
    }

    #wb_CssMenu1 li.lastmain {
        padding-right: 0px;
    }

    #wb_CssMenu1 br {
        clear: both;
        font-size: 1px;
        height: 0;
        line-height: 0;
    }

    #Layer3 {
        background-color: transparent;
        background-image: url(<?php echo URL; ?>/public/img/masterpage_Layer3_bkgrnd.png);
        background-repeat: repeat-x;
        background-position: left top;
    }

    #LoginName1 {
        color: #FFFFFF;
        font-family: Arial;
        font-size: 13px;
        text-align: left;
    }

    #error {
        border: 0px #EEEEEE solid;
        background-color: transparent;
        color: #FF0000;
        font-family: Arial;
        font-size: 16px;
        text-align: left;
        vertical-align: middle;
    }
</style>
<script type="text/javascript">
    var view = null;
    RemoveTableRow = function (handler) {
        var tr = $(handler).closest('tr');
        tr.fadeOut(400, function () {
            tr.remove();
        });

        return false;
    };
    function format(d) {
        // `d` is the original data object for the row
        return '<table id="tabela" cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">' +
            '<tr>' +
            '<td>Zona:</td>' +
            '<td>zona teste</td>' +
            '</tr>' +
            '<tr>' +
            '<td>Numero:</td>' +
            '<td>teste de numero</td>' +
            '</tr>' +
            '<tr>' +
            '<td>Extra info:</td>' +
            '<td>And any further details here (images etc)...</td>' +
            '</tr>' +
            '</table>';
    }
    $(document).ready(function () {
        var table = $('#example').DataTable({
            "ajax": "<?php echo URL; ?>/listaavaliacao/lista",
            "columns": [

                { "data": "0" },
                { "data": "1" },
                { "data": "2" },
                { "data": "3" },
                {
                    "class": 'details-control',
                    "orderable": false,
                    "data": null,
                    "defaultContent": "<div class='btn-group'>" +
                        "<button class=\'btn btn-success\'>Criar prova" +
                        "</button>" +
                        "<button id='info' class=\'btn btn-info\'>Info" +
                        "</button>" +
                        "<button onclick='RemoveTableRow(this)' id='deletar' class=\'btn btn-danger\'>Deletar" +
                        "</button>" +
                        "</div>"
                }
            ],
            "order": [
                [0, 'asc']
            ]
        });

        // Add event listener for opening and closing details
        $('#example tbody').on('click', '#info', function () {
            var tr = $(this).parents('tr');
            var row = table.row(tr);
            view = row;
            if (row.child.isShown()) {
                // This row is already open - close it
                row.child.hide();
                tr.removeClass('shown');
                $('#deletar').prop('disabled',true);
            }
            else {
                // Open this row
                row.child(format(row.data())).show();
                tr.addClass('shown');
                $('#deletar').prop('disabled',false);
            }
        });
    });
</script>
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
</div>

<!--<div id="Layer3"
     style="position:absolute;overflow:auto;text-align:left;left:0px;top:634px;width:100%;min-width:994px;height:161px;z-index:20;"
     class="col-md-12 column" class="row">
</div>-->
<div id="container">
    <div class="container">
        <div id="wb_FormFiltro" style="position:relative;top:170px;z-index:21;">
            <table id="example" class="display" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>Série</th>
                    <th>N. Prova</th>
                    <th>Tipo</th>
                    <th>Disciplina</th>
                    <th>Ação</th>
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
                    <form name="logoutform" method="post" action="<?php echo URL; ?>/filtro/logout" id="logoutform">
                        <input type="hidden" name="form_name" value="logoutform">
                        <input type="image" name="logout" id="logout" src="<?php echo URL; ?>/public/img/logout.gif"/>
                    </form>
                </div>
                <div id="wb_Logout2" style="position:absolute;left:905px;top:19px;width:45px;height:23px;z-index:16;">
                    <form name="logoutform" method="post" action="<?php echo URL; ?>/filtro/logout" id="logoutform">
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
                    <li><a href="<?php echo URL; ?>/cadastroavaliacao" target="_self">Cadastrar
                            avaliação</a>
                    </li>
                    <li class="firstmain"><a class="active" href="#" target="_self">Avaliações</a>
                    </li>
                    <li><a href="#" target="_self">Button&nbsp;3</a>
                    </li>
                    <li><a href="#" target="_self">Button&nbsp;4</a>
                    </li>
                </ul>
                <br>
            </div>
        </div>
    </div>

</div>

</body>
</html>