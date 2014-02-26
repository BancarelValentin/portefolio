<?php

/* BancarelValentinPortefolioBundle:Portefolio:show.html.twig */
class __TwigTemplate_23a02e32faa7b99d76f526651de8bc532c2c7faa4ced3bfa6db81048fe5a9bbb extends Twig_Template
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
        echo "Realisation
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "
<header class=\"page-header\">
    <h2 class=\"project-title\">";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["laReal"]) ? $context["laReal"] : $this->getContext($context, "laReal")), "titre"), "html", null, true);
        echo "</h2>
</header>

<a>
    <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((("bundles/public/images/realisations/" . $this->getAttribute((isset($context["laReal"]) ? $context["laReal"] : $this->getContext($context, "laReal")), "id")) . "/") . $this->getAttribute((isset($context["laReal"]) ? $context["laReal"] : $this->getContext($context, "laReal")), "urlimage"))), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["laReal"]) ? $context["laReal"] : $this->getContext($context, "laReal")), "titre"), "html", null, true);
        echo "\" class=\"entry-image\"/>
</a>

    ";
        // line 17
        $context["reference"] = $this->getAttribute((isset($context["laReal"]) ? $context["laReal"] : $this->getContext($context, "laReal")), "id");
        // line 18
        echo "
    ";
        // line 19
        if ((twig_length_filter($this->env, (isset($context["leSlide"]) ? $context["leSlide"] : $this->getContext($context, "leSlide"))) > 0)) {
            // line 20
            echo "        <section  id=\"features-slider\" class=\"ss-slider\">
                    ";
            // line 21
            $context["num"] = 0;
            // line 22
            echo "                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["leSlide"]) ? $context["leSlide"] : $this->getContext($context, "leSlide")));
            foreach ($context['_seq'] as $context["_key"] => $context["uneImage"]) {
                // line 23
                echo "                        ";
                $context["num"] = ((isset($context["num"]) ? $context["num"] : $this->getContext($context, "num")) + 1);
                // line 24
                echo "            <article class=\"slide\">
                <img src=\"";
                // line 25
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((("bundles/public/images/realisations/" . $this->getAttribute((isset($context["laReal"]) ? $context["laReal"] : $this->getContext($context, "laReal")), "id")) . "/slide/") . $this->getAttribute((isset($context["uneImage"]) ? $context["uneImage"] : $this->getContext($context, "uneImage")), "url"))), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["uneImage"]) ? $context["uneImage"] : $this->getContext($context, "uneImage")), "titre"), "html", null, true);
                echo "\" width=\"940\" height=\"550\" class=\"slide-bg-image\" />
                <div class=\"slide-button\">
                    <span class=\"dropcap\">";
                // line 27
                echo twig_escape_filter($this->env, (isset($context["num"]) ? $context["num"] : $this->getContext($context, "num")), "html", null, true);
                echo "</span>
                    <h5>";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["uneImage"]) ? $context["uneImage"] : $this->getContext($context, "uneImage")), "titre"), "html", null, true);
                echo "</h5>
                    <span class=\"description\">";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["uneImage"]) ? $context["uneImage"] : $this->getContext($context, "uneImage")), "soustitre"), "html", null, true);
                echo "</span>
                </div>
                <div class=\"slide-content\">
                    <h2>";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["uneImage"]) ? $context["uneImage"] : $this->getContext($context, "uneImage")), "titre"), "html", null, true);
                echo "</h2>
                    <p>";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["uneImage"]) ? $context["uneImage"] : $this->getContext($context, "uneImage")), "description"), "html", null, true);
                echo "</p>
                </div>
            </article>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['uneImage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "        </section>
    ";
        }
        // line 39
        echo "
<div class=\"entry-body\">
    <a>
        <h1 class=\"title\">";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["laReal"]) ? $context["laReal"] : $this->getContext($context, "laReal")), "titre"), "html", null, true);
        echo "</h1>
    </a>
        ";
        // line 44
        echo $this->getAttribute((isset($context["laReal"]) ? $context["laReal"] : $this->getContext($context, "laReal")), "description");
        echo "         
