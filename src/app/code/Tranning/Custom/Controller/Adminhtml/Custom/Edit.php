<?php

namespace Tranning\Custom\Controller\Adminhtml\Custom;

use Magento\Framework\View\Result\PageFactory;
use Magento\Backend\App\Action;

class Edit extends \Magento\Backend\App\Action
{
    /**
     * @var PageFactory
     */
    protected $_pageFactory;

    /**
     * Index constructor.
     * @param Action\Context $context
     * @param PageFactory $pageFactory
     */
    public function __construct(Action\Context $context, PageFactory $pageFactory)
    {
        $this->_pageFactory = $pageFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        $resultPage = $this->_pageFactory->create();
        $resultPage->setActiveMenu('Tranning_Custom::main_menu');
        $resultPage->getConfig()->getTitle()->prepend(__('Img Girl'));
        return $resultPage;
    }
}
