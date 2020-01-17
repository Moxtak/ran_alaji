<?php
require_once"../db/db_connect.php";

class QuestionDAO extends DbConnect{
     public function __construct()
     {
         parent::connect();
     }
     public function getAllQuestions(){
         $sql = "SELECT * from questions";
         $results = parent::executeQuery($sql);
         return $results->fetchAll();
     }
}
