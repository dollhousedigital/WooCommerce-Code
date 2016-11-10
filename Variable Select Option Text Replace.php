/*--VARIABLE SELECT OPTIONS TEXT REPLACE--*/

add_filter('gettext', 'translate_text'); 
add_filter('ngettext', 'translate_text');

function translate_text($translated) { 
$translated = str_ireplace('Choose an option', 'Name of the product option', $translated); 
return $translated; 
}
