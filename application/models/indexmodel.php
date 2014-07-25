<?php
class IndexModel
{
    /**
     * Every model needs a database connection, passed to the model
     * @param object $db A PDO database connection
     */
    function __construct() {
        /*try {
            $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ, PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING);
            $this->db = new PDO(DB_TYPE_mysql . ':host=' . DB_HOST_mysql . ';dbname=' . DB_NAME_mysql, DB_USER_mysql, DB_PASS_mysql, $options);
            //$this->db = $db;
        } catch (PDOException $e) {
            exit('Database connection could not be established.');
        }*/
    }

    /**
     * Get simple "stats". This is just a simple demo to show
     * how to use more than one model in a controller (see application/controller/songs.php for more)
     */
    public function getLogin($matricula)
    {
        try {
            $this->db_sqlsrv = new PDO(DB_TYPE_sqlsrv .':Server='. DB_HOST_sqlsrv . ';Database=' . DB_NAME_sqlsrv, DB_USER_sqlsrv, DB_PASS_sqlsrv);

            $sql = "SELECT ser.CPF as CPF, atu.Escola as lotacao, ser.Nome as nome, atu.Atividade as Atividade, ser.Situação as situacao, atu.Situação_Atuação as situacao_atua FROM RH.V_SERVIDORES_SEMEC as ser, RH.V_SERVIDORES_SEMEC_ATUA as atu WHERE ser.Matrícula = ".$this->db_sqlsrv->quote($matricula)." and ser.Matrícula = atu.Matrícula";
            $query = $this->db_sqlsrv->prepare($sql);
            $query->execute();
            return $query->fetch(PDO::FETCH_ASSOC);
           //
        } catch (PDOException $e) {
            echo "Erro de Conexão " . $e->getMessage() . "\n";
            exit('Database connection could not be established.');
        }
    }
    public function close()
    {
        $this->db = null; 
    }
}
?>