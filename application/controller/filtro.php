<?php

/**
 * Created by PhpStorm.
 * User: Avell B154 PLUS
 * Date: 30/04/14
 * Time: 09:07
 */
class filtro
{

    public function index()
    {
        if (session_id() == "") {
            session_start();
        }
        if (!isset($_SESSION['matricula'])) {
            header('Location: ' . URL . '/index');
            exit;
        }
        require 'application/views/home/filtro.php';

    }

    public function filtrar()
    {


    }

    public function selectpzona()
    {
        $retorno = array();
        $filtro_model = $this->loadModel('FiltroModel');
        if (empty($_POST['zona'])) {
            $retorno = array_merge(array(
                    'sucesso' => false,
                    'values' => 'Matricula não informada'
                )
            );
        } else {

            $filtro = $filtro_model->selectpzona(mysql_real_escape_string($_POST['zona']));

            $retorno = array_merge($retorno, array(
                'sucesso' => true,
                'values' => array(
                    '#id' => $filtro['id'],
                    '#nome' => $filtro['nome']
                )
            ));
        }
        echo json_encode($retorno);
    }

    public function logout()
    {
        $index_page = URL . '/index';
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['form_name'] == 'logoutform') {

            if (session_id() == "") {
                session_start();
            }
            unset($_SESSION['matricula']);
            unset($_SESSION['fullname']);
            header('Location: ' . $index_page);
            exit;
        }
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['form_name'] == 'logoutform') {
            if (session_id() == "") {
                session_start();
            }
            unset($_SESSION['matricula']);
            unset($_SESSION['fullname']);
            header('Location: ' . $index_page);
            exit;
        }
        if (session_id() == "") {
            session_start();
        }
        if (!isset($_SESSION['matricula'])) {
            header('Location: ' . $index_page);
            exit;
        }
    }
} 