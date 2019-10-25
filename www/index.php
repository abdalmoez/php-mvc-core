<?php
require 'Core/Bootstrap.php';
require_once 'Core/ErrorHandler.php';
require_once 'Core/Controller.php';
require_once 'Core/PageBuilder.php';
require_once 'Core/wp-db.php';
require_once 'Core/ScriptManager.php';
require_once 'Core/StyleManager.php';
require_once 'Core/JSLogger.php';

$wpdb = new wpdb('root','','wpplugindev','localhost');

ErrorHandler::Configure();

(new Bootstrap())->Generate();
