<?php

namespace Tranning\Custom\Model\ResourceModel;

class Custom extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * Define main table
     */
    protected function _construct()
    {
        $this->_init('tranning_custom', 'custom_id');
    }
}
