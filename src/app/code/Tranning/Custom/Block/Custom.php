<?php

namespace Tranning\Custom\Block;

/**
 * Custom content block
 */
class Custom extends \Magento\Framework\View\Element\Template
{
    /**
     * @var \Tranning\Custom\Model\ResourceModel\Custom\CollectionFactory
     */
    protected $custom;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Tranning\Custom\Model\ResourceModel\Custom\CollectionFactory $cusomFactory
    ) {
        parent::__construct($context);
        $this->custom = $cusomFactory;
    }

    public function _prepareLayout()
    {
        $this->pageConfig->getTitle()->set(__('Tranning Custom Module'));

        return parent::_prepareLayout();
    }

    public function urlFrom(){
        return '/custom/index/form';
    }

    public function getCustom(){
        return $this->custom->create();
    }
}
