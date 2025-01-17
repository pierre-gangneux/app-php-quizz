<?php
declare(strict_types=1);

include "load.php";

use controleurs\HomeControleur;
use controleurs\QuestionControleur;
use controleurs\ReponseControleur;

$action = isset($_GET['action']) ? $_GET['action'] : 'home';

echo "La page actuelle est : ".$action."\n";

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
        echo "RIEN";
        break;

}

