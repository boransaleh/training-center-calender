<?php

/* SgDatatablesBundle:filter:select.html.twig */
class __TwigTemplate_351902b6174fd3500a2f381dcc7b4b6322d9d5d9f6fd42213edc6eba042f0f37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'html' => array($this, 'block_html'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c1018da1f28754a0ee7a381e51901d2b748e662634586f66d6ea72b925cbd2bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1018da1f28754a0ee7a381e51901d2b748e662634586f66d6ea72b925cbd2bc->enter($__internal_c1018da1f28754a0ee7a381e51901d2b748e662634586f66d6ea72b925cbd2bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:filter:select.html.twig"));

        $__internal_365dff66bf095e51f29b8978631ea51faa95bc854102fdb454a52b0dd2ddc2f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_365dff66bf095e51f29b8978631ea51faa95bc854102fdb454a52b0dd2ddc2f4->enter($__internal_365dff66bf095e51f29b8978631ea51faa95bc854102fdb454a52b0dd2ddc2f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:filter:select.html.twig"));

        // line 9
        ob_start();
        // line 10
        echo "    ";
        if (($this->getAttribute($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "filter", array()), "multiple", array()) === true)) {
            // line 11
            echo "        multiple=\"multiple\"
    ";
        }
        $context["filter_select_multiple"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 15
        ob_start();
        // line 16
        echo "sg-datatables-";
        echo twig_escape_filter($this->env, ($context["datatable_name"] ?? $this->getContext($context, "datatable_name")), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, ($context["position"] ?? $this->getContext($context, "position")), "html", null, true);
        echo "-filter-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "index", array()), "html", null, true);
        $context["filter_id_selector"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 19
        ob_start();
        // line 20
        echo "id=\"";
        echo twig_escape_filter($this->env, ($context["filter_id_selector"] ?? $this->getContext($context, "filter_id_selector")), "html", null, true);
        echo "\"";
        $context["filter_selector"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 23
        ob_start();
        // line 24
        echo "    class=\"sg-datatables-individual-filtering";
        if ( !($this->getAttribute($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "filter", array()), "classes", array()) === null)) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "filter", array()), "classes", array()), "html", null, true);
        }
        echo "\"
