<?php
namespace Ngram;

class NGram
{
    const WORD_FREQUENCY = 0;
    const LETTER_FREQUENCY = 1;
    private $size;
    private $resultSet = [];
    public function __construct(Size $size)
    {
        $this->size = $size;
    }
    
    public function generate($data, $unit = SELF::WORD_FREQUENCY)
    {
        
    }
}