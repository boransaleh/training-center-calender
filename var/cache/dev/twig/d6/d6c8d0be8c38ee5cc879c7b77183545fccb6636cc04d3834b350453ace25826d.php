<?php

/* Form/ErstellenGroupCalendarForm.html.twig */
class __TwigTemplate_4f65a64545131440a4ffeed1a58ec551030438e4bc6b31e34a99dca48a80e55b extends Twig_Template
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
        $__internal_36d93fc49614821c6d0ca4f62b55bb5f1be70730c3f67989e43dc48ab26e78f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36d93fc49614821c6d0ca4f62b55bb5f1be70730c3f67989e43dc48ab26e78f8->enter($__internal_36d93fc49614821c6d0ca4f62b55bb5f1be70730c3f67989e43dc48ab26e78f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Form/ErstellenGroupCalendarForm.html.twig"));

        $__internal_e7a6f43a7177fd6ceacc6ecf8b07694f72e8129ec2b76ee2263109ba036b2dcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7a6f43a7177fd6ceacc6ecf8b07694f72e8129ec2b76ee2263109ba036b2dcc->enter($__internal_e7a6f43a7177fd6ceacc6ecf8b07694f72e8129ec2b76ee2263109ba036b2dcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Form/ErstellenGroupCalendarForm.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["SGroupForm"] ?? $this->getContext($context, "SGroupForm")), 'form_start', array("attr" => array("id" => "selectgroup"), "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("stunden-plan"), "method" => "POST"));
        echo "

<div class=\"form-group\">
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["SGroupForm"] ?? $this->getContext($context, "SGroupForm")), "schuleGroup", array()), 'row', array("id" => "groupname"));
        echo "


</div>

<div class=\"form-group pull-right\">
        <input type=\"submit\" id=\"grouperstellen\" value=\"Erstellen\" class=\" btn btn-erstellen\" >
        <button type=\"button\" class=\"btn btn-cancel\" data-dismiss=\"modal\">Schließen</button>
</div>


";
        // line 15
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["SGroupForm"] ?? $this->getContext($context, "SGroupForm")), 'form_end');
        echo "







";
        
        $__internal_36d93fc49614821c6d0ca4f62b55bb5f1be70730c3f67989e43dc48ab26e78f8->leave($__internal_36d93fc49614821c6d0ca4f62b55bb5f1be70730c3f67989e43dc48ab26e78f8_prof);

        
        $__internal_e7a6f43a7177fd6ceacc6ecf8b07694f72e8129ec2b76ee2263109ba036b2dcc->leave($__internal_e7a6f43a7177fd6ceacc6ecf8b07694f72e8129ec2b76ee2263109ba036b2dcc_prof);

    }

    public function getTemplateName()
    {
        return "Form/ErstellenGroupCalendarForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 15,  31 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ form_start(SGroupForm, {'attr': {'id': 'selectgroup'},'action': path('stunden-plan'), 'method': 'POST'}) }}<div class=\"form-group\">    {{ form_row(SGroupForm.schuleGroup,{'id': 'groupname'}) }}</div><div class=\"form-group pull-right\">        <input type=\"submit\" id=\"grouperstellen\" value=\"Erstellen\" class=\" btn btn-erstellen\" >        <button type=\"button\" class=\"btn btn-cancel\" data-dismiss=\"modal\">Schließen</button></div>{{ form_end(SGroupForm) }}", "Form/ErstellenGroupCalendarForm.html.twig", "/root/Schreibtisch/devops/app/Resources/views/Form/ErstellenGroupCalendarForm.html.twig");
    }
}
