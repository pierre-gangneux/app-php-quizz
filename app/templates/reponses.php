<?php
declare(strict_types=1);

namespace templates;
session_start();

include "./../load.php";

use _inc\data\Questions;
use _inc\utils\Debug;

function verif_array(array $reponse, array $reponse_joueur): bool
{
    if (sizeof($reponse) === sizeof($reponse_joueur)){
        $diff = array_diff($reponse, $reponse_joueur);
        print_r($diff);
        if(sizeof($diff) === 0){
            return true;
        }
    }
    return false;
}


$form = $_POST["form"];


Debug::dump($form);

$questions = $_SESSION["getQuestion"];



for ($i = 0; $i < count($form); $i++){
    echo '<h2>Question '.($i+1).'</h2>';
    $name =  $questions[$i]["name"];
    echo '<p>'.$name.'</p>';
    Debug::dump($form[$name]);
    Debug::dump($questions[$i]["answer"]);
  
    if (!is_array($questions[$i]["answer"])) {
        if($form[$name] === $questions[$i]["answer"]){
            echo '<p>bonne réponse</p>';
            echo $questions[$i]["answer"];
        }
        else{
            echo '<p>mauvaise réponse</p>';
            echo '<p>votre réponse : '.$form[$name].'</p>';
            echo '<p>bonne réponse :'.$questions[$i]["answer"].'</p>';
        }
    }

    else{
        $diff = array_diff($form[$name], $questions[$i]["answer"]);
        print_r($diff);
        if(verif_array($form[$name], $questions[$i]["answer"])){
            echo '<p>bonne réponse</p>';
        }
        else{
            echo '<p>mauvaise réponse</p>';
            echo '<p>votre réponse : ';
            foreach($form[$name] as $repJoueur){
                echo $repJoueur;
            };
            echo '<p>bonne réponse :';
        }
        foreach($questions[$i]["answer"] as $rep){
            echo $rep;
        };
        }
}



