<?php

declare(strict_types=1);

namespace Venomousboy\Structures;

final class PhoneNumber extends WrappedString
{
    public function getValue()
    {
        return (string) $this;
    }

    protected function isValueValid(string $value): bool
    {
        if ($value[0] === '+') {
            $value = str_replace('+', '', $value);
        }

        return preg_match('/^[\d]{10,64}$/', $value) === 1;
    }

    public function equals(PhoneNumber $phoneNumber): bool
    {
        return (string)$this === (string)$phoneNumber;
    }
}