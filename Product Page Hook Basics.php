/*--SINGLE PRODUCT PAGE HOOK REMOVE--*/

remove_action( 'woocommerce_single_product_summary',
'woocommerce_template_single_price', 10 );

remove_action( 'woocommerce_single_product_summary',
'woocommerce_template_single_excerpt', 20 );

remove_action( 'woocommerce_single_product_summary',
'woocommerce_template_single_add_to_cart', 30 );

remove_action( 'woocommerce_single_product_summary',
'woocommerce_template_single_meta', 40 );

/*--SINGLE PRODUCT PAGE HOOK ADD--*/

add_action( 'woocommerce_single_product_summary',
'woocommerce_template_single_price', 30 );

add_action( 'woocommerce_single_product_summary',
'woocommerce_template_single_excerpt', 10 );

add_action( 'woocommerce_single_product_summary',
'woocommerce_template_single_add_to_cart', 40 );

add_action( 'woocommerce_single_product_summary',
'woocommerce_template_single_meta', 20 );
