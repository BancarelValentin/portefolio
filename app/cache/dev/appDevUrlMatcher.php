<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/rpi')) {
            // admin_rpi_homepage
            if (rtrim($pathinfo, '/') === '/rpi') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'admin_rpi_homepage');
                }

                return array (  '_controller' => 'BancarelValentin\\AdminRPIBundle\\Controller\\AdminRPIController::indexAction',  '_route' => 'admin_rpi_homepage',);
            }

            if (0 === strpos($pathinfo, '/rpi/allO')) {
                // admin_rpi_switchOnAll
                if ($pathinfo === '/rpi/allOn') {
                    return array (  '_controller' => 'BancarelValentin\\AdminRPIBundle\\Controller\\AdminRPIController::switchOnAllAction',  '_route' => 'admin_rpi_switchOnAll',);
                }

                // admin_rpi_switchOffAll
                if ($pathinfo === '/rpi/allOff') {
                    return array (  '_controller' => 'BancarelValentin\\AdminRPIBundle\\Controller\\AdminRPIController::switchOffAllAction',  '_route' => 'admin_rpi_switchOffAll',);
                }

            }

            if (0 === strpos($pathinfo, '/rpi/initAll')) {
                // admin_rpi_switchAll
                if ($pathinfo === '/rpi/initAll') {
                    return array (  '_controller' => 'BancarelValentin\\AdminRPIBundle\\Controller\\AdminRPIController::initAllAction',  '_route' => 'admin_rpi_switchAll',);
                }

                // admin_rpi_initAll
                if ($pathinfo === '/rpi/initAll') {
                    return array (  '_controller' => 'BancarelValentin\\AdminRPIBundle\\Controller\\AdminRPIController::initAllAction',  '_route' => 'admin_rpi_initAll',);
                }

            }

            if (0 === strpos($pathinfo, '/rpi/chan')) {
                // admin_rpi_changeState
                if (0 === strpos($pathinfo, '/rpi/chanfgeState') && preg_match('#^/rpi/chanfgeState/(?P<id>[^/]++)(?:/(?P<etat>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_rpi_changeState')), array (  '_controller' => 'BancarelValentin\\AdminRPIBundle\\Controller\\AdminRPIController::changeStateAction',  'etat' => 2,));
                }

                // admin_rpi_change_name_pin
                if (0 === strpos($pathinfo, '/rpi/changeNamePin') && preg_match('#^/rpi/changeNamePin/(?P<idPin>[^/]++)/(?P<nom>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_rpi_change_name_pin')), array (  '_controller' => 'BancarelValentin\\AdminRPIBundle\\Controller\\AdminRPIController::changeNamePinAction',));
                }

            }

            // admin_rpi_reveil
            if ($pathinfo === '/rpi/reveil') {
                return array (  '_controller' => 'BancarelValentin\\AdminRPIBundle\\Controller\\AdminRPIController::reveilAction',  '_route' => 'admin_rpi_reveil',);
            }

            // admin_rpi_setReveil
            if ($pathinfo === '/rpi/setReveil') {
                return array (  '_controller' => 'BancarelValentin\\AdminRPIBundle\\Controller\\AdminRPIController::setReveilAction',  '_route' => 'admin_rpi_setReveil',);
            }

            if (0 === strpos($pathinfo, '/rpi/change')) {
                // admin_rpi_changeJoursReveil
                if (0 === strpos($pathinfo, '/rpi/changeJoursReveil') && preg_match('#^/rpi/changeJoursReveil/(?P<idReveil>[^/]++)/(?P<value>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_rpi_changeJoursReveil')), array (  '_controller' => 'BancarelValentin\\AdminRPIBundle\\Controller\\AdminRPIController::changeJoursReveilAction',));
                }

                if (0 === strpos($pathinfo, '/rpi/changeHeureReveil')) {
                    // admin_rpi_changeIframeReveil
                    if (preg_match('#^/rpi/changeHeureReveil/(?P<idReveil>[^/]++)/(?P<value>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_rpi_changeIframeReveil')), array (  '_controller' => 'BancarelValentin\\AdminRPIBundle\\Controller\\AdminRPIController::changeIframeReveilAction',));
                    }

                    // admin_rpi_changeHeureReveil
                    if (preg_match('#^/rpi/changeHeureReveil/(?P<idReveil>[^/]++)/(?P<value>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_rpi_changeHeureReveil')), array (  '_controller' => 'BancarelValentin\\AdminRPIBundle\\Controller\\AdminRPIController::changeHeureReveilAction',));
                    }

                }

            }

        }

        // portefolio_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'portefolio_homepage');
            }

            return array (  '_controller' => 'BancarelValentin\\PortefolioBundle\\Controller\\PortefolioController::indexAction',  '_route' => 'portefolio_homepage',);
        }

        // portefolio_cv
        if ($pathinfo === '/cv') {
            return array (  '_controller' => 'BancarelValentin\\PortefolioBundle\\Controller\\PortefolioController::cvAction',  '_route' => 'portefolio_cv',);
        }

        // portefolio_list_travaux
        if (0 === strpos($pathinfo, '/annee') && preg_match('#^/annee/(?P<annee>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'portefolio_list_travaux')), array (  '_controller' => 'BancarelValentin\\PortefolioBundle\\Controller\\PortefolioController::listTravauxAction',));
        }

        // portefolio_show
        if (0 === strpos($pathinfo, '/show') && preg_match('#^/show/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'portefolio_show')), array (  '_controller' => 'BancarelValentin\\PortefolioBundle\\Controller\\PortefolioController::showAction',));
        }

        // portefolio_veille
        if ($pathinfo === '/veille') {
            return array (  '_controller' => 'BancarelValentin\\PortefolioBundle\\Controller\\PortefolioController::veilleAction',  '_route' => 'portefolio_veille',);
        }

        // portefolio_contact
        if (0 === strpos($pathinfo, '/contact') && preg_match('#^/contact(?:/(?P<idMessage>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'portefolio_contact')), array (  '_controller' => 'BancarelValentin\\PortefolioBundle\\Controller\\PortefolioController::contactAction',  'idMessage' => 0,));
        }

        // portefolio_sendMessage
        if ($pathinfo === '/send') {
            return array (  '_controller' => 'BancarelValentin\\PortefolioBundle\\Controller\\PortefolioController::sendMessageAction',  '_route' => 'portefolio_sendMessage',);
        }

        // portefolio_phpmyadmin
        if ($pathinfo === '/private/phpmyadmin') {
            return array (  '_controller' => 'BancarelValentin\\PortefolioBundle\\Controller\\PortefolioController::openPhpMyAdminAction',  '_route' => 'portefolio_phpmyadmin',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
