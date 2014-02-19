<?php

/* BancarelValentinPortefolioBundle:Portefolio:cv.html.twig */
class __TwigTemplate_16006fb9ebd4fa85d337fe930ea52dedb131115643f6ed1d43cbbaccd1d40ea8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("base.html.twig");

        $this->blocks = array(
            'meta' => array($this, 'block_meta'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'script' => array($this, 'block_script'),
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
    public function block_meta($context, array $blocks = array())
    {
        // line 4
        echo "
";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        // line 9
        echo "    Curiculum Vitae de Mr Bancarel Valentin
";
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        // line 14
        echo "    <h1 class=\"page-title\">Curiculum vitae</h1>

    <span class=\"acc-trigger\">
        <a href=\"#\">Competences</a>
    </span>
    <div class=\"acc-container\">
        <div class=\"content\">
            Developpement Web
            <ul class=\"check dotted\">
                <li>HTML</li>
                <li>PHP</li>
                <li>MySQL</li>
                <li>CSS (base)</li>
            </ul>
            <br>
            Developpement Applicatif:
            <ul class=\"check dotted\">
                <li>C#</li>
                <li>Objectiv-C (base)</li>
            </ul>
            <br>
            Logiciels utilisés:
            <ul class=\"check dotted\">
                <li>Microsoft Visual Studio 2010-2012</li>
                <li>Netbeans</li>
                <li>WAMP-MAMP</li>
                <li>os x server (base)</li>
            </ul>
            <br>
            Framework utilisé:
            <ul class=\"check dotted\">
                <li>Symfony 2</li>
            </ul>
        </div>
    </div><!-- end .acc-container -->


    <span class=\"acc-trigger\">
        <a href=\"#\">Formations</a>
    </span>
    <div class=\"acc-container\">
        <div class=\"content\">
            <ul class=\"dash dotted\">
                <li>2005-2009: college prive Notre Dame des Miracles Mauriac</li>
                <li>2009-2012: BAC Sciences et Techniques de l' Industrie</li>
                <li>2012-2014: BTS Service Informatiques aux organisations</li>
                <li>2012-2014: autoformation au language Objectiv-C</li>
                <li>Niveau d'anglais BTS</li>
            </ul>
        </div>
    </div><!-- end .acc-container -->


    <span class=\"acc-trigger\">
        <a href=\"#\">Experiences professionels</a>
    </span>
    <div class=\"acc-container\">
        <div class=\"content\">
            <ul class=\"dash dotted\">
                <li>2009 à 2013: emploi saisonnier tous les étés dans une brasserie a salers (cantal)</li>
                <li>21 mai 2013 - 28 juin 2013: Stage en entreprise dans le cadre de mon BTS dans l' entreprise <a href=\"http://archives.reseaucerta.org/sio/\">Michel Visy Archivage</a> a Aurillac</li>
                <li>8 juillet 2013 - 25 juillet 2013: Developpement d'une application web pour l' entreprise <a href=\"http://archives.reseaucerta.org/sio/\">Michel Visy Archivage</a> a Aurillac</li>
                <li>27 janvier 2014 - 7 fevrier 2014: Stage en entreprise dans le cadre de mon BTS <a href=\"#\"></a> a Aurillac</li>
            </ul>
        </div>
    </div><!-- end .acc-container -->


    <span class=\"acc-trigger\">
        <a href=\"#\">Travaux personnels</a>
    </span>
    <div class=\"acc-container\">
        <div class=\"content\">
            <ul class=\"dash dotted\">
                <li>Developpmeent d'un site web pour le park de vtt lioran free bike park du lioran disponible <a href=\"www.lioranfreebikepark.tk\">ICI</a> qui n'est actuellement pas le site officiel</li>
                <li>Developpement de ce portefolio (<a href=\"www.bancarelvalentin.tk\">www.bancarelvalentin.tk</a>) a l'aide d'une template css deja existante</li>
                <li>Mise en place  d'un serveur FTP, de l'hebergement de ce portefolio (<a href=\"www.bancarelvalentin.tk\">www.bancarelvalentin.tk</a>) ainsi que d'autres services sur mon reseau local a l'aide d'os x server</li>
            </ul>
        </div>
    </div><!-- end .acc-container -->


    <span class=\"acc-trigger\">
        <a href=\"#\">Interets personnels</a>
    </span>
    <div class=\"acc-container\">
        <div class=\"content\">
            <ul class=\"dash dotted\">
                <li>Devellopement (Web-Applicatif)</li>
                <li>VTT de descente</li>
                <li>Ski/Snowboard</li>
            </ul>
        </div>
    </div><!-- end .acc-container -->
";
    }

    // line 111
    public function block_script($context, array $blocks = array())
    {
        // line 112
        echo "
";
    }

    public function getTemplateName()
    {
        return "BancarelValentinPortefolioBundle:Portefolio:cv.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 112,  148 => 111,  50 => 14,  47 => 13,  42 => 9,  39 => 8,  34 => 4,  31 => 3,);
    }
}
