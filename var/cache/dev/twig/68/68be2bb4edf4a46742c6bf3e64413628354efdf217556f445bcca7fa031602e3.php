<?php

/* SgDatatablesBundle:datatable:events.html.twig */
class __TwigTemplate_dddc0268c2d788c103ed23083ad957a8baa7ed005a1b24a1f24b9e9004070b4a extends Twig_Template
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
        $__internal_ca402188823368e41eb006a6a1bd079c4b01e334131e67b61b1ac4ba9277340a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca402188823368e41eb006a6a1bd079c4b01e334131e67b61b1ac4ba9277340a->enter($__internal_ca402188823368e41eb006a6a1bd079c4b01e334131e67b61b1ac4ba9277340a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:datatable:events.html.twig"));

        $__internal_26f84a81acbaea8bf62205b8406fb4cc13d9c5085a998db6a3c1a157d34a2560 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26f84a81acbaea8bf62205b8406fb4cc13d9c5085a998db6a3c1a157d34a2560->enter($__internal_26f84a81acbaea8bf62205b8406fb4cc13d9c5085a998db6a3c1a157d34a2560_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:datatable:events.html.twig"));

        // line 9
        if ( !($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "events", array()), "columnSizing", array()) === null)) {
            // line 10
            echo "    ";
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? null), "events", array(), "any", false, true), "columnSizing", array(), "any", false, true), "vars", array(), "array", true, true)) {
                // line 11
                echo "        ";
                $context["vars"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "events", array()), "columnSizing", array()), "vars", array(), "array");
                // line 12
                echo "    ";
            } else {
                // line 13
                echo "        ";
                $context["vars"] = array();
                // line 14
                echo "    ";
            }
            // line 15
            echo "    .on('column-sizing.dt', ";
            $this->loadTemplate($this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "events", array()), "columnSizing", array()), "template", array(), "array"), "SgDatatablesBundle:datatable:events.html.twig", 15)->display(array_merge($context, ($context["vars"] ?? $this->getContext($context, "vars"))));
            echo ")
";
        }
        // line 17
        if ( !($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "events", array()), "columnVisibility", array()) === null)) {
            // line 18
            echo "    ";
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? null), "events", array(), "any", false, true), "columnVisibility", array(), "any", false, true), "vars", array(), "array", true, true)) {
                // line 19
                echo "        ";
                $context["vars"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "events", array()), "columnVisibility", array()), "vars", array(), "array");
                // line 20
                echo "    ";
            } else {
                // line 21
                echo "        ";
                $context["vars"] = array();
                // line 22
                echo "    ";
            }
            // line 23
            echo "    .on('column-visibility.dt', ";
            $this->loadTemplate($this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "events", array()), "columnVisibility", array()), "template", array(), "array"), "SgDatatablesBundle:datatable:events.html.twig", 23)->display(array_merge($context, ($context["vars"] ?? $this->getContext($context, "vars"))));
            echo ")
";
        }
        // line 25
        if ( !($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "events", array()), "destroy", array()) === null)) {
            // line 26
            echo "    ";
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? null), "events", array(), "any", false, true), "destroy", array(), "any", false, true), "vars", array(), "array", true, true)) {
                // line 27
                echo "        ";
                $context["vars"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "events", array()), "destroy", array()), "vars", array(), "array");
                // line 28
                echo "    ";
            } else {
                // line 29
                echo "        ";
                $context["vars"] = array();
                // line 30
                echo "    ";
            }
            // line 31
            echo "    .on('destroy.dt', ";
            $this->loadTemplate($this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "events", array()), "destroy", array()), "template", array(), "array"), "SgDatatablesBundle:datatable:events.html.twig", 31)->display(array_merge($context, ($context["vars"] ?? $this->getContext($context, "vars"))));
            echo ")
";
        }
        // line 33
        if ( !($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "events", array()), "error", array()) === null)) {
            // line 34
            echo "    ";
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? null), "events", array(), "any", false, true), "error", array(), "any", false, true), "vars", array(), "array", true, true)) {
                // line 35
                echo "        ";
                $context["vars"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "events", array()), "error", array()), "vars", array(), "array");
                // line 36
                echo "    ";
            } else {
                // line 37
                echo "        ";
                $context["vars"] = array();
                // line 38
                echo "    ";
            }
            // line 39
            echo "    .on('error.dt', ";
            $this->loadTemplate($this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "events", array()), "error", array()), "template", array(), "array"), "SgDatatablesBundle:datatable:events.html.twig", 39)->display(array_merge($context, ($context["vars"] ?? $this->getContext($context, "vars"))));
            echo ")
