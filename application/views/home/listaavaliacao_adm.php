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

    #LoginName1 {
        color: #FFFFFF;
        font-family: Arial;
        font-size: 13px;
        text-align: left;
    }

    #error1 {
        border: 0px #EEEEEE solid;
        background-color: transparent;
        color: #FF0000;
        font-family: Arial;
        font-size: 16px;
        text-align: left;
        vertical-align: middle;
    }

    #error2 {
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
var table, listagabarito, linha = null;
RemoveTableRow = function (handler) {
    var result = confirm("Você deseja deletar esta prova?");
    if (result == true) {
        var tr = $(handler).closest('tr');
        if ($('#tabela') != null) {
            var row = table.row(tr);
            if (row.child.isShown()) {
                row.child.hide();
                tr.removeClass('shown');
            }
        }
        tr.fadeOut(400, function () {
            tr.remove();
        });
    }
    return false;
};
RemoveGabaritoRow = function (d) {
    var tr = $(d).closest('tr');
    tr.fadeOut(400, function () {
        tr.remove();
    });
    return false;
}
EditTableRow = function (d) {
    //console.log(d);
    $('#modaleditar').modal('show');
    return false;

};
GabaritoAlunoRow = function (d) {
    //console.log(d);
    $('#modalgabaritoaluno').modal('show');
    linha = $(d);
    return false;
};
function init() {
    var autoSuggestion = document.getElementsByClassName('ui-autocomplete');
    if (autoSuggestion.length > 0) {
        autoSuggestion[0].style.zIndex = 1051;
    }
}
GabaritoTableRow = function (d) {
    $('#modalgabarito').modal('show');
    linha = $(d);
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

//######################################## pagina com lista de provas #################################################
    table = $('#example').DataTable({
        "ajax": "<?php echo URL; ?>/listaavaliacao_adm/lista",

        "columns": [

            { "data": "0" },
            { "data": "1" },
            { "data": "2" },
            { "data": "3" },
            { "data": "4" },
            { "data": "5" },
            { "data": "6" }
        ],
        "order": [
            [0, 'asc']
        ]
    });

    // Add event listener for opening and closing details
    $('#example tbody').on('click', '#info', function (e) {
        var tr = $(this).parents('tr');
        var row = table.row(tr);
        e.preventDefault();
        e.stopPropagation();
        if (row.child.isShown()) {
            // This row is already open - close it
            row.child.hide();
            tr.removeClass('shown');
            // $('tbody tr td #deletar').attr('disabled',false);
        }
        else {
            // Open this row
            row.child(format(row.data())).show();
            tr.addClass('shown');
            //  $('tbody tr td #deletar').attr('disabled',true);
        }
    });
    $('#example tbody').on('click', '.gabaritoaluno0', function (e) {
        var data = table.row( $(this).parents('tr') ).data();
        e.preventDefault();
        e.stopPropagation();
       // console.log(data[0]);
       GabaritoAlunoRow($(this));
        $.ajax({
            type: "POST",
            url: "listaavaliacao_adm/listaescolas",
            data: {id: data[0]},
           // dataType: "json",
            success: function(json){
                json = JSON.parse(json);
                var options = "";
                $.each(json.values, function(key, data){
                    options += '<option value="' + key + '">' + data + '</option>';
                });
                $("#selectescola").html(options);
            }
        });

    });
    $('#example tbody').on('click', '.gabarito0', function (e) {

        e.preventDefault();
        e.stopPropagation();
        // console.log(data[0]);
        GabaritoTableRow(this);

    });
//############################### modal alterar prova ################################################################
    $("#diverror2").hide();
    $("#diverror1").hide();
    $("#wb_FormLista").hide();
    $("#wb_FormConf").show('slide', {direction: 'left'}, 500);


    var cod_escolas;
    var nome_escolas;
    var turmas;
    $('#buttonsalvar1').click(function (e) {
        e.preventDefault();
        e.stopPropagation();
        var _textdescricao = $("#textdescricao").val();
        var _tokenfield_programa = $("#tokenfield-programa").val();
        console.log(_tokenfield_programa);
        var _tokenfield_materia = $("#tokenfield-materia").val();
        console.log(_tokenfield_materia);
        var _op = $('input:radio[name=radios]:checked').val();
        $("#tokenfield-escolas-nomes").tokenfield('disable');
        $.ajax({
            type: "POST",
            url: "<?php echo URL; ?>/cadastroavaliacao/cadastraravaliacao",
            data: {
                textdescricao: _textdescricao,
                tokenfield_programa: _tokenfield_programa,
                tokenfield_materia: _tokenfield_materia,
                op: _op
            },
            success: function (data) {
                data = JSON.parse(data);
                if (data.sucesso) {
                    $("#error1").val('');
                    $("#diverror1").hide();

                    $("#wb_FormConf").hide();
                    $("#wb_FormLista").show('slide', {direction: 'right'}, 500)
                }
                else {
                    console.log(data.values);
                    $("#error1").val(data.values);
                    $("#diverror1").show();
                }
            }
        });
    });
    //zonas
    $('#tokenfield-zona').change(function (e) {

        e.preventDefault();
        e.stopPropagation();


        var _zona = $('#tokenfield-zona').tokenfield('getTokensList', ',');
        console.log(_zona);
        $('#tokenfield-escolas').data('bs.tokenfield').$input.val('Carregando...');
        $('#tokenfield-escolas-nomes').data('bs.tokenfield').$input.val('Carregando...');
        $.ajax({
            type: "POST",
            url: "<?php echo URL; ?>/cadastroavaliacao/selectzona",
            data: {
                zona: _zona
            },
            //dataType: "json",
            success: function (data) {

                data = JSON.parse(data);
                //console.log(data.values);
                if (data.sucesso) {
                    $("#error2").val('');
                    $("#diverror2").hide();
                    cod_escolas = data.codigo;
                    nome_escolas = data.nome;
                    $('#tokenfield-escolas').data('bs.tokenfield').$input.val('');
                    $('#tokenfield-escolas-nomes').data('bs.tokenfield').$input.val('');
                    $('#tokenfield-escolas').data('bs.tokenfield').$input.autocomplete({source: data.codigo});
                    $('#tokenfield-escolas-nomes').data('bs.tokenfield').$input.autocomplete({source: data.nome});
                }
                else {
                    $("#error2").val(data.values);
                    $("#diverror2").show();
                }
            }
        });
    });
    //escolas por codigo
    $('#tokenfield-escolas').change(function (e) {

        e.preventDefault();
        e.stopPropagation();

        var _escolas_cod = $('#tokenfield-escolas').tokenfield('getTokensList', ',');
        var _nome_escola = nome_escolas;
        var _cod_escola = cod_escolas;
        console.log(_escolas_cod);
        $.ajax({
            type: "POST",
            url: "<?php echo URL; ?>/cadastroavaliacao/selecionaescolacod",
            data: {
                escolas_cod: _escolas_cod,
                escolas_nome: _nome_escola,
                escolas_cod2: _cod_escola
            },
            //dataType: "json",
            success: function (data) {

                data = JSON.parse(data);
                //console.log(data.values);
                if (data.sucesso) {
                    $("#error2").val('');
                    $("#diverror2").hide();
                    $('#tokenfield-escolas-nomes').tokenfield('setTokens', data.values);
                    $('#tokenfield-serie').data('bs.tokenfield').$input.autocomplete({source: data.ano});
                    $('#tokenfield-turma').data('bs.tokenfield').$input.autocomplete({source: data.turma});
                    turmas = data.turma;
                    console.log(data.ano);
                    console.log(data.turma);
                } else {
                    $("#error2").val(data.values);
                    $("#diverror2").show();
                }
            }
        });
    });

    $('#tokenfield-serie').change(function (e) {

        e.preventDefault();
        e.stopPropagation();

        var _escolas_serie = $('#tokenfield-serie').tokenfield('getTokensList', ',');
        var _turmas = turmas;

        $.ajax({
            type: "POST",
            url: "<?php echo URL; ?>/cadastroavaliacao/selecionaserie",
            data: {
                escolas_serie: _escolas_serie,
                escolas_turma: _turmas

            },
            //dataType: "json",
            success: function (data) {

                data = JSON.parse(data);
                //console.log(data.values);
                if (data.sucesso) {
                    $("#error2").val('');
                    $("#diverror2").hide();
                    $('#tokenfield-turma').tokenfield('setTokens', data.values);


                } else {
                    $("#tokenfield-serie").val(data.values);

                }
            }
        });
    });

    $('#tokenfield-zona').tokenfield({
        autocomplete: {
            source: ['ZONA NORTE', 'ZONA SUL', 'ZONA LESTE', 'ZONA SUDESTE', 'ESCOLAS DIVERSAS', 'ESCOLAS DE EIXO'],
            delay: 100
        },
        showAutocompleteOnFocus: true
    });
    $('#tokenfield-escolas').tokenfield({
        autocomplete: {
            delay: 100
        },
        showAutocompleteOnFocus: true
    });
    $('#tokenfield-escolas-nomes').tokenfield({
        autocomplete: {
            delay: 100
        },
        showAutocompleteOnFocus: true
    });
    $('#tokenfield-serie').tokenfield({
        limit: 1,
        autocomplete: {
            delay: 100
        },
        showAutocompleteOnFocus: true

    });
    $('#tokenfield-turma').tokenfield({
        autocomplete: {
            delay: 100
        },
        showAutocompleteOnFocus: true
    });
    $('#tokenfield-materia').tokenfield({
        limit: 1,
        autocomplete: {
            source: ['ARTE', 'CIENCIAS', 'EDUCACAO FISICA', 'ENSINO RELIGIOSO', 'GEOGRAFIA',
                'HISTORIA', 'INFORMATICA', 'INGLES', 'LINGUA PORTUGUESA', 'MATEMATICA'],
            delay: 100
        },
        showAutocompleteOnFocus: true
    });
    $('#tokenfield-programa').tokenfield({
        limit: 1,
        autocomplete: {
            source: ['PROVINHA BRASIL', 'SIMULADO', 'OLIMPIADA INTERNA','OLIMPIADA EXTERA', 'AVALIAÇÃO PADRÃO', 'OUTROS'],
            delay: 100
        },
        showAutocompleteOnFocus: true
    });
//###################################### modal gabarito ###################################################
    listagabarito = $('#listagabarito').dataTable({
        "dom": 'T<"clear">lfrtip',
        "pageLength": 50,
        "columnDefs": [
            {
                "searchable": false,
                "orderable": false,
                "targets": 0
            }
        ],
        "order": [
            [0, 'asc']
        ]
    });
    function deAD(str) {

        if (/[^a-dA-D]/.test(str) && str != '') {
            alert('O campo está errado, somente de A a D!');
            return false;
        }
        return true;
    }

    function deAE(str) {

        if (/[^a-eA-E]/.test(str) && str != '') {
            alert('O campo está errado, somente de A a E!');
            return false;
        }
        return true;
    }

    function de09(str) {

        if (/[^0-9]/g.test(str) && str != '') {
            alert('O campo está errado, somente números');
            return false;
        }
        return true;
    }

    $(document).on('keyup', '.alternativa', function (e) {
//    $('.alternativa').keyup(function () {

        if ($('#selectquestao').val() == '2') {
            deAD($(this).val());

        }
        if ($('#selectquestao').val() == '1') {

            deAE($(this).val());
        }
        if ($('#selectquestao').val() == '3') {
            de09($(this).val());
        }
        return false;
    });

    /*$("#enviar").click(function () {
        $("#criargabarito").submit();
    });*/
    $("#mais").click(function (e) {
        e.preventDefault();

        var next = $("#listagabarito tbody").children("tr").length + 1;


        $("#listagabarito tbody").append(
            "<tr>" +
                "<td class='sorting_1'><input id='questao' disabled class='form-control' type='text' name='questao' value='" + next + "' size='20'/>" +
                "</td>" +
                "<td><input id='alternativa' class='alternativa form-control' type='text' name='alternativa' size='20'/></td>" +
                "<td><button  id='deletagabarito' class='deletagabarito btn btn-danger glyphicon glyphicon-remove-sign'></button></td>" +
                "</tr>"
        );

    });
    $(document).on('click', '.deletagabarito', function (e) {
        e.preventDefault();
        //e.stopPropagation();
        var tr = $(this).closest('tr');
        tr.fadeOut(400, function () {
            tr.remove();
            var i = 1;
            $('#listagabarito .sorting_1> input').each(function () {
                $(this).val(i++);
            });
        });
    });
    $(document).on('click', '#enviarprova', function (e) {
        //e.preventDefault();
        //e.stopPropagation();

       var button =linha.closest('.gabarito0');


            button.removeClass('gabarito0 btn btn-primary').addClass('gabarito1 btn btn-success');
            button.html('Concluido');


    }); enviarprovaaluno
//########################################### modal gabaritar aluno ######################################################################
    $(document).on('click', '#enviarprovaaluno', function (e) {
        //e.preventDefault();
        //e.stopPropagation();

        var button =linha.closest('.gabaritoaluno0');


        button.removeClass('gabaritoaluno0 btn btn-primary').addClass('gabaritoaluno1 btn btn-success');
        button.html('Concluido');


    });
    $(document).on('focus', '#selectescola', function (e) {
        //console.log($(this).text());
        var _escola = $(this).find('option').filter(':selected').text();

        $.ajax({
            type: "POST",
            url: "listaavaliacao_adm/listaturmas",
            data: {escolas: _escola},
           // dataType: "json",

            success: function(json){
                json = JSON.parse(json);
                var options = "";
                $.each(json.values, function(key, data){
                    options += '<option value="' + key + '">' + data + '</option>';
                });
                $("#selectturma").html(options);
            }
        });
    });
    $('#gabaritarprova').dataTable({
        "dom": 'T<"clear">lfrtip',
        "pageLength": 50,
        "columnDefs": [
            {
                "searchable": false,
                "orderable": false,
                "targets": 1
            }
        ],
        "order": [
            [1, 'asc']
        ]
    });
    $(document).on('click', '#buscar', function (e) {
        e.preventDefault();
        e.stopPropagation();
        var _turma = $(this).find('option').filter(':selected').text();
        $.ajax({
            type: "POST",
            url: "listaavaliacao_adm/listaalunos",
            data: {turma: _turma},
            //dataType: "json",
            success: function(json){
                json = JSON.parse(json);
                var linhas, linhashead, altaluno = "";
                for(var i = 1; i <=  json.qtdquestao;i++){
                    linhashead+= "<th class='sorting' aria-label='"+i+": activate to sort column ascending' aria-controls='gabaritarprova'" +
                        ">"+i+"</th>";
                }
                linhas = "<thead>"+
                    "<tr>"+
                    "<th class='sorting' aria-label='Matrícula: activate to sort column ascending' aria-controls='gabaritarprova'" +
                    ">Matrícula</th>"+
                    "<th class='sorting_asc' aria-label='Nome: activate to sort column ascending' aria-sort='ascending' aria-controls='gabaritarprova'>Nome</th>";
                linhas +=linhashead;

                linhas +="</tr>"+
                         "<tr></tr></thead>";
                for(var i = 1; i <= json.qtdquestao;i++){
                   altaluno+= "<td><input id='alternativa"+i+"' class='form-control' type='text' name='alternativaaluno'/></td>";
                }
                linhas += "<tbody>";
                $.each(json.values, function(key,data){
                    linhas += "<tr><td>"+data.matricula+"</td><td class='sorting_1'>"+data.nome+"</td>"+ altaluno+
                        "<td><button class='salvagabaritoaluno btn btn-success glyphicon glyphicon-floppy-save'></button></td></tr>";

                });
                linhas+="</tbody>";
                $("#gabaritarprova").html(linhas);
            }
        })
    });
    $(document).on('click', '.salvagabaritoaluno', function (e) {
        e.preventDefault();
        e.stopPropagation();
        var tr = $(this).closest('tr');
        tr.addClass('success');
        $(this).removeClass('salvagabaritoaluno btn btn-success glyphicon glyphicon-floppy-save').addClass('editagabaritoaluno btn btn-warning glyphicon glyphicon-refresh');

    });
    $(document).on('click', '.editagabaritoaluno', function (e) {
        e.preventDefault();
        e.stopPropagation();
        var tr = $(this).closest('tr');
        tr.addClass('warning');

    });
//######################################################################################################################################
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
<!-- Modal -->
<!--################################## modal editar prova ################################################################-->
<div class="modal fade" id="modaleditar">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    &times;</button>
                <h4 class="modal-title">Editar prova</h4>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <!-- ######################### mesma forma que ocorre no cadastrar prova ########################################################## -->
                    <form id="editarprova" method="post" action="/listaavaliacao_adm/gabaritoprova">

                        <div id="wb_FormLista">

                            <form class="form-horizontal" method="post"
                                  enctype="text/plain" id="Form-horizontal">
                                <fieldset>
                                    <!-- Form Name -->
                                    <!--<legend>Filtrar avaliação</legend>-->
                                    <div class="alert alert-danger alert-dismissable" id="diverror2">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true"
                                                id="alerterror">&times;</button>

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
                                        <label class="col-md-4 control-label" for="tokenfield-escolas">Escolas</label>

                                        <div class="col-md-6">
                                            <input type="text" class="form-control" id="tokenfield-escolas" value=""
                                                   placeholder="Selecione as escolas desejadas"/>
                                            <span class="help-block">(digite o código da escola)</span>
                                        </div>
                                    </div>

                                    <!-- Button Drop Down -->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="tokenfield-escolas-nomes"></label>

                                        <div class="col-md-6">
                                            <input type="text" class="form-control" id="tokenfield-escolas-nomes"
                                                   value=""
                                                   placeholder="Lista de escolas"/>
                                        </div>
                                    </div>
                                    <!-- Button Drop Down -->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="tokenfield-serie">Ano/Série</label>

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
                                            <button type="submit" id="buttonsalvar2" name="singlebutton1"
                                                    class="btn btn-success">
                                                Salvar
                                            </button>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>

                        </div>
                        <div id="wb_FormConf">

                            <form class="form-horizontal" method="post"
                                  enctype="text/plain" id="Form-horizontal">
                                <fieldset>

                                    <!-- Form Name -->
                                    <!-- <legend>Cadastro de avaliação</legend>-->
                                    <div class="alert alert-danger alert-dismissable" id="diverror1">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true"
                                                id="alerterror">&times;</button>

                                        <input type='text' id='error1' name="error" value='' style="width:80em"
                                               autocomplete='off'>
                                    </div>
                                    <!-- Textarea -->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="textdescricao">Descrição da
                                            avaliação</label>

                                        <div class="col-md-6">
                                            <textarea class="form-control" id="textdescricao"
                                                      name="textdescricao"></textarea>
                                        </div>
                                    </div>

                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="inputnumero">Número da avaliação</label>
                                        <div class="col-md-2">
                                            <input id="inputnumero" name="inputnumero" type="text" placeholder="" class="form-control input-md" required="">

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="tokenfield-programa">Programa</label>

                                        <div class="col-md-6">

                                            <input type="text" class="form-control" id="tokenfield-programa"
                                                   placeholder="Selecione o programa da prova"/>

                                        </div>
                                    </div>
                                    <!-- Button Drop Down -->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="tokenfield-materia">Matéria</label>

                                        <div class="col-md-6">
                                            <input class="form-control" id="tokenfield-materia"
                                                   placeholder="Selecione a materia" type="text">
                                        </div>
                                    </div>
                                    <!-- Button -->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="buttonsalvar"></label>

                                        <div class="col-md-4">
                                            <button type="submit" id="buttonsalvar1" name="buttonsalvar"
                                                    class="btn btn-primary">Próximo
                                            </button>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>


                        </div>

                    </form>
                </div>
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
            <option value="3">numérico</option>
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
<tr>
    <td><input id='questao' disabled class="form-control" type="text" name="questao" value="1"
               size="20"/>
    </td>
    <td><input id='alternativa' class="alternativa form-control" type="text" name="alternativa" size="20"/>
    </td>
    <td>
        <button id="deletagabarito"
                class="deletagabarito btn btn-danger glyphicon glyphicon-remove-sign"></button>
    </td>
</tr>
<tr>
    <td><input id='questao' disabled class="form-control" type="text" name="questao" value="2"
               size="20"/>
    </td>
    <td><input id='alternativa' class="alternativa form-control" type="text" name="alternativa" size="20"/>
    </td>
    <td>
        <button id="deletagabarito"
                class="deletagabarito btn btn-danger glyphicon glyphicon-remove-sign"></button>
    </td>
</tr>
<tr>
    <td><input id='questao' disabled class="form-control" type="text" name="questao" value="3"
               size="20"/>
    </td>
    <td><input id='alternativa' class="alternativa form-control" type="text" name="alternativa" size="20"/>
    </td>
    <td>
        <button id="deletagabarito"
                class="deletagabarito btn btn-danger glyphicon glyphicon-remove-sign"></button>
    </td>
</tr>
<tr>
    <td><input id='questao' disabled class="form-control" type="text" name="questao" value="4"
               size="20"/>
    </td>
    <td><input id='alternativa' class="alternativa form-control" type="text" name="alternativa" size="20"/>
    </td>
    <td>
        <button id="deletagabarito"
                class="deletagabarito btn btn-danger glyphicon glyphicon-remove-sign"></button>
    </td>
</tr>
<tr>
    <td><input id='questao' disabled class="form-control" type="text" name="questao" value="5"
               size="20"/>
    </td>
    <td><input id='alternativa' class="alternativa form-control" type="text" name="alternativa" size="20"/>
    </td>
    <td>
        <button id="deletagabarito"
                class="deletagabarito btn btn-danger glyphicon glyphicon-remove-sign"></button>
    </td>
</tr>
<tr>
    <td><input id='questao' disabled class="form-control" type="text" name="questao" value="6"
               size="20"/>
    </td>
    <td><input id='alternativa' class="alternativa form-control" type="text" name="alternativa" size="20"/>
    </td>
    <td>
        <button id="deletagabarito"
                class="deletagabarito btn btn-danger glyphicon glyphicon-remove-sign"></button>
    </td>
</tr>
<tr>
    <td><input id='questao' disabled class="form-control" type="text" name="questao" value="7"
               size="20"/>
    </td>
    <td><input id='alternativa' class="alternativa form-control" type="text" name="alternativa" size="20"/>
    </td>
    <td>
        <button id="deletagabarito"
                class="deletagabarito btn btn-danger glyphicon glyphicon-remove-sign"></button>
    </td>
</tr>
<tr>
    <td><input id='questao' disabled class="form-control" type="text" name="questao" value="8"
               size="20"/>
    </td>
    <td><input id='alternativa' class="alternativa form-control" type="text" name="alternativa" size="20"/>
    </td>
    <td>
        <button id="deletagabarito"
                class="deletagabarito btn btn-danger glyphicon glyphicon-remove-sign"></button>
    </td>
</tr>
<tr>
    <td><input disabled class="form-control" type="text" name="questao" value="9" size="20"/>
    </td>
    <td><input id='alternativa' class="alternativa form-control" type="text" name="alternativa" size="20"/>
    </td>
    <td>
        <button id="deletagabarito"
                class="deletagabarito btn btn-danger glyphicon glyphicon-remove-sign"></button>
    </td>
</tr>
<tr>
    <td><input id='questao' disabled class="form-control" type="text" name="questao" value="10"
               size="20"/>
    </td>
    <td><input id='alternativa' class="alternativa form-control" type="text" name="alternativa" size="20"/>
    </td>
    <td>
        <button id="deletagabarito"
                class="deletagabarito btn btn-danger glyphicon glyphicon-remove-sign"></button>
    </td>
</tr>
<tr>
    <td><input id="questao" disabled class="form-control" type="text" name="questao" value="11"
               size="20"/>
    </td>
    <td><input class="form-control" type="text" name="alternativa" size="20"/></td>
    <td>
        <button id="deletagabarito"
                class="deletagabarito btn btn-danger glyphicon glyphicon-remove-sign"></button>
    </td>
</tr>
<tr>
    <td><input id='questao' disabled class="form-control" type="text" name="questao" value="12"
               size="20"/>
    </td>
    <td><input id='alternativa' class="alternativa form-control" type="text" name="alternativa" size="20"/>
    </td>
    <td>
        <button id="deletagabarito"
                class="deletagabarito btn btn-danger glyphicon glyphicon-remove-sign"></button>
    </td>
</tr>
<tr>
    <td><input id='questao' disabled class="form-control" type="text" name="questao" value="13"
               size="20"/>
    </td>
    <td><input id='alternativa' class="alternativa form-control" type="text" name="alternativa" size="20"/>
    </td>
    <td>
        <button id="deletagabarito"
                class="deletagabarito btn btn-danger glyphicon glyphicon-remove-sign"></button>
    </td>
</tr>
<tr>
    <td><input id='questao' disabled class="form-control" type="text" name="questao" value="14"
               size="20"/>
    </td>
    <td><input id='alternativa' class="alternativa form-control" type="text" name="alternativa" size="20"/>
    </td>
    <td>
        <button id="deletagabarito"
                class="deletagabarito btn btn-danger glyphicon glyphicon-remove-sign"></button>
    </td>
</tr>
<tr>
    <td><input id='questao' disabled class="form-control" type="text" name="questao" value="15"
               size="20"/>
    </td>
    <td><input id='alternativa' class="alternativa form-control" type="text" name="alternativa" size="20"/>
    </td>
    <td>
        <button id="deletagabarito"
                class="deletagabarito btn btn-danger glyphicon glyphicon-remove-sign"></button>
    </td>
</tr>
<tr>
    <td><input id='questao' disabled class="form-control" type="text" name="questao" value="16"
               size="20"/>
    </td>
    <td><input id='alternativa' class="alternativa form-control" type="text" name="alternativa" size="20"/>
    </td>
    <td>
        <button id="deletagabarito"
                class="deletagabarito btn btn-danger glyphicon glyphicon-remove-sign"></button>
    </td>
</tr>
<tr>
    <td><input id='questao' disabled class="form-control" type="text" name="questao" value="17"
               size="20"/>
    </td>
    <td><input id='alternativa' class="alternativa form-control" type="text" name="alternativa" size="20"/>
    </td>
    <td>
        <button id="deletagabarito"
                class="deletagabarito btn btn-danger glyphicon glyphicon-remove-sign"></button>
    </td>
</tr>
<tr>
    <td><input id='questao' disabled class="form-control" type="text" name="questao" value="18"
               size="20"/>
    </td>
    <td><input id='alternativa' class="alternativa form-control" type="text" name="alternativa" size="20"/>
    </td>
    <td>
        <button id="deletagabarito"
                class="deletagabarito btn btn-danger glyphicon glyphicon-remove-sign"></button>
    </td>
</tr>
<tr>
    <td><input id='questao' disabled class="form-control" type="text" name="questao" value="19"
               size="20"/>
    </td>
    <td><input id='alternativa' class="alternativa form-control" type="text" name="alternativa" size="20"/>
    </td>
    <td>
        <button id="deletagabarito"
                class="deletagabarito btn btn-danger glyphicon glyphicon-remove-sign"></button>
    </td>
</tr>
<tr>
    <td><input id='questao' disabled class="form-control" type="text" name="questao" value="20"
               size="20"/>
    </td>
    <td><input id='alternativa' class="alternativa form-control" type="text" name="alternativa" size="20"/>
    </td>
    <td>
        <button id="deletagabarito"
                class="deletagabarito btn btn-danger glyphicon glyphicon-remove-sign"></button>
    </td>
</tr>
</tbody>
</table>
<!–Irá armazenar a quantidade de linhas–>
<input id="total" type="hidden" value="1" name="Alternativa"/>
<!--<a href="#" id="enviar">enviar</a>-->
<button id="mais" class='btn btn-info glyphicon glyphicon-plus-sign'>Add questão
</button>

</form>
</div>
<div class="modal-footer">

    <button data-dismiss='modal' aria-hidden='true' class='btn btn-danger'>Cancelar
    </button>
    <button id="enviarprova" class='btn btn-success'>Salvar
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
                        <fieldset>
                    <!-- Select Basic -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="selectescola">Escola :</label>
                        <div class="col-md-5">
                            <select id="selectescola" name="selectescola" class="form-control">
                            </select>
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
                        </div>
                    <legend>Preencha as alternativas dos alunos</legend>
                <!--#####################tabela de gabarito de aluno ##############################################################################-->
                    <table id="gabaritarprova" class="table table-striped">
                        <!--<thead>
                        ####cabeçalho criado em javascript #######
                        </thead>
                        <tbody>
                        ####corpo criado em javascript ########
                        </tbody>-->
                    </table>

                </form>
            </div>
            <div class="modal-footer">

                <button data-dismiss='modal' aria-hidden='true' class='btn btn-danger'>Cancelar
                </button>
                <button id="enviarprovaaluno" class='btn btn-success'>Salvar
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
                    <form name="logoutform" method="post" action="<?php echo URL; ?>/listaavaliacao_adm/logout" id="logoutform">
                        <input type="hidden" name="form_name" value="logoutform">
                        <input type="image" name="logout" id="logout" src="<?php echo URL; ?>/public/img/logout.gif"/>
                    </form>
                </div>
                <div id="wb_Logout2" style="position:absolute;left:905px;top:19px;width:45px;height:23px;z-index:16;">
                    <form name="logoutform" method="post" action="<?php echo URL; ?>/listaavaliacao_adm/logout" id="logoutform">
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

</body>
</html>