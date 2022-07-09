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
        $directory = __DIR__ . '/../src';
        $finder    = Finder::createWithRoutes([$directory]);

        $this->assertInstanceOf(PhpCsFixerFinder::class, $finder);
    }
}
