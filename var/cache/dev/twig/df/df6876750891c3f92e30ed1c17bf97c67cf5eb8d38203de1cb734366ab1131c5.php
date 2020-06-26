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
        $__internal_cb17903674d4a930edfa42d57f6062734b4415f28716795e6630866ce55856db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb17903674d4a930edfa42d57f6062734b4415f28716795e6630866ce55856db->enter($__internal_cb17903674d4a930edfa42d57f6062734b4415f28716795e6630866ce55856db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "loginLayout.html.twig"));

        $__internal_62c4e7fd05aa671346bd85e5673a6579db0ff283d7cc9cc3e5c9c7ce0b9024ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62c4e7fd05aa671346bd85e5673a6579db0ff283d7cc9cc3e5c9c7ce0b9024ca->enter($__internal_62c4e7fd05aa671346bd85e5673a6579db0ff283d7cc9cc3e5c9c7ce0b9024ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "loginLayout.html.twig"));

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
            <div class=\"pull-left\" style=\"padding-right:10px; padding-left:10px;\"><b>baran saleh Copyright</b> &copy; 2017</div>
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
        
        $__internal_cb17903674d4a930edfa42d57f6062734b4415f28716795e6630866ce55856db->leave($__internal_cb17903674d4a930edfa42d57f6062734b4415f28716795e6630866ce55856db_prof);

        
        $__internal_62c4e7fd05aa671346bd85e5673a6579db0ff283d7cc9cc3e5c9c7ce0b9024ca->leave($__internal_62c4e7fd05aa671346bd85e5673a6579db0ff283d7cc9cc3e5c9c7ce0b9024ca_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c14584c7bfd926471b1b235b79ce33b85ab8a12657b8937c4928e72b04c80a0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c14584c7bfd926471b1b235b79ce33b85ab8a12657b8937c4928e72b04c80a0b->enter($__internal_c14584c7bfd926471b1b235b79ce33b85ab8a12657b8937c4928e72b04c80a0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7899b7b01b3f424da86b5e3a52ea29c46c35d2ce2c407054573377cb0985b482 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7899b7b01b3f424da86b5e3a52ea29c46c35d2ce2c407054573377cb0985b482->enter($__internal_7899b7b01b3f424da86b5e3a52ea29c46c35d2ce2c407054573377cb0985b482_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Stunden Plan System!";
        
        $__internal_7899b7b01b3f424da86b5e3a52ea29c46c35d2ce2c407054573377cb0985b482->leave($__internal_7899b7b01b3f424da86b5e3a52ea29c46c35d2ce2c407054573377cb0985b482_prof);

        
        $__internal_c14584c7bfd926471b1b235b79ce33b85ab8a12657b8937c4928e72b04c80a0b->leave($__internal_c14584c7bfd926471b1b235b79ce33b85ab8a12657b8937c4928e72b04c80a0b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8f98b6e80ffaed48aab0f03df5796f4d69edc6a78a21a567380ad6d799e40625 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f98b6e80ffaed48aab0f03df5796f4d69edc6a78a21a567380ad6d799e40625->enter($__internal_8f98b6e80ffaed48aab0f03df5796f4d69edc6a78a21a567380ad6d799e40625_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_98eb73a0092d35d84d0f781b06a495801483e1b3bde76328cdeefe56a6586ec2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98eb73a0092d35d84d0f781b06a495801483e1b3bde76328cdeefe56a6586ec2->enter($__internal_98eb73a0092d35d84d0f781b06a495801483e1b3bde76328cdeefe56a6586ec2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_98eb73a0092d35d84d0f781b06a495801483e1b3bde76328cdeefe56a6586ec2->leave($__internal_98eb73a0092d35d84d0f781b06a495801483e1b3bde76328cdeefe56a6586ec2_prof);

        
        $__internal_8f98b6e80ffaed48aab0f03df5796f4d69edc6a78a21a567380ad6d799e40625->leave($__internal_8f98b6e80ffaed48aab0f03df5796f4d69edc6a78a21a567380ad6d799e40625_prof);

    }

    // line 25
    public function block_body($context, array $blocks = array())
    {
        $__internal_0f4039fd30f4900519576156e50953975ef88fd1d1622a64306c0f535f2a1d3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f4039fd30f4900519576156e50953975ef88fd1d1622a64306c0f535f2a1d3e->enter($__internal_0f4039fd30f4900519576156e50953975ef88fd1d1622a64306c0f535f2a1d3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_63a8481dbf21638d9a0207fd9cbb72f5f5050b7b488a3ba7a8a50187a59ab99d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63a8481dbf21638d9a0207fd9cbb72f5f5050b7b488a3ba7a8a50187a59ab99d->enter($__internal_63a8481dbf21638d9a0207fd9cbb72f5f5050b7b488a3ba7a8a50187a59ab99d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 26
        echo "
    ";
        
        $__internal_63a8481dbf21638d9a0207fd9cbb72f5f5050b7b488a3ba7a8a50187a59ab99d->leave($__internal_63a8481dbf21638d9a0207fd9cbb72f5f5050b7b488a3ba7a8a50187a59ab99d_prof);

        
        $__internal_0f4039fd30f4900519576156e50953975ef88fd1d1622a64306c0f535f2a1d3e->leave($__internal_0f4039fd30f4900519576156e50953975ef88fd1d1622a64306c0f535f2a1d3e_prof);

    }

    // line 42
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_597e27689d8067c37373fa1e20282de8fa8e86d929191653198c8d8b2623852b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_597e27689d8067c37373fa1e20282de8fa8e86d929191653198c8d8b2623852b->enter($__internal_597e27689d8067c37373fa1e20282de8fa8e86d929191653198c8d8b2623852b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_8264865197842c6420acaf008ce3ce2ef5109a799e551a45c7277419bb40ae1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8264865197842c6420acaf008ce3ce2ef5109a799e551a45c7277419bb40ae1a->enter($__internal_8264865197842c6420acaf008ce3ce2ef5109a799e551a45c7277419bb40ae1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_8264865197842c6420acaf008ce3ce2ef5109a799e551a45c7277419bb40ae1a->leave($__internal_8264865197842c6420acaf008ce3ce2ef5109a799e551a45c7277419bb40ae1a_prof);

        
        $__internal_597e27689d8067c37373fa1e20282de8fa8e86d929191653198c8d8b2623852b->leave($__internal_597e27689d8067c37373fa1e20282de8fa8e86d929191653198c8d8b2623852b_prof);

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
            <div class=\"pull-left\" style=\"padding-right:10px; padding-left:10px;\"><b>baran saleh Copyright</b> &copy; 2017</div>
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
