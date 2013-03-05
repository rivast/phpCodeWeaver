<?php

namespace spec\phpCodeWeaver\Library;

include_once(dirname(__DIR__) . '/../src/phpCodeWeaver/Config/Shared.php');
include_once(dirname(__DIR__) . '/../src/phpCodeWeaver/Library/Config.php');

use PHPSpec2\ObjectBehavior;

class Config extends ObjectBehavior
{
    function it_should_be_initializable()
    {
        $this->shouldHaveType('phpCodeWeaver\Library\Config');
    }

    function it_should_load_shared_config()
    {
    	$this::Load('Shared');
    }
}
