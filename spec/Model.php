<?php

namespace spec\phpCodeWeaver\Library;

include_once(dirname(__DIR__) . '/src/phpCodeWeaver/Config/Shared.php');
include_once(dirname(__DIR__) . '/src/phpCodeWeaver/Library/Model.php');

use PHPSpec2\ObjectBehavior;

class Model extends ObjectBehavior
{
    function it_should_be_initializable()
    {
        $this->shouldHaveType('phpCodeWeaver\Library\Model');
    }
}
