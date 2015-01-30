<?php
namespace  Ngram\Tool\Input;

class TextToArrayTest extends \PHPUnit_Framework_TestCase
{
    
    public function testSplitByCr()
    {
        $text = 
            "Primeiro paragrafo.
            segundo paragrado.Tem mais no paragrafo.
        terceiro";
        $expected = [
            "Primeiro paragrafo.",
"            segundo paragrado.Tem mais no paragrafo.",
"        terceiro"];
        $r = TextToArray::get($text, ['split'=>TextToArray::SPLIT_BY_CR]);
        $this->assertEquals($expected, $r);
//        var_dump($r);
    }
    public function testSplitByDot()
    {
        $text = 
            "Primeiro paragrafo.
            segundo paragrado.Tem mais no paragrafo.
        terceiro";
        $expected = [
            "Primeiro paragrafo",
"
            segundo paragrado",
"Tem mais no paragrafo",
"
        terceiro"];
        $r = TextToArray::get($text, ['split'=>TextToArray::SPLIT_BY_DOT]);
        $this->assertEquals($expected, $r);
    }

}
