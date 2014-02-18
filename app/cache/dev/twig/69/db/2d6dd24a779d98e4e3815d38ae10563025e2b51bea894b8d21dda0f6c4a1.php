<?php

/* BancarelValentinPortefolioBundle:Portefolio:show.html.twig */
class __TwigTemplate_69db2d6dd24a779d98e4e3815d38ae10563025e2b51bea894b8d21dda0f6c4a1 extends Twig_Template
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
    </header><!-- end .page-header -->

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
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["leSlide"]) ? $context["leSlide"] : $this->getContext($context, "leSlide")));
            foreach ($context['_seq'] as $context["_key"] => $context["uneImage"]) {
                // line 23
                echo "                ";
                $context["num"] = ((isset($context["num"]) ? $context["num"] : $this->getContext($context, "num")) + 1);
                // line 24
                echo "                <article class=\"slide\">
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
            echo "    </section><!-- end #features-slider -->
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
    </div><!-- end .entry-body -->

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
    </div><!-- end .entry-meta -->

    ";
        // line 55
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesDocs"]) ? $context["lesDocs"] : $this->getContext($context, "lesDocs")));
        foreach ($context['_seq'] as $context["_key"] => $context["unDoc"]) {
            // line 56
            echo "        <hr>
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

    // line 66
    public function block_javascripts($context, array $blocks = array())
    {
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
        return array (  180 => 66,  175 => 62,  167 => 60,  160 => 58,  156 => 56,  152 => 55,  145 => 51,  141 => 50,  132 => 44,  127 => 42,  122 => 39,  118 => 37,  108 => 33,  104 => 32,  98 => 29,  94 => 28,  90 => 27,  83 => 25,  80 => 24,  77 => 23,  72 => 22,  70 => 21,  67 => 20,  65 => 19,  62 => 18,  60 => 17,  52 => 14,  45 => 10,  41 => 8,  38 => 7,  33 => 3,  30 => 2,);
    }
}
