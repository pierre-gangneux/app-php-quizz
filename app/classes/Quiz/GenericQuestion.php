<?php
declare(strict_types=1);

namespace Quiz;

use Input\Interface\RenderInterface;
use Input\Interface\Input;

abstract class GenericQuestion implements RenderInterface{

    protected Input $input;
    protected string $name;
    protected string $type;
    protected string $text;
    protected $answer;
    protected float $point;

    public function __construct(
        string $name,
        string $type, 
        string $text,
        $answer,
        float $point
    ){
        $this->name = $name;
        $this->type = $type;
        $this->text = $text;
        $this->answer = $answer;
        $this->point = $point;
    }

    public function reponse(){
        return $this->answer;
    }

}

