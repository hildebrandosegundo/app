<?php
//ob_start();

/**
 * Class Home
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */
class Login extends Controller
{
    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/home/index (which is the default page btw)
     */
    public function index()
    {
        $matricula = isset($_COOKIE['matricula']) ? $_COOKIE['matricula'] : '';
        $lotacao = isset($_COOKIE['lotacao']) ? $_COOKIE['lotacao'] : '';

        // load views. within the views we can echo out $songs and $amount_of_songs easily
        //require 'application/views/_templates/header.php';
        //require_once 'application/views/home/index.php';
        //debug_print_backtrace();
        require_once 'application/views/home/login.php';

        //require 'application/views/_templates/footer.php';

    }

    public function entrar()
    {
        $retorno = array();

        $success_page_adm = URL . '/masterpage_adm';
        $success_page_cli = URL . '/masterpage_cli';
        //$error_page = URL . '/login_erro';
        $lotacao = $_POST['lotacao'];
        $found = false;
        $fullname = '';
        $session_timeout = 600;
        $index_model = $this->loadModel('IndexModel');
        $login = $index_model->getLogin($_POST['matricula']);
        $fulllotacao = explode(' - ', $login['lotacao'])[0];
/*        var_dump($login['CPF'], $_POST['cpf']);
        var_dump($login['situacao'], $login['situacao_atua']);*/
        if ($_POST['cpf']==$login['CPF'] && $lotacao == $fulllotacao && $login['situacao']=='ATIVO' && $login['situacao_atua']=='ATIVA') {
            $found = true;
            $fullname = $login['nome'];

        }
        if($found==false){
             if($_POST['cpf']!=$login['CPF'] && $lotacao != $fulllotacao && $login['situacao']!='ATIVO' && $login['situacao_atua']!='ATIVA'){
                $retorno = array_merge($retorno, array(
                        'sucesso' => false,
                        'values' => 'Cadastro invalido ou esta encerrada!'
                    )
                );
            }

            else if ($lotacao != $fulllotacao){
                $retorno = array_merge($retorno, array(
                        'sucesso' => false,
                        'values' => 'Lotação desatualizada ou não encontrada!'
                    )
                );
            }
            else if ($_POST['cpf']!=$login['CPF']){
                $retorno = array_merge($retorno, array(
                        'sucesso' => false,
                        'values' => 'CPF invalido ou não encontrado!'
                    )
                );
            }
            else if ($login['situacao']!='ATIVO'){
                $retorno = array_merge($retorno, array(
                        'sucesso' => false,
                        'values' => 'Cadastro desativado!'
                    )
                );
            }
            else if ($login['situacao_atua']!='ATIVA'){
                $retorno = array_merge($retorno, array(
                        'sucesso' => false,
                        'values' => 'Atividade está encerrada!'
                    )
                );
            }

        }
        //$index_model->close();
        else {
            if ($login['Atividade'] == 'DIGITADOR') {
                $retorno = array_merge($retorno, array(
                        'sucesso' => true,
                        'values' => $success_page_adm
                    )
                );
                $logar = true;
            } else if ($login['Atividade'] == 'PROFESSOR(A)' || $login['Atividade'] == 'DIRETOR' || $login['Atividade'] == 'AUX. DE SECRETARIA' || $login['Atividade'] == 'DIRETOR PEDAGÓGICO' || $login['Atividade'] == 'SECRETÁRIA(O)'
                || $login['Atividade'] == 'DIRETOR(A) ADJUNTO' || $login['Atividade'] == 'PEDAGOGO(A)') {
                $retorno = array_merge($retorno, array(
                        'sucesso' => true,
                        'values' => $success_page_cli
                    )
                );
                $logar = true;
            } else {
                $retorno = array_merge($retorno, array(
                        'sucesso' => false,
                        'values' => 'Sua lotação não é permitida ou não cadastrada!'
                    )
                );
                $logar = false;
            }
            if( $logar == true){
            if (session_id() == "") {
                session_start();
            }
            $_SESSION['matricula'] = $_POST['matricula'];
            $_SESSION['fullname'] = $fullname;
            $_SESSION['lotacao'] = $fulllotacao;
            $_SESSION['expires_by'] = time() + $session_timeout;
            $_SESSION['expires_timeout'] = $session_timeout;
            $rememberme = isset($_POST['rememberme']) ? true : false;
            if ($rememberme) {
                setcookie('matricula', $_POST['matricula'], time() + 3600 * 24 * 30);
                setcookie('lotacao', $_POST['lotacao'], time() + 3600 * 24 * 30);
            }
            }
        }
        echo json_encode($retorno);
    }

}