";
        $context["filter_classes"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 26
        echo "
";
        // line 27
        ob_start();
        // line 28
        echo "    ";
        if ( !($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "width", array()) === null)) {
            echo "style=\"width:";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "width", array()), "html", null, true);
            echo ";\"";
        }
        $context["filter_width"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 30
        echo "
";
        // line 31
        ob_start();
        // line 32
        echo "    data-search-column-index=\"";
        echo twig_escape_filter($this->env, ($context["search_column_index"] ?? $this->getContext($context, "search_column_index")), "html", null, true);
        echo "\"
";
        $context["filter_search_column_index"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 34
        echo "
";
        // line 35
        ob_start();
        // line 36
        echo "    ";
        if ( !($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "name", array()) === null)) {
            echo "name=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "name", array()), "html", null, true);
            echo "\"";
        }
        $context["filter_column_name"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 38
        echo "
";
        // line 39
        ob_start();
        // line 40
        echo "    ";
        if ( !($this->getAttribute($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "filter", array()), "initialSearch", array()) === null)) {
            // line 41
            echo "        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "filter", array()), "initialSearch", array()), "html", null, true);
            echo "\">
            ";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "filter", array()), "searchColumn", array()), "html", null, true);
            echo "
        </option>
    ";
        }
        $context["filter_select_initial_search"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 46
        echo "
";
        // line 47
        ob_start();
        // line 48
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "filter", array()), "selectOptions", array()));
        foreach ($context['_seq'] as $context["key"] => $context["name"]) {
            // line 49
            echo "        <option value=\"";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        $context["filter_select_select_options"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 53
        ob_start();
        // line 54
        echo "sg-datatables-";
        echo twig_escape_filter($this->env, ($context["datatable_name"] ?? $this->getContext($context, "datatable_name")), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, ($context["position"] ?? $this->getContext($context, "position")), "html", null, true);
        echo "-filter-cancel-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "index", array()), "html", null, true);
        $context["cancel_button_id_selector"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 57
        ob_start();
        // line 58
        echo "    ";
        if (($this->getAttribute($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "filter", array()), "cancelButton", array()) === true)) {
            // line 59
            echo "        <button type=\"button\"
                id=\"";
            // line 60
            echo twig_escape_filter($this->env, ($context["cancel_button_id_selector"] ?? $this->getContext($context, "cancel_button_id_selector")), "html", null, true);
            echo "\"
                class=\"btn btn-default btn-xs\"
        >&times;</button>
    ";
        }
        $context["cancel_button_html"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 65
        echo "
";
        // line 66
        ob_start();
        // line 67
        echo "    ";
        if (($this->getAttribute($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "filter", array()), "cancelButton", array()) === true)) {
            // line 68
            echo "        <script type=\"text/javascript\">
            \$(\"#";
            // line 69
            echo twig_escape_filter($this->env, ($context["cancel_button_id_selector"] ?? $this->getContext($context, "cancel_button_id_selector")), "html", null, true);
            echo "\").click(function() {
                if ('' != \$(\"#";
            // line 70
            echo twig_escape_filter($this->env, ($context["filter_id_selector"] ?? $this->getContext($context, "filter_id_selector")), "html", null, true);
            echo "\").val()) {
                    \$(\"#";
            // line 71
            echo twig_escape_filter($this->env, ($context["filter_id_selector"] ?? $this->getContext($context, "filter_id_selector")), "html", null, true);
            echo "\")
                        .val('')
                        .change();
                }
            });
        </script>
    ";
        }
        $context["cancel_button_js"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 79
        echo "
";
        // line 80
        $this->displayBlock('html', $context, $blocks);
        // line 94
        echo "
";
        // line 95
        $this->displayBlock('javascript', $context, $blocks);
        
        $__internal_c1018da1f28754a0ee7a381e51901d2b748e662634586f66d6ea72b925cbd2bc->leave($__internal_c1018da1f28754a0ee7a381e51901d2b748e662634586f66d6ea72b925cbd2bc_prof);

        
        $__internal_365dff66bf095e51f29b8978631ea51faa95bc854102fdb454a52b0dd2ddc2f4->leave($__internal_365dff66bf095e51f29b8978631ea51faa95bc854102fdb454a52b0dd2ddc2f4_prof);

    }

    // line 80
    public function block_html($context, array $blocks = array())
    {
        $__internal_43fbecb588223838c9d2ea1ad72b7613a3a659b683220278f5b38721ffb5a9a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43fbecb588223838c9d2ea1ad72b7613a3a659b683220278f5b38721ffb5a9a6->enter($__internal_43fbecb588223838c9d2ea1ad72b7613a3a659b683220278f5b38721ffb5a9a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "html"));

        $__internal_2361828ab2584ff63945bc34dc53ed7709de9f8c371ff36a46081b4e11357b4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2361828ab2584ff63945bc34dc53ed7709de9f8c371ff36a46081b4e11357b4b->enter($__internal_2361828ab2584ff63945bc34dc53ed7709de9f8c371ff36a46081b4e11357b4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "html"));

        // line 81
        echo "    <select
            ";
        // line 82
        echo twig_escape_filter($this->env, ($context["filter_select_multiple"] ?? $this->getContext($context, "filter_select_multiple")), "html", null, true);
        echo "     ";
        // line 83
        echo "            ";
        echo twig_escape_filter($this->env, ($context["filter_selector"] ?? $this->getContext($context, "filter_selector")), "html", null, true);
        echo "            ";
        // line 84
        echo "            ";
        echo twig_escape_filter($this->env, ($context["filter_classes"] ?? $this->getContext($context, "filter_classes")), "html", null, true);
        echo "             ";
        // line 85
        echo "            ";
        echo twig_escape_filter($this->env, ($context["filter_width"] ?? $this->getContext($context, "filter_width")), "html", null, true);
        echo "               ";
        // line 86
        echo "            ";
        echo twig_escape_filter($this->env, ($context["filter_search_column_index"] ?? $this->getContext($context, "filter_search_column_index")), "html", null, true);
        echo " ";
        // line 87
        echo "            ";
        echo twig_escape_filter($this->env, ($context["filter_column_name"] ?? $this->getContext($context, "filter_column_name")), "html", null, true);
        echo "         ";
        // line 88
        echo "    >
        ";
        // line 89
        echo twig_escape_filter($this->env, ($context["filter_select_initial_search"] ?? $this->getContext($context, "filter_select_initial_search")), "html", null, true);
        echo "   ";
        // line 90
        echo "        ";
        echo twig_escape_filter($this->env, ($context["filter_select_select_options"] ?? $this->getContext($context, "filter_select_select_options")), "html", null, true);
        echo "
    </select>
    ";
        // line 92
        echo twig_escape_filter($this->env, ($context["cancel_button_html"] ?? $this->getContext($context, "cancel_button_html")), "html", null, true);
        echo "
";
        
        $__internal_2361828ab2584ff63945bc34dc53ed7709de9f8c371ff36a46081b4e11357b4b->leave($__internal_2361828ab2584ff63945bc34dc53ed7709de9f8c371ff36a46081b4e11357b4b_prof);

        
        $__internal_43fbecb588223838c9d2ea1ad72b7613a3a659b683220278f5b38721ffb5a9a6->leave($__internal_43fbecb588223838c9d2ea1ad72b7613a3a659b683220278f5b38721ffb5a9a6_prof);

    }

    // line 95
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_0f48384d4aea9c1fa25e5aaad3f6df463fc5009c36f0d2b7efbc4eaf28b5345d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f48384d4aea9c1fa25e5aaad3f6df463fc5009c36f0d2b7efbc4eaf28b5345d->enter($__internal_0f48384d4aea9c1fa25e5aaad3f6df463fc5009c36f0d2b7efbc4eaf28b5345d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_3c6ff6a6eac963a833a2c33a5129b02e3378b08af7fa66cda5b5fa4cd9802809 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c6ff6a6eac963a833a2c33a5129b02e3378b08af7fa66cda5b5fa4cd9802809->enter($__internal_3c6ff6a6eac963a833a2c33a5129b02e3378b08af7fa66cda5b5fa4cd9802809_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 96
        echo "    ";
        echo twig_escape_filter($this->env, ($context["cancel_button_js"] ?? $this->getContext($context, "cancel_button_js")), "html", null, true);
        echo "
";
        
        $__internal_3c6ff6a6eac963a833a2c33a5129b02e3378b08af7fa66cda5b5fa4cd9802809->leave($__internal_3c6ff6a6eac963a833a2c33a5129b02e3378b08af7fa66cda5b5fa4cd9802809_prof);

        
        $__internal_0f48384d4aea9c1fa25e5aaad3f6df463fc5009c36f0d2b7efbc4eaf28b5345d->leave($__internal_0f48384d4aea9c1fa25e5aaad3f6df463fc5009c36f0d2b7efbc4eaf28b5345d_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:filter:select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  286 => 96,  277 => 95,  265 => 92,  259 => 90,  256 => 89,  253 => 88,  249 => 87,  245 => 86,  241 => 85,  237 => 84,  233 => 83,  230 => 82,  227 => 81,  218 => 80,  208 => 95,  205 => 94,  203 => 80,  200 => 79,  189 => 71,  185 => 70,  181 => 69,  178 => 68,  175 => 67,  173 => 66,  170 => 65,  162 => 60,  159 => 59,  156 => 58,  154 => 57,  146 => 54,  144 => 53,  132 => 49,  127 => 48,  125 => 47,  122 => 46,  115 => 42,  110 => 41,  107 => 40,  105 => 39,  102 => 38,  94 => 36,  92 => 35,  89 => 34,  83 => 32,  81 => 31,  78 => 30,  70 => 28,  68 => 27,  65 => 26,  56 => 24,  54 => 23,  49 => 20,  47 => 19,  39 => 16,  37 => 15,  32 => 11,  29 => 10,  27 => 9,);
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
{% set filter_select_multiple %}
    {% if column.filter.multiple is same as(true) %}
        multiple=\"multiple\"
    {% endif %}
{% endset %}

{%- set filter_id_selector -%}
    sg-datatables-{{ datatable_name }}-{{ position }}-filter-{{ column.index }}
{%- endset -%}

{%- set filter_selector -%}
    id=\"{{ filter_id_selector }}\"
{%- endset -%}

{% set filter_classes %}
    class=\"sg-datatables-individual-filtering{% if column.filter.classes is not same as(null) %} {{ column.filter.classes }}{% endif %}\"
{% endset %}

{% set filter_width %}
    {% if column.width is not same as(null) %}style=\"width:{{ column.width }};\"{% endif %}
{% endset %}

{% set filter_search_column_index %}
    data-search-column-index=\"{{ search_column_index }}\"
{% endset %}

{% set filter_column_name %}
    {% if column.name is not same as(null) %}name=\"{{ column.name }}\"{% endif %}
{% endset %}

{% set filter_select_initial_search %}
    {% if column.filter.initialSearch is not same as(null) %}
        <option value=\"{{ column.filter.initialSearch }}\">
            {{ column.filter.searchColumn }}
        </option>
    {% endif %}
{% endset %}

{% set filter_select_select_options %}
    {% for key, name in column.filter.selectOptions %}
        <option value=\"{{ key }}\">{{ name }}</option>
    {% endfor %}
{% endset %}

{%- set cancel_button_id_selector -%}
    sg-datatables-{{ datatable_name }}-{{ position }}-filter-cancel-{{ column.index }}
{%- endset -%}

{% set cancel_button_html %}
    {% if column.filter.cancelButton is same as(true) %}
        <button type=\"button\"
                id=\"{{ cancel_button_id_selector }}\"
                class=\"btn btn-default btn-xs\"
        >&times;</button>
    {% endif %}
{% endset %}

{% set cancel_button_js %}
    {% if column.filter.cancelButton is same as(true) %}
        <script type=\"text/javascript\">
            \$(\"#{{ cancel_button_id_selector }}\").click(function() {
                if ('' != \$(\"#{{ filter_id_selector }}\").val()) {
                    \$(\"#{{ filter_id_selector }}\")
                        .val('')
                        .change();
                }
            });
        </script>
    {% endif %}
{% endset %}

{% block html %}
    <select
            {{ filter_select_multiple }}     {# multiple=\"multiple\" #}
            {{ filter_selector }}            {# id=\"\" #}
            {{ filter_classes }}             {# class=\"\" #}
            {{ filter_width }}               {# style = \"width:\" #}
            {{ filter_search_column_index }} {# data-search-column-index = \"\" #}
            {{ filter_column_name }}         {# name = \"\" #}
    >
        {{ filter_select_initial_search }}   {# <option value=\"\"></option> #}
        {{ filter_select_select_options }}
    </select>
    {{ cancel_button_html }}
{% endblock %}

{% block javascript %}
    {{ cancel_button_js }}
{% endblock %}
", "SgDatatablesBundle:filter:select.html.twig", "/root/Schreibtisch/devops/vendor/sg/datatablesbundle/Resources/views/filter/select.html.twig");
    }
}
