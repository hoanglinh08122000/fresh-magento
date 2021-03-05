<?php

namespace Dtn\Api\Api;

use Dtn\Api\Api\Data\ProductInterface;
use Magento\Framework\Exception\NoSuchEntityException;

interface ProductRepositoryInterface
{
    /**
     * @param $id
     * @return ProductInterface
     * @throws NoSuchEntityException
     */
    public function getProductByID($id);

}
