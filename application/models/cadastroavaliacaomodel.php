<?php

class CadastroavaliacaoModel
{
    /**
     * Every model needs a database connection, passed to the model
     * @param object $db A PDO database connection
     */
    function __construct()
    {
        try {
            $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ, PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING);
            //$this->db = new PDO(DB_TYPE_mysql . ':host=' . DB_HOST_mysql . ';dbname=' . DB_NAME_mysql, DB_USER_mysql, DB_PASS_mysql, $options);
            $this->db_oci = new PDO(DB_TYPE_oracle .':dbname='. DB_HOST_oracle, DB_USER_oracle, DB_PASS_oracle, $options);
            //$this->db = $db;
        } catch (PDOException $e) {
            echo "Erro de Conexão " . $e->getMessage() . "\n";
            exit('Database connection could not be established.');
        }
    }

    /**
     * Get simple "stats". This is just a simple demo to show
     * how to use more than one model in a controller (see application/controller/songs.php for more)
     */
    public function selectzonamodel($zona)
    {

       // print_r($this->db_oci->quote($zona));
        $dados='';
        $listazona = explode(',', $zona);
        $tam_lista = count($listazona);
        for ($i = 0; $i < $tam_lista; $i++) {
            if($i==0){
                $dados .= $this->db_oci->quote($listazona[$i]);
            }else{
                $dados .= ",".$this->db_oci->quote($listazona[$i]);
            }
        }
        // print_r($this->db_oci->quote($zona));
        $sql = "SELECT uni.tb0008_nome_unidade,
                       uni.tb0008_num_unidade
                FROM   tb0008_unidade uni,
                       tb0003_nucleo_regional nuc
               WHERE  uni.tb0003_cod_nucleo_regional = nuc.tb0003_cod_nucleo_regional
                      AND uni.tb0044_cod_cond_funcionamento = 1 AND nuc.tb0003_nome_nucleo_regional IN (".$dados.")";

        $query = $this->db_oci->prepare($sql);


        //$query = $this->db_sqlsrv->prepare($sql);
        $query->execute();
        //$retorno = $query->fetchAll(PDO::FETCH_ASSOC);
            //var_dump($query);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public function selectanoturmamodel($anoturma)
    {
        $dados='';
        $listazona = explode(',', $anoturma);
        $tam_lista = count($listazona);
        for ($i = 0; $i < $tam_lista; $i++) {
            if($i==0){
                $dados .= $this->db_oci->quote($listazona[$i]);
            }else{
                $dados .= ",".$this->db_oci->quote($listazona[$i]);
            }
        }
        $data = date("Y");
        //var_dump($data);
        $sql = "SELECT tur.tb0034_ind_turma
                FROM   tb0008_unidade uni,
                       tb0034_turma tur
               WHERE  uni.tb0008_num_unidade = tur.tb0008_num_unidade
                      AND tur.tb0017_ano = '".$data."' AND tur.tb0034_ind_turma like '1%' AND uni.tb0008_num_unidade IN (".$dados.")";
        $query = $this->db_oci->prepare($sql);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
}
