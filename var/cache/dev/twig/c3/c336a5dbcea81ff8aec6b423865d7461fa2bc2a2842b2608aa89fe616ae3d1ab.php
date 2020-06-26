<?php

/* ReportLayout.html.twig */
class __TwigTemplate_d59f99183572898f247cfe28389244acf32021d40b85d4a4552236ad8858e950 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e6961faaf198cb8b430b39996f8b5fba54f3f84bba228138ca1a285f95e8e9dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6961faaf198cb8b430b39996f8b5fba54f3f84bba228138ca1a285f95e8e9dc->enter($__internal_e6961faaf198cb8b430b39996f8b5fba54f3f84bba228138ca1a285f95e8e9dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ReportLayout.html.twig"));

        $__internal_a7f956dd40cd7f9b8d4d952fe1b45012e661f0e7fb175415039fc2d46ae1e7ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7f956dd40cd7f9b8d4d952fe1b45012e661f0e7fb175415039fc2d46ae1e7ec->enter($__internal_a7f956dd40cd7f9b8d4d952fe1b45012e661f0e7fb175415039fc2d46ae1e7ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ReportLayout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

";
        // line 10
        $this->displayBlock('header', $context, $blocks);
        // line 43
        echo "
</head>
<body>


<div class=\"container\">
    <div class=\"row\">

        <div class=\"col-lg-12\">

            ";
        // line 53
        $this->displayBlock('body', $context, $blocks);
        // line 56
        echo "
        </div>

    </div>

</div>

";
        // line 63
        $this->displayBlock('footer', $context, $blocks);
        // line 70
        echo "</body>
</html>

";
        
        $__internal_e6961faaf198cb8b430b39996f8b5fba54f3f84bba228138ca1a285f95e8e9dc->leave($__internal_e6961faaf198cb8b430b39996f8b5fba54f3f84bba228138ca1a285f95e8e9dc_prof);

        
        $__internal_a7f956dd40cd7f9b8d4d952fe1b45012e661f0e7fb175415039fc2d46ae1e7ec->leave($__internal_a7f956dd40cd7f9b8d4d952fe1b45012e661f0e7fb175415039fc2d46ae1e7ec_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_20a3076f967daf30eabfe3b6f85a6bf42e3b642f2e6fce23281b7bd76af5ed58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20a3076f967daf30eabfe3b6f85a6bf42e3b642f2e6fce23281b7bd76af5ed58->enter($__internal_20a3076f967daf30eabfe3b6f85a6bf42e3b642f2e6fce23281b7bd76af5ed58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_67344c6eabca4df20d3ac53b32fe10be425897f274df34680855d371bb3a069e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67344c6eabca4df20d3ac53b32fe10be425897f274df34680855d371bb3a069e->enter($__internal_67344c6eabca4df20d3ac53b32fe10be425897f274df34680855d371bb3a069e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_67344c6eabca4df20d3ac53b32fe10be425897f274df34680855d371bb3a069e->leave($__internal_67344c6eabca4df20d3ac53b32fe10be425897f274df34680855d371bb3a069e_prof);

        
        $__internal_20a3076f967daf30eabfe3b6f85a6bf42e3b642f2e6fce23281b7bd76af5ed58->leave($__internal_20a3076f967daf30eabfe3b6f85a6bf42e3b642f2e6fce23281b7bd76af5ed58_prof);

    }

    // line 10
    public function block_header($context, array $blocks = array())
    {
        $__internal_64cf9ac462e5497ab0443069026768d726bac27779c17260e4f307b640ef13b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64cf9ac462e5497ab0443069026768d726bac27779c17260e4f307b640ef13b5->enter($__internal_64cf9ac462e5497ab0443069026768d726bac27779c17260e4f307b640ef13b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_6153cd999f3f909e116c3946b6397de0b3d4d0bac193ee2db693e735df9b6154 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6153cd999f3f909e116c3946b6397de0b3d4d0bac193ee2db693e735df9b6154->enter($__internal_6153cd999f3f909e116c3946b6397de0b3d4d0bac193ee2db693e735df9b6154_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 11
        echo "

    <!-- Bootstrap -->
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css")), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/default.css")), "html", null, true);
        echo "\">

    <link href=\"https://fonts.googleapis.com/css?family=Quicksand:700\" rel=\"stylesheet\">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
<style>
    html, body {
        font-family: 'Quicksand', sans-serif;

        color: black;
        height: 100%;
    }

    table { page-break-inside:auto }
    tr    { page-break-inside:avoid; page-break-after:auto }
    thead { display:table-header-group }
    tfoot { display:table-footer-group }

</style>

";
        
        $__internal_6153cd999f3f909e116c3946b6397de0b3d4d0bac193ee2db693e735df9b6154->leave($__internal_6153cd999f3f909e116c3946b6397de0b3d4d0bac193ee2db693e735df9b6154_prof);

        
        $__internal_64cf9ac462e5497ab0443069026768d726bac27779c17260e4f307b640ef13b5->leave($__internal_64cf9ac462e5497ab0443069026768d726bac27779c17260e4f307b640ef13b5_prof);

    }

    // line 53
    public function block_body($context, array $blocks = array())
    {
        $__internal_5c955f2993b4a7d0a9207149e756ec9e9b1fd013f67b0bd5c5fcaf816e11483f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c955f2993b4a7d0a9207149e756ec9e9b1fd013f67b0bd5c5fcaf816e11483f->enter($__internal_5c955f2993b4a7d0a9207149e756ec9e9b1fd013f67b0bd5c5fcaf816e11483f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a39459f193d91a9bd3442524afa9f9af766b948344f6c31cda859558c91da9d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a39459f193d91a9bd3442524afa9f9af766b948344f6c31cda859558c91da9d4->enter($__internal_a39459f193d91a9bd3442524afa9f9af766b948344f6c31cda859558c91da9d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 54
        echo "
            ";
        
        $__internal_a39459f193d91a9bd3442524afa9f9af766b948344f6c31cda859558c91da9d4->leave($__internal_a39459f193d91a9bd3442524afa9f9af766b948344f6c31cda859558c91da9d4_prof);

        
        $__internal_5c955f2993b4a7d0a9207149e756ec9e9b1fd013f67b0bd5c5fcaf816e11483f->leave($__internal_5c955f2993b4a7d0a9207149e756ec9e9b1fd013f67b0bd5c5fcaf816e11483f_prof);

    }

    // line 63
    public function block_footer($context, array $blocks = array())
    {
        $__internal_7d93c4146eb327898eb095cde4e978107ad8d99b1d5525afb71f498f9ba12129 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d93c4146eb327898eb095cde4e978107ad8d99b1d5525afb71f498f9ba12129->enter($__internal_7d93c4146eb327898eb095cde4e978107ad8d99b1d5525afb71f498f9ba12129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_53e73e21a1f6220644407b71dd396a233a3d48a9b96408782a250ac5a171b6f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53e73e21a1f6220644407b71dd396a233a3d48a9b96408782a250ac5a171b6f6->enter($__internal_53e73e21a1f6220644407b71dd396a233a3d48a9b96408782a250ac5a171b6f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 64
        echo "
    <script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-1.9.1.js")), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js")), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/default.js")), "html", null, true);
        echo "\"></script>

";
        
        $__internal_53e73e21a1f6220644407b71dd396a233a3d48a9b96408782a250ac5a171b6f6->leave($__internal_53e73e21a1f6220644407b71dd396a233a3d48a9b96408782a250ac5a171b6f6_prof);

        
        $__internal_7d93c4146eb327898eb095cde4e978107ad8d99b1d5525afb71f498f9ba12129->leave($__internal_7d93c4146eb327898eb095cde4e978107ad8d99b1d5525afb71f498f9ba12129_prof);

    }

    public function getTemplateName()
    {
        return "ReportLayout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  196 => 67,  192 => 66,  188 => 65,  185 => 64,  176 => 63,  165 => 54,  156 => 53,  119 => 16,  114 => 14,  109 => 11,  100 => 10,  83 => 8,  70 => 70,  68 => 63,  59 => 56,  57 => 53,  45 => 43,  43 => 10,  38 => 8,  29 => 1,);
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
<html lang=\"en\">
<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>{% block title %}{% endblock %}</title>

{% block header %}


    <!-- Bootstrap -->
    <link href=\"{{absolute_url(asset('css/bootstrap.min.css')) }}\" rel=\"stylesheet\">

    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{absolute_url(asset('css/default.css')) }}\">

    <link href=\"https://fonts.googleapis.com/css?family=Quicksand:700\" rel=\"stylesheet\">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
<style>
    html, body {
        font-family: 'Quicksand', sans-serif;

        color: black;
        height: 100%;
    }

    table { page-break-inside:auto }
    tr    { page-break-inside:avoid; page-break-after:auto }
    thead { display:table-header-group }
    tfoot { display:table-footer-group }

</style>

{% endblock %}

</head>
<body>


<div class=\"container\">
    <div class=\"row\">

        <div class=\"col-lg-12\">

            {% block body %}

            {% endblock %}

        </div>

    </div>

</div>

{% block footer %}

    <script src=\"{{absolute_url(asset('js/jquery-1.9.1.js')) }}\"></script>
    <script src=\"{{absolute_url(asset('js/bootstrap.min.js')) }}\"></script>
    <script src=\"{{absolute_url(asset('js/default.js')) }}\"></script>

{% endblock %}
</body>
</html>

", "ReportLayout.html.twig", "/root/Schreibtisch/devops/app/Resources/views/ReportLayout.html.twig");
    }
}
