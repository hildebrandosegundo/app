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
<link href="<?php echo URL; ?>/public/css/dataTables.tableTools.css" type="text/css" rel="stylesheet">

<script type="text/javascript" src="<?php echo URL; ?>/public/js/jquery.autotab.js"></script>
<script type="text/javascript" src="<?php echo URL; ?>/public/js/dataTables.tableTools.js"></script>
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

    /* Start by setting display:none to make this hidden.
       Then we position it in relation to the viewport window
       with position:fixed. Width, height, top and left speak
       speak for themselves. Background we set to 80% white with
       our animation centered, and no-repeating */
    .modalloading {
        display: none;
        position: fixed;
        z-index: 1500;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        background: rgba(255, 255, 255, .8) url('<?php echo URL; ?>/public/img/gifteresina2.gif') 50% 50% no-repeat;
    }

    /* When the body has the loading class, we turn
       the scrollbar off with overflow:hidden */
    body.loading {
        overflow: hidden;
    }

    /* Anytime the body has the loading class, our
       modal element will be visible */
    body.loading .modalloading {
        display: block;
    }

    .modal-body {
        position: relative;
        overflow-y: auto;
        max-height: 950px;
        padding: 15px;
    }

    .autoModal.modal .modal-body {
        max-height: 100%;
    }
