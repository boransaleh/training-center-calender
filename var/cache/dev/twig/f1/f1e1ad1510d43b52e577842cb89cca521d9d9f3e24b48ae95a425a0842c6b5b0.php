<?php

/* @WebProfiler/Collector/exception.css.twig */
class __TwigTemplate_b6e3672f265bfa20ffa3c00f67f825f6073445226c3178156f32392b5b31187c extends Twig_Template
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
        $__internal_8f3ae0c9d6cb4fd86457c2c6172c0efd49b93ccceb979fda07eee8401afb877c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f3ae0c9d6cb4fd86457c2c6172c0efd49b93ccceb979fda07eee8401afb877c->enter($__internal_8f3ae0c9d6cb4fd86457c2c6172c0efd49b93ccceb979fda07eee8401afb877c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        $__internal_b742e7878e0e8eabcfd40abb0c1240f6c7c1f0d962339efe834e4a554f2515ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b742e7878e0e8eabcfd40abb0c1240f6c7c1f0d962339efe834e4a554f2515ed->enter($__internal_b742e7878e0e8eabcfd40abb0c1240f6c7c1f0d962339efe834e4a554f2515ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
";
        
        $__internal_8f3ae0c9d6cb4fd86457c2c6172c0efd49b93ccceb979fda07eee8401afb877c->leave($__internal_8f3ae0c9d6cb4fd86457c2c6172c0efd49b93ccceb979fda07eee8401afb877c_prof);

        
        $__internal_b742e7878e0e8eabcfd40abb0c1240f6c7c1f0d962339efe834e4a554f2515ed->leave($__internal_b742e7878e0e8eabcfd40abb0c1240f6c7c1f0d962339efe834e4a554f2515ed_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
", "@WebProfiler/Collector/exception.css.twig", "/root/Schreibtisch/devops/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}
