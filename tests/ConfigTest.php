<?php

use Gomzyakov\CS\Config;
use Mockery\Adapter\Phpunit\MockeryTestCase;
use PhpCsFixer\Config as PhpCsFixerConfig;
use PhpCsFixer\Finder as PhpCsFixerFinder;

/**
 * @covers \Gomzyakov\CS\Config::createWithFinder
 */
class ConfigTest extends MockeryTestCase
{
    public function test_method_return_array()
    {
        /** @var PhpCsFixerFinder $finder */
        $finder = Mockery::mock(PhpCsFixerFinder::class);

        $config = Config::createWithFinder($finder);

        $this->assertInstanceOf(PhpCsFixerConfig::class, $config);
    }
}
