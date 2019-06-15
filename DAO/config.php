<?php

spl_autoload_register(function($class_nome){

    if (file_exists(($filenome))) {
        require-once($filename);
    }

});

?>