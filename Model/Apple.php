<?php

namespace SKonau\ObjectPool\Model;

use SKonau\ObjectPool\Api\PoolObjectInterface;

class Apple implements PoolObjectInterface
{
    public function execute(): string
    {
        return 'Apple';
    }
}
