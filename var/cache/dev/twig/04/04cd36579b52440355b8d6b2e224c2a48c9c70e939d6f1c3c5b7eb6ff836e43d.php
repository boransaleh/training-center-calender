<?php

/* SgDatatablesBundle:column:column_post_create_dt.js.twig */
class __TwigTemplate_e579dad95f323bb127040a8b2fc641f810a6c3b277d419f7f0cbd958b74a68fe extends Twig_Template
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
        $__internal_f74ad9eaeefc085694c68942c0d7b0edb4a80606e6f3c86310715d65b41a3071 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f74ad9eaeefc085694c68942c0d7b0edb4a80606e6f3c86310715d65b41a3071->enter($__internal_f74ad9eaeefc085694c68942c0d7b0edb4a80606e6f3c86310715d65b41a3071_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:column:column_post_create_dt.js.twig"));

        $__internal_2630c116cda2616dbcf8b4f75519e1436896eae4c87db1c8f7279163e258301f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2630c116cda2616dbcf8b4f75519e1436896eae4c87db1c8f7279163e258301f->enter($__internal_2630c116cda2616dbcf8b4f75519e1436896eae4c87db1c8f7279163e258301f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:column:column_post_create_dt.js.twig"));

        // line 9
        $context["token"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderCsrfToken("sg-datatables-editable");
        // line 10
        echo "
\$(\".";
        // line 11
        echo ($context["column_class_editable_selector"] ?? $this->getContext($context, "column_class_editable_selector"));
        echo "\").editable({
    url: '";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute(($context["editable_options"] ?? $this->getContext($context, "editable_options")), "url", array()));
        echo "',
    params: function (params) {
        params.entityClassName = '";
        // line 14
        echo twig_escape_filter($this->env, ($context["entity_class_name"] ?? $this->getContext($context, "entity_class_name")), "js", null, true);
        echo "';
        params.token = '";
        // line 15
        echo twig_escape_filter($this->env, ($context["token"] ?? $this->getContext($context, "token")), "js", null, true);
        echo "';
        params.originalTypeOfField = '";
        // line 16
        echo twig_escape_filter($this->env, ($context["original_type_of_field"] ?? $this->getContext($context, "original_type_of_field")), "js", null, true);
        echo "';
        params.path = \$(this).editable().data('path');

        ";
        // line 19
        if ( !($this->getAttribute(($context["editable_options"] ?? $this->getContext($context, "editable_options")), "params", array()) === null)) {
            // line 20
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["editable_options"] ?? $this->getContext($context, "editable_options")), "params", array()));
            foreach ($context['_seq'] as $context["key"] => $context["param"]) {
                // line 21
                echo "                params.";
                echo twig_escape_filter($this->env, $context["key"], "js", null, true);
                echo " = '";
                echo twig_escape_filter($this->env, $context["param"], "js", null, true);
                echo "';
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['param'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "        ";
        }
        // line 24
        echo "
        return params;
    },
    ";
        // line 27
        if ( !($this->getAttribute(($context["editable_options"] ?? $this->getContext($context, "editable_options")), "defaultValue", array()) === null)) {
            // line 28
            echo "    defaultValue: '";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["editable_options"] ?? $this->getContext($context, "editable_options")), "defaultValue", array()), "js", null, true);
            echo "',
    ";
        }
        // line 30
        echo "    emptyclass: '";
        echo $this->getAttribute(($context["editable_options"] ?? $this->getContext($context, "editable_options")), "emptyClass", array());
        echo "',
    emptytext: '";
        // line 31
        echo $this->getAttribute(($context["editable_options"] ?? $this->getContext($context, "editable_options")), "emptyText", array());
        echo "',
    highlight: '";
        // line 32
        echo $this->getAttribute(($context["editable_options"] ?? $this->getContext($context, "editable_options")), "highlight", array());
        echo "',
    mode: '";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute(($context["editable_options"] ?? $this->getContext($context, "editable_options")), "mode", array()), "js", null, true);
        echo "',
    ";
        // line 34
        if ( !($this->getAttribute(($context["editable_options"] ?? $this->getContext($context, "editable_options")), "name", array()) === null)) {
            // line 35
            echo "    name: '";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["editable_options"] ?? $this->getContext($context, "editable_options")), "name", array()), "js", null, true);
            echo "',
    ";
        } else {
            // line 37
            echo "    name: '";
            echo twig_escape_filter($this->env, ($context["column_dql"] ?? $this->getContext($context, "column_dql")), "js", null, true);
            echo "',
    ";
        }
        // line 39
        echo "    type: '";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["editable_options"] ?? $this->getContext($context, "editable_options")), "type", array()), "js", null, true);
        echo "',
    ";
        // line 40
        if ($this->getAttribute(($context["editable_options"] ?? null), "source", array(), "any", true, true)) {
            // line 41
            echo "    source: ";
            echo $this->getAttribute(($context["editable_options"] ?? $this->getContext($context, "editable_options")), "source", array());
            echo ",
    ";
        }
        // line 43
        echo "    ";
        if ($this->getAttribute(($context["editable_options"] ?? null), "clear", array(), "any", true, true)) {
            // line 44
            echo "    clear: ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Sg\DatatablesBundle\Twig\DatatableTwigExtension')->boolVar($this->getAttribute(($context["editable_options"] ?? $this->getContext($context, "editable_options")), "clear", array())), "js", null, true);
            echo ",
    ";
        }
        // line 46
        echo "    ";
        if (($this->getAttribute(($context["editable_options"] ?? null), "placeholder", array(), "any", true, true) &&  !($this->getAttribute(($context["editable_options"] ?? $this->getContext($context, "editable_options")), "placeholder", array()) === null))) {
            // line 47
            echo "    placeholder: '";
            echo $this->getAttribute(($context["editable_options"] ?? $this->getContext($context, "editable_options")), "placeholder", array());
            echo "',
    ";
        }
        // line 49
        echo "    ";
        if ($this->getAttribute(($context["editable_options"] ?? null), "rows", array(), "any", true, true)) {
            // line 50
            echo "    rows: ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["editable_options"] ?? $this->getContext($context, "editable_options")), "rows", array()), "js", null, true);
            echo ",
    ";
        }
        // line 52
        echo "    ";
        if ($this->getAttribute(($context["editable_options"] ?? null), "format", array(), "any", true, true)) {
            // line 53
            echo "    format: '";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["editable_options"] ?? $this->getContext($context, "editable_options")), "format", array()), "js", null, true);
            echo "',
    ";
        }
        // line 55
        echo "    ";
        if (($this->getAttribute(($context["editable_options"] ?? null), "viewFormat", array(), "any", true, true) &&  !($this->getAttribute(($context["editable_options"] ?? $this->getContext($context, "editable_options")), "viewFormat", array()) === null))) {
            // line 56
            echo "    viewformat: '";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["editable_options"] ?? $this->getContext($context, "editable_options")), "viewFormat", array()), "js", null, true);
            echo "',
    ";
        }
        // line 58
        echo "
    ";
        // line 59
        if (("combodate" == $this->getAttribute(($context["editable_options"] ?? $this->getContext($context, "editable_options")), "type", array()))) {
            // line 60
            echo "        combodate: {
            minYear: ";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute(($context["editable_options"] ?? $this->getContext($context, "editable_options")), "minYear", array()), "js", null, true);
            echo ",
            maxYear: ";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute(($context["editable_options"] ?? $this->getContext($context, "editable_options")), "maxYear", array()), "js", null, true);
            echo ",
            minuteStep: ";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute(($context["editable_options"] ?? $this->getContext($context, "editable_options")), "minuteStep", array()), "js", null, true);
            echo ",
            secondStep: ";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute(($context["editable_options"] ?? $this->getContext($context, "editable_options")), "secondStep", array()), "js", null, true);
            echo ",
            smartDays: ";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('Sg\DatatablesBundle\Twig\DatatableTwigExtension')->boolVar($this->getAttribute(($context["editable_options"] ?? $this->getContext($context, "editable_options")), "smartDays", array())), "js", null, true);
            echo ",
        },
    ";
        }
        // line 68
        echo "
    success: function() {
        if (pipeline > 0) {
            oTable.clearPipeline().draw();
        } else {
            oTable.draw();
        }
    }
});
";
        
        $__internal_f74ad9eaeefc085694c68942c0d7b0edb4a80606e6f3c86310715d65b41a3071->leave($__internal_f74ad9eaeefc085694c68942c0d7b0edb4a80606e6f3c86310715d65b41a3071_prof);

        
        $__internal_2630c116cda2616dbcf8b4f75519e1436896eae4c87db1c8f7279163e258301f->leave($__internal_2630c116cda2616dbcf8b4f75519e1436896eae4c87db1c8f7279163e258301f_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:column:column_post_create_dt.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 68,  200 => 65,  196 => 64,  192 => 63,  188 => 62,  184 => 61,  181 => 60,  179 => 59,  176 => 58,  170 => 56,  167 => 55,  161 => 53,  158 => 52,  152 => 50,  149 => 49,  143 => 47,  140 => 46,  134 => 44,  131 => 43,  125 => 41,  123 => 40,  118 => 39,  112 => 37,  106 => 35,  104 => 34,  100 => 33,  96 => 32,  92 => 31,  87 => 30,  81 => 28,  79 => 27,  74 => 24,  71 => 23,  60 => 21,  55 => 20,  53 => 19,  47 => 16,  43 => 15,  39 => 14,  34 => 12,  30 => 11,  27 => 10,  25 => 9,);
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
{% set token = csrf_token('sg-datatables-editable') %}

