<?php
/**
 * Bootstrap
 */
error_reporting(E_ALL);
ini_set('display_errors',true);
spl_autoload_register(
    function($class){
    $base_dir=__DIR__.'/';
    $relative_class=substr($class,strlen('Refactoring'));
    $file=str_replace(['/','\\'],DIRECTORY_SEPARATOR,$base_dir.$relative_class.'.php');
    if(!file_exists($file)){
        http_response_code(500);
        die('Error auto-loading class '.$class.'. File '.$file.' was not found');
    }
    require_once($file);
});
