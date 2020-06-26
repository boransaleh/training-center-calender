<?php

/* :Form:GroupBerichtenForm.html.twig */
class __TwigTemplate_8c66237ec0c870bd7ed8310446a9caf3fa48b5c2dfd2a9ec2ba83792ce6a4a67 extends Twig_Template
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
        $__internal_6a85d16afdf2f3352bf071f0fd951c80c4940f65012cbfc9a3becd4bc7ec971f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a85d16afdf2f3352bf071f0fd951c80c4940f65012cbfc9a3becd4bc7ec971f->enter($__internal_6a85d16afdf2f3352bf071f0fd951c80c4940f65012cbfc9a3becd4bc7ec971f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Form:GroupBerichtenForm.html.twig"));

        $__internal_337c54ef1e43bf225e23fe659e5115aad3b030e196fdca0f68ccb16faa6b45b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_337c54ef1e43bf225e23fe659e5115aad3b030e196fdca0f68ccb16faa6b45b8->enter($__internal_337c54ef1e43bf225e23fe659e5115aad3b030e196fdca0f68ccb16faa6b45b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Form:GroupBerichtenForm.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["GroupBerichten"] ?? $this->getContext($context, "GroupBerichten")), 'form_start', array("attr" => array("id" => "groupBerichtenForm", "target" => "_blank"), "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("group-report"), "method" => "POST"));
        echo "

<div class=\"form-group\">
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["GroupBerichten"] ?? $this->getContext($context, "GroupBerichten")), "schuleGroup", array()), 'row', array("id" => "groupnameBerichten"));
        echo "


</div>

<div class=\"form-group pull-right\">
    <input type=\"submit\" id=\"GroupReportExport\" value=\"Exportieren\" class=\" btn btn-erstellen\" >
    <button type=\"button\" class=\"btn btn-cancel\" data-dismiss=\"modal\">Schließen</button>
</div>



";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["GroupBerichten"] ?? $this->getContext($context, "GroupBerichten")), 'form_end');
        echo "
";
        
        $__internal_6a85d16afdf2f3352bf071f0fd951c80c4940f65012cbfc9a3becd4bc7ec971f->leave($__internal_6a85d16afdf2f3352bf071f0fd951c80c4940f65012cbfc9a3becd4bc7ec971f_prof);

        
        $__internal_337c54ef1e43bf225e23fe659e5115aad3b030e196fdca0f68ccb16faa6b45b8->leave($__internal_337c54ef1e43bf225e23fe659e5115aad3b030e196fdca0f68ccb16faa6b45b8_prof);

    }

    public function getTemplateName()
    {
        return ":Form:GroupBerichtenForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 16,  31 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ form_start(GroupBerichten, {'attr': {'id': 'groupBerichtenForm','target':'_blank'},'action': path('group-report'), 'method': 'POST'}) }}<div class=\"form-group\">    {{ form_row(GroupBerichten.schuleGroup,{'id': 'groupnameBerichten'}) }}</div><div class=\"form-group pull-right\">    <input type=\"submit\" id=\"GroupReportExport\" value=\"Exportieren\" class=\" btn btn-erstellen\" >    <button type=\"button\" class=\"btn btn-cancel\" data-dismiss=\"modal\">Schließen</button></div>{{ form_end(GroupBerichten) }}", ":Form:GroupBerichtenForm.html.twig", "/root/Schreibtisch/devops/app/Resources/views/Form/GroupBerichtenForm.html.twig");
    }
}
