<?php
/**
 *
 * Application & environment settings
 *
 */

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(dirname(__FILE__)));

$aDevServers	= array('10.0.0.10');
$aStageServers	= array('10.0.0.20');
$aLiveServers	= array('10.0.0.30');

define('SERVER_ADDR', isset($_SERVER['SERVER_ADDR']) ? $_SERVER['SERVER_ADDR'] : '10.0.0.10');

if (in_array(SERVER_ADDR, $aLiveServers))
{
	define('ENVIRONMENT', 'LIVE');
}
elseif (in_array(SERVER_ADDR, $aStageServers))
{
	define('ENVIRONMENT', 'STAGE');
}
else
{
	define('ENVIRONMENT', 'DEV');
}
