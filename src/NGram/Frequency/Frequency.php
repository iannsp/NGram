<?php
namespace NGram\Frequency;

interface Frequency{
    public function __construct($data);
    public function extract($by);
}