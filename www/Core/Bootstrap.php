<?php

class Bootstrap{

    public static $mainController;
    public function __construct(){
        if(!isset($_GET['url']))
        {
            require 'Controllers/Home.php';
            Bootstrap::$mainController = new Home();
            Bootstrap::$mainController->main(array());
            return;
        }
        $url = $_GET['url'];
        $url = rtrim($url, '/');
        $url = explode('/', $url);


        $ctrlname = $url[0];

        $file = 'Controllers/'. $ctrlname.'.php';
        if(file_exists($file) == false)
            ErrorHandler::Throw("The  file '$file' is not found.");//404 Error
        require $file;
        if(is_subclass_of($ctrlname,'Controller')==false)
            ErrorHandler::Throw("The  class '".$ctrlname."' in '$file' doesn't extend the class 'Controller'.");//404 Error 
        if((new ReflectionClass($ctrlname))->isAbstract() == true)
            ErrorHandler::Throw("The  class '".$ctrlname."' in '$file' is abstract and can't be used as an entry controller.");//404 Error 
        if($ctrlname::isEnabled() == false)
            ErrorHandler::Throw("The  class '".$ctrlname."' in '$file' is disabled can't be used as an entry controller.");//404 Error 
        

        Bootstrap::$mainController = new $ctrlname();

        if(isset($url[1]))
        {
            if(method_exists(Bootstrap::$mainController,$url[1]))
            {
                // URL: Controller/Method/Param[0]/Param[1]/Param[2]/...
                Bootstrap::$mainController->{$url[1]}(explode('/', substr($_GET['url'],strlen($ctrlname)+strlen($url[1])+2)));
            }else{
                require 'Core/ErrorHandler.php';
                ErrorHandler::Throw("The Method $url[1] is not available in class $ctrlname:$file");//404 Error
            }
            
        }else{
            Bootstrap::$mainController->main(array());
        }
    }
}