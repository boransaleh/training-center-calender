<?php

/* SgDatatablesBundle:column:column.html.twig */
class __TwigTemplate_01643c3f8928ca6846bf121bb2b4c29a089fa226f24d0b2697458b3998e3ec8e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'common' => array($this, 'block_common'),
            'title' => array($this, 'block_title'),
            'data' => array($this, 'block_data'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_621d1533f33cd9c57cecb9793234d76697d12e2159a9e26ad07091525c5c0717 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_621d1533f33cd9c57cecb9793234d76697d12e2159a9e26ad07091525c5c0717->enter($__internal_621d1533f33cd9c57cecb9793234d76697d12e2159a9e26ad07091525c5c0717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:column:column.html.twig"));

        $__internal_7f41b477492db17cf0bc657cb2528df0931b30a3abb1ef919633482cd15e5f2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f41b477492db17cf0bc657cb2528df0931b30a3abb1ef919633482cd15e5f2f->enter($__internal_7f41b477492db17cf0bc657cb2528df0931b30a3abb1ef919633482cd15e5f2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:column:column.html.twig"));

        // line 9
        echo "{
    ";
        // line 10
        $this->displayBlock('common', $context, $blocks);
        // line 60
        echo "
    ";
        // line 61
        $this->displayBlock('data', $context, $blocks);
        // line 64
        echo "},
";
        
        $__internal_621d1533f33cd9c57cecb9793234d76697d12e2159a9e26ad07091525c5c0717->leave($__internal_621d1533f33cd9c57cecb9793234d76697d12e2159a9e26ad07091525c5c0717_prof);

        
        $__internal_7f41b477492db17cf0bc657cb2528df0931b30a3abb1ef919633482cd15e5f2f->leave($__internal_7f41b477492db17cf0bc657cb2528df0931b30a3abb1ef919633482cd15e5f2f_prof);

    }

    // line 10
    public function block_common($context, array $blocks = array())
    {
        $__internal_c4f21cb92202f7d46628d5146b9c31a066dbe71f3596b23ba8d4f4b8b5562cd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4f21cb92202f7d46628d5146b9c31a066dbe71f3596b23ba8d4f4b8b5562cd0->enter($__internal_c4f21cb92202f7d46628d5146b9c31a066dbe71f3596b23ba8d4f4b8b5562cd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "common"));

        $__internal_e61553b466554aacba45df10e9e2221a2ecda30c9e486046a2ddd443a7c5b1a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e61553b466554aacba45df10e9e2221a2ecda30c9e486046a2ddd443a7c5b1a0->enter($__internal_e61553b466554aacba45df10e9e2221a2ecda30c9e486046a2ddd443a7c5b1a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "common"));

        // line 11
        echo "        ";
        if ( !($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "cellType", array()) === null)) {
            // line 12
            echo "            \"cellType\": \"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "cellType", array()), "html", null, true);
            echo "\",
        ";
        }
        // line 14
        echo "        ";
        if ( !($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "contentPadding", array()) === null)) {
            // line 15
            echo "            \"contentPadding\": \"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "contentPadding", array()), "html", null, true);
            echo "\",
        ";
        }
        // line 17
        echo "        ";
        if ( !($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "defaultContent", array()) === null)) {
            // line 18
            echo "            \"defaultContent\": \"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "defaultContent", array()), "html", null, true);
            echo "\",
        ";
        }
        // line 20
        echo "        ";
        if ( !($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "name", array()) === null)) {
            // line 21
            echo "            \"name\": \"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "name", array()), "html", null, true);
            echo "\",
        ";
        }
        // line 23
        echo "        ";
        if ( !($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "width", array()) === null)) {
            // line 24
            echo "            \"width\": \"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "width", array()), "html", null, true);
            echo "\",
        ";
        }
        // line 26
        echo "        ";
        $this->displayBlock('title', $context, $blocks);
        // line 31
        echo "        ";
        if ((($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "searchable", array()) === true) || ($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "searchable", array()) === false))) {
            // line 32
            echo "            \"searchable\": ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Sg\DatatablesBundle\Twig\DatatableTwigExtension')->boolVar($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "searchable", array())), "html", null, true);
            echo ",
        ";
        }
        // line 34
        echo "        ";
        if (($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "visible", array()) === true)) {
            // line 35
            echo "            \"visible\": true,
            ";
            // line 36
            if ( !($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "className", array()) === null)) {
                // line 37
                echo "                \"className\": \"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "className", array()), "html", null, true);
                echo "\",
            ";
            }
            // line 39
            echo "        ";
        }
        // line 40
        echo "        ";
        if (($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "visible", array()) === false)) {
            // line 41
            echo "            \"visible\": false,
            \"className\": \"never ";
            // line 42
            if ( !($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "className", array()) === null)) {
                echo twig_escape_filter($this->env, $this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "className", array()), "html", null, true);
            }
            echo "\",
        ";
        }
        // line 44
        echo "        ";
        if (($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "orderable", array()) === true)) {
            // line 45
            echo "            \"orderable\": true,
            ";
            // line 46
            if ( !($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "orderSequence", array()) === null)) {
                // line 47
                echo "                \"orderSequence\": ";
                echo $this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "orderSequence", array());
                echo ",
            ";
            }
            // line 49
            echo "            ";
            if ( !($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "orderData", array()) === null)) {
                // line 50
                echo "                \"orderData\": ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "orderData", array()), "html", null, true);
                echo ",
            ";
            }
            // line 52
            echo "        ";
        }
        // line 53
        echo "        ";
        if (($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "orderable", array()) === false)) {
            // line 54
            echo "            \"orderable\": false,
        ";
        }
        // line 56
        echo "        ";
        if ( !($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "responsivePriority", array()) === null)) {
            // line 57
            echo "            \"responsivePriority\": ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "responsivePriority", array()), "html", null, true);
            echo ",
        ";
        }
        // line 59
        echo "    ";
        
        $__internal_e61553b466554aacba45df10e9e2221a2ecda30c9e486046a2ddd443a7c5b1a0->leave($__internal_e61553b466554aacba45df10e9e2221a2ecda30c9e486046a2ddd443a7c5b1a0_prof);

        
        $__internal_c4f21cb92202f7d46628d5146b9c31a066dbe71f3596b23ba8d4f4b8b5562cd0->leave($__internal_c4f21cb92202f7d46628d5146b9c31a066dbe71f3596b23ba8d4f4b8b5562cd0_prof);

    }

    // line 26
    public function block_title($context, array $blocks = array())
    {
        $__internal_6c9c267cf9f7a5b146da0afd02d37f5e9ad51154b4736511ea75692886c3e254 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c9c267cf9f7a5b146da0afd02d37f5e9ad51154b4736511ea75692886c3e254->enter($__internal_6c9c267cf9f7a5b146da0afd02d37f5e9ad51154b4736511ea75692886c3e254_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_408930b6d1de2bf30c43eae2a8cfa32d4fcc3d93105a74f592d311cb418a82cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_408930b6d1de2bf30c43eae2a8cfa32d4fcc3d93105a74f592d311cb418a82cb->enter($__internal_408930b6d1de2bf30c43eae2a8cfa32d4fcc3d93105a74f592d311cb418a82cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 27
        echo "            ";
        if ( !($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "title", array()) === null)) {
            // line 28
            echo "                \"title\": \"";
            echo $this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "title", array());
            echo "\",
            ";
        }
        // line 30
        echo "        ";
        
        $__internal_408930b6d1de2bf30c43eae2a8cfa32d4fcc3d93105a74f592d311cb418a82cb->leave($__internal_408930b6d1de2bf30c43eae2a8cfa32d4fcc3d93105a74f592d311cb418a82cb_prof);

        
        $__internal_6c9c267cf9f7a5b146da0afd02d37f5e9ad51154b4736511ea75692886c3e254->leave($__internal_6c9c267cf9f7a5b146da0afd02d37f5e9ad51154b4736511ea75692886c3e254_prof);

    }

    // line 61
    public function block_data($context, array $blocks = array())
    {
        $__internal_e4c95edd3679f2da2c34ea44e6365632f02c66bc24e9a34179221152804089c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4c95edd3679f2da2c34ea44e6365632f02c66bc24e9a34179221152804089c2->enter($__internal_e4c95edd3679f2da2c34ea44e6365632f02c66bc24e9a34179221152804089c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

        $__internal_fb97098391b2207a694471fee836320738378a310f04a98ccfcdfd9444e68677 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb97098391b2207a694471fee836320738378a310f04a98ccfcdfd9444e68677->enter($__internal_fb97098391b2207a694471fee836320738378a310f04a98ccfcdfd9444e68677_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

        // line 62
        echo "        \"data\": \"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "data", array()), "html", null, true);
        echo "\",
    ";
        
        $__internal_fb97098391b2207a694471fee836320738378a310f04a98ccfcdfd9444e68677->leave($__internal_fb97098391b2207a694471fee836320738378a310f04a98ccfcdfd9444e68677_prof);

        
        $__internal_e4c95edd3679f2da2c34ea44e6365632f02c66bc24e9a34179221152804089c2->leave($__internal_e4c95edd3679f2da2c34ea44e6365632f02c66bc24e9a34179221152804089c2_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:column:column.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  234 => 62,  225 => 61,  215 => 30,  209 => 28,  206 => 27,  197 => 26,  187 => 59,  181 => 57,  178 => 56,  174 => 54,  171 => 53,  168 => 52,  162 => 50,  159 => 49,  153 => 47,  151 => 46,  148 => 45,  145 => 44,  138 => 42,  135 => 41,  132 => 40,  129 => 39,  123 => 37,  121 => 36,  118 => 35,  115 => 34,  109 => 32,  106 => 31,  103 => 26,  97 => 24,  94 => 23,  88 => 21,  85 => 20,  79 => 18,  76 => 17,  70 => 15,  67 => 14,  61 => 12,  58 => 11,  49 => 10,  38 => 64,  36 => 61,  33 => 60,  31 => 10,  28 => 9,);
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
{
    {% block common %}
        {% if column.cellType is not same as(null) %}
            \"cellType\": \"{{ column.cellType }}\",
        {% endif %}
        {% if column.contentPadding is not same as(null) %}
            \"contentPadding\": \"{{ column.contentPadding }}\",
        {% endif %}
        {% if column.defaultContent is not same as(null) %}
            \"defaultContent\": \"{{ column.defaultContent }}\",
        {% endif %}
        {% if column.name is not same as(null) %}
            \"name\": \"{{ column.name }}\",
        {% endif %}
        {% if column.width is not same as(null) %}
            \"width\": \"{{ column.width }}\",
        {% endif %}
        {% block title %}
            {% if column.title is not same as(null) %}
                \"title\": \"{{ column.title|raw }}\",
            {% endif %}
        {% endblock %}
        {% if column.searchable is same as(true) or column.searchable is same as(false) %}
            \"searchable\": {{ column.searchable|sg_datatables_bool_var }},
        {% endif %}
        {% if column.visible is same as(true) %}
            \"visible\": true,
            {% if column.className is not same as(null) %}
                \"className\": \"{{ column.className }}\",
            {% endif %}
        {% endif %}
        {% if column.visible is same as(false) %}
            \"visible\": false,
            \"className\": \"never {% if column.className is not same as(null) %}{{ column.className }}{% endif %}\",
        {% endif %}
        {% if column.orderable is same as(true) %}
            \"orderable\": true,
            {% if column.orderSequence is not same as(null) %}
                \"orderSequence\": {{ column.orderSequence|raw }},
            {% endif %}
            {% if column.orderData is not same as(null) %}
                \"orderData\": {{ column.orderData }},
            {% endif %}
        {% endif %}
        {% if column.orderable is same as(false) %}
            \"orderable\": false,
        {% endif %}
        {% if column.responsivePriority is not same as(null) %}
            \"responsivePriority\": {{ column.responsivePriority }},
        {% endif %}
    {% endblock %}

    {% block data %}
        \"data\": \"{{ column.data }}\",
    {% endblock %}
},
", "SgDatatablesBundle:column:column.html.twig", "/root/Schreibtisch/devops/vendor/sg/datatablesbundle/Resources/views/column/column.html.twig");
    }
}
