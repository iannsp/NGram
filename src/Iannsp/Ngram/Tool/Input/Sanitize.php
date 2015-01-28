<?php
namespace Iannsp\Ngram\Tool\Input;

class Sanitize
{
    const PONCTUATION = 0;
    private static $regex = [
        ["#[[:punct:]]#","/\*/","#[[:blank:]]#","/\	{1,}/","/\ {2,}/","/\t/"]
    ];
    public static function get($input,array $preset=null)
    {
        $regex = SELF::$regex[$preset['by']];
        foreach ($regex as $expr){
            $input = preg_replace($expr, " ", $input);
        }
        return $input;
    }
}
