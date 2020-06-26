<?php

/* mainpages/DrawTableView.html.twig */
class __TwigTemplate_692ebcb06acc70c48c631bfa15c222779affe256ec28c3ebfc8a0f549d49fcec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ReportLayout.html.twig", "mainpages/DrawTableView.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ReportLayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b05bb0dddc76ed337050e472f18a4881a7c46c7ee8ea0b6714ea30a1ed3248b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b05bb0dddc76ed337050e472f18a4881a7c46c7ee8ea0b6714ea30a1ed3248b5->enter($__internal_b05bb0dddc76ed337050e472f18a4881a7c46c7ee8ea0b6714ea30a1ed3248b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "mainpages/DrawTableView.html.twig"));

        $__internal_4187705469af616fffd86ad5e1b6653e6f1ec3707412871d84bc18d8152d69e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4187705469af616fffd86ad5e1b6653e6f1ec3707412871d84bc18d8152d69e7->enter($__internal_4187705469af616fffd86ad5e1b6653e6f1ec3707412871d84bc18d8152d69e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "mainpages/DrawTableView.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b05bb0dddc76ed337050e472f18a4881a7c46c7ee8ea0b6714ea30a1ed3248b5->leave($__internal_b05bb0dddc76ed337050e472f18a4881a7c46c7ee8ea0b6714ea30a1ed3248b5_prof);

        
        $__internal_4187705469af616fffd86ad5e1b6653e6f1ec3707412871d84bc18d8152d69e7->leave($__internal_4187705469af616fffd86ad5e1b6653e6f1ec3707412871d84bc18d8152d69e7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7b1d2d47f6eb39624532b3c0fcc26e29709b05845edbdf00f037878aa7be54e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b1d2d47f6eb39624532b3c0fcc26e29709b05845edbdf00f037878aa7be54e7->enter($__internal_7b1d2d47f6eb39624532b3c0fcc26e29709b05845edbdf00f037878aa7be54e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_07f406f66de8fc8d12a94d9807eccb123ad6b2010d5d9d51bdc15b5daeeffa2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07f406f66de8fc8d12a94d9807eccb123ad6b2010d5d9d51bdc15b5daeeffa2d->enter($__internal_07f406f66de8fc8d12a94d9807eccb123ad6b2010d5d9d51bdc15b5daeeffa2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div id=\"content\">


        <div class=\"content-inner\">

            <div class=\"row\" style=\"margin-bottom: 10px;\">
                <div class=\"col-lg-12 \">
                    <a href=\"#\" class=\"btn btn-default btn-sm pull-right\" onclick=\"script:window.print();\">
                        <span class=\"glyphicon glyphicon-print\"></span> Print
                    </a>
                    <a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("search-calendar");
        echo "\" class=\"btn btn-cancel btn-sm\">
                        <span class=\"glyphicon glyphicon-backward\"></span> Zurück
                    </a>
                    <a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("print_calendar");
        echo "\" class=\"btn btn-default btn-sm\">
                        <span class=\"glyphicon glyphicon-floppy-disk\"></span> PDF
                    </a>
                </div>
            </div>


            ";
        // line 24
        if (((($context["dozentname"] ?? $this->getContext($context, "dozentname")) == "") && (($context["groupname"] ?? $this->getContext($context, "groupname")) != ""))) {
            // line 25
            echo "
                <table id=\"report\" class=\"table table-hover table-bordered\">
                    <caption style=\"padding-left:5px; font-size: 16px; color: #3baae3;\"><span style=\"color: #676a6c;\">Gruppe Name:</span> ";
            // line 27
            echo twig_escape_filter($this->env, ($context["groupname"] ?? $this->getContext($context, "groupname")), "html", null, true);
            echo "
                        <span style=\"color: #676a6c;\">Von Datum :</span>";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\DateFormatExt')->getDeutschDate(($context["fromdate"] ?? $this->getContext($context, "fromdate"))), "html", null, true);
            echo "
                        <span style=\"color: #676a6c;\">Bis Datum :</span> ";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\DateFormatExt')->getDeutschDate(($context["enddate"] ?? $this->getContext($context, "enddate"))), "html", null, true);
            echo "</caption>
                    <tbody>

                    ";
            // line 32
            $context["cdate"] = "";
            // line 33
            echo "
                    ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["events"] ?? $this->getContext($context, "events")));
            foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                // line 35
                echo "
                        ";
                // line 36
                if (($this->getAttribute($context["event"], "EventDate", array()) == ($context["cdate"] ?? $this->getContext($context, "cdate")))) {
                    // line 37
                    echo "                            <tr>
                                <td><span class=\"glyphicon glyphicon-triangle-right\" style=\"color:#3a87ad; \"
                                          aria-hidden=\"true\"></span> ";
                    // line 39
                    echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "title", array()), "html", null, true);
                    echo " </td>
                                <td style=\"padding-right: 5px; text-align: right;\">
                                    ";
                    // line 41
                    $context["beforevent"] = (twig_date_format_filter($this->env, $this->getAttribute($context["event"], "startDatetime", array()), "H") - 1);
                    // line 42
                    echo "                                    ";
                    $context["afterevent"] = (10 - twig_date_format_filter($this->env, $this->getAttribute($context["event"], "endDatetime", array()), "H"));
                    // line 43
                    echo "                                    ";
                    $context["eventduration"] = $this->getAttribute($context["event"], "EventHours", array());
                    // line 44
                    echo "

                                    <div class=\"progress\" style=\"width: 200px\">

                                        ";
                    // line 48
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(0, ($context["beforevent"] ?? $this->getContext($context, "beforevent"))));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 49
                        echo "
                                            ";
                        // line 50
                        if (($context["i"] < ($context["beforevent"] ?? $this->getContext($context, "beforevent")))) {
                            // line 51
                            echo "
                                                <div class=\"progress-bar progress-bar-custom progress-bar-striped\" role=\"progressbar\" aria-valuemax=\"100\"
                                                     style=\"width:11.11111111111111%\">




                                                </div>
                                            ";
                        }
                        // line 60
                        echo "
                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 62
                    echo "
                                        ";
                    // line 63
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(twig_date_format_filter($this->env, $this->getAttribute($context["event"], "startDatetime", array()), "H"), (twig_date_format_filter($this->env, $this->getAttribute($context["event"], "endDatetime", array()), "H") - 1)));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 64
                        echo "
                                            ";
                        // line 65
                        if (($this->getAttribute($this->getAttribute($context["event"], "eventtype", array()), "id", array()) == 4)) {
                            // line 66
                            echo "
                                                <div class=\"progress-bar progress-bar-info\" role=\"progressbar\"
                                                     aria-valuemax=\"100\" style=\"width:11.11111111111111%\">

                                                    U";
                            // line 70
                            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                            echo "

                                                </div>
                                            ";
                        } elseif (($this->getAttribute($this->getAttribute(                        // line 73
$context["event"], "eventtype", array()), "id", array()) == 1)) {
                            // line 74
                            echo "                                                <div class=\"progress-bar progress-bar-warning\" role=\"progressbar\"
                                                     aria-valuemax=\"100\" style=\"width:11.11111111111111%\">

                                                    U";
                            // line 77
                            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                            echo "


                                                </div>
                                            ";
                        } elseif (($this->getAttribute($this->getAttribute(                        // line 81
$context["event"], "eventtype", array()), "id", array()) == 2)) {
                            // line 82
                            echo "
                                                <div class=\"progress-bar progress-bar-success\" role=\"progressbar\"
                                                     aria-valuemax=\"100\" style=\"width:11.11111111111111%\">

                                                    U";
                            // line 86
                            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                            echo "


                                                </div>

                                            ";
                        } elseif (($this->getAttribute($this->getAttribute(                        // line 91
$context["event"], "eventtype", array()), "id", array()) == 3)) {
                            // line 92
                            echo "
                                                <div class=\"progress-bar progress-bar-danger\" role=\"progressbar\"
                                                     aria-valuemax=\"100\" style=\"width:11.11111111111111%\">


                                                </div>

                                            ";
                        }
                        // line 100
                        echo "
                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 102
                    echo "

                                    </div>


                                </td>
                            </tr>


                        ";
                } else {
                    // line 112
                    echo "

                            <tr class=\"active\" style=\"page-break-inside:avoid;\">
                                <td colspan=\"2\" style=\"font-size: 16px;\"> ";
                    // line 115
                    echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\DateFormatExt')->getDeutschDate($this->getAttribute($context["event"], "EventDate", array())), "html", null, true);
                    echo " </td>

                            </tr>
                            <tr>
                                <td><span class=\"glyphicon glyphicon-triangle-right\" style=\"color:#3a87ad; \"
                                          aria-hidden=\"true\"></span> ";
                    // line 120
                    echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "title", array()), "html", null, true);
                    echo " </td>
                                <td style=\"padding-right: 5px; text-align: right;\">
                                    ";
                    // line 122
                    $context["beforevent"] = (twig_date_format_filter($this->env, $this->getAttribute($context["event"], "startDatetime", array()), "H") - 1);
                    // line 123
                    echo "                                    ";
                    $context["afterevent"] = (10 - twig_date_format_filter($this->env, $this->getAttribute($context["event"], "endDatetime", array()), "H"));
                    // line 124
                    echo "                                    ";
                    $context["eventduration"] = $this->getAttribute($context["event"], "EventHours", array());
                    // line 125
                    echo "

                                    <div class=\"progress\" style=\"width: 200px\">

                                        ";
                    // line 129
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(0, ($context["beforevent"] ?? $this->getContext($context, "beforevent"))));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 130
                        echo "
                                            ";
                        // line 131
                        if (($context["i"] < ($context["beforevent"] ?? $this->getContext($context, "beforevent")))) {
                            // line 132
                            echo "
                                                <div class=\"progress-bar progress-bar-custom progress-bar-striped \" role=\"progressbar\" aria-valuemax=\"100\"
                                                     style=\"width:11.11111111111111%\">




                                                </div>
                                            ";
                        }
                        // line 141
                        echo "
                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 143
                    echo "
                                        ";
                    // line 144
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(twig_date_format_filter($this->env, $this->getAttribute($context["event"], "startDatetime", array()), "H"), (twig_date_format_filter($this->env, $this->getAttribute($context["event"], "endDatetime", array()), "H") - 1)));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 145
                        echo "
                                            ";
                        // line 146
                        if (($this->getAttribute($this->getAttribute($context["event"], "eventtype", array()), "id", array()) == 4)) {
                            // line 147
                            echo "
                                                <div class=\"progress-bar progress-bar-info\" role=\"progressbar\"
                                                     aria-valuemax=\"100\" style=\"width:11.11111111111111%\">

                                                    U";
                            // line 151
                            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                            echo "

                                                </div>
                                            ";
                        } elseif (($this->getAttribute($this->getAttribute(                        // line 154
$context["event"], "eventtype", array()), "id", array()) == 1)) {
                            // line 155
                            echo "                                                <div class=\"progress-bar progress-bar-warning\" role=\"progressbar\"
                                                     aria-valuemax=\"100\" style=\"width:11.11111111111111%\">

                                                    U";
                            // line 158
                            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                            echo "


                                                </div>
                                            ";
                        } elseif (($this->getAttribute($this->getAttribute(                        // line 162
$context["event"], "eventtype", array()), "id", array()) == 2)) {
                            // line 163
                            echo "
                                                <div class=\"progress-bar progress-bar-success\" role=\"progressbar\"
                                                     aria-valuemax=\"100\" style=\"width:11.11111111111111%\">

                                                    U";
                            // line 167
                            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                            echo "


                                                </div>

                                            ";
                        } elseif (($this->getAttribute($this->getAttribute(                        // line 172
$context["event"], "eventtype", array()), "id", array()) == 3)) {
                            // line 173
                            echo "
                                                <div class=\"progress-bar progress-bar-danger\" role=\"progressbar\"
                                                     aria-valuemax=\"100\" style=\"width:11.11111111111111%\">


                                                </div>

                                            ";
                        }
                        // line 181
                        echo "
                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 183
                    echo "

                                    </div>


                                </td>
                            </tr>

                        ";
                }
                // line 192
                echo "

                        ";
                // line 194
                $context["cdate"] = $this->getAttribute($context["event"], "EventDate", array());
                // line 195
                echo "

                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 198
            echo "
                    </tbody>

                </table>



            ";
        } elseif (((        // line 205
($context["dozentname"] ?? $this->getContext($context, "dozentname")) != "") && (($context["groupname"] ?? $this->getContext($context, "groupname")) == ""))) {
            // line 206
            echo "
                <table id=\"report\" class=\"table table-hover table-bordered\">
                    <caption style=\"padding-left:5px; font-size: 16px; color: #3baae3;\"><span style=\"color: #676a6c;\">Dozent Name:</span> ";
            // line 208
            echo twig_escape_filter($this->env, ($context["dozentname"] ?? $this->getContext($context, "dozentname")), "html", null, true);
            echo "
                        <span style=\"color: #676a6c;\">Von Datum :</span>";
            // line 209
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\DateFormatExt')->getDeutschDate(($context["fromdate"] ?? $this->getContext($context, "fromdate"))), "html", null, true);
            echo "
                        <span style=\"color: #676a6c;\">Bis Datum :</span> ";
            // line 210
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\DateFormatExt')->getDeutschDate(($context["enddate"] ?? $this->getContext($context, "enddate"))), "html", null, true);
            echo "</caption>
                    <tbody>

                    ";
            // line 213
            $context["cdate"] = "";
            // line 214
            echo "
                    ";
            // line 215
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["events"] ?? $this->getContext($context, "events")));
            foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                // line 216
                echo "
                        ";
                // line 217
                if (($this->getAttribute($context["event"], "EventDate", array()) == ($context["cdate"] ?? $this->getContext($context, "cdate")))) {
                    // line 218
                    echo "                            <tr>
                                <td><span class=\"glyphicon glyphicon-triangle-right\" style=\"color:#3a87ad; \"
                                          aria-hidden=\"true\"></span> ";
                    // line 220
                    echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "EinzelFach", array()), "html", null, true);
                    echo " </td>
                                <td><span class=\"glyphicon glyphicon-triangle-right\" style=\"color:rgba(217, 83, 79, 0.86); \"
                                          aria-hidden=\"true\"></span> ";
                    // line 222
                    echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "SchuleGroup", array()), "html", null, true);
                    echo " </td>
                                <td style=\"padding-right: 5px; text-align: right;\">
                                    ";
                    // line 224
                    $context["beforevent"] = (twig_date_format_filter($this->env, $this->getAttribute($context["event"], "startDatetime", array()), "H") - 1);
                    // line 225
                    echo "                                    ";
                    $context["afterevent"] = (10 - twig_date_format_filter($this->env, $this->getAttribute($context["event"], "endDatetime", array()), "H"));
                    // line 226
                    echo "                                    ";
                    $context["eventduration"] = $this->getAttribute($context["event"], "EventHours", array());
                    // line 227
                    echo "

                                    <div class=\"progress\" style=\"width: 200px\">

                                        ";
                    // line 231
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(0, ($context["beforevent"] ?? $this->getContext($context, "beforevent"))));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 232
                        echo "
                                            ";
                        // line 233
                        if (($context["i"] < ($context["beforevent"] ?? $this->getContext($context, "beforevent")))) {
                            // line 234
                            echo "
                                                <div class=\"progress-bar progress-bar-custom progress-bar-striped \" role=\"progressbar\" aria-valuemax=\"100\"
                                                     style=\"width:11.11111111111111%\">




                                                </div>
                                            ";
                        }
                        // line 243
                        echo "
                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 245
                    echo "
                                        ";
                    // line 246
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(twig_date_format_filter($this->env, $this->getAttribute($context["event"], "startDatetime", array()), "H"), (twig_date_format_filter($this->env, $this->getAttribute($context["event"], "endDatetime", array()), "H") - 1)));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 247
                        echo "
                                            ";
                        // line 248
                        if (($this->getAttribute($this->getAttribute($context["event"], "eventtype", array()), "id", array()) == 4)) {
                            // line 249
                            echo "
                                                <div class=\"progress-bar progress-bar-info\" role=\"progressbar\"
                                                     aria-valuemax=\"100\" style=\"width:11.11111111111111%\">

                                                    U";
                            // line 253
                            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                            echo "

                                                </div>
                                            ";
                        } elseif (($this->getAttribute($this->getAttribute(                        // line 256
$context["event"], "eventtype", array()), "id", array()) == 1)) {
                            // line 257
                            echo "                                                <div class=\"progress-bar progress-bar-warning\" role=\"progressbar\"
                                                     aria-valuemax=\"100\" style=\"width:11.11111111111111%\">

                                                    U";
                            // line 260
                            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                            echo "


                                                </div>
                                            ";
                        } elseif (($this->getAttribute($this->getAttribute(                        // line 264
$context["event"], "eventtype", array()), "id", array()) == 2)) {
                            // line 265
                            echo "
                                                <div class=\"progress-bar progress-bar-success\" role=\"progressbar\"
                                                     aria-valuemax=\"100\" style=\"width:11.11111111111111%\">

                                                    U";
                            // line 269
                            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                            echo "


                                                </div>

                                            ";
                        } elseif (($this->getAttribute($this->getAttribute(                        // line 274
$context["event"], "eventtype", array()), "id", array()) == 3)) {
                            // line 275
                            echo "
                                                <div class=\"progress-bar progress-bar-danger\" role=\"progressbar\"
                                                     aria-valuemax=\"100\" style=\"width:11.11111111111111%\">


                                                </div>

                                            ";
                        }
                        // line 283
                        echo "
                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 285
                    echo "

                                    </div>


                                </td>
                            </tr>


                        ";
                } else {
                    // line 295
                    echo "

                            <tr class=\"active\">
                                <td colspan=\"3\" style=\"font-size: 16px;\"> ";
                    // line 298
                    echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\DateFormatExt')->getDeutschDate($this->getAttribute($context["event"], "EventDate", array())), "html", null, true);
                    echo " </td>

                            </tr>
                            <tr>
                                <td><span class=\"glyphicon glyphicon-triangle-right\" style=\"color:#3a87ad; \"
                                          aria-hidden=\"true\"></span> ";
                    // line 303
                    echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "EinzelFach", array()), "html", null, true);
                    echo " </td>
                                <td><span class=\"glyphicon glyphicon-triangle-right\" style=\"color:rgba(217, 83, 79, 0.86); \"
                                          aria-hidden=\"true\"></span> ";
                    // line 305
                    echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "SchuleGroup", array()), "html", null, true);
                    echo " </td>
                                <td style=\"padding-right: 5px; text-align: right;\">
                                    ";
                    // line 307
                    $context["beforevent"] = (twig_date_format_filter($this->env, $this->getAttribute($context["event"], "startDatetime", array()), "H") - 1);
                    // line 308
                    echo "                                    ";
                    $context["afterevent"] = (10 - twig_date_format_filter($this->env, $this->getAttribute($context["event"], "endDatetime", array()), "H"));
                    // line 309
                    echo "                                    ";
                    $context["eventduration"] = $this->getAttribute($context["event"], "EventHours", array());
                    // line 310
                    echo "

                                    <div class=\"progress\" style=\"width: 200px\">

                                        ";
                    // line 314
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(0, ($context["beforevent"] ?? $this->getContext($context, "beforevent"))));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 315
                        echo "
                                            ";
                        // line 316
                        if (($context["i"] < ($context["beforevent"] ?? $this->getContext($context, "beforevent")))) {
                            // line 317
                            echo "
                                                <div class=\"progress-bar progress-bar-custom progress-bar-striped \" role=\"progressbar\" aria-valuemax=\"100\"
                                                     style=\"width:11.11111111111111%\">




                                                </div>
                                            ";
                        }
                        // line 326
                        echo "
                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 328
                    echo "
                                        ";
                    // line 329
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(twig_date_format_filter($this->env, $this->getAttribute($context["event"], "startDatetime", array()), "H"), (twig_date_format_filter($this->env, $this->getAttribute($context["event"], "endDatetime", array()), "H") - 1)));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 330
                        echo "
                                            ";
                        // line 331
                        if (($this->getAttribute($this->getAttribute($context["event"], "eventtype", array()), "id", array()) == 4)) {
                            // line 332
                            echo "
                                                <div class=\"progress-bar progress-bar-info\" role=\"progressbar\"
                                                     aria-valuemax=\"100\" style=\"width:11.11111111111111%\">

                                                    U";
                            // line 336
                            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                            echo "

                                                </div>
                                            ";
                        } elseif (($this->getAttribute($this->getAttribute(                        // line 339
$context["event"], "eventtype", array()), "id", array()) == 1)) {
                            // line 340
                            echo "                                                <div class=\"progress-bar progress-bar-warning\" role=\"progressbar\"
                                                     aria-valuemax=\"100\" style=\"width:11.11111111111111%\">

                                                    U";
                            // line 343
                            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                            echo "


                                                </div>
                                            ";
                        } elseif (($this->getAttribute($this->getAttribute(                        // line 347
$context["event"], "eventtype", array()), "id", array()) == 2)) {
                            // line 348
                            echo "
                                                <div class=\"progress-bar progress-bar-success\" role=\"progressbar\"
                                                     aria-valuemax=\"100\" style=\"width:11.11111111111111%\">

                                                    U";
                            // line 352
                            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                            echo "


                                                </div>

                                            ";
                        } elseif (($this->getAttribute($this->getAttribute(                        // line 357
$context["event"], "eventtype", array()), "id", array()) == 3)) {
                            // line 358
                            echo "
                                                <div class=\"progress-bar progress-bar-danger\" role=\"progressbar\"
                                                     aria-valuemax=\"100\" style=\"width:11.11111111111111%\">


                                                </div>

                                            ";
                        }
                        // line 366
                        echo "
                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 368
                    echo "

                                    </div>


                                </td>
                            </tr>

                        ";
                }
                // line 377
                echo "

                        ";
                // line 379
                $context["cdate"] = $this->getAttribute($context["event"], "EventDate", array());
                // line 380
                echo "

                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 383
            echo "
                    </tbody>

                </table>





            ";
        } elseif (((        // line 392
($context["dozentname"] ?? $this->getContext($context, "dozentname")) != "") && (($context["groupname"] ?? $this->getContext($context, "groupname")) != ""))) {
            // line 393
            echo "
                <table id=\"report\" class=\"table table-hover table-bordered\">
                    <caption style=\"padding-left:5px; font-size: 16px; color: #3baae3;\"><span style=\"color: #676a6c;\">Dozent Name:</span> ";
            // line 395
            echo twig_escape_filter($this->env, ($context["dozentname"] ?? $this->getContext($context, "dozentname")), "html", null, true);
            echo "
                        <span style=\"color: #676a6c;\"> ,Gruppe Name</span> ";
            // line 396
            echo twig_escape_filter($this->env, ($context["groupname"] ?? $this->getContext($context, "groupname")), "html", null, true);
            echo "
                        <span style=\"color: #676a6c;\">Von Datum :</span>";
            // line 397
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\DateFormatExt')->getDeutschDate(($context["fromdate"] ?? $this->getContext($context, "fromdate"))), "html", null, true);
            echo "
                        <span style=\"color: #676a6c;\">Bis Datum :</span> ";
            // line 398
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\DateFormatExt')->getDeutschDate(($context["enddate"] ?? $this->getContext($context, "enddate"))), "html", null, true);
            echo "</caption>
                    <tbody>

                    ";
            // line 401
            $context["cdate"] = "";
            // line 402
            echo "
                    ";
            // line 403
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["events"] ?? $this->getContext($context, "events")));
            foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                // line 404
                echo "
                        ";
                // line 405
                if (($this->getAttribute($context["event"], "EventDate", array()) == ($context["cdate"] ?? $this->getContext($context, "cdate")))) {
                    // line 406
                    echo "                            <tr>
                                <td><span class=\"glyphicon glyphicon-triangle-right\" style=\"color:#3a87ad; \"
                                          aria-hidden=\"true\"></span> ";
                    // line 408
                    echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "EinzelFach", array()), "html", null, true);
                    echo " </td>
                                <td style=\"padding-right: 5px; text-align: right;\">
                                    ";
                    // line 410
                    $context["beforevent"] = (twig_date_format_filter($this->env, $this->getAttribute($context["event"], "startDatetime", array()), "H") - 1);
                    // line 411
                    echo "                                    ";
                    $context["afterevent"] = (10 - twig_date_format_filter($this->env, $this->getAttribute($context["event"], "endDatetime", array()), "H"));
                    // line 412
                    echo "                                    ";
                    $context["eventduration"] = $this->getAttribute($context["event"], "EventHours", array());
                    // line 413
                    echo "

                                    <div class=\"progress\" style=\"width: 200px\">

                                        ";
                    // line 417
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(0, ($context["beforevent"] ?? $this->getContext($context, "beforevent"))));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 418
                        echo "
                                            ";
                        // line 419
                        if (($context["i"] < ($context["beforevent"] ?? $this->getContext($context, "beforevent")))) {
                            // line 420
                            echo "
                                                <div class=\"progress-bar progress-bar-custom progress-bar-striped\" role=\"progressbar\" aria-valuemax=\"100\"
                                                     style=\"width:11.11111111111111%\">




                                                </div>
                                            ";
                        }
                        // line 429
                        echo "
                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 431
                    echo "
                                        ";
                    // line 432
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(twig_date_format_filter($this->env, $this->getAttribute($context["event"], "startDatetime", array()), "H"), (twig_date_format_filter($this->env, $this->getAttribute($context["event"], "endDatetime", array()), "H") - 1)));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 433
                        echo "
                                            ";
                        // line 434
                        if (($this->getAttribute($this->getAttribute($context["event"], "eventtype", array()), "id", array()) == 4)) {
                            // line 435
                            echo "
                                                <div class=\"progress-bar progress-bar-info\" role=\"progressbar\"
                                                     aria-valuemax=\"100\" style=\"width:11.11111111111111%\">

                                                    U";
                            // line 439
                            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                            echo "

                                                </div>
                                            ";
                        } elseif (($this->getAttribute($this->getAttribute(                        // line 442
$context["event"], "eventtype", array()), "id", array()) == 1)) {
                            // line 443
                            echo "                                                <div class=\"progress-bar progress-bar-warning\" role=\"progressbar\"
                                                     aria-valuemax=\"100\" style=\"width:11.11111111111111%\">

                                                    U";
                            // line 446
                            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                            echo "


                                                </div>
                                            ";
                        } elseif (($this->getAttribute($this->getAttribute(                        // line 450
$context["event"], "eventtype", array()), "id", array()) == 2)) {
                            // line 451
                            echo "
                                                <div class=\"progress-bar progress-bar-success\" role=\"progressbar\"
                                                     aria-valuemax=\"100\" style=\"width:11.11111111111111%\">

                                                    U";
                            // line 455
                            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                            echo "


                                                </div>

                                            ";
                        } elseif (($this->getAttribute($this->getAttribute(                        // line 460
$context["event"], "eventtype", array()), "id", array()) == 3)) {
                            // line 461
                            echo "
                                                <div class=\"progress-bar progress-bar-danger\" role=\"progressbar\"
                                                     aria-valuemax=\"100\" style=\"width:11.11111111111111%\">


                                                </div>

                                            ";
                        }
                        // line 469
                        echo "
                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 471
                    echo "

                                    </div>


                                </td>
                            </tr>


                        ";
                } else {
                    // line 481
                    echo "

                            <tr class=\"active\">
                                <td colspan=\"2\" style=\"font-size: 16px;\"> ";
                    // line 484
                    echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\DateFormatExt')->getDeutschDate($this->getAttribute($context["event"], "EventDate", array())), "html", null, true);
                    echo " </td>

                            </tr>
                            <tr>
                                <td><span class=\"glyphicon glyphicon-triangle-right\" style=\"color:#3a87ad; \"
                                          aria-hidden=\"true\"></span> ";
                    // line 489
                    echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "EinzelFach", array()), "html", null, true);
                    echo " </td>
                                <td style=\"padding-right: 5px; text-align: right;\">
                                    ";
                    // line 491
                    $context["beforevent"] = (twig_date_format_filter($this->env, $this->getAttribute($context["event"], "startDatetime", array()), "H") - 1);
                    // line 492
                    echo "                                    ";
                    $context["afterevent"] = (10 - twig_date_format_filter($this->env, $this->getAttribute($context["event"], "endDatetime", array()), "H"));
                    // line 493
                    echo "                                    ";
                    $context["eventduration"] = $this->getAttribute($context["event"], "EventHours", array());
                    // line 494
                    echo "

                                    <div class=\"progress\" style=\"width: 200px\">

                                        ";
                    // line 498
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(0, ($context["beforevent"] ?? $this->getContext($context, "beforevent"))));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 499
                        echo "
                                            ";
                        // line 500
                        if (($context["i"] < ($context["beforevent"] ?? $this->getContext($context, "beforevent")))) {
                            // line 501
                            echo "
                                                <div class=\"progress-bar progress-bar-custom progress-bar-striped\" role=\"progressbar\" aria-valuemax=\"100\"
                                                     style=\"width:11.11111111111111%\">




                                                </div>
                                            ";
                        }
                        // line 510
                        echo "
                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 512
                    echo "
                                        ";
                    // line 513
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(twig_date_format_filter($this->env, $this->getAttribute($context["event"], "startDatetime", array()), "H"), (twig_date_format_filter($this->env, $this->getAttribute($context["event"], "endDatetime", array()), "H") - 1)));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 514
                        echo "
                                            ";
                        // line 515
                        if (($this->getAttribute($this->getAttribute($context["event"], "eventtype", array()), "id", array()) == 4)) {
                            // line 516
                            echo "
                                                <div class=\"progress-bar progress-bar-info\" role=\"progressbar\"
                                                     aria-valuemax=\"100\" style=\"width:11.11111111111111%\">

                                                    U";
                            // line 520
                            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                            echo "

                                                </div>
                                            ";
                        } elseif (($this->getAttribute($this->getAttribute(                        // line 523
$context["event"], "eventtype", array()), "id", array()) == 1)) {
                            // line 524
                            echo "                                                <div class=\"progress-bar progress-bar-warning\" role=\"progressbar\"
                                                     aria-valuemax=\"100\" style=\"width:11.11111111111111%\">

                                                    U";
                            // line 527
                            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                            echo "


                                                </div>
                                            ";
                        } elseif (($this->getAttribute($this->getAttribute(                        // line 531
$context["event"], "eventtype", array()), "id", array()) == 2)) {
                            // line 532
                            echo "
                                                <div class=\"progress-bar progress-bar-success\" role=\"progressbar\"
                                                     aria-valuemax=\"100\" style=\"width:11.11111111111111%\">

                                                    U";
                            // line 536
                            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                            echo "


                                                </div>

                                            ";
                        } elseif (($this->getAttribute($this->getAttribute(                        // line 541
$context["event"], "eventtype", array()), "id", array()) == 3)) {
                            // line 542
                            echo "
                                                <div class=\"progress-bar progress-bar-danger\" role=\"progressbar\"
                                                     aria-valuemax=\"100\" style=\"width:11.11111111111111%\">


                                                </div>

                                            ";
                        }
                        // line 550
                        echo "
                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 552
                    echo "

                                    </div>


                                </td>
                            </tr>

                        ";
                }
                // line 561
                echo "

                        ";
                // line 563
                $context["cdate"] = $this->getAttribute($context["event"], "EventDate", array());
                // line 564
                echo "

                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 567
            echo "
                    </tbody>

                </table>


            ";
        } elseif (((        // line 573
($context["dozentname"] ?? $this->getContext($context, "dozentname")) == "") && (($context["groupname"] ?? $this->getContext($context, "groupname")) == ""))) {
            // line 574
            echo "
                <table id=\"report\" class=\"table table-hover table-bordered\">
                    <caption style=\"padding-left:5px; font-size: 16px; color: #3baae3;\"><span style=\"color: #676a6c;\">Stunden Plan :</span>
                        <span style=\"color: #676a6c;\">Von Datum :</span>";
            // line 577
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\DateFormatExt')->getDeutschDate(($context["fromdate"] ?? $this->getContext($context, "fromdate"))), "html", null, true);
            echo "
                        <span style=\"color: #676a6c;\">Bis Datum :</span> ";
            // line 578
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\DateFormatExt')->getDeutschDate(($context["enddate"] ?? $this->getContext($context, "enddate"))), "html", null, true);
            echo "</caption>
                    <tbody>

                    ";
            // line 581
            $context["cdate"] = "";
            // line 582
            echo "
                    ";
            // line 583
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["events"] ?? $this->getContext($context, "events")));
            foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                // line 584
                echo "
                        ";
                // line 585
                if (($this->getAttribute($context["event"], "EventDate", array()) == ($context["cdate"] ?? $this->getContext($context, "cdate")))) {
                    // line 586
                    echo "                            <tr style=\"page-break-inside: avoid; \">
                                <td><span class=\"glyphicon glyphicon-triangle-right\" style=\"color:#3a87ad; \"
                                          aria-hidden=\"true\"></span> ";
                    // line 588
                    echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "title", array()), "html", null, true);
                    echo " </td>
                                <td><span class=\"glyphicon glyphicon-triangle-right\" style=\"color:rgba(217, 83, 79, 0.86); \"
                                          aria-hidden=\"true\"></span> ";
                    // line 590
                    echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "SchuleGroup", array()), "html", null, true);
                    echo " </td>
                                <td style=\"padding-right: 5px; text-align: right;\">
                                    ";
                    // line 592
                    $context["beforevent"] = (twig_date_format_filter($this->env, $this->getAttribute($context["event"], "startDatetime", array()), "H") - 1);
                    // line 593
                    echo "                                    ";
                    $context["afterevent"] = (10 - twig_date_format_filter($this->env, $this->getAttribute($context["event"], "endDatetime", array()), "H"));
                    // line 594
                    echo "                                    ";
                    $context["eventduration"] = $this->getAttribute($context["event"], "EventHours", array());
                    // line 595
                    echo "

                                    <div class=\"progress\" style=\"width: 200px\">

                                        ";
                    // line 599
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(0, ($context["beforevent"] ?? $this->getContext($context, "beforevent"))));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 600
                        echo "
                                            ";
                        // line 601
                        if (($context["i"] < ($context["beforevent"] ?? $this->getContext($context, "beforevent")))) {
                            // line 602
                            echo "
                                                <div class=\"progress-bar progress-bar-custom progress-bar-striped\" role=\"progressbar\" aria-valuemax=\"100\"
                                                     style=\"width:11.11111111111111%\">




                                                </div>
                                            ";
                        }
                        // line 611
                        echo "
                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 613
                    echo "
                                        ";
                    // line 614
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(twig_date_format_filter($this->env, $this->getAttribute($context["event"], "startDatetime", array()), "H"), (twig_date_format_filter($this->env, $this->getAttribute($context["event"], "endDatetime", array()), "H") - 1)));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 615
                        echo "
                                            ";
                        // line 616
                        if (($this->getAttribute($this->getAttribute($context["event"], "eventtype", array()), "id", array()) == 4)) {
                            // line 617
                            echo "
                                                <div class=\"progress-bar progress-bar-info\" role=\"progressbar\"
                                                     aria-valuemax=\"100\" style=\"width:11.11111111111111%\">

                                                    U";
                            // line 621
                            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                            echo "

                                                </div>
                                            ";
                        } elseif (($this->getAttribute($this->getAttribute(                        // line 624
$context["event"], "eventtype", array()), "id", array()) == 1)) {
                            // line 625
                            echo "                                                <div class=\"progress-bar progress-bar-warning\" role=\"progressbar\"
                                                     aria-valuemax=\"100\" style=\"width:11.11111111111111%\">

                                                    U";
                            // line 628
                            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                            echo "


                                                </div>
                                            ";
                        } elseif (($this->getAttribute($this->getAttribute(                        // line 632
$context["event"], "eventtype", array()), "id", array()) == 2)) {
                            // line 633
                            echo "
                                                <div class=\"progress-bar progress-bar-success\" role=\"progressbar\"
                                                     aria-valuemax=\"100\" style=\"width:11.11111111111111%\">

                                                    U";
                            // line 637
                            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                            echo "


                                                </div>

                                            ";
                        } elseif (($this->getAttribute($this->getAttribute(                        // line 642
$context["event"], "eventtype", array()), "id", array()) == 3)) {
                            // line 643
                            echo "
                                                <div class=\"progress-bar progress-bar-danger\" role=\"progressbar\"
                                                     aria-valuemax=\"100\" style=\"width:11.11111111111111%\">


                                                </div>

                                            ";
                        }
                        // line 651
                        echo "
                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 653
                    echo "

                                    </div>


                                </td>
                            </tr>


                        ";
                } else {
                    // line 663
                    echo "

                            <tr class=\"active\" style=\"page-break-inside: avoid; \">
                                <td colspan=\"3\" style=\"font-size: 16px;\"> ";
                    // line 666
                    echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\DateFormatExt')->getDeutschDate($this->getAttribute($context["event"], "EventDate", array())), "html", null, true);
                    echo " </td>

                            </tr>
                            <tr style=\"page-break-inside: avoid; \">
                                <td><span class=\"glyphicon glyphicon-triangle-right\" style=\"color:#3a87ad; \"
                                          aria-hidden=\"true\"></span> ";
                    // line 671
                    echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "title", array()), "html", null, true);
                    echo "  </td>
                                <td><span class=\"glyphicon glyphicon-triangle-right\" style=\"color:rgba(217, 83, 79, 0.86); \"
                                          aria-hidden=\"true\"></span> ";
                    // line 673
                    echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "SchuleGroup", array()), "html", null, true);
                    echo " </td>

                                <td style=\"padding-right: 5px; text-align: right;\">
                                    ";
                    // line 676
                    $context["beforevent"] = (twig_date_format_filter($this->env, $this->getAttribute($context["event"], "startDatetime", array()), "H") - 1);
                    // line 677
                    echo "                                    ";
                    $context["afterevent"] = (10 - twig_date_format_filter($this->env, $this->getAttribute($context["event"], "endDatetime", array()), "H"));
                    // line 678
                    echo "                                    ";
                    $context["eventduration"] = $this->getAttribute($context["event"], "EventHours", array());
                    // line 679
                    echo "

                                    <div class=\"progress\" style=\"width: 200px\">

                                        ";
                    // line 683
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(0, ($context["beforevent"] ?? $this->getContext($context, "beforevent"))));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 684
                        echo "
                                            ";
                        // line 685
                        if (($context["i"] < ($context["beforevent"] ?? $this->getContext($context, "beforevent")))) {
                            // line 686
                            echo "
                                                <div class=\"progress-bar progress-bar-custom progress-bar-striped\" role=\"progressbar\" aria-valuemax=\"100\"
                                                     style=\"width:11.11111111111111%\">


                                                </div>
                                            ";
                        }
                        // line 693
                        echo "
                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 695
                    echo "
                                        ";
                    // line 696
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(twig_date_format_filter($this->env, $this->getAttribute($context["event"], "startDatetime", array()), "H"), (twig_date_format_filter($this->env, $this->getAttribute($context["event"], "endDatetime", array()), "H") - 1)));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 697
                        echo "

                                            ";
                        // line 699
                        if (($this->getAttribute($this->getAttribute($context["event"], "eventtype", array()), "id", array()) == 4)) {
                            // line 700
                            echo "
                                                <div class=\"progress-bar progress-bar-info\" role=\"progressbar\"
                                                     aria-valuemax=\"100\" style=\"width:11.11111111111111%\">

                                                    U";
                            // line 704
                            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                            echo "

                                                </div>
                                            ";
                        } elseif (($this->getAttribute($this->getAttribute(                        // line 707
$context["event"], "eventtype", array()), "id", array()) == 1)) {
                            // line 708
                            echo "                                                <div class=\"progress-bar progress-bar-warning\" role=\"progressbar\"
                                                     aria-valuemax=\"100\" style=\"width:11.11111111111111%\">
                                                    U";
                            // line 710
                            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                            echo "


                                                </div>
                                            ";
                        } elseif (($this->getAttribute($this->getAttribute(                        // line 714
$context["event"], "eventtype", array()), "id", array()) == 2)) {
                            // line 715
                            echo "
                                                <div class=\"progress-bar progress-bar-success\" role=\"progressbar\"
                                                     aria-valuemax=\"100\" style=\"width:11.11111111111111%\">
                                                    U";
                            // line 718
                            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                            echo "


                                                </div>

                                            ";
                        } elseif (($this->getAttribute($this->getAttribute(                        // line 723
$context["event"], "eventtype", array()), "id", array()) == 3)) {
                            // line 724
                            echo "
                                                <div class=\"progress-bar progress-bar-danger\" role=\"progressbar\"
                                                     aria-valuemax=\"100\" style=\"width:11.11111111111111%\">


                                                </div>

                                            ";
                        }
                        // line 732
                        echo "


                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 736
                    echo "

                                    </div>


                                </td>
                            </tr>

                        ";
                }
                // line 745
                echo "

                        ";
                // line 747
                $context["cdate"] = $this->getAttribute($context["event"], "EventDate", array());
                // line 748
                echo "

                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 751
            echo "
                    </tbody>

                </table>



            ";
        }
        // line 759
        echo "

        </div>


    </div>



