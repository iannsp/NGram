<?php
namespace Ngram;
/*
This class expose the definition of term Size into N-gram domain
*/

class Size implements \Iterator{
    private $size = [];
    private $position=0;
    public function __construct(array $size)
    {
        $this->size = $size;
    }
    function rewind() {
        $this->position = 0;
    }

    function current() {
        return $this->size[$this->position];
    }

    function key() {
        return $this->position;
    }

    function next() {
        ++$this->position;
    }

    function valid() {
        return isset($this->size[$this->position]);
    }    
}