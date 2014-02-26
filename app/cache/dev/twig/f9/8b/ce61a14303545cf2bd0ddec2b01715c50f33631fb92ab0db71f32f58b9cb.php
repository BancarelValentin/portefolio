<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_f98bce61a14303545cf2bd0ddec2b01715c50f33631fb92ab0db71f32f58b9cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo ".sf-reset .traces {
    padding-bottom: 14px;
}
.sf-reset .traces li {
    font-size: 12px;
    color: #868686;
    padding: 5px 4px;
    list-style-type: decimal;
    margin-left: 20px;
    white-space: break-word;
}
.sf-reset #logs .traces li.error {
    font-style: normal;
    color: #AA3333;
    background: #f9ecec;
}
.sf-reset #logs .traces li.warning {
    font-style: normal;
    background: #ffcc00;
}
/* fix for Opera not liking empty <li> */
.sf-reset .traces li:after {
    content: \"\\00A0\";
}
.sf-reset .trace {
    border: 1px solid #D3D3D3;
    padding: 10px;
    overflow: auto;
    margin: 10px 0 20px;
}
.sf-reset .block-exception {
    border-radius: 16px;
    margin-bottom: 20px;
    background-color: #f6f6f6;
    border: 1px solid #dfdfdf;
    padding: 30px 28px;
    word-wrap: break-word;
    overflow: hidden;
}
.sf-reset .block-exception div {
    color: #313131;
    font-size: 10px;
}
.sf-reset .block-exception-detected .illustration-exception,
.sf-reset .block-exception-detected .text-exception {
    float: left;
}
.sf-reset .block-exception-detected .illustration-exception {
    width: 152px;
}
.sf-reset .block-exception-detected .text-exception {
    width: 670px;
    padding: 30px 44px 24px 46px;
    position: relative;
}
.sf-reset .text-exception .open-quote,
.sf-reset .text-exception .close-quote {
    position: absolute;
}
.sf-reset .open-quote {
    top: 0;
    left: 0;
}
.sf-reset .close-quote {
    bottom: 0;
    right: 50px;
}
.sf-reset .block-exception p {
    font-family: Arial, Helvetica, sans-serif;
}
.sf-reset .block-exception p a,
.sf-reset .block-exception p a:hover {
    color: #565656;
}
.sf-reset .logs h2 {
    float: left;
    width: 654px;
}
.sf-reset .error-count {
    float: right;
    width: 170px;
    text-align: right;
}
.sf-reset .error-count span {
    display: inline-block;
    background-color: #aacd4e;
    border-radius: 6px;
    padding: 4px;
    color: white;
    margin-right: 2px;
    font-size: 11px;
    font-weight: bold;
}
.sf-reset .toggle {
    vertical-align: middle;
}
.sf-reset .linked ul,
.sf-reset .linked li {
    display: inline;
}
.sf-reset #output-content {
    color: #000;
    font-size: 12px;
}
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
    }

    public function getDebugInfo()
    {
        return array (  175 => 65,  100 => 39,  462 => 202,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 184,  415 => 180,  408 => 176,  401 => 172,  394 => 168,  380 => 160,  373 => 156,  361 => 146,  351 => 141,  348 => 140,  342 => 137,  338 => 135,  335 => 134,  329 => 131,  320 => 127,  303 => 122,  300 => 121,  289 => 113,  275 => 105,  270 => 102,  267 => 101,  262 => 98,  256 => 96,  248 => 94,  233 => 87,  226 => 84,  213 => 78,  207 => 75,  200 => 72,  197 => 71,  194 => 70,  191 => 67,  185 => 66,  181 => 65,  178 => 66,  172 => 64,  153 => 56,  150 => 55,  134 => 54,  113 => 48,  81 => 23,  70 => 19,  110 => 26,  65 => 15,  118 => 49,  114 => 54,  155 => 56,  126 => 42,  97 => 29,  76 => 31,  53 => 12,  161 => 63,  34 => 4,  346 => 158,  336 => 15,  331 => 11,  325 => 129,  323 => 128,  319 => 157,  315 => 125,  311 => 155,  306 => 153,  302 => 152,  290 => 149,  286 => 112,  282 => 147,  251 => 119,  244 => 115,  237 => 111,  223 => 103,  216 => 79,  198 => 86,  188 => 79,  180 => 74,  174 => 62,  165 => 60,  124 => 49,  90 => 27,  84 => 24,  77 => 18,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 199,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 164,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 143,  341 => 85,  337 => 103,  322 => 101,  314 => 99,  312 => 124,  309 => 97,  305 => 95,  298 => 120,  294 => 150,  285 => 89,  283 => 88,  278 => 106,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 90,  229 => 85,  220 => 81,  214 => 69,  177 => 65,  169 => 60,  140 => 58,  132 => 51,  128 => 49,  107 => 51,  61 => 14,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 107,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 58,  143 => 56,  135 => 53,  119 => 40,  102 => 40,  71 => 22,  67 => 24,  63 => 19,  59 => 14,  38 => 6,  94 => 28,  89 => 27,  85 => 46,  75 => 17,  68 => 14,  56 => 9,  87 => 34,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 44,  46 => 13,  27 => 3,  44 => 10,  31 => 3,  28 => 3,  201 => 92,  196 => 85,  183 => 82,  171 => 61,  166 => 60,  163 => 66,  158 => 62,  156 => 58,  151 => 59,  142 => 59,  138 => 54,  136 => 56,  121 => 50,  117 => 37,  105 => 34,  91 => 27,  62 => 23,  49 => 14,  24 => 4,  25 => 3,  19 => 1,  79 => 24,  72 => 16,  69 => 16,  47 => 13,  40 => 8,  37 => 7,  22 => 2,  246 => 93,  157 => 63,  145 => 59,  139 => 58,  131 => 62,  123 => 42,  120 => 40,  115 => 43,  111 => 47,  108 => 41,  101 => 32,  98 => 61,  96 => 37,  83 => 33,  74 => 14,  66 => 20,  55 => 16,  52 => 19,  50 => 14,  43 => 12,  41 => 9,  35 => 6,  32 => 5,  29 => 2,  209 => 95,  203 => 73,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 63,  173 => 65,  168 => 61,  164 => 125,  162 => 59,  154 => 60,  149 => 51,  147 => 54,  144 => 51,  141 => 51,  133 => 55,  130 => 46,  125 => 51,  122 => 58,  116 => 39,  112 => 53,  109 => 34,  106 => 36,  103 => 50,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 45,  80 => 32,  73 => 20,  64 => 23,  60 => 6,  57 => 13,  54 => 14,  51 => 13,  48 => 11,  45 => 10,  42 => 8,  39 => 7,  36 => 5,  33 => 4,  30 => 3,);
    }
}
