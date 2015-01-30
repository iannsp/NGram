<?php
namespace Ngram\Tool\Input;

class BlackList
{
    public static function get($input,array $preset=null)
    {
        $blacklist = $preset['words'];
        foreach ($blacklist as $word){
            $input = str_replace($word, "", $input);
        }
        return $input;
    }
}
