<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_ace5f942a7957be4539a16fd346f0837d7848de1aedb8996eef525792a9fa542 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e4ffff2c31228de4e31309273e8b45834d8b4b190f15d3c6d87f95709434fef3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4ffff2c31228de4e31309273e8b45834d8b4b190f15d3c6d87f95709434fef3->enter($__internal_e4ffff2c31228de4e31309273e8b45834d8b4b190f15d3c6d87f95709434fef3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_b3c22c1a52a63d0f3befc2d8288b37ceb00c90ff3af4d83e5eb0a7642b32c2ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3c22c1a52a63d0f3befc2d8288b37ceb00c90ff3af4d83e5eb0a7642b32c2ec->enter($__internal_b3c22c1a52a63d0f3befc2d8288b37ceb00c90ff3af4d83e5eb0a7642b32c2ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4ffff2c31228de4e31309273e8b45834d8b4b190f15d3c6d87f95709434fef3->leave($__internal_e4ffff2c31228de4e31309273e8b45834d8b4b190f15d3c6d87f95709434fef3_prof);

        
        $__internal_b3c22c1a52a63d0f3befc2d8288b37ceb00c90ff3af4d83e5eb0a7642b32c2ec->leave($__internal_b3c22c1a52a63d0f3befc2d8288b37ceb00c90ff3af4d83e5eb0a7642b32c2ec_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8b3c36b2a99c72f269376fb6c8c7abb015650eeebe8bbca902f08786c75415cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b3c36b2a99c72f269376fb6c8c7abb015650eeebe8bbca902f08786c75415cf->enter($__internal_8b3c36b2a99c72f269376fb6c8c7abb015650eeebe8bbca902f08786c75415cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d58ae1ae78b353ca112ffdf8733b0d1ec0d1e532a80aca630c55dd30bf4c8de9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d58ae1ae78b353ca112ffdf8733b0d1ec0d1e532a80aca630c55dd30bf4c8de9->enter($__internal_d58ae1ae78b353ca112ffdf8733b0d1ec0d1e532a80aca630c55dd30bf4c8de9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_d58ae1ae78b353ca112ffdf8733b0d1ec0d1e532a80aca630c55dd30bf4c8de9->leave($__internal_d58ae1ae78b353ca112ffdf8733b0d1ec0d1e532a80aca630c55dd30bf4c8de9_prof);

        
        $__internal_8b3c36b2a99c72f269376fb6c8c7abb015650eeebe8bbca902f08786c75415cf->leave($__internal_8b3c36b2a99c72f269376fb6c8c7abb015650eeebe8bbca902f08786c75415cf_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_597de1e4003433b62fe32ff0323b352c45148cc47effd72673b9276a308f6356 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_597de1e4003433b62fe32ff0323b352c45148cc47effd72673b9276a308f6356->enter($__internal_597de1e4003433b62fe32ff0323b352c45148cc47effd72673b9276a308f6356_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_abad210566b2cfe63023da19a3155b643789640113463045c164dbb586af5c09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abad210566b2cfe63023da19a3155b643789640113463045c164dbb586af5c09->enter($__internal_abad210566b2cfe63023da19a3155b643789640113463045c164dbb586af5c09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_abad210566b2cfe63023da19a3155b643789640113463045c164dbb586af5c09->leave($__internal_abad210566b2cfe63023da19a3155b643789640113463045c164dbb586af5c09_prof);

        
        $__internal_597de1e4003433b62fe32ff0323b352c45148cc47effd72673b9276a308f6356->leave($__internal_597de1e4003433b62fe32ff0323b352c45148cc47effd72673b9276a308f6356_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_1b93c432ecc05254db184714bc004216e486a18d3c0d82d6772ec40e15e92e2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b93c432ecc05254db184714bc004216e486a18d3c0d82d6772ec40e15e92e2e->enter($__internal_1b93c432ecc05254db184714bc004216e486a18d3c0d82d6772ec40e15e92e2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_07e62dc1226ab09fa1d8d7d5e8a925f4b58eb02f5e08e5352bf718f02c37196b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07e62dc1226ab09fa1d8d7d5e8a925f4b58eb02f5e08e5352bf718f02c37196b->enter($__internal_07e62dc1226ab09fa1d8d7d5e8a925f4b58eb02f5e08e5352bf718f02c37196b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_07e62dc1226ab09fa1d8d7d5e8a925f4b58eb02f5e08e5352bf718f02c37196b->leave($__internal_07e62dc1226ab09fa1d8d7d5e8a925f4b58eb02f5e08e5352bf718f02c37196b_prof);

        
        $__internal_1b93c432ecc05254db184714bc004216e486a18d3c0d82d6772ec40e15e92e2e->leave($__internal_1b93c432ecc05254db184714bc004216e486a18d3c0d82d6772ec40e15e92e2e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/root/Schreibtisch/devops/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
