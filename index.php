<?php  

$accept = explode(',', $_SERVER['HTTP_ACCEPT']);
if (in_array('application/rdf+xml', $accept)) {
    header('Location: path/to/rdf/version.rdf');
    die();
}
else {
header( 'Location: /index.html' ) ; 
}
?>
