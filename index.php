<?php

$accept = explode(',', $_SERVER['HTTP_ACCEPT']);
if (in_array('application/rdf+xml', $accept)) {
    http_response_code(303);
    header('Location: htaccess/index.rdf');
    die();
} elseif (in_array('text/turtle', $accept)) {
    http_response_code(303);
    header('Location: htaccess/index.ttl');
    die();
}
else {
header( 'Location: /index.html' ) ;
}

?>
