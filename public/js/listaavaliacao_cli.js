    /**
     * Created by Avell B154 PLUS on 22/07/14.
     */
    var table, listagabarito, linha, id_table = null;
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
    GabaritoAlunoRow = function (d) {
        id_table = table.row($(d).parents('tr')).data();
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
            "ajax": "listaavaliacao_cli/lista",

            "columns": [

                { "data": "id_avaliacao" },
                { "data": "serie" },
                { "data": "num_avaliacao" },
                { "data": "programa" },
                { "data": "materia" },
                { "data": "gabarito_aluno_comp" }
            ],
            "order": [
                [0, 'des']
            ]
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
                    url: "listaavaliacao_cli/info",
                    data: {id: data['id_avaliacao']},
                    // dataType: "json",
                    success: function (json) {
                        json = JSON.parse(json);
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
             var dataAno = new Date();
            // var escola = $('#lotacaoservidor').val().split(' - ')[0];
            $('#selectano').val(dataAno.getFullYear());

            $.ajax({
                type: "POST",
                url: "listaavaliacao_cli/selecionaturma",
                data: {id: data['id_avaliacao'],
                    escolas_cod: $('#lotacaoservidor').val(),//escola,
                    serie_prova: data['serie']},
                // dataType: "json",
                success: function (json) {
                    json = JSON.parse(json);
                    if (json.sucesso) {
                        $("#error2").val('');
                        $("#diverror2").hide();
                        var options = "";
                        $('#selectano').val(dataAno.getFullYear());
                        $('#selectescola').val($('#lotacaoservidor').val());//escola);
                        $.each(json.turma, function (key, data) {
                            options += '<option value="' + key + '">' + data + '</option>';
                        });
                        $("#selectturma").html(options);
                    }
                    else{
                        $("#error2").val(json.serie);
                        $("#diverror2").show();
                    }
                }
            });
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
        $('#tokenfield-serie').change(function (e) {

            e.preventDefault();
            e.stopPropagation();

            var _escolas_serie = $('#tokenfield-serie').tokenfield('getTokensList', ',');
            var _turmas = turmas;

            $.ajax({
                type: "POST",
                url: "listaavaliacao_cli/selecionaserie",
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

        $(document).on('click', '.alternativaaluno', function (e) {
            $('.alternativaaluno').autotab({ maxlength: 1, uppercase: true });
        });
        $(document).on('keyup', '.alternativaaluno', function (e) {
            $('.alternativaaluno').autotab({ maxlength: 1, uppercase: true });
        });



//########################################### modal gabaritar aluno ######################################################################
        $(document).on('click', '#enviarprovaaluno', function (e) {
            e.preventDefault();
            e.stopPropagation();
            $('#selectano').val('');
            $('#selectescola').val('');
            $('.close').click();
            /*
             var button = linha.closest('.gabaritoaluno0');
             button.removeClass('gabaritoaluno0 btn btn-primary').addClass('gabaritoaluno1 btn btn-success');
             button.html('Concluido');
             */
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
            var _escola = $('#selectescola').val();
            var _turma = $('#selectturma option:selected').text().trim();
            var _ano = $('#selectano').val();
            $.ajax({
                type: "POST",
                url: "listaavaliacao_cli/listaalunos",
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
                url: "listaavaliacao_cli/salvagabaritoaluno",
                data: {
                    id: id_table['id_avaliacao'],
                    matricula: _matricula,
                    matricula_usuario: _matricula_usuario,
                    cod_unidade: $('#selectescola').val(),
                    ind_turma: $('#selectturma').find('option').filter(':selected').text().trim(),
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
            var _matricula_usuario = $('#matriculausuario').val();

            var _questoes = [];
            tr.find('.alternativaaluno').each(function () {
                _questoes.push($(this).val());
            });
            $.ajax({
                type: "POST",
                url: "listaavaliacao_cli/alteragabaritoaluno",
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
