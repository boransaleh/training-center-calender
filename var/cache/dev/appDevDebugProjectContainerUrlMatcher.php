<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // berichten_show
        if ('/berichten' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\BerichtenController::BerichtenExportAction',  '_route' => 'berichten_show',);
        }

        if (0 === strpos($pathinfo, '/f')) {
            // fromto_form
            if ('/fromtoform' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\BerichtenController::getfromToDateFormAction',  '_route' => 'fromto_form',);
            }

            // feirtage-view
            if ('/feirtageview' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\feirtageController::feirtageViewAction',  '_route' => 'feirtage-view',);
            }

            // forget_password
            if ('/forget' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\securityController::forgetPasswordAction',  '_route' => 'forget_password',);
            }

            if (0 === strpos($pathinfo, '/fullcalendar')) {
                // fullcalendar_loadevents
                if ('/fullcalendar/load' === $pathinfo) {
                    return array (  '_controller' => 'fadosProduccions\\fullCalendarBundle\\Controller\\CalendarController::loadAction',  '_route' => 'fullcalendar_loadevents',);
                }

                // fullcalendar_changedate
                if ('/fullcalendar/change' === $pathinfo) {
                    return array (  '_controller' => 'fadosProduccions\\fullCalendarBundle\\Controller\\CalendarController::changeAction',  '_route' => 'fullcalendar_changedate',);
                }

                // fullcalendar_checkevent
                if ('/fullcalendar/check' === $pathinfo) {
                    return array (  '_controller' => 'fadosProduccions\\fullCalendarBundle\\Controller\\CalendarController::checkAction',  '_route' => 'fullcalendar_checkevent',);
                }

                // fullcalendar_resizedate
                if ('/fullcalendar/resize' === $pathinfo) {
                    return array (  '_controller' => 'fadosProduccions\\fullCalendarBundle\\Controller\\CalendarController::resizeAction',  '_route' => 'fullcalendar_resizedate',);
                }

                // fullcalendar_feirtage
                if ('/fullcalendar/reloadfeirtage' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\feirtageController::MigrateFreiTagEventsAction',  '_route' => 'fullcalendar_feirtage',);
                }

                // fullcalendar_delevent
                if ('/fullcalendar/delete' === $pathinfo) {
                    return array (  '_controller' => 'fadosProduccions\\fullCalendarBundle\\Controller\\CalendarController::deleteAction',  '_route' => 'fullcalendar_delevent',);
                }

                // fullcalendar_addevent
                if ('/fullcalendar/add' === $pathinfo) {
                    return array (  '_controller' => 'fadosProduccions\\fullCalendarBundle\\Controller\\CalendarController::addAction',  '_route' => 'fullcalendar_addevent',);
                }

                // fullcalendar_getdozentevent
                if ('/fullcalendar/geteventdozent' === $pathinfo) {
                    return array (  '_controller' => 'fadosProduccions\\fullCalendarBundle\\Controller\\CalendarController::geteventdozentAction',  '_route' => 'fullcalendar_getdozentevent',);
                }

            }

        }

        // print_calendar
        if ('/print' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\CalendarPrintController::PrintCalendarAction',  '_route' => 'print_calendar',);
        }

        // search-calendar
        if ('/SearchCalendar' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\CalendarTableReport::getReportAction',  '_route' => 'search-calendar',);
        }

        if (0 === strpos($pathinfo, '/d')) {
            // draw-table
            if ('/drawtable' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\CalendarTableReport::DrawTabelAction',  '_route' => 'draw-table',);
            }

            // dashboard
            if ('/dashboard' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DashboardController::dashboardAction',  '_route' => 'dashboard',);
            }

            if (0 === strpos($pathinfo, '/dozent')) {
                // dozent_show
                if ('/dozent' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\DozentenManagController::DozentAction',  '_route' => 'dozent_show',);
                }

                // dozent_count
                if ('/dozentcount' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\LayoutDataGetterController::getGroupCountAction',  '_route' => 'dozent_count',);
                }

            }

        }

        // chart
        if ('/chart' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\DashboardController::ChartAction',  '_route' => 'chart',);
        }

        if (0 === strpos($pathinfo, '/s')) {
            if (0 === strpos($pathinfo, '/save')) {
                if (0 === strpos($pathinfo, '/saverow')) {
                    // save_row_dozent
                    if ('/saverowdozent' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\DozentenManagController::addRowAction',  '_route' => 'save_row_dozent',);
                    }

                    // save_row_einzehl
                    if ('/saveroweinzehl' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\EinzehfachController::addRowAction',  '_route' => 'save_row_einzehl',);
                    }

                    // save_row
                    if ('/saverow' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\GesamtFachController::addRowAction',  '_route' => 'save_row',);
                    }

                }

                // save_group
                if ('/savegroup' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\GruppeController::addGroupAction',  '_route' => 'save_group',);
                }

                // save_standort
                if ('/savestandort' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\StandOrtController::addRowAction',  '_route' => 'save_standort',);
                }

                // save_user
                if ('/saveuser' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\UserManagementController::addUserAction',  '_route' => 'save_user',);
                }

                // save_feirtag
                if ('/saveFeirtag' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\feirtageController::addFeirtagAction',  '_route' => 'save_feirtag',);
                }

            }

            // standort-manage
            if ('/standort' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\StandOrtController::standortAction',  '_route' => 'standort-manage',);
            }

            // stunden-plan
            if ('/stundenplan' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\StundenPlanController::indexAction',  '_route' => 'stunden-plan',);
            }

            // sg_datatables_edit
            if ('/sg/datatables/edit/field' === $pathinfo) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_sg_datatables_edit;
                }

                return array (  '_controller' => 'Sg\\DatatablesBundle\\Controller\\DatatableController::editAction',  '_route' => 'sg_datatables_edit',);
            }
            not_sg_datatables_edit:

        }

        elseif (0 === strpos($pathinfo, '/e')) {
            // einzehl-fach
            if ('/einzehl' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\EinzehfachController::einzehlAction',  '_route' => 'einzehl-fach',);
            }

            // erstellen_form
            if ('/erstellenform' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\LayoutDataGetterController::ErstellenGroupCalendarFormAction',  '_route' => 'erstellen_form',);
            }

            // export-gpdf
            if (0 === strpos($pathinfo, '/exportgrouppdf') && preg_match('#^/exportgrouppdf/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'export-gpdf')), array (  '_controller' => 'AppBundle\\Controller\\PdfGroupBerichtenController::PrintAction',));
            }

        }

        // gesamt-fach
        if ('/gesamt' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\GesamtFachController::GesamtFachAction',  '_route' => 'gesamt-fach',);
        }

        if (0 === strpos($pathinfo, '/group')) {
            // group-report
            if ('/groupreport' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\GroupReportController::showGroupReport',  '_route' => 'group-report',);
            }

            // group_show
            if ('/groupmanage' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\GruppeController::GroupManagementAction',  '_route' => 'group_show',);
            }

            // groupberichten_form
            if ('/groupberichtenform' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\LayoutDataGetterController::GroupBerichtenFormRenderAction',  '_route' => 'groupberichten_form',);
            }

        }

        // user_show
        if ('/usermanage' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\UserManagementController::UserManagAction',  '_route' => 'user_show',);
        }

        // user_delete
        if (0 === strpos($pathinfo, '/userdelete') && preg_match('#^/userdelete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            if ('GET' !== $canonicalMethod) {
                $allow[] = 'GET';
                goto not_user_delete;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_delete')), array (  '_controller' => 'AppBundle\\Controller\\UserManagementController::deleteAction',));
        }
        not_user_delete:

        // security_login
        if ('/login' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\securityController::loginAction',  '_route' => 'security_login',);
        }

        // security_logout
        if ('/logout' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\securityController::logoutAction',  '_route' => 'security_logout',);
        }

        // reset_password
        if (0 === strpos($pathinfo, '/resetpassword') && preg_match('#^/resetpassword/(?P<email>[^/]++)/(?P<passkey>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'reset_password')), array (  '_controller' => 'AppBundle\\Controller\\securityController::ResetAction',));
        }

        // fos_js_routing_js
        if (0 === strpos($pathinfo, '/js/routing') && preg_match('#^/js/routing(?:\\.(?P<_format>js|json))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_js_routing_js')), array (  '_controller' => 'fos_js_routing.controller:indexAction',  '_format' => 'js',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