";
        
        $__internal_07f406f66de8fc8d12a94d9807eccb123ad6b2010d5d9d51bdc15b5daeeffa2d->leave($__internal_07f406f66de8fc8d12a94d9807eccb123ad6b2010d5d9d51bdc15b5daeeffa2d_prof);

        
        $__internal_7b1d2d47f6eb39624532b3c0fcc26e29709b05845edbdf00f037878aa7be54e7->leave($__internal_7b1d2d47f6eb39624532b3c0fcc26e29709b05845edbdf00f037878aa7be54e7_prof);

    }

    public function getTemplateName()
    {
        return "mainpages/DrawTableView.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1440 => 759,  1430 => 751,  1422 => 748,  1420 => 747,  1416 => 745,  1405 => 736,  1396 => 732,  1386 => 724,  1384 => 723,  1376 => 718,  1371 => 715,  1369 => 714,  1362 => 710,  1358 => 708,  1356 => 707,  1350 => 704,  1344 => 700,  1342 => 699,  1338 => 697,  1334 => 696,  1331 => 695,  1324 => 693,  1315 => 686,  1313 => 685,  1310 => 684,  1306 => 683,  1300 => 679,  1297 => 678,  1294 => 677,  1292 => 676,  1286 => 673,  1281 => 671,  1273 => 666,  1268 => 663,  1256 => 653,  1249 => 651,  1239 => 643,  1237 => 642,  1229 => 637,  1223 => 633,  1221 => 632,  1214 => 628,  1209 => 625,  1207 => 624,  1201 => 621,  1195 => 617,  1193 => 616,  1190 => 615,  1186 => 614,  1183 => 613,  1176 => 611,  1165 => 602,  1163 => 601,  1160 => 600,  1156 => 599,  1150 => 595,  1147 => 594,  1144 => 593,  1142 => 592,  1137 => 590,  1132 => 588,  1128 => 586,  1126 => 585,  1123 => 584,  1119 => 583,  1116 => 582,  1114 => 581,  1108 => 578,  1104 => 577,  1099 => 574,  1097 => 573,  1089 => 567,  1081 => 564,  1079 => 563,  1075 => 561,  1064 => 552,  1057 => 550,  1047 => 542,  1045 => 541,  1037 => 536,  1031 => 532,  1029 => 531,  1022 => 527,  1017 => 524,  1015 => 523,  1009 => 520,  1003 => 516,  1001 => 515,  998 => 514,  994 => 513,  991 => 512,  984 => 510,  973 => 501,  971 => 500,  968 => 499,  964 => 498,  958 => 494,  955 => 493,  952 => 492,  950 => 491,  945 => 489,  937 => 484,  932 => 481,  920 => 471,  913 => 469,  903 => 461,  901 => 460,  893 => 455,  887 => 451,  885 => 450,  878 => 446,  873 => 443,  871 => 442,  865 => 439,  859 => 435,  857 => 434,  854 => 433,  850 => 432,  847 => 431,  840 => 429,  829 => 420,  827 => 419,  824 => 418,  820 => 417,  814 => 413,  811 => 412,  808 => 411,  806 => 410,  801 => 408,  797 => 406,  795 => 405,  792 => 404,  788 => 403,  785 => 402,  783 => 401,  777 => 398,  773 => 397,  769 => 396,  765 => 395,  761 => 393,  759 => 392,  748 => 383,  740 => 380,  738 => 379,  734 => 377,  723 => 368,  716 => 366,  706 => 358,  704 => 357,  696 => 352,  690 => 348,  688 => 347,  681 => 343,  676 => 340,  674 => 339,  668 => 336,  662 => 332,  660 => 331,  657 => 330,  653 => 329,  650 => 328,  643 => 326,  632 => 317,  630 => 316,  627 => 315,  623 => 314,  617 => 310,  614 => 309,  611 => 308,  609 => 307,  604 => 305,  599 => 303,  591 => 298,  586 => 295,  574 => 285,  567 => 283,  557 => 275,  555 => 274,  547 => 269,  541 => 265,  539 => 264,  532 => 260,  527 => 257,  525 => 256,  519 => 253,  513 => 249,  511 => 248,  508 => 247,  504 => 246,  501 => 245,  494 => 243,  483 => 234,  481 => 233,  478 => 232,  474 => 231,  468 => 227,  465 => 226,  462 => 225,  460 => 224,  455 => 222,  450 => 220,  446 => 218,  444 => 217,  441 => 216,  437 => 215,  434 => 214,  432 => 213,  426 => 210,  422 => 209,  418 => 208,  414 => 206,  412 => 205,  403 => 198,  395 => 195,  393 => 194,  389 => 192,  378 => 183,  371 => 181,  361 => 173,  359 => 172,  351 => 167,  345 => 163,  343 => 162,  336 => 158,  331 => 155,  329 => 154,  323 => 151,  317 => 147,  315 => 146,  312 => 145,  308 => 144,  305 => 143,  298 => 141,  287 => 132,  285 => 131,  282 => 130,  278 => 129,  272 => 125,  269 => 124,  266 => 123,  264 => 122,  259 => 120,  251 => 115,  246 => 112,  234 => 102,  227 => 100,  217 => 92,  215 => 91,  207 => 86,  201 => 82,  199 => 81,  192 => 77,  187 => 74,  185 => 73,  179 => 70,  173 => 66,  171 => 65,  168 => 64,  164 => 63,  161 => 62,  154 => 60,  143 => 51,  141 => 50,  138 => 49,  134 => 48,  128 => 44,  125 => 43,  122 => 42,  120 => 41,  115 => 39,  111 => 37,  109 => 36,  106 => 35,  102 => 34,  99 => 33,  97 => 32,  91 => 29,  87 => 28,  83 => 27,  79 => 25,  77 => 24,  67 => 17,  61 => 14,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'ReportLayout.html.twig' %}

{% block body %}
    <div id=\"content\">


        <div class=\"content-inner\">

            <div class=\"row\" style=\"margin-bottom: 10px;\">
                <div class=\"col-lg-12 \">
                    <a href=\"#\" class=\"btn btn-default btn-sm pull-right\" onclick=\"script:window.print();\">
                        <span class=\"glyphicon glyphicon-print\"></span> Print
                    </a>
                    <a href=\"{{ path('search-calendar') }}\" class=\"btn btn-cancel btn-sm\">
                        <span class=\"glyphicon glyphicon-backward\"></span> Zurück
                    </a>
                    <a href=\"{{ path('print_calendar') }}\" class=\"btn btn-default btn-sm\">
                        <span class=\"glyphicon glyphicon-floppy-disk\"></span> PDF
                    </a>
                </div>
            </div>


            {% if dozentname=='' and groupname!='' %}

                <table id=\"report\" class=\"table table-hover table-bordered\">
                    <caption style=\"padding-left:5px; font-size: 16px; color: #3baae3;\"><span style=\"color: #676a6c;\">Gruppe Name:</span> {{ groupname }}
                        <span style=\"color: #676a6c;\">Von Datum :</span>{{ fromdate|deutschDate }}
                        <span style=\"color: #676a6c;\">Bis Datum :</span> {{ enddate|deutschDate }}</caption>
                    <tbody>

                    {% set cdate = '' %}

                    {% for event in events %}

                        {% if event.EventDate ==  cdate %}
                            <tr>
                                <td><span class=\"glyphicon glyphicon-triangle-right\" style=\"color:#3a87ad; \"
                                          aria-hidden=\"true\"></span> {{ event.title }} </td>
                                <td style=\"padding-right: 5px; text-align: right;\">
                                    {% set beforevent= ((event.startDatetime|date('H')-1)) %}
                                    {% set afterevent= (10-(event.endDatetime|date('H'))) %}
                                    {% set eventduration= (event.EventHours) %}


                                    <div class=\"progress\" style=\"width: 200px\">

                                        {% for i in range(0,beforevent) %}

                                            {% if i < beforevent %}

                                                <div class=\"progress-bar progress-bar-custom progress-bar-striped\" role=\"progressbar\" aria-valuemax=\"100\"
                                                     style=\"width:11.11111111111111%\">




                                                </div>
                                            {% endif %}

                                        {% endfor %}

                                        {% for i in range(event.startDatetime|date('H'),event.endDatetime|date('H')-1) %}

                                            {% if event.eventtype.id==4 %}

                                                <div class=\"progress-bar progress-bar-info\" role=\"progressbar\"
                                                     aria-valuemax=\"100\" style=\"width:11.11111111111111%\">

                                                    U{{ i }}

                                                </div>
                                            {% elseif event.eventtype.id==1 %}
                                                <div class=\"progress-bar progress-bar-warning\" role=\"progressbar\"
                                                     aria-valuemax=\"100\" style=\"width:11.11111111111111%\">

                                                    U{{ i }}


                                                </div>
                                            {% elseif event.eventtype.id==2 %}

                                                <div class=\"progress-bar progress-bar-success\" role=\"progressbar\"
                                                     aria-valuemax=\"100\" style=\"width:11.11111111111111%\">

                                                    U{{ i }}


                                                </div>

                                            {% elseif event.eventtype.id==3 %}

                                                <div class=\"progress-bar progress-bar-danger\" role=\"progressbar\"
                                                     aria-valuemax=\"100\" style=\"width:11.11111111111111%\">


                                                </div>

                                            {% endif %}

                                        {% endfor %}


                                    </div>


                                </td>
                            </tr>


                        {% else %}


                            <tr class=\"active\" style=\"page-break-inside:avoid;\">
                                <td colspan=\"2\" style=\"font-size: 16px;\"> {{ event.EventDate|deutschDate }} </td>

                            </tr>
                            <tr>
                                <td><span class=\"glyphicon glyphicon-triangle-right\" style=\"color:#3a87ad; \"
                                          aria-hidden=\"true\"></span> {{ event.title }} </td>
                                <td style=\"padding-right: 5px; text-align: right;\">
                                    {% set beforevent= ((event.startDatetime|date('H')-1)) %}
                                    {% set afterevent= (10-(event.endDatetime|date('H'))) %}
                                    {% set eventduration= (event.EventHours) %}


                                    <div class=\"progress\" style=\"width: 200px\">

                                        {% for i in range(0,beforevent) %}

                                            {% if i < beforevent %}

                                                <div class=\"progress-bar progress-bar-custom progress-bar-striped \" role=\"progressbar\" aria-valuemax=\"100\"
                                                     style=\"width:11.11111111111111%\">




                                                </div>
                                            {% endif %}

                                        {% endfor %}

                                        {% for i in range(event.startDatetime|date('H'),event.endDatetime|date('H')-1) %}

                                            {% if event.eventtype.id==4 %}

                                                <div class=\"progress-bar progress-bar-info\" role=\"progressbar\"
                                                     aria-valuemax=\"100\" style=\"width:11.11111111111111%\">

                                                    U{{ i }}

                                                </div>
                                            {% elseif event.eventtype.id==1 %}
                                                <div class=\"progress-bar progress-bar-warning\" role=\"progressbar\"
                                                     aria-valuemax=\"100\" style=\"width:11.11111111111111%\">

                                                    U{{ i }}


                                                </div>
                                            {% elseif event.eventtype.id==2 %}

                                                <div class=\"progress-bar progress-bar-success\" role=\"progressbar\"
                                                     aria-valuemax=\"100\" style=\"width:11.11111111111111%\">

                                                    U{{ i }}


                                                </div>

                                            {% elseif event.eventtype.id==3 %}

                                                <div class=\"progress-bar progress-bar-danger\" role=\"progressbar\"
                                                     aria-valuemax=\"100\" style=\"width:11.11111111111111%\">


                                                </div>

                                            {% endif %}

                                        {% endfor %}


                                    </div>


                                </td>
                            </tr>

                        {% endif %}


                        {% set cdate= event.EventDate %}


                    {% endfor %}

                    </tbody>

                </table>



            {% elseif dozentname!='' and groupname=='' %}

                <table id=\"report\" class=\"table table-hover table-bordered\">
                    <caption style=\"padding-left:5px; font-size: 16px; color: #3baae3;\"><span style=\"color: #676a6c;\">Dozent Name:</span> {{ dozentname }}
                        <span style=\"color: #676a6c;\">Von Datum :</span>{{ fromdate|deutschDate }}
                        <span style=\"color: #676a6c;\">Bis Datum :</span> {{ enddate|deutschDate }}</caption>
                    <tbody>

                    {% set cdate = '' %}

                    {% for event in events %}

                        {% if event.EventDate ==  cdate %}
                            <tr>
                                <td><span class=\"glyphicon glyphicon-triangle-right\" style=\"color:#3a87ad; \"
                                          aria-hidden=\"true\"></span> {{ event.EinzelFach }} </td>
                                <td><span class=\"glyphicon glyphicon-triangle-right\" style=\"color:rgba(217, 83, 79, 0.86); \"
                                          aria-hidden=\"true\"></span> {{ event.SchuleGroup }} </td>
                                <td style=\"padding-right: 5px; text-align: right;\">
                                    {% set beforevent= ((event.startDatetime|date('H')-1)) %}
                                    {% set afterevent= (10-(event.endDatetime|date('H'))) %}
                                    {% set eventduration= (event.EventHours) %}


                                    <div class=\"progress\" style=\"width: 200px\">

                                        {% for i in range(0,beforevent) %}

                                            {% if i < beforevent %}

                                                <div class=\"progress-bar progress-bar-custom progress-bar-striped \" role=\"progressbar\" aria-valuemax=\"100\"
                                                     style=\"width:11.11111111111111%\">




                                                </div>
                                            {% endif %}

                                        {% endfor %}

                                        {% for i in range(event.startDatetime|date('H'),event.endDatetime|date('H')-1) %}

                                            {% if event.eventtype.id==4 %}

                                                <div class=\"progress-bar progress-bar-info\" role=\"progressbar\"
                                                     aria-valuemax=\"100\" style=\"width:11.11111111111111%\">

                                                    U{{ i }}

                                                </div>
                                            {% elseif event.eventtype.id==1 %}
                                                <div class=\"progress-bar progress-bar-warning\" role=\"progressbar\"
                                                     aria-valuemax=\"100\" style=\"width:11.11111111111111%\">

                                                    U{{ i }}


                                                </div>
                                            {% elseif event.eventtype.id==2 %}

                                                <div class=\"progress-bar progress-bar-success\" role=\"progressbar\"
                                                     aria-valuemax=\"100\" style=\"width:11.11111111111111%\">

                                                    U{{ i }}


                                                </div>

                                            {% elseif event.eventtype.id==3 %}

                                                <div class=\"progress-bar progress-bar-danger\" role=\"progressbar\"
                                                     aria-valuemax=\"100\" style=\"width:11.11111111111111%\">


                                                </div>

                                            {% endif %}

                                        {% endfor %}


                                    </div>


                                </td>
                            </tr>


                        {% else %}


                            <tr class=\"active\">
                                <td colspan=\"3\" style=\"font-size: 16px;\"> {{ event.EventDate|deutschDate }} </td>

                            </tr>
                            <tr>
                                <td><span class=\"glyphicon glyphicon-triangle-right\" style=\"color:#3a87ad; \"
                                          aria-hidden=\"true\"></span> {{ event.EinzelFach }} </td>
                                <td><span class=\"glyphicon glyphicon-triangle-right\" style=\"color:rgba(217, 83, 79, 0.86); \"
                                          aria-hidden=\"true\"></span> {{ event.SchuleGroup }} </td>
                                <td style=\"padding-right: 5px; text-align: right;\">
                                    {% set beforevent= ((event.startDatetime|date('H')-1)) %}
                                    {% set afterevent= (10-(event.endDatetime|date('H'))) %}
                                    {% set eventduration= (event.EventHours) %}


                                    <div class=\"progress\" style=\"width: 200px\">

                                        {% for i in range(0,beforevent) %}

                                            {% if i < beforevent %}

                                                <div class=\"progress-bar progress-bar-custom progress-bar-striped \" role=\"progressbar\" aria-valuemax=\"100\"
                                                     style=\"width:11.11111111111111%\">




                                                </div>
                                            {% endif %}

                                        {% endfor %}

                                        {% for i in range(event.startDatetime|date('H'),event.endDatetime|date('H')-1) %}

                                            {% if event.eventtype.id==4 %}

                                                <div class=\"progress-bar progress-bar-info\" role=\"progressbar\"
                                                     aria-valuemax=\"100\" style=\"width:11.11111111111111%\">

                                                    U{{ i }}

                                                </div>
                                            {% elseif event.eventtype.id==1 %}
                                                <div class=\"progress-bar progress-bar-warning\" role=\"progressbar\"
                                                     aria-valuemax=\"100\" style=\"width:11.11111111111111%\">

                                                    U{{ i }}


                                                </div>
                                            {% elseif event.eventtype.id==2 %}

                                                <div class=\"progress-bar progress-bar-success\" role=\"progressbar\"
                                                     aria-valuemax=\"100\" style=\"width:11.11111111111111%\">

                                                    U{{ i }}


                                                </div>

                                            {% elseif event.eventtype.id==3 %}

                                                <div class=\"progress-bar progress-bar-danger\" role=\"progressbar\"
                                                     aria-valuemax=\"100\" style=\"width:11.11111111111111%\">


                                                </div>

                                            {% endif %}

                                        {% endfor %}


                                    </div>


                                </td>
                            </tr>

                        {% endif %}


                        {% set cdate= event.EventDate %}


                    {% endfor %}

                    </tbody>

                </table>





            {% elseif dozentname!='' and groupname!='' %}

                <table id=\"report\" class=\"table table-hover table-bordered\">
                    <caption style=\"padding-left:5px; font-size: 16px; color: #3baae3;\"><span style=\"color: #676a6c;\">Dozent Name:</span> {{ dozentname }}
                        <span style=\"color: #676a6c;\"> ,Gruppe Name</span> {{ groupname }}
                        <span style=\"color: #676a6c;\">Von Datum :</span>{{ fromdate|deutschDate }}
                        <span style=\"color: #676a6c;\">Bis Datum :</span> {{ enddate|deutschDate }}</caption>
                    <tbody>

                    {% set cdate = '' %}

                    {% for event in events %}

                        {% if event.EventDate ==  cdate %}
                            <tr>
                                <td><span class=\"glyphicon glyphicon-triangle-right\" style=\"color:#3a87ad; \"
                                          aria-hidden=\"true\"></span> {{ event.EinzelFach }} </td>
                                <td style=\"padding-right: 5px; text-align: right;\">
                                    {% set beforevent= ((event.startDatetime|date('H')-1)) %}
                                    {% set afterevent= (10-(event.endDatetime|date('H'))) %}
                                    {% set eventduration= (event.EventHours) %}


                                    <div class=\"progress\" style=\"width: 200px\">

                                        {% for i in range(0,beforevent) %}

                                            {% if i < beforevent %}

                                                <div class=\"progress-bar progress-bar-custom progress-bar-striped\" role=\"progressbar\" aria-valuemax=\"100\"
                                                     style=\"width:11.11111111111111%\">




                                                </div>
                                            {% endif %}

                                        {% endfor %}

                                        {% for i in range(event.startDatetime|date('H'),event.endDatetime|date('H')-1) %}

                                            {% if event.eventtype.id==4 %}

                                                <div class=\"progress-bar progress-bar-info\" role=\"progressbar\"
                                                     aria-valuemax=\"100\" style=\"width:11.11111111111111%\">

                                                    U{{ i }}

                                                </div>
                                            {% elseif event.eventtype.id==1 %}
                                                <div class=\"progress-bar progress-bar-warning\" role=\"progressbar\"
                                                     aria-valuemax=\"100\" style=\"width:11.11111111111111%\">

                                                    U{{ i }}


                                                </div>
                                            {% elseif event.eventtype.id==2 %}

                                                <div class=\"progress-bar progress-bar-success\" role=\"progressbar\"
                                                     aria-valuemax=\"100\" style=\"width:11.11111111111111%\">

                                                    U{{ i }}


                                                </div>

                                            {% elseif event.eventtype.id==3 %}

                                                <div class=\"progress-bar progress-bar-danger\" role=\"progressbar\"
                                                     aria-valuemax=\"100\" style=\"width:11.11111111111111%\">


                                                </div>

                                            {% endif %}

                                        {% endfor %}


                                    </div>


                                </td>
                            </tr>


                        {% else %}


                            <tr class=\"active\">
                                <td colspan=\"2\" style=\"font-size: 16px;\"> {{ event.EventDate|deutschDate }} </td>

                            </tr>
                            <tr>
                                <td><span class=\"glyphicon glyphicon-triangle-right\" style=\"color:#3a87ad; \"
                                          aria-hidden=\"true\"></span> {{ event.EinzelFach }} </td>
                                <td style=\"padding-right: 5px; text-align: right;\">
                                    {% set beforevent= ((event.startDatetime|date('H')-1)) %}
                                    {% set afterevent= (10-(event.endDatetime|date('H'))) %}
                                    {% set eventduration= (event.EventHours) %}


                                    <div class=\"progress\" style=\"width: 200px\">

                                        {% for i in range(0,beforevent) %}

                                            {% if i < beforevent %}

                                                <div class=\"progress-bar progress-bar-custom progress-bar-striped\" role=\"progressbar\" aria-valuemax=\"100\"
                                                     style=\"width:11.11111111111111%\">




                                                </div>
                                            {% endif %}

                                        {% endfor %}

                                        {% for i in range(event.startDatetime|date('H'),event.endDatetime|date('H')-1) %}

                                            {% if event.eventtype.id==4 %}

                                                <div class=\"progress-bar progress-bar-info\" role=\"progressbar\"
                                                     aria-valuemax=\"100\" style=\"width:11.11111111111111%\">

                                                    U{{ i }}

                                                </div>
                                            {% elseif event.eventtype.id==1 %}
                                                <div class=\"progress-bar progress-bar-warning\" role=\"progressbar\"
                                                     aria-valuemax=\"100\" style=\"width:11.11111111111111%\">

                                                    U{{ i }}


                                                </div>
                                            {% elseif event.eventtype.id==2 %}

                                                <div class=\"progress-bar progress-bar-success\" role=\"progressbar\"
                                                     aria-valuemax=\"100\" style=\"width:11.11111111111111%\">

                                                    U{{ i }}


                                                </div>

                                            {% elseif event.eventtype.id==3 %}

                                                <div class=\"progress-bar progress-bar-danger\" role=\"progressbar\"
                                                     aria-valuemax=\"100\" style=\"width:11.11111111111111%\">


                                                </div>

                                            {% endif %}

                                        {% endfor %}


                                    </div>


                                </td>
                            </tr>

                        {% endif %}


                        {% set cdate= event.EventDate %}


                    {% endfor %}

                    </tbody>

                </table>


            {% elseif dozentname=='' and groupname=='' %}

                <table id=\"report\" class=\"table table-hover table-bordered\">
                    <caption style=\"padding-left:5px; font-size: 16px; color: #3baae3;\"><span style=\"color: #676a6c;\">Stunden Plan :</span>
                        <span style=\"color: #676a6c;\">Von Datum :</span>{{ fromdate|deutschDate }}
                        <span style=\"color: #676a6c;\">Bis Datum :</span> {{ enddate|deutschDate }}</caption>
                    <tbody>

                    {% set cdate = '' %}

                    {% for event in events %}

                        {% if event.EventDate ==  cdate %}
                            <tr style=\"page-break-inside: avoid; \">
                                <td><span class=\"glyphicon glyphicon-triangle-right\" style=\"color:#3a87ad; \"
                                          aria-hidden=\"true\"></span> {{ event.title }} </td>
                                <td><span class=\"glyphicon glyphicon-triangle-right\" style=\"color:rgba(217, 83, 79, 0.86); \"
                                          aria-hidden=\"true\"></span> {{ event.SchuleGroup }} </td>
                                <td style=\"padding-right: 5px; text-align: right;\">
                                    {% set beforevent= ((event.startDatetime|date('H')-1)) %}
                                    {% set afterevent= (10-(event.endDatetime|date('H'))) %}
                                    {% set eventduration= (event.EventHours) %}


                                    <div class=\"progress\" style=\"width: 200px\">

                                        {% for i in range(0,beforevent) %}

                                            {% if i < beforevent %}

                                                <div class=\"progress-bar progress-bar-custom progress-bar-striped\" role=\"progressbar\" aria-valuemax=\"100\"
                                                     style=\"width:11.11111111111111%\">




                                                </div>
                                            {% endif %}

                                        {% endfor %}

                                        {% for i in range(event.startDatetime|date('H'),event.endDatetime|date('H')-1) %}

                                            {% if event.eventtype.id==4 %}

                                                <div class=\"progress-bar progress-bar-info\" role=\"progressbar\"
                                                     aria-valuemax=\"100\" style=\"width:11.11111111111111%\">

                                                    U{{ i }}

                                                </div>
                                            {% elseif event.eventtype.id==1 %}
                                                <div class=\"progress-bar progress-bar-warning\" role=\"progressbar\"
                                                     aria-valuemax=\"100\" style=\"width:11.11111111111111%\">

                                                    U{{ i }}


                                                </div>
                                            {% elseif event.eventtype.id==2 %}

                                                <div class=\"progress-bar progress-bar-success\" role=\"progressbar\"
                                                     aria-valuemax=\"100\" style=\"width:11.11111111111111%\">

                                                    U{{ i }}


                                                </div>

                                            {% elseif event.eventtype.id==3 %}

                                                <div class=\"progress-bar progress-bar-danger\" role=\"progressbar\"
                                                     aria-valuemax=\"100\" style=\"width:11.11111111111111%\">


                                                </div>

                                            {% endif %}

                                        {% endfor %}


                                    </div>


                                </td>
                            </tr>


                        {% else %}


                            <tr class=\"active\" style=\"page-break-inside: avoid; \">
                                <td colspan=\"3\" style=\"font-size: 16px;\"> {{ event.EventDate|deutschDate }} </td>

                            </tr>
                            <tr style=\"page-break-inside: avoid; \">
                                <td><span class=\"glyphicon glyphicon-triangle-right\" style=\"color:#3a87ad; \"
                                          aria-hidden=\"true\"></span> {{ event.title }}  </td>
                                <td><span class=\"glyphicon glyphicon-triangle-right\" style=\"color:rgba(217, 83, 79, 0.86); \"
                                          aria-hidden=\"true\"></span> {{ event.SchuleGroup }} </td>

                                <td style=\"padding-right: 5px; text-align: right;\">
                                    {% set beforevent= ((event.startDatetime|date('H')-1)) %}
                                    {% set afterevent= (10-(event.endDatetime|date('H'))) %}
                                    {% set eventduration= (event.EventHours) %}


                                    <div class=\"progress\" style=\"width: 200px\">

                                        {% for i in range(0,beforevent) %}

                                            {% if i < beforevent %}

                                                <div class=\"progress-bar progress-bar-custom progress-bar-striped\" role=\"progressbar\" aria-valuemax=\"100\"
                                                     style=\"width:11.11111111111111%\">


                                                </div>
                                            {% endif %}

                                        {% endfor %}

                                        {% for i in range(event.startDatetime|date('H'),event.endDatetime|date('H')-1) %}


                                            {% if event.eventtype.id==4 %}

                                                <div class=\"progress-bar progress-bar-info\" role=\"progressbar\"
                                                     aria-valuemax=\"100\" style=\"width:11.11111111111111%\">

                                                    U{{ i }}

                                                </div>
                                            {% elseif event.eventtype.id==1 %}
                                                <div class=\"progress-bar progress-bar-warning\" role=\"progressbar\"
                                                     aria-valuemax=\"100\" style=\"width:11.11111111111111%\">
                                                    U{{ i }}


                                                </div>
                                            {% elseif event.eventtype.id==2 %}

                                                <div class=\"progress-bar progress-bar-success\" role=\"progressbar\"
                                                     aria-valuemax=\"100\" style=\"width:11.11111111111111%\">
                                                    U{{ i }}


                                                </div>

                                            {% elseif event.eventtype.id==3 %}

                                                <div class=\"progress-bar progress-bar-danger\" role=\"progressbar\"
                                                     aria-valuemax=\"100\" style=\"width:11.11111111111111%\">


                                                </div>

                                            {% endif %}



                                        {% endfor %}


                                    </div>


                                </td>
                            </tr>

                        {% endif %}


                        {% set cdate= event.EventDate %}


                    {% endfor %}

                    </tbody>

                </table>



            {% endif %}


        </div>


    </div>



{% endblock %}

", "mainpages/DrawTableView.html.twig", "/root/Schreibtisch/devops/app/Resources/views/mainpages/DrawTableView.html.twig");
    }
}
