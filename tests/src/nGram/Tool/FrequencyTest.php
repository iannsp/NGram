<?php
namespace  Ngram\Tool\Ngram;
use NGram\Frequency\Word;
class FrequencyTest extends \PHPUnit_Framework_TestCase
{
    public function testCounter()
    {
        $data = [['Ivo'],['viu'],['Ivo']];
        $expected =['Ivo'=>2, 'viu'=>1];
        $this->assertEquals($expected, Frequency::get($data));
    }
    public function testCounterBigram()
    {
        $data = [['Ivo viu'],['viu Uva'],['Uva frase']];
        $expected =['Ivo viu'=>1, 'viu Uva'=>1,'Uva frase'=>1];
        $this->assertEquals($expected, Frequency::get($data));
    }
}