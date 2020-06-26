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
        $__internal_9a5e3c1b86a4b28a53fac8fa9513d39424788de6e7d6bc78a70dcc09f42fcac0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a5e3c1b86a4b28a53fac8fa9513d39424788de6e7d6bc78a70dcc09f42fcac0->enter($__internal_9a5e3c1b86a4b28a53fac8fa9513d39424788de6e7d6bc78a70dcc09f42fcac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_7e4da964cdae9e8e388229fc69ad48b17145dbae3e569303c9b4a7d2a5537f07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e4da964cdae9e8e388229fc69ad48b17145dbae3e569303c9b4a7d2a5537f07->enter($__internal_7e4da964cdae9e8e388229fc69ad48b17145dbae3e569303c9b4a7d2a5537f07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_9a5e3c1b86a4b28a53fac8fa9513d39424788de6e7d6bc78a70dcc09f42fcac0->leave($__internal_9a5e3c1b86a4b28a53fac8fa9513d39424788de6e7d6bc78a70dcc09f42fcac0_prof);

        
        $__internal_7e4da964cdae9e8e388229fc69ad48b17145dbae3e569303c9b4a7d2a5537f07->leave($__internal_7e4da964cdae9e8e388229fc69ad48b17145dbae3e569303c9b4a7d2a5537f07_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0eb4223aaf842112e4b8ae8ab566a2e0511c117d041c412884522f96b99f06ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0eb4223aaf842112e4b8ae8ab566a2e0511c117d041c412884522f96b99f06ff->enter($__internal_0eb4223aaf842112e4b8ae8ab566a2e0511c117d041c412884522f96b99f06ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_853b416e9d975a93ee041671f62aa54678def3ea1eab02ef4be2990796202869 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_853b416e9d975a93ee041671f62aa54678def3ea1eab02ef4be2990796202869->enter($__internal_853b416e9d975a93ee041671f62aa54678def3ea1eab02ef4be2990796202869_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_853b416e9d975a93ee041671f62aa54678def3ea1eab02ef4be2990796202869->leave($__internal_853b416e9d975a93ee041671f62aa54678def3ea1eab02ef4be2990796202869_prof);

        
        $__internal_0eb4223aaf842112e4b8ae8ab566a2e0511c117d041c412884522f96b99f06ff->leave($__internal_0eb4223aaf842112e4b8ae8ab566a2e0511c117d041c412884522f96b99f06ff_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_6e7fbd3eed2b2b9f9980a7a5e4b868dbad9a4b020a2e47cabf7db09da9818716 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e7fbd3eed2b2b9f9980a7a5e4b868dbad9a4b020a2e47cabf7db09da9818716->enter($__internal_6e7fbd3eed2b2b9f9980a7a5e4b868dbad9a4b020a2e47cabf7db09da9818716_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ffa578bacc8b7400f58f4e31290d6a655bcdd684b815faa4d5b057e89021a0f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffa578bacc8b7400f58f4e31290d6a655bcdd684b815faa4d5b057e89021a0f4->enter($__internal_ffa578bacc8b7400f58f4e31290d6a655bcdd684b815faa4d5b057e89021a0f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_ffa578bacc8b7400f58f4e31290d6a655bcdd684b815faa4d5b057e89021a0f4->leave($__internal_ffa578bacc8b7400f58f4e31290d6a655bcdd684b815faa4d5b057e89021a0f4_prof);

        
        $__internal_6e7fbd3eed2b2b9f9980a7a5e4b868dbad9a4b020a2e47cabf7db09da9818716->leave($__internal_6e7fbd3eed2b2b9f9980a7a5e4b868dbad9a4b020a2e47cabf7db09da9818716_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_bb77345243dab3de35f4fbd9d50ba3b896c74f3ea557775bbac4a34e73f0acc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb77345243dab3de35f4fbd9d50ba3b896c74f3ea557775bbac4a34e73f0acc5->enter($__internal_bb77345243dab3de35f4fbd9d50ba3b896c74f3ea557775bbac4a34e73f0acc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f85879d4185e1d28cad660a433028486f3a1d76561ff5761b602c67381e663cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f85879d4185e1d28cad660a433028486f3a1d76561ff5761b602c67381e663cb->enter($__internal_f85879d4185e1d28cad660a433028486f3a1d76561ff5761b602c67381e663cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f85879d4185e1d28cad660a433028486f3a1d76561ff5761b602c67381e663cb->leave($__internal_f85879d4185e1d28cad660a433028486f3a1d76561ff5761b602c67381e663cb_prof);

        
        $__internal_bb77345243dab3de35f4fbd9d50ba3b896c74f3ea557775bbac4a34e73f0acc5->leave($__internal_bb77345243dab3de35f4fbd9d50ba3b896c74f3ea557775bbac4a34e73f0acc5_prof);

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
