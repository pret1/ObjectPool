<?php

namespace SKonau\ObjectPool\Api;

interface PoolObjectInterface
{
    /**
     * Each method performs some of its own logic and returns a result
     *
     * @return string
     */
    public function execute();
}
