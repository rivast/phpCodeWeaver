<?php

namespace spec\phpCodeWeaver\Library;

use PHPSpec2\ObjectBehavior;

include_once(dirname(__DIR__) . '/../src/phpCodeWeaver/Config/Shared.php');
include_once(dirname(__DIR__) . '/../src/phpCodeWeaver/Library/Application.php');

class Application extends ObjectBehavior
{
    public function it_should_be_initializable()
    {
        $this->shouldHaveType('phpCodeWeaver\Library\Application');
    }
}
