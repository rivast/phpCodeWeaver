<?php

/**
 *
 * Shared functions and some auto include and routing logic
 *
 * @category	index.php
 * @author 		Zachie du Bruyn
 *
 */

/**
 * The Autoload logic
 */
function __autoload($sClass)
{
	#-> Convert namespace to full file path
	$sClass = str_replace('phpCodeWeaver', '', $sClass);
	$sClass = ROOT . DS . str_replace('\\', DS, $sClass) . '.php';
	
	if (file_exists($sClass)) {
		require_once($sClass);
		return;
	}
	error_log("$sClass does not exist.");
}

/**
 * Are we live / on production ?
 */
function isLive()
{
	if (!defined('ENVIRONMENT')) {
		return false;
	} else {
		return ENVIRONMENT == 'LIVE';
	}
}
