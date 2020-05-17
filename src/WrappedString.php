<?php

declare(strict_types=1);

namespace Venomousboy\Structures;

abstract class WrappedString
{
    /** @var string */
    private $value;

    final public function __construct(string $value)
    {
        if (!$this->isValueValid($value)) {
            throw new \InvalidArgumentException('String value is invalid.');
        }

        $this->value = $value;
    }

    abstract protected function isValueValid(string $value): bool;

    final public function __toString()
    {
        return $this->value;
    }
}