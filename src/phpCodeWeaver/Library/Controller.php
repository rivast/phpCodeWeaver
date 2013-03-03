<?php

namespace phpCodeWeaver\Library;

/**
* The main Base Controller Class
*
* @category		Base\Controller
* @author 		Zachie du Bruyn
*/
class Controller
{
	protected $sAction;
	protected $aRequest;
	
	/**
	 * Method execute an action
	 * 
	 * @return bool
	 */
    public function Execute($sAction, array $aRequest = array())
    {
    	$this->sAction = $sAction;
    	$this->aRequest = $aRequest;

    	if (method_exists($this, $this->sAction))
		{
			return $this->{$this->sAction}();
		}
		else
		{
			throw new ControllerException("Invalid Action for Controller");
		}	
        return $sAction;
    }

    /**
     * Test Action for Controller
     *
     * @return 	bool
     */
    public function Test()
    {
    	return true;
    }

}

/**
 * The Base Controller exception classs
 *
 * @category 	Exception
 */
class ControllerException extends \Exception { }