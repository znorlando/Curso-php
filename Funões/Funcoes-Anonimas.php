<?php


function test($callback){

     //Prosesso lento

    $callback();

}

test(function(){

    echo "terminoul";
    
});

?>