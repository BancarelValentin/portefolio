<?php

/* BancarelValentinPortefolioBundle:Portefolio:veille.html.twig */
class __TwigTemplate_9a4ef8b830a7a7cd6c28e2f68855a84ea86a6fca940d5c7b925effa26a1af46c extends Twig_Template
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

    // line 2
    public function block_title($context, array $blocks = array())
    {
        // line 3
        echo "    Veille technologique
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "    <h2 class=\"slogan align-center\">Veille technologique</h2>

    <div class=\"one-third\">
         <p>Durant notre formation, il nous est demander de choisir un sujet de l'actualite que nous devons suivre et mettre a 
             jour sur ce portefolio, ce sujet doit bien évidement avoir un rapport avec le monde de l'informatique en generale
             cela peut aussi bien etre un logiciel, un protocole de communication, une norme, un appareil Hi-Tech,etc</p>
    </div>    
    
    <div class=\"one-third\">
         <p>Personellement, j'ai choisi de m'interesser a un micro ordinateur, le <a href='http://www.raspberrypi.org/'>Raspberry Pi</a>,
             ce PC malgre sa petite taille est tout de meme assez puissant pour faire tourner differentes distributions
             de LINUX dont une lui étant proprement dédié: Raspbian.</p>
    </div>    
    
    <div class=\"one-third-last\">
         <p>Le Raspberry Pi etant initialement concu pour les pays en voie de developpement ainsi que pour encourager l'aprentissage
             de la programation, de nombreux infonrmaticien bidouilleurs et autre technophiles l'utilise pour realiser de 
             <a href='http://korben.info/idees-raspberry-pi.html'>nombreux projet</a> allant du plus simple au plus original en passant par les plus fou.</p>
    </div>    
        <div class=\"clear\"></div>
    
    <hr>
    
    <header class=\"page-header\">
         <h1 class=\"page-title\">
             Mes recherches
         </h1>
         <ul id=\"portfolio-items-filter\">
              <li>Recherche a afficher:</li>
              <li><a data-categories=\"*\">Tout</a></li>
              <li><a data-categories=\"RPI\">Raspberry Pi</a></li>
              <li><a data-categories=\"SF2\">Symfony 2</a></li>
         </ul>
    </header>

    <section id=\"portfolio-items\" class=\"clearfix\">
    ";
        // line 44
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesReals"]) ? $context["lesReals"] : $this->getContext($context, "lesReals")));
        foreach ($context['_seq'] as $context["_key"] => $context["uneReal"]) {
            // line 45
            echo "            ";
            $context["dataCat"] = twig_slice($this->env, $this->getAttribute((isset($context["uneReal"]) ? $context["uneReal"] : $this->getContext($context, "uneReal")), "id"), 0, 1);
            // line 46
            echo "        <article class=\"one-half\" data-categories=\"";
            echo twig_escape_filter($this->env, (isset($context["dataCat"]) ? $context["dataCat"] : $this->getContext($context, "dataCat")), "html", null, true);
            echo "\">
            <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("portefolio_show", array("id" => $this->getAttribute((isset($context["uneReal"]) ? $context["uneReal"] : $this->getContext($context, "uneReal")), "id"))), "html", null, true);
            echo "\"  title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["uneReal"]) ? $context["uneReal"] : $this->getContext($context, "uneReal")), "titre"), "html", null, true);
            echo "\">
                 <img src=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((("bundles/public/images/realisations/" . $this->getAttribute((isset($context["uneReal"]) ? $context["uneReal"] : $this->getContext($context, "uneReal")), "id")) . "/") . $this->getAttribute((isset($context["uneReal"]) ? $context["uneReal"] : $this->getContext($context, "uneReal")), "urlimage"))), "html", null, true);
            echo "\" width=\"350px\" height=\"200px\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["uneReal"]) ? $context["uneReal"] : $this->getContext($context, "uneReal")), "titre"), "html", null, true);
            echo "\">
            </a>
            <a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("portefolio_show", array("id" => $this->getAttribute((isset($context["uneReal"]) ? $context["uneReal"] : $this->getContext($context, "uneReal")), "id"))), "html", null, true);
            echo "\" class=\"project-meta\">
                 <h5 class=\"title\">";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["uneReal"]) ? $context["uneReal"] : $this->getContext($context, "uneReal")), "titre"), "html", null, true);
            echo "</h5>
                 <span class=\"categories\">
                         ";
            // line 53
            if (((isset($context["dataCat"]) ? $context["dataCat"] : $this->getContext($context, "dataCat")) == "RPI")) {
                // line 54
                echo "                                Raspberry Pi
                         ";
            } elseif (((isset($context["dataCat"]) ? $context["dataCat"] : $this->getContext($context, "dataCat")) == "SF2")) {
                // line 56
                echo "                                Symfony 2
                         ";
            }
            // line 58
            echo "                     </span> 
            </a>
        </article>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['uneReal'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "    </section>
";
    }

    public function getTemplateName()
    {
        return "BancarelValentinPortefolioBundle:Portefolio:veille.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 56,  114 => 54,  155 => 56,  126 => 42,  97 => 29,  76 => 23,  53 => 20,  161 => 124,  34 => 4,  346 => 158,  336 => 15,  331 => 11,  325 => 159,  323 => 158,  319 => 157,  315 => 156,  311 => 155,  306 => 153,  302 => 152,  290 => 149,  286 => 148,  282 => 147,  251 => 119,  244 => 115,  237 => 111,  223 => 103,  216 => 99,  198 => 86,  188 => 79,  180 => 74,  174 => 62,  165 => 67,  124 => 49,  90 => 47,  84 => 33,  77 => 41,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 85,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 151,  294 => 150,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 50,  132 => 51,  128 => 49,  107 => 51,  61 => 18,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 107,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 58,  143 => 56,  135 => 53,  119 => 42,  102 => 38,  71 => 22,  67 => 15,  63 => 29,  59 => 17,  38 => 6,  94 => 28,  89 => 27,  85 => 46,  75 => 17,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 44,  46 => 7,  27 => 4,  44 => 10,  31 => 3,  28 => 3,  201 => 92,  196 => 85,  183 => 82,  171 => 61,  166 => 60,  163 => 66,  158 => 67,  156 => 66,  151 => 55,  142 => 59,  138 => 54,  136 => 56,  121 => 39,  117 => 37,  105 => 40,  91 => 27,  62 => 23,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 24,  72 => 16,  69 => 21,  47 => 13,  40 => 8,  37 => 7,  22 => 2,  246 => 90,  157 => 63,  145 => 59,  139 => 58,  131 => 62,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 41,  101 => 32,  98 => 61,  96 => 48,  83 => 25,  74 => 14,  66 => 20,  55 => 15,  52 => 19,  50 => 14,  43 => 8,  41 => 7,  35 => 11,  32 => 3,  29 => 2,  209 => 95,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 68,  164 => 125,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 51,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 58,  116 => 41,  112 => 53,  109 => 34,  106 => 36,  103 => 50,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 45,  80 => 19,  73 => 28,  64 => 19,  60 => 6,  57 => 21,  54 => 10,  51 => 14,  48 => 13,  45 => 15,  42 => 9,  39 => 8,  36 => 5,  33 => 4,  30 => 7,);
    }
}
