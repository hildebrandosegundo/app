/**
 * Created by Avell B154 PLUS on 11/08/14.
 */

function de09(str) {

    if (/[^0-9]/g.test(str) && str != '') {
        alert('O campo está errado, somente números');
        return false;
    }
    return true;
}

$(document).ready(function () {
    $("#diverror2").hide();
    $("#diverror1").hide();
    $("#cadMateria").hide();
    $("#cadPrograma").hide();
    $("#wb_FormLista").hide();
    $("#progmat").hide();
    $("#editargabarito").hide();
    $("#wb_FormConf").show('slide', {direction: 'left'}, 500);

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
        $('.modalbutton').removeClass('programa btn btn-success').addClass('programa btn btn-danger');
        $('.modalbutton').html('Cancelar');
        $('#modalcadprogmat').modal('show');
    });
    $('#novamateria').click(function (e) {
        e.preventDefault();
        e.stopPropagation();
        $("#cadMateria").show();
        $("#edMateria").hide();
        $("#cadPrograma").hide();
        $("#edPrograma").hide();
        $('.modalbutton').removeClass('materia btn btn-success').addClass('materia btn btn-danger');
        $('.modalbutton').html('Cancelar');
        $("#cadPrograma").hide();

        $('#modalcadprogmat').modal('show');
    });
    /* $('#editamateria').click(function (e) {
     e.preventDefault();
     e.stopPropagation();

     });*/
    $('#excluimateria').click(function (e) {
        e.preventDefault();
        e.stopPropagation();
        $("#cadMateria").hide();
        $("#edMateria").hide();

        $("#cadPrograma").hide();
        $("#edPrograma").hide();

        $('.modalbutton').removeClass('materia btn btn-success').addClass('materia btn btn-danger');
        $('.modalbutton').html('Cancelar');
        var result = confirm("Você deseja deletar esta matéria?");
        var _matricula_usuario = $('#matriculausuario').val();
        if (result == true) {
            var token = $('#tokenfield-materia').val().split('-');
            $.ajax({
                type: "POST",
                url: "<?php echo URL; ?>/cadastroavaliacao_adm/excluirmateria",
                data: {
                    id: token[0],
                    matricula_usuario: _matricula_usuario
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

        $('.modalbutton').removeClass('programa btn btn-success').addClass('programa btn btn-danger');
        $('.modalbutton').html('Cancelar');
        var result = confirm("Você deseja deletar este Programa?");
        var _matricula_usuario = $('#matriculausuario').val();
        if (result == true) {
            var token = $('#tokenfield-programa').val().split('-');
            $.ajax({
                type: "POST",
                url: "<?php echo URL; ?>/cadastroavaliacao_adm/excluirprograma",
                data: {
                    id: token[0],
                    matricula_usuario: _matricula_usuario
                },
                success: function (data) {
                    data = JSON.parse(data);
                    if (data.sucesso) {

                        alert(token[1] + " excluido com sucesso!!");
                        $('.close').click();
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
        var _matricula_usuario = $('#matriculausuario').val();
        $.ajax({
            type: "POST",
            url: "<?php echo URL; ?>/cadastroavaliacao_adm/cadastrarmateria",
            data: {
                nome: _nome,
                matricula_usuario: _matricula_usuario
            },
            success: function (data) {
                data = JSON.parse(data);
                if (data.sucesso) {
                    $('.modalbutton').removeClass('materia btn btn-danger').addClass('materia btn btn-success');
                    $('.modalbutton').html('Ok');
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
        var _matricula_usuario = $('#matriculausuario').val();
        $.ajax({
            type: "POST",
            url: "<?php echo URL; ?>/cadastroavaliacao_adm/editarmateria",
            data: {
                nome: _nome,
                id: _id,
                matricula_usuario: _matricula_usuario
            },
            success: function (data) {
                data = JSON.parse(data);
                if (data.sucesso) {
                    $('.modalbutton').removeClass('materia btn btn-danger').addClass('materia btn btn-success');
                    $('.modalbutton').html('Ok');
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

        $('.modalbutton').removeClass('materia btn btn-success').addClass('materia btn btn-danger');
        $('.modalbutton').html('Cancelar');
        $('#modalcadprogmat').modal('show');
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

        $('.modalbutton').removeClass('programa btn btn-success').addClass('programa btn btn-danger');
        $('.modalbutton').html('Cancelar');
        $('#modalcadprogmat').modal('show');
    });
    $('#editarprograma').click(function (e) {
        e.preventDefault();
        e.stopPropagation();
        var _nome = $("#inputedprograma").val();
        var _id = $("#inputedprogramaid").val();
        var _matricula_usuario = $('#matriculausuario').val();
        $.ajax({
            type: "POST",
            url: "<?php echo URL; ?>/cadastroavaliacao_adm/editarprograma",
            data: {
                nome: _nome,
                id: _id,
                matricula_usuario: _matricula_usuario
            },
            success: function (data) {
                data = JSON.parse(data);
                if (data.sucesso) {
                    $('.modalbutton').removeClass('programa btn btn-danger').addClass('programa btn btn-success');
                    $('.modalbutton').html('Ok');
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
        var _matricula_usuario = $('#matriculausuario').val();
        $.ajax({
            type: "POST",
            url: "<?php echo URL; ?>/cadastroavaliacao_adm/cadastrarprograma",
            data: {
                nome: _nome,
                matricula_usuario: _matricula_usuario
            },
            success: function (data) {
                data = JSON.parse(data);
                if (data.sucesso) {
                    $('.modalbutton').removeClass('programa btn btn-danger').addClass('programa btn btn-success');
                    $('.modalbutton').html('Ok');
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
    $(document).on('click', '.buttonsalvar1', function (e) {
        e.preventDefault();
        e.stopPropagation();
        var _textdescricao = $("#textdescricao").val();
        var _tokenfield_programa = $("#tokenfield-programa").val().split('-')[1];

        var _tokenfield_materia = $("#tokenfield-materia").val().split('-')[1];

        var _op = $('#inputnumero').val();
        var _tipo = $('#tipodeprova').find('option').filter(':selected').text();
        var _serie = $("#tokenfield-anoserie").val();
        var _matricula_usuario = $('#matriculausuario').val();
        $.ajax({
            type: "POST",
            url: "<?php echo URL; ?>/cadastroavaliacao_adm/cadastraravaliacao",
            data: {
                textdescricao: _textdescricao,
                tokenfield_programa: _tokenfield_programa,
                tokenfield_materia: _tokenfield_materia,
                op: _op,
                serie: _serie,
                tipo: _tipo,
                matricula_usuario: _matricula_usuario
            },
            success: function (data) {
                data = JSON.parse(data);
                if (data.sucesso) {
                    $("#error1").val('');
                    $("#diverror1").hide();

                    //$("#wb_FormConf").hide();
                    $("#editargabarito").show('slide', {direction: 'down'}, 500);
                    $('.buttonsalvar1').removeClass('buttonsalvar1 btn btn-primary glyphicon glyphicon-arrow-down').addClass(
                        'buttoneditar1 btn btn-warning glyphicon glyphicon-refresh');
                    $('.buttoneditar1').html('Atualizar');
                    alert(data.values);
                }
                else {
                    $("#error1").val(data.values);
                    $("#diverror1").show();
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
        var _matricula_usuario = $('#matriculausuario').val();
        $.ajax({
            type: "POST",
            url: "<?php echo URL; ?>/cadastroavaliacao_adm/atualizaravaliacao",
            data: {
                textdescricao: _textdescricao,
                tokenfield_programa: _tokenfield_programa,
                tokenfield_materia: _tokenfield_materia,
                op: _op,
                serie: _serie,
                tipo: _tipo,
                matricula_usuario: _matricula_usuario
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
            /* source: ['ARTE', 'CIENCIAS', 'EDUCACAO FISICA', 'ENSINO RELIGIOSO', 'GEOGRAFIA',
             'HISTORIA', 'INFORMATICA', 'INGLES', 'LINGUA PORTUGUESA', 'MATEMATICA'],*/
            delay: 100
        },
        showAutocompleteOnFocus: true
    });
    $('#tokenfield-programa').tokenfield({
        limit: 1,
        autocomplete: {
            //source: ['PROVINHA BRASIL', 'SIMULADO', 'OLIMPIADA INTERNA', 'OLIMPIADA EXTERA', 'AVALIAÇÃO PADRÃO', 'OUTROS'],
            delay: 100
        },
        showAutocompleteOnFocus: true
    });

});