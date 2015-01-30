<?php
namespace Ngram\Tool\Input;

class BlackList
{
    public static function get($input,array $preset=null)
    {
        $result = [];
        $blacklist = $preset['words'];
        foreach ($input as $word){
            if (in_array($word, $blacklist))
                continue;
            $result[] =$word;
        }
        return $result;
    }
}
