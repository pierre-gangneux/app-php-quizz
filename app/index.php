<?php
declare(strict_types=1);

session_start();

include "load.php";


use classes\Form\Form;
use classes\Quiz\Question\TextQuestion;
use classes\Quiz\Question\CheckboxQuestion;
use classes\Quiz\Question\RadioQuestion;
use classes\Quiz\GenericQuestion;
use _inc\data\Questions;
use _inc\utils\Debug;




$form = new Form('templates/reponses.php', "POST");




$questions = Questions::getQuestions();



foreach ($questions as $question) {
    // Traitez chaque question
    $type = $question['type'];
    if ($type == 'text') {
        $objet = new TextQuestion($question['name'], $question['type'], $question['text'], $question['answer'], $question['score']);
        $form->add($objet);
        
    }
    elseif ($type == 'radio') {
        $objet = new RadioQuestion($question["name"], $question['type'], $question["text"], $question["answer"], $question["score"], $question["choices"]);
        $form->add($objet);
        
    }
    elseif ($type == "checkbox") {
        $objet = new CheckboxQuestion($question["name"], $question['type'], $question["text"], $question["answer"], $question["score"], $question["choices"]);
        $form->add($objet);
        
    }
    
    
}

 

$button = "<button type='submit'>Valider</button>";
$form->add($button);
$_SESSION["getQuestion"] = $questions;

echo $form->render();


