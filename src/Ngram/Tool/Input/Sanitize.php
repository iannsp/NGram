<?php
namespace Ngram\Tool\Input;

class Sanitize
{
    const PONCTUATION = 0;
    const NORMALIZETOLOWER = 'mb_strtolower';
    const NORMALIZETOUPPER = 'mb_strtoupper';
    private static $regex = [
        ['/http:\/\/(.*?)\/\]/','/(\b(?:(?:https?|ftp|file|[A-Za-z]+):\/\/|www\.|ftp\.)(?:\([-A-Z0-9+&@#\/%=~_|$?!:,.]*\)|[-A-Z0-9+&@#\/%=~_|$?!:,.])*(?:\([-A-Z0-9+&@#\/%=~_|$?!:,.]*\)|[A-Z0-9+&@#\/%=~_|$]))/i',"#[[:punct:]]#","/\*/","#[[:blank:]]#","/\	{1,}/","/\ {2,}/","/\t/"]
    ];
    public static function get($input,array $preset=null)
    {
        $regex = self::$regex[$preset['by']];
        foreach ($regex as $expr){
            if (isset($preset['normalize']))
                $input = $preset['normalize']($input,'UTF-8');
            $input = preg_replace($expr, " ", $input);
        }
        return trim($input);
    }
}
