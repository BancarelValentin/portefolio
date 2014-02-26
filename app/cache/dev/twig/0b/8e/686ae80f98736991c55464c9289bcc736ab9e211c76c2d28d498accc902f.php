<?php

/* ::base.html.twig */
class __TwigTemplate_0b8e686ae80f98736991c55464c9289bcc736ab9e211c76c2d28d498accc902f extends Twig_Template
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
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1414 => 421,  1408 => 419,  1402 => 417,  1400 => 416,  1398 => 415,  1394 => 414,  1385 => 413,  1383 => 412,  1380 => 411,  1367 => 405,  1361 => 403,  1355 => 401,  1353 => 400,  1351 => 399,  1347 => 398,  1341 => 397,  1339 => 396,  1336 => 395,  1323 => 389,  1317 => 387,  1311 => 385,  1309 => 384,  1307 => 383,  1303 => 382,  1297 => 381,  1291 => 380,  1287 => 379,  1283 => 378,  1279 => 377,  1273 => 376,  1271 => 375,  1268 => 374,  1256 => 369,  1251 => 368,  1249 => 367,  1246 => 366,  1237 => 360,  1231 => 358,  1228 => 357,  1223 => 356,  1221 => 355,  1218 => 354,  1211 => 349,  1202 => 347,  1198 => 346,  1195 => 345,  1192 => 344,  1190 => 343,  1187 => 342,  1179 => 338,  1177 => 337,  1174 => 336,  1168 => 332,  1162 => 330,  1159 => 329,  1157 => 328,  1154 => 327,  1145 => 322,  1143 => 321,  1118 => 320,  1115 => 319,  1112 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1098 => 313,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 306,  1077 => 305,  1074 => 304,  1067 => 299,  1064 => 298,  1056 => 293,  1053 => 292,  1051 => 291,  1048 => 290,  1040 => 285,  1036 => 284,  1032 => 283,  1029 => 282,  1027 => 281,  1024 => 280,  1016 => 276,  1014 => 272,  1012 => 271,  1009 => 270,  1004 => 266,  982 => 261,  979 => 260,  976 => 259,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 254,  958 => 253,  955 => 252,  952 => 251,  950 => 250,  947 => 249,  939 => 243,  936 => 242,  934 => 241,  931 => 240,  923 => 236,  920 => 235,  918 => 234,  915 => 233,  903 => 229,  900 => 228,  897 => 227,  894 => 226,  892 => 225,  889 => 224,  881 => 220,  878 => 219,  876 => 218,  873 => 217,  865 => 213,  862 => 212,  860 => 211,  857 => 210,  849 => 206,  846 => 205,  844 => 204,  841 => 203,  833 => 199,  830 => 198,  828 => 197,  825 => 196,  817 => 192,  814 => 191,  812 => 190,  809 => 189,  801 => 185,  798 => 184,  793 => 182,  785 => 178,  783 => 177,  780 => 176,  772 => 172,  769 => 171,  767 => 170,  764 => 169,  756 => 165,  753 => 164,  751 => 163,  739 => 156,  729 => 155,  724 => 154,  721 => 153,  715 => 151,  712 => 150,  707 => 148,  699 => 142,  697 => 141,  696 => 140,  695 => 139,  689 => 137,  683 => 135,  680 => 134,  678 => 133,  675 => 132,  666 => 126,  662 => 125,  658 => 124,  654 => 123,  643 => 120,  638 => 118,  635 => 117,  619 => 113,  617 => 112,  614 => 111,  598 => 107,  596 => 106,  576 => 101,  564 => 99,  555 => 95,  550 => 94,  547 => 93,  524 => 90,  512 => 84,  503 => 81,  501 => 80,  496 => 79,  493 => 78,  490 => 77,  478 => 74,  470 => 73,  467 => 72,  464 => 71,  456 => 68,  450 => 64,  442 => 62,  433 => 60,  426 => 58,  414 => 52,  405 => 49,  403 => 48,  390 => 43,  388 => 42,  385 => 41,  377 => 37,  366 => 33,  350 => 26,  316 => 16,  308 => 13,  299 => 8,  271 => 374,  266 => 366,  260 => 363,  250 => 341,  245 => 335,  225 => 298,  215 => 280,  186 => 239,  146 => 181,  129 => 148,  349 => 323,  20 => 1,  810 => 492,  807 => 491,  796 => 183,  792 => 488,  788 => 486,  775 => 485,  749 => 162,  746 => 161,  727 => 476,  710 => 149,  706 => 473,  702 => 472,  698 => 471,  694 => 138,  690 => 469,  686 => 468,  682 => 467,  679 => 466,  677 => 465,  649 => 122,  634 => 456,  625 => 453,  620 => 451,  601 => 446,  567 => 414,  549 => 411,  532 => 410,  529 => 92,  517 => 404,  389 => 160,  386 => 159,  378 => 157,  371 => 35,  358 => 151,  345 => 147,  343 => 146,  340 => 145,  334 => 141,  328 => 139,  326 => 138,  307 => 128,  296 => 121,  293 => 6,  281 => 411,  276 => 395,  259 => 103,  253 => 342,  232 => 88,  222 => 297,  210 => 270,  152 => 46,  127 => 35,  363 => 32,  357 => 123,  344 => 24,  332 => 20,  327 => 114,  324 => 113,  321 => 135,  318 => 111,  291 => 102,  274 => 110,  265 => 105,  263 => 365,  255 => 353,  231 => 83,  212 => 279,  202 => 266,  190 => 76,  104 => 90,  58 => 14,  672 => 345,  668 => 344,  664 => 342,  660 => 464,  651 => 337,  647 => 336,  644 => 335,  640 => 119,  631 => 327,  629 => 454,  626 => 325,  622 => 452,  613 => 320,  609 => 319,  606 => 449,  602 => 317,  593 => 105,  591 => 309,  588 => 308,  585 => 307,  581 => 305,  577 => 303,  569 => 300,  563 => 298,  559 => 296,  557 => 96,  552 => 293,  548 => 292,  545 => 291,  541 => 290,  533 => 284,  531 => 283,  527 => 91,  525 => 280,  522 => 406,  519 => 278,  515 => 85,  509 => 83,  505 => 270,  499 => 268,  497 => 267,  489 => 262,  483 => 258,  479 => 256,  473 => 254,  471 => 253,  465 => 249,  463 => 248,  459 => 69,  454 => 244,  448 => 240,  438 => 236,  436 => 235,  428 => 59,  418 => 224,  412 => 222,  410 => 221,  400 => 47,  397 => 213,  383 => 207,  376 => 205,  367 => 155,  353 => 149,  347 => 322,  317 => 185,  313 => 15,  304 => 181,  297 => 104,  295 => 178,  288 => 4,  205 => 108,  184 => 233,  170 => 84,  175 => 58,  100 => 36,  462 => 202,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 226,  415 => 180,  408 => 50,  401 => 172,  394 => 168,  380 => 158,  373 => 156,  361 => 333,  351 => 120,  348 => 140,  342 => 23,  338 => 135,  335 => 21,  329 => 188,  320 => 127,  303 => 106,  300 => 280,  289 => 113,  275 => 105,  270 => 102,  267 => 101,  262 => 98,  256 => 96,  248 => 336,  233 => 304,  226 => 84,  213 => 78,  207 => 269,  200 => 72,  197 => 249,  194 => 248,  191 => 246,  185 => 74,  181 => 232,  178 => 59,  172 => 57,  153 => 77,  150 => 55,  134 => 161,  113 => 40,  81 => 30,  70 => 19,  110 => 38,  65 => 17,  118 => 49,  114 => 111,  155 => 47,  126 => 147,  97 => 29,  76 => 31,  53 => 11,  161 => 202,  34 => 4,  346 => 158,  336 => 15,  331 => 11,  325 => 159,  323 => 158,  319 => 157,  315 => 156,  311 => 155,  306 => 153,  302 => 152,  290 => 149,  286 => 148,  282 => 147,  251 => 119,  244 => 115,  237 => 111,  223 => 103,  216 => 99,  198 => 86,  188 => 79,  180 => 74,  174 => 71,  165 => 67,  124 => 49,  90 => 34,  84 => 33,  77 => 29,  23 => 1,  480 => 75,  474 => 161,  469 => 158,  461 => 70,  457 => 245,  453 => 199,  444 => 238,  440 => 148,  437 => 61,  435 => 146,  430 => 144,  427 => 143,  423 => 57,  413 => 134,  409 => 132,  407 => 131,  402 => 215,  398 => 129,  393 => 211,  387 => 164,  384 => 121,  381 => 120,  379 => 119,  374 => 36,  368 => 34,  365 => 197,  362 => 110,  360 => 109,  355 => 27,  341 => 85,  337 => 22,  322 => 101,  314 => 99,  312 => 130,  309 => 129,  305 => 95,  298 => 151,  294 => 150,  285 => 3,  283 => 115,  278 => 410,  268 => 373,  264 => 84,  258 => 354,  252 => 80,  247 => 78,  241 => 93,  229 => 87,  220 => 290,  214 => 69,  177 => 65,  169 => 210,  140 => 58,  132 => 51,  128 => 49,  107 => 37,  61 => 22,  273 => 394,  269 => 107,  254 => 92,  243 => 327,  240 => 326,  238 => 312,  235 => 311,  230 => 107,  227 => 301,  224 => 81,  221 => 77,  219 => 76,  217 => 289,  208 => 76,  204 => 267,  179 => 224,  159 => 196,  143 => 51,  135 => 53,  119 => 117,  102 => 38,  71 => 19,  67 => 16,  63 => 21,  59 => 17,  38 => 6,  94 => 57,  89 => 35,  85 => 26,  75 => 22,  68 => 20,  56 => 12,  87 => 26,  21 => 2,  26 => 3,  93 => 28,  88 => 28,  78 => 24,  46 => 10,  27 => 7,  44 => 8,  31 => 5,  28 => 3,  201 => 106,  196 => 85,  183 => 82,  171 => 216,  166 => 209,  163 => 66,  158 => 80,  156 => 195,  151 => 62,  142 => 59,  138 => 54,  136 => 168,  121 => 131,  117 => 45,  105 => 25,  91 => 56,  62 => 14,  49 => 12,  24 => 2,  25 => 3,  19 => 1,  79 => 32,  72 => 21,  69 => 21,  47 => 10,  40 => 13,  37 => 12,  22 => 2,  246 => 136,  157 => 63,  145 => 59,  139 => 58,  131 => 53,  123 => 61,  120 => 31,  115 => 40,  111 => 110,  108 => 41,  101 => 89,  98 => 29,  96 => 37,  83 => 30,  74 => 20,  66 => 24,  55 => 12,  52 => 19,  50 => 10,  43 => 9,  41 => 7,  35 => 11,  32 => 6,  29 => 4,  209 => 95,  203 => 73,  199 => 265,  193 => 73,  189 => 240,  187 => 75,  182 => 87,  176 => 223,  173 => 85,  168 => 68,  164 => 203,  162 => 59,  154 => 189,  149 => 182,  147 => 75,  144 => 176,  141 => 175,  133 => 55,  130 => 46,  125 => 42,  122 => 41,  116 => 116,  112 => 39,  109 => 105,  106 => 104,  103 => 50,  99 => 68,  95 => 39,  92 => 31,  86 => 46,  82 => 25,  80 => 24,  73 => 28,  64 => 19,  60 => 20,  57 => 21,  54 => 15,  51 => 37,  48 => 11,  45 => 15,  42 => 7,  39 => 10,  36 => 5,  33 => 4,  30 => 3,);
    }
}
