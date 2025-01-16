<?php
declare(strict_types=1);

namespace classes\Quiz\Question;

use classes\Quiz\GenericQuestion;
use classes\Input\Type\Radio;

final class RadioQuestion extends GenericQuestion{

    private array $choices;

    public function __construct(string $name, string $type, string $text, $answer, float $point, array $choices){
        parent::__construct($name, $type, $text, $answer, $point);
        $this->choices = $choices;
    }

    public function render(): string{
        $intitule = sprintf('<p>%s</p>', $this->text);
        $radio = '<div>'."\n";
        foreach ($this->choices as $choice){
            $radio .= new Radio($this->name, false, $defaultValue = $choice["value"]).sprintf('<label for='.$choice["value"].'>%s</label>', $choice["text"])."\n";
        }
        $radio .= '</div>'."\n";
        return $intitule."\n".$radio."\n";
    }

    public function __tostring(): string{
        return $this->render();
    }
}
