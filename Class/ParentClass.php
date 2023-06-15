<?php

namespace Class;

class ParentClass
{
    protected static string $name = "ParentClass";

    public static function getName(): string
    {
        return static::$name;
    }

    public function factory(): static
    {
        return new static;
    }
}