";
        }
        // line 41
        if ( !($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "events", array()), "length", array()) === null)) {
            // line 42
            echo "    ";
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? null), "events", array(), "any", false, true), "length", array(), "any", false, true), "vars", array(), "array", true, true)) {
                // line 43
                echo "        ";
                $context["vars"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "events", array()), "length", array()), "vars", array(), "array");
                // line 44
                echo "    ";
            } else {
                // line 45
                echo "        ";
                $context["vars"] = array();
                // line 46
                echo "    ";
            }
            // line 47
            echo "    .on('length.dt', ";
            $this->loadTemplate($this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "events", array()), "length", array()), "template", array(), "array"), "SgDatatablesBundle:datatable:events.html.twig", 47)->display(array_merge($context, ($context["vars"] ?? $this->getContext($context, "vars"))));
            echo ")
";
        }
        // line 49
        if ( !($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "events", array()), "order", array()) === null)) {
            // line 50
            echo "    ";
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? null), "events", array(), "any", false, true), "order", array(), "any", false, true), "vars", array(), "array", true, true)) {
                // line 51
                echo "        ";
                $context["vars"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "events", array()), "order", array()), "vars", array(), "array");
                // line 52
                echo "    ";
            } else {
                // line 53
                echo "        ";
                $context["vars"] = array();
                // line 54
                echo "    ";
            }
            // line 55
            echo "    .on('order.dt', ";
            $this->loadTemplate($this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "events", array()), "order", array()), "template", array(), "array"), "SgDatatablesBundle:datatable:events.html.twig", 55)->display(array_merge($context, ($context["vars"] ?? $this->getContext($context, "vars"))));
            echo ")
";
        }
        // line 57
        if ( !($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "events", array()), "page", array()) === null)) {
            // line 58
            echo "    ";
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? null), "events", array(), "any", false, true), "page", array(), "any", false, true), "vars", array(), "array", true, true)) {
                // line 59
                echo "        ";
                $context["vars"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "events", array()), "page", array()), "vars", array(), "array");
                // line 60
                echo "    ";
            } else {
                // line 61
                echo "        ";
                $context["vars"] = array();
                // line 62
                echo "    ";
            }
            // line 63
            echo "    .on('page.dt', ";
            $this->loadTemplate($this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "events", array()), "page", array()), "template", array(), "array"), "SgDatatablesBundle:datatable:events.html.twig", 63)->display(array_merge($context, ($context["vars"] ?? $this->getContext($context, "vars"))));
            echo ")
";
        }
        // line 65
        if ( !($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "events", array()), "preInit", array()) === null)) {
            // line 66
            echo "    ";
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? null), "events", array(), "any", false, true), "preInit", array(), "any", false, true), "vars", array(), "array", true, true)) {
                // line 67
                echo "        ";
                $context["vars"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "events", array()), "preInit", array()), "vars", array(), "array");
                // line 68
                echo "    ";
            } else {
                // line 69
                echo "        ";
                $context["vars"] = array();
                // line 70
                echo "    ";
            }
            // line 71
            echo "    .on('preInit.dt', ";
            $this->loadTemplate($this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "events", array()), "preInit", array()), "template", array(), "array"), "SgDatatablesBundle:datatable:events.html.twig", 71)->display(array_merge($context, ($context["vars"] ?? $this->getContext($context, "vars"))));
            echo ")
";
        }
        // line 73
        if ( !($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "events", array()), "preXhr", array()) === null)) {
            // line 74
            echo "    ";
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? null), "events", array(), "any", false, true), "preXhr", array(), "any", false, true), "vars", array(), "array", true, true)) {
                // line 75
                echo "        ";
                $context["vars"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "events", array()), "preXhr", array()), "vars", array(), "array");
                // line 76
                echo "    ";
            } else {
                // line 77
                echo "        ";
                $context["vars"] = array();
                // line 78
                echo "    ";
            }
            // line 79
            echo "    .on('preXhr.dt', ";
            $this->loadTemplate($this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "events", array()), "preXhr", array()), "template", array(), "array"), "SgDatatablesBundle:datatable:events.html.twig", 79)->display(array_merge($context, ($context["vars"] ?? $this->getContext($context, "vars"))));
            echo ")
