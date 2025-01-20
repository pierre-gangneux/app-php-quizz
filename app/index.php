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


