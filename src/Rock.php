<?php

namespace Gesture;

use Gesture\Gesture;

class Rock extends Gesture{

    public function __construct()
    {
        return parent::__construct(
            'Pedra',
            'Tesoura',
            'Papel'
        );
    }

}