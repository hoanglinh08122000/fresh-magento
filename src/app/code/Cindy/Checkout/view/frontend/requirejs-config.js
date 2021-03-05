const config = {
    'config': {
        'mixins': {
            'Magento_Checkout/js/view/shipping': {
                'Cindy_Checkout/js/view/shipping-payment-mixin': true
            },
            'Magento_Checkout/js/view/payment': {
                'Cindy_Checkout/js/view/shipping-payment-mixin': true
            }
        }
    }
};
