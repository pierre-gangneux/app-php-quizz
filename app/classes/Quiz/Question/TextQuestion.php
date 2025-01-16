<?php
declare(strict_types=1);


namespace classes\Quiz\Question;

use classes\Quiz\GenericQuestion;
use classes\Input\Type\Text;

final class TextQuestion extends GenericQuestion{

    protected Text $input;

    public function __construct(string $name, string $type, string $text, $answer, float $point){
        parent::__construct($name, $type, $text, $answer, $point);
        $this->input = new Text($name);
    }

    public function render(): string{
        return sprintf('<p>%s</p>', $this->text)."\n".$this->input."\n";
    }

    public function __tostring(){
        return $this->render();
    }
}