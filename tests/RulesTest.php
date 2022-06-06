<?php

use Gomzyakov\CS\Rules;
use PHPUnit\Framework\TestCase;

/**
 * @todo Tests are incomplete
 *
 * @covers \Gomzyakov\CS\Rules::getRules
 */
class RulesTest extends TestCase
{
    public function test_method_return_array()
    {
        $rules = Rules::getRules();

        $this->assertIsArray($rules);
    }
}
