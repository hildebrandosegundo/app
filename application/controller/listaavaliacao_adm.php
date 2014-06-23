<?php

/**
 * Created by PhpStorm.
 * User: Avell B154 PLUS
 * Date: 21/05/14
 * Time: 08:47
 */
class Listaavaliacao_adm extends Controller
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
        require 'application/views/home/listaavaliacao_adm.php';
    }

    public function lista()
    {
        $retorno = array();
        $filtro_model = $this->loadModel('Listaavaliacaomodel');
        $filtro = $filtro_model->selectavaliacao();
        //print_r($filtro);
        foreach ($filtro as &$gab_prova) {
            if ($gab_prova['gabarito_prova_comp'] == 0) {
                $gab_prova['gabarito_prova_comp'] = "<div class='btn-group'>" .
                    "<button id='info' class='btn btn-info glyphicon glyphicon-search'>" .
                    "</button>" .
                    "<button class='gabarito0 btn btn-primary glyphicon glyphicon-plus'>Gabarito" .
                    "</button>" .
                    "<button id='editar' onclick='EditTableRow(this)' class='btn btn-warning glyphicon glyphicon-pencil'>" .
                    "</button>" .
                    "<button onclick='RemoveTableRow(this)' id='deletar' class='btn btn-danger glyphicon glyphicon-remove-circle'>" .
                    "</button>" .
                    "</div>";
            } else {
                $gab_prova['gabarito_prova_comp'] = "<div class='btn-group'>" .
                    "<button id='info' class='btn btn-info glyphicon glyphicon-search'>" .
                    "</button>" .
                    "<button  class='gabarito1 btn btn-success glyphicon glyphicon-ok'>Concluido" .
                    "</button>" .
                    "<button id='editar' onclick='EditTableRow(this)' class='btn btn-warning glyphicon glyphicon-pencil'>" .
                    "</button>" .
                    "<button onclick='RemoveTableRow(this)' id='deletar' class='btn btn-danger glyphicon glyphicon-remove-circle'>" .
                    "</button>" .
                    "</div>";
            }
        }
        unset($gab_prova);
        foreach ($filtro as &$gab_aluno) {
            if ($gab_aluno['gabarito_aluno_comp'] == 0) {
                $gab_aluno['gabarito_aluno_comp'] = "<div class='btn-group'>" .
                    "<button class='gabaritoaluno0 btn btn-primary glyphicon glyphicon-plus'>Gabaritar" .
                    "</button>" .
                    "</div>";
            } else {
                $gab_aluno['gabarito_aluno_comp'] = "<div class='btn-group'>" .
                    "<button class='gabaritoaluno1 btn btn-success glyphicon glyphicon-ok'>Concluido" .
                    "</button>" .
                    "</div>";
            }
        }
        unset($gab_aluno);

        $retorno = array_merge($retorno, array(
                'sucesso' => true,
                /*      'lista' => $lista_avaliacao*/
                'data' => $filtro
            )
        );

        echo json_encode($retorno);
    }
    public function info(){
        $retorno = array();
        $filtro_model = $this->loadModel('Listaavaliacaomodel');
        $filtro = $filtro_model->infomodel(mysql_real_escape_string($_POST['id']));
        $retorno = array_merge($retorno, array(
                'sucesso' => true,
                'ano' => $filtro['ano_avaliacao'],
                'descricao' => $filtro['desc_avaliacao'],
                'tipo' => $filtro['tipo']
            )
        );
        echo json_encode($retorno);
    }
    public function listaalunos()
    {
        $retorno = array();

        $lista_aluno = array(array('matricula' => '4356', 'nome' => 'fulano de tal'), array('matricula' => '5678', 'nome' => 'lindolfo monteiro'), array('matricula' => '1234', 'nome' => 'fransisco fransisval'));
        $retorno = array_merge($retorno, array(
            'sucesso' => true,
            'values' => $lista_aluno,
            'qtdquestao' => 20
        ));
        echo json_encode($retorno);
    }

    public function listaturmas()
    {
        $retorno = array();
        $lista_turma = array();
        if ($_POST['escolas'] == '44456' || $_POST['escolas'] == '44300' || $_POST['escolas'] == '44120' || $_POST['escolas'] == '44100') {
            $lista_turma = array('19em', '19mt', '19et');
            $retorno = array_merge($retorno, array(
                'sucesso' => true,
                'values' => $lista_turma
            ));
        }
        echo json_encode($retorno);
    }

    public function listaescolas()
    {
        $retorno = array();

        $filtro_model = $this->loadModel('Listaavaliacaomodel');
        $filtro = $filtro_model->listaescolasmodel($_POST['id']);
            //$lista_escolas = array('44456', '44300', '44120', '44100');
        $retorno = array_merge($retorno, array(
            'sucesso' => true,
            'values' => $filtro
        ));
        echo json_encode($retorno);
    }
