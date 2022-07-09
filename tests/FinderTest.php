<?php

use Gomzyakov\CS\Finder;
use PhpCsFixer\Finder as PhpCsFixerFinder;
use PHPUnit\Framework\TestCase;

/**
 * @covers \Gomzyakov\CS\Finder::createWithRoutes
 */
class FinderTest extends TestCase
{
    public function test_method_return_array()
    {
        $finder = Finder::createWithRoutes(['/src']);

        $this->assertInstanceOf(PhpCsFixerFinder::class, $finder);
    }
}
