<?php

declare(strict_types=1);

namespace Venomousboy\Structures;

final class Ip extends WrappedString
{
    public function getValue()
    {
        return (string) $this;
    }

    protected function isValueValid(string $value): bool
    {
        return filter_var($value, FILTER_VALIDATE_IP) !== false;
    }
}