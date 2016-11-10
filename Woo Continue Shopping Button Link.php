/*--CONTINUE SHOPPING BUTTON LINK--*/

add_filter( 'woocommerce_continue_shopping_redirect', 'wc_custom_redirect_continue_shopping' );

function wc_custom_redirect_continue_shopping() {
  //return your desired link here.
  return http://www.yourwebsite.com/location
}
