<?php

namespace views;

use classes\Form\Form;

$form = new Form("?action=questions", "POST");
$form->add("<p>Voulez vous commencer le quiz ?</p>");
$button = "<button type='submit'>Oui</button>";
$form->add($button);
echo $form;