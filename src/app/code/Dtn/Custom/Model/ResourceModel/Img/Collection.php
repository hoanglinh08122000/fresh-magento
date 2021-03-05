<?php

namespace Dtn\Custom\Model\ResourceModel\Img;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected function _construct()
    {
        $this->_init(
            'Dtn\Custom\Model\Img',
            'Dtn\Custom\Model\ResourceModel\Img'
        );
    }
}
