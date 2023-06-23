<?php

namespace SKonau\ObjectPool\Controller\Index;

use Magento\Framework\App\Action\HttpGetActionInterface;
use SKonau\ObjectPool\Model\PoolObject;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\Controller\ResultInterface;

class Index implements HttpGetActionInterface
{
    protected $objectPool;

    public function __construct(
        PoolObject $objectPool,
        ResultFactory $resultFactory
    ) {
        $this->objectPool = $objectPool;
        $this->resultFactory = $resultFactory;
    }

    public function execute(): ResultInterface
    {
        $objects = $this->objectPool->getPoolObjects();

        $resultObjects = [];
        foreach ($objects as $object) {
            $resultObjects[] = $object->execute();
        }

        $result = $this->resultFactory->create(ResultFactory::TYPE_RAW);
        $result->setContents(implode($resultObjects));

        return $result;
    }
}
