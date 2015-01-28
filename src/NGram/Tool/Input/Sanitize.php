<?php
namespace Ngram\Tool\Input;

class Sanitize
{
    const PONCTUATION = "#[[:punct:]]#";
    public static function get($input,array $preset=null)
    {
        return preg_replace($preset['by'], " ", $input);
    }
}