<?php

namespace spec\phpCodeWeaver\Library;

include_once(dirname(__DIR__) . '/../src/phpCodeWeaver/Config/Shared.php');
include_once(dirname(__DIR__) . '/../src/phpCodeWeaver/Library/Controller.php');

use PHPSpec2\ObjectBehavior;

class Controller extends ObjectBehavior
{
    function it_should_be_initializable()
    {
        $this->shouldHaveType('phpCodeWeaver\Library\Controller');
    }

    function it_should_execute_controller_action()
    {
    	$this->Execute('Test')->shouldReturn(true);
    }
}
