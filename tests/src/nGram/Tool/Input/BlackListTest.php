<?php
namespace  Ngram\Tool\Input;

class BlackListTest extends \PHPUnit_Framework_TestCase
{
    
    public function testBlackList()
    {
        $input = "Ivo viu a Uva";
        $blacklist = ["viu","Uva"];
        $expected = "Ivo a";
        $result = BlackList::get($input, ['words'=>$blacklist]);
        $this->assertEquals($expected,$result);
    }

}
