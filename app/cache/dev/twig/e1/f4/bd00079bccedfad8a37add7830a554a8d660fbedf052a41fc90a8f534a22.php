<?php

/* BancarelValentinPortefolioBundle:Portefolio:contact.html.twig */
class __TwigTemplate_e1f4bd00079bccedfad8a37add7830a554a8d660fbedf052a41fc90a8f534a22 extends Twig_Template
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
        echo "    contact
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "    <div class=\"container clearfix\">
        <header class=\"page-header\">
            <h1 class=\"page-title\">Une question, une suggestion... Contacter moi</h1>
        </header>
    </div>

    <div class=\"container clearfix\">
        <div class=\"one-fourth\">
            <h3>Contact Info</h3>
            <p>Mr Bancarel Valentin<br/>
                15, Boulevard du Pavatou<br/>
                15000 Aurillac
            </p>
            <p>Telephone: 0678816178<br/>
                Email: bancarel.valentin@gmail.com<br/>
                Web: bancarelvalentin.tk
            </p>
        </div>

        <div class=\"three-fourth last\">
            <h3>En completant ce formulaire</h3>
            <form action=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("portefolio_contact");
        echo "\" autocomplete=\"on\" method=\"post\" class=\"contact-form\">
                <p class=\"input-block\">
                    <label for=\"contact-name\"><strong>Nom</strong> (requis)</label>
                    <input type=\"text\" name=\"name\" value=\"\" id=\"contact-name\">
                </p>

                <p class=\"input-block\">
                    <label for=\"contact-email\"><strong>Email</strong> (requis)</label>
                    <input type=\"email\" name=\"email\" value=\"\" id=\"contact-email\">
                </p>

                <p class=\"input-block\">
                     <label for=\"contact-subject\"><strong>Objet</strong></label>
                     <input type=\"text\" name=\"subject\" value=\"\" id=\"contact-subject\">
                </p>

                <p class=\"textarea-block\">
                     <label for=\"contact-message\"><strong>Message</strong> (requis)</label>
                     <textarea name=\"message\" id=\"contact-message\" cols=\"88\" rows=\"6\"></textarea>
                </p>

                <div class=\"hidden\">
                     <label for=\"contact-spam-check\">Ne pas remplir ce champ:</label>
                     <input name=\"spam-check\" type=\"text\" value=\"noSpam\" id=\"contact-spam-check\" />
                </div>

                <input type=\"submit\" value=\"Submit\">

                <div class=\"clear\"></div>

           </form>
            
          ";
        // line 61
        echo (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message"));
        echo "

      </div><!-- end .three-fourth.last -->
    </div><!-- end .container -->
";
    }

    public function getTemplateName()
    {
        return "BancarelValentinPortefolioBundle:Portefolio:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 61,  63 => 29,  40 => 8,  37 => 7,  32 => 3,  29 => 2,);
    }
}
