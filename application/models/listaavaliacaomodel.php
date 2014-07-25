<?php
/**
 * Created by PhpStorm.
 * User: Avell B154 PLUS
 * Date: 18/06/14
 * Time: 11:27
 */
$nota = '';
class Listaavaliacaomodel {

    function __construct()
    {

    }
 public function selectavaliacao(){
     try {
         $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8',PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ, PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING);
         $db = new PDO(DB_TYPE_mysql . ':host=' . DB_HOST_mysql . ';dbname=' . DB_NAME_mysql.';charset=utf8', DB_USER_mysql, DB_PASS_mysql, $options);
         $sql = " SELECT id_avaliacao, serie, num_avaliacao, programa, materia, gabarito_prova_comp, gabarito_aluno_comp
                FROM   avaliacao";
         $query = $db->prepare($sql);
         $query->execute();
         return $query->fetchAll(PDO::FETCH_ASSOC);
     } catch (PDOException $e) {
         echo "Erro de Conexão " . $e->getMessage() . "\n";
         exit('Database connection could not be established.');
     }
 }
    public function porcentagem(){
        try {
            $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8',PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ, PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING);
            $db = new PDO(DB_TYPE_mysql . ':host=' . DB_HOST_mysql . ';dbname=' . DB_NAME_mysql.';charset=utf8', DB_USER_mysql, DB_PASS_mysql, $options);
            $sql = " SELECT id_avaliacao, serie, num_avaliacao, programa, materia, gabarito_prova_comp, gabarito_aluno_comp
                FROM   avaliacao";
            $query = $db->prepare($sql);
            $query->execute();
            return $query->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Erro de Conexão " . $e->getMessage() . "\n";
            exit('Database connection could not be established.');
        }

    }
    public function removeravaliacao($id)
    {
        try {
            $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8',PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ, PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING);
            $db = new PDO(DB_TYPE_mysql . ':host=' . DB_HOST_mysql . ';dbname=' . DB_NAME_mysql.';charset=utf8', DB_USER_mysql, DB_PASS_mysql, $options);
            $sql = "DELETE FROM avaliacao WHERE id_avaliacao = '".$id."'";
            $query = $db->prepare($sql);
            $query->execute();
            $sql = "DELETE FROM gabarito_prova WHERE cod_avaliacao = '".$id."'";
            $query = $db->prepare($sql);
            $query->execute();
            $sql = "DELETE FROM gabarito_aluno WHERE cod_avaliacao = '".$id."'";
            $query = $db->prepare($sql);
            $query->execute();
            $sql = "DELETE FROM questoes_aluno WHERE cod_avaliacao = '".$id."'";
            $query = $db->prepare($sql);
            $query->execute();
        } catch (PDOException $e) {
            echo "Erro de Conexão " . $e->getMessage() . "\n";
            exit('Database connection could not be established.');
        }
    }
    public function atualizaavaliacaomodel($textdescricao, $num, $programa, $tipo, $serie, $materia, $id, $data)
    {
        try {
            $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8',PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ, PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING);
            $db = new PDO(DB_TYPE_mysql . ':host=' . DB_HOST_mysql . ';dbname=' . DB_NAME_mysql.';charset=utf8', DB_USER_mysql, DB_PASS_mysql, $options);

            $sql = "
                UPDATE avaliacao SET desc_avaliacao = '".$textdescricao."', ano_avaliacao = '".$data."', num_avaliacao = '".$num."', programa = '".$programa."',
                 materia = '".$materia."', tipo = '".$tipo."', serie = '".$serie."' WHERE id_avaliacao = '".$id."'
               ";
            $query = $db->prepare($sql);
            $query->execute();
        } catch (PDOException $e) {
            echo "Erro de Conexão " . $e->getMessage() . "\n";
            exit('Database connection could not be established.');
        }
    }
    public function infomodel($id){
        try {
            $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8',PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ, PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING);
            $db = new PDO(DB_TYPE_mysql . ':host=' . DB_HOST_mysql . ';dbname=' . DB_NAME_mysql.';charset=utf8', DB_USER_mysql, DB_PASS_mysql, $options);
            $sql = " SELECT desc_avaliacao, ano_avaliacao, tipo
                FROM   avaliacao where id_avaliacao = '".$id."'";
            $query = $db->prepare($sql);
            $query->execute();
            return $query->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Erro de Conexão " . $e->getMessage() . "\n";
            exit('Database connection could not be established.');
        }

    }
    public function listagabaritoalunomodel($id)
    {
        try {
            $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8',PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ, PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING);
            $db = new PDO(DB_TYPE_mysql . ':host=' . DB_HOST_mysql . ';dbname=' . DB_NAME_mysql.';charset=utf8', DB_USER_mysql, DB_PASS_mysql, $options);
            $sql = " SELECT alternativa, cod_aluno
                FROM questoes_aluno where cod_avaliacao = '".$id."'";
            $query = $db->prepare($sql);
            $query->execute();
           return $query->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Erro de Conexão " . $e->getMessage() . "\n";
            exit('Database connection could not be established.');
        }
    }
    public function salvagabaritoalunomodel($id,$matricula,$cod_unidade,$ind_turma,$questoes)
    {
        try {
            $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8',PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ, PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING);
            $db = new PDO(DB_TYPE_mysql . ':host=' . DB_HOST_mysql . ';dbname=' . DB_NAME_mysql.';charset=utf8', DB_USER_mysql, DB_PASS_mysql, $options);
            $sql = "SELECT alternativa FROM gabarito_prova where cod_avaliacao = ".$id."";
            $query = $db->prepare($sql);
            $query->execute();
            $gab_prova = $query->fetchAll(PDO::FETCH_COLUMN);
            $acertos = count(array_uintersect_uassoc($gab_prova, $questoes,"strcasecmp", "strcasecmp"));            $nota = $acertos*10/count($questoes);
            $nota = number_format($acertos*10/count($questoes), 1, '.', '');
            $GLOBALS['nota'] = $nota;
            $sql = "INSERT INTO gabarito_aluno (cod_avaliacao, cod_unidade, cod_aluno,ind_turma, nota)
                       VALUES ('".$id."',".$cod_unidade.", '".$matricula."','".$ind_turma."', '".$nota."')";
            $query = $db->prepare($sql);
            $query->execute();
            $sql = "SELECT id_gabarito_aluno FROM gabarito_aluno ORDER BY id_gabarito_aluno DESC LIMIT 1";
            $query = $db->prepare($sql);
            $query->execute();
            $res = $query->fetch(PDO::FETCH_ASSOC);
            $cod_gabarito_aluno_ = $res['id_gabarito_aluno'];
            for ($i = 0; $i< count($questoes); $i++){
                $sql = "INSERT INTO questoes_aluno (cod_aluno, num_questao, alternativa,cod_avaliacao, cod_gabarito_aluno)
                       VALUES ('".$matricula."',".($i+1).", ".$db->quote($questoes[$i]).",'".$id."','".$cod_gabarito_aluno_."')";
                $query = $db->prepare($sql);
                $query->execute();
            }
        } catch (PDOException $e) {
            echo "Erro de Conexão " . $e->getMessage() . "\n";
            exit('Database connection could not be established.');
        }
    }
    public function notamodel()
    {
        return $GLOBALS['nota'];
    }
    public function alteragabaritoalunomodel($id,$matricula,$questoes)
    {
        try {
            $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8',PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ, PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING);
            $db = new PDO(DB_TYPE_mysql . ':host=' . DB_HOST_mysql . ';dbname=' . DB_NAME_mysql.';charset=utf8', DB_USER_mysql, DB_PASS_mysql, $options);
            $sql = " SELECT id_questao
                FROM questoes_aluno where cod_aluno = '".$matricula."' and cod_avaliacao = '".$id."'";
            $query = $db->prepare($sql);
            $query->execute();
            $id_questao = $query->fetchAll(PDO::FETCH_ASSOC);
            //print_r($teste[0]['id_questao']);
            $sql = "SELECT alternativa FROM gabarito_prova where cod_avaliacao = ".$id."";
            $query = $db->prepare($sql);
            $query->execute();
            $gab_prova = $query->fetchAll(PDO::FETCH_COLUMN);
            $acertos = count(array_uintersect_uassoc($gab_prova, $questoes,"strcasecmp", "strcasecmp"));
            $nota = number_format($acertos*10/count($questoes), 1, '.', '');
            $GLOBALS['nota'] = $nota;
            $sql = "UPDATE gabarito_aluno SET nota = '".$nota."' WHERE cod_avaliacao = '".$id."' and cod_aluno = '".$matricula."'";
            $query = $db->prepare($sql);
            $query->execute();
            for ($i = 0; $i< count($questoes); $i++){
                $sql = "UPDATE questoes_aluno SET alternativa = ".$db->quote($questoes[$i])." WHERE cod_avaliacao = '".$id."' and
                       id_questao = '".$id_questao[$i]['id_questao']."' and cod_aluno = '".$matricula."'";
                $query = $db->prepare($sql);
                $query->execute();
            }
        } catch (PDOException $e) {
            echo "Erro de Conexão " . $e->getMessage() . "\n";
            exit('Database connection could not be established.');
        }
    }
    public function listaescolasmodel($id){
        try {
            $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8',PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ, PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING);
            $db = new PDO(DB_TYPE_mysql . ':host=' . DB_HOST_mysql . ';dbname=' . DB_NAME_mysql.';charset=utf8', DB_USER_mysql, DB_PASS_mysql, $options);
            $sql = " SELECT cod_unidade
                FROM escolas where cod_avaliacao = '".$id."'";
            $query = $db->prepare($sql);
            $query->execute();
            return $query->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Erro de Conexão " . $e->getMessage() . "\n";
            exit('Database connection could not be established.');
        }

    }
    public function listanotamodel($id){
        try {
            $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8',PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ, PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING);
            $db = new PDO(DB_TYPE_mysql . ':host=' . DB_HOST_mysql . ';dbname=' . DB_NAME_mysql.';charset=utf8', DB_USER_mysql, DB_PASS_mysql, $options);
            $sql = " SELECT nota, cod_aluno
                FROM gabarito_aluno where cod_avaliacao = '".$id."'";
            $query = $db->prepare($sql);
            $query->execute();
            return $query->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Erro de Conexão " . $e->getMessage() . "\n";
            exit('Database connection could not be established.');
        }

    }
    public function listaalunomodel($turma,$escola,$ano){
        try {
            $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ, PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING);
            $db_oci = new PDO(DB_TYPE_oracle . ':dbname=' . DB_HOST_oracle, DB_USER_oracle, DB_PASS_oracle, $options);

            $sql = "SELECT
                       pf.TB0137_NOME_PESSOA,
                       mt.TB0026_COD_ALUNO
                    FROM
                       TB0037_MATRICULA mt,
                       TB0137_PESSOA_FISICA pf,
                       TB0026_ALUNO alu
                    where
                       mt.TB0034_IND_TURMA = ".$db_oci->quote($turma)."
                       and mt.TB0017_ANO = ".$db_oci->quote($ano)."
                       and mt.TB0008_NUM_UNIDADE = ".$db_oci->quote($escola)."
                       and mt.TB0026_COD_ALUNO = alu.TB0026_COD_ALUNO
                       and alu.TB0137_COD_PESSOA = pf.TB0137_COD_PESSOA
                    ORDER BY pf.TB0137_NOME_PESSOA";

            $query = $db_oci->prepare($sql);
            $query->execute();

            return $query->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Erro de Conexão " . $e->getMessage() . "\n";
            exit('Database connection could not be established.');
        }

    }
    public function salvaprovamodel($qtd_questoes,$num_questoes,$alternativas,$id)
    {
        try {
            $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8',PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ, PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING);
            $db = new PDO(DB_TYPE_mysql . ':host=' . DB_HOST_mysql . ';dbname=' . DB_NAME_mysql.';charset=utf8', DB_USER_mysql, DB_PASS_mysql, $options);

            for ($i = 0; $i< $qtd_questoes; $i++){
                $sql = "INSERT INTO gabarito_prova (cod_avaliacao, num_questao, alternativa)
                       VALUES ('".$id."',".$db->quote($num_questoes[$i]).", ".$db->quote($alternativas[$i]).")";
                $query = $db->prepare($sql);
                $query->execute();
            }
            $sql = "UPDATE avaliacao SET gabarito_prova_comp = '1', gabarito_aluno_comp = '1' WHERE id_avaliacao = '".$id."'";
            $query = $db->prepare($sql);
            $query->execute();
        } catch (PDOException $e) {
            echo "Erro de Conexão " . $e->getMessage() . "\n";
            exit('Database connection could not be established.');
        }

    }
    public function editaprovamodel($qtd_questoes,$num_questoes,$alternativas,$id_questoes,$id)
    {
        try {
            $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8',PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ, PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING);
            $db = new PDO(DB_TYPE_mysql . ':host=' . DB_HOST_mysql . ';dbname=' . DB_NAME_mysql.';charset=utf8', DB_USER_mysql, DB_PASS_mysql, $options);

            for ($i = 0; $i< $qtd_questoes; $i++){
                $sql = "UPDATE gabarito_prova SET alternativa = '".$alternativas[$i]."' WHERE id_gabarito_prova = '".$id_questoes[$i]."' and cod_avaliacao = '".$id."'";
                $query = $db->prepare($sql);
                $query->execute();
            }

        } catch (PDOException $e) {
            echo "Erro de Conexão " . $e->getMessage() . "\n";
            exit('Database connection could not be established.');
        }

    }
    public function quantidadequestoes($id){
        try {
            $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8',PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ, PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING);
            $db = new PDO(DB_TYPE_mysql . ':host=' . DB_HOST_mysql . ';dbname=' . DB_NAME_mysql.';charset=utf8', DB_USER_mysql, DB_PASS_mysql, $options);
            $sql = " SELECT id_gabarito_prova
                FROM gabarito_prova where cod_avaliacao = '".$id."'";
            $query = $db->prepare($sql);
            $query->execute();
            $dados = $query->fetchAll(PDO::FETCH_ASSOC);
            $count = count($dados);
            return $count;
        } catch (PDOException $e) {
            echo "Erro de Conexão " . $e->getMessage() . "\n";
            exit('Database connection could not be established.');
        }

    }
    public function selectzonamodel($zona)
    {
       try{
        $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ, PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING);
        $this->db_oci = new PDO(DB_TYPE_oracle . ':dbname=' . DB_HOST_oracle, DB_USER_oracle, DB_PASS_oracle, $options);
        $dados = '';
        $listazona = explode(',', $zona);
        $tam_lista = count($listazona);
        for ($i = 0; $i < $tam_lista; $i++) {
            if ($i == 0) {
                $dados .= $this->db_oci->quote($listazona[$i]);
            } else {
                $dados .= "," . $this->db_oci->quote($listazona[$i]);
            }
        }
        // print_r($this->db_oci->quote($zona));
        $sql = "SELECT uni.tb0008_nome_unidade,
                       uni.tb0008_num_unidade
                FROM   tb0008_unidade uni,
                       tb0003_nucleo_regional nuc
               WHERE  uni.tb0003_cod_nucleo_regional = nuc.tb0003_cod_nucleo_regional
                      AND uni.tb0044_cod_cond_funcionamento = 1 AND nuc.tb0003_nome_nucleo_regional IN (" . $dados . ")";

        $query = $this->db_oci->prepare($sql);


        //$query = $this->db_sqlsrv->prepare($sql);
        $query->execute();
        //$retorno = $query->fetchAll(PDO::FETCH_ASSOC);
        //var_dump($query);
        return $query->fetchAll(PDO::FETCH_ASSOC);
       }catch (PDOException $e) {
           echo "Erro de Conexão " . $e->getMessage() . "\n";
           exit('Database connection could not be established.');
       }
    }

    public function selectanoturmamodel($anoturma)
    {
       try{
        $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ, PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING);
        $this->db_oci = new PDO(DB_TYPE_oracle . ':dbname=' . DB_HOST_oracle, DB_USER_oracle, DB_PASS_oracle, $options);
        $dados = '';
        $listazona = explode(',', $anoturma);
        $tam_lista = count($listazona);
        for ($i = 0; $i < $tam_lista; $i++) {
            if ($i == 0) {
                $dados .= $this->db_oci->quote($listazona[$i]);
            } else {
                $dados .= "," . $this->db_oci->quote($listazona[$i]);
            }
        }
        $data = date("Y");
        //var_dump($data);
        $sql = "SELECT tur.tb0034_ind_turma
                FROM   tb0008_unidade uni,
                       tb0034_turma tur
               WHERE  uni.tb0008_num_unidade = tur.tb0008_num_unidade
                      AND tur.tb0017_ano = '" . $data . "' AND uni.tb0008_num_unidade IN (" . $dados . ")";
        $query = $this->db_oci->prepare($sql);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
       }catch (PDOException $e) {
           echo "Erro de Conexão " . $e->getMessage() . "\n";
           exit('Database connection could not be established.');
       }
    }
    public function selectgabaritoprova($id)
    {
        try {
            $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8',PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ, PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING);
            $db = new PDO(DB_TYPE_mysql . ':host=' . DB_HOST_mysql . ';dbname=' . DB_NAME_mysql.';charset=utf8', DB_USER_mysql, DB_PASS_mysql, $options);
            $sql = " SELECT id_gabarito_prova, alternativa, num_questao
                FROM gabarito_prova where cod_avaliacao = '".$id."'";
            $query = $db->prepare($sql);
            $query->execute();
            return $query->fetchAll(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            echo "Erro de Conexão " . $e->getMessage() . "\n";
            exit('Database connection could not be established.');
        }
    }
} 