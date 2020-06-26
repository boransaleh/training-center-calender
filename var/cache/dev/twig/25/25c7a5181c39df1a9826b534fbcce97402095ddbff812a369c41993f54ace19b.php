<?php

/* mainpages/dozentenView.html.twig */
class __TwigTemplate_70d9497d34fbbc58403305ff5c22c99e1471a7368bb90d080056cd9345bd5932 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("main.html.twig", "mainpages/dozentenView.html.twig", 1);
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
        $__internal_36365f3c32f480110cb0a78fb3c974714b1d8d71f30074247473741562826879 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36365f3c32f480110cb0a78fb3c974714b1d8d71f30074247473741562826879->enter($__internal_36365f3c32f480110cb0a78fb3c974714b1d8d71f30074247473741562826879_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "mainpages/dozentenView.html.twig"));

        $__internal_77ff0f76ba347f3357558cc6584e0737a735079e6df7c1aadaa7a3d7da7efdb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77ff0f76ba347f3357558cc6584e0737a735079e6df7c1aadaa7a3d7da7efdb8->enter($__internal_77ff0f76ba347f3357558cc6584e0737a735079e6df7c1aadaa7a3d7da7efdb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "mainpages/dozentenView.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_36365f3c32f480110cb0a78fb3c974714b1d8d71f30074247473741562826879->leave($__internal_36365f3c32f480110cb0a78fb3c974714b1d8d71f30074247473741562826879_prof);

        
        $__internal_77ff0f76ba347f3357558cc6584e0737a735079e6df7c1aadaa7a3d7da7efdb8->leave($__internal_77ff0f76ba347f3357558cc6584e0737a735079e6df7c1aadaa7a3d7da7efdb8_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_fba7d9768b4f82acbca775d2d24ed6641e798ae534e10f17e929f7bd74aaf72f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fba7d9768b4f82acbca775d2d24ed6641e798ae534e10f17e929f7bd74aaf72f->enter($__internal_fba7d9768b4f82acbca775d2d24ed6641e798ae534e10f17e929f7bd74aaf72f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7bf80c70fd5d6949ea57cfc7b8574098d9d5623c2005bdd440d7ebf967ccbba2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bf80c70fd5d6949ea57cfc7b8574098d9d5623c2005bdd440d7ebf967ccbba2->enter($__internal_7bf80c70fd5d6949ea57cfc7b8574098d9d5623c2005bdd440d7ebf967ccbba2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Dozenten";
        
        $__internal_7bf80c70fd5d6949ea57cfc7b8574098d9d5623c2005bdd440d7ebf967ccbba2->leave($__internal_7bf80c70fd5d6949ea57cfc7b8574098d9d5623c2005bdd440d7ebf967ccbba2_prof);

        
        $__internal_fba7d9768b4f82acbca775d2d24ed6641e798ae534e10f17e929f7bd74aaf72f->leave($__internal_fba7d9768b4f82acbca775d2d24ed6641e798ae534e10f17e929f7bd74aaf72f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_89fcaba213e5fe88533acb8d7909541b2dfb849317ba4e9fa1d774841e1bf68f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89fcaba213e5fe88533acb8d7909541b2dfb849317ba4e9fa1d774841e1bf68f->enter($__internal_89fcaba213e5fe88533acb8d7909541b2dfb849317ba4e9fa1d774841e1bf68f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_82e9906fdff9a09ff6647ddd0db73ab875cdc8fcf178b954d5eb1a491d026755 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82e9906fdff9a09ff6647ddd0db73ab875cdc8fcf178b954d5eb1a491d026755->enter($__internal_82e9906fdff9a09ff6647ddd0db73ab875cdc8fcf178b954d5eb1a491d026755_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"row\" >
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
                    <h3 class=\"panel-title\">Dozenten</h3>
                </div>
                <div class=\"panel-body \">

                    <div id=\"feedback\"></div>

                    ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["dozentForm"] ?? $this->getContext($context, "dozentForm")), 'form_start', array("attr" => array("id" => "dozentform", "class" => "form-group-md")));
        echo "

                    <div class=\"form-group\">
                        ";
        // line 36
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["dozentForm"] ?? $this->getContext($context, "dozentForm")), "Dozent_Name", array()), 'row', array("id" => "DozentName"));
        echo "
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 39
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["dozentForm"] ?? $this->getContext($context, "dozentForm")), "Dozent_Email", array()), 'row', array("id" => "DozentEmail"));
        echo "
                    </div>
                    <div class=\"form-group\">
                        <input type=\"submit\" value=\"Hinzufügen\" class=\"btn btn-erstellen pull-right\">
                    </div>

                    ";
        // line 45
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["dozentForm"] ?? $this->getContext($context, "dozentForm")), 'form_end');
        echo "

                </div>
            </div>

        </div>

    </div>

    <script type=\"text/javascript\">

        \$(document).ready(function () {

            \$(\"#dozentform\").bootstrapValidator({

                submitHandler: function (validator, form, submitButton) {


                    var data = \$('#dozentform').serializeArray();


                    \$.ajax({
                        type: \"POST\",
                        url: \"";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("save_row_dozent");
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
                            var table = \$('#sg-datatables-dozent_datatable').DataTable();
                            table.order( [[ 0, 'desc' ]] ).draw();
                            \$('#dozentform').trigger(\"reset\");
                        },
                        error: function (response) {
                            \$('#dozentform').trigger(\"reset\");
                            \$('#feedback').html('');
                            \$('#feedback').html('<div class=\"alert alert-danger\" role=\"alert\">Something Wrong<!!</div>');
                        }
                    });


                },
                fields: {

                    'Dozent_Name': {

                        validators: {

                            notEmpty: {

                                message: 'Bitte einen gültigen Wert eingeben'
                            }
                        }
                    },
                    'Dozent_Email': {

                        validators: {

                            notEmpty: {

                                message: 'Bitte einen gültigen Wert eingeben'
                            },
                            emailAddress:{

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
                    <h3 class=\"panel-title\"><span style=\"color: #337ab7;\">Dozenten Tabelle</span></h3>
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
        
        $__internal_82e9906fdff9a09ff6647ddd0db73ab875cdc8fcf178b954d5eb1a491d026755->leave($__internal_82e9906fdff9a09ff6647ddd0db73ab875cdc8fcf178b954d5eb1a491d026755_prof);

        
        $__internal_89fcaba213e5fe88533acb8d7909541b2dfb849317ba4e9fa1d774841e1bf68f->leave($__internal_89fcaba213e5fe88533acb8d7909541b2dfb849317ba4e9fa1d774841e1bf68f_prof);

    }

    public function getTemplateName()
    {
        return "mainpages/dozentenView.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 141,  144 => 68,  118 => 45,  109 => 39,  103 => 36,  97 => 33,  68 => 6,  59 => 5,  41 => 4,  11 => 1,);
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


{% block title %} Dozenten{% endblock %}
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
                    <h3 class=\"panel-title\">Dozenten</h3>
                </div>
                <div class=\"panel-body \">

                    <div id=\"feedback\"></div>

                    {{ form_start(dozentForm,{'attr':{'id': 'dozentform','class':'form-group-md'}}) }}

                    <div class=\"form-group\">
                        {{ form_row(dozentForm.Dozent_Name,{'id': 'DozentName'}) }}
                    </div>
                    <div class=\"form-group\">
                        {{ form_row(dozentForm.Dozent_Email,{'id': 'DozentEmail'}) }}
                    </div>
                    <div class=\"form-group\">
                        <input type=\"submit\" value=\"Hinzufügen\" class=\"btn btn-erstellen pull-right\">
                    </div>

                    {{ form_end(dozentForm) }}

                </div>
            </div>

        </div>

    </div>

    <script type=\"text/javascript\">

        \$(document).ready(function () {

            \$(\"#dozentform\").bootstrapValidator({

                submitHandler: function (validator, form, submitButton) {


                    var data = \$('#dozentform').serializeArray();


                    \$.ajax({
                        type: \"POST\",
                        url: \"{{ path('save_row_dozent') }}\",
                        data: data,
                        dataType: \"json\",
                        beforeSend: function () {
                            \$('#pleaseWaitDialog').modal('show');
                        },
                        complete: function () {
                            \$('#pleaseWaitDialog').modal('hide');
                        },
                        success: function (response) {
                            var table = \$('#sg-datatables-dozent_datatable').DataTable();
                            table.order( [[ 0, 'desc' ]] ).draw();
                            \$('#dozentform').trigger(\"reset\");
                        },
                        error: function (response) {
                            \$('#dozentform').trigger(\"reset\");
                            \$('#feedback').html('');
                            \$('#feedback').html('<div class=\"alert alert-danger\" role=\"alert\">Something Wrong<!!</div>');
                        }
                    });


                },
                fields: {

                    'Dozent_Name': {

                        validators: {

                            notEmpty: {

                                message: 'Bitte einen gültigen Wert eingeben'
                            }
                        }
                    },
                    'Dozent_Email': {

                        validators: {

                            notEmpty: {

                                message: 'Bitte einen gültigen Wert eingeben'
                            },
                            emailAddress:{

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
                    <h3 class=\"panel-title\"><span style=\"color: #337ab7;\">Dozenten Tabelle</span></h3>
                </div>
                <div class=\"panel-body \">

                    {{ sg_datatables_render(datatable) }}



                </div>
            </div>

        </div>

    </div>



{% endblock %}




", "mainpages/dozentenView.html.twig", "/root/Schreibtisch/devops/app/Resources/views/mainpages/dozentenView.html.twig");
    }
}
