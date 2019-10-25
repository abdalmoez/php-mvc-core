<?php

class LoginPage extends PageBuilder{
    

    public static $Title='Login';
    public static $Lang='en';
    public static $Encoding='UTF-8';
    public static $Meta='';
    
    public static function Generate()
    {
        $newline='';
        if(isset($GLOBALS['EnableCompression']) && $GLOBALS['EnableCompression'])
        echo "<!DOCTYPE html>".$newline;        
        echo "<html lang='".LoginPage::$Lang."'>".$newline;
        echo " <head>".$newline;
        echo "  <meta charset='".LoginPage::$Encoding."'>".$newline;
        echo "  <title>".LoginPage::$Title."</title>".$newline;
        echo LoginPage::$Meta.$newline;
        echo StyleManager::GetHeadContent();
		echo JSLogger::ExportToJavaScript();
        echo ScriptManager::GetHeadContent();
        echo "<link href='public/css/bootstrap.4.3.1.min' rel='stylesheet'>";
        echo "<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/all.css'>";

        echo " </head>".$newline;
        echo " <body>".$newline;
        Bootstrap::$mainController->GetPageContent();        
        echo StyleManager::GetFootContent();
        echo '<script src="public/js/jquery-3.3.1.slim.min.js"></script>';
        echo '<script src="public/js/popper-1.14.7.min.js"></script>';
        echo '<script src="public/js/bootstrap.4.3.1.min.js"></script>';
        echo ScriptManager::GetFootContent();
        echo " </body>".$newline;
        echo "</html>".$newline;
        
    }
}
