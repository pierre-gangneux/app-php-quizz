<?php
declare(strict_types=1);

include "load.php";

use classes\Form\Form;
use classes\Quiz\Question\TextQuestion;
use _inc\data\question\getQuestions;

$form = new Form();

$question = new TextQuestion("ultime", "text", "Quelle est la réponse ultime?", "42", 1);

$form->add($question);

echo $form->render();
echo getQuestions();

    // array(
    //     "name" => "ultime",
    //     "type" => "text",
    //     "text" => "Quelle est la réponse ultime?",
    //     "answer" => "42",
    //     "score" => 1
    // )