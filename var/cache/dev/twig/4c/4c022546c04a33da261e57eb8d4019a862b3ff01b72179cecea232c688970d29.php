<?php

/* :mainpages:GroupManagementView.html.twig */
class __TwigTemplate_38c23e1260d510d1506b24c84ad898c6e6d8a370112ca62465753d2b5cffe92b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("main.html.twig", ":mainpages:GroupManagementView.html.twig", 1);
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
        $__internal_1dd8590704d9e540f9fa25ea5ba1b07564976f082af6e8c529840dbe35fd9a8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1dd8590704d9e540f9fa25ea5ba1b07564976f082af6e8c529840dbe35fd9a8c->enter($__internal_1dd8590704d9e540f9fa25ea5ba1b07564976f082af6e8c529840dbe35fd9a8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":mainpages:GroupManagementView.html.twig"));

        $__internal_e210c4fcd594b1b7b5efb8644f2ec021b99781a104a661e8f47bd7dd0c2380ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e210c4fcd594b1b7b5efb8644f2ec021b99781a104a661e8f47bd7dd0c2380ff->enter($__internal_e210c4fcd594b1b7b5efb8644f2ec021b99781a104a661e8f47bd7dd0c2380ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":mainpages:GroupManagementView.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1dd8590704d9e540f9fa25ea5ba1b07564976f082af6e8c529840dbe35fd9a8c->leave($__internal_1dd8590704d9e540f9fa25ea5ba1b07564976f082af6e8c529840dbe35fd9a8c_prof);

        
        $__internal_e210c4fcd594b1b7b5efb8644f2ec021b99781a104a661e8f47bd7dd0c2380ff->leave($__internal_e210c4fcd594b1b7b5efb8644f2ec021b99781a104a661e8f47bd7dd0c2380ff_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_d9e0fc7fbdcc411448f2cac96b54ffbf81e8d7c856ae57b44d8487b7b51d8e4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9e0fc7fbdcc411448f2cac96b54ffbf81e8d7c856ae57b44d8487b7b51d8e4e->enter($__internal_d9e0fc7fbdcc411448f2cac96b54ffbf81e8d7c856ae57b44d8487b7b51d8e4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f0fccc9c88eed8af5ad8bb2530ff85cbe9217834e5290f133b773df139521537 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0fccc9c88eed8af5ad8bb2530ff85cbe9217834e5290f133b773df139521537->enter($__internal_f0fccc9c88eed8af5ad8bb2530ff85cbe9217834e5290f133b773df139521537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Gruppe Verwaltung";
        
        $__internal_f0fccc9c88eed8af5ad8bb2530ff85cbe9217834e5290f133b773df139521537->leave($__internal_f0fccc9c88eed8af5ad8bb2530ff85cbe9217834e5290f133b773df139521537_prof);

        
        $__internal_d9e0fc7fbdcc411448f2cac96b54ffbf81e8d7c856ae57b44d8487b7b51d8e4e->leave($__internal_d9e0fc7fbdcc411448f2cac96b54ffbf81e8d7c856ae57b44d8487b7b51d8e4e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e38ac48a63f5b3a3419270f7e885204fa6247bb035f9e0b7112eeddaad1a875e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e38ac48a63f5b3a3419270f7e885204fa6247bb035f9e0b7112eeddaad1a875e->enter($__internal_e38ac48a63f5b3a3419270f7e885204fa6247bb035f9e0b7112eeddaad1a875e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1a072da49d881e93f058453889a068c56bbbd1502cd136488f883ba7780bf43b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a072da49d881e93f058453889a068c56bbbd1502cd136488f883ba7780bf43b->enter($__internal_1a072da49d881e93f058453889a068c56bbbd1502cd136488f883ba7780bf43b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "


    <div class=\"row\" >
        <div class=\"col-lg-12\">

            <div class=\"modal\" id=\"pleaseWaitDialog\" data-backdrop=\"static\" data-keyboard=\"false\">
                <div class=\"modal-dialog\" role=\"document\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h5 class=\"modal-title\">Processing...</h5>
                        </div>
                        <div class=\"modal-body\">

                            <div class=\"progress\">
                                <div class=\"progress-bar progress-bar-striped progress-bar-animated active\" role=\"progressbar\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 100%\"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"panel panel-default \">
                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\">Gruppe</h3>
                </div>
                <div class=\"panel-body \">

                    <div id=\"feedback\"></div>

                    ";
        // line 36
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["GroupForm"] ?? $this->getContext($context, "GroupForm")), 'form_start', array("attr" => array("id" => "groupform", "class" => "form-group-md")));
        echo "

                    <div class=\"form-group\">
                        ";
        // line 39
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["GroupForm"] ?? $this->getContext($context, "GroupForm")), "Group_Name", array()), 'row', array("id" => "Group_Name"));
        echo "
                    </div>
                    <div class=\"form-group\">
                        <div class=\"input-group mb-2 mr-sm-2 mb-sm-0\">
                            <div class=\"input-group-addon\"><span class=\"glyphicon glyphicon-calendar\"></span></div>
                            ";
        // line 44
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["GroupForm"] ?? $this->getContext($context, "GroupForm")), "Eintritt_Date", array()), 'row', array("id" => "Eintritt_Date"));
        echo "
                        </div>
                    </div>


                    <div class=\"form-group\">
                        <div class=\"input-group mb-2 mr-sm-2 mb-sm-0\">
                            <div class=\"input-group-addon\"><span class=\"glyphicon glyphicon-calendar\"></span></div>
                            ";
        // line 52
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["GroupForm"] ?? $this->getContext($context, "GroupForm")), "Austritt_Date", array()), 'row', array("id" => "Austritt_Date"));
        echo "
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <input type=\"submit\" value=\"Erstellen\" id=\"add_sgroup\"  class=\"btn btn-erstellen pull-right\">
                    </div>

                    ";
        // line 60
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["GroupForm"] ?? $this->getContext($context, "GroupForm")), 'form_end');
        echo "

                </div>
            </div>

        </div>

    </div>


    <script type=\"text/javascript\">
        \$(document).ready(function () {
            \$('.js-datepicker-aus').datepicker({language: 'de', format: 'dd.mm.yyyy',autoclose:true});
            \$('.js-datepicker-ein').datepicker({language: 'de', format: 'dd.mm.yyyy',autoclose:true});

        });

        \$(document).ready(function () {

            \$(\"#groupform\").bootstrapValidator({

                fields: {

                    'Group_Name':{

                        validators:{

                            notEmpty:{

                                message:'Bitte einen gültigen Wert eingeben'
                            }
                        }
                    },

                    'Eintritt_Date': {

                        validators:{

                            notEmpty:{

                                message:'Bitte einen gültigen Wert eingeben'
                            }
                        }
                    },

                    'Austritt_Date':{

                        validators:{

                            notEmpty:{

                                message:'Bitte einen gültigen Wert eingeben'
                            }
                        }

                    }


                }

            });


        });





    </script>


    <div class=\"row\" style=\"margin-bottom: 30px;\">
        <div class=\"col-lg-12\">

            <div class=\"panel panel-default \">
                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\"><span style=\"color: #337ab7;\">Gruppe Tabelle</span></h3>
                </div>
                <div class=\"panel-body \">

                    ";
        // line 141
        echo $this->env->getExtension('Sg\DatatablesBundle\Twig\DatatableTwigExtension')->datatablesRender($this->env, ($context["datatable"] ?? $this->getContext($context, "datatable")));
        echo "



                </div>
            </div>

        </div>

    </div>



