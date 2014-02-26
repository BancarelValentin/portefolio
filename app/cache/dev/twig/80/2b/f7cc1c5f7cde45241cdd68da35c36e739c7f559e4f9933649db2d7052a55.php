<?php

/* base.html.twig */
class __TwigTemplate_802bf7cc1c5f7cde45241cdd68da35c36e739c7f559e4f9933649db2d7052a55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'meta' => array($this, 'block_meta'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'script' => array($this, 'block_script'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>

<!--[if IE 7]>                  <html class=\"ie7 no-js\" lang=\"fr\">     <![endif]-->
<!--[if lte IE 8]>              <html class=\"ie8 no-js\" lang=\"fr\">     <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> 
<html class=\"not-ie no-js\" lang=\"fr\">  <!--<![endif]-->
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html;charset=utf-8\" /> 
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
        <meta name=\"author\" content=\"BANCAREL Valentin\">
        ";
        // line 11
        $this->displayBlock('meta', $context, $blocks);
        // line 12
        echo "        
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/public/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        
        <title>";
        // line 15
        $this->displayBlock('title', $context, $blocks);
        echo "</title>


        <!-- HTML5 Shiv + detect touch events -->
        <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/public/js/modernizr.custom.js"), "html", null, true);
        echo "\"></script>
        <!-- HTML5 video player -->
        <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/public/js/video.min.js"), "html", null, true);
        echo "\"></script>
        <script>_V_.options.flash.swf = '";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/public/js/video-js.swf"), "html", null, true);
        echo "';</script>

        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/public/images/favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <header id=\"header\" class=\"container clearfix\">
            <a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("portefolio_homepage");
        echo "\" id=\"logo\">
                <img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/public/images/logo.png"), "html", null, true);
        echo "\" alt=\"Bancarel Valentin\">
            </a>
            <nav id=\"main-nav\">
                <ul>
                    <li";
        // line 33
        if (((isset($context["onglet"]) ? $context["onglet"] : $this->getContext($context, "onglet")) == "acceuil")) {
            echo " class='current'";
        }
        echo ">
                        <a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("portefolio_homepage");
        echo "\" data-description=\"hello\">Acceuil</a>
                    </li>

                    <li";
        // line 37
        if (((isset($context["onglet"]) ? $context["onglet"] : $this->getContext($context, "onglet")) == "cv")) {
            echo " class='current'";
        }
        echo ">
                        <a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("portefolio_cv");
        echo "\" data-description=\"cv\">Curiculum vitae</a>
                    </li>

                    <li";
        // line 41
        if (((isset($context["onglet"]) ? $context["onglet"] : $this->getContext($context, "onglet")) == "real")) {
            echo " class='current'";
        }
        echo ">
                        <a data-description=\"realisations\">Travaux</a>
                        <ul>
                            <li>
                                <a href='";
        // line 45
        echo $this->env->getExtension('routing')->getPath("portefolio_list_travaux", array("annee" => 1));
        echo "'>1ere annee</a>
                            </li>

                            <li>
                                <a href='";
        // line 49
        echo $this->env->getExtension('routing')->getPath("portefolio_list_travaux", array("annee" => 2));
        echo "'>2eme annee</a>
                            </li>

                            <li>
                                <a href='";
        // line 53
        echo $this->env->getExtension('routing')->getPath("portefolio_list_travaux", array("annee" => 0));
        echo "'>Travaux personnel</a>
                            </li>
                        </ul>
                    </li>

                    <li";
        // line 58
        if (((isset($context["onglet"]) ? $context["onglet"] : $this->getContext($context, "onglet")) == "veille")) {
            echo " class='current'";
        }
        echo ">
                        <a href=\"";
        // line 59
        echo $this->env->getExtension('routing')->getPath("portefolio_veille");
        echo "\" data-description=\"raspberry\">Veille techno</a>
                    </li>

                    <li";
        // line 62
        if (((isset($context["onglet"]) ? $context["onglet"] : $this->getContext($context, "onglet")) == "contact")) {
            echo " class='current'";
        }
        echo ">
                        <a href=\"";
        // line 63
        echo $this->env->getExtension('routing')->getPath("portefolio_contact");
        echo "\" data-description=\"une question ?\">Contact</a>
                    </li>
                    
                    ";
        // line 66
        if (((isset($context["onglet"]) ? $context["onglet"] : $this->getContext($context, "onglet")) == "rpi")) {
            // line 67
            echo "                        <li class='current'>
                            <a href=\"";
            // line 68
            echo $this->env->getExtension('routing')->getPath("admin_rpi_homepage");
            echo "\" data-description=\"raspberry\">administration RPI</a>
                            <ul>
                                <li>
                                    <a href=\"";
            // line 71
            echo $this->env->getExtension('routing')->getPath("admin_rpi_setReveil");
            echo "\">Regler reveil</a>
                                </li>
                                <li>
                                    <a href=\"";
            // line 74
            echo $this->env->getExtension('routing')->getPath("admin_rpi_reveil");
            echo "\">Allumer reveil</a>
                                </li>
                            </ul>
                        </li>
                    ";
        }
        // line 79
        echo "                </ul>
            </nav>
        </header><!-- end #header -->


        <section id=\"content\" class=\"container clearfix\">
        ";
        // line 85
        $this->displayBlock('body', $context, $blocks);
        // line 86
        echo "        </section><!-- end #content -->


        <footer id=\"footer\" class=\"clearfix\">
            <div class=\"container\">
                <div class=\"three-fourth\">
                    <nav id=\"footer-nav\" class=\"clearfix\">
                        <ul>
                            <li>
                                <a href=\"";
        // line 95
        echo $this->env->getExtension('routing')->getPath("portefolio_homepage");
        echo "\">Acceuil</a>
                            </li>

                            <li>
                                <a href=\"";
        // line 99
        echo $this->env->getExtension('routing')->getPath("portefolio_cv");
        echo "\">Curiculum vitae</a>
                            </li>

                            <li>
                                <a href='";
        // line 103
        echo $this->env->getExtension('routing')->getPath("portefolio_list_travaux", array("annee" => 1));
        echo "'>1ere annee</a>
                            </li>

                            <li>
                                <a href='";
        // line 107
        echo $this->env->getExtension('routing')->getPath("portefolio_list_travaux", array("annee" => 2));
        echo "'>2eme annee</a>
                            </li>

                            <li>
                                <a href=\"";
        // line 111
        echo $this->env->getExtension('routing')->getPath("portefolio_veille");
        echo "\">Veille techno</a>
                            </li>

                            <li>
                                <a href=\"";
        // line 115
        echo $this->env->getExtension('routing')->getPath("portefolio_contact");
        echo "\">Contact</a>
                            </li>

                            <li>
                                <a href=\"";
        // line 119
        echo $this->env->getExtension('routing')->getPath("admin_rpi_homepage");
        echo "\">administration RPI</a>
                            </li>
                        </ul>
                    </nav><!-- end #footer-nav -->

                    <ul class=\"contact-info\">
                        <li class=\"address\">15 Boulevard du pavatou - 15000 Aurillac</li>
                        <li class=\"phone\">Tél : 06 78 81 61 78</li>
                        <li class=\"email\"><a href=\"mailto:bancarel.valentin@gmail.com\">bancarel.valentin@gmail.com</a></li>
                    </ul><!-- end .contact-info -->

                </div><!-- end .three-fourth -->
            </div><!-- end .container -->
        </footer><!-- end #footer -->

        <footer id=\"footer-bottom\" class=\"clearfix\">
            <div class=\"container\">
                <ul>
                    <li>SmartStart &copy; 2012</li>
                    <li><a href=\"#\">Legal Notice</a></li>
                    <li><a href=\"#\">Terms</a></li>
                </ul>
            </div><!-- end .container -->
        </footer><!-- end #footer-bottom -->
        
        
        <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js\"></script>
        <script>window.jQuery || document.write('<script src=\"js/jquery-1.7.1.min.js\"><\\/script>')</script>
        <script src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/public/js/respond.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/public/js/jquery.easing-1.3.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/public/js/jquery.fancybox.pack.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/public/js/jquery.smartStartSlider.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/public/js/jquery.jcarousel.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/public/js/jquery.cycle.all.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/public/js/jquery.isotope.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"//maps.google.com/maps/api/js?sensor=false\"></script>
        <script src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/public/js/jquery.gmap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/public/js/jquery.touchSwipe.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/public/js/custom.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 158
        $this->displayBlock('script', $context, $blocks);
        // line 159
        echo "    </body>
</html>
";
    }

    // line 11
    public function block_meta($context, array $blocks = array())
    {
    }

    // line 15
    public function block_title($context, array $blocks = array())
    {
    }

    // line 85
    public function block_body($context, array $blocks = array())
    {
    }

    // line 158
    public function block_script($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  346 => 158,  336 => 15,  331 => 11,  325 => 159,  323 => 158,  319 => 157,  315 => 156,  311 => 155,  306 => 153,  302 => 152,  290 => 149,  286 => 148,  282 => 147,  251 => 119,  244 => 115,  237 => 111,  223 => 103,  216 => 99,  198 => 86,  188 => 79,  180 => 74,  174 => 71,  165 => 67,  124 => 49,  90 => 34,  84 => 33,  77 => 29,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 85,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 151,  294 => 150,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 22,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 107,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 38,  71 => 19,  67 => 15,  63 => 29,  59 => 14,  38 => 6,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 21,  46 => 7,  27 => 4,  44 => 12,  31 => 5,  28 => 3,  201 => 92,  196 => 85,  183 => 82,  171 => 61,  166 => 71,  163 => 66,  158 => 67,  156 => 66,  151 => 62,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 45,  105 => 40,  91 => 27,  62 => 23,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 16,  69 => 25,  47 => 9,  40 => 13,  37 => 12,  22 => 2,  246 => 90,  157 => 63,  145 => 59,  139 => 58,  131 => 53,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 41,  101 => 32,  98 => 61,  96 => 37,  83 => 25,  74 => 14,  66 => 24,  55 => 15,  52 => 19,  50 => 10,  43 => 8,  41 => 7,  35 => 11,  32 => 3,  29 => 2,  209 => 95,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 68,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 28,  64 => 17,  60 => 6,  57 => 21,  54 => 10,  51 => 14,  48 => 13,  45 => 15,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}
