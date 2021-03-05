<?php

namespace Dtn\Api\Model\ResourceModel\Employee;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected function _construct()
    {
        $this->_init(
            'Dtn\Api\Model\Employee',
            'Dtn\Api\Model\ResourceModel\Employee'
        );
    }
}