";
        }
        // line 81
        if ( !($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "events", array()), "processing", array()) === null)) {
            // line 82
            echo "    ";
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? null), "events", array(), "any", false, true), "processing", array(), "any", false, true), "vars", array(), "array", true, true)) {
                // line 83
                echo "        ";
                $context["vars"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "events", array()), "processing", array()), "vars", array(), "array");
                // line 84
                echo "    ";
            } else {
                // line 85
                echo "        ";
                $context["vars"] = array();
                // line 86
                echo "    ";
            }
            // line 87
            echo "    .on('processing.dt', ";
            $this->loadTemplate($this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "events", array()), "processing", array()), "template", array(), "array"), "SgDatatablesBundle:datatable:events.html.twig", 87)->display(array_merge($context, ($context["vars"] ?? $this->getContext($context, "vars"))));
            echo ")
";
        }
        // line 89
        if ( !($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "events", array()), "search", array()) === null)) {
            // line 90
            echo "    ";
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? null), "events", array(), "any", false, true), "search", array(), "any", false, true), "vars", array(), "array", true, true)) {
                // line 91
                echo "        ";
                $context["vars"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "events", array()), "search", array()), "vars", array(), "array");
                // line 92
                echo "    ";
            } else {
                // line 93
                echo "        ";
                $context["vars"] = array();
                // line 94
                echo "    ";
            }
            // line 95
            echo "    .on('search.dt', ";
            $this->loadTemplate($this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "events", array()), "search", array()), "template", array(), "array"), "SgDatatablesBundle:datatable:events.html.twig", 95)->display(array_merge($context, ($context["vars"] ?? $this->getContext($context, "vars"))));
            echo ")
";
        }
        // line 97
        if ( !($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "events", array()), "stateLoaded", array()) === null)) {
            // line 98
            echo "    ";
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? null), "events", array(), "any", false, true), "stateLoaded", array(), "any", false, true), "vars", array(), "array", true, true)) {
                // line 99
                echo "        ";
                $context["vars"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "events", array()), "stateLoaded", array()), "vars", array(), "array");
                // line 100
                echo "    ";
            } else {
                // line 101
                echo "        ";
                $context["vars"] = array();
                // line 102
                echo "    ";
            }
            // line 103
            echo "    .on('stateLoaded.dt', ";
            $this->loadTemplate($this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "events", array()), "stateLoaded", array()), "template", array(), "array"), "SgDatatablesBundle:datatable:events.html.twig", 103)->display(array_merge($context, ($context["vars"] ?? $this->getContext($context, "vars"))));
            echo ")
";
        }
        // line 105
        if ( !($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "events", array()), "stateLoadParams", array()) === null)) {
            // line 106
            echo "    ";
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? null), "events", array(), "any", false, true), "stateLoadParams", array(), "any", false, true), "vars", array(), "array", true, true)) {
                // line 107
                echo "        ";
                $context["vars"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "events", array()), "stateLoadParams", array()), "vars", array(), "array");
                // line 108
                echo "    ";
            } else {
                // line 109
                echo "        ";
                $context["vars"] = array();
                // line 110
                echo "    ";
            }
            // line 111
            echo "    .on('stateLoadParams.dt', ";
            $this->loadTemplate($this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "events", array()), "stateLoadParams", array()), "template", array(), "array"), "SgDatatablesBundle:datatable:events.html.twig", 111)->display(array_merge($context, ($context["vars"] ?? $this->getContext($context, "vars"))));
            echo ")
";
        }
        // line 113
        if ( !($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "events", array()), "stateSaveParams", array()) === null)) {
            // line 114
            echo "    ";
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? null), "events", array(), "any", false, true), "stateSaveParams", array(), "any", false, true), "vars", array(), "array", true, true)) {
                // line 115
                echo "        ";
                $context["vars"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "events", array()), "stateSaveParams", array()), "vars", array(), "array");
                // line 116
                echo "    ";
            } else {
                // line 117
                echo "        ";
                $context["vars"] = array();
                // line 118
                echo "    ";
            }
            // line 119
            echo "    .on('stateSaveParams.dt', ";
            $this->loadTemplate($this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "events", array()), "stateSaveParams", array()), "template", array(), "array"), "SgDatatablesBundle:datatable:events.html.twig", 119)->display(array_merge($context, ($context["vars"] ?? $this->getContext($context, "vars"))));
            echo ")
";
        }
        // line 121
        if ( !($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "events", array()), "xhr", array()) === null)) {
            // line 122
            echo "    ";
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? null), "events", array(), "any", false, true), "xhr", array(), "any", false, true), "vars", array(), "array", true, true)) {
                // line 123
                echo "        ";
                $context["vars"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "events", array()), "xhr", array()), "vars", array(), "array");
                // line 124
                echo "    ";
            } else {
                // line 125
                echo "        ";
                $context["vars"] = array();
                // line 126
                echo "    ";
            }
            // line 127
            echo "    .on('xhr.dt', ";
            $this->loadTemplate($this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "events", array()), "xhr", array()), "template", array(), "array"), "SgDatatablesBundle:datatable:events.html.twig", 127)->display(array_merge($context, ($context["vars"] ?? $this->getContext($context, "vars"))));
            echo ")
