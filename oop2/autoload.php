<?php 


//  Manual Autoloading 
spl_autoload_register(function($className){

//$path = __DIR__ . '/' . str_replace('\\', '/', $className) . '.php';
$path = __DIR__ . DIRECTORY_SEPARATOR . str_replace('\\', DIRECTORY_SEPARATOR, $className) . '.php';


if(file_exists($path)){

    //echo $path;
    require $path;

} else {

    echo "Class {$className} not Found";
}
    
});