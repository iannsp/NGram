<?php
namespace Ngram\Tool\Input;

class Sanitize
{
    const PONCTUATION = 0;
    private static $regex = [
        ['/http:\/\/(.*?)\/\]/','/(\b(?:(?:https?|ftp|file|[A-Za-z]+):\/\/|www\.|ftp\.)(?:\([-A-Z0-9+&@#\/%=~_|$?!:,.]*\)|[-A-Z0-9+&@#\/%=~_|$?!:,.])*(?:\([-A-Z0-9+&@#\/%=~_|$?!:,.]*\)|[A-Z0-9+&@#\/%=~_|$]))/i',"#[[:punct:]]#","/\*/","#[[:blank:]]#","/\	{1,}/","/\ {2,}/","/\t/"]
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
