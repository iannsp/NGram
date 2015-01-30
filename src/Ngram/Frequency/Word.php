<?php
namespace  Ngram\Frequency;
use Ngram\Tool\Input\BlackList;
class Word implements Frequency
{
    private $data;
    private $unigram = [];
    private $blacklist;
    public function __construct($data, array $blacklist=[])
    {
        if (is_null($data) || empty($data)){
            throw new \Exception("No data, no n-gram.");
        }
        $this->data = $data;
        $this->unigram = BlackList::get( explode(" ",$data), ['words'=>$blacklist]);
        
    }
    public function extract($by)
    {
        $size = count($this->unigram);
        $result = [];
        if ($by > $size){
            return [];
        }
        if ($by == $size){
            return [implode(" ",$this->unigram)];
        }

        $range = range(0, $size , $by);
        for ($i=0; $i<= $size; $i++){
            $slice = array_slice($this->unigram, $i, $by);
            if (count($slice)==$by)
                array_push($result,  implode(" ",$slice));
        }
        return $result;   
    }
}