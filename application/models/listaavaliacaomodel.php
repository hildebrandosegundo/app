<?php
/**
 * Created by PhpStorm.
 * User: Avell B154 PLUS
 * Date: 18/06/14
 * Time: 11:27
 */

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
} 