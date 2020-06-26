<?php

/* SgDatatablesBundle:datatable:datatable_html.html.twig */
class __TwigTemplate_7efe31de68393be3736a452f48aea0dc2cc8b9bacd69b935168b123aa6284d62 extends Twig_Template
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
        $__internal_bcbf99513981daa5e4b68ee57640dc96e02d7667b4e90152b4938e33eaad9606 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcbf99513981daa5e4b68ee57640dc96e02d7667b4e90152b4938e33eaad9606->enter($__internal_bcbf99513981daa5e4b68ee57640dc96e02d7667b4e90152b4938e33eaad9606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:datatable:datatable_html.html.twig"));

        $__internal_087dbddc9644aa0c7b841bdb883aaf2392999b6c9dd8eac1225d5c1092b1529f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_087dbddc9644aa0c7b841bdb883aaf2392999b6c9dd8eac1225d5c1092b1529f->enter($__internal_087dbddc9644aa0c7b841bdb883aaf2392999b6c9dd8eac1225d5c1092b1529f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:datatable:datatable_html.html.twig"));

        // line 9
        $context["individual_filtering"] = false;
        // line 10
        echo "
";
        // line 11
        if ((true == $this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "options", array()), "individualFiltering", array()))) {
            // line 12
            echo "    ";
            if (((true == $this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "features", array()), "searching", array())) || ($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "features", array()), "searching", array()) === null))) {
                // line 13
                echo "        ";
                $context["individual_filtering"] = true;
                // line 14
                echo "    ";
            }
        }
        // line 16
        echo "
<table id=\"sg-datatables-";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "name", array()), "html", null, true);
        echo "\" class=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "options", array()), "classes", array()), "html", null, true);
        echo "\" cellspacing=\"0\" width=\"100%\">
    <thead>
        ";
        // line 19
        if ((true == ($context["individual_filtering"] ?? $this->getContext($context, "individual_filtering")))) {
            // line 20
            echo "            ";
            if ((("head" == $this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "options", array()), "individualFilteringPosition", array())) || ("both" == $this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "options", array()), "individualFilteringPosition", array())))) {
                // line 21
                echo "                <tr>
                    ";
                // line 22
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "columnBuilder", array()), "columns", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                    // line 23
                    echo "                        <th>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["column"], "title", array()), "html", null, true);
                    echo "</th>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 25
                echo "                </tr>
                <tr id=\"sg-datatables-";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "name", array()), "html", null, true);
                echo "-filterrow\">
                    ";
                // line 27
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "columnBuilder", array()), "columns", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                    // line 28
                    echo "                        <th>
                            ";
                    // line 29
                    if ($this->getAttribute($context["column"], "searchable", array())) {
                        // line 30
                        echo "                                ";
                        echo $this->env->getExtension('Sg\DatatablesBundle\Twig\DatatableTwigExtension')->datatablesRenderFilter($this->env, ($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), $context["column"], "head");
                        echo "
                            ";
                    }
                    // line 32
                    echo "                        </th>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 34
                echo "                </tr>
            ";
            }
            // line 36
            echo "        ";
        }
        // line 37
        echo "    </thead>
        ";
        // line 38
        if ((true == ($context["individual_filtering"] ?? $this->getContext($context, "individual_filtering")))) {
            // line 39
            echo "            ";
            if ((("foot" == $this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "options", array()), "individualFilteringPosition", array())) || ("both" == $this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "options", array()), "individualFilteringPosition", array())))) {
                // line 40
                echo "            <tfoot>
                    <tr>
                        ";
                // line 42
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "columnBuilder", array()), "columns", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                    // line 43
                    echo "                            <td>
                                ";
                    // line 44
                    if ($this->getAttribute($context["column"], "searchable", array())) {
                        // line 45
                        echo "                                    ";
                        echo $this->env->getExtension('Sg\DatatablesBundle\Twig\DatatableTwigExtension')->datatablesRenderFilter($this->env, ($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), $context["column"], "foot");
                        echo "
                                ";
                    }
                    // line 47
                    echo "                            </td>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 49
                echo "                    </tr>
                </tfoot>
            ";
            }
            // line 52
            echo "        ";
        }
        // line 53
        echo "    <tbody>
    </tbody>
