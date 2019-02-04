<?php
namespace CommonTest\Generic;

use Common\Table\Permalink;
use Common\Generic\ {Constants,CamelCaseUnderScore};
use PHPUnit\Framework\TestCase;

class CamelCaseUnderScoreTest extends TestCase
{
    const TEST_CAMEL = 'CamelCaseUnderScore';
    const TEST_UNDER = 'camel_case_under_score';
    public function testUnderscoreToCamelCase()
    {
        $expected = self::TEST_CAMEL;
        $actual = CamelCaseUnderScore::underscoreToCamelCase(self::TEST_UNDER);
        $this->assertEquals($expected, $actual);
    }
    public function testCamelCaseToUnderscore()
    {
        $expected = self::TEST_UNDER;
        $actual = CamelCaseUnderScore::camelCaseToUnderscore(self::TEST_CAMEL);
        $this->assertEquals($expected, $actual);
    }
    public function testCamelCaseToUnderscoreDoesNotStartWithUnderscore()
    {
        $expected = '_';
        $actual = substr(CamelCaseUnderScore::camelCaseToUnderscore(self::TEST_CAMEL), 0, 1);
        $this->assertNotEquals($expected, $actual);
    }
    public function testPermalinkTable()
    {
        $parts = explode('\\', Permalink::class);
        $class = end($parts);
        $tableName = CamelCaseUnderScore::camelCaseToUnderscore($class);
        $this->assertEquals('permalink', $tableName);
        $this->assertEquals('Common\Table\Permalink', Permalink::class);
    }
}