";
        
        $__internal_1a072da49d881e93f058453889a068c56bbbd1502cd136488f883ba7780bf43b->leave($__internal_1a072da49d881e93f058453889a068c56bbbd1502cd136488f883ba7780bf43b_prof);

        
        $__internal_e38ac48a63f5b3a3419270f7e885204fa6247bb035f9e0b7112eeddaad1a875e->leave($__internal_e38ac48a63f5b3a3419270f7e885204fa6247bb035f9e0b7112eeddaad1a875e_prof);

    }

    public function getTemplateName()
    {
        return ":mainpages:GroupManagementView.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 141,  136 => 60,  125 => 52,  114 => 44,  106 => 39,  100 => 36,  68 => 6,  59 => 5,  41 => 4,  11 => 1,);
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


{% block title %} Gruppe Verwaltung{% endblock %}
{% block body %}



    <div class=\"row\" >
        <div class=\"col-lg-12\">

            <div class=\"modal\" id=\"pleaseWaitDialog\" data-backdrop=\"static\" data-keyboard=\"false\">
                <div class=\"modal-dialog\" role=\"document\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h5 class=\"modal-title\">Processing...</h5>
                        </div>
                        <div class=\"modal-body\">

                            <div class=\"progress\">
                                <div class=\"progress-bar progress-bar-striped progress-bar-animated active\" role=\"progressbar\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 100%\"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"panel panel-default \">
                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\">Gruppe</h3>
                </div>
                <div class=\"panel-body \">

                    <div id=\"feedback\"></div>

                    {{ form_start(GroupForm,{'attr':{'id': 'groupform','class':'form-group-md'}}) }}

                    <div class=\"form-group\">
                        {{ form_row(GroupForm.Group_Name,{'id': 'Group_Name'}) }}
                    </div>
                    <div class=\"form-group\">
                        <div class=\"input-group mb-2 mr-sm-2 mb-sm-0\">
                            <div class=\"input-group-addon\"><span class=\"glyphicon glyphicon-calendar\"></span></div>
                            {{ form_row(GroupForm.Eintritt_Date,{'id': 'Eintritt_Date'}) }}
                        </div>
                    </div>


                    <div class=\"form-group\">
                        <div class=\"input-group mb-2 mr-sm-2 mb-sm-0\">
                            <div class=\"input-group-addon\"><span class=\"glyphicon glyphicon-calendar\"></span></div>
                            {{ form_row(GroupForm.Austritt_Date,{'id': 'Austritt_Date'}) }}
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <input type=\"submit\" value=\"Erstellen\" id=\"add_sgroup\"  class=\"btn btn-erstellen pull-right\">
                    </div>

                    {{ form_end(GroupForm) }}

                </div>
            </div>

        </div>

    </div>


    <script type=\"text/javascript\">
        \$(document).ready(function () {
            \$('.js-datepicker-aus').datepicker({language: 'de', format: 'dd.mm.yyyy',autoclose:true});
            \$('.js-datepicker-ein').datepicker({language: 'de', format: 'dd.mm.yyyy',autoclose:true});

        });

        \$(document).ready(function () {

            \$(\"#groupform\").bootstrapValidator({

                fields: {

                    'Group_Name':{

                        validators:{

                            notEmpty:{

                                message:'Bitte einen gültigen Wert eingeben'
                            }
                        }
                    },

                    'Eintritt_Date': {

                        validators:{

                            notEmpty:{

                                message:'Bitte einen gültigen Wert eingeben'
                            }
                        }
                    },

                    'Austritt_Date':{

                        validators:{

                            notEmpty:{

                                message:'Bitte einen gültigen Wert eingeben'
                            }
                        }

                    }


                }

            });


        });





    </script>


    <div class=\"row\" style=\"margin-bottom: 30px;\">
        <div class=\"col-lg-12\">

            <div class=\"panel panel-default \">
                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\"><span style=\"color: #337ab7;\">Gruppe Tabelle</span></h3>
                </div>
                <div class=\"panel-body \">

                    {{ sg_datatables_render(datatable) }}



                </div>
            </div>

        </div>

    </div>



{% endblock %}




", ":mainpages:GroupManagementView.html.twig", "/root/Schreibtisch/devops/app/Resources/views/mainpages/GroupManagementView.html.twig");
    }
}
