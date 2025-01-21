<?php

namespace templates;
session_start();
unset($_SESSION["nom"]);

use classes\Form\Form;
use classes\Input\Type\Text;

$form = new Form("?action=bd", "POST");
$input_nom = new Text("nom");
$div = '<div><p>Entrer votre nom</p>'.$input_nom.'</div>';
$form->add($div);
$form->add("<p>Voulez vous commencer le quiz ?</p>");
$button = "<button type='submit'>Oui</button>";
$form->add($button);
echo $form;