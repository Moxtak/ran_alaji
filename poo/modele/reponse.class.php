<?php
require_once "hydrate.class.php";
class Reponses extends Entity
{
    public $id;
    public $reponse;
    public $idquestion;
    public $justefaux;

    function __construct($data){
        parent::hydrate($data);
    }
    public function getId(){
        return $this->id;
    }
    public function setId($n){
        return $this->id = $n;
    }
    public function getReponse(){
        return $this->reponse;
    }
    public function setReponse($n){
        $this->reponse = $n;
    }
    public function getIdQuestion(){
        return $this->idquestion;
    }
    public function setIdQuestion($n){
        return $this->idquestion = $n;
    }
    public function getJustefaux(){
        return $this->justefaux;
    }
    public function setJustefaux($n){
        return $this->justefaux = $n;
    }

}