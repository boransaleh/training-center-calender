<?php

/* SgDatatablesBundle:datatable:datatable.html.twig */
class __TwigTemplate_d85583b764c57f03841ab645950aeb407623096852de360d7d2bd668433e0e80 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sg_datatables' => array($this, 'block_sg_datatables'),
            'sg_datatables_html' => array($this, 'block_sg_datatables_html'),
            'sg_datatables_js' => array($this, 'block_sg_datatables_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bf7b1e7a9c87679e61a07cb45ddb9450d59f25686700bd5baa23f95a4f354d27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf7b1e7a9c87679e61a07cb45ddb9450d59f25686700bd5baa23f95a4f354d27->enter($__internal_bf7b1e7a9c87679e61a07cb45ddb9450d59f25686700bd5baa23f95a4f354d27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:datatable:datatable.html.twig"));

        $__internal_3fef30de619d4f2ce346e4592da1dbd186e835eba72e7882b1d0f1a0fb692d0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fef30de619d4f2ce346e4592da1dbd186e835eba72e7882b1d0f1a0fb692d0e->enter($__internal_3fef30de619d4f2ce346e4592da1dbd186e835eba72e7882b1d0f1a0fb692d0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:datatable:datatable.html.twig"));

        // line 9
        $this->displayBlock('sg_datatables', $context, $blocks);
        
        $__internal_bf7b1e7a9c87679e61a07cb45ddb9450d59f25686700bd5baa23f95a4f354d27->leave($__internal_bf7b1e7a9c87679e61a07cb45ddb9450d59f25686700bd5baa23f95a4f354d27_prof);

        
        $__internal_3fef30de619d4f2ce346e4592da1dbd186e835eba72e7882b1d0f1a0fb692d0e->leave($__internal_3fef30de619d4f2ce346e4592da1dbd186e835eba72e7882b1d0f1a0fb692d0e_prof);

    }

    public function block_sg_datatables($context, array $blocks = array())
    {
        $__internal_05cbd2a85ccecaf9e4b9e9fa1d78e0ed963d926e82731bbe038a8a6b0dd18fd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05cbd2a85ccecaf9e4b9e9fa1d78e0ed963d926e82731bbe038a8a6b0dd18fd3->enter($__internal_05cbd2a85ccecaf9e4b9e9fa1d78e0ed963d926e82731bbe038a8a6b0dd18fd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatables"));

        $__internal_33ff2b3adeda2bc229d34e167e817c1f1803c4bcd18d1cd5fae5781689dc41e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33ff2b3adeda2bc229d34e167e817c1f1803c4bcd18d1cd5fae5781689dc41e5->enter($__internal_33ff2b3adeda2bc229d34e167e817c1f1803c4bcd18d1cd5fae5781689dc41e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatables"));

        // line 10
        echo "
    ";
        // line 11
        $this->displayBlock('sg_datatables_html', $context, $blocks);
        // line 16
        echo "
    ";
        // line 17
        $this->displayBlock('sg_datatables_js', $context, $blocks);
        // line 22
        echo "
";
        
        $__internal_33ff2b3adeda2bc229d34e167e817c1f1803c4bcd18d1cd5fae5781689dc41e5->leave($__internal_33ff2b3adeda2bc229d34e167e817c1f1803c4bcd18d1cd5fae5781689dc41e5_prof);

        
        $__internal_05cbd2a85ccecaf9e4b9e9fa1d78e0ed963d926e82731bbe038a8a6b0dd18fd3->leave($__internal_05cbd2a85ccecaf9e4b9e9fa1d78e0ed963d926e82731bbe038a8a6b0dd18fd3_prof);

    }

    // line 11
    public function block_sg_datatables_html($context, array $blocks = array())
    {
        $__internal_7735296a4d4f785cfb3f28dfde79e407ac87a1fd5d27c8e5709bb33d6f5c722f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7735296a4d4f785cfb3f28dfde79e407ac87a1fd5d27c8e5709bb33d6f5c722f->enter($__internal_7735296a4d4f785cfb3f28dfde79e407ac87a1fd5d27c8e5709bb33d6f5c722f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatables_html"));

        $__internal_d00503a21a626e96ab7b6592163dba0abe651cb3cc64661876667a2375528624 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d00503a21a626e96ab7b6592163dba0abe651cb3cc64661876667a2375528624->enter($__internal_d00503a21a626e96ab7b6592163dba0abe651cb3cc64661876667a2375528624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatables_html"));

        // line 12
        echo "
        ";
        // line 13
        $this->loadTemplate("SgDatatablesBundle:datatable:datatable_html.html.twig", "SgDatatablesBundle:datatable:datatable.html.twig", 13)->display($context);
        // line 14
        echo "
    ";
        
        $__internal_d00503a21a626e96ab7b6592163dba0abe651cb3cc64661876667a2375528624->leave($__internal_d00503a21a626e96ab7b6592163dba0abe651cb3cc64661876667a2375528624_prof);

        
        $__internal_7735296a4d4f785cfb3f28dfde79e407ac87a1fd5d27c8e5709bb33d6f5c722f->leave($__internal_7735296a4d4f785cfb3f28dfde79e407ac87a1fd5d27c8e5709bb33d6f5c722f_prof);

    }

    // line 17
    public function block_sg_datatables_js($context, array $blocks = array())
    {
        $__internal_0713384333e8f702219f8b07c0ba15c8de60f13f695cf6c277cfe76ba4b23530 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0713384333e8f702219f8b07c0ba15c8de60f13f695cf6c277cfe76ba4b23530->enter($__internal_0713384333e8f702219f8b07c0ba15c8de60f13f695cf6c277cfe76ba4b23530_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatables_js"));

        $__internal_787531c982af0ec85c1980555125ec77ee5771571c354f696995b947809b7d1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_787531c982af0ec85c1980555125ec77ee5771571c354f696995b947809b7d1c->enter($__internal_787531c982af0ec85c1980555125ec77ee5771571c354f696995b947809b7d1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatables_js"));

        // line 18
        echo "
        ";
        // line 19
        $this->loadTemplate("SgDatatablesBundle:datatable:datatable_js.html.twig", "SgDatatablesBundle:datatable:datatable.html.twig", 19)->display($context);
        // line 20
        echo "
    ";
        
        $__internal_787531c982af0ec85c1980555125ec77ee5771571c354f696995b947809b7d1c->leave($__internal_787531c982af0ec85c1980555125ec77ee5771571c354f696995b947809b7d1c_prof);

        
        $__internal_0713384333e8f702219f8b07c0ba15c8de60f13f695cf6c277cfe76ba4b23530->leave($__internal_0713384333e8f702219f8b07c0ba15c8de60f13f695cf6c277cfe76ba4b23530_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:datatable:datatable.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  106 => 20,  104 => 19,  101 => 18,  92 => 17,  81 => 14,  79 => 13,  76 => 12,  67 => 11,  56 => 22,  54 => 17,  51 => 16,  49 => 11,  46 => 10,  28 => 9,);
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
{% block sg_datatables %}

    {% block sg_datatables_html %}

        {% include 'SgDatatablesBundle:datatable:datatable_html.html.twig' %}

    {% endblock %}

    {% block sg_datatables_js %}

        {% include 'SgDatatablesBundle:datatable:datatable_js.html.twig' %}

    {% endblock %}

{% endblock  %}
", "SgDatatablesBundle:datatable:datatable.html.twig", "/root/Schreibtisch/devops/vendor/sg/datatablesbundle/Resources/views/datatable/datatable.html.twig");
    }
}
