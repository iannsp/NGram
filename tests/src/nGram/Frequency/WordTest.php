<?php
namespace  Ngram\Frequency;

class FrequencyTest extends \PHPUnit_Framework_TestCase
{

    public function testWordFrequencyOneItem()
    {
        $w = new Word("Ivo viu");
        $this->assertEquals(['Ivo viu'], $w->extract(2));
    }
 
    public function testWordFrequency()
    {
        $w = new Word("Ivo viu a Uva");
        $this->assertEquals(['Ivo','viu', 'a', 'Uva'], $w->extract(1));
        $this->assertEquals(['Ivo viu', 'viu a', 'a Uva'], $w->extract(2));
        $this->assertEquals(['Ivo viu a', 'viu a Uva'], $w->extract(3));
        $this->assertEquals(['Ivo viu a Uva'], $w->extract(4));
        $this->assertEquals([], $w->extract(5));
    }
    public function testLetterFrequency()
    {
        $w = new Letter("paralelo");
        $this->assertEquals(['p','a','r','a','l','e','l','o'], $w->extract(1));
        $this->assertEquals([
            'p a',
            'a r',
            'r a',
            'a l',
            'l e',
            'e l',
            'l o'
        ], $w->extract(2));
    }

/**
   @expectedException \Exception
   @expectedExceptionMessage No data, no n-gram. 
*/    
    public function testWordFrequencyByEmpty()
    {
        $w = new Word("");
    }
/**
   @expectedException \Exception
   @expectedExceptionMessage No data, no n-gram. 
*/    
    public function testWordFrequencyByNull()
    {
        $w = new Word(null);
    }

    /**
       @expectedException \Exception
       @expectedExceptionMessage No data, no n-gram. 
    */    
        public function testLetterFrequencyByEmpty()
        {
            $w = new Letter("");
        }
    /**
       @expectedException \Exception
       @expectedExceptionMessage No data, no n-gram. 
    */    
        public function testLetterFrequencyByNull()
        {
            $w = new Letter(null);
        }

}
