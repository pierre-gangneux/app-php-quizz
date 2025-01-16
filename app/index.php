<?php
declare(strict_types=1);

include "load.php";


use classes\Form\Form;
use classes\Input\Type\Checkbox;
use classes\Quiz\Question\TextQuestion;
use _inc\data\Questions;
use _inc\utils\Debug;

$form = new Form();

//$question = new TextQuestion("ultime", "text", "Quelle est la réponse ultime?", "42", 1);
//
//$form->add($question);


$questions = Questions::getQuestions();
#Debug::dump($questions);


foreach ($questions as $question) {
    // Traitez chaque question
    $type = $question['type'];
    if ($type == 'text') {
        $form->add(new TextQuestion($question['name'], $question['type'], $question['text'], $question['answer'], $question['score']));
    }
    //elseif ($type == 'radio') {
    //    $form->add(new RadioQuestion($question["name"], $question['type'], $question["text"], $question["choices"], $question["answer"], $question["score"]));
    //}
    //elseif ($type == "checkbox") {
    //    $form->add(new CheckboxQuestion($question["name"], $question['type'], $question["text"], $question["choices"], $question["answer"], $question["score"]));
    //}
    
}

$button = "<button type='submit'>Valider</button>";
$form->add($button);
echo $form->render();




    // array(
    //     "name" => "ultime",
    //     "type" => "text",
    //     "text" => "Quelle est la réponse ultime?",
    //     "answer" => "42",
    //     "score" => 1
    // )