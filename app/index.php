<?php
declare(strict_types=1);


include "load.php";

use controleurs\HomeControleur;
use controleurs\QuestionControleur;
use controleurs\ReponseControleur;
use controleurs\BdControleur;


include "templates/head.php";


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

    case "bd":
        $controller = new BdControleur();
        $controller->view();
        break;
    
    default:
        header('Location: /');
        break;
    
    }


