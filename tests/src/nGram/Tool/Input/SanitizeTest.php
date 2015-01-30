<?php
namespace  Ngram\Tool\Input;

class SanitizeTest extends \PHPUnit_Framework_TestCase
{
    
    public function testSanitizeSimple()
    {
        $text = 
            "?Primeiro, !!!!paragrafo.
            _ -segundo [paragrado.Tem mais no paragrafo.
        terceiro;";
        $expected =             
"Primeiro paragrafo 
 segundo paragrado Tem mais no paragrafo 
 terceiro";
        $r = Sanitize::get($text, ['by'=>Sanitize::PONCTUATION]);
        $this->assertEquals($expected, $r);
    }
    
    public function testSanitizeTextFromHtml()
    {
        $text = " Brasil   

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
     $this->assertEquals("Brasil 

HADDAD ANUNCIA PROJETO PARA PUNIR ABUSO DE ÁGUA EM SÃO PAULO

PREFEITO PAULISTANO DISSE TAMBÉM QUE SE SURPREENDEU COM O ANÚNCIO DE
RODÍZIO FEITO PELA SABESP NESTA TERÇA FEIRA

 28 Jan 2015 
 15h33 

 
 
 
 
 
 6
 comentários", $r);
    }
    public function testUrlSanitizer()
    {
        $txts = ['[http://esporte.uol.com.br/futebol/times/internacional/]','[http://click.uol.com.br/?rf=home2011-box-assine&u=http://clicklogger.rm.uol.com.br/?prd=11&grp=src:13;chn:0;creative:linkfixo_home2014_0800_esq;thm:assine&msr=Cliques%20de%20Origem:1&oper=11&redir=http://assine.uol.com.br/]'];
        foreach ($txts as $txt){
            $r = Sanitize::get($txt, ['by'=>Sanitize::PONCTUATION]);
            $this->assertEquals("",$r);
        }
    }
    
    public function testNormalizeToUp()
    {
        $txts = ['lá É o batman Î Í ÇÃ'];
        foreach ($txts as $txt){
            $r = Sanitize::get($txt, ['by'=>Sanitize::PONCTUATION,'normalize'=>Sanitize::NORMALIZETOLOWER]);
            $this->assertEquals('lá é o batman î í çã',$r);
        }
        
    }
}
