<?php

/* SgDatatablesBundle:datatable:search.js.twig */
class __TwigTemplate_96c3882cb44c05412862214dd3f2195fbdd006391d72d2e9a631e2094e5f03ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e6c5d0d806aec1996a540f38d1c3789fcbd60a5b9d3ee1a0f50d1f5a2e079d44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6c5d0d806aec1996a540f38d1c3789fcbd60a5b9d3ee1a0f50d1f5a2e079d44->enter($__internal_e6c5d0d806aec1996a540f38d1c3789fcbd60a5b9d3ee1a0f50d1f5a2e079d44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:datatable:search.js.twig"));

        $__internal_772937348ef11cf88d79f2261a0b7dd1e0269e73d7e343828efb5f63271b17cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_772937348ef11cf88d79f2261a0b7dd1e0269e73d7e343828efb5f63271b17cd->enter($__internal_772937348ef11cf88d79f2261a0b7dd1e0269e73d7e343828efb5f63271b17cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:datatable:search.js.twig"));

        // line 9
        echo "function drawTable() {
    ";
        // line 10
        if (($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "ajax", array()), "pipeline", array()) > 0)) {
            // line 11
            echo "        oTable.clearPipeline().draw();
    ";
        } else {
            // line 13
            echo "        oTable.draw();
    ";
        }
        // line 15
        echo "}

var search = \$.fn.dataTable.util.throttle(
        function(event) {
            if (event.type == \"keyup\") {
                if (
                        event.keyCode == 37 ||
                        event.keyCode == 38 ||
                        event.keyCode == 39 ||
                        event.keyCode == 40 ||
                        event.keyCode == 16 ||
                        event.keyCode == 17 ||
                        event.keyCode == 18
                )
                    return;
            }

            oTable
                    .column(\$(event.currentTarget).data(\"search-column-index\"))
                    .search(\$(this).val());
            drawTable();
        },
        options.searchDelay
);

\$(selector).find(\"tr input.sg-datatables-individual-filtering\").on(\"keyup change\", search);

\$(selector).find(\"tr select.sg-datatables-individual-filtering\").on(\"keyup change\", function(event) {
    var searchValue = \$(this).val();
    searchValue = searchValue ? searchValue.toString() : '';
    oTable
            .column(\$(event.currentTarget).data(\"search-column-index\"))
            .search(searchValue);
    drawTable();
});
";
        
        $__internal_e6c5d0d806aec1996a540f38d1c3789fcbd60a5b9d3ee1a0f50d1f5a2e079d44->leave($__internal_e6c5d0d806aec1996a540f38d1c3789fcbd60a5b9d3ee1a0f50d1f5a2e079d44_prof);

        
        $__internal_772937348ef11cf88d79f2261a0b7dd1e0269e73d7e343828efb5f63271b17cd->leave($__internal_772937348ef11cf88d79f2261a0b7dd1e0269e73d7e343828efb5f63271b17cd_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:datatable:search.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 15,  34 => 13,  30 => 11,  28 => 10,  25 => 9,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{##
 # This file is part of the SgDatatablesBundle package.
 #
 # (c) stwe <https://github.com/stwe/DatatablesBundle>
 #
 # For the full copyright and license information, please view the LICENSE
 # file that was distributed with this source code.
 #}
function drawTable() {
    {% if sg_datatables_view.ajax.pipeline > 0 %}
        oTable.clearPipeline().draw();
    {% else %}
        oTable.draw();
    {% endif %}
}

var search = \$.fn.dataTable.util.throttle(
        function(event) {
            if (event.type == \"keyup\") {
                if (
                        event.keyCode == 37 ||
                        event.keyCode == 38 ||
                        event.keyCode == 39 ||
                        event.keyCode == 40 ||
                        event.keyCode == 16 ||
                        event.keyCode == 17 ||
                        event.keyCode == 18
                )
                    return;
            }

            oTable
                    .column(\$(event.currentTarget).data(\"search-column-index\"))
                    .search(\$(this).val());
            drawTable();
        },
        options.searchDelay
);

\$(selector).find(\"tr input.sg-datatables-individual-filtering\").on(\"keyup change\", search);

\$(selector).find(\"tr select.sg-datatables-individual-filtering\").on(\"keyup change\", function(event) {
    var searchValue = \$(this).val();
    searchValue = searchValue ? searchValue.toString() : '';
    oTable
            .column(\$(event.currentTarget).data(\"search-column-index\"))
            .search(searchValue);
    drawTable();
});
", "SgDatatablesBundle:datatable:search.js.twig", "/root/Schreibtisch/devops/vendor/sg/datatablesbundle/Resources/views/datatable/search.js.twig");
    }
}
