<?php

/* BancarelValentinPortefolioBundle:Portefolio:listTravaux.html.twig */
class __TwigTemplate_156e3e5181aa276de0a2d596cfe5d257ba01935219ddc2ccca83fa146962fc6c extends Twig_Template
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
        echo "    ";
        if (((isset($context["annee"]) ? $context["annee"] : $this->getContext($context, "annee")) == 1)) {
            // line 4
            echo "        1ere année
    ";
        }
        // line 6
        echo "    ";
        if (((isset($context["annee"]) ? $context["annee"] : $this->getContext($context, "annee")) == 2)) {
            // line 7
            echo "        2eme année
    ";
        }
    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        // line 13
        echo "    <header class=\"page-header\">
        ";
        // line 14
        if (((isset($context["annee"]) ? $context["annee"] : $this->getContext($context, "annee")) == 1)) {
            // line 15
            echo "            <h1 class=\"page-title\">Travaux realisés en premiere année</h1>
        ";
        }
        // line 17
        echo "        ";
        if (((isset($context["annee"]) ? $context["annee"] : $this->getContext($context, "annee")) == 2)) {
            // line 18
            echo "            <h1 class=\"page-title\">Travaux realisés en deuxieme année</h1>
        ";
        }
        // line 20
        echo "            <ul id=\"portfolio-items-filter\">
                <li>Travaux a afficher:</li>
                <li><a data-categories=\"*\">Tout</a></li>
                <li><a data-categories=\"M\">PPE</a></li>
                <li><a data-categories=\"S\">Stage</a></li>
                <li><a data-categories=\"A\">Activités</a></li>
            </ul><!-- end #portfolio-items-filter -->
    </header><!-- end .page-header -->
    <section id=\"portfolio-items\" class=\"clearfix\">
";
        // line 29
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesReals"]) ? $context["lesReals"] : $this->getContext($context, "lesReals")));
        foreach ($context['_seq'] as $context["_key"] => $context["uneReal"]) {
            // line 30
            echo "    <article class=\"one-half\" data-categories=\"";
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute((isset($context["uneReal"]) ? $context["uneReal"] : $this->getContext($context, "uneReal")), "id"), 0, 1), "html", null, true);
            echo "\">
        <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("portefolio_show", array("id" => $this->getAttribute((isset($context["uneReal"]) ? $context["uneReal"] : $this->getContext($context, "uneReal")), "id"))), "html", null, true);
            echo "\"  title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["uneReal"]) ? $context["uneReal"] : $this->getContext($context, "uneReal")), "titre"), "html", null, true);
            echo "\">
             <img src=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((("bundles/public/images/realisations/" . $this->getAttribute((isset($context["uneReal"]) ? $context["uneReal"] : $this->getContext($context, "uneReal")), "id")) . "/") . $this->getAttribute((isset($context["uneReal"]) ? $context["uneReal"] : $this->getContext($context, "uneReal")), "urlimage"))), "html", null, true);
            echo "\" width=\"350px\" height=\"200px\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["uneReal"]) ? $context["uneReal"] : $this->getContext($context, "uneReal")), "titre"), "html", null, true);
            echo "\">
        </a>
        <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("portefolio_show", array("id" => $this->getAttribute((isset($context["uneReal"]) ? $context["uneReal"] : $this->getContext($context, "uneReal")), "id"))), "html", null, true);
            echo "\" class=\"project-meta\">
             <h5 class=\"title\">";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["uneReal"]) ? $context["uneReal"] : $this->getContext($context, "uneReal")), "titre"), "html", null, true);
            echo "</h5>
        </a>
    </article>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['uneReal'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "    </section><!-- end #portfolio-items -->
";
    }

    // line 43
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "BancarelValentinPortefolioBundle:Portefolio:listTravaux.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 43,  115 => 39,  105 => 35,  101 => 34,  94 => 32,  88 => 31,  83 => 30,  79 => 29,  68 => 20,  64 => 18,  61 => 17,  57 => 15,  55 => 14,  52 => 13,  49 => 12,  43 => 7,  40 => 6,  36 => 4,  33 => 3,  30 => 2,);
    }
}
