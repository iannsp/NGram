<?php
namespace NGram\Tool\NGram;

class Frequency implements Tool
{
    public static function get(array $ngram, array $ngramTo=null)
    {
        $strings = [];
        foreach ($ngram as $idx => $gram){
            $strings[$idx] = serialize($gram);
        }
        $result =  array_count_values($strings);
        $count = [];
        foreach($result as $nGramString=> $k){
            $count[]=[ unserialize($nGramString),'count'=>$k];
        }
        return $count;
    }
}