<?php

/* BancarelValentinPortefolioBundle:Portefolio:index.html.twig */
class __TwigTemplate_59b6f19d1073e966b813e52806bfd929cbc065ae4fee0b9673a0e6d7a986dbcf extends Twig_Template
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
        echo "    Portefolio de Mr Bancarel Valentin
";
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        // line 14
        echo "    <h2 class=\"slogan align-center\">Bienvenue sur mon portefolio</h2>

    <div class=\"one-half\">
         <p>Je m'appelle Valentin Bancarel, j'ai 19 ans et je suis actuellement étudiant en 2ème année de BTS SIO 
             (Services Informatiques aux Organisations), spécialité SLAM (Solutions Logicielles 
             et Applications Métiers) en formation continue au lycée Jean Monnet d'aurillac. Pour plus d'information 
             sur cette formation, vous puvez consulter <a href='http://archives.reseaucerta.org/sio/'>la fiche du BTS SIO</a> sur le reseau certa. </p>
    </div>
    <div class=\"one-half last\">
         <p>J'ai créé ce portfolio dans le cadre de ma formation afin de mettre a disposition les différentes competences
             acquise durant ces 2 années de BTS que ce soit durant les activité et Projet Personnel Encadré réaliser en cours,
             ou bien mais deux stages en entreprise.
    </div>
    <div class=\"clear\"></div>



    <h2 class=\"slogan align-center\">Ma Formation & Mon Parcours</h2>
    <div class=\"one-third last\">
         <p>Issu d'un Baccalauréat Sciences et Techniques de l'Ingenieur (STI), je poursuis donc mes études en BTS SIO, 
             option SLAM et je compte ensuite continuer mes études, pour me spécialiser dans le <strong>développement Web ou 
                 d'aplications mobiles</strong>. Tous cela dans l'optique d'en faire un jour mon metier.</p>
    </div>
    <div class=\"two-third\">
         <p>J'ai à mon actif deux <strong>stage en entreprise</strong> réaliser dans le cadre de ma formation, ces stage
             d'une durée de <strong>5 semaines</strong> ce sontt derouler dans l'entreprise <a href=\"http://www.archivage-visy.fr/\">Michel Visy Archivage</a>
             a Aurillac, le premier stage a donner suite a un <strong>contrat de travail</strong> d'une durée de 
             <strong>trois semaine</strong> supplementaire. De ce fait, je connais bien les relations avec les clients et le travail en 
             <strong>milieu professionnel</strong>.</p>
    </div>
";
    }

    // line 47
    public function block_script($context, array $blocks = array())
    {
        // line 48
        echo "
";
    }

    public function getTemplateName()
    {
        return "BancarelValentinPortefolioBundle:Portefolio:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 48,  84 => 47,  50 => 14,  47 => 13,  42 => 9,  39 => 8,  34 => 4,  31 => 3,);
    }
}
