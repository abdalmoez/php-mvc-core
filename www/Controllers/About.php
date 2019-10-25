<?php
class About extends Controller{
	public static function isEnabled() { return true; }
	public function getPageBuilder() { return 'LoginPage'; }

	public function GetPageContent()
	{
		echo 'About page content';
	}

	public function main($params){
		var_dump($params);
	}
}