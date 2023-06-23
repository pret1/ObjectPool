<?php

namespace SKonau\ObjectPool\Model;

use SKonau\ObjectPool\Api\PoolObjectInterface;

class Chery implements PoolObjectInterface
{
    /**
     * {@inheritDoc}
     * @return string
     */
    public function execute(): string
    {
        return 'Chery ';
    }
}
