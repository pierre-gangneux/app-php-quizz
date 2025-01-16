<?php
declare(strict_types=1);

namespace Quiz\Question;

use Quiz\GenericQuestion;
use Input\Type\Checkbox;

final class CheckboxQuestion extends GenericQuestion{

    private array $choices;

    public function __construct(string $name, string $type, string $text, $answer, float $point, array $choices){
        parent::__construct($name, $type, $text, $answer, $point);
        $this->choices = $choices;
    }

    public function render(): string{
        $intitule = sprintf('<p>%s</p>', $this->text);
        $checkbox = '<div>'."\n";
        foreach ($this->choices as $choice){
            $checkbox .= new Checkbox($choice["value"]).sprintf('<label for='.$choice["value"].'>%s</label>', $choice["text"])."\n";
        }
        $checkbox .= '</div>'."\n";
        return $intitule."\n".$checkbox."\n";
    }

    public function __tostring(): string{
        return $this->render();
    }
}
