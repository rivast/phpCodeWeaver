<?php

/**
 *
 * Bootsrap file for our application - everything comes through here
 *
 * @category	index.php
 * @author 		Zachie du Bruyn
 *
 */

namespace phpCodeWeaver;

require_once('Library' . DS . 'Shared.php');

use phpCodeWeaver\Library\Config;
use phpCodeWeaver\Library\Routing;

if (Routing::Load($sUrlRequested))
{
	$sController = 'phpCodeWeaver\\Controllers\\' . Routing::Controller();
	$oController = new $sController();
	$oController->Execute(Routing::Action());
}

