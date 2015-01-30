<?php
namespace  Ngram\Tool\Ngram;

class Counter implements Tool
{
    public static function get(array $ngram, array $ngramTo=null)
    {
        return count($ngram);
    }
}