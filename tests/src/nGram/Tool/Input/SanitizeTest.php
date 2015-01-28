<?php
namespace Ngram\Tool\Input;

class SanitizeTest extends \PHPUnit_Framework_TestCase
{
    
    public function testSplitByCr()
    {
        $text = 
            "?Primeiro, !!!!paragrafo.
            _ -segundo [paragrado.Tem mais no paragrafo.
        terceiro;";
        $expected =             
" Primeiro      paragrafo 
               segundo  paragrado Tem mais no paragrafo 
        terceiro ";
        $r = Sanitize::get($text, ['by'=>Sanitize::PONCTUATION]);
        $this->assertEquals($expected, $r);
//        var_dump($r);
    }
}
