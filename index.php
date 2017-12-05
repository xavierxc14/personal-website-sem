<?php

$accept = explode(',', $_SERVER['HTTP_ACCEPT']);
$pagename=basename($_SERVER['PHP_SELF'],'.php')
if (in_array('application/rdf+xml', $accept)) {
    http_response_code(303);
    header('Location: htaccess/'.$pagename.'.rdf');
    die();
} elseif (in_array('text/turtle', $accept)) {
    http_response_code(303);
    header('Location: htaccess/'.$pagename.'.ttl');
    die();
}
else {
header( 'Location: /index.html' ) ;
}

?>
