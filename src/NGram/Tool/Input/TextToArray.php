<?php
namespace Ngram\Tool\Input;

class TextToArray
{
    const SPLIT_BY_CR = "\n";
    const SPLIT_BY_DOT = ".";
    public static function get($input,array $preset=null)
    {
        return explode($preset['split'], $input);
    }
}