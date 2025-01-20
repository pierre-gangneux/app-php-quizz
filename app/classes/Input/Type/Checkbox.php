<?php
declare(strict_types=1);

namespace classes\Input\Type;

use classes\Input\Interface\Input;

final class Checkbox extends Input {
    protected string $type = 'checkbox'; 

    public function render(): string
    {
        return sprintf(
            '<input type="%s" %s value="%s" name="form[%s][]" id="%s"/>',
            $this->type,
            $this->isRequired() ? 'required="required"' : '',
            $this->getValue(),
            $this->getName(),
            $this->getId()
        );
    }
}