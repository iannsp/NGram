<?php
namespace NGram\Tool\NGram;

interface Tool
{
    public static function get(array $ngram, array $ngramTo=null);
}