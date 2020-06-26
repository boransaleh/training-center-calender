<?php

/* mainpages/EinzehlFachView.html.twig */
class __TwigTemplate_ef6194667bb4a58ed53e8ad107f1ed1a289afbe77ecde931acaea271a9f1bad3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("main.html.twig", "mainpages/EinzehlFachView.html.twig", 1);
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
        $__internal_7b3d31b12bb3a0eab3d3127fea2b49234e57fc281d8de8cb64659b527c0fd06b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b3d31b12bb3a0eab3d3127fea2b49234e57fc281d8de8cb64659b527c0fd06b->enter($__internal_7b3d31b12bb3a0eab3d3127fea2b49234e57fc281d8de8cb64659b527c0fd06b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "mainpages/EinzehlFachView.html.twig"));

        $__internal_20e1e623bff59d937659a8d789aa4e0cbdf744754550849844acba3ca8d484c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20e1e623bff59d937659a8d789aa4e0cbdf744754550849844acba3ca8d484c2->enter($__internal_20e1e623bff59d937659a8d789aa4e0cbdf744754550849844acba3ca8d484c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "mainpages/EinzehlFachView.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b3d31b12bb3a0eab3d3127fea2b49234e57fc281d8de8cb64659b527c0fd06b->leave($__internal_7b3d31b12bb3a0eab3d3127fea2b49234e57fc281d8de8cb64659b527c0fd06b_prof);

        
        $__internal_20e1e623bff59d937659a8d789aa4e0cbdf744754550849844acba3ca8d484c2->leave($__internal_20e1e623bff59d937659a8d789aa4e0cbdf744754550849844acba3ca8d484c2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1fa76e5d6c9d8d877bd7a642973739193fd4222af7f7b7086851b80be7e31000 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fa76e5d6c9d8d877bd7a642973739193fd4222af7f7b7086851b80be7e31000->enter($__internal_1fa76e5d6c9d8d877bd7a642973739193fd4222af7f7b7086851b80be7e31000_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a967f87dcc6af8c6a8ee3cf6dc752098b3704ccf9cb0c04352b1240c7f7ae44b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a967f87dcc6af8c6a8ee3cf6dc752098b3704ccf9cb0c04352b1240c7f7ae44b->enter($__internal_a967f87dcc6af8c6a8ee3cf6dc752098b3704ccf9cb0c04352b1240c7f7ae44b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Einzehlfach";
        
        $__internal_a967f87dcc6af8c6a8ee3cf6dc752098b3704ccf9cb0c04352b1240c7f7ae44b->leave($__internal_a967f87dcc6af8c6a8ee3cf6dc752098b3704ccf9cb0c04352b1240c7f7ae44b_prof);

        
        $__internal_1fa76e5d6c9d8d877bd7a642973739193fd4222af7f7b7086851b80be7e31000->leave($__internal_1fa76e5d6c9d8d877bd7a642973739193fd4222af7f7b7086851b80be7e31000_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_86952432b0b31c4f4ec230eafe1b0dfd28e61912ee060c45784a4fe5186d14f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86952432b0b31c4f4ec230eafe1b0dfd28e61912ee060c45784a4fe5186d14f1->enter($__internal_86952432b0b31c4f4ec230eafe1b0dfd28e61912ee060c45784a4fe5186d14f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f4d08972e66f508c1de1aa520bd596f497429bc3e59db939d34b29041d891d02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4d08972e66f508c1de1aa520bd596f497429bc3e59db939d34b29041d891d02->enter($__internal_f4d08972e66f508c1de1aa520bd596f497429bc3e59db939d34b29041d891d02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
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
                    <h3 class=\"panel-title\">Einzehl Fächer </h3>
                </div>
                <div class=\"panel-body \">

                    <div id=\"feedback\"></div>

                    ";
        // line 37
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["EinzehlFachForm"] ?? $this->getContext($context, "EinzehlFachForm")), 'form_start', array("attr" => array("id" => "einzehlfacher", "class" => "form-group-md")));
        echo "

                    <div class=\"form-group\">
                        ";
        // line 40
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["EinzehlFachForm"] ?? $this->getContext($context, "EinzehlFachForm")), "GesamtFach", array()), 'row', array("id" => "gesamtfachName"));
        echo "
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 43
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["EinzehlFachForm"] ?? $this->getContext($context, "EinzehlFachForm")), "EinzelFach_Name", array()), 'row', array("id" => "einzehlfachName"));
        echo "
                    </div>
                    <div class=\"form-group\">
                        <input type=\"submit\" value=\"Hinzufügen\" class=\"btn btn-erstellen pull-right\">
                    </div>

                    ";
        // line 49
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["EinzehlFachForm"] ?? $this->getContext($context, "EinzehlFachForm")), 'form_end');
        echo "

                </div>
            </div>

        </div>

    </div>

    <script type=\"text/javascript\">

        \$(document).ready(function () {

            \$(\"#einzehlfacher\").bootstrapValidator({

                submitHandler: function (validator, form, submitButton) {


                    var data = \$('#einzehlfacher').serializeArray();


                            \$.ajax({
                                type: \"POST\",
                                url: \"";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("save_row_einzehl");
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
                                    var table = \$('#sg-datatables-einzelfach_datatable').DataTable();
                                    table.order( [[ 0, 'desc' ]] ).draw();
                                    \$('#einzehlfacher').trigger(\"reset\");

                                },
                                error: function (response) {
                                    \$('#einzehlfacher').trigger(\"reset\");
                                    \$('#feedback').html('');
                                    \$('#feedback').html('<div class=\"alert alert-danger\" role=\"alert\">Something Wrong<!!</div>');
                                }
                            });


                },
                fields: {

                    'GesamtFach': {

                        validators: {

                            notEmpty: {

                                message: 'Bitte einen gültigen Wert eingeben'
                            }
                        }
                    },
                    'EinzelFach_Name': {

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
                    <h3 class=\"panel-title\"><span style=\"color: #337ab7;\">Einzehl Fächer Tabelle</span></h3>
                </div>
                <div class=\"panel-body \">

                    ";
        // line 140
        echo $this->env->getExtension('Sg\DatatablesBundle\Twig\DatatableTwigExtension')->datatablesRender($this->env, ($context["datatable"] ?? $this->getContext($context, "datatable")));
        echo "



                </div>
            </div>

        </div>

    </div>



";
        
        $__internal_f4d08972e66f508c1de1aa520bd596f497429bc3e59db939d34b29041d891d02->leave($__internal_f4d08972e66f508c1de1aa520bd596f497429bc3e59db939d34b29041d891d02_prof);

        
        $__internal_86952432b0b31c4f4ec230eafe1b0dfd28e61912ee060c45784a4fe5186d14f1->leave($__internal_86952432b0b31c4f4ec230eafe1b0dfd28e61912ee060c45784a4fe5186d14f1_prof);

    }

    public function getTemplateName()
    {
        return "mainpages/EinzehlFachView.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 140,  147 => 72,  121 => 49,  112 => 43,  106 => 40,  100 => 37,  68 => 7,  59 => 6,  41 => 5,  11 => 1,);
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



{% block title %} Einzehlfach{% endblock %}
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
                    <h3 class=\"panel-title\">Einzehl Fächer </h3>
                </div>
                <div class=\"panel-body \">

                    <div id=\"feedback\"></div>

                    {{ form_start(EinzehlFachForm,{'attr':{'id': 'einzehlfacher','class':'form-group-md'}}) }}

                    <div class=\"form-group\">
                        {{ form_row(EinzehlFachForm.GesamtFach,{'id': 'gesamtfachName'}) }}
                    </div>
                    <div class=\"form-group\">
                        {{ form_row(EinzehlFachForm.EinzelFach_Name,{'id': 'einzehlfachName'}) }}
                    </div>
                    <div class=\"form-group\">
                        <input type=\"submit\" value=\"Hinzufügen\" class=\"btn btn-erstellen pull-right\">
                    </div>

                    {{ form_end(EinzehlFachForm) }}

                </div>
            </div>

        </div>

    </div>

    <script type=\"text/javascript\">

        \$(document).ready(function () {

            \$(\"#einzehlfacher\").bootstrapValidator({

                submitHandler: function (validator, form, submitButton) {


                    var data = \$('#einzehlfacher').serializeArray();


                            \$.ajax({
                                type: \"POST\",
                                url: \"{{ path('save_row_einzehl') }}\",
                                data: data,
                                dataType: \"json\",
                                beforeSend: function () {
                                    \$('#pleaseWaitDialog').modal('show');
                                },
                                complete: function () {
                                    \$('#pleaseWaitDialog').modal('hide');
                                },
                                success: function (response) {
                                    var table = \$('#sg-datatables-einzelfach_datatable').DataTable();
                                    table.order( [[ 0, 'desc' ]] ).draw();
                                    \$('#einzehlfacher').trigger(\"reset\");

                                },
                                error: function (response) {
                                    \$('#einzehlfacher').trigger(\"reset\");
                                    \$('#feedback').html('');
                                    \$('#feedback').html('<div class=\"alert alert-danger\" role=\"alert\">Something Wrong<!!</div>');
                                }
                            });


                },
                fields: {

                    'GesamtFach': {

                        validators: {

                            notEmpty: {

                                message: 'Bitte einen gültigen Wert eingeben'
                            }
                        }
                    },
                    'EinzelFach_Name': {

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
                    <h3 class=\"panel-title\"><span style=\"color: #337ab7;\">Einzehl Fächer Tabelle</span></h3>
                </div>
                <div class=\"panel-body \">

                    {{ sg_datatables_render(datatable) }}



                </div>
            </div>

        </div>

    </div>



{% endblock %}





", "mainpages/EinzehlFachView.html.twig", "/root/Schreibtisch/devops/app/Resources/views/mainpages/EinzehlFachView.html.twig");
    }
}
