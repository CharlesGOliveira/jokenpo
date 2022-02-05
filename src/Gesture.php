<?php

namespace Gesture;

class Gesture{

    public string $name;
    public string $win;
    public string $loses;

    public function __construct(string $name, string $win, string $loses)
    {
        $this->name = $name;
        $this->win = $win;
        $this->loses = $loses;
    }

    public function __GET($attribute)
    {
        return $this->$attribute;
    }
}