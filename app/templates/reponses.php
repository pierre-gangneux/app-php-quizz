<?php
declare(strict_types=1);

session_start();

include "./../load.php";

use _inc\data\Questions;
use _inc\utils\Debug;


$form = $_POST["form"];

Debug::dump($form);

$questions = $_SESSION["getQuestion"];

for ($i = 0; $i < count($form); $i++){
    echo '<h2>Question '.($i+1).'</h2>';
    $name =  $questions[$i]["name"];
    echo '<p>'.$name.'</p>';
    Debug::dump($form[$name]);
    Debug::dump($questions[$i]["answer"]);
  
    
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


