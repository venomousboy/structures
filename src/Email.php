<?php

declare(strict_types=1);

namespace Venomousboy\Structures;

final class Email extends WrappedString
{
    public function getValue()
    {
        return (string) $this;
    }

    protected function isValueValid(string $value): bool
    {
        return filter_var($value, FILTER_VALIDATE_EMAIL) !== false;
    }
}