<?php
//
//namespace Cindy\Checkout\Block;
//
//use Magento\Checkout\Block\Checkout\LayoutProcessorInterface;
//use Magento\Customer\Model\AttributeMetadataDataProvider;
//use Magento\Eav\Api\Data\AttributeInterface;
//use Magento\Ui\Component\Form\AttributeMapper;
//use Magento\Framework\Exception\LocalizedException;
//use Magento\Checkout\Block\Checkout\AttributeMerger;
//
//class LayoutProcess implements LayoutProcessorInterface
//{
//    /**
//     * @var AttributeMapper
//     */
//    private $attributeMapper;
//
//    /**
//     * @var AttributeMetadataDataProvider
//     */
//    private $attributeMetadataDataProvider;
//
//    /**
//     * @var AttributeMerger;
//     */
//    private $merger;
//
//    /**
//     * LayoutProcess constructor.
//     * @param AttributeMetadataDataProvider $attributeMetadataDataProvider
//     * @param AttributeMerger $attributeMerger
//     * @param AttributeMapper $attributeMapper
//     */
//    public function __construct(
//        AttributeMetadataDataProvider $attributeMetadataDataProvider,
//        AttributeMerger $attributeMerger,
//        AttributeMapper $attributeMapper
//    ){
//        $this->attributeMapper = $attributeMapper;
//        $this->attributeMetadataDataProvider = $attributeMetadataDataProvider;
//        $this->merger = $attributeMerger;
//    }
//
//
//    public function process($jsLayout)
//    {
//        // load attributes from the database
//        $elements = $this->attributeMetadataDataProvider;
//        //get fields configuration of our step
//        $fields = &$jsLayout['components']['checkout']['children']['steps']['children']['contact-step']
//            ['children']['contact']['children']['contact-fieldset']['children'];
//
//        $fieldCodes = array_keys($fields);
//        $elements = array_filter((array)$elements, function ($key) use ($fieldCodes){
//            return in_array($key, $fieldCodes);
//        }, ARRAY_FILTER_USE_KEY);
//        //merge attribute config fields config
//        $fields = $this->merger->merge(
//          $elements,
//            'checkoutProvider',
//            'contact',
//            $fields
//        );
//        return $jsLayout;
//    }
//    private function getAddressAttribute(): array
//    {
//        /**
//         * @var AttributeInterface[] $attributes
//         */
//        $attributes = $this->attributeMetadataDataProvider->loadAttributesCollection(
//            'customer_address',
//            'customer_register_address'
//        );
//        $elements = [];
//
//        foreach ($attributes as $attribute ){
//            $code = $attribute->getAttributeCode();
//            try {
//                $elements[$code] = $this->attributeMapper->map($attribute);
//            } catch (LocalizedException $e) {
//            }
//            if (isset($elements[$code]['label'])){
//                $label = $elements[$code]['label'];
//                $elements[$code]['label'] = __($label);
//            }
//        }
//        return $elements;
//    }
//
//}
