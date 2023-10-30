<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PhacMan\ConsoleTable\Helper;

use Closure;
use IteratorAggregate;
use Traversable;

/**
 * @internal
 */
class TableRows implements IteratorAggregate
{
    private Closure $generator;

    public function __construct(Closure $generator)
    {
        $this->generator = $generator;
    }

    public function getIterator() : Traversable
    {
        return ($this->generator)();
    }
}
