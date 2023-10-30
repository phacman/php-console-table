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

use PhacMan\ConsoleTable\Exception\InvalidArgumentException;
use PhacMan\ConsoleTable\Helper\TableCellStyle;
use PHPUnit\Framework\TestCase;

class TableCellStyleTest extends TestCase
{
    public function testCreateTableCellStyle()
    {
        $tableCellStyle = new TableCellStyle(['fg' => 'red']);
        $this->assertEquals('red', $tableCellStyle->getOptions()['fg']);

        $this->expectException(InvalidArgumentException::class);
        new TableCellStyle(['wrong_key' => null]);
    }
}
