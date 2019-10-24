<?php
class About extends Controller{
	
	public function isEnabled()
	{
		return true;
	}

	public function GetPageContent()
	{
		echo 'About page content';
	}

	public function main($params){
		var_dump($params);
	}
}