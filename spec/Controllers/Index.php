<?php

namespace spec\phpCodeWeaver\Controllers;

include_once(dirname(__DIR__) . '/../src/phpCodeWeaver/Config/Shared.php');
include_once(dirname(__DIR__) . '/../src/phpCodeWeaver/Library/Controller.php');
include_once(dirname(__DIR__) . '/../src/phpCodeWeaver/Controllers/Index.php');

use PHPSpec2\ObjectBehavior;

class Index extends ObjectBehavior
{
    function it_should_be_initializable()
    {
        $this->shouldHaveType('phpCodeWeaver\Controllers\Index');
    }
}
