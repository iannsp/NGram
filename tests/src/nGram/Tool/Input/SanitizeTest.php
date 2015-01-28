<?php
namespace Ngram\Tool\Input;

class SanitizeTest extends \PHPUnit_Framework_TestCase
{
    
    public function testSanitizeSimple()
    {
        $text = 
            "?Primeiro, !!!!paragrafo.
            _ -segundo [paragrado.Tem mais no paragrafo.
        terceiro;";
        $expected =             
" Primeiro      paragrafo 
               segundo  paragrado Tem mais no paragrafo 
        terceiro ";
        $r = Sanitize::get($text, ['by'=>Sanitize::PONCTUATION]);
        $this->assertEquals($expected, $r);
    }
    
    public function testSanitizeTextFromHtml()
    {
        $text = " Brasil http://noticias.terra.com.br/brasil/ 

HADDAD ANUNCIA PROJETO PARA PUNIR ABUSO DE ÁGUA EM SÃO PAULO

PREFEITO PAULISTANO DISSE TAMBÉM QUE SE SURPREENDEU COM O ANÚNCIO DE
RODÍZIO, FEITO PELA SABESP, NESTA TERÇA-FEIRA

 28 Jan 2015 
 15h33 

 	* 
 	* 
 	* 
 	* 
 	* 
 	* 6
 	* comentários

 ";
     $r = Sanitize::get($text, ['by'=>Sanitize::PONCTUATION]);
     $this->assertEquals(" Brasil http noticias terra com br brasil 

HADDAD ANUNCIA PROJETO PARA PUNIR ABUSO DE ÁGUA EM SÃO PAULO

PREFEITO PAULISTANO DISSE TAMBÉM QUE SE SURPREENDEU COM O ANÚNCIO DE
RODÍZIO FEITO PELA SABESP NESTA TERÇA FEIRA

 28 Jan 2015 
 15h33 

 
 
 
 
 
 6
 comentários

 ", $r);
    }
    
}
