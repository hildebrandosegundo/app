<?php

/**
 * Created by PhpStorm.
 * User: Avell B154 PLUS
 * Date: 21/05/14
 * Time: 08:47
 */
class Listaavaliacao_cli extends Controller
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
        require 'application/views/home/listaavaliacao_cli.php';
    }

    public function lista()
    {
        $retorno = array();
        $filtro_model = $this->loadModel('Listaavaliacaomodel');
        $filtro = $filtro_model->selectavaliacao();
        //print_r($filtro);

        foreach ($filtro as &$gab_aluno) {
            if ($gab_aluno['gabarito_aluno_comp'] == 0) {
                $gab_aluno['gabarito_aluno_comp'] = "<div class='btn-group'>" .
                    "<button id='info' class='btn btn-info glyphicon glyphicon-search'>" .
                    "</button>" .
                    "<button id= 'gabaritoaluno' class='gabaritoaluno disabled btn btn-default glyphicon glyphicon-thumbs-down'>Gabaritar" .
                    "</button>" .
                    "</div>";
            }
            if ($gab_aluno['gabarito_aluno_comp'] == 1) {
                $gab_aluno['gabarito_aluno_comp'] = "<div class='btn-group'>" .
                    "<button id='info' class='btn btn-info glyphicon glyphicon-search'>" .
                    "</button>" .
                    "<button class='gabaritoaluno0 btn btn-primary glyphicon glyphicon-plus'>Gabaritar" .
                    //"<span class='badge pull-right'>42%</span>".
                    "</button>" .
                    "</div>";
            }
            if ($gab_aluno['gabarito_aluno_comp'] == 2) {
                $gab_aluno['gabarito_aluno_comp'] = "<div class='btn-group'>" .
                    "<button id='info' class='btn btn-info glyphicon glyphicon-search'>" .
                    "</button>" .
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
        //$qtdquestao = 5;
        $linhashead = '';

        $altaluno = '';
        $filtro_model = $this->loadModel('Listaavaliacaomodel');
        $qtdquestao = $filtro_model->quantidadequestoes(mysql_real_escape_string($_POST['id']));
        //$lista_aluno = array(array('matricula' => '4356', 'nome' => 'fulano de tal'), array('matricula' => '5678', 'nome' => 'lindolfo monteiro'), array('matricula' => '1234', 'nome' => 'fransisco fransisval'));
        $listaalternativa = $filtro_model->listagabaritoalunomodel(mysql_real_escape_string($_POST['id']));
        // print_r($_POST['turma'],$_POST['escola']);
        $lista_aluno = $filtro_model->listaalunomodel($_POST['turma'],$_POST['escola'],$_POST['ano']);
        //var_dump($lista_aluno);
        for ($i = 1; $i <= $qtdquestao; $i++) {
            $linhashead .= "<th aria-label='" . $i . ": activate to sort column ascending' aria-controls='gabaritarprova'>" . $i . "</th>";
        }
        $linhas = "<thead>" .
            "<tr>" .
            "<th class='sorting' aria-label='Matrícula: activate to sort column ascending' aria-controls='gabaritarprova'" .
            ">Matrícula</th>" .
            "<th class='sorting' aria-label='Nome: activate to sort column ascending' aria-sort='ascending' aria-controls='gabaritarprova'>Nome</th>";
        $linhas .= $linhashead;

        $linhas .= "</tr>" .
            "<tr></tr></thead>";

        $linhas .= "<tbody>";
        if (!empty($listaalternativa)) {

            foreach ($lista_aluno as $alunos) {
                $altaluno = '';
                $chave = false;
                foreach ($listaalternativa as $alternativas) {

                    if ($alunos['TB0026_COD_ALUNO'] == $alternativas['cod_aluno']) {
                        $chave = true;
                        $altaluno .= "<td><input type='text' class='alternativaaluno' value='" . $alternativas['alternativa'] . "' name='alternativaaluno' size='1'/></td>";
                        $button = "<td><button class='editagabaritoaluno btn btn-warning glyphicon glyphicon-refresh'>
                        <span class='nota badge pull-right'>2</span></button></td></tr>";
                    }
                }
                if ($chave == false){

                    for ($i = 0; $i < $qtdquestao; $i++) {
                        $altaluno .= "<td><input type='text' class='alternativaaluno'  name='alternativaaluno' size='1'/></td>";
                        $button = "<td><button class='salvagabaritoaluno btn btn-success glyphicon glyphicon-floppy-save'>
                        <span class='nota badge pull-right'>1</span></button></td></tr>";
                    }

                }

                $linhas .= "<tr><td class='matricula'>" . $alunos['TB0026_COD_ALUNO'] . "</td><td class='sorting_1'>" . $alunos['TB0137_NOME_PESSOA'] . "</td>" . $altaluno . $button;
            }

//data.TB0026_COD_ALUNO data.TB0137_NOME_PESSOA

        } else {
            for ($i = 0; $i < $qtdquestao; $i++) {
                $altaluno .= "<td><input type='text' class='alternativaaluno' name='alternativaaluno' size='1'/></td>";
            }
            foreach ($lista_aluno as $alunos) {
                $linhas .= "<tr><td class='matricula'>" . $alunos['TB0026_COD_ALUNO'] . "</td><td class='sorting_1'>" . $alunos['TB0137_NOME_PESSOA'] . "</td>" . $altaluno .
                    "<td><button class='salvagabaritoaluno btn btn-success glyphicon glyphicon-floppy-save'></button></td></tr>";
//data.TB0026_COD_ALUNO data.TB0137_NOME_PESSOA
            }
        }
        $linhas .= "</tbody>";
        $retorno = array_merge($retorno, array(
            'sucesso' => true,
            'linhas' => $linhas
        ));
        echo json_encode($retorno);
    }
    public function salvagabaritoaluno()
    {
        $retorno = array();
        $filtro_model = $this->loadModel('Listaavaliacaomodel');
        $qtdquestao = $filtro_model->salvagabaritoalunomodel(mysql_real_escape_string($_POST['id']),
            mysql_real_escape_string($_POST['matricula']),
            mysql_real_escape_string($_POST['cod_unidade']),
            mysql_real_escape_string($_POST['ind_turma']),
            $_POST['questoes']);
        $retorno = array_merge($retorno, array(
            'nota' => $filtro_model->notamodel()
        ));
        echo json_encode($retorno);
    }

    public function alteragabaritoaluno()
    {
        $retorno = array();
        $filtro_model = $this->loadModel('Listaavaliacaomodel');
        $qtdquestao = $filtro_model->alteragabaritoalunomodel(mysql_real_escape_string($_POST['id']),
            mysql_real_escape_string($_POST['matricula']),
            $_POST['questoes']);
        $retorno = array_merge($retorno, array(
            'nota' => $filtro_model->notamodel()
        ));
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
       /* $retorno = array();
        $turmas = array();*/
        $filtro_model = $this->loadModel('Listaavaliacaomodel');
        if (empty($_POST['escolas_cod'])) {
            $filtro = $filtro_model->selectanoturmamodel('*');
        } else {
            $filtro = $filtro_model->selectanoturmamodel($_POST['escolas_cod']);
        }
        $series = array('11' => '1 ANO', '12' => '2 ANO', '13' => '3 ANO', '14' => '4 ANO', '15' => '5 ANO', '16' => '6 ANO', '17' => '7 ANO', '18' => '8 ANO', '19' => '9 ANO',
            'E0' => 'ALFABETIZACAO', 'E1' => '1 SERIE', 'E2' => '2 SERIE', 'E3' => '3 SERIE', 'E4' => '4 SERIE', 'E5' => '5 SERIE', 'E6' => '6 SERIE', 'E7' => '7 SERIE', 'E8' => '8 SERIE',
            '0B' => 'BERCARIO', 'MM' => 'MATERNALZINHO', 'M0' => 'MATERNAL', '0Z' => 'MATERNAL I', '0M' => 'MATERNAL II', 'OM' => 'MATERNAL II', '01' => '1 PERIODO',
            '02' => '2 PERIODO', 'M1' => 'MULTISERIADA', 'A1' => 'SELIGA', 'A2' => 'ACELERA', 'AE' => 'AE', 'ME' => 'ME');
        $key = array_search($_POST['serie_prova'], $series);
        foreach ($filtro as $anoturma) {
            $str = substr($anoturma['TB0034_IND_TURMA'], 0, 2);
            //var_dump($str);
            $anoserie[] = $this->utf8_encode_all($series[$str]);
            $turma[] = $this->utf8_encode_all($anoturma['TB0034_IND_TURMA']);
        }
        $arrayserie = array_values(array_unique($anoserie));
        $tam_lista = count($turma);
        for ($i = 0; $i < $tam_lista; $i++) {
            $str = substr($turma[$i], 0, 2);
            if ($str == $key)
                $array_turmas[] = $turma[$i];
        }
        if (in_array($_POST['serie_prova'], $arrayserie)) {
            $turmas =  array_merge(array('status' => true,'ano' => array($_POST['serie_prova']), 'turma' => $array_turmas));
        } else {
            $turmas = array_merge(array('status' => false,'ano' => 'Esta escola não possui ' . $_POST['serie_prova'], 'turma' => 'Não possui'));
        }
        $retorno = array_merge(array(
                'sucesso' => $turmas['status'],
                'serie' => $turmas['ano'],
                'turma' => $turmas['turma']
            )
        );
        echo json_encode($retorno);
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
    public function utf8_encode_all($dat) // -- It returns $dat encoded to UTF8
    {
        if (is_string($dat)) return utf8_encode($dat);
        if (!is_array($dat)) return $dat;
        $ret = array();
        foreach ($dat as $i => $d) $ret[$i] = utf8_encode_all($d);
        return $ret;
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