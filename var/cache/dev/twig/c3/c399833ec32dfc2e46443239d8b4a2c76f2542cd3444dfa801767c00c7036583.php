<?php

/* Form/Berichten.html.twig */
class __TwigTemplate_129eaebd8b57294f687e0781d497021f2f4c1c10cfc6cb005426e7d89a7b53c9 extends Twig_Template
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
        $__internal_cf6454dc5e9fc533a7f83644264078eeb8f04b068c6e4a2a5e502ce9c41ff95c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf6454dc5e9fc533a7f83644264078eeb8f04b068c6e4a2a5e502ce9c41ff95c->enter($__internal_cf6454dc5e9fc533a7f83644264078eeb8f04b068c6e4a2a5e502ce9c41ff95c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Form/Berichten.html.twig"));

        $__internal_37b32f4e412d0e531f89dfeb340fbb8e7cb9d6d8834755bf8b6e4511b63552ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37b32f4e412d0e531f89dfeb340fbb8e7cb9d6d8834755bf8b6e4511b63552ec->enter($__internal_37b32f4e412d0e531f89dfeb340fbb8e7cb9d6d8834755bf8b6e4511b63552ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Form/Berichten.html.twig"));

        // line 1
        echo " ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["SearchForm"] ?? $this->getContext($context, "SearchForm")), 'form_start', array("attr" => array("id" => "suchenReport"), "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fromto_form"), "method" => "POST"));
        echo "
    <div class=\"form-group\">
        <div class=\"input-group mb-2 mr-sm-2 mb-sm-0\">
            <div class=\"input-group-addon\"><span class=\"glyphicon glyphicon-calendar\"></span></div>
            ";
        // line 5
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["SearchForm"] ?? $this->getContext($context, "SearchForm")), "fromDate", array()), 'row');
        echo "
        </div>
    </div>


    <div class=\"form-group\">
        <div class=\"input-group mb-2 mr-sm-2 mb-sm-0\">
            <div class=\"input-group-addon\"><span class=\"glyphicon glyphicon-calendar\"></span></div>
            ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["SearchForm"] ?? $this->getContext($context, "SearchForm")), "toDate", array()), 'row');
        echo "
        </div>
    </div>

    <div class=\"form-group pull-right\">
        <button type=\"submit\" id=\"suchenB\" class=\"btn btn-erstellen\" > Suchen </button>
        <button type=\"button\" class=\"btn btn-cancel\" data-dismiss=\"modal\">Schließen</button>
    </div>
    ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["SearchForm"] ?? $this->getContext($context, "SearchForm")), 'form_end', array("render_rest" => false));
        echo "


";
        
        $__internal_cf6454dc5e9fc533a7f83644264078eeb8f04b068c6e4a2a5e502ce9c41ff95c->leave($__internal_cf6454dc5e9fc533a7f83644264078eeb8f04b068c6e4a2a5e502ce9c41ff95c_prof);

        
        $__internal_37b32f4e412d0e531f89dfeb340fbb8e7cb9d6d8834755bf8b6e4511b63552ec->leave($__internal_37b32f4e412d0e531f89dfeb340fbb8e7cb9d6d8834755bf8b6e4511b63552ec_prof);

    }

    public function getTemplateName()
    {
        return "Form/Berichten.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 21,  44 => 13,  33 => 5,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source(" {{ form_start(SearchForm,{'attr': {'id': 'suchenReport'},'action': path('fromto_form'), 'method': 'POST'}) }}
    <div class=\"form-group\">
        <div class=\"input-group mb-2 mr-sm-2 mb-sm-0\">
            <div class=\"input-group-addon\"><span class=\"glyphicon glyphicon-calendar\"></span></div>
            {{ form_row(SearchForm.fromDate) }}
        </div>
    </div>


    <div class=\"form-group\">
        <div class=\"input-group mb-2 mr-sm-2 mb-sm-0\">
            <div class=\"input-group-addon\"><span class=\"glyphicon glyphicon-calendar\"></span></div>
            {{ form_row(SearchForm.toDate) }}
        </div>
    </div>

    <div class=\"form-group pull-right\">
        <button type=\"submit\" id=\"suchenB\" class=\"btn btn-erstellen\" > Suchen </button>
        <button type=\"button\" class=\"btn btn-cancel\" data-dismiss=\"modal\">Schließen</button>
    </div>
    {{ form_end(SearchForm, {'render_rest': false}) }}


", "Form/Berichten.html.twig", "/root/Schreibtisch/devops/app/Resources/views/Form/Berichten.html.twig");
    }
}
