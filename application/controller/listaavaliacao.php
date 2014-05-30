<?php
/**
 * Created by PhpStorm.
 * User: Avell B154 PLUS
 * Date: 21/05/14
 * Time: 08:47
 */

class Listaavaliacao {
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
        require 'application/views/home/listaavaliacao.php';
    }
    public function lista(){
        $retorno = array();

        $lista_avaliacao =  array(
            array(1,'1 ANO', 1, 'provinha brasil', 'Matemática')
            , array(2,'4 ANO', 2, 'provinha brasil','portugues' )
        );


                $retorno = array_merge($retorno,array(
                       'sucesso' => true,
                  /*      'lista' => $lista_avaliacao*/
                        'data' => $lista_avaliacao
                    )
                );

        echo json_encode($retorno);
    }
    public function gabaritoprova(){
        $quantidade_itens = $_GET['quantidade_itens'];

        for ( $x = 1; $x <= $quantidade_itens ; $x++ ){

            $item = $_GET["item$x"];
            $quantidade = $_GET["quantidade$x"];

//aqui seu código com o uso dos valores capturados

        }
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