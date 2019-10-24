<?php

class ScriptManager{
    private static $head = array();
    private static $foot = array();
    
    public static function AddURL($url,$inHead =false)
    {
        if($inHead){
            ScriptManager::$head[sizeof(ScriptManager::$head)]['isurl']=true;
            ScriptManager::$head[sizeof(ScriptManager::$head) - 1]['content']=$url;
        }
        else {
            ScriptManager::$foot[sizeof(ScriptManager::$foot)]['isurl']=true;
            ScriptManager::$foot[sizeof(ScriptManager::$foot) - 1]['content']=$url;
        }
    }
    
    public static function AddInternalScript($script,$inHead =false)
    {
        if($inHead){
            ScriptManager::$head[sizeof(ScriptManager::$head)]['isurl']=false;
            ScriptManager::$head[sizeof(ScriptManager::$head) - 1]['content']=$script;
        }
        else {
            ScriptManager::$foot[sizeof(ScriptManager::$foot)]['isurl']=false;
            ScriptManager::$foot[sizeof(ScriptManager::$foot) - 1]['content']=$script;
        }
    }
    
    public static function GetHeadContent()
    {
        $lines='';
        foreach(ScriptManager::$head as $hscript)
        {
            $needtag = (strpos(strtoupper($hscript['content']),'<SCRIPT>')==false);

            if($needtag){
                if($hscript['isurl'])
                {
                    $hscript['content']="<script src='".$hscript['content']."'></script>";
                }else{
                    $hscript['content']="<script>".$hscript['content']."</script>";
                }
            }
            $lines=(($lines=='')?'':$lines."\r\n").$hscript['content'];
        }
        return $lines;
    }

    public static function GetFootContent()
    { 
        $lines='';
        foreach(ScriptManager::$foot as $fscript)
        {
            $needtag = (strpos(strtoupper($fscript['content']),'<SCRIPT>')==false);

            if($needtag){
                if($fscript['isurl'])
                {
                    $fscript['content']="<script src='".$fscript['content']."'></script>";
                }else{
                    $fscript['content']="<script>".$fscript['content']."</script>";
                }
            }
            $lines=(($lines=='')?'':$lines."\r\n").$fscript['content'];
        }
        return $lines;

    }
}