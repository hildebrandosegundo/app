/**
 * Created by Avell B154 PLUS on 21/07/14.
 */
$(document).ready(function () {
    $("#diverror").hide();

    //quando o link for clicado
    $(document).on('click',"#Pesquisar",function (e) {

        e.preventDefault();
        e.stopPropagation();


        var _matricula = $("#matricula").val();

        $("#fullname").val('Carregando...');
        $("#situacao").val('Carregando...');
        $("#lotacao").val('Carregando...');
        $("#atividade").val('Carregando...');
        $.post('consulta/checkmatricula',{matricula: _matricula},function(dados){
            var json = jQuery.parseJSON(dados);

            if (json.sucesso) {
                for (var i in json.values) {
                    $(i).val(json.values[i]);

                }
                if($('#atividade').val()=='PROFESSOR(A)'){
                    $('#atividade').removeClass('alert-danger').addClass('alert-success');
                    $('#lotacao').removeClass('alert-danger').addClass('alert-success');
                }
                else if($('#atividade').val()=='DIRETOR'){
                    $('#atividade').removeClass('alert-danger').addClass('alert-success');
                    $('#lotacao').removeClass('alert-danger').addClass('alert-success');
                }
                else if($('#atividade').val()=='AUX. DE SECRETARIA'){
                    $('#atividade').removeClass('alert-danger').addClass('alert-success');
                    $('#lotacao').removeClass('alert-danger').addClass('alert-success');
                }
                else if($('#atividade').val()=='DIGITADOR'){
                    $('#atividade').removeClass('alert-danger').addClass('alert-success');
                    $('#lotacao').removeClass('alert-danger').addClass('alert-success');
                }
                else if($('#atividade').val()=='DIRETOR PEDAGÓGICO'){
                    $('#atividade').removeClass('alert-danger').addClass('alert-success');
                    $('#lotacao').removeClass('alert-danger').addClass('alert-success');
                }
                else if($('#atividade').val()=='SECRETÁRIA(O)'){
                    $('#atividade').removeClass('alert-danger').addClass('alert-success');
                    $('#lotacao').removeClass('alert-danger').addClass('alert-success');
                }
                else if($('#atividade').val()=='DIRETOR(A) ADJUNTO'){
                    $('#atividade').removeClass('alert-danger').addClass('alert-success');
                    $('#lotacao').removeClass('alert-danger').addClass('alert-success');
                }
                else if($('#atividade').val()=='PEDAGOGO(A)'){
                    $('#atividade').removeClass('alert-danger').addClass('alert-success');
                    $('#lotacao').removeClass('alert-danger').addClass('alert-success');
                }
                else{
                    $('#atividade').removeClass('alert-success').addClass('alert-danger');
                    $('#lotacao').removeClass('alert-success').addClass('alert-danger');
                }
                if($('#situacao').val()=='ATIVA'){
                    $('#situacao').removeClass('alert-danger').addClass('alert-success');
                }
                if($('#situacao').val()=='ENCERRADA'){
                    $('#situacao').removeClass('alert-success').addClass('alert-danger');
                }
                $("#error").val('');
                $("#diverror").hide();

            } else {
                $("#fullname").val('');
                $("#cpf").val('');
                $("#situacao").val('');
                $("#lotacao").val('');
                $("#atividade").val('');
                $("#quadro").val('');
                $("#error").val(json.values);
                $("#diverror").show();
            }

        });

    });
    $("#Cancelar").click(function(e){
        e.preventDefault();
        e.stopPropagation();
        window.location="index";
    });
    /*$("#Cadastrar").click(function (e) {

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
     });*/
});
