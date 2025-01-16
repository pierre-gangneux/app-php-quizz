<?php
declare(strict_types=1);

include "load.php";

use Form\Form;
use Input\Type\Checkbox;
use Quiz\Question\TextQuestion;
use Quiz\Question\CheckboxQuestion;
use Quiz\Question\RadioQuestion;

$form = new Form();

$question1 = new TextQuestion("ultime", "text", "Quelle est la réponse ultime?", "42", 1);

$question2 = new CheckboxQuestion("drapeau", "checkbox", "Quelles sont les couleurs du drapeau français?", ["bleu", "blanc", "rouge"], 3,
[array("text" => "Bleu", "value" => "bleu"), array("text" => "Blanc", "value" => "blanc"), array("text" => "Vert", "value" => "vert"), array("text" => "Jaune", "value" => "jaune"), array("text" => "Rouge", "value" => "rouge")]);

$question3 = new RadioQuestion("cheval", "radio", "Quelle est la couleur du cheval blanc d'Henri IV?", "blanc", 2,
[array("text" => "Bleu", "value" => "bleu"),array("text" => "Blanc", "value" => "blanc"),array("text" => "Rouge", "value" => "rouge")]);


$form->add($question1);
$form->add($question2);
$form->add($question3);

echo $form->render();
