<?php  

$accept = explode(',', $_SERVER['HTTP_ACCEPT']);
if (in_array('application/rdf+xml', $accept)) {
    header('Location: htaccess/index.rdf');
    http_response_code(303);
    die();
} elseif (in_array('text/turtle', $accept)) {
    header('Location: htaccess/index.ttl');
    http_response_code(303);
    die();	
}
else {
header( 'Location: /index.html' ) ; 
}
?>
