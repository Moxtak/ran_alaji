<?php
require_once "../db/db_connect.php";

class ReponseDAO extends DbConnect
{
    public function __construct()
    {
        parent::connect();
    }
    public function getAllReponses()
    {
        $sql = "SELECT * from reponses";
        $results = parent::executeQuery($sql);
        return $results->fetchAll();
    }
    public function getReponseByQuestion($id)
    {
        $sql = "SELECT * FROM reponses WHERE idquestion = :idq";
        $param = array(
            "idq" => $id
        );
        $results = parent::executeQuery($sql, $param);
        return $results->fetchAll();
    }
}
