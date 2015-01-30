<?php
namespace  Ngram\Tool\Ngram;
use NGram\Frequency\Word;
class CounterTest extends \PHPUnit_Framework_TestCase
{
    public function testCounter()
    {
        $expected = [['Ivo'],['viu'], ['a'], ['Uva']];
        $this->assertEquals(4, Counter::get($expected));
        
        $expected = [['Ivo','viu'], ['viu','a'], ['a','Uva']];
        $this->assertEquals(3, Counter::get($expected));
    }
}