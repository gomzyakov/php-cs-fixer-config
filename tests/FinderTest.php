<?php

use Gomzyakov\CS\Finder;
use Gomzyakov\CS\Rules;
use PHPUnit\Framework\TestCase;
use PhpCsFixer\Finder as PhpCsFixerFinder;

/**
 * @covers \Gomzyakov\CS\Rules::getRules
 */
class FinderTest extends TestCase
{
    public function test_method_return_array()
    {
        $finder = Finder::createWithRoutes(['/src']);

        $this->assertInstanceOf(PhpCsFixerFinder::class, $finder);
    }
}
