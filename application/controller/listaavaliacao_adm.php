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
                    "<button id= 'gabaritoaluno' class='gabaritoaluno disabled btn btn-default glyphicon glyphicon-thumbs-down'>Gabaritar" .
                    "</button>" .
                    "</div>";
            }
            if ($gab_aluno['gabarito_aluno_comp'] == 1) {
                $gab_aluno['gabarito_aluno_comp'] = "<div class='btn-group'>" .
                    "<button class='gabaritoaluno0 btn btn-primary glyphicon glyphicon-plus'>Gabaritar" .
                    "</button>" .
                    "</div>";
            }
            if ($gab_aluno['gabarito_aluno_comp'] == 2) {
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

    public function excluiavaliacao()
    {
        $retorno = array();
        $filtro_model = $this->loadModel('Listaavaliacaomodel');
        $filtro = $filtro_model->removeravaliacao($_POST['id']);
        $log =  $filtro_model->log($_POST['matricula_usuario'],'Excluiu avaliação');
        $retorno = array_merge($retorno, array(
            'sucesso' => true,
            'values' => 'Prova removida com sucesso!'
        ));
        echo json_encode($retorno);
    }

    public function gabaritoprova()
    {
        $retorno = array();
        $dados = array();

        for ($i = 1; $i <= 20; $i++) {
            $num_questao = "<input id='questao' disabled class='num_questao form-control' type='text' name='questao' value='" . $i . "' size='20'/>";
            $alternativa = "<input id='alternativa' class='alternativa form-control' type='text' name='alternativa' required='' size='20'/>";
            $option = "<button id='deletagabarito' class='deletagabarito btn btn-danger glyphicon glyphicon-remove-sign'></button>";
            $dados[] = array('num_questao' => $num_questao, 'alternativa' => $alternativa, 'option' => $option);
        }

        $retorno = array_merge($retorno, array(
                'sucesso' => true,
                'data' => $dados
            )
        );

        echo json_encode($retorno);
    }

    public function alteragabaritoprova()
    {
        $retorno = array();
        $filtro_model = $this->loadModel('Listaavaliacaomodel');
        $filtro = $filtro_model->selectgabaritoprova($_POST['id']);
        $dados = array();

        foreach ($filtro as &$gab_prova) {
            $id_questao = "<input TYPE='hidden' id='id_questao' disabled class='alt_id_questao form-control' type='text' name='id_questao' value='" . $gab_prova['id_gabarito_prova'] . "' size='5'/>";
            $num_questao = "<input id='questao' disabled class='alt_num_questao form-control' type='text' name='questao' value='" . $gab_prova['num_questao'] . "' size='20'/>";
            $alternativa = "<input id='alternativa' class='alt_alternativa form-control' type='text' name='alternativa' value='" . $gab_prova['alternativa'] . "' size='20'/>";
            //$option = "<button id='deletagabarito' class='deletagabarito btn btn-danger glyphicon glyphicon-remove-sign'></button>";
            $dados[] = array('id' => $id_questao, 'num_questao' => $num_questao, 'alternativa' => $alternativa);
        }

        $retorno = array_merge($retorno, array(
                'sucesso' => true,
                'data' => $dados
            )
        );
        echo json_encode($retorno);
    }

    public function info()
    {
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

    public function salvaprova()
    {
        $retorno = array();
        $filtro_model = $this->loadModel('Listaavaliacaomodel');
        $filtro = $filtro_model->salvaprovamodel(mysql_real_escape_string($_POST['qtd_questoes']),
            $_POST['num_questoes'],
            $_POST['alternativas'],
            mysql_real_escape_string($_POST['id']));
        $log =  $filtro_model->log($_POST['matricula_usuario'],'Criou gabarito de prova');
        $retorno = array_merge($retorno, array(
            'sucesso' => true,
            'values' => 'Prova cadastrada com sucesso!'
        ));
        echo json_encode($retorno);
    }

    public function editaprova()
    {
        $retorno = array();
        $filtro_model = $this->loadModel('Listaavaliacaomodel');
        $filtro = $filtro_model->editaprovamodel(mysql_real_escape_string($_POST['qtd_questoes']),
            $_POST['num_questoes'],
            $_POST['alternativas'],
            $_POST['id_questoes'],
            mysql_real_escape_string($_POST['id']));
        $log =  $filtro_model->log($_POST['matricula_usuario'],'Alterou gabarito de prova');
        $retorno = array_merge($retorno, array(
            'sucesso' => true,
            'values' => 'Prova alterada com sucesso!'
        ));
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
        $lista_aluno = $filtro_model->listaalunomodel($_POST['turma'], $_POST['escola'], $_POST['ano']);
        //var_dump($lista_aluno);
        $lista_nota = $filtro_model->listanotamodel(mysql_real_escape_string($_POST['id']));
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
                        $altaluno .= "<td><input type='text' class='alternativaaluno' value='" . $alternativas['alternativa'] . "' name='alternativaaluno' size='1' style='width:15px;'/></td>";
                    }
                }
                if ($chave == true) {
                    foreach ($lista_nota as $nota) {
                        if ($alunos['TB0026_COD_ALUNO'] == $nota['cod_aluno'])
                            $button = "<td><button class='editagabaritoaluno btn btn-warning glyphicon glyphicon-refresh'>
                        <span class='nota badge pull-right'>" . $nota['nota'] . "</span></button></td></tr>";
                    }
                }
                if ($chave == false) {

                    for ($i = 0; $i < $qtdquestao; $i++) {
                        $altaluno .= "<td><input type='text' class='alternativaaluno'  name='alternativaaluno' size='1' style='width:15px;'/></td>";
                        $button = "<td><button class='salvagabaritoaluno btn btn-success glyphicon glyphicon-floppy-save'>
                        <span class='nota badge pull-right'>0.0</span></button></td></tr>";
                    }

                }

                $linhas .= "<tr><td class='matricula'>" . $alunos['TB0026_COD_ALUNO'] . "</td><td class='sorting_1'><font size=1>" . $alunos['TB0137_NOME_PESSOA'] . "</font></td>" . $altaluno . $button;
            }

