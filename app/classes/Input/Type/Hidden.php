<?php
declare(strict_types=1);

namespace Input\Type;

use Input\Interface\Input;

final class Hidden extends Input {
    protected string $type = 'hidden'; 
}