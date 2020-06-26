<?php

/* security/login.html.twig */
class __TwigTemplate_ece4ad38a42ef12f8b4178655c4516c0ef4d5337511674c8526c76467d17cffb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("loginLayout.html.twig", "security/login.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "loginLayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_86f8003de7057080186578c9007125ce993c1f1d88d5087b9370808c7464d073 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86f8003de7057080186578c9007125ce993c1f1d88d5087b9370808c7464d073->enter($__internal_86f8003de7057080186578c9007125ce993c1f1d88d5087b9370808c7464d073_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_ac79df8a41eb1fc106424a86c969be04f84f985487627f1b44bfaf95eb1898ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac79df8a41eb1fc106424a86c969be04f84f985487627f1b44bfaf95eb1898ae->enter($__internal_ac79df8a41eb1fc106424a86c969be04f84f985487627f1b44bfaf95eb1898ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_86f8003de7057080186578c9007125ce993c1f1d88d5087b9370808c7464d073->leave($__internal_86f8003de7057080186578c9007125ce993c1f1d88d5087b9370808c7464d073_prof);

        
        $__internal_ac79df8a41eb1fc106424a86c969be04f84f985487627f1b44bfaf95eb1898ae->leave($__internal_ac79df8a41eb1fc106424a86c969be04f84f985487627f1b44bfaf95eb1898ae_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a137cca672b085feba6dc049bafd68a87c369472b2f2f4199e781df4b8c96aa5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a137cca672b085feba6dc049bafd68a87c369472b2f2f4199e781df4b8c96aa5->enter($__internal_a137cca672b085feba6dc049bafd68a87c369472b2f2f4199e781df4b8c96aa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_84672e8ac60d6892ecd7d0c1e6fc7d97dbe6b6c2b6a43fac97e798dbadebba5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84672e8ac60d6892ecd7d0c1e6fc7d97dbe6b6c2b6a43fac97e798dbadebba5a->enter($__internal_84672e8ac60d6892ecd7d0c1e6fc7d97dbe6b6c2b6a43fac97e798dbadebba5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"row\" style=\"padding-top: 5%; background-color: #4f5d73;-moz-border-radius: 9px 9px 9px 9px;border-radius: 9px 9px 9px 9px;\">

        <div class=\"col-lg-3\"></div>

        <div class=\"col-lg-6\">

            <div class=\"jumbotron\">


                <div align=\"center\" style=\"padding-bottom: 2%\">
                    <h3 style=\"color: #4f5d73\">Stunden Plan System</h3></br>
                    <img src='";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/login.png"), "html", null, true);
        echo "' class=\"img-rounded\">

                </div>

                ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("id" => "login_form", "class" => "form-group-md")));
        echo "


                <div class=\"form-group \">
                    ";
        // line 24
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 25
            echo "                        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageKey", array())), "html", null, true);
            echo "</div>
                    ";
        }
        // line 27
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_username", array()), 'row');
        echo "
                </div>

                <div class=\"form-group\">
                    ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_password", array()), 'row');
        echo "
                </div>

                <div class=\"form-group\">
                    ";
        // line 35
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "StandOrt", array()), 'row');
        echo "

                </div>

                <div class=\"form-group \">
                    <div class=\"form-check\">
                        <label class=\"form-check-label\">
                            <input class=\"form-check-input\" type=\"checkbox\" name=\"_remember_me\"> Remember me
                        </label>
                    </div>
                </div>

                <div class=\"form-group\">
                    <button type=\"submit\" class=\"btn btn-cancel waves-effect \" formnovalidate>Anmelden</button>
                </div>

                ";
        // line 51
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

                <script type=\"text/javascript\">
                    \$(document).ready(function() {
                        \$('#login_form').bootstrapValidator({
                            message: 'This value is not valid',
                            feedbackIcons: {

                                invalid: 'glyphicon glyphicon-remove',

                            },

                            fields: {

                                'login_form[_username]':{

                                    validators:{

                                        notEmpty:{

                                            message:'Bitte einen gültigen Wert eingeben'
                                        },
                                        emailAddress:{

                                            message:'Bitte einen gültigen Wert eingeben'
                                        }
                                    }
                                },

                                'login_form[_password]': {

                                    validators:{

                                        notEmpty:{

                                            message:'Bitte einen gültigen Wert eingeben'
                                        },
                                        stringLength :{

                                            min:6,
                                            message:'Bitte einen gültigen Wert eingeben'
                                        }
                                    }
                                }


                            }




                        });
                    });





                </script>


                ";
        // line 112
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["forgetPassword"] ?? $this->getContext($context, "forgetPassword")), 'form_start', array("attr" => array("id" => "forgetpass", "class" => "form-group-md", "hidden" => "true")));
        echo "

                <div class=\"form-group \">
                    ";
        // line 115
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["forgetPassword"] ?? $this->getContext($context, "forgetPassword")), "_username", array()), 'row');
        echo "
                </div>

                <div class=\"form-group \">

                    <button type=\"submit\" class=\"btn btn-danger\">Senden</button>
                    </br></br>
                    <div  id=\"feedback\"></div>

                </div>
                ";
        // line 125
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["forgetPassword"] ?? $this->getContext($context, "forgetPassword")), 'form_end');
        echo "



                <script type=\"text/javascript\">

                    \$(document).ready(function(){

                        \$(\"#forgetpass\").bootstrapValidator({

                            message:\"this value is not valid\",
                            feedbackIcons: {

                                invalid: 'glyphicon glyphicon-remove',

                            },
                            submitHandler: function(validator, form, submitButton) {



                                var data= \$('#forgetpass').serializeArray();



                                \$.ajax({
                                    type: \"POST\",
                                    url: \"";
        // line 151
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("forget_password");
        echo "\",
                                    data:data ,
                                    dataType: \"json\",
                                    success: function(response) {
                                        \$('#forgetpass').trigger(\"reset\");
                                        \$('#feedback').html('');
                                        if(response[\"status\"]=='1'){

                                            \$('#feedback').html('<div class=\"alert alert-success\" role=\"alert\">'+response[\"message\"]+'</div>');
                                        }
                                        else {

                                            \$('#feedback').html('<div class=\"alert alert-danger\" role=\"alert\">'+response[\"message\"]+'</div>');
                                        }


                                    },
                                    error: function(response){
                                        \$('#feedback').html('');
                                        \$('#feedback').html('<div class=\"alert alert-danger\" role=\"alert\">'+response[\"failure\"]+'</div>');
                                    }
                                });





                            },
                            fields:{

                                '_username':{

                                    validators:{

                                        notEmpty:{

                                            message:'Bitte einen gültigen Wert eingeben'
                                        },
                                        emailAddress:{

                                            message:'Bitte einen gültigen Wert eingeben'
                                        }
                                    }
                                }
                            }

                        });


                    });


                </script>

                <a class=\"text-muted\" href=\"#\" id=\"loginclick\">Anmelden // </a><a id=\"passwordclick\"  class=\"text-muted\" href=\"#\" >Konto vergessen? </a>
                </br>

            </div>

        </div>
        <div class=\"col-lg-3\"></div>
    </div>


";
        
        $__internal_84672e8ac60d6892ecd7d0c1e6fc7d97dbe6b6c2b6a43fac97e798dbadebba5a->leave($__internal_84672e8ac60d6892ecd7d0c1e6fc7d97dbe6b6c2b6a43fac97e798dbadebba5a_prof);

        
        $__internal_a137cca672b085feba6dc049bafd68a87c369472b2f2f4199e781df4b8c96aa5->leave($__internal_a137cca672b085feba6dc049bafd68a87c369472b2f2f4199e781df4b8c96aa5_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 151,  202 => 125,  189 => 115,  183 => 112,  119 => 51,  100 => 35,  93 => 31,  85 => 27,  79 => 25,  77 => 24,  70 => 20,  63 => 16,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'loginLayout.html.twig' %}

{% block body %}

    <div class=\"row\" style=\"padding-top: 5%; background-color: #4f5d73;-moz-border-radius: 9px 9px 9px 9px;border-radius: 9px 9px 9px 9px;\">

        <div class=\"col-lg-3\"></div>

        <div class=\"col-lg-6\">

            <div class=\"jumbotron\">


                <div align=\"center\" style=\"padding-bottom: 2%\">
                    <h3 style=\"color: #4f5d73\">Stunden Plan System</h3></br>
                    <img src='{{ asset('img/login.png') }}' class=\"img-rounded\">

                </div>

                {{ form_start(form,{'attr':{'id': 'login_form','class':'form-group-md'}}) }}


                <div class=\"form-group \">
                    {% if error %}
                        <div class=\"alert alert-danger\">{{ error.messageKey|trans }}</div>
                    {% endif %}
                    {{ form_row(form._username) }}
                </div>

                <div class=\"form-group\">
                    {{ form_row(form._password) }}
                </div>

                <div class=\"form-group\">
                    {{ form_row(form.StandOrt) }}

                </div>

                <div class=\"form-group \">
                    <div class=\"form-check\">
                        <label class=\"form-check-label\">
                            <input class=\"form-check-input\" type=\"checkbox\" name=\"_remember_me\"> Remember me
                        </label>
                    </div>
                </div>

                <div class=\"form-group\">
                    <button type=\"submit\" class=\"btn btn-cancel waves-effect \" formnovalidate>Anmelden</button>
                </div>

                {{ form_end(form) }}

                <script type=\"text/javascript\">
                    \$(document).ready(function() {
                        \$('#login_form').bootstrapValidator({
                            message: 'This value is not valid',
                            feedbackIcons: {

                                invalid: 'glyphicon glyphicon-remove',

                            },

                            fields: {

                                'login_form[_username]':{

                                    validators:{

                                        notEmpty:{

                                            message:'Bitte einen gültigen Wert eingeben'
                                        },
                                        emailAddress:{

                                            message:'Bitte einen gültigen Wert eingeben'
                                        }
                                    }
                                },

                                'login_form[_password]': {

                                    validators:{

                                        notEmpty:{

                                            message:'Bitte einen gültigen Wert eingeben'
                                        },
                                        stringLength :{

                                            min:6,
                                            message:'Bitte einen gültigen Wert eingeben'
                                        }
                                    }
                                }


                            }




                        });
                    });





                </script>


                {{ form_start(forgetPassword,{'attr':{'id': 'forgetpass','class':'form-group-md','hidden':'true'}}) }}

                <div class=\"form-group \">
                    {{ form_row(forgetPassword._username) }}
                </div>

                <div class=\"form-group \">

                    <button type=\"submit\" class=\"btn btn-danger\">Senden</button>
                    </br></br>
                    <div  id=\"feedback\"></div>

                </div>
                {{ form_end(forgetPassword) }}



                <script type=\"text/javascript\">

                    \$(document).ready(function(){

                        \$(\"#forgetpass\").bootstrapValidator({

                            message:\"this value is not valid\",
                            feedbackIcons: {

                                invalid: 'glyphicon glyphicon-remove',

                            },
                            submitHandler: function(validator, form, submitButton) {



                                var data= \$('#forgetpass').serializeArray();



                                \$.ajax({
                                    type: \"POST\",
                                    url: \"{{ path('forget_password') }}\",
                                    data:data ,
                                    dataType: \"json\",
                                    success: function(response) {
                                        \$('#forgetpass').trigger(\"reset\");
                                        \$('#feedback').html('');
                                        if(response[\"status\"]=='1'){

                                            \$('#feedback').html('<div class=\"alert alert-success\" role=\"alert\">'+response[\"message\"]+'</div>');
                                        }
                                        else {

                                            \$('#feedback').html('<div class=\"alert alert-danger\" role=\"alert\">'+response[\"message\"]+'</div>');
                                        }


                                    },
                                    error: function(response){
                                        \$('#feedback').html('');
                                        \$('#feedback').html('<div class=\"alert alert-danger\" role=\"alert\">'+response[\"failure\"]+'</div>');
                                    }
                                });





                            },
                            fields:{

                                '_username':{

                                    validators:{

                                        notEmpty:{

                                            message:'Bitte einen gültigen Wert eingeben'
                                        },
                                        emailAddress:{

                                            message:'Bitte einen gültigen Wert eingeben'
                                        }
                                    }
                                }
                            }

                        });


                    });


                </script>

                <a class=\"text-muted\" href=\"#\" id=\"loginclick\">Anmelden // </a><a id=\"passwordclick\"  class=\"text-muted\" href=\"#\" >Konto vergessen? </a>
                </br>

            </div>

        </div>
        <div class=\"col-lg-3\"></div>
    </div>


{% endblock %}", "security/login.html.twig", "/root/Schreibtisch/devops/app/Resources/views/security/login.html.twig");
    }
}
