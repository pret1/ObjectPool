<?php

namespace SKonau\ObjectPool\Model;

use SKonau\ObjectPool\Api\PoolObjectInterface;

class PoolObject
{
    protected $objects;

    public function __construct(
        $objects = []
    ) {
        $this->objects = $objects;
    }

    /**
     * Check instanceof incoming object and return them
     *
     * @return array
     */
    public function getPoolObjects(): array
    {
        $validObjects = [];
        foreach ($this->objects as $object) {
            if ($object instanceof PoolObjectInterface) {
                $validObjects[] = $object;
            }
        }
        return $validObjects;
    }
}
