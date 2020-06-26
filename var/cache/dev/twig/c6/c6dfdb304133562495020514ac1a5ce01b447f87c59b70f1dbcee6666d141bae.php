<?php

/* SgDatatablesBundle:datatable:columns.html.twig */
class __TwigTemplate_9b7ef7f20b8b9ee3df7a80fd6c12b3b0d8c1473d149ad8187abffdd9f16ec666 extends Twig_Template
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
        $__internal_5f25eeabf9ca503e69502e665c419738c5dee45dc24138dec4d2e6d93645fa18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f25eeabf9ca503e69502e665c419738c5dee45dc24138dec4d2e6d93645fa18->enter($__internal_5f25eeabf9ca503e69502e665c419738c5dee45dc24138dec4d2e6d93645fa18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:datatable:columns.html.twig"));

        $__internal_aa63fadb189d0128c1d1780e734b5abf8319e42f9122ff028d53becc06df42a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa63fadb189d0128c1d1780e734b5abf8319e42f9122ff028d53becc06df42a3->enter($__internal_aa63fadb189d0128c1d1780e734b5abf8319e42f9122ff028d53becc06df42a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:datatable:columns.html.twig"));

        // line 9
        echo "\"columns\": [
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "columnBuilder", array()), "columns", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 11
            echo "        ";
            $this->loadTemplate($this->getAttribute($context["column"], "getOptionsTemplate", array()), "SgDatatablesBundle:datatable:columns.html.twig", 11)->display($context);
            // line 12
            echo "    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "]
";
        
        $__internal_5f25eeabf9ca503e69502e665c419738c5dee45dc24138dec4d2e6d93645fa18->leave($__internal_5f25eeabf9ca503e69502e665c419738c5dee45dc24138dec4d2e6d93645fa18_prof);

        
        $__internal_aa63fadb189d0128c1d1780e734b5abf8319e42f9122ff028d53becc06df42a3->leave($__internal_aa63fadb189d0128c1d1780e734b5abf8319e42f9122ff028d53becc06df42a3_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:datatable:columns.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 13,  48 => 12,  45 => 11,  28 => 10,  25 => 9,);
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
\"columns\": [
    {% for column in sg_datatables_view.columnBuilder.columns %}
        {% include column.getOptionsTemplate %}
    {% endfor %}
]
", "SgDatatablesBundle:datatable:columns.html.twig", "/root/Schreibtisch/devops/vendor/sg/datatablesbundle/Resources/views/datatable/columns.html.twig");
    }
}
