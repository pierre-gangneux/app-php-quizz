<?php
declare(strict_types=1);

namespace classes\Form;

use classes\Input\Interface\RenderInterface; 

class Form implements RenderInterface {

    private string $action;
    private string $method;
    private array $elems = [];

    public function __construct(string $action = "", string $method = ""){
        $this->action = $action;
        $this->method = $method;
    }

    public function __toString(): string {
        return $this->render();
    }

    public function add($elem): void {
        $this->elems[] = $elem; // Utilisation plus simple de tableau
    }

    public function render(): string {
        $res = sprintf('<form action="%s" method="%s">', $this->action, $this->method) . "\n";
        foreach ($this->elems as $elem) {
            $res .= $elem . "\n";
        }
        $res .= "</form>\n"; // Balise fermée correctement
        return $res;
    }
}
