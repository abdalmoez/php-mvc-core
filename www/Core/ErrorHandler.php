<?php
require_once 'Config/config.php';
function exception_error_handler($errno, $errstr, $errfile, $errline ) {
    ErrorHandler::Throw($errstr);
}
class ErrorHandler{

    public static function Configure()
    {
        set_error_handler("exception_error_handler");
    }
    
    public static function Throw($errormsg)
    {
        if(isset($GLOBALS['DEBUG']) && $GLOBALS['DEBUG'] > 0)
        {
            echo '<pre>'.ErrorHandler::GetErrorMessage($errormsg).'</pre>';
        }else{
            http_response_code(404);
            //include('my_404.php'); // provide your own HTML for the error page
        }
        die();
    }

    private static function GetErrorMessage($errormsg)
    {
        $traceout = debug_backtrace();
        //var_dump($traceout);
        $Message = '';
        $tab = '';
        for($i=sizeof($traceout) - 1; $i > 0;$i--)
        {
            if(isset($traceout[$i]['args']))
                $args = $traceout[$i]['args'];
            else $args = array();
            $strargs = '';
            if(sizeof($args)!=0)
            {   
                $colors=array(
                        "boolean" => "#75507B",
                        "integer" => "#4E9a06", 
                        "double" => "#F57900",
                        "string" => "#CC0000",
                        "array" => "#000000",
                        "object" => "#000000",
                        "resource" => "#000000",
                        "resource (closed)" => "#000000",
                        "NULL" => "#000000",
                        "unknown type" => "#000000"
                    );
                foreach($args as $arg)
                {
                    $strargs = (($strargs=='')?'':$strargs.', '). "<font color='".$colors[gettype($arg)]."' title='".htmlspecialchars(var_export($arg,true),ENT_QUOTES)."'>".gettype($arg)."</font>";
                }
            }
            $line = (isset($traceout[$i]['class'])?$traceout[$i]['class']:'') . (isset($traceout[$i]['type'])?$traceout[$i]['type']:''). $traceout[$i]['function']."(".$strargs.")<font color='#CC0000' title='Good'> '".$traceout[$i]['file'].":".$traceout[$i]['line']."'</font>";
            
            $Message = (($Message == '')?'':$Message.'<br>'.$tab).$line;
            $tab = $tab."&nbsp;";
        }
        return "<h3>Error: $errormsg</h3>".$Message;

    }
}