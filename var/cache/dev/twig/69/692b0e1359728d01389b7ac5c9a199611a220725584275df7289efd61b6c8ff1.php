<?php

/* SgDatatablesBundle:render:boolean.html.twig */
class __TwigTemplate_d2bdccf3abc03b752b68165fce3479f4540180d0b1f0bcdd786a6226690b8c66 extends Twig_Template
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
        $__internal_8571986a6852bf2dfcc213897d8c63722abbcefdf819f4e51c5561d64674a353 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8571986a6852bf2dfcc213897d8c63722abbcefdf819f4e51c5561d64674a353->enter($__internal_8571986a6852bf2dfcc213897d8c63722abbcefdf819f4e51c5561d64674a353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:render:boolean.html.twig"));

        $__internal_d740cfae4dadfdd6e0754a1b7cdeef0ce1871004e2afa8367488c2abc944f302 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d740cfae4dadfdd6e0754a1b7cdeef0ce1871004e2afa8367488c2abc944f302->enter($__internal_d740cfae4dadfdd6e0754a1b7cdeef0ce1871004e2afa8367488c2abc944f302_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:render:boolean.html.twig"));

        // line 9
        if (array_key_exists("column_class_editable_selector", $context)) {
            // line 10
            echo "    ";
            if ((($context["data"] ?? $this->getContext($context, "data")) === true)) {
                // line 11
                echo "        <span class=\"";
                echo twig_escape_filter($this->env, ((($context["true_icon"] ?? $this->getContext($context, "true_icon")) . " ") . ($context["column_class_editable_selector"] ?? $this->getContext($context, "column_class_editable_selector"))), "html", null, true);
                echo "\" data-pk=\"";
                echo twig_escape_filter($this->env, ($context["pk"] ?? $this->getContext($context, "pk")), "html", null, true);
                echo "\" ";
                if ( !(($context["path"] ?? $this->getContext($context, "path")) === null)) {
                    echo "data-path=\"";
                    echo twig_escape_filter($this->env, ($context["path"] ?? $this->getContext($context, "path")), "html", null, true);
                    echo "\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, ($context["true_label"] ?? $this->getContext($context, "true_label")), "html", null, true);
                echo "</span>
    ";
            } elseif ((            // line 12
($context["data"] ?? $this->getContext($context, "data")) === false)) {
                // line 13
                echo "        <span class=\"";
                echo twig_escape_filter($this->env, ((($context["false_icon"] ?? $this->getContext($context, "false_icon")) . " ") . ($context["column_class_editable_selector"] ?? $this->getContext($context, "column_class_editable_selector"))), "html", null, true);
                echo "\" data-pk=\"";
                echo twig_escape_filter($this->env, ($context["pk"] ?? $this->getContext($context, "pk")), "html", null, true);
                echo "\" ";
                if ( !(($context["path"] ?? $this->getContext($context, "path")) === null)) {
                    echo "data-path=\"";
                    echo twig_escape_filter($this->env, ($context["path"] ?? $this->getContext($context, "path")), "html", null, true);
                    echo "\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, ($context["false_label"] ?? $this->getContext($context, "false_label")), "html", null, true);
                echo "</span>
    ";
            } elseif ((            // line 14
($context["data"] ?? $this->getContext($context, "data")) === null)) {
                // line 15
                echo "        <span class=\"";
                echo twig_escape_filter($this->env, ($context["column_class_editable_selector"] ?? $this->getContext($context, "column_class_editable_selector")), "html", null, true);
                echo "\" data-pk=\"";
                echo twig_escape_filter($this->env, ($context["pk"] ?? $this->getContext($context, "pk")), "html", null, true);
                echo "\" ";
                if ( !(($context["path"] ?? $this->getContext($context, "path")) === null)) {
                    echo "data-path=\"";
                    echo twig_escape_filter($this->env, ($context["path"] ?? $this->getContext($context, "path")), "html", null, true);
                    echo "\"";
                }
                echo ">
            ";
                // line 16
                if ( !(($context["default_content"] ?? $this->getContext($context, "default_content")) === null)) {
                    // line 17
                    echo "                ";
                    echo twig_escape_filter($this->env, ($context["default_content"] ?? $this->getContext($context, "default_content")), "html", null, true);
                    echo "
            ";
                } else {
                    // line 19
                    echo "                ";
                    echo twig_escape_filter($this->env, ($context["empty_text"] ?? $this->getContext($context, "empty_text")), "html", null, true);
                    echo "
            ";
                }
                // line 21
                echo "        </span>
    ";
            }
        } else {
            // line 24
            echo "    ";
            if ((($context["data"] ?? $this->getContext($context, "data")) === true)) {
                // line 25
                echo "        <span class=\"";
                echo twig_escape_filter($this->env, ($context["true_icon"] ?? $this->getContext($context, "true_icon")), "html", null, true);
                echo "\"></span> ";
                echo twig_escape_filter($this->env, ($context["true_label"] ?? $this->getContext($context, "true_label")), "html", null, true);
                echo "
    ";
            } elseif ((            // line 26
($context["data"] ?? $this->getContext($context, "data")) === false)) {
                // line 27
                echo "        <span class=\"";
                echo twig_escape_filter($this->env, ($context["false_icon"] ?? $this->getContext($context, "false_icon")), "html", null, true);
                echo "\"></span> ";
                echo twig_escape_filter($this->env, ($context["false_label"] ?? $this->getContext($context, "false_label")), "html", null, true);
                echo "
    ";
            } elseif ((            // line 28
($context["data"] ?? $this->getContext($context, "data")) === null)) {
                // line 29
                echo "        ";
                if ( !(($context["default_content"] ?? $this->getContext($context, "default_content")) === null)) {
                    // line 30
                    echo "            ";
                    echo twig_escape_filter($this->env, ($context["default_content"] ?? $this->getContext($context, "default_content")), "html", null, true);
                    echo "
        ";
                } else {
                    // line 32
                    echo "            ";
                    echo twig_escape_filter($this->env, ($context["data"] ?? $this->getContext($context, "data")), "html", null, true);
                    echo "
        ";
                }
                // line 34
                echo "    ";
            }
        }
        
        $__internal_8571986a6852bf2dfcc213897d8c63722abbcefdf819f4e51c5561d64674a353->leave($__internal_8571986a6852bf2dfcc213897d8c63722abbcefdf819f4e51c5561d64674a353_prof);

        
        $__internal_d740cfae4dadfdd6e0754a1b7cdeef0ce1871004e2afa8367488c2abc944f302->leave($__internal_d740cfae4dadfdd6e0754a1b7cdeef0ce1871004e2afa8367488c2abc944f302_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:render:boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 34,  126 => 32,  120 => 30,  117 => 29,  115 => 28,  108 => 27,  106 => 26,  99 => 25,  96 => 24,  91 => 21,  85 => 19,  79 => 17,  77 => 16,  64 => 15,  62 => 14,  47 => 13,  45 => 12,  30 => 11,  27 => 10,  25 => 9,);
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
{% if column_class_editable_selector is defined %}
    {% if data is same as(true) %}
        <span class=\"{{ true_icon ~ ' ' ~ column_class_editable_selector }}\" data-pk=\"{{ pk }}\" {% if path is not same as(null) %}data-path=\"{{ path }}\"{% endif %}>{{ true_label }}</span>
    {% elseif data is same as(false) %}
        <span class=\"{{ false_icon ~ ' ' ~ column_class_editable_selector }}\" data-pk=\"{{ pk }}\" {% if path is not same as(null) %}data-path=\"{{ path }}\"{% endif %}>{{ false_label }}</span>
    {% elseif data is same as(null) %}
        <span class=\"{{ column_class_editable_selector }}\" data-pk=\"{{ pk }}\" {% if path is not same as(null) %}data-path=\"{{ path }}\"{% endif %}>
            {% if default_content is not same as(null) %}
                {{ default_content }}
            {% else %}
                {{ empty_text }}
            {% endif %}
        </span>
    {% endif %}
{% else %}
    {% if data is same as(true) %}
        <span class=\"{{ true_icon }}\"></span> {{ true_label }}
    {% elseif data is same as(false) %}
        <span class=\"{{ false_icon }}\"></span> {{ false_label }}
    {% elseif data is same as(null) %}
        {% if default_content is not same as(null) %}
            {{ default_content }}
        {% else %}
            {{ data }}
        {% endif %}
    {% endif %}
{% endif %}
", "SgDatatablesBundle:render:boolean.html.twig", "/root/Schreibtisch/devops/vendor/sg/datatablesbundle/Resources/views/render/boolean.html.twig");
    }
}
