<?php

/* :mainpages:BerichtenView.html.twig */
class __TwigTemplate_ae995f9caa16f73a68e98cde65fa037e8693d1148d79dc06ed24827d8ad775ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("main.html.twig", ":mainpages:BerichtenView.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "main.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4bde3ac18ae7b4497b6e85a896169fead34601ef377d7e6dc60cbb8291e428b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bde3ac18ae7b4497b6e85a896169fead34601ef377d7e6dc60cbb8291e428b9->enter($__internal_4bde3ac18ae7b4497b6e85a896169fead34601ef377d7e6dc60cbb8291e428b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":mainpages:BerichtenView.html.twig"));

        $__internal_38dcf546e385a6205bf75e3be7ea480ab0228258410f14d23d02bcfc44fefefb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38dcf546e385a6205bf75e3be7ea480ab0228258410f14d23d02bcfc44fefefb->enter($__internal_38dcf546e385a6205bf75e3be7ea480ab0228258410f14d23d02bcfc44fefefb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":mainpages:BerichtenView.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4bde3ac18ae7b4497b6e85a896169fead34601ef377d7e6dc60cbb8291e428b9->leave($__internal_4bde3ac18ae7b4497b6e85a896169fead34601ef377d7e6dc60cbb8291e428b9_prof);

        
        $__internal_38dcf546e385a6205bf75e3be7ea480ab0228258410f14d23d02bcfc44fefefb->leave($__internal_38dcf546e385a6205bf75e3be7ea480ab0228258410f14d23d02bcfc44fefefb_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_e151e0db8a13a184000075eba1ea3842c43bb4883c314926ff569682204f1930 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e151e0db8a13a184000075eba1ea3842c43bb4883c314926ff569682204f1930->enter($__internal_e151e0db8a13a184000075eba1ea3842c43bb4883c314926ff569682204f1930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_21c7067f185137ab0fc588ff7da560066930bd80ae9368174b41cd6368371fac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21c7067f185137ab0fc588ff7da560066930bd80ae9368174b41cd6368371fac->enter($__internal_21c7067f185137ab0fc588ff7da560066930bd80ae9368174b41cd6368371fac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Berichten Exportieren";
        
        $__internal_21c7067f185137ab0fc588ff7da560066930bd80ae9368174b41cd6368371fac->leave($__internal_21c7067f185137ab0fc588ff7da560066930bd80ae9368174b41cd6368371fac_prof);

        
        $__internal_e151e0db8a13a184000075eba1ea3842c43bb4883c314926ff569682204f1930->leave($__internal_e151e0db8a13a184000075eba1ea3842c43bb4883c314926ff569682204f1930_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ac75a831ff400a89b54df984b4cedb575cba0f059ba781997f2e39d87387c4e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac75a831ff400a89b54df984b4cedb575cba0f059ba781997f2e39d87387c4e6->enter($__internal_ac75a831ff400a89b54df984b4cedb575cba0f059ba781997f2e39d87387c4e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a6806d590056348cb7e2cc4836231881bffcad6186147b7ea1dfeeefe8d89e13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6806d590056348cb7e2cc4836231881bffcad6186147b7ea1dfeeefe8d89e13->enter($__internal_a6806d590056348cb7e2cc4836231881bffcad6186147b7ea1dfeeefe8d89e13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <div class=\"row\" style=\"margin-bottom: 30px;\">
        <div class=\"col-lg-12\">

            <div class=\"panel panel-default \">
                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\">Berichten Von <span style=\"color: #337ab7;\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\DateFormatExt')->getDeutschDate(($context["fromdate"] ?? $this->getContext($context, "fromdate"))), "html", null, true);
        echo "</span>  Bis <span style=\"color: #337ab7;\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\DateFormatExt')->getDeutschDate(($context["todate"] ?? $this->getContext($context, "todate"))), "html", null, true);
        echo "</span> </h3>
                </div>
                <div class=\"panel-body\">

                    ";
        // line 16
        echo $this->env->getExtension('Sg\DatatablesBundle\Twig\DatatableTwigExtension')->datatablesRender($this->env, ($context["datatable"] ?? $this->getContext($context, "datatable")));
        echo "


                </div>
            </div>

        </div>

    </div>



";
        
        $__internal_a6806d590056348cb7e2cc4836231881bffcad6186147b7ea1dfeeefe8d89e13->leave($__internal_a6806d590056348cb7e2cc4836231881bffcad6186147b7ea1dfeeefe8d89e13_prof);

        
        $__internal_ac75a831ff400a89b54df984b4cedb575cba0f059ba781997f2e39d87387c4e6->leave($__internal_ac75a831ff400a89b54df984b4cedb575cba0f059ba781997f2e39d87387c4e6_prof);

    }

    public function getTemplateName()
    {
        return ":mainpages:BerichtenView.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 16,  76 => 12,  68 => 6,  59 => 5,  41 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'main.html.twig' %}


{% block title %} Berichten Exportieren{% endblock %}
{% block body %}

    <div class=\"row\" style=\"margin-bottom: 30px;\">
        <div class=\"col-lg-12\">

            <div class=\"panel panel-default \">
                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\">Berichten Von <span style=\"color: #337ab7;\">{{ fromdate|deutschDate }}</span>  Bis <span style=\"color: #337ab7;\">{{ todate|deutschDate }}</span> </h3>
                </div>
                <div class=\"panel-body\">

                    {{ sg_datatables_render(datatable) }}


                </div>
            </div>

        </div>

    </div>



{% endblock %}




", ":mainpages:BerichtenView.html.twig", "/root/Schreibtisch/devops/app/Resources/views/mainpages/BerichtenView.html.twig");
    }
}
