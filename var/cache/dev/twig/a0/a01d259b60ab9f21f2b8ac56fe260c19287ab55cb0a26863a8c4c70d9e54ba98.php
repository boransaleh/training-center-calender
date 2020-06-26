<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_92104d0b9511627ffa93883994db52ff51f51ff4617d2cde5d877826511c83d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c45ff3da4ccb707f695cc82de71e6d115cda8bc5b273abbc2bf4ec4adce41249 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c45ff3da4ccb707f695cc82de71e6d115cda8bc5b273abbc2bf4ec4adce41249->enter($__internal_c45ff3da4ccb707f695cc82de71e6d115cda8bc5b273abbc2bf4ec4adce41249_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_a527a95709e204f6a0c74a359b983cd0a537a25aa86eeadabf55c2337c3604fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a527a95709e204f6a0c74a359b983cd0a537a25aa86eeadabf55c2337c3604fd->enter($__internal_a527a95709e204f6a0c74a359b983cd0a537a25aa86eeadabf55c2337c3604fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c45ff3da4ccb707f695cc82de71e6d115cda8bc5b273abbc2bf4ec4adce41249->leave($__internal_c45ff3da4ccb707f695cc82de71e6d115cda8bc5b273abbc2bf4ec4adce41249_prof);

        
        $__internal_a527a95709e204f6a0c74a359b983cd0a537a25aa86eeadabf55c2337c3604fd->leave($__internal_a527a95709e204f6a0c74a359b983cd0a537a25aa86eeadabf55c2337c3604fd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ae3fd37837521b96942b729049324d691ad7f44905ec1e00d66cdfd723834cc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae3fd37837521b96942b729049324d691ad7f44905ec1e00d66cdfd723834cc4->enter($__internal_ae3fd37837521b96942b729049324d691ad7f44905ec1e00d66cdfd723834cc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6f0d404d167f0d65506d81a556828dc609c1f1190f6987c5aa34a79053496d0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f0d404d167f0d65506d81a556828dc609c1f1190f6987c5aa34a79053496d0c->enter($__internal_6f0d404d167f0d65506d81a556828dc609c1f1190f6987c5aa34a79053496d0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_6f0d404d167f0d65506d81a556828dc609c1f1190f6987c5aa34a79053496d0c->leave($__internal_6f0d404d167f0d65506d81a556828dc609c1f1190f6987c5aa34a79053496d0c_prof);

        
        $__internal_ae3fd37837521b96942b729049324d691ad7f44905ec1e00d66cdfd723834cc4->leave($__internal_ae3fd37837521b96942b729049324d691ad7f44905ec1e00d66cdfd723834cc4_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_43d5fd5805c9a08358f2092779bab98268af3bf3026fb828ec6dd2bf7f22587c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43d5fd5805c9a08358f2092779bab98268af3bf3026fb828ec6dd2bf7f22587c->enter($__internal_43d5fd5805c9a08358f2092779bab98268af3bf3026fb828ec6dd2bf7f22587c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d9dc488139476d93ae390985c180045ccde0ae3bb521c8d8d8670756151c6ff0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9dc488139476d93ae390985c180045ccde0ae3bb521c8d8d8670756151c6ff0->enter($__internal_d9dc488139476d93ae390985c180045ccde0ae3bb521c8d8d8670756151c6ff0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_d9dc488139476d93ae390985c180045ccde0ae3bb521c8d8d8670756151c6ff0->leave($__internal_d9dc488139476d93ae390985c180045ccde0ae3bb521c8d8d8670756151c6ff0_prof);

        
        $__internal_43d5fd5805c9a08358f2092779bab98268af3bf3026fb828ec6dd2bf7f22587c->leave($__internal_43d5fd5805c9a08358f2092779bab98268af3bf3026fb828ec6dd2bf7f22587c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "/root/Schreibtisch/devops/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
