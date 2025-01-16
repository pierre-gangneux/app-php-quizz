<?php
declare(strict_types=1);

namespace Input\Type;

use Input\Interface\Input;

final class Radio extends Input {
    protected string $type = 'radio'; 
}