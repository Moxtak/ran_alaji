<?php
require_once('../controler/quizz_controler.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div>
        <?php
        echo $arrQUestionCategorie[0]->getQuestion();

        echo '<br>';

        // $arrReponses =  $reponseDAO->getAllReponses();
        foreach ($reponseCat as $key => $value) {?>
            <input type="radio"><?php echo $value->getReponse();
        }
        ?>
    </div>
</body>

</html>