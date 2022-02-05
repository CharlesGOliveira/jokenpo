<?php

namespace Gesture;

use Gesture\Gesture;

class Paper extends Gesture{

    public function __construct()
    {
        return parent::__construct(
            'Papel',
            'Pedra',
            'Tesoura'
        );
    }
}