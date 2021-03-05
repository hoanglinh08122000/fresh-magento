<?php

namespace Dtn\Custom\Ui\Listing\Columns;

use Magento\Framework\UrlInterface;
use Magento\Framework\View\Element\UiComponent\ContextInterface;
use Magento\Framework\View\Element\UiComponentFactory;
use Magento\Ui\Component\Listing\Columns\Column;
use Dtn\Office\Block\Adminhtml\Department\Grid\Renderer\Action\UrlBuilder;
/**
 * Class BlockActions
 */
class ImgAction extends Column
{
    /**
     * Url path
     */
    const URL_PATH_EDIT = 'admincustom/custom/edit';
    const URL_PATH_DELETE = 'admincustom/custom/delete';

    /**
     * @var UrlInterface
     */
    protected $_urlBuilder;

    public function __construct(
        ContextInterface $context,
        UiComponentFactory $uiComponentFactory,
        UrlInterface $urlBuilder,
        array $components = [],
        array $data = []
    ) {
        $this->_urlBuilder = $urlBuilder;
        parent::__construct($context, $uiComponentFactory, $components, $data);
    }


    public function prepareDataSource(array $dataSource)
    {

        if (isset($dataSource['data']['items'])) {
            foreach ($dataSource['data']['items'] as & $item) {
                if (isset($item['id'])) {
                    $item[$this->getData('name')] = [
                        'edit' => [
                            'href' => $this->_urlBuilder->getUrl(
                                self::URL_PATH_EDIT,
                                [
                                    'id' => $item['id']
                                ]
                            ),
                            'label' => __('Edit')
                        ],
                        'delete' => [
                            'href' => $this->_urlBuilder->getUrl(
                                self::URL_PATH_DELETE,
                                [
                                    'id' => $item['id']
                                ]
                            ),
                            'post' => true,
                            'label' => __('Delete'),
                            'confirm' => [
                                'title' => __('Delete'),
                                'message' => __('Are you sure you want to delete  record?')
                            ]
                        ]
                    ];
                }
            }
        }

        return $dataSource;
    }

}
