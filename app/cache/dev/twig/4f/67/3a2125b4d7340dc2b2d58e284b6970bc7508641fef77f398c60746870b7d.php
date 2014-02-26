<?php

/* BancarelValentinAdminRPIBundle:AdminRPI:setReveil.html.twig */
class __TwigTemplate_4f673a2125b4d7340dc2b2d58e284b6970bc7508641fef77f398c60746870b7d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
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
        echo "Raspberry Pi Reveil
";
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "
";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesReveils"]) ? $context["lesReveils"] : $this->getContext($context, "lesReveils")));
        foreach ($context['_seq'] as $context["_key"] => $context["unReveil"]) {
            // line 11
            echo "Vous avez un reveil programmer les: <a onclick=\"changeJours('";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["unReveil"]) ? $context["unReveil"] : $this->getContext($context, "unReveil")), "id"), "html", null, true);
            echo "')\">
";
            // line 12
            if (twig_in_filter(1, $this->getAttribute((isset($context["unReveil"]) ? $context["unReveil"] : $this->getContext($context, "unReveil")), "jour"))) {
                echo "Lundi";
            }
            // line 13
            if (twig_in_filter(2, $this->getAttribute((isset($context["unReveil"]) ? $context["unReveil"] : $this->getContext($context, "unReveil")), "jour"))) {
                echo ", Mardi";
            }
            // line 14
            if (twig_in_filter(3, $this->getAttribute((isset($context["unReveil"]) ? $context["unReveil"] : $this->getContext($context, "unReveil")), "jour"))) {
                echo ", Mercredi";
            }
            // line 15
            if (twig_in_filter(4, $this->getAttribute((isset($context["unReveil"]) ? $context["unReveil"] : $this->getContext($context, "unReveil")), "jour"))) {
                echo ", Jeudi";
            }
            // line 16
            if (twig_in_filter(5, $this->getAttribute((isset($context["unReveil"]) ? $context["unReveil"] : $this->getContext($context, "unReveil")), "jour"))) {
                echo ", Vendredi";
            }
            // line 17
            if (twig_in_filter(6, $this->getAttribute((isset($context["unReveil"]) ? $context["unReveil"] : $this->getContext($context, "unReveil")), "jour"))) {
                echo ", Samedi";
            }
            // line 18
            if (twig_in_filter(0, $this->getAttribute((isset($context["unReveil"]) ? $context["unReveil"] : $this->getContext($context, "unReveil")), "jour"))) {
                echo ", Dimanche";
            }
            echo " 
</a> a <a onclick=\"changeHeure('";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["unReveil"]) ? $context["unReveil"] : $this->getContext($context, "unReveil")), "id"), "html", null, true);
            echo "')\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["unReveil"]) ? $context["unReveil"] : $this->getContext($context, "unReveil")), "heure"), "html", null, true);
            echo "H</a> : ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["unReveil"]) ? $context["unReveil"] : $this->getContext($context, "unReveil")), "nom"), "html", null, true);
            echo "</br>
Le lecteur est: 
<iframe width=\"100%\" height=\"166\" scrolling=\"no\" frameborder=\"no\" src=\"https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/";
            // line 21
            echo $this->getAttribute((isset($context["unReveil"]) ? $context["unReveil"] : $this->getContext($context, "unReveil")), "iframe");
            echo "&amp;color=ff6600&amp;auto_play=false&amp;show_artwork=true\"></iframe>
<a onclick=\"changeIframe('";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["unReveil"]) ? $context["unReveil"] : $this->getContext($context, "unReveil")), "id"), "html", null, true);
            echo "')\">Change it</a>
</br></br></br></br></br>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unReveil'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "<form method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
    ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <input type=\"submit\" value='Ajouter' class=\"btn btn-primary\" />
</form>
";
    }

    // line 31
    public function block_javascripts($context, array $blocks = array())
    {
        // line 32
        echo "<script>
    function changeJours(id)
    {
        if (newName = window.prompt(\"Nouveau jours (de 0 pour dimanche a 6 pour samedi separer par des etoiles: \\\"*\\\") ?\")) {
            redirect = redirect.substr(0, redirect.length - 8) + newName;
            document.location.href = redirect;
        }
    }
    function changeHeure(id)
    {
        if (newName = window.prompt(\"Nouvelle heure entiere de 0 a 23 ?\")) {
            redirect = redirect.substr(0, redirect.length - 8) + newName;
            document.location.href = redirect;
        }
    }
    function changeIframe(id)
    {
        if (newName = window.prompt(\"Nouvel iFrame ?\")) {
            redirect = redirect.substr(0, redirect.length - 8) + newName;
            document.location.href = redirect;
        }
    }
</script>
";
    }

    public function getTemplateName()
    {
        return "BancarelValentinAdminRPIBundle:AdminRPI:setReveil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 26,  65 => 15,  118 => 31,  114 => 54,  155 => 56,  126 => 42,  97 => 29,  76 => 24,  53 => 12,  161 => 124,  34 => 4,  346 => 158,  336 => 15,  331 => 11,  325 => 159,  323 => 158,  319 => 157,  315 => 156,  311 => 155,  306 => 153,  302 => 152,  290 => 149,  286 => 148,  282 => 147,  251 => 119,  244 => 115,  237 => 111,  223 => 103,  216 => 99,  198 => 86,  188 => 79,  180 => 74,  174 => 62,  165 => 67,  124 => 49,  90 => 32,  84 => 33,  77 => 18,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 85,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 151,  294 => 150,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 50,  132 => 51,  128 => 49,  107 => 51,  61 => 14,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 107,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 58,  143 => 56,  135 => 53,  119 => 42,  102 => 38,  71 => 22,  67 => 15,  63 => 19,  59 => 17,  38 => 8,  94 => 28,  89 => 27,  85 => 46,  75 => 17,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 44,  46 => 7,  27 => 4,  44 => 10,  31 => 3,  28 => 3,  201 => 92,  196 => 85,  183 => 82,  171 => 61,  166 => 60,  163 => 66,  158 => 67,  156 => 66,  151 => 55,  142 => 59,  138 => 54,  136 => 56,  121 => 32,  117 => 37,  105 => 25,  91 => 27,  62 => 23,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 24,  72 => 16,  69 => 16,  47 => 13,  40 => 8,  37 => 7,  22 => 2,  246 => 90,  157 => 63,  145 => 59,  139 => 58,  131 => 62,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 41,  101 => 32,  98 => 61,  96 => 22,  83 => 19,  74 => 14,  66 => 20,  55 => 15,  52 => 19,  50 => 14,  43 => 8,  41 => 9,  35 => 11,  32 => 3,  29 => 2,  209 => 95,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 68,  164 => 125,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 51,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 58,  116 => 41,  112 => 53,  109 => 34,  106 => 36,  103 => 50,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 45,  80 => 26,  73 => 17,  64 => 19,  60 => 6,  57 => 13,  54 => 14,  51 => 13,  48 => 11,  45 => 9,  42 => 8,  39 => 7,  36 => 5,  33 => 4,  30 => 3,);
    }
}
