<?php
ob_start();

/**
 * Created by PhpStorm.
 * User: Avell B154 PLUS
 * Date: 30/04/14
 * Time: 09:07
 */
class Cadastroavaliacao extends Controller
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

        require 'application/views/home/cadastroavaliacao.php';

    }

    public function selectzona()
    {
        $retorno = array();
        $escolas_cod = array();
        $escolas_nome = array();
        $filtro_model = $this->loadModel('CadastroavaliacaoModel');
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            if (empty($_POST['zona'])) {
                $filtro = $filtro_model->selectzonamodel('*');
                foreach ($filtro as $escola) {
                    if (empty($escola['TB0008_NOME_UNIDADE'])) {
                        $escolas_nome[] = $this->utf8_encode_all('Sem nome');
                    } else {
                        $escolas_nome[] = $this->utf8_encode_all($escola['TB0008_NOME_UNIDADE']);
                    }
                    $escolas_cod[] = $this->utf8_encode_all($escola['TB0008_NUM_UNIDADE']);
                }
            } else {

                $filtro = $filtro_model->selectzonamodel($_POST['zona']);
                // print_r($filtro);
                foreach ($filtro as $escola) {
                    if (empty($escola['TB0008_NOME_UNIDADE'])) {
                        $escolas_nome[] = $this->utf8_encode_all('Sem nome');
                    } else {
                        $escolas_nome[] = $this->utf8_encode_all($escola['TB0008_NOME_UNIDADE']);
                    }
                    $escolas_cod[] = $this->utf8_encode_all($escola['TB0008_NUM_UNIDADE']);
                }


            }
            $retorno = array_merge($retorno, array(
                    'sucesso' => true,
                    'codigo' => $escolas_cod,
                    'nome' => $escolas_nome)
            );
            echo json_encode($retorno);
        }

    }

    public function  selecionaescolacod()
    {
        $retorno = array();
        $array_nome = array();
        $anoturmas = $this->selecionaturma();

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            if (empty($_POST['escolas_cod'])) {
                $retorno = array_merge(array(
                        'sucesso' => false,
                        'values' => 'escolas não informadas'
                    )
                );
            } else {

                //print_r($this->escolas_nome[1]);
                $listaescolas = explode(',', $_POST['escolas_cod']);
               // print_r($listaescolas);
                $tam_lista = count($listaescolas);

                for ($i = 0; $i < $tam_lista; $i++) {
                    $key = array_search($listaescolas[$i], $_POST['escolas_cod2']);

                        $array_nome[] = $_POST['escolas_cod2'][$key].' - '.$_POST['escolas_nome'][$key];
                         //var_dump($key);

                }
                //var_dump($array_nome);
                $retorno = array_merge(array(
                        'sucesso' => true,
                        'values' => $array_nome,
                        'ano' => $anoturmas['ano'],
                        'turma'=>$anoturmas['turma']
                    )
                );
            }
        }
        echo json_encode($retorno);
    }
    public function  selecionaescolanome()
    {
        $retorno = array();
        $array_cod = array();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            if (empty($_POST['escolas_nome'])) {
                $retorno = array_merge(array(
                        'sucesso' => false,
                        'values' => 'zonas não informadas'
                    )
                );
            } else {
                //print_r($this->escolas_nome[1]);
                $listaescolas = explode(",", $_POST['escolas_nome']);
                // print_r($listaescolas);
                $tam_lista = count($listaescolas);

                for ($i = 0; $i < $tam_lista; $i++) {
                    $key = array_search($listaescolas[$i], $_POST['escolas_nome2']);

                    $array_cod[] = $_POST['escolas_cod'][$key];
                    //var_dump($key);

                }
                //var_dump($array_nome);
                $retorno = array_merge(array(
                        'sucesso' => true,
                        'values' => $array_cod
                    )
                );
            }
        }
        echo json_encode($retorno);
    }
    public function selecionaturma(){
        $anoserie = array();
        $turma = array();

        $filtro_model = $this->loadModel('FiltroModel');
       // $cod = implode("','", $_POST['escolas_cod']);
        //var_dump($_POST['escolas_cod']);
        if(empty($_POST['escolas_cod'])){
            $filtro = $filtro_model->selectanoturmamodel('*');
        }
        else{
        $filtro = $filtro_model->selectanoturmamodel($_POST['escolas_cod']);
        }
        $series = array('11'=> '1 ANO', '12'=>'2 ANO','13'=>'3 ANO','14'=>'4 ANO', '15'=>'5 ANO', '16'=>'6 ANO', '17'=>'7 ANO', '18'=>'8 ANO', '19'=>'9 ANO');
        foreach ($filtro as $anoturma) {
            $str = substr($anoturma['TB0034_IND_TURMA'], 0,2);
            //var_dump($str);
            $anoserie[] = $this->utf8_encode_all( $series[$str]);
            $turma[] = $this->utf8_encode_all($anoturma['TB0034_IND_TURMA']);
        }
        //$retorno[] =array_merge(array('ano'=>array_unique($anoserie),'turma'=>$turma));
        return array_merge(array('ano'=>array_values(array_unique($anoserie)),'turma'=>$turma));

    }
    public  function selecionaserie(){
        $retorno = array();
        $array_turmas = array();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            if (empty($_POST['escolas_serie'])) {
                $retorno = array_merge(array(
                        'sucesso' => false,
                        'values' => 'Ano/série não informadas'
                    )
                );
            } else {
                //print_r($this->escolas_nome[1]);

                $tam_lista = count( $_POST['escolas_turma']);
                $series = array('11'=> '1 ANO', '12'=>'2 ANO','13'=>'3 ANO','14'=>'4 ANO', '15'=>'5 ANO', '16'=>'6 ANO', '17'=>'7 ANO', '18'=>'8 ANO', '19'=>'9 ANO');
                $key = array_search( $_POST['escolas_serie'],$series);
                for ($i = 0; $i < $tam_lista; $i++) {
                    $str = substr( $_POST['escolas_turma'][$i], 0,2);
                    if($str == $key )
                    $array_turmas[] =  $_POST['escolas_turma'][$i];
                    //var_dump($key);

                }
                //var_dump($array_nome);
                $retorno = array_merge(array(
                        'sucesso' => true,
                        'values' => $array_turmas
                    )
                );
            }
        }
        echo json_encode($retorno);

    }
    public function utf8_encode_all($dat) // -- It returns $dat encoded to UTF8
    {
        if (is_string($dat)) return utf8_encode($dat);
        if (!is_array($dat)) return $dat;
        $ret = array();
        foreach ($dat as $i => $d) $ret[$i] = utf8_encode_all($d);
        return $ret;
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

?>