//##################################busca por escolas ######################################
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

                    $array_nome[] = $_POST['escolas_cod2'][$key] . ' - ' . $_POST['escolas_nome'][$key];
                    //var_dump($key);

                }
                //var_dump($array_nome);
                $retorno = array_merge(array(
                        'sucesso' => true,
                        'values' => $array_nome,
                        'ano' => $anoturmas['ano'],
                        'turma' => $anoturmas['turma']
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

    public function selecionaturma()
    {
        $anoserie = array();
        $turma = array();

        $filtro_model = $this->loadModel('CadastroavaliacaoModel');
        // $cod = implode("','", $_POST['escolas_cod']);
        //var_dump($_POST['escolas_cod']);
        if (empty($_POST['escolas_cod'])) {
            $filtro = $filtro_model->selectanoturmamodel('*');
        } else {
            $filtro = $filtro_model->selectanoturmamodel($_POST['escolas_cod']);
        }
        $series = array('11' => '1 ANO', '12' => '2 ANO', '13' => '3 ANO', '14' => '4 ANO', '15' => '5 ANO', '16' => '6 ANO', '17' => '7 ANO', '18' => '8 ANO', '19' => '9 ANO',
                        'E0' => 'ALFABETIZACAO', 'E1' => '1 SERIE', 'E2' => '2 SERIE', 'E3' => '3 SERIE', 'E4' => '4 SERIE', 'E5' => '5 SERIE', 'E6' => '6 SERIE', 'E7' => '7 SERIE', 'E8' => '8 SERIE',
                        '0B' => 'BERCARIO', 'MM' => 'MATERNALZINHO', 'M0' => 'MATERNAL', '0Z' => 'MATERNAL I', '0M' => 'MATERNAL II', 'OM' => 'MATERNAL II','01' => '1 PERIODO',
                        '02' => '2 PERIODO', 'M1' => 'MULTISERIADA', 'A1' => 'SELIGA', 'A2'=>'ACELERA');
        foreach ($filtro as $anoturma) {
            $str = substr($anoturma['TB0034_IND_TURMA'], 0, 2);
            //var_dump($str);
            $anoserie[] = $this->utf8_encode_all($series[$str]);
            $turma[] = $this->utf8_encode_all($anoturma['TB0034_IND_TURMA']);
        }
        //$retorno[] =array_merge(array('ano'=>array_unique($anoserie),'turma'=>$turma));
        return array_merge(array('ano' => array_values(array_unique($anoserie)), 'turma' => $turma));

    }

    public function selecionaserie()
    {
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
                $tam_lista = count($_POST['escolas_turma']);
                $series = array('11' => '1 ANO', '12' => '2 ANO', '13' => '3 ANO', '14' => '4 ANO', '15' => '5 ANO', '16' => '6 ANO', '17' => '7 ANO', '18' => '8 ANO', '19' => '9 ANO',
                    'E0' => 'ALFABETIZACAO', 'E1' => '1 SERIE', 'E2' => '2 SERIE', 'E3' => '3 SERIE', 'E4' => '4 SERIE', 'E5' => '5 SERIE', 'E6' => '6 SERIE', 'E7' => '7 SERIE', 'E8' => '8 SERIE',
                    '0B' => 'BERCARIO', 'MM' => 'MATERNALZINHO', 'M0' => 'MATERNAL', '0Z' => 'MATERNAL I', '0M' => 'MATERNAL II', 'OM' => 'MATERNAL II','01' => '1 PERIODO',
                    '02' => '2 PERIODO', 'M1' => 'MULTISERIADA', 'A1' => 'SELIGA', 'A2'=>'ACELERA');
                $key = array_search($_POST['escolas_serie'], $series);
                for ($i = 0; $i < $tam_lista; $i++) {
                    $str = substr($_POST['escolas_turma'][$i], 0, 2);
                    if ($str == $key)
                        $array_turmas[] = $_POST['escolas_turma'][$i];
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
//##################################################################################
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