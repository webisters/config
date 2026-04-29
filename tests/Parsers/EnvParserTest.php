<?php
/*
 * This file is part of Webisters Config Library.
 *
 * (c) Hafiz Muhammad Moaz <thewebisters@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Tests\Config\Parsers;

use Framework\Config\Parsers\EnvParser;

final class EnvParserTest extends ParserTestCase
{
    protected mixed $config = __DIR__ . '/../configs/config.env';
    protected string $parserClass = EnvParser::class;
}
