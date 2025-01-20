<?php
declare(strict_types=1);

session_start();

include "load.php";

use controleurs\HomeControleur;
use controleurs\QuestionControleur;
use controleurs\ReponseControleur;


use classes\Form\Form;
use classes\Quiz\Question\TextQuestion;
use classes\Quiz\Question\CheckboxQuestion;
use classes\Quiz\Question\RadioQuestion;
use classes\Quiz\GenericQuestion;
use _inc\data\Questions;
use _inc\utils\Debug;




$form = new Form('templates/reponses.php', "POST");

$action = isset($_GET['action']) ? $_GET['action'] : 'home';


switch ($action){
    case "home":
        $controller = new HomeControleur();
        $controller->view();
        break;


    case "questions":
        $controller = new QuestionControleur();
        $controller->view();
        break;

    case "reponses":
        $controller = new ReponseControleur();
        $controller->view();
        break;
    
    default:
        header('Location: ?action=home');
        break;
    
    }




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



    


