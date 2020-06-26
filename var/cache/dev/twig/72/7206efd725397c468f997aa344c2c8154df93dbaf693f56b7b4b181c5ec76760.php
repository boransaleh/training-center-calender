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
        $__internal_99becf09799ef34e31c3fc9e784e9cc57e50352d3fb934da67e3345211b66aa9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99becf09799ef34e31c3fc9e784e9cc57e50352d3fb934da67e3345211b66aa9->enter($__internal_99becf09799ef34e31c3fc9e784e9cc57e50352d3fb934da67e3345211b66aa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_0717f2dfe7b1d19517ec64142d6dccb48ffe22582eec5c7023246f1a13a03fcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0717f2dfe7b1d19517ec64142d6dccb48ffe22582eec5c7023246f1a13a03fcc->enter($__internal_0717f2dfe7b1d19517ec64142d6dccb48ffe22582eec5c7023246f1a13a03fcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_99becf09799ef34e31c3fc9e784e9cc57e50352d3fb934da67e3345211b66aa9->leave($__internal_99becf09799ef34e31c3fc9e784e9cc57e50352d3fb934da67e3345211b66aa9_prof);

        
        $__internal_0717f2dfe7b1d19517ec64142d6dccb48ffe22582eec5c7023246f1a13a03fcc->leave($__internal_0717f2dfe7b1d19517ec64142d6dccb48ffe22582eec5c7023246f1a13a03fcc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e5ecb571414a244e1c54ad32662cb246dc1bdd05a6489611677b6243ce3553e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5ecb571414a244e1c54ad32662cb246dc1bdd05a6489611677b6243ce3553e3->enter($__internal_e5ecb571414a244e1c54ad32662cb246dc1bdd05a6489611677b6243ce3553e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1db03cc769ce4894f7bc603c5154e99940802243085b2ebdf47b8eff697fa357 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1db03cc769ce4894f7bc603c5154e99940802243085b2ebdf47b8eff697fa357->enter($__internal_1db03cc769ce4894f7bc603c5154e99940802243085b2ebdf47b8eff697fa357_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_1db03cc769ce4894f7bc603c5154e99940802243085b2ebdf47b8eff697fa357->leave($__internal_1db03cc769ce4894f7bc603c5154e99940802243085b2ebdf47b8eff697fa357_prof);

        
        $__internal_e5ecb571414a244e1c54ad32662cb246dc1bdd05a6489611677b6243ce3553e3->leave($__internal_e5ecb571414a244e1c54ad32662cb246dc1bdd05a6489611677b6243ce3553e3_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_886fee168bf853c900ee97764aa5ad249df4d8ca043d0bf97ab3c5a9fd49c19e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_886fee168bf853c900ee97764aa5ad249df4d8ca043d0bf97ab3c5a9fd49c19e->enter($__internal_886fee168bf853c900ee97764aa5ad249df4d8ca043d0bf97ab3c5a9fd49c19e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3adcde1545f2c8be5b6affed1565186f7376b2d4d785358f3d73822a5246b25a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3adcde1545f2c8be5b6affed1565186f7376b2d4d785358f3d73822a5246b25a->enter($__internal_3adcde1545f2c8be5b6affed1565186f7376b2d4d785358f3d73822a5246b25a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3adcde1545f2c8be5b6affed1565186f7376b2d4d785358f3d73822a5246b25a->leave($__internal_3adcde1545f2c8be5b6affed1565186f7376b2d4d785358f3d73822a5246b25a_prof);

        
        $__internal_886fee168bf853c900ee97764aa5ad249df4d8ca043d0bf97ab3c5a9fd49c19e->leave($__internal_886fee168bf853c900ee97764aa5ad249df4d8ca043d0bf97ab3c5a9fd49c19e_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_63add2a5030dbf831e5b3af3dfce5428ed09c6aecff5566d85a2c822be68de01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63add2a5030dbf831e5b3af3dfce5428ed09c6aecff5566d85a2c822be68de01->enter($__internal_63add2a5030dbf831e5b3af3dfce5428ed09c6aecff5566d85a2c822be68de01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_55e7f4557a5d5d3fa6ce7c57d10370c8b74c55e6f6aa4bba60a02bb2ff565e4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55e7f4557a5d5d3fa6ce7c57d10370c8b74c55e6f6aa4bba60a02bb2ff565e4f->enter($__internal_55e7f4557a5d5d3fa6ce7c57d10370c8b74c55e6f6aa4bba60a02bb2ff565e4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_55e7f4557a5d5d3fa6ce7c57d10370c8b74c55e6f6aa4bba60a02bb2ff565e4f->leave($__internal_55e7f4557a5d5d3fa6ce7c57d10370c8b74c55e6f6aa4bba60a02bb2ff565e4f_prof);

        
        $__internal_63add2a5030dbf831e5b3af3dfce5428ed09c6aecff5566d85a2c822be68de01->leave($__internal_63add2a5030dbf831e5b3af3dfce5428ed09c6aecff5566d85a2c822be68de01_prof);

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
