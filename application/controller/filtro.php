<?php
ob_start();
/**
 * Created by PhpStorm.
 * User: Avell B154 PLUS
 * Date: 30/04/14
 * Time: 09:07
 */
class Filtro extends Controller
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
    public function selectzona()
    {
        $retorno = array();
        $filtro_model = $this->loadModel('filtromodel');
        $filtro = $filtro_model->selectzonamodel($_POST['zona']);


            var_dump($filtro);


                // $filtro_model->close();

                $retorno = array_merge($retorno, array(
                    'sucesso' => true,
                    'values' => array($filtro['nome'])
                ));

        echo json_encode($retorno);
        switch (json_last_error()) {
            case JSON_ERROR_NONE:
                echo "<script type=\"text/javascript\">alert('bla bla bla...');</script>";
                echo 'No errors';
                break;
            case JSON_ERROR_DEPTH:
                echo "<script type=\"text/javascript\">alert('bla bla bla...');</script>";
                echo 'Maximum stack depth exceeded';
                break;
            case JSON_ERROR_STATE_MISMATCH:
                echo "<script type=\"text/javascript\">alert('bla bla bla...');</script>";
                echo 'Underflow or the modes mismatch';
                break;
            case JSON_ERROR_CTRL_CHAR:
                echo "<script type=\"text/javascript\">alert('bla bla bla...');</script>";
                echo 'Unexpected control character found';
                break;
            case JSON_ERROR_SYNTAX:
                echo "<script type=\"text/javascript\">alert('bla bla bla...');</script>";
                echo 'Syntax error, malformed JSON';
                break;
            case JSON_ERROR_UTF8:
                echo "<script type=\"text/javascript\">alert('bla bla bla...');</script>";
                echo 'Malformed UTF-8 characters, possibly incorrectly encoded';
                break;
            default:
                echo "<script type=\"text/javascript\">alert('bla bla bla...');</script>";
                echo 'Unknown error';
                break;
        }
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