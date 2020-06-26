<?php

/* mainpages/Faecher.html.twig */
class __TwigTemplate_ad109370347f2508bbf71cea59deaf741f57135be255704ada7c3d1625baac2e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("main.html.twig", "mainpages/Faecher.html.twig", 1);
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
        $__internal_e8151c21093cb13c213e0274a76a2b331e15b46141201ca650deb0222a127060 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8151c21093cb13c213e0274a76a2b331e15b46141201ca650deb0222a127060->enter($__internal_e8151c21093cb13c213e0274a76a2b331e15b46141201ca650deb0222a127060_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "mainpages/Faecher.html.twig"));

        $__internal_b43a2cb3688c0b699aed1de2855b6fc83c1b027c1cee78e19493bb3f75158c56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b43a2cb3688c0b699aed1de2855b6fc83c1b027c1cee78e19493bb3f75158c56->enter($__internal_b43a2cb3688c0b699aed1de2855b6fc83c1b027c1cee78e19493bb3f75158c56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "mainpages/Faecher.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e8151c21093cb13c213e0274a76a2b331e15b46141201ca650deb0222a127060->leave($__internal_e8151c21093cb13c213e0274a76a2b331e15b46141201ca650deb0222a127060_prof);

        
        $__internal_b43a2cb3688c0b699aed1de2855b6fc83c1b027c1cee78e19493bb3f75158c56->leave($__internal_b43a2cb3688c0b699aed1de2855b6fc83c1b027c1cee78e19493bb3f75158c56_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_3e643b4dabac263140dddde2d9b430650aee00afdb1992d858be0abf4bfe8033 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e643b4dabac263140dddde2d9b430650aee00afdb1992d858be0abf4bfe8033->enter($__internal_3e643b4dabac263140dddde2d9b430650aee00afdb1992d858be0abf4bfe8033_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5c85fca4dc0b6cdda9d2bef5014db330c9769e6865cd8aca94ffee3be31c242c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c85fca4dc0b6cdda9d2bef5014db330c9769e6865cd8aca94ffee3be31c242c->enter($__internal_5c85fca4dc0b6cdda9d2bef5014db330c9769e6865cd8aca94ffee3be31c242c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " GesamtFach";
        
        $__internal_5c85fca4dc0b6cdda9d2bef5014db330c9769e6865cd8aca94ffee3be31c242c->leave($__internal_5c85fca4dc0b6cdda9d2bef5014db330c9769e6865cd8aca94ffee3be31c242c_prof);

        
        $__internal_3e643b4dabac263140dddde2d9b430650aee00afdb1992d858be0abf4bfe8033->leave($__internal_3e643b4dabac263140dddde2d9b430650aee00afdb1992d858be0abf4bfe8033_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_93233bee13a19fa923e071bbdca78c19d2b413b71c7cb21a4f424519f324db8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93233bee13a19fa923e071bbdca78c19d2b413b71c7cb21a4f424519f324db8e->enter($__internal_93233bee13a19fa923e071bbdca78c19d2b413b71c7cb21a4f424519f324db8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_55086109be8d378b9aa72475b38b1717e745484345bce16b1d1e5ea796008d6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55086109be8d378b9aa72475b38b1717e745484345bce16b1d1e5ea796008d6c->enter($__internal_55086109be8d378b9aa72475b38b1717e745484345bce16b1d1e5ea796008d6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                    <h3 class=\"panel-title\">GesamtFächer </h3>
                </div>
                <div class=\"panel-body \">

                    <div id=\"feedback\"></div>

                    ";
        // line 36
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["GesamtFachForm"] ?? $this->getContext($context, "GesamtFachForm")), 'form_start', array("attr" => array("id" => "gesamtfacher", "class" => "form-group-md")));
        echo "

                    <div class=\"form-group\">
                        ";
        // line 39
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["GesamtFachForm"] ?? $this->getContext($context, "GesamtFachForm")), "GesamtFach_Name", array()), 'row', array("id" => "gesamtfachName"));
        echo "
                    </div>
                    <div class=\"form-group\">
                        <input type=\"submit\" value=\"Hinzufügen\" id=\"hinzufügen\" class=\"btn btn-erstellen pull-right\">
                    </div>

                    ";
        // line 45
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["GesamtFachForm"] ?? $this->getContext($context, "GesamtFachForm")), 'form_end');
        echo "

                </div>
            </div>

        </div>

    </div>

    <script type=\"text/javascript\">

        \$(document).ready(function () {

            \$(\"#gesamtfacher\").bootstrapValidator({
                feedbackIcons: {
                    invalid: 'glyphicon glyphicon-remove',

                },
                submitHandler: function (validator, form, submitButton) {


                    var data = \$('#gesamtfacher').serializeArray();

                    \$.ajax({
                        type: \"POST\",
                        url: \"";
        // line 70
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("save_row");
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
                            var table = \$('#sg-datatables-gesamtfach_datatable').DataTable();
                            table.order( [[ 0, 'desc' ]] ).draw();
                            \$('#gesamtfacher').trigger(\"reset\");
                            \$('#feedback').html('');
                        },
                        error: function (response) {
                            \$('#gesamtfacher').trigger(\"reset\");
                            \$('#feedback').html('');
                            \$('#feedback').html('<div class=\"alert alert-danger\" role=\"alert\">Something Wrong<!!</div>');
                        }
                    });


                },
                fields: {

                    GesamtFach_Name: {

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
                    <h3 class=\"panel-title\"><span style=\"color: #337ab7;\">Gesamt Fächer Tabelle</span></h3>
                </div>
                <div class=\"panel-body \">

                    ";
        // line 130
        echo $this->env->getExtension('Sg\DatatablesBundle\Twig\DatatableTwigExtension')->datatablesRender($this->env, ($context["datatable"] ?? $this->getContext($context, "datatable")));
        echo "



                </div>
            </div>

        </div>

    </div>



";
        
        $__internal_55086109be8d378b9aa72475b38b1717e745484345bce16b1d1e5ea796008d6c->leave($__internal_55086109be8d378b9aa72475b38b1717e745484345bce16b1d1e5ea796008d6c_prof);

        
        $__internal_93233bee13a19fa923e071bbdca78c19d2b413b71c7cb21a4f424519f324db8e->leave($__internal_93233bee13a19fa923e071bbdca78c19d2b413b71c7cb21a4f424519f324db8e_prof);

    }

    public function getTemplateName()
    {
        return "mainpages/Faecher.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 130,  143 => 70,  115 => 45,  106 => 39,  100 => 36,  68 => 6,  59 => 5,  41 => 4,  11 => 1,);
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


{% block title %} GesamtFach{% endblock %}
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
                    <h3 class=\"panel-title\">GesamtFächer </h3>
                </div>
                <div class=\"panel-body \">

                    <div id=\"feedback\"></div>

                    {{ form_start(GesamtFachForm, {'attr':{'id': 'gesamtfacher','class':'form-group-md'}}) }}

                    <div class=\"form-group\">
                        {{ form_row(GesamtFachForm.GesamtFach_Name,{'id': 'gesamtfachName'}) }}
                    </div>
                    <div class=\"form-group\">
                        <input type=\"submit\" value=\"Hinzufügen\" id=\"hinzufügen\" class=\"btn btn-erstellen pull-right\">
                    </div>

                    {{ form_end(GesamtFachForm) }}

                </div>
            </div>

        </div>

    </div>

    <script type=\"text/javascript\">

        \$(document).ready(function () {

            \$(\"#gesamtfacher\").bootstrapValidator({
                feedbackIcons: {
                    invalid: 'glyphicon glyphicon-remove',

                },
                submitHandler: function (validator, form, submitButton) {


                    var data = \$('#gesamtfacher').serializeArray();

                    \$.ajax({
                        type: \"POST\",
                        url: \"{{ path('save_row') }}\",
                        data: data,
                        dataType: \"json\",
                        beforeSend: function () {
                            \$('#pleaseWaitDialog').modal('show');
                        },
                        complete: function () {
                            \$('#pleaseWaitDialog').modal('hide');
                        },
                        success: function (response) {
                            var table = \$('#sg-datatables-gesamtfach_datatable').DataTable();
                            table.order( [[ 0, 'desc' ]] ).draw();
                            \$('#gesamtfacher').trigger(\"reset\");
                            \$('#feedback').html('');
                        },
                        error: function (response) {
                            \$('#gesamtfacher').trigger(\"reset\");
                            \$('#feedback').html('');
                            \$('#feedback').html('<div class=\"alert alert-danger\" role=\"alert\">Something Wrong<!!</div>');
                        }
                    });


                },
                fields: {

                    GesamtFach_Name: {

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
                    <h3 class=\"panel-title\"><span style=\"color: #337ab7;\">Gesamt Fächer Tabelle</span></h3>
                </div>
                <div class=\"panel-body \">

                    {{ sg_datatables_render(datatable) }}



                </div>
            </div>

        </div>

    </div>



{% endblock %}




", "mainpages/Faecher.html.twig", "/root/Schreibtisch/devops/app/Resources/views/mainpages/Faecher.html.twig");
    }
}
