<?php
namespace  Ngram\Tool\Ngram;

class Frequency implements Tool
{
    public static function get(array $ngram, array $ngramTo=null)
    {
        return array_count_values($ngram);
    }
}