<?php
declare(strict_types=1);

namespace classes\Quiz\Question;

use classes\Quiz\GenericQuestion;
use classes\Input\Type\Checkbox;

final class CheckboxQuestion extends GenericQuestion{

    private array $choices;

    public function __construct(string $name, string $type, string $text, $answer, float $point, array $choices){
        parent::__construct($name, $type, $text, $answer, $point);
        $this->choices = $choices;
    }

    public function render(): string{
        $intitule = sprintf('<fieldset><legend>%s</legend>', $this->text);
        $checkbox = "";
        foreach ($this->choices as $choice){
            $checkbox .= "<div>".new Checkbox($this->name, false, $choice["value"]).sprintf('<label for='.$choice["value"].'>%s</label>', $choice["text"])."</div>\n";

        }
        return $intitule."\n".$checkbox."</fieldset>\n";
    }

    public function __tostring(): string{
        return $this->render();
    }
}
