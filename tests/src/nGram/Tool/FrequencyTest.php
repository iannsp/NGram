<?php
namespace  Ngram\Tool\Ngram;
use NGram\Frequency\Word;
class FrequencyTest extends \PHPUnit_Framework_TestCase
{
    public function testCounterUnigram()
    {
        $data = ['Ivo','viu','Ivo'];
        $expected =['Ivo'=>2, 'viu'=>1];
        $this->assertEquals($expected, Frequency::get($data));
    }
    public function testCounterBigram()
    {
        $data = ['Ivo viu','viu Uva','Uva frase'];
        $expected =['Ivo viu'=>1, 'viu Uva'=>1,'Uva frase'=>1];
        $this->assertEquals($expected, Frequency::get($data));
    }
    
    public function testCountBiGramWithRealData()
    {
        $data = unserialize('a:154:{i:0;s:12:"Arte Cultura";i:1;s:11:"Google Boys";i:2;s:14:"Cabelos Salão";i:3;s:10:"Cabelo dia";i:4;s:19:"Dicas Profissionais";i:5;s:11:"Faça você";i:6;s:11:"você mesma";i:7;s:15:"Querosse cabelo";i:8;s:18:"Tratamento tintura";i:9;s:11:"Salão Casa";i:10;s:11:"Corpo forma";i:11;s:13:"Beijos batons";i:12;s:14:"Mitos verdades";i:13;s:8:"Para sua";i:14;s:8:"sua pele";i:15;s:13:"Social Beauty";i:16;s:14:"Blog Carreiras";i:17;s:16:"Blog Crescimento";i:18;s:24:"Crescimento Profissional";i:19;s:13:"IOB Concursos";i:20;s:19:"Direitos Consumidor";i:21;s:13:"Imposto Renda";i:22;s:15:"IstoÉ Dinheiro";i:23;s:16:"Revista Dinheiro";i:24;s:14:"Dinheiro Rural";i:25;s:17:"Terra diversidade";i:26;s:4:"De 0";i:27;s:3:"0 a";i:28;s:5:"a 100";i:29;s:12:"Salão carro";i:30;s:18:"Salãoutomóvel SP";i:31;s:11:"Guia clubes";i:32;s:10:"Fórmula 1";i:33;s:10:"Total Race";i:34;s:9:"360 graus";i:35;s:17:"Brasileiro Série";i:36;s:17:"Brasileiro Série";i:37;s:8:"Série B";i:38;s:12:"Cruzeiro Web";i:39;s:18:"Campeonato Carioca";i:40;s:18:"Campeonato Gaúcho";i:41;s:22:"Campeonato Catarinense";i:42;s:18:"Campeonato Mineiro";i:43;s:19:"Campeonato Paulista";i:44;s:12:"Mercado Bola";i:45;s:9:"Copa 2018";i:46;s:11:"Copa Brasil";i:47;s:13:"Copa Nordeste";i:48;s:9:"Copa São";i:49;s:10:"São Paulo";i:50;s:8:"Lance TV";i:51;s:14:"Mundial Clubes";i:52;s:8:"SPFC net";i:53;s:16:"Torcida Flamengo";i:54;s:19:"Campeonato Cearense";i:55;s:21:"Campeonato Paranaense";i:56;s:23:"Campeonato Pernambucano";i:57;s:20:"Seleção Brasileira";i:58;s:12:"Blog Boleiro";i:59;s:16:"Blogntrando Jogo";i:60;s:11:"Tudo Timão";i:61;s:11:"Verdão Web";i:62;s:15:"Sulmericano Sub";i:63;s:6:"Sub 20";i:64;s:8:"Rio 2016";i:65;s:11:"Blog Timeut";i:66;s:18:"Jogos Panmericanos";i:67;s:13:"Jogos casuais";i:68;s:11:"Outer Space";i:69;s:10:"Papa jogos";i:70;s:13:"Jogos meninas";i:71;s:18:"Aparecida Liberato";i:72;s:9:"Feng Shui";i:73;s:13:"Blog Katylene";i:74;s:9:"Blog Spot";i:75;s:8:"O Fuxico";i:76;s:7:"Site RG";i:77;s:11:"Oscar Filho";i:78;s:16:"Blogrlindo Grund";i:79;s:11:"Fashion Rio";i:80;s:15:"Famosos Fashion";i:81;s:11:"Fashion Rio";i:82;s:8:"Harper s";i:83;s:8:"s bazaar";i:84;s:19:"Isabella Fiorentino";i:85;s:10:"Moda Mundo";i:86;s:9:"Nova York";i:87;s:12:"Famosos SPFW";i:88;s:10:"Tempo Moda";i:89;s:9:"Amor sexo";i:90;s:10:"Blog Mimis";i:91;s:16:"Casa Decoração";i:92;s:10:"Daqui Dali";i:93;s:12:"IstoÉ Gente";i:94;s:13:"Tão Feminino";i:95;s:9:"Vida mãe";i:96;s:10:"Cifra Club";i:97;s:7:"Kiss FM";i:98;s:20:"Independência Morte";i:99;s:13:"Planeta Terra";i:100;s:10:"Terra Live";i:101;s:10:"Live Music";i:102;s:19:"Território Música";i:103;s:9:"Palco Mp3";i:104;s:19:"Atualidades Direito";i:105;s:10:"Diário SP";i:106;s:8:"Rede Bom";i:107;s:7:"Bom Dia";i:108;s:15:"Revista Planeta";i:109;s:12:"Colégio Web";i:110;s:11:"Você sabia";i:111;s:10:"Blog Comou";i:112;s:8:"Comou me";i:113;s:16:"me sintoleição";i:114;s:10:"Dupla sena";i:115;s:15:"Loteria Federal";i:116;s:9:"Mega sena";i:117;s:15:"América Latina";i:118;s:14:"Oriente Médio";i:119;s:17:"Hardware software";i:120;s:12:"Negócios TI";i:121;s:13:"Script Brasil";i:122;s:14:"Revista Select";i:123;s:14:"Revista Status";i:124;s:18:"Retrospectiva 2014";i:125;s:10:"Blog Mimis";i:126;s:10:"Boa saúde";i:127;s:19:"Caloriass alimentos";i:128;s:19:"Calorias atividades";i:129;s:12:"Saúde Bucal";i:130;s:14:"Boa higieneral";i:131;s:20:"Condições Médicas";i:132;s:14:"Estágios vida";i:133;s:16:"Problemas Comuns";i:134;s:8:"Terra TV";i:135;s:9:"A Fazenda";i:136;s:6:"BBB 15";i:137;s:16:"Geração Brasil";i:138;s:7:"Sala TV";i:139;s:9:"The Voice";i:140;s:12:"Voice Brasil";i:141;s:12:"vc repórter";i:142;s:11:"Banda Larga";i:143;s:17:"Concurso Público";i:144;s:13:"Disco Virtual";i:145;s:6:"E Mail";i:146;s:12:"Nuvem Livros";i:147;s:11:"Terra Clube";i:148;s:13:"Terra Resolve";i:149;s:12:"© COPYRIGHT";i:150;s:14:"COPYRIGHT 2014";i:151;s:10:"2014 TERRA";i:152;s:14:"TERRA NETWORKS";i:153;s:10:"NETWORKS S";}');
/*
            $this->assertEquals($expected, Frequency::get($data));
        var_dump($data);
*/
    }
}