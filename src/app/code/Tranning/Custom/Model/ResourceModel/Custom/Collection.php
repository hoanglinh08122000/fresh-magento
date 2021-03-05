<?php


namespace Tranning\Custom\Model\ResourceModel\Custom;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected $_idFieldName = 'custom_id';
    /**
     * Define model & resource model
     */
    protected function _construct()
    {
        $this->_init(
            'Tranning\Custom\Model\Custom',
            'Tranning\Custom\Model\ResourceModel\Custom'
        );
    }
}
