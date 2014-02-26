<?php

/* BancarelValentinPortefolioBundle:Portefolio:index.html.twig */
class __TwigTemplate_bc3b095b54134462719e5c1ba15971e48d36bedcfe5950d95a4bbabf50261e97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
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
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    Portefolio de Mr Bancarel Valentin
";
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "    <h2 class=\"slogan align-center\">Bienvenue sur mon portefolio</h2>

    <div class=\"one-half\">
        <p>Je m'appelle <strong>Valentin Bancarel</strong>, j'ai 19 ans et je suis actuellement étudiant en 2ème année de <strong>BTS SIO</strong> 
            (Services Informatiques aux Organisations), spécialité <strong>SLAM</strong> (Solutions Logicielles 
             et Applications Métiers) en formation continue au lycée <a href='http://www.monnet-mermoz.fr/'>Jean Monnet</a> d'aurillac. Pour plus d'information 
             sur cette formation, vous puvez consulter <a href='http://archives.reseaucerta.org/sio/'>la fiche du BTS SIO</a> sur le reseau certa. </p>
    </div>
    <div class=\"one-half last\">
         <p>J'ai créé ce portfolio dans le cadre de ma formation afin de mettre a disposition les différentes competences
             acquise et mes travaux réalisés durant ces 2 années de BTS que ce soit durant les activité et Projet Personnel Encadré réaliser en cours,
             mais deux stages en entreprise, ou encore dans le cadre de ma <a href='";
        // line 20
        echo $this->env->getExtension('routing')->getPath("portefolio_veille");
        echo "'>veille technologique</a>.
    </div>
    <div class=\"clear\"></div>



    <h2 class=\"slogan align-center\">Ma Formation & Mon Parcours</h2>
    <div class=\"one-third last\">
         <p>
             Issu d'un Baccalauréat Sciences et Techniques de l'Ingenieur (STI), je poursuis donc mes études en <strong>BTS SIO</strong>, 
             dans l'objectif de continuer ensuite mes études, pour me spécialiser dans le <strong>développement Web</strong> ou 
                 d'<strong>aplications mobiles</strong>. Tous cela dans l'optique d'en faire un jour mon metier.
         </p>
    </div>
    <div class=\"two-third\">
         <p>
             J'ai à mon actif deux stage en entreprise réaliser dans le cadre de ma formation, ces stage
             d'une durée de 5 semaines ce sontt derouler dans l'entreprise <a href=\"http://www.archivage-visy.fr/\">Michel Visy Archivage</a>
             a Aurillac, le premier stage a donner suite a un contrat de travail d'une durée de 
             trois semaine supplementaire. De ce fait, je connais bien les relations avec les clients ainsi que le travail en 
             milieu professionnel.
             Pour plus d'informations sur mon parcour professionnel, vous pouvez consulter mon <a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("portefolio_cv");
        echo "\">CV</a>
         </p>
    </div>
";
    }

    public function getTemplateName()
    {
        return "BancarelValentinPortefolioBundle:Portefolio:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 20,  161 => 124,  34 => 4,  346 => 158,  336 => 15,  331 => 11,  325 => 159,  323 => 158,  319 => 157,  315 => 156,  311 => 155,  306 => 153,  302 => 152,  290 => 149,  286 => 148,  282 => 147,  251 => 119,  244 => 115,  237 => 111,  223 => 103,  216 => 99,  198 => 86,  188 => 79,  180 => 74,  174 => 71,  165 => 67,  124 => 49,  90 => 34,  84 => 33,  77 => 41,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 85,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 151,  294 => 150,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 22,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 107,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 38,  71 => 19,  67 => 15,  63 => 29,  59 => 14,  38 => 6,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 21,  46 => 7,  27 => 4,  44 => 12,  31 => 3,  28 => 3,  201 => 92,  196 => 85,  183 => 82,  171 => 61,  166 => 71,  163 => 66,  158 => 67,  156 => 66,  151 => 62,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 45,  105 => 40,  91 => 27,  62 => 23,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 16,  69 => 25,  47 => 13,  40 => 9,  37 => 8,  22 => 2,  246 => 90,  157 => 63,  145 => 59,  139 => 58,  131 => 53,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 41,  101 => 32,  98 => 61,  96 => 37,  83 => 25,  74 => 14,  66 => 24,  55 => 15,  52 => 19,  50 => 14,  43 => 8,  41 => 7,  35 => 11,  32 => 4,  29 => 3,  209 => 95,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 68,  164 => 125,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 28,  64 => 17,  60 => 6,  57 => 21,  54 => 10,  51 => 14,  48 => 13,  45 => 15,  42 => 9,  39 => 8,  36 => 5,  33 => 4,  30 => 7,);
    }
}
