<?php

class JSLogger{

    private static $log=array();
    private static $logstyle=array();

    public static function SetStyle($style)
    {
        $logsize = sizeof(JSLogger::$log);
        if($logsize == 0)
        {
            JSLogger::$log[0] = '';
            JSLogger::$logstyle[0] = $style;

        }else if(JSLogger::$log[$logsize - 1] == '')
        {
            JSLogger::$logstyle[$logsize - 1] = $style;
        }else{
            JSLogger::$log[$logsize] = '';
            JSLogger::$logstyle[$logsize] = $style;
        }
    }
    public static function Write()
    {
        $logsize = sizeof(JSLogger::$log);
        if($logsize == 0)
        {
            JSLogger::$log[0] = '';            
            JSLogger::$logstyle[0] = '';
        }else $logsize--;

        $args = func_get_args();
        $str = '';
        foreach($args as $arg)
            $str = $str . $arg;
        JSLogger::$log[$logsize] = JSLogger::$log[$logsize] . $str;
    }

    public static function WriteLine()
    {
        $logsize = sizeof(JSLogger::$log);
        if($logsize == 0)
        {
            JSLogger::$log[0] = '';     
            JSLogger::$logstyle[0] = '';
        }else $logsize--;

        $args = func_get_args();
        $str = '';
        foreach($args as $arg)
            $str = $str . $arg;
        JSLogger::$log[$logsize] = JSLogger::$log[$logsize] . $str . '\n';
    }

    private static function JSCharEscape($str)
    {
        $res = str_replace("\r","\\r", $str);
        $res = str_replace("\n","\\n", $res);
        $res = str_replace("'","\\'", $res);
        $res = str_replace("\"","\\\"", $res);
        return $res;

    }
    public static function ExportToJavaScript()
    {
        if(isset($GLOBALS['DEBUG']) && $GLOBALS['DEBUG'] >=2)
        {
            $res='';
            for($idx=0;$idx<sizeof(JSLogger::$log);$idx++)
            {
                if(JSLogger::$log[$idx] != '')
                {
                    if(JSLogger::$logstyle[$idx]=="")
                    {
                        $res = (($res=='')?'':$res.'\r\n')."console.log('". JSLogger::JSCharEscape(JSLogger::$log[$idx])."');";
                    }else{
                        $res = (($res=='')?'':$res.'\r\n')."console.log('%c". JSLogger::JSCharEscape(JSLogger::$log[$idx])."','".JSLogger::$logstyle[$idx]."');";
                    }
                    
                }
            }
            if($res!='')
                return "<script>
                console.log('%c                             \\n  System log:                \\n                             ', 'background: #222; color: #bada55');
                $res 
                console.log('%c                             \\n  End System log!            \\n                             ', 'background: #222; color: #bada55');
                </script>";
            else return ''; 
        }else return '';
    }

    
}