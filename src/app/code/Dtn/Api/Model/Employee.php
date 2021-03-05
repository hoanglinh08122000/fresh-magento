<?php

namespace Dtn\Api\Model;

class Employee extends \Magento\Framework\Model\AbstractModel
{
    public function _construct()
    {
        $this-> _init(\Dtn\Api\Model\ResourceModel\Employee::class);
    }
}
