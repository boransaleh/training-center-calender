<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c0ca4c6da01023a5d22632e2eaee8418948ae91e45aad04117f78d47003342b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_ae49414951619590562cb027cb6647772f24650eb7c62e56aa0fae465eb7509d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae49414951619590562cb027cb6647772f24650eb7c62e56aa0fae465eb7509d->enter($__internal_ae49414951619590562cb027cb6647772f24650eb7c62e56aa0fae465eb7509d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_90538893ccbd0dc5d14dc5f04b6dad6efe953a43b8fab4bfb636861f1e0379d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90538893ccbd0dc5d14dc5f04b6dad6efe953a43b8fab4bfb636861f1e0379d3->enter($__internal_90538893ccbd0dc5d14dc5f04b6dad6efe953a43b8fab4bfb636861f1e0379d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae49414951619590562cb027cb6647772f24650eb7c62e56aa0fae465eb7509d->leave($__internal_ae49414951619590562cb027cb6647772f24650eb7c62e56aa0fae465eb7509d_prof);

        
        $__internal_90538893ccbd0dc5d14dc5f04b6dad6efe953a43b8fab4bfb636861f1e0379d3->leave($__internal_90538893ccbd0dc5d14dc5f04b6dad6efe953a43b8fab4bfb636861f1e0379d3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0a7dae161916c2004fa397ac59225f24bc22c96f08ea2f11229f5fb0c627fd0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a7dae161916c2004fa397ac59225f24bc22c96f08ea2f11229f5fb0c627fd0a->enter($__internal_0a7dae161916c2004fa397ac59225f24bc22c96f08ea2f11229f5fb0c627fd0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6c9f73a218f5101c3c315e6abd8c76f66efac17affe6166e70ccc79f459de7cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c9f73a218f5101c3c315e6abd8c76f66efac17affe6166e70ccc79f459de7cb->enter($__internal_6c9f73a218f5101c3c315e6abd8c76f66efac17affe6166e70ccc79f459de7cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6c9f73a218f5101c3c315e6abd8c76f66efac17affe6166e70ccc79f459de7cb->leave($__internal_6c9f73a218f5101c3c315e6abd8c76f66efac17affe6166e70ccc79f459de7cb_prof);

        
        $__internal_0a7dae161916c2004fa397ac59225f24bc22c96f08ea2f11229f5fb0c627fd0a->leave($__internal_0a7dae161916c2004fa397ac59225f24bc22c96f08ea2f11229f5fb0c627fd0a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9a95978ccb3959d7e86637cdff8c79db34c5028b39b85982bc696ca3b14ed7b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a95978ccb3959d7e86637cdff8c79db34c5028b39b85982bc696ca3b14ed7b3->enter($__internal_9a95978ccb3959d7e86637cdff8c79db34c5028b39b85982bc696ca3b14ed7b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9af735af65e6ddfd98461260e77617a3b6354d99f2ccd461cee52a19ef626898 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9af735af65e6ddfd98461260e77617a3b6354d99f2ccd461cee52a19ef626898->enter($__internal_9af735af65e6ddfd98461260e77617a3b6354d99f2ccd461cee52a19ef626898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9af735af65e6ddfd98461260e77617a3b6354d99f2ccd461cee52a19ef626898->leave($__internal_9af735af65e6ddfd98461260e77617a3b6354d99f2ccd461cee52a19ef626898_prof);

        
        $__internal_9a95978ccb3959d7e86637cdff8c79db34c5028b39b85982bc696ca3b14ed7b3->leave($__internal_9a95978ccb3959d7e86637cdff8c79db34c5028b39b85982bc696ca3b14ed7b3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6ced61993cd0f17ba4894255e6ef1078899aa608015c9e35af971bc27d606025 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ced61993cd0f17ba4894255e6ef1078899aa608015c9e35af971bc27d606025->enter($__internal_6ced61993cd0f17ba4894255e6ef1078899aa608015c9e35af971bc27d606025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d49cb572f163a3a2df05d1f326fa40597ea40c58a84987bd4c5d6cd7888e62ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d49cb572f163a3a2df05d1f326fa40597ea40c58a84987bd4c5d6cd7888e62ba->enter($__internal_d49cb572f163a3a2df05d1f326fa40597ea40c58a84987bd4c5d6cd7888e62ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d49cb572f163a3a2df05d1f326fa40597ea40c58a84987bd4c5d6cd7888e62ba->leave($__internal_d49cb572f163a3a2df05d1f326fa40597ea40c58a84987bd4c5d6cd7888e62ba_prof);

        
        $__internal_6ced61993cd0f17ba4894255e6ef1078899aa608015c9e35af971bc27d606025->leave($__internal_6ced61993cd0f17ba4894255e6ef1078899aa608015c9e35af971bc27d606025_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/root/Schreibtisch/devops/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
