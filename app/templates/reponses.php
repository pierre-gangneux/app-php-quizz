<?php
declare(strict_types=1);

namespace templates;
session_start();

include "./../load.php";

use _inc\data\Questions;
use _inc\utils\Debug;
use classes\Form\Form; 

// if ($_SESSION["form"] === null){
//     $_SESSION["form"] = $_POST["form"];
// }

// $form = $_SESSION["form"];

echo '<div>';


function verif_array(array $reponse, array $reponse_joueur): bool
{
    if (sizeof($reponse) === sizeof($reponse_joueur)){
        $diff = array_diff($reponse, $reponse_joueur);
        if(sizeof($diff) === 0){
            return true;
        }
    }
    return false;
}

function render_reponse($form, $question, $score) : int     
{
    $name = $question["name"];
    if($form[$name] === $question["answer"]){
        echo '<p>bonne réponse</p>';
        $score += $question["score"];
    }
    else{
        echo '<p>mauvaise réponse</p>';
        echo '<p>votre réponse : '.$form[$name].'</p>';
        echo '<p>bonne réponse :'.$question["answer"].'</p>';
    }
    return $score;
    
}


function render_reponse_array($form, $question, $score):int
{
    $name = $question["name"];
    if(verif_array($form[$name], $question["answer"])){
            echo '<p>bonne réponse</p>';
            $score += $question["score"];
        }
    else{
        echo '<p>mauvaise réponse</p>';
        echo '<p>votre réponse : ';
        foreach($form[$name] as $repJoueur){
            echo $repJoueur;
        };
        echo '<p>bonne réponse :';
    }
    foreach($question["answer"] as $rep){
        echo $rep;
    };
    return $score;
}



$form = $_POST["form"];

$formS = $_SESSION["form"];


$questions = $_SESSION["getQuestion"];

$score = 0;
$total_score = 0;


for ($i = 0; $i < count($questions); $i++){
    echo '<h2>Question '.($i+1).' - '.$questions[$i]["score"].'points'.'</h2>';
    $name =  $questions[$i]["name"];
    echo '<p>'.$name.'</p>';
    
    $question = $questions[$i];

    if (!is_array($questions[$i]["answer"])) {
        $score = render_reponse($form, $question, $score);
    }

    else{
        $score = render_reponse_array($form, $question, $score);
    }
        
    $total_score += $questions[$i]["score"];
}

$affiche_score = '<p> Votre score est de '.$score.'/'.$total_score.'</p>';
echo $affiche_score;


$form = new Form('?action=home', "POST");
$button_home = "<button type='submit'>Retour au menu</button>";
$form->add($button_home);
echo $form->render();

