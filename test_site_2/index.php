<?php

define('ROOT',dirname(__FILE__));
require_once (ROOT.'/components/Route.php');
require_once (ROOT.'/controllers/RegistrationControllers.php');
$reg = new RegistrationControllers();
$reg->actionIndex();

