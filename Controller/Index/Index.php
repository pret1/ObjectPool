<?php

namespace SKonau\ObjectPool\Controller\Index;

use Magento\Framework\App\Action\HttpGetActionInterface;
use SKonau\ObjectPool\Model\PoolObject;

class Index implements HttpGetActionInterface
{
    protected $objectPool;

    public function __construct(
        PoolObject $objectPool
    ) {
        $this->objectPool = $objectPool;
    }

    public function execute()
    {
        $objects = $this->objectPool->getPoolObjects();

        foreach ($objects as $object) {
            echo $object->execute();
        }
    }
}
