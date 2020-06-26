<?php

/* SgDatatablesBundle:datatable:extensions.html.twig */
class __TwigTemplate_7cef4e1107a3c7b717bef678586d1d5f58361e1f0177be8cb3a2a1818d9be483 extends Twig_Template
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
        $__internal_10a9456cc962ac64a885515ee273be42dc826265932dce164f5bb8e4d8eaf854 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10a9456cc962ac64a885515ee273be42dc826265932dce164f5bb8e4d8eaf854->enter($__internal_10a9456cc962ac64a885515ee273be42dc826265932dce164f5bb8e4d8eaf854_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:datatable:extensions.html.twig"));

        $__internal_e355038cdf8efa3ab5dd175ba8f983e72ff9846b18a1141b10090076a23ef090 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e355038cdf8efa3ab5dd175ba8f983e72ff9846b18a1141b10090076a23ef090->enter($__internal_e355038cdf8efa3ab5dd175ba8f983e72ff9846b18a1141b10090076a23ef090_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:datatable:extensions.html.twig"));

        // line 9
        echo "
";
        // line 11
        if ( !($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "extensions", array()), "buttons", array()) === null)) {
            // line 12
            echo "    ";
            if (($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "extensions", array()), "buttons", array()) === true)) {
                // line 13
                echo "        ";
                // line 14
                echo "        buttons: true,
    ";
            } else {
                // line 16
                echo "        ";
                // line 17
                echo "        buttons: [
            ";
                // line 18
                if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? null), "extensions", array(), "any", false, true), "buttons", array(), "any", false, true), "showButtons", array(), "any", true, true) &&  !($this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "extensions", array()), "buttons", array()), "showButtons", array()) === null))) {
                    // line 19
                    echo "                ";
                    echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "extensions", array()), "buttons", array()), "showButtons", array());
                    echo ",
            ";
                }
                // line 21
                echo "            ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? null), "extensions", array(), "any", false, true), "buttons", array(), "any", false, true), "createButtons", array(), "any", true, true) &&  !($this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "extensions", array()), "buttons", array()), "createButtons", array()) === null))) {
                    // line 22
                    echo "                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "extensions", array()), "buttons", array()), "createButtons", array()));
                    $context['loop'] = array(
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    );
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
                        // line 23
                        echo "                    ";
                        $this->loadTemplate("SgDatatablesBundle:datatable:button.html.twig", "SgDatatablesBundle:datatable:extensions.html.twig", 23)->display($context);
                        // line 24
                        echo "                ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 25
                    echo "            ";
                }
                // line 26
                echo "        ],
    ";
            }
        }
        // line 29
        echo "
