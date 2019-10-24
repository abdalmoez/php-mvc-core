<?php

class StyleManager{
    public static $head = array();
    private static $foot = array();
    
    public static function AddURL($url,$inHead = true)
    {
        if($inHead){
            StyleManager::$head[sizeof(StyleManager::$head)]['isurl']=true;
            StyleManager::$head[sizeof(StyleManager::$head) - 1]['content']=$url;
        }
        else {
            StyleManager::$foot[sizeof(StyleManager::$foot)]['isurl']=true;
            StyleManager::$foot[sizeof(StyleManager::$foot) - 1]['content']=$url;
        }
    }
    
    public static function AddInternalStyle($style,$inHead = true)
    {
        if($inHead){
            StyleManager::$head[sizeof(StyleManager::$head)]['isurl']=false;
            StyleManager::$head[sizeof(StyleManager::$head) - 1]['content']=$style;
        }
        else {
            StyleManager::$foot[sizeof(StyleManager::$foot)]['isurl']=false;
            StyleManager::$foot[sizeof(StyleManager::$foot) - 1]['content']=$style;
        }
    }
    
    public static function GetHeadContent()
    {
        $lines='';

        foreach(StyleManager::$head as $hstyle)
        {
            if((strpos(strtoupper($hstyle['content']),'<LINK')==false) && ($hstyle['isurl']))
                    $hstyle['content']="<link rel='stylesheet' type='text/css' href='".$hstyle['content']."'>";

            if((strpos(strtoupper($hstyle['content']),'<STYLE>')==false) && ($hstyle['isurl']==false))
                    $hstyle['content']="<style>".$hstyle['content']."</style>";
            
            $lines=(($lines=='')?'':$lines."\r\n").$hstyle['content'];
        }
        JSLogger::WriteLine('HSTYLE lines:',$lines);

        return $lines;
    }

    public static function GetFootContent()
    { 
        $lines='';
        foreach(StyleManager::$foot as $fstyle)
        {
            if((strpos(strtoupper($fstyle['content']),'<LINK')==false) && ($fstyle['isurl']))
                    $fstyle['content']="<link rel='stylesheet' type='text/css' href='".$fstyle['content']."'>";

            if((strpos(strtoupper($fstyle['content']),'<STYLE>')==false) && ($fstyle['isurl']==false))
                    $fstyle['content']="<style>".$fstyle['content']."</style>";

            $lines=(($lines=='')?'':$lines."\r\n").$fstyle['content'];
        }
        return $lines;

    }
}