</style>
<script type="text/javascript">
var table, listagabarito, alteralistagabarito, linha, linha2, id_table = null;
RemoveTableRow = function (handler) {
    id_table = table.row($(handler).parents('tr')).data();
    var result = confirm("Você deseja deletar esta prova?");
    if (result == true) {
        $.ajax({
            type: "POST",
            url: "<?php echo URL; ?>/listaavaliacao_adm/excluiavaliacao",
            data: {
                id: id_table['id_avaliacao']
            },
            //dataType: "json",
            success: function (data) {
                data = JSON.parse(data);
                alert(data.values);
            }
        });
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
    id_table = table.row($(d).parents('tr')).data();
    data = new Date();
    $('#inputano').val(data.getFullYear());
    $('#modaleditar').modal('show');
    return false;

};
GabaritoAlunoRow = function (d) {
    //console.log(d);
    id_table = table.row($(d).parents('tr')).data();
    $('#modalgabaritoaluno').modal('show');
    linha = $(d);
    $('#wb_FormLista').show();
    $('#wb_FormGabarito').hide();
    return false;
};
function init() {
    var autoSuggestion = document.getElementsByClassName('ui-autocomplete');
    if (autoSuggestion.length > 0) {
        autoSuggestion[0].style.zIndex = 1051;
    }

}
GabaritoTableRow = function (d) {
    id_table = table.row($(d).parents('tr')).data();

    $('#modalgabarito').modal('show');
    linha = $(d);
    linha2 = id_table['gabarito_aluno_comp'];// $(d).parents('tr #gabaritoaluno');
    console.log(linha2);
    return false;
};
function format(d, json) {
    // `d` is the original data object for the row
    return '<table id="tabela" cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">' +
        '<tr>' +
        '<td>Descrição:</td>' +
        '<td>' + json.descricao + '</td>' +
        '</tr>' +
        '<tr>' +
        '<td>Ano:</td>' +
        '<td>' + json.ano + '</td>' +
        '</tr>' +
        '<tr>' +
        '<td>Tipo:</td>' +
        '<td>' + json.tipo + '</td>' +
        '</tr>' +
        '</table>';
}

$(document).ready(function () {

//######################################## pagina com lista de provas #################################################
    table = $('#example').DataTable({
        "dom": 'T<"clear">lfrtip',
        "oTableTools": {
            "sSwfPath": "<?php echo URL; ?>/public/swf/copy_csv_xls_pdf.swf"
        },
        "ajax": "<?php echo URL; ?>/listaavaliacao_adm/lista",

        "columns": [
            { "data": "id_avaliacao" },
            { "data": "serie" },
            { "data": "num_avaliacao" },
            { "data": "programa" },
            { "data": "materia" },
            { "data": "gabarito_prova_comp" },
            { "data": "gabarito_aluno_comp" }
        ],
        "order": [
            [0, 'des']
        ],
        "bDestroy": true

    });

    // Add event listener for opening and closing details
    $('#example tbody').on('click', '#info', function (e) {
        var tr = $(this).parents('tr');
        var data = table.row($(this).parents('tr')).data();
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
            $.ajax({
                type: "POST",
                url: "listaavaliacao_adm/info",
                data: {id: data['id_avaliacao']},
                // dataType: "json",
                success: function (json) {
                    json = JSON.parse(json);
                    // Open this row
                    row.child(format(row.data(), json)).show();
                    tr.addClass('shown');
                }
            });
        }

    });
    $('#example tbody').on('click', '.gabaritoaluno0', function (e) {
        var data = table.row($(this).parents('tr')).data();
        e.preventDefault();
        e.stopPropagation();
        // console.log(data[0]);
        GabaritoAlunoRow($(this));


    });
    $('#example tbody').on('mouseover', '.gabaritoaluno1', function (e) {
        $(this).removeClass('btn btn-success glyphicon glyphicon-ok').addClass('btn btn-warning glyphicon glyphicon-pencil');
        $(this).html('Editar');
    });
    $('#example tbody').on('mouseleave', '.gabaritoaluno1', function (e) {
        $(this).removeClass('btn btn-warning glyphicon glyphicon-pencil').addClass('btn btn-success glyphicon glyphicon-ok');
        $(this).html('Concluido');
    });
    $('#example tbody').on('mouseover', '.gabarito1', function (e) {
        $(this).removeClass('btn btn-success glyphicon glyphicon-ok').addClass('btn btn-warning glyphicon glyphicon-pencil');
        $(this).html('Editar');
    });
    $('#example tbody').on('mouseleave', '.gabarito1', function (e) {
        $(this).removeClass('btn btn-warning glyphicon glyphicon-pencil').addClass('btn btn-success glyphicon glyphicon-ok');
        $(this).html('Concluido');
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
    $("#cadMateria").hide();
    $("#cadPrograma").hide();
    $("#wb_FormLista").hide();
    $("#edMateria").hide();
    $("#edPrograma").hide();
    $("#progmat").hide();
    $("#editargabarito").hide();

    var cod_escolas;
    var nome_escolas;
    var turmas;
    $(document).on('keyup', '#inputnumero', function (e) {
        de09($(this).val());
        return false;
    });
    $('#novoprograma').click(function (e) {
        e.preventDefault();
        e.stopPropagation();
        $("#cadMateria").hide();
        $("#edMateria").hide();
        $("#cadPrograma").show();
        $("#edPrograma").hide();
    });
    $('#novamateria').click(function (e) {
        e.preventDefault();
        e.stopPropagation();
        $("#cadMateria").show();
        $("#edMateria").hide();
        $("#cadPrograma").hide();
        $("#edPrograma").hide();

        $("#cadPrograma").hide();

    });
    $('#excluimateria').click(function (e) {
        e.preventDefault();
        e.stopPropagation();
        $("#cadMateria").hide();
        $("#edMateria").hide();

        $("#cadPrograma").hide();
        $("#edPrograma").hide();


        var result = confirm("Você deseja deletar esta matéria?");
        if (result == true) {
            var token = $('#tokenfield-materia').val().split('-');
            $.ajax({
                type: "POST",
                url: "<?php echo URL; ?>/cadastroavaliacao_adm/excluirmateria",
                data: {
                    id: token[0]
                },
                success: function (data) {
                    data = JSON.parse(data);
                    if (data.sucesso) {

                        alert(token[1] + " excluido com sucesso!!");
                        $('.materia').click();
                    }
                }

            });
        }
        return false;
    });
    $('#excluiprograma').click(function (e) {
        e.preventDefault();
        e.stopPropagation();
        $("#cadMateria").hide();
        $("#edMateria").hide();

        $("#cadPrograma").hide();
        $("#edPrograma").hide();


        var result = confirm("Você deseja deletar este Programa?");
        if (result == true) {
            var token = $('#tokenfield-programa').val().split('-');
            $.ajax({
                type: "POST",
                url: "<?php echo URL; ?>/cadastroavaliacao_adm/excluirprograma",
                data: {
                    id: token[0]
                },
                success: function (data) {
                    data = JSON.parse(data);
                    if (data.sucesso) {

                        alert(token[1] + " excluido com sucesso!!");
                        $('.programa').click();
                    }
                }

            });
        }
        return false;
    });
    /* $('#editaprograma').click(function (e) {
     e.preventDefault();
     e.stopPropagation();

     });*/
    $('#cadastrarmateria').click(function (e) {
        e.preventDefault();
        e.stopPropagation();
        var _nome = $("#inputmateria").val();
        $.ajax({
            type: "POST",
            url: "<?php echo URL; ?>/cadastroavaliacao_adm/cadastrarmateria",
            data: {
                nome: _nome
            },
            success: function (data) {
                data = JSON.parse(data);
                if (data.sucesso) {
                    $("#cadMateria").hide();
                    alert(data.nome + " cadastrado com sucesso!!");
                }
            }

        });

    });
    $('#editarmateria').click(function (e) {
        e.preventDefault();
        e.stopPropagation();
        var _nome = $("#inputedmateria").val();
        var _id = $("#inputedmateriaid").val();
        $.ajax({
            type: "POST",
            url: "<?php echo URL; ?>/cadastroavaliacao_adm/editarmateria",
            data: {
                nome: _nome,
                id: _id
            },
            success: function (data) {
                data = JSON.parse(data);
                if (data.sucesso) {
                    $("#edMateria").hide();
                    alert(_nome + " editado com sucesso!!");
                }
            }

        });

    });
    $(document).on('click', '#editamateria', function (e) {
        e.preventDefault();
        e.stopPropagation();
        var token = $('#tokenfield-materia').val().split('-');
        $("#inputedmateriaid").val(token[0]);
        $("#inputedmateria").val(token[1]);

        $("#cadMateria").hide();
        $("#edMateria").show();

        $("#cadPrograma").hide();
        $("#edPrograma").hide();


        //$('#modalcadprogmat').modal('show');
    });
    $(document).on('click', '#editaprograma', function (e) {
        e.preventDefault();
        e.stopPropagation();
        var token = $('#tokenfield-programa').val().split('-');
        $("#inputedprogramaid").val(token[0]);
        $("#inputedprograma").val(token[1]);

        $("#cadMateria").hide();
        $("#edMateria").hide();

        $("#cadPrograma").hide();
        $("#edPrograma").show();


        //$('#modalcadprogmat').modal('show');
    });
    $('#editarprograma').click(function (e) {
        e.preventDefault();
        e.stopPropagation();
        var _nome = $("#inputedprograma").val();
        var _id = $("#inputedprogramaid").val();
        $.ajax({
            type: "POST",
            url: "<?php echo URL; ?>/cadastroavaliacao_adm/editarprograma",
            data: {
                nome: _nome,
                id: _id
            },
            success: function (data) {
                data = JSON.parse(data);
                if (data.sucesso) {
                    $("#edPrograma").hide();
                    alert(_nome + " editado com sucesso!!");
                }
            }

        });

    });
    $(document).on('click', '.materia', function (e) {
        e.preventDefault();
        e.stopPropagation();
        $('#tokenfield-materia').val('Carregando...');

        $.ajax({
            type: "POST",
            url: "<?php echo URL; ?>/cadastroavaliacao_adm/selectmateria",
            data: {
                materia: '*'
            },
            success: function (data) {
                data = JSON.parse(data);
                if (data.sucesso) {
                    $('#tokenfield-materia').val('');
                    $('#tokenfield-materia').data('bs.tokenfield').$input.val('');
                    $('#tokenfield-materia').data('bs.tokenfield').$input.autocomplete({source: data.nome});
                }
            }

        });

    });
    $('#cadastrarprograma').click(function (e) {
        e.preventDefault();
        e.stopPropagation();
        var _nome = $("#inputprograma").val();
        $.ajax({
            type: "POST",
            url: "<?php echo URL; ?>/cadastroavaliacao_adm/cadastrarprograma",
            data: {
                nome: _nome
            },
            success: function (data) {
                data = JSON.parse(data);
                if (data.sucesso) {
                    $("#cadPrograma").hide();
                    alert(data.nome + " cadastrado com sucesso!!");
                }
            }

        });

    });
    $(document).on('click', '.programa', function (e) {
        e.preventDefault();
        e.stopPropagation();
        $('#tokenfield-programa').val('Carregando...');
        setTimeout(function () {
            $.ajax({
                type: "POST",
                url: "<?php echo URL; ?>/cadastroavaliacao_adm/selectprograma",
                data: {
                    programa: '*'
                },
                success: function (data) {
                    data = JSON.parse(data);
                    if (data.sucesso) {

                        $('#tokenfield-programa').val('');
                        $('#tokenfield-programa').data('bs.tokenfield').$input.val('');
                        $('#tokenfield-programa').data('bs.tokenfield').$input.autocomplete({source: data.nome});
                    }
                }

            });
        }, 1500);
    });
    $(document).on('focus', '#textdescricao', function (e) {
        $('#tokenfield-programa').val('Carregando...');
        $("#progmat").show('slide', {direction: 'down'}, 500);
        $.ajax({
            type: "POST",
            url: "<?php echo URL; ?>/cadastroavaliacao_adm/selectprograma",
            data: {
                programa: '*'
            },
            success: function (data) {
                data = JSON.parse(data);
                if (data.sucesso) {
                    $('#tokenfield-programa').val('');
                    $('#tokenfield-programa').data('bs.tokenfield').$input.val('');
                    $('#tokenfield-programa').data('bs.tokenfield').$input.autocomplete({source: data.nome});
                }
            }

        });
    });

    $(document).on('focus', '#textdescricao', function (e) {
        $('#tokenfield-materia').val('Carregando...');


        $.ajax({
            type: "POST",
            url: "<?php echo URL; ?>/cadastroavaliacao_adm/selectmateria",
            data: {
                materia: '*'
            },
            success: function (data) {
                data = JSON.parse(data);
                if (data.sucesso) {
                    $('#tokenfield-materia').val('');
                    $('#tokenfield-materia').data('bs.tokenfield').$input.val('');
                    $('#tokenfield-materia').data('bs.tokenfield').$input.autocomplete({source: data.nome});
                }
            }

        });
    });

    $(document).on('click', '.buttoneditar1', function (e) {

        e.preventDefault();
        e.stopPropagation();
        var _textdescricao = $("#textdescricao").val();
        var _tokenfield_programa = $("#tokenfield-programa").val().split('-')[1];

        var _tokenfield_materia = $("#tokenfield-materia").val().split('-')[1];

        var _op = $('#inputnumero').val();
        var _tipo = $('#tipodeprova').find('option').filter(':selected').text();
        var _serie = $("#tokenfield-anoserie").val();
        var _ano = $('#inputano').val();
        $.ajax({
            type: "POST",
            url: "<?php echo URL; ?>/listaavaliacao_adm/atualizaravaliacao",
            data: {
                textdescricao: _textdescricao,
                tokenfield_programa: _tokenfield_programa,
                tokenfield_materia: _tokenfield_materia,
                op: _op,
                serie: _serie,
                tipo: _tipo,
                ano: _ano,
                id: id_table['id_avaliacao']
            },
            success: function (data) {
                data = JSON.parse(data);
                if (data.sucesso) {
                    $("#error1").val('');
                    $("#diverror1").hide();
                    alert(data.values);
                }
                else {
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
            url: "<?php echo URL; ?>/listaavaliacao_adm/selectzona",
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
            url: "<?php echo URL; ?>/listaavaliacao_adm/selecionaescolacod",
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
            url: "<?php echo URL; ?>/listaavaliacao_adm/selecionaserie",
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
            source: ['ZONA NORTE', 'ZONA SUL', 'ZONA LESTE', 'ZONA SUDESTE'],
            delay: 100
        },
        showAutocompleteOnFocus: true
    });
    $('#tokenfield-escolas').tokenfield({
        limit: 1,
        autocomplete: {
            delay: 100
        },
        showAutocompleteOnFocus: true
    });
    $('#tokenfield-escolas-nomes').tokenfield({
        limit: 1,
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
    $('#tokenfield-anoserie').tokenfield({
        limit: 1,
        autocomplete: {
            source: ['1 ANO', '2 ANO', '3 ANO', '4 ANO', '5 ANO', '6 ANO', '7 ANO', '8 ANO', '9 ANO',
                '1 SERIE', '2 SERIE', '3 SERIE', '4 SERIE', '5 SERIE', '6 SERIE', '7 SERIE', '8 SERIE',
                'ALFABETIZACAO', 'MULTISERIADA', 'SELIGA', 'ACELERA', 'MATERNAL', 'MATERNAL I', 'MATERNAL II',
                'MATERNALZINHO', 'BERCARIO', '1 PERIODO', '2 PERIODO'],

            delay: 100
        },
        showAutocompleteOnFocus: true
    });
    $('#tokenfield-materia').tokenfield({
        limit: 1,
        autocomplete: {
            delay: 100
        },
        showAutocompleteOnFocus: true
    });
    $('#tokenfield-programa').tokenfield({
        limit: 1,
        autocomplete: {
            delay: 100
        },
        showAutocompleteOnFocus: true
    });
//###################################### modal gabarito ###################################################
    listagabarito = $('#listagabarito').dataTable({
        "ajax": "<?php echo URL; ?>/listaavaliacao_adm/gabaritoprova",
        "dom": 'T<"clear">lfrtip',
        "pageLength": 50,
        "columns": [
            { "data": "num_questao" },
            { "data": "alternativa" },
            { "data": "option" }
        ],
        "columnDefs": [
            {
                "searchable": false,
                "orderable": false,
                "targets": 0
            }
        ],
        "order": [
            [0, 'asc']
        ],
        "bDestroy": true
    });


    function de09(str) {

        if (/[^0-9]/g.test(str) && str != '') {
            alert('O campo está errado, somente números');
            return false;
        }
        return true;
    }

    $(document).on('click', '.alternativa', function (e) {
        if ($('#selectquestao').val() == '2') {
            $('.alternativa').autotab('filter', { format: 'custom', pattern: '[^a-dA-D]', uppercase: true }, { maxlength: 1 });

        }
        if ($('#selectquestao').val() == '1') {

            $('.alternativa').autotab('filter', { format: 'custom', pattern: '[^a-eA-E]', uppercase: true }, { maxlength: 1 });
        }
        if ($('#selectquestao').val() == '4') {
            $('.alternativa').autotab('filter', { format: 'custom', pattern: '[^0-9\.]', uppercase: true }, { maxlength: 1 });
        }
        if ($('#selectquestao').val() == '3') {
            $('.alternativa').autotab('filter', { format: 'custom', pattern: '[^fFVv]', uppercase: true }, { maxlength: 1 });
        }
        $('.alternativa').autotab({ maxlength: 1, uppercase: true });
    });
    $(document).on('click', '.alt_alternativa', function (e) {
        if ($('#selectquestao').val() == '2') {
            $('.alt_alternativa').autotab('filter', { format: 'custom', pattern: '[^a-dA-D]', uppercase: true }, { maxlength: 1 });

        }
        if ($('#selectquestao').val() == '1') {

            $('.alt_alternativa').autotab('filter', { format: 'custom', pattern: '[^a-eA-E]', uppercase: true }, { maxlength: 1 });
        }
        if ($('#selectquestao').val() == '4') {
            $('.alt_alternativa').autotab('filter', { format: 'custom', pattern: '[^0-9\.]', uppercase: true }, { maxlength: 1 });
        }
        if ($('#selectquestao').val() == '3') {
            $('.alt_alternativa').autotab('filter', { format: 'custom', pattern: '[^fFVv]', uppercase: true }, { maxlength: 1 });
        }
        $('.alternativa').autotab({ maxlength: 1, uppercase: true });
    });
    $(document).on('keyup', '.alternativa', function (e) {
//    $('.alternativa').keyup(function () {

        if ($('#selectquestao').val() == '2') {
            $('.alternativa').autotab('filter', { format: 'custom', pattern: '[^a-dA-D]', uppercase: true }, { maxlength: 1 });

        }
        if ($('#selectquestao').val() == '1') {

            $('.alternativa').autotab('filter', { format: 'custom', pattern: '[^a-eA-E]', uppercase: true }, { maxlength: 1 });
        }
        if ($('#selectquestao').val() == '4') {
            $('.alternativa').autotab('filter', { format: 'custom', pattern: '[^0-9\.]', uppercase: true }, { maxlength: 1 });
        }
        if ($('#selectquestao').val() == '3') {
            $('.alternativa').autotab('filter', { format: 'custom', pattern: '[^fFVv]', uppercase: true }, { maxlength: 1 });
        }

        $('.alternativa').autotab({ maxlength: 1, uppercase: true});
        return false;
    });
    $(document).on('keyup', '.alt_alternativa', function (e) {

        if ($('#selectquestao').val() == '2') {
            $('.alt_alternativa').autotab('filter', { format: 'custom', pattern: '[^a-dA-D]', uppercase: true }, { maxlength: 1 });

        }
        if ($('#selectquestao').val() == '1') {

            $('.alt_alternativa').autotab('filter', { format: 'custom', pattern: '[^a-eA-E]', uppercase: true }, { maxlength: 1 });
        }
        if ($('#selectquestao').val() == '4') {
            $('.alt_alternativa').autotab('filter', { format: 'custom', pattern: '[^0-9\.]', uppercase: true }, { maxlength: 1 });
        }
        if ($('#selectquestao').val() == '3') {
            $('.alt_alternativa').autotab('filter', { format: 'custom', pattern: '[^fFVv]', uppercase: true }, { maxlength: 1 });
        }

        $('.alternativa').autotab({ maxlength: 1, uppercase: true});
        return false;
    });
    $(document).on('keyup', '#inputano', function (e) {
        de09($(this).val());
        return false;
    });
    /*$("#enviar").click(function () {
     $("#criargabarito").submit();
     });*/
    $(document).on('click', '#mais', function (e) {

        e.preventDefault();
        //e.stopPropagation();
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
        e.stopPropagation();
        var tr = $(this).closest('tr');
        tr.fadeOut(400, function () {
            tr.remove();
            var i = 1;
            $('#listagabarito .sorting_1> input').each(function () {
                $(this).val(i++);
            });
        });
    });
    $(document).on('click', '#salvaprova', function (e) {
        e.preventDefault();
        e.stopPropagation();
        var _num_questoes = [];
        var _alternativas = [];
        var _qtd_questoes = null;
        $('.num_questao').each(function () {
            _num_questoes.push($(this).val());
            _qtd_questoes = $(this).val();
        });
        $('.alternativa').each(function () {
            _alternativas.push($(this).val());
        });
        /*console.log(_num_questoes);
         console.log(_alternativas);
         console.log(_qtd_questoes);
         console.log(id_table['id_avaliacao']);*/
        $.ajax({
            type: "POST",
            url: "<?php echo URL; ?>/listaavaliacao_adm/salvaprova",
            data: {
                num_questoes: _num_questoes,
                alternativas: _alternativas,
                qtd_questoes: _qtd_questoes,
                id: id_table['id_avaliacao']
            },
            //dataType: "json",
            success: function (data) {
                data = JSON.parse(data);
                alert(data.values);

            }
        });

        var button = linha.closest('.gabarito0');
        button.removeClass('gabarito0 btn btn-primary glyphicon glyphicon-plus').addClass('gabarito1 btn btn-success glyphicon glyphicon-ok');
        button.html('Concluido');

        var buttonaluno = linha2.closest('#gabaritoaluno');
        buttonaluno.removeClass('gabaritoaluno0 disabled btn btn-default glyphicon glyphicon-thumbs-down').addClass('gabaritoaluno0 btn btn-primary glyphicon glyphicon-plus');

    });
    $(document).on('click', '#editaprova', function (e) {
        e.preventDefault();
        e.stopPropagation();
        var _num_questoes = [];
        var _id_questoes = [];
        var _alternativas = [];
        var _qtd_questoes = null;
        $('.alt_id_questao').each(function () {
            _id_questoes.push($(this).val());

        });
        $('.alt_num_questao').each(function () {
            _num_questoes.push($(this).val());
            _qtd_questoes = $(this).val();
        });
        $('.alt_alternativa').each(function () {
            _alternativas.push($(this).val());
        });

        $.ajax({
            type: "POST",
            url: "<?php echo URL; ?>/listaavaliacao_adm/editaprova",
            data: {
                num_questoes: _num_questoes,
                alternativas: _alternativas,
                qtd_questoes: _qtd_questoes,
                id_questoes: _id_questoes,
                id: id_table['id_avaliacao']
            },
            //dataType: "json",
            success: function (data) {
                data = JSON.parse(data);
                alert(data.values);

            }
        });
    });
//########################################### modal gabaritar aluno ######################################################################
    $(document).on('click', '#enviarprovaaluno', function (e) {
        //e.preventDefault();
        //e.stopPropagation();

        var button = linha.closest('.gabaritoaluno0');
        button.removeClass('gabaritoaluno0 btn btn-primary glyphicon glyphicon-plus').addClass('gabaritoaluno1 btn btn-success glyphicon glyphicon-ok');
        button.html('Concluido');
    });
    $(document).on('click', '.gabarito1', function (e) {

        id_table = table.row($(this).parents('tr')).data();
        alteralistagabarito = $('#alterarlistagabarito').dataTable({
            "ajax": {
                type: "POST",
                url: "<?php echo URL; ?>/listaavaliacao_adm/alteragabaritoprova",
                data: {
                    id: id_table['id_avaliacao']
                }
            },
            "dom": 'T<"clear">lfrtip',
            "pageLength": 50,
            "columns": [
                { "data": "id"},
                { "data": "num_questao" },
                { "data": "alternativa" }
            ],
            "columnDefs": [
                {
                    "searchable": false,
                    "orderable": false,
                    "targets": 0
                }
            ],
            "order": [
                [0, 'asc']
            ],
            "bDestroy": true

        });

        $('#modalalteragabarito').modal('show');
        return false;
        // $('#modalalteragabarito div').empty();
    });

    $('#gabaritarprova').dataTable({
        "dom": 'T<"clear">lfrtip',
        "pageLength": 50,
        "columnDefs": [
            {
                "searchable": true,
                "orderable": true,
                "targets": 1
            }
        ],
        "bDestroy": true
    });

    $(document).on('click', '#buscar', function (e) {
        e.preventDefault();
        e.stopPropagation();
        var _turma = $('#selectturma').find('option').filter(':selected').text();
        console.log(_turma);

        var _escola = $('#selectescola').val();
        console.log(_escola);

        $.ajax({
            type: "POST",
            url: "listaavaliacao_adm/listaalunos",
            data: {turma: _turma,
                escola: _escola,
                id: id_table['id_avaliacao']},
            //dataType: "json",
            success: function (json) {
                json = JSON.parse(json);
                var linhas, linhashead, altaluno = "";
                for (var i = 1; i <= json.qtdquestao; i++) {
                    linhashead += "<th aria-label='" + i + ": activate to sort column ascending' aria-controls='gabaritarprova'" +
                        ">" + i + "</th>";
                }
                linhas = "<thead>" +
                    "<tr>" +
                    "<th class='sorting' aria-label='Matrícula: activate to sort column ascending' aria-controls='gabaritarprova'" +
                    ">Matrícula</th>" +
                    "<th class='sorting_asc' aria-label='Nome: activate to sort column ascending' aria-sort='ascending' aria-controls='gabaritarprova'>Nome</th>";
                linhas += linhashead;

                linhas += "</tr>" +
                    "<tr></tr></thead>";
                for (var i = 1; i <= json.qtdquestao; i++) {
                    altaluno += "<td><input type='text' class='alternativaaluno' name='alternativaaluno' size='1'/></td>";
                }
                linhas += "<tbody>";
                $.each(json.values, function (key, data) {
                    linhas += "<tr><td>" + data.TB0026_COD_ALUNO + "</td><td class='sorting_1'>" + data.TB0137_NOME_PESSOA + "</td>" + altaluno +
                        "<td><button class='salvagabaritoaluno btn btn-success glyphicon glyphicon-floppy-save'></button></td></tr>";

                });
                linhas += "</tbody>";
                $("#gabaritarprova").html(linhas);

            }
        })
    });
    $(document).on('click', '#buttonfiltrar', function (e) {
        e.preventDefault();
        e.stopPropagation();
        $('#wb_FormLista').hide();
        $('#wb_FormGabarito').show();
        var options = "";
        $('#selectescola').val($('#tokenfield-escolas').val());
        var turmas = $('#tokenfield-turma').val().split(',');
        console.log(turmas);
        $.each(turmas, function (key, data) {
            options += '<option value="' + key + '">' + data + '</option>';
        });
        $("#selectturma").html(options);


    });
    $(document).on('click', '.salvagabaritoaluno', function (e) {
        e.preventDefault();
        e.stopPropagation();
        var tr = $(this).closest('tr');
        tr.addClass('success');
        var _questoes = [];
        $(this).removeClass('salvagabaritoaluno btn btn-success glyphicon glyphicon-floppy-save').addClass('editagabaritoaluno btn btn-warning glyphicon glyphicon-refresh');
       tr.on('focus',function(){
           $(this).$(".alternativaaluno").each(function () {
               _questoes.push($(this).val());

           });
       });

        console.log(_questoes);
    });
    $(document).on('click', '.editagabaritoaluno', function (e) {
        e.preventDefault();
        e.stopPropagation();
        var tr = $(this).closest('tr');
        tr.addClass('warning');

    });

//######################################################################################################################################
    $body = $("body");
    $(document).on({
        ajaxStart: function () {
            $body.addClass("loading");
        },
        ajaxStop: function () {
            $body.removeClass("loading");
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
                            <th>ID</th>
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

</body>
</html>