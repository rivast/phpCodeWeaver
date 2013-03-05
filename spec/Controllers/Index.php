<?php

namespace spec\phpCodeWeaver\Controllers;

use PHPSpec2\ObjectBehavior;

define('ROOT', dirname(__DIR__));

include_once(ROOT . '/../src/phpCodeWeaver/Config/Shared.php');
include_once(ROOT . '/../src/phpCodeWeaver/Library/Controller.php');
include_once(ROOT . '/../src/phpCodeWeaver/Controllers/Index.php');

class Index extends ObjectBehavior
{
    public function it_should_be_initializable()
    {
        $this->shouldHaveType('phpCodeWeaver\Controllers\Index');
    }
}
