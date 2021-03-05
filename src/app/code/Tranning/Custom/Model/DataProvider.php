<?php

namespace Tranning\Custom\Model;

use Magento\Store\Model\StoreManagerInterface;

class DataProvider extends \Magento\Ui\DataProvider\AbstractDataProvider
{


    public function getData()
    {

        $items = $this->collection->getItems();

        //Replace icon with fileuploader field name
        foreach ($items as $model) {
            $this->loadedData[$model->getId()] = $model->getData();
            if ($model->getIcon()) {
                $m['icon'][0]['name'] = $model->getIcon();
                $m['icon'][0]['url'] = $this->getMediaUrl().$model->getIcon();
                $fullData = $this->loadedData;
                $this->loadedData[$model->getId()] = array_merge($fullData[$model->getId()], $m);
            }
        }


        return $this->loadedData;
    }

    /**
     * @return string
     */
    public function getMediaUrl()
    {
        return $this->storeManager->getStore()
                ->getBaseUrl(\Magento\Framework\UrlInterface::URL_TYPE_MEDIA).'faq/tmp/icon/';
    }
}
