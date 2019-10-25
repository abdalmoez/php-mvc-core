<?php

abstract class Controller{

    public function getPageBuilder() { return 'DefaultPage'; }
    /**
     * Return true to enable the controller
     */
    public static abstract function isEnabled();

    /**
     * Include your views in this function
     */
    public abstract function GetPageContent();
}