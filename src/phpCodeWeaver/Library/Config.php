<?php

namespace phpCodeWeaver\Library;

/**
* The main Config loader Class
*
* @category		Config
* @author 		Zachie du Bruyn
*/
final class Config
{

	/**
	 * Method loads a Config file
	 *
	 * @param 	string 	$sConfig
	 * @return 	bool
	 */
    public function load($sConfig)
    {
        $sConfig = ROOT . DS . 'Config' . DS . str_replace('\\', DS, $sConfig) . '.php';
		if (file_exists($sConfig)) {
			include_once($sConfig);
			return true;
		} elseif (defined(ENVIRONMENT)) {
			$sConfig = ROOT . DS . 'Config' . DS . ENVIRONMENT . DS . str_replace('\\', DS, $sConfig) . '.php';
			if (file_exists($sConfig)) {
				include_once($sConfig);
				return true;
			}
		}

		return false;
    }
}
