<?php

class Help {

    function __construct() {
        echo 'We are inside help controller' . '<br />';
    }
    
    function helpFunction($arg = false){
        echo 'We are inside help function' . '<br />';
        echo 'Help optional argument: ' . $arg . '<br />';
    }

}
