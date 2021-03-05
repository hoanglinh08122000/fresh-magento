<?php

namespace Dtn\Api\Api\Data;

interface ProductInterface
{
    /**
     * @return int
     */
    public function getId();

    /**
     * @param0 $id
     * @return $this
     */
    public function setId($id);

    /**
     * @return string
     */
    public function getSku();

    /**
     * @param $sku
     * @return $this
     */
    public function setSku($sku);

    /**
     * @return string
     */
    public function getName();

    /**
     * @param $name
     * @return $this
     */
    public function setName($name);

    /**
     * @return string
     */
    public function getDescription();

    /**
     * @param $description
     * @return $this
     */
    public function setDescription($description);

    /**
     * @return string
     */
    public function getPrice();

    /**
     * @param $price
     * @return $this
     */
    public function setPrice($price);

    /**
     * @return string[]
     */
    public function getImages();

    /**
     * @param $productImageArray
     * @return $this
     */
    public function setImages($productImageArray);
}
