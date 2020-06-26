<?php

/* SgDatatablesBundle:datatable:options.html.twig */
class __TwigTemplate_113d86b6dfa34cc158a76672a32bf560c3ca6a96252ff491310b4fe8ce084ec1 extends Twig_Template
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
        $__internal_db345a118ad4f3ba0f3c83061e5fc30df1ddbc5445190d72446f64c7633f76bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db345a118ad4f3ba0f3c83061e5fc30df1ddbc5445190d72446f64c7633f76bb->enter($__internal_db345a118ad4f3ba0f3c83061e5fc30df1ddbc5445190d72446f64c7633f76bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:datatable:options.html.twig"));

        $__internal_4cce9fb2fcc9f4a3bacc19118c913ae7b37201019c4bcf57cc2133a927a0386a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cce9fb2fcc9f4a3bacc19118c913ae7b37201019c4bcf57cc2133a927a0386a->enter($__internal_4cce9fb2fcc9f4a3bacc19118c913ae7b37201019c4bcf57cc2133a927a0386a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:datatable:options.html.twig"));

        // line 9
        if ( !($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "options", array()), "deferLoading", array()) === null)) {
            // line 10
            echo "    \"deferLoading\": ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "options", array()), "deferLoading", array()), "html", null, true);
            echo ",
";
        }
        // line 12
        if ( !($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "options", array()), "displayStart", array()) === null)) {
            // line 13
            echo "    \"displayStart\": ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "options", array()), "displayStart", array()), "html", null, true);
            echo ",
";
        }
        // line 15
        if ( !($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "options", array()), "dom", array()) === null)) {
            // line 16
            echo "    \"dom\": \"";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "options", array()), "dom", array()), "js"), "html", null, true);
            echo "\",
";
        }
        // line 18
        if ( !($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "options", array()), "lengthMenu", array()) === null)) {
            // line 19
            echo "    \"lengthMenu\": ";
            echo $this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "options", array()), "lengthMenu", array());
            echo ",
";
        }
        // line 21
        if ( !($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "options", array()), "order", array()) === null)) {
            // line 22
            echo "    \"order\": ";
            echo $this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "options", array()), "order", array());
            echo ",
";
        }
        // line 24
        if ( !($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "options", array()), "orderCellsTop", array()) === null)) {
            // line 25
            echo "    \"orderCellsTop\": ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Sg\DatatablesBundle\Twig\DatatableTwigExtension')->boolVar($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "options", array()), "orderCellsTop", array())), "html", null, true);
            echo ",
";
        }
        // line 27
        if ( !($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "options", array()), "orderClasses", array()) === null)) {
            // line 28
            echo "    \"orderClasses\": ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Sg\DatatablesBundle\Twig\DatatableTwigExtension')->boolVar($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "options", array()), "orderClasses", array())), "html", null, true);
            echo ",
";
        }
        // line 30
        if ( !($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "options", array()), "orderFixed", array()) === null)) {
            // line 31
            echo "    \"orderFixed\": ";
            echo $this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "options", array()), "orderFixed", array());
            echo ",
";
        }
        // line 33
        if ( !($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "options", array()), "orderMulti", array()) === null)) {
            // line 34
            echo "    \"orderMulti\": ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Sg\DatatablesBundle\Twig\DatatableTwigExtension')->boolVar($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "options", array()), "orderMulti", array())), "html", null, true);
            echo ",
";
        }
        // line 36
        if ( !($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "options", array()), "pageLength", array()) === null)) {
            // line 37
            echo "    \"pageLength\": ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "options", array()), "pageLength", array()), "html", null, true);
            echo ",
";
        }
        // line 39
        if ( !($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "options", array()), "pagingType", array()) === null)) {
            // line 40
            echo "    \"pagingType\": \"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "options", array()), "pagingType", array()), "html", null, true);
            echo "\",
";
        }
        // line 42
        if ( !($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "options", array()), "renderer", array()) === null)) {
            // line 43
            echo "    \"renderer\": \"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "options", array()), "renderer", array()), "html", null, true);
            echo "\",
";
        }
        // line 45
        if ( !($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "options", array()), "retrieve", array()) === null)) {
            // line 46
            echo "    \"retrieve\": ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Sg\DatatablesBundle\Twig\DatatableTwigExtension')->boolVar($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "options", array()), "retrieve", array())), "html", null, true);
            echo ",
";
        }
        // line 48
        if ( !($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "options", array()), "rowId", array()) === null)) {
            // line 49
            echo "    \"rowId\": \"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "options", array()), "rowId", array()), "html", null, true);
            echo "\",
";
        }
        // line 51
        if ( !($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "options", array()), "scrollCollapse", array()) === null)) {
            // line 52
            echo "    \"scrollCollapse\": ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Sg\DatatablesBundle\Twig\DatatableTwigExtension')->boolVar($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "options", array()), "scrollCollapse", array())), "html", null, true);
            echo ",
";
        }
        // line 54
        if ( !($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "options", array()), "searchDelay", array()) === null)) {
            // line 55
            echo "    \"searchDelay\": ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "options", array()), "searchDelay", array()), "html", null, true);
            echo ",
";
        }
        // line 57
        if ( !($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "options", array()), "stateDuration", array()) === null)) {
            // line 58
            echo "    \"stateDuration\": ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "options", array()), "stateDuration", array()), "html", null, true);
            echo ",
";
        }
        // line 60
        if ( !($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "options", array()), "stripeClasses", array()) === null)) {
            // line 61
            echo "    \"stripeClasses\": ";
            echo $this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "options", array()), "stripeClasses", array());
            echo ",