//data.TB0026_COD_ALUNO data.TB0137_NOME_PESSOA

        } else {
            for ($i = 0; $i < $qtdquestao; $i++) {
                $altaluno .= "<td><input type='text' class='alternativaaluno' name='alternativaaluno' size='1' style='width:15px;'/></td>";
            }
            foreach ($lista_aluno as $alunos) {
                $linhas .= "<tr><td class='matricula'>" . $alunos['TB0026_COD_ALUNO'] . "</td><td class='sorting_1'><font size=1>" . $alunos['TB0137_NOME_PESSOA'] . "</font></td>" . $altaluno .
                    "<td><button class='salvagabaritoaluno btn btn-success glyphicon glyphicon-floppy-save'>
                    <span class='nota badge pull-right'>0.0</span></button></td></tr>";
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
        $log =  $filtro_model->log($_POST['matricula_usuario'],'Criou gabarito de aluno');
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
        $log =  $filtro_model->log($_POST['matricula_usuario'],'Alterou gabarito de aluno');
        $retorno = array_merge($retorno, array(
            'nota' => $filtro_model->notamodel()
        ));
        echo json_encode($retorno);
    }

    /*public function listaturmas()
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
    }*/

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
        $filtro_model = $this->loadModel('Listaavaliacaomodel');
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

    public function insaltaluno()
    {
        $filtro_model = $this->loadModel('Listaavaliacaomodel');
        if ($_POST['op'] == 0) {
            $filtro = $filtro_model->inseriquestaoaluno(mysql_real_escape_string($_POST['num_questao']),
                mysql_real_escape_string($_POST['alternativa']),
                mysql_real_escape_string($_POST['id']));

        }
    }

    public function  selecionaescolacod()
    {
        $retorno = array();
        $array_nome = array();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            if (empty($_POST['escolas_cod'])) {
                $retorno = array_merge(array(
                        'sucesso' => false,
                        'ano' => 'escolas não informadas'
                    )
                );
            } else {
                $anoturmas = $this->selecionaturma();
                //print_r($this->escolas_nome[1]);
                $listaescolas = explode(',', $_POST['escolas_cod']);
                // print_r($listaescolas);
                $tam_lista = count($listaescolas);

                for ($i = 0; $i < $tam_lista; $i++) {
                    $key = array_search($listaescolas[$i], $_POST['escolas_cod2']);
                    $array_nome[] = $_POST['escolas_cod2'][$key] . ' - ' . $_POST['escolas_nome'][$key];
                }
                //var_dump($array_nome);
                $retorno = array_merge(array(
                        'sucesso' => $anoturmas['status'],
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

                }
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

        $filtro_model = $this->loadModel('Listaavaliacaomodel');
        // $cod = implode("','", $_POST['escolas_cod']);
        //var_dump($_POST['escolas_cod']);
        if (empty($_POST['escolas_cod'])) {
            $filtro = $filtro_model->selectanoturmamodel('*');
        } else {
            $filtro = $filtro_model->selectanoturmamodel($_POST['escolas_cod']);
        }
        $series = array('11' => '1 ANO', '12' => '2 ANO', '13' => '3 ANO', '14' => '4 ANO', '15' => '5 ANO', '16' => '6 ANO', '17' => '7 ANO', '18' => '8 ANO', '19' => '9 ANO',
            'E0' => 'ALFABETIZACAO', 'E1' => '1 SERIE', 'E2' => '2 SERIE', 'E3' => '3 SERIE', 'E4' => '4 SERIE', 'E5' => '5 SERIE', 'E6' => '6 SERIE', 'E7' => '7 SERIE', 'E8' => '8 SERIE',
            '0B' => 'BERCARIO', 'MM' => 'MATERNALZINHO', 'M0' => 'MATERNAL', '0Z' => 'MATERNAL I', '0M' => 'MATERNAL II', 'OM' => 'MATERNAL II', '01' => '1 PERIODO',
            '02' => '2 PERIODO', 'M1' => 'MULTISERIADA', 'A1' => 'SELIGA', 'A2' => 'ACELERA', 'AE' => 'AE', 'ME' => 'ME');
        foreach ($filtro as $anoturma) {
            $str = substr($anoturma['TB0034_IND_TURMA'], 0, 2);
            //var_dump($str);
            $anoserie[] = $this->utf8_encode_all($series[$str]);
            $turma[] = $this->utf8_encode_all($anoturma['TB0034_IND_TURMA']);
        }
        //$retorno[] =array_merge(array('ano'=>array_unique($anoserie),'turma'=>$turma));
        $arrayserie = array_values(array_unique($anoserie));
        //var_dump($arrayserie);
        if (in_array($_POST['serie_prova'], $arrayserie)) {
            return array_merge(array('status' => true, 'ano' => array($_POST['serie_prova']), 'turma' => $turma));
        } else {
            return array_merge(array('status' => false, 'ano' => 'Não Possui ' . $_POST['serie_prova'], 'turma' => $turma));
        }
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
                    '0B' => 'BERCARIO', 'MM' => 'MATERNALZINHO', 'M0' => 'MATERNAL', '0Z' => 'MATERNAL I', '0M' => 'MATERNAL II', 'OM' => 'MATERNAL II', '01' => '1 PERIODO',
                    '02' => '2 PERIODO', 'M1' => 'MULTISERIADA', 'A1' => 'SELIGA', 'A2' => 'ACELERA', 'AE' => 'AE', 'ME' => 'ME');
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

    public function atualizaravaliacao()
    {
        $retorno = array();
        $array_turmas = array();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            if (empty($_POST['textdescricao'])) {
                $retorno = array_merge(array(
                        'sucesso' => false,
                        'values' => 'O campo Descrição da avaliação está vazia!'
                    )
                );
            } else if (empty($_POST['op'])) {
                $retorno = array_merge(array(
                        'sucesso' => false,
                        'values' => 'O campo Número da avaliação está vazia!'
                    )
                );
            } else if (empty($_POST['tipo'])) {
                $retorno = array_merge(array(
                        'sucesso' => false,
                        'values' => 'O campo Tipo de prova está vazia!'
                    )
                );
            } else if (empty($_POST['serie'])) {
                $retorno = array_merge(array(
                        'sucesso' => false,
                        'values' => 'O campo Ano/Série está vazia!'
                    )
                );
            } else if (empty($_POST['tokenfield_programa'])) {
                $retorno = array_merge(array(
                        'sucesso' => false,
                        'values' => 'O campo Programa está vazia!'
                    )
                );
            } else if (empty($_POST['tokenfield_materia'])) {
                $retorno = array_merge(array(
                        'sucesso' => false,
                        'values' => 'O campo Matéria está vazia!'
                    )
                );
            } else if (empty($_POST['ano'])) {
                $retorno = array_merge(array(
                        'sucesso' => false,
                        'values' => 'O campo Ano está vazia!'
                    )
                );

            } else {
                $filtro_model = $this->loadModel('ListaavaliacaoModel');
                $filtro = $filtro_model->atualizaavaliacaomodel(mysql_real_escape_string($_POST['textdescricao']),
                    mysql_real_escape_string($_POST['op']),
                    mysql_real_escape_string($_POST['tokenfield_programa']),
                    mysql_real_escape_string($_POST['tipo']),
                    mysql_real_escape_string($_POST['serie']),
                    mysql_real_escape_string($_POST['tokenfield_materia']),
                    mysql_real_escape_string($_POST['id']),
                    mysql_real_escape_string($_POST['ano']));
                $log =  $filtro_model->log($_POST['matricula_usuario'],'Alterou dados da avaliação');
                $retorno = array_merge(array(
                        'sucesso' => true,
                        'values' => 'Avaliação atualizada com sucesso!'
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