</table>

";
        // line 57
        if ( !($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "columnBuilder", array()), "uniqueColumn", array(0 => "multiselect"), "method") === null)) {
            // line 58
            echo "    <div id=\"sg-datatables-";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "name", array()), "html", null, true);
            echo "-multiselect-actions\"></div>
";
        }
        
        $__internal_bcbf99513981daa5e4b68ee57640dc96e02d7667b4e90152b4938e33eaad9606->leave($__internal_bcbf99513981daa5e4b68ee57640dc96e02d7667b4e90152b4938e33eaad9606_prof);

        
        $__internal_087dbddc9644aa0c7b841bdb883aaf2392999b6c9dd8eac1225d5c1092b1529f->leave($__internal_087dbddc9644aa0c7b841bdb883aaf2392999b6c9dd8eac1225d5c1092b1529f_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:datatable:datatable_html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 58,  157 => 57,  151 => 53,  148 => 52,  143 => 49,  136 => 47,  130 => 45,  128 => 44,  125 => 43,  121 => 42,  117 => 40,  114 => 39,  112 => 38,  109 => 37,  106 => 36,  102 => 34,  95 => 32,  89 => 30,  87 => 29,  84 => 28,  80 => 27,  76 => 26,  73 => 25,  64 => 23,  60 => 22,  57 => 21,  54 => 20,  52 => 19,  45 => 17,  42 => 16,  38 => 14,  35 => 13,  32 => 12,  30 => 11,  27 => 10,  25 => 9,);
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
{% set individual_filtering = false %}

{% if true == sg_datatables_view.options.individualFiltering %}
    {% if true == sg_datatables_view.features.searching or sg_datatables_view.features.searching is same as(null) %}
        {% set individual_filtering = true %}
    {% endif %}
{% endif %}

<table id=\"sg-datatables-{{ sg_datatables_view.name }}\" class=\"{{ sg_datatables_view.options.classes }}\" cellspacing=\"0\" width=\"100%\">
    <thead>
        {% if true == individual_filtering %}
            {% if 'head' == sg_datatables_view.options.individualFilteringPosition or 'both' == sg_datatables_view.options.individualFilteringPosition%}
                <tr>
                    {% for column in sg_datatables_view.columnBuilder.columns %}
                        <th>{{ column.title }}</th>
                    {% endfor %}
                </tr>
                <tr id=\"sg-datatables-{{ sg_datatables_view.name }}-filterrow\">
                    {% for column in sg_datatables_view.columnBuilder.columns %}
                        <th>
                            {% if column.searchable %}
                                {{ sg_datatables_render_filter(sg_datatables_view, column, 'head') }}
                            {% endif %}
                        </th>
                    {% endfor %}
                </tr>
            {% endif %}
        {% endif %}
    </thead>
        {% if true == individual_filtering %}
            {% if 'foot' == sg_datatables_view.options.individualFilteringPosition or 'both' == sg_datatables_view.options.individualFilteringPosition%}
            <tfoot>
                    <tr>
                        {% for column in sg_datatables_view.columnBuilder.columns %}
                            <td>
                                {% if column.searchable %}
                                    {{ sg_datatables_render_filter(sg_datatables_view, column, 'foot') }}
                                {% endif %}
                            </td>
                        {% endfor %}
                    </tr>
                </tfoot>
            {% endif %}
        {% endif %}
    <tbody>
    </tbody>
</table>

{% if sg_datatables_view.columnBuilder.uniqueColumn('multiselect') is not same as(null) %}
    <div id=\"sg-datatables-{{ sg_datatables_view.name }}-multiselect-actions\"></div>
{% endif %}
", "SgDatatablesBundle:datatable:datatable_html.html.twig", "/root/Schreibtisch/devops/vendor/sg/datatablesbundle/Resources/views/datatable/datatable_html.html.twig");
    }
}
