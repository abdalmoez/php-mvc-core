<?php

class PageBuilder{
    public static $Title='Homepage';
    public static $Lang='en';
    public static $Encoding='UTF-8';
    public static $Meta='';
    
    public static function Generate()
    {
        $newline='';
        if(isset($GLOBALS['EnableCompression']) && $GLOBALS['EnableCompression'])
        echo "<!DOCTYPE html>".$newline;        
        echo "<html lang='".PageBuilder::$Lang."'>".$newline;
        echo " <head>".$newline;
        echo "  <meta charset='".PageBuilder::$Encoding."'>".$newline;
        echo "  <title>".PageBuilder::$Title."</title>".$newline;
        echo PageBuilder::$Meta.$newline;
        echo StyleManager::GetHeadContent();
		echo JSLogger::ExportToJavaScript();
        echo ScriptManager::GetHeadContent();
        echo "<link href='public/css/bootstrap.4.3.1.min' rel='stylesheet'>";
        echo "<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/all.css'>";

        echo " </head>".$newline;
        echo " <body>".$newline;
        require('Views/header.php');
        Bootstrap::$mainController->GetPageContent();        
        require('Views/footer.php');
        echo StyleManager::GetFootContent();
        echo '<script src="public/js/jquery-3.3.1.slim.min.js"></script>';
        echo '<script src="public/js/popper-1.14.7.min.js"></script>';
        echo '<script src="public/js/bootstrap.4.3.1.min.js"></script>';
        echo ScriptManager::GetFootContent();
        echo " </body>".$newline;
        echo "</html>".$newline;
        
    }
}
