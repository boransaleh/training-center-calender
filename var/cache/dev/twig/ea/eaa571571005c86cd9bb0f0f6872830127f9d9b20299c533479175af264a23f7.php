<?php

/* :mainpages:StandOrtView.html.twig */
class __TwigTemplate_850698e0e0057e10dca4399d353d810d900071c26a1f3804242cc9133d0ca759 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("main.html.twig", ":mainpages:StandOrtView.html.twig", 1);
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
        $__internal_e0cd834a05f9215fcef5c7e7b964e8e05b9ac393132cdff3d352fda164a6763c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0cd834a05f9215fcef5c7e7b964e8e05b9ac393132cdff3d352fda164a6763c->enter($__internal_e0cd834a05f9215fcef5c7e7b964e8e05b9ac393132cdff3d352fda164a6763c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":mainpages:StandOrtView.html.twig"));

        $__internal_ae7bb63002a006cfdf31edc7724757c8f3a5b84383f87faf43a78e79f918fe40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae7bb63002a006cfdf31edc7724757c8f3a5b84383f87faf43a78e79f918fe40->enter($__internal_ae7bb63002a006cfdf31edc7724757c8f3a5b84383f87faf43a78e79f918fe40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":mainpages:StandOrtView.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0cd834a05f9215fcef5c7e7b964e8e05b9ac393132cdff3d352fda164a6763c->leave($__internal_e0cd834a05f9215fcef5c7e7b964e8e05b9ac393132cdff3d352fda164a6763c_prof);

        
        $__internal_ae7bb63002a006cfdf31edc7724757c8f3a5b84383f87faf43a78e79f918fe40->leave($__internal_ae7bb63002a006cfdf31edc7724757c8f3a5b84383f87faf43a78e79f918fe40_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_d6071951b033626178ead1cce4df2311849cf54cdbf822d12d62a01470923138 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6071951b033626178ead1cce4df2311849cf54cdbf822d12d62a01470923138->enter($__internal_d6071951b033626178ead1cce4df2311849cf54cdbf822d12d62a01470923138_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1f0abb9684b2b18c7e5ca84b5f5c8f8bd23a922bef5a3fa327f716ae09134f52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f0abb9684b2b18c7e5ca84b5f5c8f8bd23a922bef5a3fa327f716ae09134f52->enter($__internal_1f0abb9684b2b18c7e5ca84b5f5c8f8bd23a922bef5a3fa327f716ae09134f52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Standort Verwaltung";
        
        $__internal_1f0abb9684b2b18c7e5ca84b5f5c8f8bd23a922bef5a3fa327f716ae09134f52->leave($__internal_1f0abb9684b2b18c7e5ca84b5f5c8f8bd23a922bef5a3fa327f716ae09134f52_prof);

        
        $__internal_d6071951b033626178ead1cce4df2311849cf54cdbf822d12d62a01470923138->leave($__internal_d6071951b033626178ead1cce4df2311849cf54cdbf822d12d62a01470923138_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b317586447897a3ee8d283bd593d1f042cf4df8e9a7fcfdf00082f40afd0842d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b317586447897a3ee8d283bd593d1f042cf4df8e9a7fcfdf00082f40afd0842d->enter($__internal_b317586447897a3ee8d283bd593d1f042cf4df8e9a7fcfdf00082f40afd0842d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9f4ba41c8e0514004ffb39f9bc6cdcde98c47e00854804c63e0ed1ddfffcfb7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f4ba41c8e0514004ffb39f9bc6cdcde98c47e00854804c63e0ed1ddfffcfb7d->enter($__internal_9f4ba41c8e0514004ffb39f9bc6cdcde98c47e00854804c63e0ed1ddfffcfb7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                    <h3 class=\"panel-title\">StandOrt </h3>
                </div>
                <div class=\"panel-body \">

                    <div id=\"feedback\"></div>

                    ";
        // line 36
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["standortForm"] ?? $this->getContext($context, "standortForm")), 'form_start', array("attr" => array("id" => "standortForm", "class" => "form-group-md")));
        echo "

                    <div class=\"form-group\">
                        ";
        // line 39
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["standortForm"] ?? $this->getContext($context, "standortForm")), "StandOrt_Name", array()), 'row', array("id" => "standortName"));
        echo "
                    </div>
                    <div class=\"form-group\">
                        <input type=\"submit\" value=\"Hinzufügen\" id=\"hinzufügen\" class=\"btn btn-erstellen pull-right\">
                    </div>

                    ";
        // line 45
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["standortForm"] ?? $this->getContext($context, "standortForm")), 'form_end');
        echo "

                </div>
            </div>

        </div>

    </div>

    <script type=\"text/javascript\">

        \$(document).ready(function () {

            \$(\"#standortForm\").bootstrapValidator({
                submitHandler: function (validator, form, submitButton) {


                    var data = \$('#standortForm').serializeArray();

                    \$.ajax({
                        type: \"POST\",
                        url: \"";
        // line 66
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("save_standort");
        echo "\",
                        data: data,
                        dataType: \"json\",
                        beforeSend: function () {
                            \$('#pleaseWaitDialog').modal('show');
                        },
                        complete: function () {
                            \$('#pleaseWaitDialog').modal('hide');
                        },
                        success: function (response) {
                            var table = \$('#sg-datatables-standort_datatable').DataTable();
                            table.order( [[ 0, 'desc' ]] ).draw();
                            \$('#standortForm').trigger(\"reset\");
                            \$('#feedback').html('');
                        },
                        error: function (response) {
                            \$('#standortForm').trigger(\"reset\");
                            \$('#feedback').html('');
                            \$('#feedback').html('<div class=\"alert alert-danger\" role=\"alert\">Something Wrong<!!</div>');
                        }
                    });


                },
                fields: {

                    StandOrt_Name: {

                        validators: {

                            notEmpty: {
                                message: 'Bitte einen gültigen Wert eingeben'



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
                    <h3 class=\"panel-title\"><span style=\"color: #337ab7;\">Standort Tabelle</span></h3>
                </div>
                <div class=\"panel-body \">

                    ";
        // line 126
        echo $this->env->getExtension('Sg\DatatablesBundle\Twig\DatatableTwigExtension')->datatablesRender($this->env, ($context["datatable"] ?? $this->getContext($context, "datatable")));
        echo "



                </div>
            </div>

        </div>

    </div>



";
        
        $__internal_9f4ba41c8e0514004ffb39f9bc6cdcde98c47e00854804c63e0ed1ddfffcfb7d->leave($__internal_9f4ba41c8e0514004ffb39f9bc6cdcde98c47e00854804c63e0ed1ddfffcfb7d_prof);

        
        $__internal_b317586447897a3ee8d283bd593d1f042cf4df8e9a7fcfdf00082f40afd0842d->leave($__internal_b317586447897a3ee8d283bd593d1f042cf4df8e9a7fcfdf00082f40afd0842d_prof);

    }

    public function getTemplateName()
    {
        return ":mainpages:StandOrtView.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 126,  139 => 66,  115 => 45,  106 => 39,  100 => 36,  68 => 6,  59 => 5,  41 => 4,  11 => 1,);
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


{% block title %} Standort Verwaltung{% endblock %}
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
                    <h3 class=\"panel-title\">StandOrt </h3>
                </div>
                <div class=\"panel-body \">

                    <div id=\"feedback\"></div>

                    {{ form_start(standortForm, {'attr':{'id': 'standortForm','class':'form-group-md'}}) }}

                    <div class=\"form-group\">
                        {{ form_row(standortForm.StandOrt_Name,{'id': 'standortName'}) }}
                    </div>
                    <div class=\"form-group\">
                        <input type=\"submit\" value=\"Hinzufügen\" id=\"hinzufügen\" class=\"btn btn-erstellen pull-right\">
                    </div>

                    {{ form_end(standortForm) }}

                </div>
            </div>

        </div>

    </div>

    <script type=\"text/javascript\">

        \$(document).ready(function () {

            \$(\"#standortForm\").bootstrapValidator({
                submitHandler: function (validator, form, submitButton) {


                    var data = \$('#standortForm').serializeArray();

                    \$.ajax({
                        type: \"POST\",
                        url: \"{{ path('save_standort') }}\",
                        data: data,
                        dataType: \"json\",
                        beforeSend: function () {
                            \$('#pleaseWaitDialog').modal('show');
                        },
                        complete: function () {
                            \$('#pleaseWaitDialog').modal('hide');
                        },
                        success: function (response) {
                            var table = \$('#sg-datatables-standort_datatable').DataTable();
                            table.order( [[ 0, 'desc' ]] ).draw();
                            \$('#standortForm').trigger(\"reset\");
                            \$('#feedback').html('');
                        },
                        error: function (response) {
                            \$('#standortForm').trigger(\"reset\");
                            \$('#feedback').html('');
                            \$('#feedback').html('<div class=\"alert alert-danger\" role=\"alert\">Something Wrong<!!</div>');
                        }
                    });


                },
                fields: {

                    StandOrt_Name: {

                        validators: {

                            notEmpty: {
                                message: 'Bitte einen gültigen Wert eingeben'



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
                    <h3 class=\"panel-title\"><span style=\"color: #337ab7;\">Standort Tabelle</span></h3>
                </div>
                <div class=\"panel-body \">

                    {{ sg_datatables_render(datatable) }}



                </div>
            </div>

        </div>

    </div>



{% endblock %}




", ":mainpages:StandOrtView.html.twig", "/root/Schreibtisch/devops/app/Resources/views/mainpages/StandOrtView.html.twig");
    }
}
