<?php

namespace spec\phpCodeWeaver\Library;

include_once(dirname(__DIR__) . '/../src/phpCodeWeaver/Config/Shared.php');
include_once(dirname(__DIR__).'/../src/phpCodeWeaver/Library/Routing.php');

use PHPSpec2\ObjectBehavior;

class Routing extends ObjectBehavior
{
	public function it_should_load_url()
	{
		$this::Load('test/test/tree/1')->shouldReturn(true);
		$this::Controller()->shouldReturn('Test');
		$this::Action()->shouldReturn('Test');
		$this::Request()->shouldReturn(array('tree' => '1'));
	}

    function it_should_be_initializable()
    {
        $this->shouldHaveType('phpCodeWeaver\Library\Routing');
    }
}
