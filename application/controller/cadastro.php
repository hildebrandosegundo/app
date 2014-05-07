<?php
ob_start();

/**
 * Class Home
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */
class Cadastro extends Controller
{
    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/home/index (which is the default page btw)
     */
    // public function index($nome='',$idade='')
    public function index()
    {

        require 'application/views/home/cadastro.php';

    }

    public function checkmatricula()
    {
        $retorno = array();
        $cadastro_model = $this->loadModel('CadastroModel');
        if (empty($_POST['matricula'])) {
            $retorno = array_merge(array(
                    'sucesso' => false,
                    'values' => 'Matricula não informada ou errada'
                )
            );
        } else {

            $cadastro = $cadastro_model->verificaMatricula(mysql_real_escape_string($_POST['matricula']));
            //$cadastro_model->close();
            if ($_POST['matricula'] === $cadastro['matricula']) {
                $retorno = array_merge($retorno, array(
                        'sucesso' => false,
                        'values' => 'Matrícula já cadastrada!'
                    )
                );

            } else {

                $cadastro = $cadastro_model->getMatricula($this->mssql_escape($_POST['matricula']));
                //$cadastro_model->close();
                if ($cadastro['Nome'] == '' && $cadastro['CPF'] == '') {

                    $retorno = array_merge($retorno, array(
                            'sucesso' => false,
                            'values' => 'Matrícula não encontrada!'
                        )
                    );
                } else {
                    $retorno = array_merge($retorno, array(
                        'sucesso' => true,
                        'values' => array(
                            '#fullname' => $cadastro['Nome'],
                            '#cpf' => $cadastro['CPF']
                        )
                    ));
                }
            }
        }

        echo json_encode($retorno);
    }


    /**
     * PAGE: exampleone
     * This method handles what happens when you move to http://yourproject/home/exampleone
     * The camelCase writing is just for better readability. The method name is case insensitive.
     */
    private function mssql_escape($str)
    {
        if(get_magic_quotes_gpc())
        {
            $str= stripslashes($str);
        }
        return str_replace("'", "''", $str);
    }
    public function cadastrar()
    {
        $retorno = array();
        $error_message = '';
        $bool = false;
        $newmatricula = $_POST['matricula'];
        $newcpf = $_POST['cpf'];
        $newpassword = $_POST['password'];
        $confirmpassword = $_POST['confirmpassword'];
        $newfullname = $_POST['fullname'];
        $rad1 = @$_POST['op'];
        $code = 'NA';
        if (empty($rad1)) {
            $error_message = 'Selecione o tipo de usuário!';
        }
        if ($newpassword != $confirmpassword) {
            $error_message = 'Confirme a senha!';
        } else
            if (!preg_match("/^[A-Za-z0-9_!@$]{1,50}$/", $newmatricula)) {
                $error_message = 'Matrícula invalida!';
            } else
                if (!preg_match("/^[A-Za-z0-9_!@$]{1,50}$/", $newpassword)) {
                    $error_message = 'Senha não válida!';
                } else
                    if (!preg_match("/^[A-Za-z0-9_!@$.' &]{1,50}$/", $newfullname)) {
                        $error_message = 'Nome completo não válido!';
                    } else
                        if (!preg_match("/^[-0-9_!@$.' &]{1,15}$/", $newcpf)) {
                            $error_message = 'O CPF não é válida. Verifique seu CPF e tente novamente.';
                        }
        if (empty($error_message)) {
            $cadastro_model = $this->loadModel('CadastroModel');
            $cadastro = $cadastro_model->verificaMatricula(mysql_real_escape_string($_POST['matricula']));
            if ($_POST['matricula'] == $cadastro['matricula']) {
                $error_message = 'Matrícula já cadastrada!';
                //$cadastro_model->close();
            } else {
                $bool = true;
                $crypt_pass = md5($newpassword);
                $newmatricula = mysql_real_escape_string($newmatricula);
                $newcpf = mysql_real_escape_string($newcpf);
                $newfullname = mysql_real_escape_string($newfullname);

                $cadastro = $cadastro_model->cadastrar($crypt_pass, $newmatricula, $newcpf, $newfullname, $rad1, $code);
               // $cadastro_model->close();

                //exit;
            }
        }
        $retorno = array_merge($retorno, array(
                'sucesso' => $bool,
                'values' => $error_message
            )
        );
        echo json_encode($retorno);
        // this->index();
    }


}

