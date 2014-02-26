<?php

/* BancarelValentinPortefolioBundle:Portefolio:cv.html.twig */
class __TwigTemplate_16006fb9ebd4fa85d337fe930ea52dedb131115643f6ed1d43cbbaccd1d40ea8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("base.html.twig");

        $this->blocks = array(
            'meta' => array($this, 'block_meta'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'script' => array($this, 'block_script'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta($context, array $blocks = array())
    {
        // line 4
        echo "
";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        // line 9
        echo "    Curiculum Vitae de Mr Bancarel Valentin
";
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        // line 14
        echo "    <h1 class=\"page-title\">Curiculum vitae</h1>

    <span class=\"acc-trigger\">
        <a href=\"#\">Competences</a>
    </span>
    <div class=\"acc-container\">
        <div class=\"content\">
            Developpement web
            <ul class=\"check dotted\">
                <li>HTML</li>
                <li>PHP(Symfony 2)</li>
                <li>MySQL</li>
                <li>CSS</li>
            </ul>
            <br>
            
            Developpement applicatif:
            <ul class=\"check dotted\">
                <li>C#</li>
                <li>JAVA</li>
                <li>Objectiv-C (base)</li>
            </ul>
            <br>
            
            Base de données:
            <ul class=\"check dotted\">
                <li>MySQL</li>
                <li>SQL Server</li>
            </ul>
            <br>
            
            Logiciels utilisés:
            <ul class=\"check dotted\">
                <li>Microsoft Visual Studio 2010-2012-2013</li>
                <li>Netbeans 7.4</li>
                <li>OS X server 10.8-10.9</li>
            </ul>
            <br>
            
            Environement utilisé:
            <ul class=\"check dotted\">
                <li>Mac OSX 10.9: MAMP</li>
                <li>Ubuntu 12.04: Apache/MySQL/PHP</li>
                <li>Raspbian (Raspberry PI): Apache/MySQL/PHP</li>
                <li>Windows 7-8: WAMP-XAMP</li>
            </ul>
        </div>
    </div><!-- end .acc-container -->


    <span class=\"acc-trigger\">
        <a href=\"#\">Formations</a>
    </span>
    <div class=\"acc-container\">
        <div class=\"content\">
            <ul class=\"dash dotted\">
                <li>2005-2009: college prive Notre Dame des Miracles Mauriac</li>
                <li>2009-2012: BAC Sciences et Techniques de l'Industrie</li>
                <li>2012-2014: BTS Service Informatiques aux Organisations</li>
                <li>2012-2014: autoformation au language Objectiv-C et CSS notament gracce a <a href=\"http://www.teamtreehouse.com/valentinbancarel\">treehousse</a> et <a href=\"http://fr.openclassrooms.com/\">open classroom (anciennement le site du zero)</a></li>
                <li>Niveau d'anglais BTS+</li>
            </ul>
        </div>
    </div><!-- end .acc-container -->


    <span class=\"acc-trigger\">
        <a href=\"#\">Experiences professionels</a>
    </span>
    <div class=\"acc-container\">
        <div class=\"content\">
            <ul class=\"dash dotted\">
                <li>2009 à 2013: emploi saisonnier tous les étés dans une brasserie a salers (cantal)</li>
                <li>21 mai 2013 - 28 juin 2013: Stage en entreprise dans le cadre de mon BTS dans l' entreprise <a href=\"http://archives.reseaucerta.org/sio/\">Michel Visy Archivage</a> a Aurillac</li>
                <li>8 juillet 2013 - 25 juillet 2013: Developpement d'une application web pour l' entreprise <a href=\"http://archives.reseaucerta.org/sio/\">Michel Visy Archivage</a> a Aurillac</li>
                <li>27 janvier 2014 - 28 fevrier 2014: Stage en entreprise dans le cadre de mon BTS dans l' entreprise <a href=\"http://archives.reseaucerta.org/sio/\">Michel Visy Archivage</a> a Aurillac</li>
            </ul>
        </div>
    </div><!-- end .acc-container -->


    <span class=\"acc-trigger\">
        <a href=\"#\">Travaux personnels</a>
    </span>
    <div class=\"acc-container\">
        <div class=\"content\">
            <ul class=\"dash dotted\">
                <li>Developpmeent d'un site web pour le park de vtt lioran free bike park du lioran disponible <a href=\"www.lioranfreebikepark.tk\">ICI</a> qui n'est actuellement pas le site officiel</li>
                <li>Developpement de <a href=\"www.bancarelvalentin.tk\">ce portefolio</a> a l'aide d'une template css deja existante</li>
                <li>Mise en place  d'un serveur FTP, de l'hebergement de <a href=\"www.bancarelvalentin.tk\">ce portefolio</a> ainsi que d'autres services sur mon reseau local a l'aide d'os x server dans un premier temp puis sur un Raspberry PI</li>
            </ul>
        </div>
    </div><!-- end .acc-container -->


    <span class=\"acc-trigger\">
        <a href=\"#\">Interets personnels</a>
    </span>
    <div class=\"acc-container\">
        <div class=\"content\">
            <ul class=\"dash dotted\">
                <li>Devellopement (Web-Applicatif)</li>
                <li>VTT de descente</li>
                <li>Ski/Snowboard</li>
            </ul>
        </div>
    </div><!-- end .acc-container -->
";
    }

    // line 124
    public function block_script($context, array $blocks = array())
    {
        // line 125
        echo "
";
    }

    public function getTemplateName()
    {
        return "BancarelValentinPortefolioBundle:Portefolio:cv.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 124,  34 => 4,  346 => 158,  336 => 15,  331 => 11,  325 => 159,  323 => 158,  319 => 157,  315 => 156,  311 => 155,  306 => 153,  302 => 152,  290 => 149,  286 => 148,  282 => 147,  251 => 119,  244 => 115,  237 => 111,  223 => 103,  216 => 99,  198 => 86,  188 => 79,  180 => 74,  174 => 71,  165 => 67,  124 => 49,  90 => 34,  84 => 33,  77 => 29,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 85,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 151,  294 => 150,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 22,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 107,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 38,  71 => 19,  67 => 15,  63 => 29,  59 => 14,  38 => 6,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 21,  46 => 7,  27 => 4,  44 => 12,  31 => 3,  28 => 3,  201 => 92,  196 => 85,  183 => 82,  171 => 61,  166 => 71,  163 => 66,  158 => 67,  156 => 66,  151 => 62,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 45,  105 => 40,  91 => 27,  62 => 23,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 16,  69 => 25,  47 => 13,  40 => 13,  37 => 12,  22 => 2,  246 => 90,  157 => 63,  145 => 59,  139 => 58,  131 => 53,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 41,  101 => 32,  98 => 61,  96 => 37,  83 => 25,  74 => 14,  66 => 24,  55 => 15,  52 => 19,  50 => 14,  43 => 8,  41 => 7,  35 => 11,  32 => 3,  29 => 2,  209 => 95,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 68,  164 => 125,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 28,  64 => 17,  60 => 6,  57 => 21,  54 => 10,  51 => 14,  48 => 13,  45 => 15,  42 => 9,  39 => 8,  36 => 5,  33 => 4,  30 => 7,);
    }
}