";
        // line 31
        if ( !($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "extensions", array()), "responsive", array()) === null)) {
            // line 32
            echo "    ";
            if (($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "extensions", array()), "responsive", array()) === true)) {
                // line 33
                echo "        ";
                // line 34
                echo "        responsive: true,
    ";
            } elseif (($this->getAttribute($this->getAttribute($this->getAttribute(            // line 35
($context["sg_datatables_view"] ?? null), "extensions", array(), "any", false, true), "responsive", array(), "any", false, true), "details", array(), "any", true, true) &&  !($this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "extensions", array()), "responsive", array()), "details", array()) === null))) {
                // line 36
                echo "        ";
                // line 37
                echo "        responsive: {
            ";
                // line 38
                if ( !twig_test_iterable($this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "extensions", array()), "responsive", array()), "details", array()))) {
                    // line 39
                    echo "                ";
                    // line 40
                    echo "                details: ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Sg\DatatablesBundle\Twig\DatatableTwigExtension')->boolVar($this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "extensions", array()), "responsive", array()), "details", array())), "html", null, true);
                    echo ",
            ";
                } else {
                    // line 42
                    echo "                ";
                    // line 43
                    echo "                details: {
                    ";
                    // line 44
                    if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? null), "extensions", array(), "any", false, true), "responsive", array(), "any", false, true), "details", array(), "any", false, true), "type", array(), "any", true, true)) {
                        // line 45
                        echo "                        type: \"sg_datatables_view.extensions.responsive.details.type\",
                    ";
                    }
                    // line 47
                    echo "                    ";
                    if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? null), "extensions", array(), "any", false, true), "responsive", array(), "any", false, true), "details", array(), "any", false, true), "target", array(), "any", true, true)) {
                        // line 48
                        echo "                        target: \"sg_datatables_view.extensions.responsive.details.target\",
                    ";
                    }
                    // line 50
                    echo "                    ";
                    if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? null), "extensions", array(), "any", false, true), "responsive", array(), "any", false, true), "details", array(), "any", false, true), "renderer", array(), "any", true, true)) {
                        // line 51
                        echo "                        ";
                        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? null), "extensions", array(), "any", false, true), "responsive", array(), "any", false, true), "details", array(), "any", false, true), "renderer", array(), "any", false, true), "vars", array(), "array", true, true)) {
                            // line 52
                            echo "                            ";
                            $context["vars"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "extensions", array()), "responsive", array()), "details", array()), "renderer", array()), "vars", array(), "array");
                            // line 53
                            echo "                        ";
                        } else {
                            // line 54
                            echo "                            ";
                            $context["vars"] = array();
                            // line 55
                            echo "                        ";
                        }
                        // line 56
                        echo "                        renderer: ";
                        $this->loadTemplate($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "extensions", array()), "responsive", array()), "details", array()), "renderer", array()), "template", array(), "array"), "SgDatatablesBundle:datatable:extensions.html.twig", 56)->display(array_merge($context, ($context["vars"] ?? $this->getContext($context, "vars"))));
                        echo ",
                    ";
                    }
                    // line 58
                    echo "                    ";
                    if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? null), "extensions", array(), "any", false, true), "responsive", array(), "any", false, true), "details", array(), "any", false, true), "display", array(), "any", true, true)) {
                        // line 59
                        echo "                        ";
                        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? null), "extensions", array(), "any", false, true), "responsive", array(), "any", false, true), "details", array(), "any", false, true), "display", array(), "any", false, true), "vars", array(), "array", true, true)) {
                            // line 60
                            echo "                            ";
                            $context["vars"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "extensions", array()), "responsive", array()), "details", array()), "display", array()), "vars", array(), "array");
                            // line 61
                            echo "                        ";
                        } else {
                            // line 62
                            echo "                            ";
                            $context["vars"] = array();
                            // line 63
                            echo "                        ";
                        }
                        // line 64
                        echo "                        display: ";
                        $this->loadTemplate($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "extensions", array()), "responsive", array()), "details", array()), "display", array()), "template", array(), "array"), "SgDatatablesBundle:datatable:extensions.html.twig", 64)->display(array_merge($context, ($context["vars"] ?? $this->getContext($context, "vars"))));
                        echo ",
                    ";
                    }
                    // line 66
                    echo "                },
            ";
                }
                // line 68
                echo "        },
    ";
            }
        }
        
        $__internal_10a9456cc962ac64a885515ee273be42dc826265932dce164f5bb8e4d8eaf854->leave($__internal_10a9456cc962ac64a885515ee273be42dc826265932dce164f5bb8e4d8eaf854_prof);

        
        $__internal_e355038cdf8efa3ab5dd175ba8f983e72ff9846b18a1141b10090076a23ef090->leave($__internal_e355038cdf8efa3ab5dd175ba8f983e72ff9846b18a1141b10090076a23ef090_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:datatable:extensions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 68,  194 => 66,  188 => 64,  185 => 63,  182 => 62,  179 => 61,  176 => 60,  173 => 59,  170 => 58,  164 => 56,  161 => 55,  158 => 54,  155 => 53,  152 => 52,  149 => 51,  146 => 50,  142 => 48,  139 => 47,  135 => 45,  133 => 44,  130 => 43,  128 => 42,  122 => 40,  120 => 39,  118 => 38,  115 => 37,  113 => 36,  111 => 35,  108 => 34,  106 => 33,  103 => 32,  101 => 31,  98 => 29,  93 => 26,  90 => 25,  76 => 24,  73 => 23,  55 => 22,  52 => 21,  46 => 19,  44 => 18,  41 => 17,  39 => 16,  35 => 14,  33 => 13,  30 => 12,  28 => 11,  25 => 9,);
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

