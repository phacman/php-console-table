<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PhacMan\ConsoleTable\Tests\Helper;

use InvalidArgumentException;
use PhacMan\ConsoleTable\Helper\TableStyle;
use PHPUnit\Framework\TestCase;

class TableStyleTest extends TestCase
{
    public function testSetPadTypeWithInvalidType()
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Invalid padding type. Expected one of (STR_PAD_LEFT, STR_PAD_RIGHT, STR_PAD_BOTH).');
        $style = new TableStyle();
        $style->setPadType(31);
    }
}
