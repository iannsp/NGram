<?php
namespace  Ngram\Tool\Ngram;

interface Tool
{
    public static function get(array $ngram, array $ngramTo=null);
}