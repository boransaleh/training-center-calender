<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_d2bc45bfa0f8e8a4335246a369c54eb9f9217387ad253ccc0006e18df547e26b extends Twig_Template
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
        $__internal_51282a383a2a3f56ffca95dfa71d4b9ba38b089358121cecf116bcb3219ac98f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51282a383a2a3f56ffca95dfa71d4b9ba38b089358121cecf116bcb3219ac98f->enter($__internal_51282a383a2a3f56ffca95dfa71d4b9ba38b089358121cecf116bcb3219ac98f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_6324ee368b118b8b54fda15eb0b2f34f1ee3b25a845a61f4078151499e48570a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6324ee368b118b8b54fda15eb0b2f34f1ee3b25a845a61f4078151499e48570a->enter($__internal_6324ee368b118b8b54fda15eb0b2f34f1ee3b25a845a61f4078151499e48570a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_51282a383a2a3f56ffca95dfa71d4b9ba38b089358121cecf116bcb3219ac98f->leave($__internal_51282a383a2a3f56ffca95dfa71d4b9ba38b089358121cecf116bcb3219ac98f_prof);

        
        $__internal_6324ee368b118b8b54fda15eb0b2f34f1ee3b25a845a61f4078151499e48570a->leave($__internal_6324ee368b118b8b54fda15eb0b2f34f1ee3b25a845a61f4078151499e48570a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "/root/Schreibtisch/devops/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
