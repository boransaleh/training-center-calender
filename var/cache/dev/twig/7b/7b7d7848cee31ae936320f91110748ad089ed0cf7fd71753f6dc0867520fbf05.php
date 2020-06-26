<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_d5f53d537cc86ab8270d1d52757789a77f2f712fe43dd31f12b170ac8b0457bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_701fe8446fb0cd0b9cf1c49eef9f9b200b2864e606dee6a5a829da7d7972c624 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_701fe8446fb0cd0b9cf1c49eef9f9b200b2864e606dee6a5a829da7d7972c624->enter($__internal_701fe8446fb0cd0b9cf1c49eef9f9b200b2864e606dee6a5a829da7d7972c624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_82515deced2f6197ee9e05b700a33563868a3f65e7130ef24c89eef2d82d1d51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82515deced2f6197ee9e05b700a33563868a3f65e7130ef24c89eef2d82d1d51->enter($__internal_82515deced2f6197ee9e05b700a33563868a3f65e7130ef24c89eef2d82d1d51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_701fe8446fb0cd0b9cf1c49eef9f9b200b2864e606dee6a5a829da7d7972c624->leave($__internal_701fe8446fb0cd0b9cf1c49eef9f9b200b2864e606dee6a5a829da7d7972c624_prof);

        
        $__internal_82515deced2f6197ee9e05b700a33563868a3f65e7130ef24c89eef2d82d1d51->leave($__internal_82515deced2f6197ee9e05b700a33563868a3f65e7130ef24c89eef2d82d1d51_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e49bd2a360a51eefd4d89eb6de3e6e4fb150376c55729cdc7ae2bbe3c85c043c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e49bd2a360a51eefd4d89eb6de3e6e4fb150376c55729cdc7ae2bbe3c85c043c->enter($__internal_e49bd2a360a51eefd4d89eb6de3e6e4fb150376c55729cdc7ae2bbe3c85c043c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_41da21c05262fe07f3a98f7dc17189ed6cceeb96c625fa396aa4c12570af309f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41da21c05262fe07f3a98f7dc17189ed6cceeb96c625fa396aa4c12570af309f->enter($__internal_41da21c05262fe07f3a98f7dc17189ed6cceeb96c625fa396aa4c12570af309f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_41da21c05262fe07f3a98f7dc17189ed6cceeb96c625fa396aa4c12570af309f->leave($__internal_41da21c05262fe07f3a98f7dc17189ed6cceeb96c625fa396aa4c12570af309f_prof);

        
        $__internal_e49bd2a360a51eefd4d89eb6de3e6e4fb150376c55729cdc7ae2bbe3c85c043c->leave($__internal_e49bd2a360a51eefd4d89eb6de3e6e4fb150376c55729cdc7ae2bbe3c85c043c_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_103c36c8d36ba769c86830440abcb30a766b1cbc1480e119a7d5201c98281221 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_103c36c8d36ba769c86830440abcb30a766b1cbc1480e119a7d5201c98281221->enter($__internal_103c36c8d36ba769c86830440abcb30a766b1cbc1480e119a7d5201c98281221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5c2746ed07050189a5f22ecc62853e145ebcc7e2f071209366def6058711565d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c2746ed07050189a5f22ecc62853e145ebcc7e2f071209366def6058711565d->enter($__internal_5c2746ed07050189a5f22ecc62853e145ebcc7e2f071209366def6058711565d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_5c2746ed07050189a5f22ecc62853e145ebcc7e2f071209366def6058711565d->leave($__internal_5c2746ed07050189a5f22ecc62853e145ebcc7e2f071209366def6058711565d_prof);

        
        $__internal_103c36c8d36ba769c86830440abcb30a766b1cbc1480e119a7d5201c98281221->leave($__internal_103c36c8d36ba769c86830440abcb30a766b1cbc1480e119a7d5201c98281221_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_24603496f541f13ee79d9e546508c1c4c2d869e34796e95d00f497f3538bc9d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24603496f541f13ee79d9e546508c1c4c2d869e34796e95d00f497f3538bc9d3->enter($__internal_24603496f541f13ee79d9e546508c1c4c2d869e34796e95d00f497f3538bc9d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7617464ba08a9d1451497b41a60b59ea2a82a2d5f4162d7cb2f5bc58697ec58d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7617464ba08a9d1451497b41a60b59ea2a82a2d5f4162d7cb2f5bc58697ec58d->enter($__internal_7617464ba08a9d1451497b41a60b59ea2a82a2d5f4162d7cb2f5bc58697ec58d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7617464ba08a9d1451497b41a60b59ea2a82a2d5f4162d7cb2f5bc58697ec58d->leave($__internal_7617464ba08a9d1451497b41a60b59ea2a82a2d5f4162d7cb2f5bc58697ec58d_prof);

        
        $__internal_24603496f541f13ee79d9e546508c1c4c2d869e34796e95d00f497f3538bc9d3->leave($__internal_24603496f541f13ee79d9e546508c1c4c2d869e34796e95d00f497f3538bc9d3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/root/Schreibtisch/devops/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
