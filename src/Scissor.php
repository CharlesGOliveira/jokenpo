<?php

namespace Gesture;

use Gesture\Gesture;

class Scissor extends Gesture{

    public function __construct()
    {
        return parent::__construct(
            'Tesoura',
            'Papel',
            'Pedra'
        );
    }
}