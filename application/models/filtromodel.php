<?php

class FiltroModel
{
    /**
     * Every model needs a database connection, passed to the model
     * @param object $db A PDO database connection
     */
    function __construct()
    {
        try {
            $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ, PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING);
            $this->db = new PDO(DB_TYPE_mysql . ':host=' . DB_HOST_mysql . ';dbname=' . DB_NAME_mysql, DB_USER_mysql, DB_PASS_mysql, $options);
            //$this->db_sqlsrv = new PDO(DB_TYPE_sqlsrv .':Server='. DB_HOST_sqlsrv . ';Database=' . DB_NAME_sqlsrv, DB_USER_sqlsrv, DB_PASS_sqlsrv, $options);
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
    public function selectpzona($zona)
    {
        $sql = "SELECT nome FROM escolas WHERE zona LIKE IN ('" . $zona . "')";
        $query = $this->db->prepare($sql);
        //$query = $this->db_sqlsrv->prepare($sql);
        $query->execute();
        return $query->fetchall(PDO::FETCH_ASSOC);
    }

    public function cadastrar($crypt_pass, $newmatricula, $newcpf, $newfullname, $newop, $code)
    {
        if($newop=='1'){
            $active = 0;
        }
        else{
            $active = 1;
        }
        $sql = "INSERT login(matricula, password, fullname, cpf, active, code, op) VALUES ('" . $newmatricula . "', '" . $crypt_pass . "', '" . $newfullname . "', '" . $newcpf . "', '" . $active . "', '" . $code . "', '" . $newop . "')";
        $query = $this->db->prepare($sql);
        $query->execute();
    }

    public function close()
    {
        $this->db = null;
    }

}


?>