<?php
require_once '../modele/question.class.php';
require_once '../modele/question.classDAO.php';
require_once '../modele/reponse.class.php';
require_once '../modele/reponse.classDAO.php';

$questionDAO = new QuestionDAO();
$arrQuestions =  $questionDAO->getAllQuestions();
$reponseDAO = new ReponseDAO();
$arrReponses =  $reponseDAO->getAllReponses();
if (isset($_GET['categorie'])) {
    $arrQuestionCategorie = $questionDAO->getAllQuestions();
    $arrQuestionCategorie = $questionDAO->getQuestionByCategorie($_GET['categorie']);
    foreach ($arrQuestionCategorie as $key => $value) {
        $arrQUestionCategorie[] = new Questions($value);
        $ar = $reponseDAO->getReponseByQuestion($value['id_question']);
    }
    foreach($ar as $key => $value){
        $reponseCat[] = new Reponses($value);
    }
} else {
    header('location : ../Vue/index.php');
    die();
}



// die();
// foreach ($arrQuestions  as $key => $value){
//     $questions[] = new Questions($value);
// }
// foreach($questions as $key => $value){
//     echo'<h1>' . $value->getQuestion() . '</h1>';
//     echo'<h1> categorie : ' . $value->getCategorie() . '</h3>';
// }


// foreach ($arrReponses  as $key => $value){
//     $reponses[] = new Reponses($value);
// }
// foreach($reponses as $key => $value){
//     echo'<h2;>' . $value->getReponse() . '</h2>';
// }
