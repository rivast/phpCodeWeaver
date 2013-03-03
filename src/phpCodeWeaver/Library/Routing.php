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
	static private $sController;
	static private $sAction;
	static private $aRequest;

	/**
	 * Method loads Routing Details
	 *
	 * @param 	string 	$sUrl
	 * @return 	bool
	 */
    static public function Load($sUrl)
    {
        if (empty($sUrl))
		{
			$aUrl = array('Index', 'Home');
		}
		else
		{
			$aUrl = explode("/", $sUrl);
		}

		self::$sController = ucwords(array_shift($aUrl));
		self::$sAction = ucwords(array_shift($aUrl));

		$aRequest = array();
		$sKey = '';
		foreach ($aUrl as $sValue) 
		{
			if (empty($sKey))
			{
				$sKey = $sValue;
			}
			else
			{
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
    static public function Controller()
    {
        return self::$sController;
    }
}
