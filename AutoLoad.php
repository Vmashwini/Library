<?php
namespace LibraryProject\Website;

spl_autoload_register(function($class) 
{
    $file_path = "$class.php";
    $file_path = str_replace('\\','/', $file_path);
    
    echo "FILE PATH IS ::::::::::: ******  ".$file_path."<BR>";
    
    if(file_exists($file_path))
    {
        include $file_path;
    }
    else echo "$class not found";
});