";
        }
        
        $__internal_ca402188823368e41eb006a6a1bd079c4b01e334131e67b61b1ac4ba9277340a->leave($__internal_ca402188823368e41eb006a6a1bd079c4b01e334131e67b61b1ac4ba9277340a_prof);

        
        $__internal_26f84a81acbaea8bf62205b8406fb4cc13d9c5085a998db6a3c1a157d34a2560->leave($__internal_26f84a81acbaea8bf62205b8406fb4cc13d9c5085a998db6a3c1a157d34a2560_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:datatable:events.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  364 => 127,  361 => 126,  358 => 125,  355 => 124,  352 => 123,  349 => 122,  347 => 121,  341 => 119,  338 => 118,  335 => 117,  332 => 116,  329 => 115,  326 => 114,  324 => 113,  318 => 111,  315 => 110,  312 => 109,  309 => 108,  306 => 107,  303 => 106,  301 => 105,  295 => 103,  292 => 102,  289 => 101,  286 => 100,  283 => 99,  280 => 98,  278 => 97,  272 => 95,  269 => 94,  266 => 93,  263 => 92,  260 => 91,  257 => 90,  255 => 89,  249 => 87,  246 => 86,  243 => 85,  240 => 84,  237 => 83,  234 => 82,  232 => 81,  226 => 79,  223 => 78,  220 => 77,  217 => 76,  214 => 75,  211 => 74,  209 => 73,  203 => 71,  200 => 70,  197 => 69,  194 => 68,  191 => 67,  188 => 66,  186 => 65,  180 => 63,  177 => 62,  174 => 61,  171 => 60,  168 => 59,  165 => 58,  163 => 57,  157 => 55,  154 => 54,  151 => 53,  148 => 52,  145 => 51,  142 => 50,  140 => 49,  134 => 47,  131 => 46,  128 => 45,  125 => 44,  122 => 43,  119 => 42,  117 => 41,  111 => 39,  108 => 38,  105 => 37,  102 => 36,  99 => 35,  96 => 34,  94 => 33,  88 => 31,  85 => 30,  82 => 29,  79 => 28,  76 => 27,  73 => 26,  71 => 25,  65 => 23,  62 => 22,  59 => 21,  56 => 20,  53 => 19,  50 => 18,  48 => 17,  42 => 15,  39 => 14,  36 => 13,  33 => 12,  30 => 11,  27 => 10,  25 => 9,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{##
 # This file is part of the SgDatatablesBundle package.
 #
 # (c) stwe <https://github.com/stwe/DatatablesBundle>
 #
 # For the full copyright and license information, please view the LICENSE
 # file that was distributed with this source code.
 #}
{% if sg_datatables_view.events.columnSizing is not same as(null) %}
    {% if sg_datatables_view.events.columnSizing['vars'] is defined %}
        {% set vars = sg_datatables_view.events.columnSizing['vars'] %}
    {% else %}
        {% set vars = {} %}
    {% endif %}
    .on('column-sizing.dt', {% include sg_datatables_view.events.columnSizing['template'] with vars %})
{% endif %}
{% if sg_datatables_view.events.columnVisibility is not same as(null) %}
    {% if sg_datatables_view.events.columnVisibility['vars'] is defined %}
        {% set vars = sg_datatables_view.events.columnVisibility['vars'] %}
    {% else %}
        {% set vars = {} %}
    {% endif %}
    .on('column-visibility.dt', {% include sg_datatables_view.events.columnVisibility['template'] with vars %})
{% endif %}
{% if sg_datatables_view.events.destroy is not same as(null) %}
    {% if sg_datatables_view.events.destroy['vars'] is defined %}
        {% set vars = sg_datatables_view.events.destroy['vars'] %}
    {% else %}
        {% set vars = {} %}
    {% endif %}
    .on('destroy.dt', {% include sg_datatables_view.events.destroy['template'] with vars %})
{% endif %}
{% if sg_datatables_view.events.error is not same as(null) %}
    {% if sg_datatables_view.events.error['vars'] is defined %}
        {% set vars = sg_datatables_view.events.error['vars'] %}
    {% else %}
        {% set vars = {} %}
    {% endif %}
    .on('error.dt', {% include sg_datatables_view.events.error['template'] with vars %})
{% endif %}
{% if sg_datatables_view.events.length is not same as(null) %}
    {% if sg_datatables_view.events.length['vars'] is defined %}
        {% set vars = sg_datatables_view.events.length['vars'] %}
    {% else %}
        {% set vars = {} %}
    {% endif %}
    .on('length.dt', {% include sg_datatables_view.events.length['template'] with vars %})
{% endif %}
{% if sg_datatables_view.events.order is not same as(null) %}
    {% if sg_datatables_view.events.order['vars'] is defined %}
        {% set vars = sg_datatables_view.events.order['vars'] %}
    {% else %}
        {% set vars = {} %}
    {% endif %}
    .on('order.dt', {% include sg_datatables_view.events.order['template'] with vars %})
{% endif %}
{% if sg_datatables_view.events.page is not same as(null) %}
    {% if sg_datatables_view.events.page['vars'] is defined %}
        {% set vars = sg_datatables_view.events.page['vars'] %}
    {% else %}
        {% set vars = {} %}
    {% endif %}
    .on('page.dt', {% include sg_datatables_view.events.page['template'] with vars %})
{% endif %}
{% if sg_datatables_view.events.preInit is not same as(null) %}
    {% if sg_datatables_view.events.preInit['vars'] is defined %}
        {% set vars = sg_datatables_view.events.preInit['vars'] %}
    {% else %}
        {% set vars = {} %}
    {% endif %}
    .on('preInit.dt', {% include sg_datatables_view.events.preInit['template'] with vars %})
{% endif %}
{% if sg_datatables_view.events.preXhr is not same as(null) %}
    {% if sg_datatables_view.events.preXhr['vars'] is defined %}
        {% set vars = sg_datatables_view.events.preXhr['vars'] %}
    {% else %}
        {% set vars = {} %}
    {% endif %}
    .on('preXhr.dt', {% include sg_datatables_view.events.preXhr['template'] with vars %})
{% endif %}
{% if sg_datatables_view.events.processing is not same as(null) %}
    {% if sg_datatables_view.events.processing['vars'] is defined %}
        {% set vars = sg_datatables_view.events.processing['vars'] %}
    {% else %}
        {% set vars = {} %}
    {% endif %}
    .on('processing.dt', {% include sg_datatables_view.events.processing['template'] with vars %})
{% endif %}
{% if sg_datatables_view.events.search is not same as(null) %}
    {% if sg_datatables_view.events.search['vars'] is defined %}
        {% set vars = sg_datatables_view.events.search['vars'] %}
    {% else %}
        {% set vars = {} %}
    {% endif %}
    .on('search.dt', {% include sg_datatables_view.events.search['template'] with vars %})
{% endif %}
{% if sg_datatables_view.events.stateLoaded is not same as(null) %}
    {% if sg_datatables_view.events.stateLoaded['vars'] is defined %}
        {% set vars = sg_datatables_view.events.stateLoaded['vars'] %}
    {% else %}
        {% set vars = {} %}
    {% endif %}
    .on('stateLoaded.dt', {% include sg_datatables_view.events.stateLoaded['template'] with vars %})
{% endif %}
{% if sg_datatables_view.events.stateLoadParams is not same as(null) %}
    {% if sg_datatables_view.events.stateLoadParams['vars'] is defined %}
        {% set vars = sg_datatables_view.events.stateLoadParams['vars'] %}
    {% else %}
        {% set vars = {} %}
    {% endif %}
    .on('stateLoadParams.dt', {% include sg_datatables_view.events.stateLoadParams['template'] with vars %})
{% endif %}
{% if sg_datatables_view.events.stateSaveParams is not same as(null) %}
    {% if sg_datatables_view.events.stateSaveParams['vars'] is defined %}
        {% set vars = sg_datatables_view.events.stateSaveParams['vars'] %}
    {% else %}
        {% set vars = {} %}
    {% endif %}
    .on('stateSaveParams.dt', {% include sg_datatables_view.events.stateSaveParams['template'] with vars %})
{% endif %}
{% if sg_datatables_view.events.xhr is not same as(null) %}
    {% if sg_datatables_view.events.xhr['vars'] is defined %}
        {% set vars = sg_datatables_view.events.xhr['vars'] %}
    {% else %}
        {% set vars = {} %}
    {% endif %}
    .on('xhr.dt', {% include sg_datatables_view.events.xhr['template'] with vars %})
{% endif %}
", "SgDatatablesBundle:datatable:events.html.twig", "/root/Schreibtisch/devops/vendor/sg/datatablesbundle/Resources/views/datatable/events.html.twig");
    }
}
