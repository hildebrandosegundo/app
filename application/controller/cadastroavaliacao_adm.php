<?php
ob_start();

/**
 * Created by PhpStorm.
 * User: Avell B154 PLUS
 * Date: 30/04/14
 * Time: 09:07
 */
class Cadastroavaliacao_adm extends Controller
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

        require 'application/views/home/cadastroavaliacao_adm.php';

    }
    public function  cadastrarmateria()
    {
        $retorno = array();
        $filtro_model = $this->loadModel('CadastroavaliacaoModel');
        if (empty($_POST['zona'])) {
            $filtro = $filtro_model->cadmateriamodel(mysql_real_escape_string($_POST['nome']));
        }
        $log =  $filtro_model->log($_POST['matricula_usuario'],'Cadastrou materia');

        $retorno = array_merge($retorno, array(
            'sucesso' => 'true',
            'nome' => $_POST['nome']
        ));
        echo json_encode($retorno);
    }

    public function  cadastrarprograma()
    {
        $retorno = array();
        $filtro_model = $this->loadModel('CadastroavaliacaoModel');
        if (empty($_POST['zona'])) {
            $filtro = $filtro_model->cadprogramamodel(mysql_real_escape_string($_POST['nome']));
        }
        $log =  $filtro_model->log($_POST['matricula_usuario'],'Cadastrou programa');

        $retorno = array_merge($retorno, array(
            'sucesso' => 'true',
            'nome' => $_POST['nome']
        ));
        echo json_encode($retorno);
    }
    public function  selectmateria()
    {
        $retorno = array();
        $materias = array();
        $filtro_model = $this->loadModel('CadastroavaliacaoModel');
        $filtro = $filtro_model->selectmateriamodel();
        //var_dump($filtro['nome']);
        foreach ($filtro as $mat) {

            $materias[] = $mat['id_materia'] . '-' . $mat['nome'];
        }
        $retorno = array_merge($retorno, array(
            'sucesso' => 'true',
            'nome' => $materias
        ));
        echo json_encode($retorno);
    }

    public function  selectprograma()
    {
        $retorno = array();
        $programas = array();
        $filtro_model = $this->loadModel('CadastroavaliacaoModel');
        $filtro = $filtro_model->selectprogramamodel();
        //var_dump($filtro['nome']);
        foreach ($filtro as $prog) {

            $programas[] = $prog['id_programa'] . '-' . $prog['nome'];
        }
        $retorno = array_merge($retorno, array(
            'sucesso' => 'true',
            'nome' => $programas
        ));
        echo json_encode($retorno);
    }
    public function cadastraravaliacao()
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
           } else {
                 $filtro_model = $this->loadModel('CadastroavaliacaoModel');
                 $filtro = $filtro_model->cadastraavaliacaomodel(mysql_real_escape_string($_POST['textdescricao']),
                                                                 mysql_real_escape_string($_POST['op']),
                                                                 mysql_real_escape_string($_POST['tokenfield_programa']),
                                                                 mysql_real_escape_string($_POST['tipo']),
                                                                 mysql_real_escape_string($_POST['serie']),
                                                                 mysql_real_escape_string($_POST['tokenfield_materia']));
                $log =  $filtro_model->log($_POST['matricula_usuario'],'Cadastrou avaliação');

                $retorno = array_merge(array(
                        'sucesso' => true,
                        'values' => 'Cadastro efetuado com sucesso!'
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

            } else {
                $filtro_model = $this->loadModel('CadastroavaliacaoModel');
                $filtro = $filtro_model->atualizaavaliacaomodel(mysql_real_escape_string($_POST['textdescricao']),
                    mysql_real_escape_string($_POST['op']),
                    mysql_real_escape_string($_POST['tokenfield_programa']),
                    mysql_real_escape_string($_POST['tipo']),
                    mysql_real_escape_string($_POST['serie']),
                    mysql_real_escape_string($_POST['tokenfield_materia']));
                $log =  $filtro_model->log($_POST['matricula_usuario'],'Alterou avaliação');
                $retorno = array_merge(array(
                        'sucesso' => true,
                        'values' => 'Avaliação atualizada com sucesso!'
                    )
                );

            }
        }
        echo json_encode($retorno);

    }

    public function excluirprograma()
    {
        $retorno = array();
        $filtro_model = $this->loadModel('CadastroavaliacaoModel');
        $filtro = $filtro_model->excluirprogramamodel($_POST['id']);
        $log =  $filtro_model->log($_POST['matricula_usuario'],'Excluiu programa');
        $retorno = array_merge($retorno, array(
                'sucesso' => true
            )
        );
        echo json_encode($retorno);
    }

    public function excluirmateria()
    {
        $retorno = array();
        $filtro_model = $this->loadModel('CadastroavaliacaoModel');
        $filtro = $filtro_model->excluirmateriamodel($_POST['id']);
        $log =  $filtro_model->log($_POST['matricula_usuario'],'Excluiu materia');
        $retorno = array_merge($retorno, array(
                'sucesso' => true
            )
        );
        echo json_encode($retorno);
    }

    public function editarprograma()
    {
        $retorno = array();
        $filtro_model = $this->loadModel('CadastroavaliacaoModel');
        $filtro = $filtro_model->editarprogramamodel($_POST['nome'], $_POST['id']);
        $log =  $filtro_model->log($_POST['matricula_usuario'],'Alterou programa');
        $retorno = array_merge($retorno, array(
                'sucesso' => true
            )
        );
        echo json_encode($retorno);
    }

    public function editarmateria()
    {
        $retorno = array();
        $filtro_model = $this->loadModel('CadastroavaliacaoModel');
        $filtro = $filtro_model->editarmateriamodel($_POST['nome'], $_POST['id']);
        $log =  $filtro_model->log($_POST['matricula_usuario'],'Alterou materia');
        $retorno = array_merge($retorno, array(
                'sucesso' => true
            )
        );
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