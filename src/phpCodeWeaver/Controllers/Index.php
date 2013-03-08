<?php

namespace phpCodeWeaver\Controllers;

use phpCodeWeaver\Library\Controller;

/**
* Index controller class
* 
* @category	Controller
* @author 	Zachie du Bruyn
*/
class Index extends Controller
{
	/**
	 * Method for the Home action
	 * 
	 * @return 	void
	 */
	public function home()
	{
		echo "Hello World!";
	}
}
