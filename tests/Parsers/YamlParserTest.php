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

use Framework\Config\Parsers\ParserException;
use Framework\Config\Parsers\YamlParser;

final class YamlParserTest extends ParserTestCase
{
    protected mixed $config = __DIR__ . '/../configs/config.yaml';
    protected string $parserClass = YamlParser::class;

    public function testParseException() : void
    {
        $this->expectException(ParserException::class);
        $this->expectExceptionMessageMatches(
            '#^' . \strtr(YamlParser::class, ['\\' => '\\\\']) . ': yaml_parse_file\(\)\: scanning error +#'
        );
        YamlParser::parse(__FILE__);
    }
}
