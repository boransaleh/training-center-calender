<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_b5f6b8a8fc1844f2c61d13e2202c7b02f79306b030da81f99fce487075e46975 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3e3145b4b264ff730d1ea249f5536ec0e7e2c2f5611858a4f25ff7d63cf9c399 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e3145b4b264ff730d1ea249f5536ec0e7e2c2f5611858a4f25ff7d63cf9c399->enter($__internal_3e3145b4b264ff730d1ea249f5536ec0e7e2c2f5611858a4f25ff7d63cf9c399_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_671cb1589fd334162a957887d9cd54fd6bfb81a8d260f077a260cf74adeec868 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_671cb1589fd334162a957887d9cd54fd6bfb81a8d260f077a260cf74adeec868->enter($__internal_671cb1589fd334162a957887d9cd54fd6bfb81a8d260f077a260cf74adeec868_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e3145b4b264ff730d1ea249f5536ec0e7e2c2f5611858a4f25ff7d63cf9c399->leave($__internal_3e3145b4b264ff730d1ea249f5536ec0e7e2c2f5611858a4f25ff7d63cf9c399_prof);

        
        $__internal_671cb1589fd334162a957887d9cd54fd6bfb81a8d260f077a260cf74adeec868->leave($__internal_671cb1589fd334162a957887d9cd54fd6bfb81a8d260f077a260cf74adeec868_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_029f910db25a2bf536a77b75de16678b629a1ebc2bb61638fd5f7bd7ba33112d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_029f910db25a2bf536a77b75de16678b629a1ebc2bb61638fd5f7bd7ba33112d->enter($__internal_029f910db25a2bf536a77b75de16678b629a1ebc2bb61638fd5f7bd7ba33112d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_953684360305a5a0d26ffe1f5e2bd3cbe632183c459c707e2ad8817fa9efe402 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_953684360305a5a0d26ffe1f5e2bd3cbe632183c459c707e2ad8817fa9efe402->enter($__internal_953684360305a5a0d26ffe1f5e2bd3cbe632183c459c707e2ad8817fa9efe402_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_953684360305a5a0d26ffe1f5e2bd3cbe632183c459c707e2ad8817fa9efe402->leave($__internal_953684360305a5a0d26ffe1f5e2bd3cbe632183c459c707e2ad8817fa9efe402_prof);

        
        $__internal_029f910db25a2bf536a77b75de16678b629a1ebc2bb61638fd5f7bd7ba33112d->leave($__internal_029f910db25a2bf536a77b75de16678b629a1ebc2bb61638fd5f7bd7ba33112d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/root/Schreibtisch/devops/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
