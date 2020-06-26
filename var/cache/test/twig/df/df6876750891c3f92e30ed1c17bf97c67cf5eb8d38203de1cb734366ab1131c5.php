<?php

/* loginLayout.html.twig */
class __TwigTemplate_bd75ab969e83e5ec5a4f171fd21bc76c3645bc932b06d1e874da9a643f07f9e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eda9cdb25c3f7e0948c6f8c346666e91b31a2dbfdfb14f3faf45ecb5d3d091ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eda9cdb25c3f7e0948c6f8c346666e91b31a2dbfdfb14f3faf45ecb5d3d091ed->enter($__internal_eda9cdb25c3f7e0948c6f8c346666e91b31a2dbfdfb14f3faf45ecb5d3d091ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "loginLayout.html.twig"));

        $__internal_fee30a3c198a8e8012cef7b8c7edae5bcdcfa9f37b80abb392694c767cf750e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fee30a3c198a8e8012cef7b8c7edae5bcdcfa9f37b80abb392694c767cf750e4->enter($__internal_fee30a3c198a8e8012cef7b8c7edae5bcdcfa9f37b80abb392694c767cf750e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "loginLayout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\"/>
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "
</head>
<body>

<div class=\"container\">


    ";
        // line 25
        $this->displayBlock('body', $context, $blocks);
        // line 28
        echo "

    <div class=\"row navbar navbar-default navbar-fixed-bottom\">
        <footer style=\"width: 100%;bottom: 0px;background-color: #fff;padding: 10px;font-size: 12px;color: #676a6c;\" class=\"clearfix\">
            <div class=\"pull-left\" style=\"padding-right:10px; padding-left:10px;\"><b>Kölner Wirtschaftsfachschule Copyright</b> &copy; 2017</div>
            <div class=\"pull-right\" style=\"padding-right:10px; padding-left:10px;\">Stunden Plan System</div>
        </footer>
    </div>
</div>
<br>




";
        // line 42
        $this->displayBlock('javascripts', $context, $blocks);
        // line 66
        echo "</body>
</html>
";
        
        $__internal_eda9cdb25c3f7e0948c6f8c346666e91b31a2dbfdfb14f3faf45ecb5d3d091ed->leave($__internal_eda9cdb25c3f7e0948c6f8c346666e91b31a2dbfdfb14f3faf45ecb5d3d091ed_prof);

        
        $__internal_fee30a3c198a8e8012cef7b8c7edae5bcdcfa9f37b80abb392694c767cf750e4->leave($__internal_fee30a3c198a8e8012cef7b8c7edae5bcdcfa9f37b80abb392694c767cf750e4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_09c7201d164a4a58dda26e84f15a08a906711b94e48d866a1c2d78fae3e428ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09c7201d164a4a58dda26e84f15a08a906711b94e48d866a1c2d78fae3e428ca->enter($__internal_09c7201d164a4a58dda26e84f15a08a906711b94e48d866a1c2d78fae3e428ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_acfa434b2c0855823d7bab9e079456184f042f46058323b56fca7efb3d4d5dc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acfa434b2c0855823d7bab9e079456184f042f46058323b56fca7efb3d4d5dc7->enter($__internal_acfa434b2c0855823d7bab9e079456184f042f46058323b56fca7efb3d4d5dc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Stunden Plan System!";
        
        $__internal_acfa434b2c0855823d7bab9e079456184f042f46058323b56fca7efb3d4d5dc7->leave($__internal_acfa434b2c0855823d7bab9e079456184f042f46058323b56fca7efb3d4d5dc7_prof);

        
        $__internal_09c7201d164a4a58dda26e84f15a08a906711b94e48d866a1c2d78fae3e428ca->leave($__internal_09c7201d164a4a58dda26e84f15a08a906711b94e48d866a1c2d78fae3e428ca_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d3b9c9ab47d246a7090e01fc23a4b2d8838fb7cbd65782d4ed24b80434016d0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3b9c9ab47d246a7090e01fc23a4b2d8838fb7cbd65782d4ed24b80434016d0d->enter($__internal_d3b9c9ab47d246a7090e01fc23a4b2d8838fb7cbd65782d4ed24b80434016d0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_409d8a6bc9b9f422efdda825e8dbcb5275c2b18fa66851c0e861aec02dc188f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_409d8a6bc9b9f422efdda825e8dbcb5275c2b18fa66851c0e861aec02dc188f3->enter($__internal_409d8a6bc9b9f422efdda825e8dbcb5275c2b18fa66851c0e861aec02dc188f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        <script type=\"text/javascript\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-1.9.1.js"), "html", null, true);
        echo "\"></script>
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js\"></script>
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\"/>
        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrapValidator.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/default.css"), "html", null, true);
        echo "\"/>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
        <link href=\"https://fonts.googleapis.com/css?family=Quicksand:700\" rel=\"stylesheet\">

    ";
        
        $__internal_409d8a6bc9b9f422efdda825e8dbcb5275c2b18fa66851c0e861aec02dc188f3->leave($__internal_409d8a6bc9b9f422efdda825e8dbcb5275c2b18fa66851c0e861aec02dc188f3_prof);

        
        $__internal_d3b9c9ab47d246a7090e01fc23a4b2d8838fb7cbd65782d4ed24b80434016d0d->leave($__internal_d3b9c9ab47d246a7090e01fc23a4b2d8838fb7cbd65782d4ed24b80434016d0d_prof);

    }

    // line 25
    public function block_body($context, array $blocks = array())
    {
        $__internal_a57e0464e7d482101f602b62813f589a810bbf3e3501a40b9917bd4cea0c59d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a57e0464e7d482101f602b62813f589a810bbf3e3501a40b9917bd4cea0c59d3->enter($__internal_a57e0464e7d482101f602b62813f589a810bbf3e3501a40b9917bd4cea0c59d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_576582d9808d89d6ab6240e7b28c06dc8c61abec2c1be69cac8f087c51f473ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_576582d9808d89d6ab6240e7b28c06dc8c61abec2c1be69cac8f087c51f473ad->enter($__internal_576582d9808d89d6ab6240e7b28c06dc8c61abec2c1be69cac8f087c51f473ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 26
        echo "
    ";
        
        $__internal_576582d9808d89d6ab6240e7b28c06dc8c61abec2c1be69cac8f087c51f473ad->leave($__internal_576582d9808d89d6ab6240e7b28c06dc8c61abec2c1be69cac8f087c51f473ad_prof);

        
        $__internal_a57e0464e7d482101f602b62813f589a810bbf3e3501a40b9917bd4cea0c59d3->leave($__internal_a57e0464e7d482101f602b62813f589a810bbf3e3501a40b9917bd4cea0c59d3_prof);

    }

    // line 42
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_96249b8dc1233e245aeaf506899e791f3482ccc89042476b43c00699efac1848 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96249b8dc1233e245aeaf506899e791f3482ccc89042476b43c00699efac1848->enter($__internal_96249b8dc1233e245aeaf506899e791f3482ccc89042476b43c00699efac1848_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6fef6f78caed522efd12dcd5165595ed24441503fd9e75927ddf09d00083aeac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fef6f78caed522efd12dcd5165595ed24441503fd9e75927ddf09d00083aeac->enter($__internal_6fef6f78caed522efd12dcd5165595ed24441503fd9e75927ddf09d00083aeac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 43
        echo "

    <script type=\"text/javascript\" src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-1.9.1.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-dialog.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrapValidator.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/default.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">

        \$(document).ready(function () {
            \$(document).ajaxStart(function () {
                \$('#pleaseWaitDialog').modal('show');
            }).ajaxStop(function () {
                \$('#pleaseWaitDialog').modal('hide');

            });
        });

    </script>



";
        
        $__internal_6fef6f78caed522efd12dcd5165595ed24441503fd9e75927ddf09d00083aeac->leave($__internal_6fef6f78caed522efd12dcd5165595ed24441503fd9e75927ddf09d00083aeac_prof);

        
        $__internal_96249b8dc1233e245aeaf506899e791f3482ccc89042476b43c00699efac1848->leave($__internal_96249b8dc1233e245aeaf506899e791f3482ccc89042476b43c00699efac1848_prof);

    }

    public function getTemplateName()
    {
        return "loginLayout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  193 => 49,  189 => 48,  185 => 47,  181 => 46,  177 => 45,  173 => 43,  164 => 42,  153 => 26,  144 => 25,  130 => 14,  126 => 13,  122 => 12,  118 => 11,  113 => 9,  109 => 7,  100 => 6,  82 => 5,  70 => 66,  68 => 42,  52 => 28,  50 => 25,  41 => 18,  39 => 6,  35 => 5,  29 => 1,);
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
    <meta charset=\"UTF-8\"/>
    <title>{% block title %}Stunden Plan System!{% endblock %}</title>
    {% block stylesheets %}
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        <script type=\"text/javascript\" src=\"{{ asset('js/jquery-1.9.1.js') }}\"></script>
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js\"></script>
        <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.min.css') }}\"/>
        <link href=\"{{ asset('css/bootstrapValidator.css') }}\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/default.css') }}\"/>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\"/>
        <link href=\"https://fonts.googleapis.com/css?family=Quicksand:700\" rel=\"stylesheet\">

    {% endblock %}

</head>
<body>

<div class=\"container\">


    {% block body %}

    {% endblock %}


    <div class=\"row navbar navbar-default navbar-fixed-bottom\">
        <footer style=\"width: 100%;bottom: 0px;background-color: #fff;padding: 10px;font-size: 12px;color: #676a6c;\" class=\"clearfix\">
            <div class=\"pull-left\" style=\"padding-right:10px; padding-left:10px;\"><b>Kölner Wirtschaftsfachschule Copyright</b> &copy; 2017</div>
            <div class=\"pull-right\" style=\"padding-right:10px; padding-left:10px;\">Stunden Plan System</div>
        </footer>
    </div>
</div>
<br>




{% block javascripts %}


    <script type=\"text/javascript\" src=\"{{ asset('js/jquery-1.9.1.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('js/bootstrap.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('js/bootstrap-dialog.min.js') }}\"></script>
    <script src=\"{{ asset('js/bootstrapValidator.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('js/default.js') }}\"></script>
    <script type=\"text/javascript\">

        \$(document).ready(function () {
            \$(document).ajaxStart(function () {
                \$('#pleaseWaitDialog').modal('show');
            }).ajaxStop(function () {
                \$('#pleaseWaitDialog').modal('hide');

            });
        });

    </script>



{% endblock %}
</body>
</html>
", "loginLayout.html.twig", "/root/Schreibtisch/devops/app/Resources/views/loginLayout.html.twig");
    }
}
