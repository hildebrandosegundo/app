<?php
/**
 * Created by PhpStorm.
 * User: Avell B154 PLUS
 * Date: 21/05/14
 * Time: 08:47
 */

class Listaavaliacao_adm {
    public function index(){
        if (session_id() == "")
        {
            session_start();
        }
        if (!isset($_SESSION['matricula']))
        {
            header('Location: '.URL.'/index');
            exit;
        }
        require 'application/views/home/listaavaliacao_adm.php';
    }
    public function lista(){
        $retorno = array();

        $lista_avaliacao =  array(
            array(1,'1 ANO', 1, 'PROVINHA BRASIL', 'MATEMATICA',"<div class='btn-group'>" .
                                                                "<button id='info' class='btn btn-info'>Info" .
                                                                "</button>" .
                                                                "<button class='gabarito0 btn btn-primary'>Gabarito" .
                                                                "</button>" .
                                                                "<button id='editar' onclick='EditTableRow(this)' class='btn btn-warning'>Editar" .
                                                                "</button>" .
                                                                "<button onclick='RemoveTableRow(this)' id='deletar' class='btn btn-danger'>Deletar" .
                                                                "</button>" .
                                                                "</div>","<div class='btn-group'>".
                                                                        "<button class='gabaritoaluno0 btn btn-primary'>Gabaritar".
                                                                        "</button>".
                                                                        "</div>")
            , array(2,'4 ANO', 2, 'PROVINHA BRASIL','PORTUGUES',"<div class='btn-group'>" .
                                                                "<button id='info' class='btn btn-info'>Info" .
                                                                "</button>" .
                                                                "<button  class='gabarito1 btn btn-success'>Concluido" .
                                                                "</button>" .
                                                                "<button id='editar' onclick='EditTableRow(this)' class='btn btn-warning'>Editar" .
                                                                "</button>" .
                                                                "<button onclick='RemoveTableRow(this)' id='deletar' class='btn btn-danger'>Deletar" .
                                                                "</button>" .
                                                                "</div>","<div class='btn-group'>" .
                                                                        "<button class='gabaritoaluno1 btn btn-success'>Concluido" .
                                                                        "</button>" .
                                                                        "</div>" )
            , array(3,'6 ANO',1, 'SIMULADO', 'GEOGRAFIA',"<div class='btn-group'>" .
                                                        "<button id='info' class='btn btn-info'>Info" .
                                                        "</button>" .
                                                        "<button class='gabarito0 btn btn-primary'>Gabarito" .
                                                        "</button>" .
                                                        "<button id='editar' onclick='EditTableRow(this)' class='btn btn-warning'>Editar" .
                                                        "</button>" .
                                                        "<button onclick='RemoveTableRow(this)' id='deletar' class='btn btn-danger'>Deletar" .
                                                        "</button>" .
                                                        "</div>","<div class='btn-group'>".
                                                                "<button class='gabaritoaluno0 btn btn-primary'>Gabaritar".
                                                                "</button>".
                                                                "</div>")
        );
                $retorno = array_merge($retorno,array(
                       'sucesso' => true,
                  /*      'lista' => $lista_avaliacao*/
                        'data' => $lista_avaliacao
                    )
                );

        echo json_encode($retorno);
    }
    public function listaalunos(){
        $retorno = array();

            $lista_aluno =  array(array('matricula' => '4356','nome'=>'fulano de tal'),array('matricula' =>'5678','nome'=>'lindolfo monteiro'),array('matricula' =>'1234','nome'=>'fransisco fransisval'));
       $retorno = array_merge($retorno,array(
           'sucesso' => true,
           'values' => $lista_aluno,
           'qtdquestao' => 20
       ));
       echo json_encode($retorno);
    }
    public function listaturmas(){
        $retorno = array();
        $lista_turma = array();
        if ($_POST['escolas']=='44456'||$_POST['escolas']=='44300'||$_POST['escolas']=='44120'||$_POST['escolas']=='44100'){
        $lista_turma =  array('19em','19mt','19et');
        $retorno = array_merge($retorno,array(
            'sucesso' => true,
            'values' => $lista_turma
        ));
        }
        echo json_encode($retorno);
    }
    public function listaescolas(){
        $retorno = array();
        $lista_escolas = array();
       // var_dump($_POST['id']);
        if ($_POST['id']=='1')
            $lista_escolas =  array('44456','44300','44120','44100');
        $retorno = array_merge($retorno,array(
            'sucesso' => true,
            'values' => $lista_escolas
        ));
        echo json_encode($retorno);
    }

    public function logout()
    {
        $index_page = URL.'/index';
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['form_name'] == 'logoutform')
        {

            if (session_id() == "")
            {
                session_start();
            }
            unset($_SESSION['matricula']);
            unset($_SESSION['fullname']);
            header('Location: '.$index_page);
            exit;
        }
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['form_name'] == 'logoutform')
        {
            if (session_id() == "")
            {
                session_start();
            }
            unset($_SESSION['matricula']);
            unset($_SESSION['fullname']);
            header('Location: '.$index_page);
            exit;
        }
        if (session_id() == "")
        {
            session_start();
        }
        if (!isset($_SESSION['matricula']))
        {
            header('Location: '.$index_page);
            exit;
        }
    }
} 