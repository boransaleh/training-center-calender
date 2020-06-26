<?php

/* SgDatatablesBundle:datatable:language.html.twig */
class __TwigTemplate_639bb2b6780810a3c028ef9a64abb4504a7a3582b1b67a939175bc6007e982bf extends Twig_Template
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
        $__internal_90372941ef1a1249f1429fad0adcac8114746488ea83383d562adc52efa30c58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90372941ef1a1249f1429fad0adcac8114746488ea83383d562adc52efa30c58->enter($__internal_90372941ef1a1249f1429fad0adcac8114746488ea83383d562adc52efa30c58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:datatable:language.html.twig"));

        $__internal_dcfc6f50e9d852170a005d176ab9dc63252e4d9d0227e1225573a5d98ab45dd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcfc6f50e9d852170a005d176ab9dc63252e4d9d0227e1225573a5d98ab45dd2->enter($__internal_dcfc6f50e9d852170a005d176ab9dc63252e4d9d0227e1225573a5d98ab45dd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:datatable:language.html.twig"));

        // line 1
        if (($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "language", array()), "language", array()) === null)) {
            // line 2
            echo "    ";
            if (($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "language", array()), "cdnLanguageByLocale", array()) === true)) {
                // line 3
                echo "        \"language\": {
            \"url\": \"";
                // line 4
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "language", array()), "languageCDNFile", array()), twig_slice($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "locale", array()), 0, 2), array(), "array"), "datatables_cdn"), "html", null, true);
                echo "\"
        }
    ";
            }
            // line 7
            echo "
    ";
            // line 8
            if (($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "language", array()), "languageByLocale", array()) === true)) {
                // line 9
                echo "        \"language\":
            ";
                // line 10
                $this->loadTemplate((("SgDatatablesBundle:i18n:" . twig_slice($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "locale", array()), 0, 2)) . ".json.twig"), "SgDatatablesBundle:datatable:language.html.twig", 10)->display($context);
                // line 11
                echo "    ";
            }
        } else {
            // line 13
            echo "    \"language\":
        ";
            // line 14
            $this->loadTemplate((("SgDatatablesBundle:i18n:" . twig_slice($this->env, $this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "language", array()), "language", array()), 0, 2)) . ".json.twig"), "SgDatatablesBundle:datatable:language.html.twig", 14)->display($context);
        }
        
        $__internal_90372941ef1a1249f1429fad0adcac8114746488ea83383d562adc52efa30c58->leave($__internal_90372941ef1a1249f1429fad0adcac8114746488ea83383d562adc52efa30c58_prof);

        
        $__internal_dcfc6f50e9d852170a005d176ab9dc63252e4d9d0227e1225573a5d98ab45dd2->leave($__internal_dcfc6f50e9d852170a005d176ab9dc63252e4d9d0227e1225573a5d98ab45dd2_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:datatable:language.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 14,  53 => 13,  49 => 11,  47 => 10,  44 => 9,  42 => 8,  39 => 7,  33 => 4,  30 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if sg_datatables_view.language.language is same as(null) %}
    {% if sg_datatables_view.language.cdnLanguageByLocale is same as(true) %}
        \"language\": {
            \"url\": \"{{ asset(sg_datatables_view.language.languageCDNFile[app.request.locale|slice(0, 2)], 'datatables_cdn') }}\"
        }
    {% endif %}

    {% if sg_datatables_view.language.languageByLocale is same as(true) %}
        \"language\":
            {% include 'SgDatatablesBundle:i18n:' ~ app.request.locale|slice(0, 2) ~ '.json.twig' %}
    {% endif %}
{% else %}
    \"language\":
        {% include 'SgDatatablesBundle:i18n:' ~ sg_datatables_view.language.language|slice(0, 2) ~ '.json.twig' %}
{% endif %}
", "SgDatatablesBundle:datatable:language.html.twig", "/root/Schreibtisch/devops/vendor/sg/datatablesbundle/Resources/views/datatable/language.html.twig");
    }
}
