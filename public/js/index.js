/**
 * Created by Avell B154 PLUS on 22/07/14.
 */
$(document).ready(function () {
    $("#diverror2").hide();
    if ($.browser.name == 'msie8' || $.browser.name == 'msie6' || $.browser.name == 'msie' || $.browser.name == 'unknown') {
        $('#modalbrowser').modal('show');
    }
    if ($.browser.name == 'firefox') {
        $('#form_login').removeClass('col-md-5 col-md-offset-4').addClass('col-md-12 col-md-offset-4');
    }
    //quando o link for clicado
    $(document).on('click', '#login', function (e) {
        e.preventDefault();
        e.stopPropagation();
        var _matricula = $("#matricula").val();
        var _lotacao = $("#lotacao").val();
        var _cpf = $("#cpf").val();
        $.ajax({
            url: "login/entrar",
            type: "POST",
            data: {
                matricula: _matricula,
                lotacao: _lotacao,
                cpf: _cpf
            },
            success: function (data) {
                data = JSON.parse(data);
                if (data.sucesso) {
                    $("#error2").val('');
                    $("#diverror2").hide();
                    $(location).attr('href', data.values);
                }
                else{
                    $("#error2").val(data.values);
                    $("#diverror2").show();
                }
            }
        });
    });

});
