<?php
namespace  Ngram\Tool\Input;

class HtmlToTextTest extends \PHPUnit_Framework_TestCase
{
    
    public function testSimpleHtml()
    {
        $result =HtmlToText::get('Hello, &quot;<b>world</b>&quot;');
        $this->AssertEquals("Hello, \"WORLD\"", $result);
    }
    public function testSniptfromTerraPorta()
    {
        $html = '<div class="ctnHeadline">
                    <!--// S1 para tablet -->
                    

                    
                        <div class="channel channelHeader">
                            <a class="border-news hover-news" href="http://noticias.terra.com.br/brasil/">Brasil</a>
                        </div>
                    
                    
                    <div itemprop="headline" class="title headline">
                        <h1>Haddad anuncia projeto para punir abuso de água em São Paulo</h1>
                    </div>
                    
                    
                        <div itemprop="description" class="subtitle subtitle--M">
                            <h2>Prefeito paulistano disse também que se surpreendeu com o anúncio de rodízio, feito pela Sabesp, nesta terça-feira</h2>
                        </div>
                    

                    
                    <!--// Updated at: 01/10/2014 //-->
















                                <!--// BBC TESTING TO INCLUDE AUTOR //-->
                                
                                
                                    
                                
                                
                                

                                
                                    
                                    
                                        <!--// NAO É BBC  - INI //-->
                                        <!--// Autor inicio //-->
                                        
                                    
                                


                    <div class="datetime subtitle--XS">
                        
                            
                                
                                
                                      <!--// sem foto nao mobile //-->
                                      <div data-timestamp="1422466380000" datetime="2015-01-28T17:33:00+0000" itemprop="datePublished" class="date">
                                         <div class="calendar calendar_gray_dark16"></div>
                                         <span class="day-month">28 Jan</span><span class="year"> 2015</span>
                                         <div class="icon clock_gray16"></div>
                                         <span class="time">15h33</span>
                                      </div>
                                      <div class="rescence">
                                         <span>
                                            
                                         </span>
                                      </div>
                                
                            
                        
                    </div>

                    <!-- CONTENT SHARE-->
                    
                    
                    
                    <div class="contentShare">
                        <ul class="socialWrapper">
                            <li td.idz="content_contentshare_facebook" class="facebook32 iconFacebook iconSocial"></li>
                            <li td.idz="content_contentshare_twitter" class="twitter32 iconTwitter iconSocial"></li>
                            <li td.idz="content_contentshare_gplus" class="g_plus32 iconGplus iconSocial"></li>
                            <li td.idz="content_contentshare_pinterest" class="pinterest32 iconPinterest iconSocial"></li>
                            <li class="separator iconSocial"><img src="http://s1.trrsf.com/fe/portal/content/_img/separador.png"></li>
                            <li td.idz="content_comments_commenticon" class="comment32 iconComment iconSocial"><a href="#disqus_thread">6</a></li>
                            <li class="commentLabel iconSocial"><span>comentários</span></li>
                        </ul>
                    </div>
                    
                    
                    <!--// CONTENT SHARE-->

                </div>';
                $result =HtmlToText::get($html);
                $this->AssertEquals(" Brasil [http://noticias.terra.com.br/brasil/] 

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

 ", $result);
    }
}
