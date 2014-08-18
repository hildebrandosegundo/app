/**
 * Created by Avell B154 PLUS on 14/07/14.
 */

var table, listagabarito, alteralistagabarito, linha, linha2, id_table = null;

RemoveTableRow = function (handler) {
    id_table = table.row($(handler).parents('tr')).data();
    var result = confirm("Você deseja deletar esta prova?");
    var _matricula_usuario = $('#matriculausuario').val();

    if (result == true) {
        $.ajax({
            type: "POST",
            url: "listaavaliacao_adm/excluiavaliacao",
            data: {
                id: id_table['id_avaliacao'],
                matricula_usuario: _matricula_usuario
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
    id_table = table.row($(d).parents('tr')).data();
    data = new Date();
    $('#inputano').val(data.getFullYear());
    $('#modaleditar').modal('show');
    return false;

};
GabaritoAlunoRow = function (d) {
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
    linha2 = $(d).parents('tr').find('.gabaritoaluno');// $(d).parents('tr #gabaritoaluno');
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
        "sDom": 'Tlfrtip',
        "oTableTools": {
            "sSwfPath": "../../swf/copy_csv_xls_pdf.swf"
        },
        "ajax": "listaavaliacao_adm/lista",

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
        $('.close').click();
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
                url: "cadastroavaliacao_adm/excluirmateria",
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
                url: "cadastroavaliacao_adm/excluirprograma",
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

    $('#cadastrarmateria').click(function (e) {
        e.preventDefault();
        e.stopPropagation();
        var _nome = $("#inputmateria").val();
        $.ajax({
            type: "POST",
            url: "cadastroavaliacao_adm/cadastrarmateria",
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
            url: "cadastroavaliacao_adm/editarmateria",
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
            url: "cadastroavaliacao_adm/editarprograma",
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
            url: "cadastroavaliacao_adm/selectmateria",
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
            url: "cadastroavaliacao_adm/cadastrarprograma",
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
                url: "cadastroavaliacao_adm/selectprograma",
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
            url: "cadastroavaliacao_adm/selectprograma",
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
            url: "cadastroavaliacao_adm/selectmateria",
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
        var _matricula_usuario = $('#matriculausuario').val();

        $.ajax({
            type: "POST",
            url: "listaavaliacao_adm/atualizaravaliacao",
            data: {
                textdescricao: _textdescricao,
                tokenfield_programa: _tokenfield_programa,
                tokenfield_materia: _tokenfield_materia,
                op: _op,
                serie: _serie,
                tipo: _tipo,
                ano: _ano,
                matricula_usuario: _matricula_usuario,
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
        $('#tokenfield-escolas').data('bs.tokenfield').$input.val('Carregando...');
        $('#tokenfield-escolas-nomes').data('bs.tokenfield').$input.val('Carregando...');
        $.ajax({
            type: "POST",
            url: "listaavaliacao_adm/selectzona",
            data: {
                zona: _zona
            },
//dataType: "json",
            success: function (data) {

                data = JSON.parse(data);
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
                    $('#tokenfield-serie').data('bs.tokenfield').$input.val('');
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
        $.ajax({
            type: "POST",
            url: "listaavaliacao_adm/selecionaescolacod",
            data: {
                escolas_cod: _escolas_cod,
                escolas_nome: _nome_escola,
                escolas_cod2: _cod_escola,
                serie_prova: id_table['serie']
            },
//dataType: "json",
            success: function (data) {

                data = JSON.parse(data);
                if (data.sucesso) {
                    $("#error2").val('');
                    $("#diverror2").hide();
                    $('#tokenfield-escolas-nomes').tokenfield('setTokens', data.values);
                    //$('#tokenfield-serie').val(data.ano);
                    //$('#tokenfield-serie').tokenfield('setTokens', data.ano);
                    $('#tokenfield-serie').data('bs.tokenfield').$input.autocomplete({source: data.ano});
                    $('#tokenfield-turma').data('bs.tokenfield').$input.autocomplete({source: data.turma});
                    turmas = data.turma;

                } else {
                    $("#error2").val(data.ano);
                    $("#diverror2").show();
                    $('#tokenfield-escolas-nomes').tokenfield('setTokens', data.values);
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
            url: "listaavaliacao_adm/selecionaserie",
            data: {
                escolas_serie: _escolas_serie,
                escolas_turma: _turmas

            },
//dataType: "json",
            success: function (data) {

                data = JSON.parse(data);
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
        "dom": 'T<"clear">lfrtip',
        "sDom": 'Tlfrtip',
        "oTableTools": {
            "sSwfPath": "../../swf/copy_csv_xls_pdf.swf"
        },
        "ajax": "listaavaliacao_adm/gabaritoprova",

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
    $(document).on('click', '.alternativaaluno', function (e) {
        $('.alternativaaluno').autotab({ maxlength: 1, uppercase: true });
    });
    $(document).on('keyup', '.alternativaaluno', function (e) {
        $('.alternativaaluno').autotab({ maxlength: 1, uppercase: true });
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
        $('.alt_alternativa').autotab({ maxlength: 1, uppercase: true });
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

        $('.alt_alternativa').autotab({ maxlength: 1, uppercase: true});
        return false;
    });
    $(document).on('keyup', '#inputano', function (e) {
        de09($(this).val());
        return false;
    });

    $(document).on('click', '#mais', function (e) {

        e.preventDefault();
        //e.stopPropagation();
        var next = $("#listagabarito tbody").children("tr").length + 1;


        $("#listagabarito tbody").append(
            "<tr>" +
                "<td class='sorting_1'><input id='questao' disabled class='num_questao form-control' type='text' name='questao' value='" + next + "' size='20'/>" +
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
        var _matricula_usuario = $('#matriculausuario').val();
        $.ajax({
            type: "POST",
            url: "listaavaliacao_adm/salvaprova",
            data: {
                num_questoes: _num_questoes,
                alternativas: _alternativas,
                qtd_questoes: _qtd_questoes,
                matricula_usuario: _matricula_usuario,
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
        var _matricula = $('#matriculausuario').val();
        $.ajax({
            type: "POST",
            url: "listaavaliacao_adm/editaprova",
            data: {
                num_questoes: _num_questoes,
                alternativas: _alternativas,
                qtd_questoes: _qtd_questoes,
                id_questoes: _id_questoes,
                matricula_usuario: _matricula_usuario,
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
        e.preventDefault();
        e.stopPropagation();
        $('.close').click();
       /* var button = linha.closest('.gabaritoaluno0');
        button.removeClass('gabaritoaluno0 btn btn-primary glyphicon glyphicon-plus').addClass('gabaritoaluno1 btn btn-success glyphicon glyphicon-ok');
        button.html('Concluido');*/
    });
    $(document).on('click', '.gabarito1', function (e) {

        id_table = table.row($(this).parents('tr')).data();
        alteralistagabarito = $('#alterarlistagabarito').dataTable({
            "dom": 'T<"clear">lfrtip',
            "sDom": 'Tlfrtip',
            "oTableTools": {
                "sSwfPath": "../../swf/copy_csv_xls_pdf.swf"
            },
            "ajax": {
                type: "POST",
                url: "listaavaliacao_adm/alteragabaritoprova",
                data: {
                    id: id_table['id_avaliacao']
                }
            },
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

    var gabaritoaluno = $('#gabaritarprova').dataTable({
        "dom": 'T<"clear">lfrtip',
        "sDom": 'Tlfrtip',
        "oTableTools": {
            "sSwfPath": "../../swf/copy_csv_xls_pdf.swf"
        },
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
        var _escola = $('#selectescola').val();
        var _turma = $('#selectturma option:selected').text().trim();
        var _ano = $('#selectano').val();
        $.ajax({
            type: "POST",
            url: "listaavaliacao_adm/listaalunos",
            data: {turma: _turma,
                escola: _escola,
                ano: _ano,
                id: id_table['id_avaliacao']},
            //dataType: "json",
            success: function (json) {
                json = JSON.parse(json);
                $("#gabaritarprova").html(json.linhas);
            }
        })
    });
    $(document).on('click', '#buttonfiltrar', function (e) {
        e.preventDefault();
        e.stopPropagation();
        $('#wb_FormLista').hide();
        $('#wb_FormGabarito').show();
        var options = "";
        data = new Date();
        $('#selectano').val(data.getFullYear());
        $('#selectescola').val($('#tokenfield-escolas').val());
        var turmas = $('#tokenfield-turma').val().split(',');
        $.each(turmas, function (key, data) {
            options += '<option value="' + key + '">' + data + '</option>';
        });
        $("#selectturma").html(options);
    });
    $(document).on('click', '.salvagabaritoaluno', function (e) {
        e.preventDefault();
        e.stopPropagation();
        var tr = $(this).closest('tr');
        var span = $(this).contents().filter("span");
        tr.addClass('success');
        var _questoes = [];
        $(this).removeClass('salvagabaritoaluno btn btn-success glyphicon glyphicon-floppy-save').addClass('editagabaritoaluno btn btn-warning glyphicon glyphicon-refresh');
        tr.find('.alternativaaluno').each(function () {
            _questoes.push($(this).val());
        });
        var _matricula = tr.find('.matricula').html();
        var _matricula_usuario = $('#matriculausuario').val();
        $.ajax({
            type: "POST",
            url: "listaavaliacao_adm/salvagabaritoaluno",
            data: {
                id: id_table['id_avaliacao'],
                matricula: _matricula,
                cod_unidade: $('#selectescola').val(),
                ind_turma: $('#selectturma').find('option').filter(':selected').text().trim(),
                matricula_usuario: _matricula_usuario,
                questoes: _questoes
            },
            success: function (json) {
                json = JSON.parse(json);
                span.html(json.nota);
            }
        });

    });
    $(document).on('click', '.editagabaritoaluno', function (e) {
        e.preventDefault();
        e.stopPropagation();
        var tr = $(this).closest('tr');
        var span = $(this).contents().filter("span");
        tr.addClass('warning');
        var _matricula = tr.find('.matricula').html();
        var _questoes = [];
        var _matricula_usuario = $('#matriculausuario').val();
        tr.find('.alternativaaluno').each(function () {
            _questoes.push($(this).val());
        });
        $.ajax({
            type: "POST",
            url: "listaavaliacao_adm/alteragabaritoaluno",
            data: {
                id: id_table['id_avaliacao'],
                matricula: _matricula,
                matricula_usuario: _matricula_usuario,
                questoes: _questoes
            },
            success: function (json) {
                json = JSON.parse(json);
                span.html(json.nota);
            }
        });
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


