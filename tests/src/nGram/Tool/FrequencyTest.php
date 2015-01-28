<?php
namespace NGram\Tool\NGram;
use NGram\Frequency\Word;
class FrequencyTest extends \PHPUnit_Framework_TestCase
{
    public function testCounter()
    {
        $data = [['Ivo'],['viu'],['Ivo']];
        $expected = [
            [['Ivo'],'count'=>2],
            [['viu'],'count'=>1]
        ];
        $this->assertEquals($expected, Frequency::get($data));
    }
}