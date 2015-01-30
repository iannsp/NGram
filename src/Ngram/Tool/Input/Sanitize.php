<?php
namespace Ngram\Tool\Input;

class Sanitize
{
    const PONCTUATION = 0;
    private static $regex = [
        ['|https?://[a-z\.0-9]+|i',"#[[:punct:]]#","/\*/","#[[:blank:]]#","/\	{1,}/","/\ {2,}/","/\t/"]
    ];
    public static function get($input,array $preset=null)
    {
        $regex = SELF::$regex[$preset['by']];
        foreach ($regex as $expr){
            $input = preg_replace($expr, " ", $input);
        }
        return trim($input);
    }
}
