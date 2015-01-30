<?php
namespace Ngram;
class SizeTest extends \PHPUnit_Framework_TestCase
{
    public function testNavigateOverSizes()
    {
        $expected = range(0,7,2);
        $s = new Size($expected);
        foreach ($s as $sItem){
            $this->assertTrue(in_array($sItem, $expected));
        }
        $s->rewind();
        for ($i = 0; $i < count($expected); $i++){
            $this->AssertEquals($expected[$i],$s->current());
            $s->next();
        }
    }
}