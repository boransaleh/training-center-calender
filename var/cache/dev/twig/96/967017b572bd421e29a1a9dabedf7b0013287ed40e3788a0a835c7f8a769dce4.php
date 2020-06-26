<?php

/* mainpages/dashboard.html.twig */
class __TwigTemplate_5de68652b2b948ddc3b40ba744ae61962cb5a862bae3f4315f6f91da0f5cc69b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("main.html.twig", "mainpages/dashboard.html.twig", 1);
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
        $__internal_7b0b1b852e142f5e6fc03102a47875513d349c6717300dd69bb24aba30d557ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b0b1b852e142f5e6fc03102a47875513d349c6717300dd69bb24aba30d557ee->enter($__internal_7b0b1b852e142f5e6fc03102a47875513d349c6717300dd69bb24aba30d557ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "mainpages/dashboard.html.twig"));

        $__internal_96071a3a488e15a9e5557f3dbda79ed1c23fcde206e55755ee53592cd05579f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96071a3a488e15a9e5557f3dbda79ed1c23fcde206e55755ee53592cd05579f3->enter($__internal_96071a3a488e15a9e5557f3dbda79ed1c23fcde206e55755ee53592cd05579f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "mainpages/dashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b0b1b852e142f5e6fc03102a47875513d349c6717300dd69bb24aba30d557ee->leave($__internal_7b0b1b852e142f5e6fc03102a47875513d349c6717300dd69bb24aba30d557ee_prof);

        
        $__internal_96071a3a488e15a9e5557f3dbda79ed1c23fcde206e55755ee53592cd05579f3->leave($__internal_96071a3a488e15a9e5557f3dbda79ed1c23fcde206e55755ee53592cd05579f3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_afd4d70ae4dc35af57bed640c043ad4fcb619fd5691c05fcb0ebf6f6ffbbf142 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afd4d70ae4dc35af57bed640c043ad4fcb619fd5691c05fcb0ebf6f6ffbbf142->enter($__internal_afd4d70ae4dc35af57bed640c043ad4fcb619fd5691c05fcb0ebf6f6ffbbf142_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9a406c5bf29d8274e85d1cf8014e5449fd3a136d83b72f727e1cb547f10835d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a406c5bf29d8274e85d1cf8014e5449fd3a136d83b72f727e1cb547f10835d6->enter($__internal_9a406c5bf29d8274e85d1cf8014e5449fd3a136d83b72f727e1cb547f10835d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Dashboard";
        
        $__internal_9a406c5bf29d8274e85d1cf8014e5449fd3a136d83b72f727e1cb547f10835d6->leave($__internal_9a406c5bf29d8274e85d1cf8014e5449fd3a136d83b72f727e1cb547f10835d6_prof);

        
        $__internal_afd4d70ae4dc35af57bed640c043ad4fcb619fd5691c05fcb0ebf6f6ffbbf142->leave($__internal_afd4d70ae4dc35af57bed640c043ad4fcb619fd5691c05fcb0ebf6f6ffbbf142_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_656d775d354836941adde845e82822e022db798193d52878114fa305414bb3ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_656d775d354836941adde845e82822e022db798193d52878114fa305414bb3ce->enter($__internal_656d775d354836941adde845e82822e022db798193d52878114fa305414bb3ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7b32fabcd598380611ee3bf91042850a13263b9e5b2f862d6b48a7530d01565c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b32fabcd598380611ee3bf91042850a13263b9e5b2f862d6b48a7530d01565c->enter($__internal_7b32fabcd598380611ee3bf91042850a13263b9e5b2f862d6b48a7530d01565c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <div class=\"row\">
        <div class=\"col-sm-4\">

            <div class=\"panel panel-default \">
                <div class=\"panel-heading panel-heading-custom\">
                    <h1 class=\"panel-title\">
                        <div class=\"row\">
                            <div class=\"col-lg-12 col-md-12 col-sm-12 text-center\">
                                <span class=\"glyphicon glyphicon-blackboard box-dashboard-icon\"
                                      aria-hidden=\"true\"></span>
                                <div class=\"box-dashboard-title\">Unterricht</div>

                            </div>


                        </div>


                    </h1>
                </div>
                <div class=\"panel-body text-center\">
                    <h4 style=\"margin:0px;\">";
        // line 28
        echo twig_escape_filter($this->env, ($context["unterricht"] ?? $this->getContext($context, "unterricht")), "html", null, true);
        echo " UE</h4>
                </div>
            </div>

        </div>

        <div class=\"col-sm-4\">

            <div class=\"panel panel-default\">
                <div class=\"panel-heading panel-heading-custom2\">
                    <h1 class=\"panel-title\">
                        <div class=\"row\">
                            <div class=\"col-lg-12 col-md-12 col-sm-12 text-center\">
                                <span class=\"glyphicon glyphicon-ruble box-dashboard-icon\" aria-hidden=\"true\"></span>
                                <div class=\"box-dashboard-title\">Praktikum</div>

                            </div>


                        </div>


                    </h1>
                </div>
                <div class=\"panel-body text-center\">
                    <h4 style=\"margin:0px;\">";
        // line 53
        echo twig_escape_filter($this->env, ($context["praktikum"] ?? $this->getContext($context, "praktikum")), "html", null, true);
        echo " Tag</h4>
                </div>
            </div>

        </div>

        <div class=\"col-sm-4\">
            <div class=\"panel panel-default \">
                <div class=\"panel-heading panel-heading-custom3\">
                    <h1 class=\"panel-title\">
                        <div class=\"row\">
                            <div class=\"col-lg-12 col-md-12 col-sm-12 text-center\">
                                <span class=\"glyphicon glyphicon-glass box-dashboard-icon\" aria-hidden=\"true\"></span>
                                <div class=\"box-dashboard-title\"> Urlaub</div>

                            </div>


                        </div>


                    </h1>
                </div>
                <div class=\"panel-body text-center\">

                    <h4 style=\"margin:0px;\"> ";
        // line 78
        echo twig_escape_filter($this->env, ($context["urlaub"] ?? $this->getContext($context, "urlaub")), "html", null, true);
        echo " Tag</h4>
                </div>
            </div>

        </div>

    </div>

    <div class=\"row\">
        <div class=\"col-lg-12\">

            <div class=\"panel panel-default \">
                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\">Dozent Chart</h3>
                </div>
                <div class=\"panel-body \">
                    <canvas id=\"myChart\"></canvas>

                    <script>

                        var Chartlabels;
                        var ChartData;

                        \$.ajax({
                            url: \"";
        // line 102
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("chart");
        echo "\",
                            type: 'GET',
                            dataType: 'json',
                            success: function (response) {

                                Chartlabels = response.label;
                                ChartData = response.data;
                                console.log(Chartlabels);
                                console.log(ChartData);
                                var ctx = document.getElementById(\"myChart\").getContext(\"2d\");
                                ctx.canvas.width = 50;
                                ctx.canvas.height = 15;

                                var myChart = new Chart(ctx, {
                                    type: 'line',
                                    data: {
                                        labels: Chartlabels,
                                        datasets: [
                                            {
                                                data: ChartData,
                                                borderColor:'#c9d30e',
                                                borderWidth: .5,
                                                fill: true

                                            }]
                                    }, options: {
                                        scales: {
                                            xAxes: [{
                                                stacked: true,
                                                display: true,
                                                ticks: {
                                                    fontColor: \"#333\",
                                                    fontFamily: 'Quicksand, sans-serif',\t// this here
                                                }
                                            }],
                                            yAxes: [{
                                                stacked: true,
                                                ticks: {
                                                    fontColor: \"#333\",
                                                    fontFamily: 'Quicksand, sans-serif',\t// this here
                                                }
                                            }]
                                        },
                                        legend: {
                                            display: false
                                        }

                                    }
                                });


                            }
                        });


                    </script>
                </div>
            </div>

        </div>

    </div>


";
        
        $__internal_7b32fabcd598380611ee3bf91042850a13263b9e5b2f862d6b48a7530d01565c->leave($__internal_7b32fabcd598380611ee3bf91042850a13263b9e5b2f862d6b48a7530d01565c_prof);

        
        $__internal_656d775d354836941adde845e82822e022db798193d52878114fa305414bb3ce->leave($__internal_656d775d354836941adde845e82822e022db798193d52878114fa305414bb3ce_prof);

    }

    public function getTemplateName()
    {
        return "mainpages/dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 102,  147 => 78,  119 => 53,  91 => 28,  68 => 7,  59 => 6,  41 => 5,  11 => 1,);
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



{% block title %} Dashboard{% endblock %}
{% block body %}
    <div class=\"row\">
        <div class=\"col-sm-4\">

            <div class=\"panel panel-default \">
                <div class=\"panel-heading panel-heading-custom\">
                    <h1 class=\"panel-title\">
                        <div class=\"row\">
                            <div class=\"col-lg-12 col-md-12 col-sm-12 text-center\">
                                <span class=\"glyphicon glyphicon-blackboard box-dashboard-icon\"
                                      aria-hidden=\"true\"></span>
                                <div class=\"box-dashboard-title\">Unterricht</div>

                            </div>


                        </div>


                    </h1>
                </div>
                <div class=\"panel-body text-center\">
                    <h4 style=\"margin:0px;\">{{ unterricht }} UE</h4>
                </div>
            </div>

        </div>

        <div class=\"col-sm-4\">

            <div class=\"panel panel-default\">
                <div class=\"panel-heading panel-heading-custom2\">
                    <h1 class=\"panel-title\">
                        <div class=\"row\">
                            <div class=\"col-lg-12 col-md-12 col-sm-12 text-center\">
                                <span class=\"glyphicon glyphicon-ruble box-dashboard-icon\" aria-hidden=\"true\"></span>
                                <div class=\"box-dashboard-title\">Praktikum</div>

                            </div>


                        </div>


                    </h1>
                </div>
                <div class=\"panel-body text-center\">
                    <h4 style=\"margin:0px;\">{{ praktikum }} Tag</h4>
                </div>
            </div>

        </div>

        <div class=\"col-sm-4\">
            <div class=\"panel panel-default \">
                <div class=\"panel-heading panel-heading-custom3\">
                    <h1 class=\"panel-title\">
                        <div class=\"row\">
                            <div class=\"col-lg-12 col-md-12 col-sm-12 text-center\">
                                <span class=\"glyphicon glyphicon-glass box-dashboard-icon\" aria-hidden=\"true\"></span>
                                <div class=\"box-dashboard-title\"> Urlaub</div>

                            </div>


                        </div>


                    </h1>
                </div>
                <div class=\"panel-body text-center\">

                    <h4 style=\"margin:0px;\"> {{ urlaub }} Tag</h4>
                </div>
            </div>

        </div>

    </div>

    <div class=\"row\">
        <div class=\"col-lg-12\">

            <div class=\"panel panel-default \">
                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\">Dozent Chart</h3>
                </div>
                <div class=\"panel-body \">
                    <canvas id=\"myChart\"></canvas>

                    <script>

                        var Chartlabels;
                        var ChartData;

                        \$.ajax({
                            url: \"{{ path('chart') }}\",
                            type: 'GET',
                            dataType: 'json',
                            success: function (response) {

                                Chartlabels = response.label;
                                ChartData = response.data;
                                console.log(Chartlabels);
                                console.log(ChartData);
                                var ctx = document.getElementById(\"myChart\").getContext(\"2d\");
                                ctx.canvas.width = 50;
                                ctx.canvas.height = 15;

                                var myChart = new Chart(ctx, {
                                    type: 'line',
                                    data: {
                                        labels: Chartlabels,
                                        datasets: [
                                            {
                                                data: ChartData,
                                                borderColor:'#c9d30e',
                                                borderWidth: .5,
                                                fill: true

                                            }]
                                    }, options: {
                                        scales: {
                                            xAxes: [{
                                                stacked: true,
                                                display: true,
                                                ticks: {
                                                    fontColor: \"#333\",
                                                    fontFamily: 'Quicksand, sans-serif',\t// this here
                                                }
                                            }],
                                            yAxes: [{
                                                stacked: true,
                                                ticks: {
                                                    fontColor: \"#333\",
                                                    fontFamily: 'Quicksand, sans-serif',\t// this here
                                                }
                                            }]
                                        },
                                        legend: {
                                            display: false
                                        }

                                    }
                                });


                            }
                        });


                    </script>
                </div>
            </div>

        </div>

    </div>


{% endblock %}



", "mainpages/dashboard.html.twig", "/root/Schreibtisch/devops/app/Resources/views/mainpages/dashboard.html.twig");
    }
}
