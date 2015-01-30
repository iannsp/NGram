<?php
namespace  Ngram\Tool\Ngram;

class Frequency implements Tool
{
    public static function get(array $ngram, array $ngramTo=null)
    {
        $strings = [];
        foreach ($ngram as $idx => $gram){
            $strings[$idx] = implode(" ",$gram);
        }
        $result =  array_count_values($strings);
        $count = [];
        foreach($result as $nGramString=> $k){
            $count[]=[ $nGramString,'count'=>$k];
        }
        return $count;
    }
}