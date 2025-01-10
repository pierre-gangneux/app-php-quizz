<?php
declare(strict_types=1);

namespace Quiz;

use Input\Interface\RenderInterface;

class Form implements RenderInterface{

    private string $action;

    private string $method;

    private array $elems = [];

    public function __construct(string $action, string $method){
        $this->action = $action;
        $this->method = $method;
    }

    public function __tostring(): string{
        return $this->render();
    }

    public function add($elem){
        array_push($this->elems, $elem);
    }

    public function render(): string{
        $res = "";
        $res .= sprintf('<form action="%s" method="%s">', $this->action, $this->method)."\n";
        foreach ($this->elems as $elem){
            $res .= $elem."\n";
        }
        $res .= "<form>"."\n";
        return $res;
    }
}

// echo <<<FORM
//     <form action="cart.php" method="post">
//         Qty <input type="number" name="cart[quantity]" value="1" /> 
//         <input type="hidden" name="cart[product_id]" value="{$product['id']}" />
//         <button>Ajout</button>
//     <form>
// FORM;