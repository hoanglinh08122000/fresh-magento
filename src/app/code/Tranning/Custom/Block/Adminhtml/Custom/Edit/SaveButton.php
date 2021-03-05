<?php

namespace Tranning\Custom\Block\Adminhtml\Custom\Edit;

use Magento\Framework\View\Element\UiComponent\Control\ButtonProviderInterface;

class SaveButton extends GenericButton implements ButtonProviderInterface
{
    public function getButtonData()
    {
        return [
            'label' => __('Save'),
            'class' => 'save primary',
            'data_attribute' => [
                'mage-init' => [
                    'button' => ['event' => 'save']],
                'form-role' => 'save',
            ],
            'sort_order' => 90];
    }

    /**
     * @return string
     */
    public function getSaveUrl()
    {
        return $this->getUrl('image/custom/save', []);
    }
}
