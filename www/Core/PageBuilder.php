<?php

abstract class PageBuilder{
    
    public static function GetPageContent($PageBuilderTheme){           

        if(isset($GLOBALS['THEME'])==false || $GLOBALS['THEME']==''){
            $GLOBALS['THEME'] = 'default';            
        }
        if($PageBuilderTheme=='')
            $PageBuilderTheme='DefaultPage';
        $file = "Theme/".$GLOBALS['THEME']."/$PageBuilderTheme.php";
        if(file_exists($file) == false)
            ErrorHandler::Throw("The  theme file '".$PageBuilderTheme."' is not found.");//404 Error 

        require_once($file);

        if(is_subclass_of($PageBuilderTheme,'PageBuilder')==false)
            ErrorHandler::Throw("The  class '".$PageBuilderTheme."' in '$file' doesn't extend the class 'PageBuilder'.");//404 Error 

        if((new ReflectionClass($PageBuilderTheme))->isAbstract() == true)
            ErrorHandler::Throw("The  class '".$PageBuilderTheme."' in '$file' is abstract and can't be used as an entry controller.");//404 Error 
        
        return $PageBuilderTheme::Generate();    
    }

    public static $Title='Homepage';
    public static $Lang='en';
    public static $Encoding='UTF-8';
    public static $Meta='';
    
    public static abstract function Generate();
}
