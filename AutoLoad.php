<?php
spl_autoload_register(function($class) 
{
    
    echo "From autoloader ".$class; 
});