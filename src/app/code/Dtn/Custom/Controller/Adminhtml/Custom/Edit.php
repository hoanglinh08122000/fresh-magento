<?php

namespace Dtn\Custom\Controller\Adminhtml\Custom;

use Dtn\Custom\Model\ImgFactory;
use Magento\Backend\App\Action\Context;
use Magento\Framework\Registry;
use Magento\Framework\View\Result\PageFactory;

class Edit extends \Magento\Backend\App\Action
{
    /**
     * @var PageFactory
     */
    protected PageFactory $_pageFactory;
    /**
     * @var Registry
     */
    private Registry $_registry;

    private $imgfactory;


    const ADMIN_RESOURCE = "Dtn_Employee::employee";

  
    public function __construct(
        Context $context,
        EmployeeFactory $employeeFactory,
        PageFactory $pageFactory,
        Registry $registry
    )
    {
        $this->_employeeFactory = $employeeFactory;
        $this->_pageFactory = $pageFactory;
        $this->_registry = $registry;
        parent::__construct($context);
    }

    public function execute()
    {
        $employee = $this->_employeeFactory->create();
        $id = $this->getRequest()->getParam('employee_id');
        if ($id) {
            $employee->load($id);
            if (!$employee->getId()) {
                return $this->_redirect('dtn/employee/employee/index');
            }
        }
        $this->_registry->register('employee', $employee);
        $resultPage = $this->_pageFactory->create();
        $resultPage->getConfig()->setKeywords(__('Edit Page'));
        $resultPage->setActiveMenu('Dtn_Employee::main_menu');
        $resultPage->getConfig()->getTitle()->prepend('employee Module');
        if ($employee->getId()) {
            $pageTitle = __('Edit', $employee->getId());
        } else {
            $pageTitle = __('New employee');
        }
        $resultPage->getConfig()->getTitle()->prepend($pageTitle);
        return $resultPage;

    }
}
