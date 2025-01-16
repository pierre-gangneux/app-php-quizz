<?php
declare(strict_types=1);

namespace classes\Input\Type;

use classes\Input\Interface\Input;

final class Hidden extends Input {
    protected string $type = 'hidden'; 
}