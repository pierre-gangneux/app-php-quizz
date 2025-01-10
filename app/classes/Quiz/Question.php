<?php
declare(strict_types=1);

namespace Quiz;

class Question implements RenderInterface{
    private string $name;
    private string $type;
    private string $text;
    private string $answer;
    private float $point;

    // array(
    //     "name" => "ultime",
    //     "type" => "text",
    //     "text" => "Quelle est la réponse ultime?",
    //     "answer" => "42",
    //     "score" => 1
    // )

    public function __construct(
        string $name,
        string $type, 
        string $text,
        string $answer,
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