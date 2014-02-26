<?php

/* BancarelValentinPortefolioBundle:Portefolio:index.html.twig */
class __TwigTemplate_bc3b095b54134462719e5c1ba15971e48d36bedcfe5950d95a4bbabf50261e97 extends Twig_Template
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    Portefolio de Mr Bancarel Valentin
";
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "    <h2 class=\"slogan align-center\">Bienvenue sur mon portefolio</h2>

    <div class=\"one-half\">
        <p>Je m'appelle <strong>Valentin Bancarel</strong>, j'ai 19 ans et je suis actuellement étudiant en 2ème année de <strong>BTS SIO</strong> 
            (Services Informatiques aux Organisations), spécialité <strong>SLAM</strong> (Solutions Logicielles 
             et Applications Métiers) en formation continue au lycée <a href='http://www.monnet-mermoz.fr/'>Jean Monnet</a> d'aurillac. Pour plus d'information 
             sur cette formation, vous puvez consulter <a href='http://archives.reseaucerta.org/sio/'>la fiche du BTS SIO</a> sur le reseau certa. </p>
    </div>
    <div class=\"one-half last\">
         <p>J'ai créé ce portfolio dans le cadre de ma formation afin de mettre a disposition les différentes competences
             acquise et mes travaux réalisés durant ces 2 années de BTS que ce soit durant les activité et Projet Personnel Encadré réaliser en cours,
             mais deux stages en entreprise, ou encore dans le cadre de ma <a href='";
        // line 20
        echo $this->env->getExtension('routing')->getPath("portefolio_veille");
        echo "'>veille technologique</a>.
    </div>
    <div class=\"clear\"></div>



    <h2 class=\"slogan align-center\">Ma Formation & Mon Parcours</h2>
    <div class=\"one-third last\">
         <p>
             Issu d'un Baccalauréat Sciences et Techniques de l'Ingenieur (STI), je poursuis donc mes études en <strong>BTS SIO</strong>, 
             dans l'objectif de continuer ensuite mes études, pour me spécialiser dans le <strong>développement Web</strong> ou 
                 d'<strong>aplications mobiles</strong>. Tous cela dans l'optique d'en faire un jour mon metier.
         </p>
    </div>
    <div class=\"two-third\">
         <p>
             J'ai à mon actif deux stage en entreprise réaliser dans le cadre de ma formation, ces stage
             d'une durée de 5 semaines ce sontt derouler dans l'entreprise <a href=\"http://www.archivage-visy.fr/\">Michel Visy Archivage</a>
             a Aurillac, le premier stage a donner suite a un contrat de travail d'une durée de 
             trois semaine supplementaire. De ce fait, je connais bien les relations avec les clients ainsi que le travail en 
             milieu professionnel.
             Pour plus d'informations sur mon parcour professionnel, vous pouvez consulter mon <a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("portefolio_cv");
        echo "\">CV</a>
         </p>
    </div>
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
        return array (  77 => 41,  53 => 20,  40 => 9,  37 => 8,  32 => 4,  29 => 3,);
    }
}
