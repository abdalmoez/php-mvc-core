<?php
class Home extends Controller{
	

	public static function isEnabled() { return true; }
	public function getPageBuilder() { return 'DefaultPage'; }

	public function GetPageContent()
	{
		require 'Views/home.php';
	}
	
	public function main($params){
		//JSLogger::WriteLine(var_export($params,true));		
		//JSLogger::Write(var_export($_GET,true));
		StyleManager::AddInternalStyle('#head{background-color:red}');
		StyleManager::AddInternalStyle('#foot{background-color:green}');

		//	$this->$params = var_export($params);
	}
}