<?php

namespace spec\phpCodeWeaver\Library;

use PHPSpec2\ObjectBehavior;

include_once(dirname(__DIR__) . '/../src/phpCodeWeaver/Config/Shared.php');
include_once(dirname(__DIR__) . '/../src/phpCodeWeaver/Library/Model.php');

class Model extends ObjectBehavior
{
    public function it_should_be_initializable()
    {
        $this->shouldHaveType('phpCodeWeaver\Library\Model');
    }
}
