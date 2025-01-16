<?php
declare(strict_types=1);

include "load.php";


use classes\Form\Form;
use classes\Quiz\Question\TextQuestion;
use classes\Quiz\Question\CheckboxQuestion;
use classes\Quiz\Question\RadioQuestion;
use _inc\data\Questions;
use _inc\utils\Debug;


$form = new Form('templates/reponses.php', "POST");




$questions = Questions::getQuestions();


foreach ($questions as $question) {
    // Traitez chaque question
    $type = $question['type'];
    if ($type == 'text') {
        $form->add(new TextQuestion($question['name'], $question['type'], $question['text'], $question['answer'], $question['score']));
    }
    elseif ($type == 'radio') {
        $form->add(new RadioQuestion($question["name"], $question['type'], $question["text"], $question["answer"], $question["score"], $question["choices"]));
    }
    elseif ($type == "checkbox") {
        $form->add(new CheckboxQuestion($question["name"], $question['type'], $question["text"], $question["answer"], $question["score"], $question["choices"]));
    }
    
}

$button = "<button type='submit'>Valider</button>";
$form->add($button);
echo $form->render();

