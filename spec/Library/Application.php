<?php

namespace spec\phpCodeWeaver\Library;

include_once(dirname(__DIR__) . '/../src/phpCodeWeaver/Config/Shared.php');
include_once(dirname(__DIR__) . '/../src/phpCodeWeaver/Library/Application.php');

use PHPSpec2\ObjectBehavior;

class Application extends ObjectBehavior
{
    function it_should_be_initializable()
    {
        $this->shouldHaveType('phpCodeWeaver\Library\Application');
    }
}
