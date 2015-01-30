<?php
namespace  Ngram\Frequency;

class Letter implements Frequency
{
    private $data;
    private $unigram = [];
    public function __construct($data)
    {
        if (is_null($data) || empty($data)){
            throw new \Exception("No data, no n-gram.");
        }
        $this->data = $data;
    }
    private function prepare()
    {
        
        $count = strlen($this->data);
        for($i=0; $i< $count; $i++){
            array_push($this->unigram, $this->data[$i]);
        }
    }
    public function extract($by)
    {
        if (count($this->unigram)==0)
            $this->prepare();
        $size = count($this->unigram);
        $result = [];
        if ($by > $size){
            return [];
        }

        if ($by == $size){
            array_push($result,  $this->unigram);
            return $result;
        }

        $range = range(0, $size , $by);
        for ($i=0; $i<= $size; $i++){
            $slice = array_slice($this->unigram, $i, $by);
            if (count($slice)==$by)
                array_push($result,  $slice);
        }
        return $result;   
    }
}