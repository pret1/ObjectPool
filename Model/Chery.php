<?php

namespace SKonau\ObjectPool\Model;

use SKonau\ObjectPool\Api\PoolObjectInterface;

class Chery implements PoolObjectInterface
{
    public function execute(): string
    {
        return 'Chery ';
    }
}
