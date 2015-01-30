<?php
namespace  Ngram\Tool\Input;

class HtmlToText
{
    public static function get($input,array $preset=null)
    {
        $html2txt = new \Html2Text\Html2Text($input);
        return $html2txt->getText();
    }
}