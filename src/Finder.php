<?php

declare(strict_types = 1);

namespace Gomzyakov\CS;

use PhpCsFixer\Finder as PhpCsFixerFinder;

class Finder
{
    /**
     * Creates a new Finder.
     *
     * @param array $routes
     *
     * @return PhpCsFixerFinder
     */
    public static function createWithRoutes(array $routes): PhpCsFixerFinder
    {
        return PhpCsFixerFinder::create()
            ->in($routes)
            ->name('*.php')
            ->notName('*.blade.php')
            ->ignoreDotFiles(true)
            ->ignoreVCS(true);
    }
}
