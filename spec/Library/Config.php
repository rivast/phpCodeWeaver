<?php

namespace spec\phpCodeWeaver\Library;

use PHPSpec2\ObjectBehavior;

include_once(dirname(__DIR__) . '/../src/phpCodeWeaver/Config/Shared.php');
include_once(dirname(__DIR__) . '/../src/phpCodeWeaver/Library/Config.php');

class Config extends ObjectBehavior
{
    public function it_should_be_initializable()
    {
        $this->shouldHaveType('phpCodeWeaver\Library\Config');
    }

    public function it_should_load_shared_config()
    {
    	$this::Load('Shared');
    }
}
