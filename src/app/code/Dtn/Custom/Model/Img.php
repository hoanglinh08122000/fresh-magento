<?php

namespace Dtn\Custom\Model;

class Img extends \Magento\Framework\Model\AbstractModel
{
    public function _construct()
    {
        $this-> _init(\Dtn\Custom\Model\ResourceModel\Img::class);
    }
}
