<?php
class IndexModel
{
    /**
     * Every model needs a database connection, passed to the model
     * @param object $db A PDO database connection
     */
    function __construct() {
        try {
            $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ, PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING);
            $this->db = new PDO(DB_TYPE_mysql . ':host=' . DB_HOST_mysql . ';dbname=' . DB_NAME_mysql, DB_USER_mysql, DB_PASS_mysql, $options);
            //$this->db = $db;
        } catch (PDOException $e) {
            exit('Database connection could not be established.');
        }
    }

    /**
     * Get simple "stats". This is just a simple demo to show
     * how to use more than one model in a controller (see application/controller/songs.php for more)
     */
    public function getLogin($matricula)
    {
          
        $sql = "SELECT password, fullname, active FROM login WHERE matricula = '".mysql_real_escape_string($matricula)."'";
        $query = $this->db->prepare($sql);
        $query->execute();

        // fetchAll() is the PDO method that gets all result rows
        return $query->fetch(PDO::FETCH_ASSOC);
    }
    public function close()
    {
        $this->db = null; 
    }
}
?>