</div>

<div class=\"entry-meta\">
    <ul>
        <li><a><span class=\"post-format\">Permalink</span></a></li>
        <li><span class=\"title\">Poster le:</span> <br><a>";
        // line 50
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["laReal"]) ? $context["laReal"] : $this->getContext($context, "laReal")), "date"), "d-m-y"), "html", null, true);
        echo "</a></li>
        <li><span class=\"title\">A:</span> <a>";
        // line 51
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["laReal"]) ? $context["laReal"] : $this->getContext($context, "laReal")), "date"), "H:m"), "html", null, true);
        echo "</a></li>
    </ul>
</div>

    ";
        // line 55
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesDocs"]) ? $context["lesDocs"] : $this->getContext($context, "lesDocs")));
        foreach ($context['_seq'] as $context["_key"] => $context["unDoc"]) {
            // line 56
            echo "<hr>
<h4 class='titreDoc'>
    <a href='";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["unDoc"]) ? $context["unDoc"] : $this->getContext($context, "unDoc")), "url"), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["unDoc"]) ? $context["unDoc"] : $this->getContext($context, "unDoc")), "titre"), "html", null, true);
            echo "</a>
</h4>
<iframe style=\"border: 1px solid #f15a23; width:100%; height:300px;\" src=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["unDoc"]) ? $context["unDoc"] : $this->getContext($context, "unDoc")), "url"), "html", null, true);
            echo "?embedded=true\"></iframe>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unDoc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "
";
    }

    public function getTemplateName()
    {
        return "BancarelValentinPortefolioBundle:Portefolio:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 56,  126 => 42,  97 => 29,  76 => 23,  53 => 20,  161 => 124,  34 => 4,  346 => 158,  336 => 15,  331 => 11,  325 => 159,  323 => 158,  319 => 157,  315 => 156,  311 => 155,  306 => 153,  302 => 152,  290 => 149,  286 => 148,  282 => 147,  251 => 119,  244 => 115,  237 => 111,  223 => 103,  216 => 99,  198 => 86,  188 => 79,  180 => 74,  174 => 62,  165 => 67,  124 => 49,  90 => 34,  84 => 33,  77 => 41,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 85,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 151,  294 => 150,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 50,  132 => 51,  128 => 49,  107 => 33,  61 => 18,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 107,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 58,  143 => 56,  135 => 53,  119 => 42,  102 => 38,  71 => 22,  67 => 15,  63 => 29,  59 => 17,  38 => 6,  94 => 28,  89 => 27,  85 => 25,  75 => 17,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 21,  46 => 7,  27 => 4,  44 => 10,  31 => 3,  28 => 3,  201 => 92,  196 => 85,  183 => 82,  171 => 61,  166 => 60,  163 => 66,  158 => 67,  156 => 66,  151 => 55,  142 => 59,  138 => 54,  136 => 56,  121 => 39,  117 => 37,  105 => 40,  91 => 27,  62 => 23,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 24,  72 => 16,  69 => 21,  47 => 13,  40 => 8,  37 => 7,  22 => 2,  246 => 90,  157 => 63,  145 => 59,  139 => 58,  131 => 44,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 41,  101 => 32,  98 => 61,  96 => 37,  83 => 25,  74 => 14,  66 => 20,  55 => 15,  52 => 19,  50 => 14,  43 => 8,  41 => 7,  35 => 11,  32 => 3,  29 => 2,  209 => 95,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 68,  164 => 125,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 51,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 25,  80 => 19,  73 => 28,  64 => 19,  60 => 6,  57 => 21,  54 => 10,  51 => 14,  48 => 13,  45 => 15,  42 => 9,  39 => 8,  36 => 5,  33 => 4,  30 => 7,);
    }
}
