<?php
namespace Ngram\Tool\Input;

interface Tool
{
    public static function get($input, array $preset=null);
}