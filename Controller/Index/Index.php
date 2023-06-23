<?php

namespace SKonau\ObjectPool\Controller\Index;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\Controller\ResultInterface;

class Index implements HttpGetActionInterface
{
    private $resultFactory;

    public function __construct(ResultFactory $resultFactory)
    {
        $this->resultFactory = $resultFactory;
    }

    public function execute(): ResultInterface
    {
        $a = 1;
        $result = $this->resultFactory->create(ResultFactory::TYPE_RAW);
        $result->setContents("$a");
        return $result;
    }
}
