<?php

/* :mainpages:UserManagement.html.twig */
class __TwigTemplate_6f65ac07fbcd133db9bd310658c1ceb1f6b44ae9099f60e957b4668457908f90 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("main.html.twig", ":mainpages:UserManagement.html.twig", 1);
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
        $__internal_4611055c31c36f9587dae0d93d48cae3e53515f6f9bf58a3dc60bf71fae52f7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4611055c31c36f9587dae0d93d48cae3e53515f6f9bf58a3dc60bf71fae52f7b->enter($__internal_4611055c31c36f9587dae0d93d48cae3e53515f6f9bf58a3dc60bf71fae52f7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":mainpages:UserManagement.html.twig"));

        $__internal_7fbe1973c3d6df7abd6f80bc0b2d7a607c83c042d9c754f2aefff9c0298b626b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fbe1973c3d6df7abd6f80bc0b2d7a607c83c042d9c754f2aefff9c0298b626b->enter($__internal_7fbe1973c3d6df7abd6f80bc0b2d7a607c83c042d9c754f2aefff9c0298b626b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":mainpages:UserManagement.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4611055c31c36f9587dae0d93d48cae3e53515f6f9bf58a3dc60bf71fae52f7b->leave($__internal_4611055c31c36f9587dae0d93d48cae3e53515f6f9bf58a3dc60bf71fae52f7b_prof);

        
        $__internal_7fbe1973c3d6df7abd6f80bc0b2d7a607c83c042d9c754f2aefff9c0298b626b->leave($__internal_7fbe1973c3d6df7abd6f80bc0b2d7a607c83c042d9c754f2aefff9c0298b626b_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_d378e6ce69cbbcb84c3df762443b2fea2855547055937a33627d16aef601c6ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d378e6ce69cbbcb84c3df762443b2fea2855547055937a33627d16aef601c6ec->enter($__internal_d378e6ce69cbbcb84c3df762443b2fea2855547055937a33627d16aef601c6ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2cca2c5e4da4cdae530c6210346ca2d19686a692587442e6d5e92285543acf74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cca2c5e4da4cdae530c6210346ca2d19686a692587442e6d5e92285543acf74->enter($__internal_2cca2c5e4da4cdae530c6210346ca2d19686a692587442e6d5e92285543acf74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Nutzer Verwaltung ";
        
        $__internal_2cca2c5e4da4cdae530c6210346ca2d19686a692587442e6d5e92285543acf74->leave($__internal_2cca2c5e4da4cdae530c6210346ca2d19686a692587442e6d5e92285543acf74_prof);

        
        $__internal_d378e6ce69cbbcb84c3df762443b2fea2855547055937a33627d16aef601c6ec->leave($__internal_d378e6ce69cbbcb84c3df762443b2fea2855547055937a33627d16aef601c6ec_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e1885c4351f426d92082400b6752c6e4cb2a91ac5fd4823aa1ee1ba0cf59fc84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1885c4351f426d92082400b6752c6e4cb2a91ac5fd4823aa1ee1ba0cf59fc84->enter($__internal_e1885c4351f426d92082400b6752c6e4cb2a91ac5fd4823aa1ee1ba0cf59fc84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_688bee9944a6af163ec0a7026a1f82ed47be64e024c27bc0da5254c66aeb3cbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_688bee9944a6af163ec0a7026a1f82ed47be64e024c27bc0da5254c66aeb3cbb->enter($__internal_688bee9944a6af163ec0a7026a1f82ed47be64e024c27bc0da5254c66aeb3cbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                    <h3 class=\"panel-title\">Nutzer</h3>
                </div>
                <div class=\"panel-body \">

                    <div id=\"feedback\"></div>

                    ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["userForm"] ?? $this->getContext($context, "userForm")), 'form_start', array("attr" => array("id" => "userform", "class" => "form-group-md")));
        echo "

                    <div class=\"form-group\">
                        ";
        // line 36
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["userForm"] ?? $this->getContext($context, "userForm")), "_username", array()), 'row', array("id" => "_username"));
        echo "
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 39
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["userForm"] ?? $this->getContext($context, "userForm")), "_password", array()), 'row', array("id" => "_password"));
        echo "
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["userForm"] ?? $this->getContext($context, "userForm")), "StandOrt", array()), 'row', array("id" => "StandOrt"));
        echo "

                    </div>

                    <div class=\"form-group\">
                        <div >
                            <div class=\"checkbox\">
                                <label>
                                    ";
        // line 50
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["userForm"] ?? $this->getContext($context, "userForm")), "roles", array()), 'row', array("id" => "roles"));
        echo " Administrator
                                </label>
                            </div>
                        </div>
                    </div>


                    <div class=\"form-group\">
                        <input type=\"submit\" value=\"Hinzufügen\" class=\"btn btn-erstellen pull-right\">
                    </div>

                    ";
        // line 61
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["userForm"] ?? $this->getContext($context, "userForm")), 'form_end');
        echo "

                </div>
            </div>

        </div>

    </div>

    <script type=\"text/javascript\">

        \$(document).ready(function () {

            \$(\"#userform\").bootstrapValidator({

                submitHandler: function (validator, form, submitButton) {


                    var data = \$('#userform').serializeArray();


                    \$.ajax({
                        type: \"POST\",
                        url: \"";
        // line 84
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("save_user");
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
                            var table = \$('#sg-datatables-user_datatable').DataTable();
                            table.order( [[ 0, 'desc' ]] ).draw();
                            \$('#userform').bootstrapValidator('resetForm', true);
                            \$('#feedback').html('');
                        },
                        error: function (response) {
                            \$('#userform').bootstrapValidator('resetForm', true);
                            \$('#feedback').html('');
                            \$('#feedback').html('<div class=\"alert alert-danger\" role=\"alert\">Something Wrong<!!</div>');
                        }
                    });


                },fields: {

                    '_username':{

                        validators:{

                            notEmpty:{

                                message:'Bitte einen gültigen Wert eingeben'
                            },
                            emailAddress:{

                                message:'Bitte einen gültigen Wert eingeben'
                            }
                        }
                    },

                    '_password': {

                        validators:{

                            notEmpty:{

                                message:'Bitte einen gültigen Wert eingeben'
                            },
                            stringLength :{

                                min:6,
                                message:'Bitte einen gültigen Wert eingeben'
                            }
                        }
                    },

                    'StandOrt':{

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
                    <h3 class=\"panel-title\"><span style=\"color: #337ab7;\">Nutzer Tabelle</span></h3>
                </div>
                <div class=\"panel-body \">

                    ";
        // line 173
        echo $this->env->getExtension('Sg\DatatablesBundle\Twig\DatatableTwigExtension')->datatablesRender($this->env, ($context["datatable"] ?? $this->getContext($context, "datatable")));
        echo "



                </div>
            </div>

        </div>

    </div>



";
        
        $__internal_688bee9944a6af163ec0a7026a1f82ed47be64e024c27bc0da5254c66aeb3cbb->leave($__internal_688bee9944a6af163ec0a7026a1f82ed47be64e024c27bc0da5254c66aeb3cbb_prof);

        
        $__internal_e1885c4351f426d92082400b6752c6e4cb2a91ac5fd4823aa1ee1ba0cf59fc84->leave($__internal_e1885c4351f426d92082400b6752c6e4cb2a91ac5fd4823aa1ee1ba0cf59fc84_prof);

    }

    public function getTemplateName()
    {
        return ":mainpages:UserManagement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 173,  166 => 84,  140 => 61,  126 => 50,  115 => 42,  109 => 39,  103 => 36,  97 => 33,  68 => 6,  59 => 5,  41 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'main.html.twig' %}{% block title %} Nutzer Verwaltung {% endblock %}{% block body %}    <div class=\"row\" >        <div class=\"col-lg-12\">            <div class=\"modal\" id=\"pleaseWaitDialog\" data-backdrop=\"static\" data-keyboard=\"false\">                <div class=\"modal-dialog\" role=\"document\">                    <div class=\"modal-content\">                        <div class=\"modal-header\">                            <h5 class=\"modal-title\">Processing...</h5>                        </div>                        <div class=\"modal-body\">                            <div class=\"progress\">                                <div class=\"progress-bar progress-bar-striped progress-bar-animated active\" role=\"progressbar\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 100%\"></div>                            </div>                        </div>                    </div>                </div>            </div>            <div class=\"panel panel-default \">                <div class=\"panel-heading\">                    <h3 class=\"panel-title\">Nutzer</h3>                </div>                <div class=\"panel-body \">                    <div id=\"feedback\"></div>                    {{ form_start(userForm,{'attr':{'id': 'userform','class':'form-group-md'}}) }}                    <div class=\"form-group\">                        {{ form_row(userForm._username,{'id': '_username'}) }}                    </div>                    <div class=\"form-group\">                        {{ form_row(userForm._password,{'id': '_password'}) }}                    </div>                    <div class=\"form-group\">                        {{ form_row(userForm.StandOrt,{'id': 'StandOrt'}) }}                    </div>                    <div class=\"form-group\">                        <div >                            <div class=\"checkbox\">                                <label>                                    {{ form_row(userForm.roles,{'id': 'roles'}) }} Administrator                                </label>                            </div>                        </div>                    </div>                    <div class=\"form-group\">                        <input type=\"submit\" value=\"Hinzufügen\" class=\"btn btn-erstellen pull-right\">                    </div>                    {{ form_end(userForm) }}                </div>            </div>        </div>    </div>    <script type=\"text/javascript\">        \$(document).ready(function () {            \$(\"#userform\").bootstrapValidator({                submitHandler: function (validator, form, submitButton) {                    var data = \$('#userform').serializeArray();                    \$.ajax({                        type: \"POST\",                        url: \"{{ path('save_user') }}\",                        data: data,                        dataType: \"json\",                        beforeSend: function () {                            \$('#pleaseWaitDialog').modal('show');                        },                        complete: function () {                            \$('#pleaseWaitDialog').modal('hide');                        },                        success: function (response) {                            var table = \$('#sg-datatables-user_datatable').DataTable();                            table.order( [[ 0, 'desc' ]] ).draw();                            \$('#userform').bootstrapValidator('resetForm', true);                            \$('#feedback').html('');                        },                        error: function (response) {                            \$('#userform').bootstrapValidator('resetForm', true);                            \$('#feedback').html('');                            \$('#feedback').html('<div class=\"alert alert-danger\" role=\"alert\">Something Wrong<!!</div>');                        }                    });                },fields: {                    '_username':{                        validators:{                            notEmpty:{                                message:'Bitte einen gültigen Wert eingeben'                            },                            emailAddress:{                                message:'Bitte einen gültigen Wert eingeben'                            }                        }                    },                    '_password': {                        validators:{                            notEmpty:{                                message:'Bitte einen gültigen Wert eingeben'                            },                            stringLength :{                                min:6,                                message:'Bitte einen gültigen Wert eingeben'                            }                        }                    },                    'StandOrt':{                        validators:{                            notEmpty:{                                message:'Bitte einen gültigen Wert eingeben'                            }                        }                    }                }            });        });    </script>    <div class=\"row\" style=\"margin-bottom: 30px;\">        <div class=\"col-lg-12\">            <div class=\"panel panel-default \">                <div class=\"panel-heading\">                    <h3 class=\"panel-title\"><span style=\"color: #337ab7;\">Nutzer Tabelle</span></h3>                </div>                <div class=\"panel-body \">                    {{ sg_datatables_render(datatable) }}                </div>            </div>        </div>    </div>{% endblock %}", ":mainpages:UserManagement.html.twig", "/root/Schreibtisch/devops/app/Resources/views/mainpages/UserManagement.html.twig");
    }
}
