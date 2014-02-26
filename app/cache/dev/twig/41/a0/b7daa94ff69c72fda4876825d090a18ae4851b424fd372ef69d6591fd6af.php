<?php

/* BancarelValentinAdminRPIBundle:AdminRPI:reveil.html.twig */
class __TwigTemplate_41a0b7daa94ff69c72fda4876825d090a18ae4851b424fd372ef69d6591fd6af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'addMeta' => array($this, 'block_addMeta'),
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

    // line 7
    public function block_addMeta($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        if (((isset($context["refresh"]) ? $context["refresh"] : $this->getContext($context, "refresh")) == "non")) {
            // line 9
            echo "<META HTTP-EQUIV=\"REFRESH\" CONTENT=\"20\">
    ";
        }
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        if (((isset($context["refresh"]) ? $context["refresh"] : $this->getContext($context, "refresh")) == "non")) {
            // line 15
            echo "<header class=\"page-header\">
    <h2 class=\"project-title\">pas de reveil pour l'instant, tu peut te rendormir</h2>
</header>
    ";
        } else {
            // line 19
            echo "<header class=\"page-header\">
    <h2 class=\"project-title\">";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reveil"]) ? $context["reveil"] : $this->getContext($context, "reveil")), "nom"), "html", null, true);
            echo "</h2>
</header>
<iframe width=\"100%\" height=\"166\" scrolling=\"no\" frameborder=\"no\" src=\"https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/";
            // line 22
            echo $this->getAttribute((isset($context["reveil"]) ? $context["reveil"] : $this->getContext($context, "reveil")), "iframe");
            echo "&amp;color=ff6600&amp;auto_play=true&amp;show_artwork=true\"></iframe>
    ";
        }
        // line 24
        echo "    ";
    }

    // line 26
    public function block_javascripts($context, array $blocks = array())
    {
        // line 27
        echo "<script type=\"text/javascript\" src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js\"></script>
<script type=\"text/javascript\">
    function stopCafetiere() {
        alert(\"Cafetire going to sleep !!\")
        jQuery.ajax({
            url: '";
        // line 32
        echo $this->env->getExtension('routing')->getPath("admin_rpi_changeState", array("idPin" => 1));
        echo "',
            success: function(data) {
                alert(\"stop cafetiere: \"data);
            }
        });
    }
    window.setTimeout(\"stopCafetiere()\", 3000);
</script>
";
    }

    public function getTemplateName()
    {
        return "BancarelValentinAdminRPIBundle:AdminRPI:reveil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 56,  114 => 54,  155 => 56,  126 => 42,  97 => 29,  76 => 24,  53 => 20,  161 => 124,  34 => 4,  346 => 158,  336 => 15,  331 => 11,  325 => 159,  323 => 158,  319 => 157,  315 => 156,  311 => 155,  306 => 153,  302 => 152,  290 => 149,  286 => 148,  282 => 147,  251 => 119,  244 => 115,  237 => 111,  223 => 103,  216 => 99,  198 => 86,  188 => 79,  180 => 74,  174 => 62,  165 => 67,  124 => 49,  90 => 32,  84 => 33,  77 => 41,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 85,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 151,  294 => 150,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 50,  132 => 51,  128 => 49,  107 => 51,  61 => 18,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 107,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 58,  143 => 56,  135 => 53,  119 => 42,  102 => 38,  71 => 22,  67 => 15,  63 => 19,  59 => 17,  38 => 6,  94 => 28,  89 => 27,  85 => 46,  75 => 17,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 44,  46 => 7,  27 => 4,  44 => 10,  31 => 3,  28 => 3,  201 => 92,  196 => 85,  183 => 82,  171 => 61,  166 => 60,  163 => 66,  158 => 67,  156 => 66,  151 => 55,  142 => 59,  138 => 54,  136 => 56,  121 => 39,  117 => 37,  105 => 40,  91 => 27,  62 => 23,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 24,  72 => 16,  69 => 21,  47 => 13,  40 => 8,  37 => 7,  22 => 2,  246 => 90,  157 => 63,  145 => 59,  139 => 58,  131 => 62,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 41,  101 => 32,  98 => 61,  96 => 48,  83 => 27,  74 => 14,  66 => 20,  55 => 15,  52 => 19,  50 => 14,  43 => 8,  41 => 7,  35 => 11,  32 => 3,  29 => 2,  209 => 95,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 68,  164 => 125,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 51,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 58,  116 => 41,  112 => 53,  109 => 34,  106 => 36,  103 => 50,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 45,  80 => 26,  73 => 28,  64 => 19,  60 => 6,  57 => 15,  54 => 14,  51 => 13,  48 => 13,  45 => 9,  42 => 8,  39 => 7,  36 => 5,  33 => 4,  30 => 7,);
    }
}