";
        }
        // line 63
        echo "

";
        
        $__internal_db345a118ad4f3ba0f3c83061e5fc30df1ddbc5445190d72446f64c7633f76bb->leave($__internal_db345a118ad4f3ba0f3c83061e5fc30df1ddbc5445190d72446f64c7633f76bb_prof);

        
        $__internal_4cce9fb2fcc9f4a3bacc19118c913ae7b37201019c4bcf57cc2133a927a0386a->leave($__internal_4cce9fb2fcc9f4a3bacc19118c913ae7b37201019c4bcf57cc2133a927a0386a_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:datatable:options.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 63,  163 => 61,  161 => 60,  155 => 58,  153 => 57,  147 => 55,  145 => 54,  139 => 52,  137 => 51,  131 => 49,  129 => 48,  123 => 46,  121 => 45,  115 => 43,  113 => 42,  107 => 40,  105 => 39,  99 => 37,  97 => 36,  91 => 34,  89 => 33,  83 => 31,  81 => 30,  75 => 28,  73 => 27,  67 => 25,  65 => 24,  59 => 22,  57 => 21,  51 => 19,  49 => 18,  43 => 16,  41 => 15,  35 => 13,  33 => 12,  27 => 10,  25 => 9,);
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
{% if sg_datatables_view.options.deferLoading is not same as(null) %}
    \"deferLoading\": {{ sg_datatables_view.options.deferLoading }},
{% endif %}
{% if sg_datatables_view.options.displayStart is not same as(null) %}
    \"displayStart\": {{ sg_datatables_view.options.displayStart }},
{% endif %}
{% if sg_datatables_view.options.dom is not same as(null) %}
    \"dom\": \"{{ sg_datatables_view.options.dom|e('js') }}\",
{% endif %}
{% if sg_datatables_view.options.lengthMenu is not same as(null) %}
    \"lengthMenu\": {{ sg_datatables_view.options.lengthMenu|raw }},
{% endif %}
{% if sg_datatables_view.options.order is not same as(null) %}
    \"order\": {{ sg_datatables_view.options.order|raw }},
{% endif %}
{% if sg_datatables_view.options.orderCellsTop is not same as(null) %}
    \"orderCellsTop\": {{ sg_datatables_view.options.orderCellsTop|sg_datatables_bool_var }},
{% endif %}
{% if sg_datatables_view.options.orderClasses is not same as(null) %}
    \"orderClasses\": {{ sg_datatables_view.options.orderClasses|sg_datatables_bool_var }},
{% endif %}
{% if sg_datatables_view.options.orderFixed is not same as(null) %}
    \"orderFixed\": {{ sg_datatables_view.options.orderFixed|raw }},
{% endif %}
{% if sg_datatables_view.options.orderMulti is not same as(null) %}
    \"orderMulti\": {{ sg_datatables_view.options.orderMulti|sg_datatables_bool_var }},
{% endif %}
{% if sg_datatables_view.options.pageLength is not same as(null) %}
    \"pageLength\": {{ sg_datatables_view.options.pageLength }},
{% endif %}
{% if sg_datatables_view.options.pagingType is not same as(null) %}
    \"pagingType\": \"{{ sg_datatables_view.options.pagingType }}\",
{% endif %}
{% if sg_datatables_view.options.renderer is not same as(null) %}
    \"renderer\": \"{{ sg_datatables_view.options.renderer }}\",
{% endif %}
{% if sg_datatables_view.options.retrieve is not same as(null) %}
    \"retrieve\": {{ sg_datatables_view.options.retrieve|sg_datatables_bool_var }},
{% endif %}
{% if sg_datatables_view.options.rowId is not same as(null) %}
    \"rowId\": \"{{ sg_datatables_view.options.rowId }}\",
{% endif %}
{% if sg_datatables_view.options.scrollCollapse is not same as(null) %}
    \"scrollCollapse\": {{ sg_datatables_view.options.scrollCollapse|sg_datatables_bool_var }},
{% endif %}
{% if sg_datatables_view.options.searchDelay is not same as(null) %}
    \"searchDelay\": {{ sg_datatables_view.options.searchDelay }},
{% endif %}
{% if sg_datatables_view.options.stateDuration is not same as(null) %}
    \"stateDuration\": {{ sg_datatables_view.options.stateDuration }},
{% endif %}
{% if sg_datatables_view.options.stripeClasses is not same as(null) %}
    \"stripeClasses\": {{ sg_datatables_view.options.stripeClasses|raw }},
{% endif %}


", "SgDatatablesBundle:datatable:options.html.twig", "/root/Schreibtisch/devops/vendor/sg/datatablesbundle/Resources/views/datatable/options.html.twig");
    }
}
