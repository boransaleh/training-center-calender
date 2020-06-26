<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_41ed0c7cb8d8245602d80f465e4d2bd31656fee401cdf4cd7bcee705fb870bbd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d67f99dcd5db91e25249cef9b30ab6d336b4d802c1858aca937ab1298e6eb4ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d67f99dcd5db91e25249cef9b30ab6d336b4d802c1858aca937ab1298e6eb4ca->enter($__internal_d67f99dcd5db91e25249cef9b30ab6d336b4d802c1858aca937ab1298e6eb4ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_96b094445fb1e19b7faa01ea73de33496d13dcd30ada43b88b3395f05472c6ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96b094445fb1e19b7faa01ea73de33496d13dcd30ada43b88b3395f05472c6ca->enter($__internal_96b094445fb1e19b7faa01ea73de33496d13dcd30ada43b88b3395f05472c6ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d67f99dcd5db91e25249cef9b30ab6d336b4d802c1858aca937ab1298e6eb4ca->leave($__internal_d67f99dcd5db91e25249cef9b30ab6d336b4d802c1858aca937ab1298e6eb4ca_prof);

        
        $__internal_96b094445fb1e19b7faa01ea73de33496d13dcd30ada43b88b3395f05472c6ca->leave($__internal_96b094445fb1e19b7faa01ea73de33496d13dcd30ada43b88b3395f05472c6ca_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e47ab3e09f100c08f649869c9981042b6ac61b55b2d27eb22d22a095c0ead4ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e47ab3e09f100c08f649869c9981042b6ac61b55b2d27eb22d22a095c0ead4ec->enter($__internal_e47ab3e09f100c08f649869c9981042b6ac61b55b2d27eb22d22a095c0ead4ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a8b4eafc7bfd93f7171561839c1cd9d4a74955449a34196bfc0e54714dfa934b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8b4eafc7bfd93f7171561839c1cd9d4a74955449a34196bfc0e54714dfa934b->enter($__internal_a8b4eafc7bfd93f7171561839c1cd9d4a74955449a34196bfc0e54714dfa934b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_a8b4eafc7bfd93f7171561839c1cd9d4a74955449a34196bfc0e54714dfa934b->leave($__internal_a8b4eafc7bfd93f7171561839c1cd9d4a74955449a34196bfc0e54714dfa934b_prof);

        
        $__internal_e47ab3e09f100c08f649869c9981042b6ac61b55b2d27eb22d22a095c0ead4ec->leave($__internal_e47ab3e09f100c08f649869c9981042b6ac61b55b2d27eb22d22a095c0ead4ec_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_da540d3b67fd9091b782f0ca34d51f07fd37524cfa45519196f1935e60ce4bf7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da540d3b67fd9091b782f0ca34d51f07fd37524cfa45519196f1935e60ce4bf7->enter($__internal_da540d3b67fd9091b782f0ca34d51f07fd37524cfa45519196f1935e60ce4bf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0b50140bea289c3ed8e8f435dcf60658074ad2e8acd6ad227e9c5fcf8b4b567b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b50140bea289c3ed8e8f435dcf60658074ad2e8acd6ad227e9c5fcf8b4b567b->enter($__internal_0b50140bea289c3ed8e8f435dcf60658074ad2e8acd6ad227e9c5fcf8b4b567b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_0b50140bea289c3ed8e8f435dcf60658074ad2e8acd6ad227e9c5fcf8b4b567b->leave($__internal_0b50140bea289c3ed8e8f435dcf60658074ad2e8acd6ad227e9c5fcf8b4b567b_prof);

        
        $__internal_da540d3b67fd9091b782f0ca34d51f07fd37524cfa45519196f1935e60ce4bf7->leave($__internal_da540d3b67fd9091b782f0ca34d51f07fd37524cfa45519196f1935e60ce4bf7_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0e5bfd79073e1f39050e688d6d0e542671010ad02c0ef9a746a40985fc8a91df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e5bfd79073e1f39050e688d6d0e542671010ad02c0ef9a746a40985fc8a91df->enter($__internal_0e5bfd79073e1f39050e688d6d0e542671010ad02c0ef9a746a40985fc8a91df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4052a2497b1e5e957cb42188e498c9e290c3cad984995eb44a7c8e681a0bd362 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4052a2497b1e5e957cb42188e498c9e290c3cad984995eb44a7c8e681a0bd362->enter($__internal_4052a2497b1e5e957cb42188e498c9e290c3cad984995eb44a7c8e681a0bd362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_4052a2497b1e5e957cb42188e498c9e290c3cad984995eb44a7c8e681a0bd362->leave($__internal_4052a2497b1e5e957cb42188e498c9e290c3cad984995eb44a7c8e681a0bd362_prof);

        
        $__internal_0e5bfd79073e1f39050e688d6d0e542671010ad02c0ef9a746a40985fc8a91df->leave($__internal_0e5bfd79073e1f39050e688d6d0e542671010ad02c0ef9a746a40985fc8a91df_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/root/Schreibtisch/devops/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