{# Buttons Extension #}
{% if sg_datatables_view.extensions.buttons is not same as(null) %}
    {% if sg_datatables_view.extensions.buttons is same as(true) %}
        {# the easiest way to activate the extension - buttons is a boolean value (true) #}
        buttons: true,
    {% else %}
        {# buttons is defined and not boolean, rather given as an object - handle the Buttons class options #}
        buttons: [
            {% if sg_datatables_view.extensions.buttons.showButtons is defined and sg_datatables_view.extensions.buttons.showButtons is not same as(null) %}
                {{ sg_datatables_view.extensions.buttons.showButtons|raw }},
            {% endif %}
            {% if sg_datatables_view.extensions.buttons.createButtons is defined and sg_datatables_view.extensions.buttons.createButtons is not same as(null) %}
                {% for button in sg_datatables_view.extensions.buttons.createButtons %}
                    {% include 'SgDatatablesBundle:datatable:button.html.twig' %}
                {% endfor %}
            {% endif %}
        ],
    {% endif %}
{% endif %}

{# Responsive Extension #}
{% if sg_datatables_view.extensions.responsive is not same as(null) %}
    {% if sg_datatables_view.extensions.responsive is same as(true) %}
        {# the easiest way to activate the extension - responsive is a boolean value (true) #}
        responsive: true,
    {% elseif sg_datatables_view.extensions.responsive.details is defined and sg_datatables_view.extensions.responsive.details is not same as(null) %}
        {# responsive is given as an object to handle the 'details' options #}
        responsive: {
            {% if sg_datatables_view.extensions.responsive.details is not iterable %}
                {# details is a simple boolean value #}
                details: {{ sg_datatables_view.extensions.responsive.details|sg_datatables_bool_var }},
            {% else %}
                {# details is an array #}
                details: {
                    {% if sg_datatables_view.extensions.responsive.details.type is defined %}
                        type: \"sg_datatables_view.extensions.responsive.details.type\",
                    {% endif %}
                    {% if sg_datatables_view.extensions.responsive.details.target is defined %}
                        target: \"sg_datatables_view.extensions.responsive.details.target\",
                    {% endif %}
                    {% if sg_datatables_view.extensions.responsive.details.renderer is defined %}
                        {% if sg_datatables_view.extensions.responsive.details.renderer['vars'] is defined %}
                            {% set vars = sg_datatables_view.extensions.responsive.details.renderer['vars'] %}
                        {% else %}
                            {% set vars = {} %}
                        {% endif %}
                        renderer: {% include sg_datatables_view.extensions.responsive.details.renderer['template'] with vars %},
                    {% endif %}
                    {% if sg_datatables_view.extensions.responsive.details.display is defined %}
                        {% if sg_datatables_view.extensions.responsive.details.display['vars'] is defined %}
                            {% set vars = sg_datatables_view.extensions.responsive.details.display['vars'] %}
                        {% else %}
                            {% set vars = {} %}
                        {% endif %}
                        display: {% include sg_datatables_view.extensions.responsive.details.display['template'] with vars %},
                    {% endif %}
                },
            {% endif %}
        },
    {% endif %}
{% endif %}
", "SgDatatablesBundle:datatable:extensions.html.twig", "/root/Schreibtisch/devops/vendor/sg/datatablesbundle/Resources/views/datatable/extensions.html.twig");
    }
}
