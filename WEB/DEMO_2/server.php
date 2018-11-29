<?php

# $_SERVER SUPERGLOBAL

// Create Server Array

$server=[
    'Host Server Name' => $_SERVER['SERVER_NAME'],
    'Host Header' => $_SERVER['HTTP_HOST'],
    'Server Software' => $_SERVER['SERVER_SOFTWARE'],
    'Document Root' => $_SERVER['DOCUMENT_ROOT'],
    'Current Page' => $_SERVER['PHP_SELF'],
    'Script Name' => $_SERVER['SCRIPT_NAME'],
    'Absolute Path' => $_SERVER['SCRIPT_FILENAME'],
    'Server Admin' => $_SERVER['SERVER_ADMIN'],
    'Remote Address' => $_SERVER['REMOTE_ADDR'],
    'Remote Port' => $_SERVER['REMOTE_PORT'],
    'Server Protocol' => $_SERVER['SERVER_PROTOCOL'],
    'Gateway Interface' => $_SERVER['GATEWAY_INTERFACE']
]

?>