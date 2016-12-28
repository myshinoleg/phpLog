<?php
require_once('/home/oleg/PhpstormProjects/Logger/phpLog/Psr/Log/Logger.php');
require_once('/home/oleg/PhpstormProjects/Logger/phpLog/Psr/Log/OutLogger.php');

//use Log;

$ol = new OutLogger();

$ol->log('123');