\$(\".{{ column_class_editable_selector|raw }}\").editable({
    url: '{{ path(editable_options.url)|raw }}',
    params: function (params) {
        params.entityClassName = '{{ entity_class_name }}';
        params.token = '{{ token }}';
        params.originalTypeOfField = '{{ original_type_of_field }}';
        params.path = \$(this).editable().data('path');

        {% if editable_options.params is not same as(null) %}
            {% for key, param in editable_options.params %}
                params.{{ key }} = '{{ param }}';
            {% endfor %}
        {% endif %}

        return params;
    },
    {% if editable_options.defaultValue is not same as(null) %}
    defaultValue: '{{ editable_options.defaultValue }}',
    {% endif %}
    emptyclass: '{{ editable_options.emptyClass|raw }}',
    emptytext: '{{ editable_options.emptyText|raw }}',
    highlight: '{{ editable_options.highlight|raw }}',
    mode: '{{ editable_options.mode }}',
    {% if editable_options.name is not same as(null) %}
    name: '{{ editable_options.name }}',
    {% else %}
    name: '{{ column_dql }}',
    {% endif %}
    type: '{{ editable_options.type }}',
    {% if editable_options.source is defined %}
    source: {{ editable_options.source|raw }},
    {% endif %}
    {% if editable_options.clear is defined %}
    clear: {{ editable_options.clear|sg_datatables_bool_var }},
    {% endif %}
    {% if editable_options.placeholder is defined and editable_options.placeholder is not same as(null) %}
    placeholder: '{{ editable_options.placeholder|raw }}',
    {% endif %}
    {% if editable_options.rows is defined %}
    rows: {{ editable_options.rows }},
    {% endif %}
    {% if editable_options.format is defined %}
    format: '{{ editable_options.format }}',
    {% endif %}
    {% if editable_options.viewFormat is defined and editable_options.viewFormat is not same as(null) %}
    viewformat: '{{ editable_options.viewFormat }}',
    {% endif %}

    {% if 'combodate' == editable_options.type %}
        combodate: {
            minYear: {{ editable_options.minYear }},
            maxYear: {{ editable_options.maxYear }},
            minuteStep: {{ editable_options.minuteStep }},
            secondStep: {{ editable_options.secondStep }},
            smartDays: {{ editable_options.smartDays|sg_datatables_bool_var }},
        },
    {% endif %}

    success: function() {
        if (pipeline > 0) {
            oTable.clearPipeline().draw();
        } else {
            oTable.draw();
        }
    }
});
", "SgDatatablesBundle:column:column_post_create_dt.js.twig", "/root/Schreibtisch/devops/vendor/sg/datatablesbundle/Resources/views/column/column_post_create_dt.js.twig");
    }
}
