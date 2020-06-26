<?php

/* :callback:draw_callback.js.twig */
class __TwigTemplate_ffc4270e7b0821ea45ef83e1fab1dbb03c00225ea060be1b423cbf65cd957047 extends Twig_Template
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
        $__internal_866c061b6801a3e47bd1a3b40df9e4ac723b7758f7e3d0791343cd5b1fb7d69f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_866c061b6801a3e47bd1a3b40df9e4ac723b7758f7e3d0791343cd5b1fb7d69f->enter($__internal_866c061b6801a3e47bd1a3b40df9e4ac723b7758f7e3d0791343cd5b1fb7d69f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":callback:draw_callback.js.twig"));

        $__internal_2874f84452d499d743dabe01016eda1093b102fa6b93d3258d958c82de630231 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2874f84452d499d743dabe01016eda1093b102fa6b93d3258d958c82de630231->enter($__internal_2874f84452d499d743dabe01016eda1093b102fa6b93d3258d958c82de630231_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":callback:draw_callback.js.twig"));

        // line 1
        echo "function drawCallback(setting){

    var api = this.api();
    \$('#sum').val(api.column(6).data().sum());

}";
        
        $__internal_866c061b6801a3e47bd1a3b40df9e4ac723b7758f7e3d0791343cd5b1fb7d69f->leave($__internal_866c061b6801a3e47bd1a3b40df9e4ac723b7758f7e3d0791343cd5b1fb7d69f_prof);

        
        $__internal_2874f84452d499d743dabe01016eda1093b102fa6b93d3258d958c82de630231->leave($__internal_2874f84452d499d743dabe01016eda1093b102fa6b93d3258d958c82de630231_prof);

    }

    public function getTemplateName()
    {
        return ":callback:draw_callback.js.twig";
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
        return new Twig_Source("function drawCallback(setting){

    var api = this.api();
    \$('#sum').val(api.column(6).data().sum());

}", ":callback:draw_callback.js.twig", "/root/Schreibtisch/devops/app/Resources/views/callback/draw_callback.js.twig");
    }
}
