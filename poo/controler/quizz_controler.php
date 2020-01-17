<?php
require_once '../modele/question.class.php';
require_once '../modele/question.classDAO.php';

$questionDAO = new QuestionDAO();
// $a = $questionDAO->getAllQuestions();

// var_dump($a);
$arrQuestions =  $questionDAO->getAllQuestions();

foreach ($arrQuestions  as $key => $value){
    $questions[] = new Questions($value);
}


foreach($questions as $key => $value){
    echo'<h1>' . $value->getQuestion() . '</h1>';
    echo'<h1> categorie : ' . $value->getCategorie() . '</h3>';
}
// var_dump($questions);
