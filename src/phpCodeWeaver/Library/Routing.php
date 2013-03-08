<?php

namespace phpCodeWeaver\Library;

/**
* The main Routing Class
*
* @category		Routing
* @author 		Zachie du Bruyn
*/
final class Routing
{
	private static $sController;
	private static $sAction;
	private static $aRequest;

	/**
	 * Method loads Routing Details
	 *
	 * @param 	string 	$sUrl
	 * @return 	bool
	 */
    public static function load($sUrl)
    {
        if (empty($sUrl)) {
			$aUrl = array('Index', 'Home');
		} else {
			$aUrl = explode("/", $sUrl);
		}

		self::$sController = ucwords(array_shift($aUrl));
		self::$sAction = ucwords(array_shift($aUrl));

		$aRequest = array();
		$sKey = '';
		foreach ($aUrl as $sValue) {
			if (empty($sKey)) {
				$sKey = $sValue;
			} else {
				$aRequest[$sKey] = $sValue;
				$sKey = '';
			}
		}
		self::$aRequest = $aRequest;
		return true;
    }

    /**
     * Method returns loaded Controller name
     *
     * @return 	string
     */
    public static function controller()
    {
        return self::$sController;
    }

    /**
     * Method returns loaded Action name
     *
     * @return 	string
     */
    public static function action()
    {
        return self::$sAction;
    }

    /**
     * Method returns loaded Request Params
     *
     * @return 	array
     */
    public static function request()
    {
        return self::$aRequest;
    }
}
