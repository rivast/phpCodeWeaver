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

use phpCodeWeaver\Library\Config;
use phpCodeWeaver\Library\Routing;

try {
	require_once('Library' . DS . 'Shared.php');

	if (Routing::load($sUrlRequested)) {
		$sController = 'phpCodeWeaver\\Controllers\\' . Routing::controller();
		$oController = new $sController();
		$oController->execute(Routing::action());
	}
} catch (Exception $oException) {
    // Something went horribly wrong and nothing caught it
    echo '<h1>Exception Thrown</h1> (and nothing caught it)<br/>';
    var_dump($oException->getMessage());
    var_dump($oException->getTrace());
}
