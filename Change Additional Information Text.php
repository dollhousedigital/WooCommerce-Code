/*--CHANGE ADDITIONAL INFORMATION TEXT--*/

add_filter('woocommerce_product_additional_information_heading',
'change_heading');
function change_heading() {
    echo '<h2>Technical Information</h2>';
}
