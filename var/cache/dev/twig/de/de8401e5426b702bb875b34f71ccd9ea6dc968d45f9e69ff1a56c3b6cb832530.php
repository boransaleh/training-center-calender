<?php

/* SgDatatablesBundle:render:column.html.twig */
class __TwigTemplate_070a35cca7e2c779218eb7e9f213acf74f69aa63b1eee0fb5bfbc217867d0d0e extends Twig_Template
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
        $__internal_85b10ea319a8ac572c29d711d7320997852cc5746d42baa6772f0f176efbf2a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85b10ea319a8ac572c29d711d7320997852cc5746d42baa6772f0f176efbf2a5->enter($__internal_85b10ea319a8ac572c29d711d7320997852cc5746d42baa6772f0f176efbf2a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:render:column.html.twig"));

        $__internal_b45f44007d77439b5a68ee8e11a02277dde63ef32d7643f1991b087489730539 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b45f44007d77439b5a68ee8e11a02277dde63ef32d7643f1991b087489730539->enter($__internal_b45f44007d77439b5a68ee8e11a02277dde63ef32d7643f1991b087489730539_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:render:column.html.twig"));

        // line 9
        echo "<span class=\"";
        echo twig_escape_filter($this->env, ($context["column_class_editable_selector"] ?? $this->getContext($context, "column_class_editable_selector")), "html", null, true);
        echo "\" data-pk=\"";
        echo twig_escape_filter($this->env, ($context["pk"] ?? $this->getContext($context, "pk")), "html", null, true);
        echo "\" ";
        if ( !(($context["path"] ?? $this->getContext($context, "path")) === null)) {
            echo "data-path=\"";
            echo twig_escape_filter($this->env, ($context["path"] ?? $this->getContext($context, "path")), "html", null, true);
            echo "\"";
        }
        echo ">
    ";
        // line 10
        echo twig_escape_filter($this->env, ($context["data"] ?? $this->getContext($context, "data")), "html", null, true);
        echo "
</span>
";
        
        $__internal_85b10ea319a8ac572c29d711d7320997852cc5746d42baa6772f0f176efbf2a5->leave($__internal_85b10ea319a8ac572c29d711d7320997852cc5746d42baa6772f0f176efbf2a5_prof);

        
        $__internal_b45f44007d77439b5a68ee8e11a02277dde63ef32d7643f1991b087489730539->leave($__internal_b45f44007d77439b5a68ee8e11a02277dde63ef32d7643f1991b087489730539_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:render:column.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 10,  25 => 9,);
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
<span class=\"{{ column_class_editable_selector }}\" data-pk=\"{{ pk }}\" {% if path is not same as(null) %}data-path=\"{{ path }}\"{% endif %}>
    {{ data }}
</span>
", "SgDatatablesBundle:render:column.html.twig", "/root/Schreibtisch/devops/vendor/sg/datatablesbundle/Resources/views/render/column.html.twig");
    }
}
