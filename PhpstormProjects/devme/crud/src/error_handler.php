<?php

function setInternalServerError($errno, $errstr, $errfile, $errline){
    echo '<h1>Error</h1>';
    switch ($errno) {
        case E_USER_ERROR:
            echo  '<strong>ERROR</strong> [' . $errno . '] ' . $errstr . "<br>\n";
            break;
        case E_USER_WARNING:
            echo  '<strong>WARNING</strong> [' . $errno . '] ' . $errstr . "<br>\n";
            break;
        case E_USER_NOTICE:
            echo  '<strong>NOTICE</strong> [' . $errno . '] ' . $errstr . "<br>\n";
            break;
        
        default:
             echo  '<strong>UNKNOW ERROR TYPE</strong> [' . $errno . '] ' . $errstr . "<br>\n";
            break;
    }
    exit;
}
set_error_handler(setInternalServerError);
set_exception_handler(setInternalServerError);