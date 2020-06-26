<?php

/* SgDatatablesBundle:filter:input.html.twig */
class __TwigTemplate_e4f61993a65b43285eecf7c4a5fe6411f003cd2f168c7845808809104e7c4794 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'html' => array($this, 'block_html'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_272b56d1a9a183bcd86e8080a50d180a10a1d8b4e4c84318b0b897ec5a141a2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_272b56d1a9a183bcd86e8080a50d180a10a1d8b4e4c84318b0b897ec5a141a2a->enter($__internal_272b56d1a9a183bcd86e8080a50d180a10a1d8b4e4c84318b0b897ec5a141a2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:filter:input.html.twig"));

        $__internal_3fef76d5c08e836927d4ff9b6a1b5001e675767aade8f790f2d98132c49d86df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fef76d5c08e836927d4ff9b6a1b5001e675767aade8f790f2d98132c49d86df->enter($__internal_3fef76d5c08e836927d4ff9b6a1b5001e675767aade8f790f2d98132c49d86df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:filter:input.html.twig"));

        // line 9
        ob_start();
        // line 10
        echo "    type=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "filter", array()), "type", array()), "html", null, true);
        echo "\"
";
        $context["filter_input_type"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 13
        ob_start();
        // line 14
        echo "sg-datatables-";
        echo twig_escape_filter($this->env, ($context["datatable_name"] ?? $this->getContext($context, "datatable_name")), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, ($context["position"] ?? $this->getContext($context, "position")), "html", null, true);
        echo "-filter-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "index", array()), "html", null, true);
        $context["filter_id_selector"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 17
        ob_start();
        // line 18
        echo "id=\"";
        echo twig_escape_filter($this->env, ($context["filter_id_selector"] ?? $this->getContext($context, "filter_id_selector")), "html", null, true);
        echo "\"";
        $context["filter_selector"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 21
        ob_start();
        // line 22
        echo "    class=\"sg-datatables-individual-filtering form-control input-sm";
        if ( !($this->getAttribute($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "filter", array()), "classes", array()) === null)) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "filter", array()), "classes", array()), "html", null, true);
        }
        echo "\"
";
        $context["filter_classes"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 24
        echo "
";
        // line 25
        ob_start();
        // line 26
        echo "    ";
        if ( !($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "width", array()) === null)) {
            echo "style=\"width:";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "width", array()), "html", null, true);
            echo ";\"";
        }
        $context["filter_width"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 28
        echo "
";
        // line 29
        ob_start();
        // line 30
        echo "    ";
        if (($this->getAttribute($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "filter", array()), "placeholder", array()) === true)) {
            // line 31
            echo "        placeholder=\"";
            if ( !($this->getAttribute($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "filter", array()), "placeholderText", array()) === null)) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "filter", array()), "placeholderText", array()), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, twig_trim_filter(strip_tags($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "title", array()))), "html", null, true);
            }
            echo "\"
    ";
        }
        $context["filter_input_placeholder"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 34
        echo "
";
        // line 35
        ob_start();
        // line 36
        echo "    data-search-column-index=\"";
        echo twig_escape_filter($this->env, ($context["search_column_index"] ?? $this->getContext($context, "search_column_index")), "html", null, true);
        echo "\"
";
        $context["filter_search_column_index"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 38
        echo "
";
        // line 39
        ob_start();
        // line 40
        echo "    ";
        if ( !($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "name", array()) === null)) {
            echo "name=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "name", array()), "html", null, true);
            echo "\"";
        }
        $context["filter_column_name"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 42
        echo "
";
        // line 43
        ob_start();
        // line 44
        echo "    ";
        if ((("number" == $this->getAttribute($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "filter", array()), "type", array())) || ("range" == $this->getAttribute($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "filter", array()), "type", array())))) {
            // line 45
            echo "        min=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "filter", array()), "min", array()), "html", null, true);
            echo "\" max=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "filter", array()), "max", array()), "html", null, true);
            echo "\" step=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "filter", array()), "step", array()), "html", null, true);
            echo "\"
    ";
        }
        $context["filter_input_minmax"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 48
        echo "
";
        // line 49
        ob_start();
        // line 50
        echo "    ";
        if ((("number" == $this->getAttribute($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "filter", array()), "type", array())) || ("range" == $this->getAttribute($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "filter", array()), "type", array())))) {
            // line 51
            echo "        ";
            if ( !($this->getAttribute($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "filter", array()), "datalist", array()) === null)) {
                // line 52
                echo "            list=\"";
                echo twig_escape_filter($this->env, ($context["filter_id_selector"] ?? $this->getContext($context, "filter_id_selector")), "html", null, true);
                echo "-datalist\"
        ";
            }
            // line 54
            echo "    ";
        }
        $context["filter_input_datalist"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 56
        echo "
";
        // line 57
        ob_start();
        // line 58
        echo "    ";
        if ($this->getAttribute($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "filter", array()), "initialSearch", array())) {
            echo "value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "filter", array()), "initialSearch", array()), "html", null, true);
            echo "\"";
        }
        $context["filter_input_initial_search"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 60
        echo "
";
        // line 61
        ob_start();
        // line 62
        echo "    ";
        if ((("number" == $this->getAttribute($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "filter", array()), "type", array())) || ("range" == $this->getAttribute($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "filter", array()), "type", array())))) {
            // line 63
            echo "        ";
            if ( !($this->getAttribute($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "filter", array()), "datalist", array()) === null)) {
                // line 64
                echo "            <datalist id=\"";
                echo twig_escape_filter($this->env, ($context["filter_id_selector"] ?? $this->getContext($context, "filter_id_selector")), "html", null, true);
                echo "-datalist\">
                ";
                // line 65
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "filter", array()), "datalist", array()));
                foreach ($context['_seq'] as $context["key"] => $context["name"]) {
                    // line 66
                    echo "                    <option>";
                    echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                    echo "</option>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['name'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 68
                echo "            </datalist>
        ";
            }
            // line 70
            echo "    ";
        }
        $context["filter_input_datalist_values"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 73
        ob_start();
        // line 74
        echo "sg-datatables-";
        echo twig_escape_filter($this->env, ($context["datatable_name"] ?? $this->getContext($context, "datatable_name")), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, ($context["position"] ?? $this->getContext($context, "position")), "html", null, true);
        echo "-filter-cancel-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "index", array()), "html", null, true);
        $context["cancel_button_id_selector"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 77
        ob_start();
        // line 78
        echo "    ";
        if (($this->getAttribute($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "filter", array()), "cancelButton", array()) === true)) {
            // line 79
            echo "        <button type=\"button\"
                id=\"";
            // line 80
            echo twig_escape_filter($this->env, ($context["cancel_button_id_selector"] ?? $this->getContext($context, "cancel_button_id_selector")), "html", null, true);
            echo "\"
                class=\"btn btn-default btn-xs\"
        >&times;</button>
    ";
        }
        $context["cancel_button_html"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 85
        echo "
";
        // line 86
        ob_start();
        // line 87
        echo "    ";
        if ((("number" == $this->getAttribute($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "filter", array()), "type", array())) || ("range" == $this->getAttribute($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "filter", array()), "type", array())))) {
            // line 88
            echo "        ";
            if (($this->getAttribute($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "filter", array()), "showLabel", array()) === true)) {
                // line 89
                echo "            <span id=\"";
                echo twig_escape_filter($this->env, ($context["filter_id_selector"] ?? $this->getContext($context, "filter_id_selector")), "html", null, true);
                echo "-range-label\"></span>
        ";
            }
            // line 91
            echo "    ";
        }
        $context["filter_input_range_label_html"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 93
        echo "
";
        // line 94
        ob_start();
        // line 95
        echo "    ";
        if (($this->getAttribute($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "filter", array()), "cancelButton", array()) === true)) {
            // line 96
            echo "        <script type=\"text/javascript\">
            \$(\"#";
            // line 97
            echo twig_escape_filter($this->env, ($context["cancel_button_id_selector"] ?? $this->getContext($context, "cancel_button_id_selector")), "html", null, true);
            echo "\").click(function() {
                if ('' != \$(\"#";
            // line 98
            echo twig_escape_filter($this->env, ($context["filter_id_selector"] ?? $this->getContext($context, "filter_id_selector")), "html", null, true);
            echo "\").val()) {
                    \$(\"#";
            // line 99
            echo twig_escape_filter($this->env, ($context["filter_id_selector"] ?? $this->getContext($context, "filter_id_selector")), "html", null, true);
            echo "\")
                        .val('')
                        .change();
                }
            });
        </script>
    ";
        }
        $context["cancel_button_js"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 107
        echo "
";
        // line 108
        ob_start();
        // line 109
        echo "    ";
        if ((("number" == $this->getAttribute($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "filter", array()), "type", array())) || ("range" == $this->getAttribute($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "filter", array()), "type", array())))) {
            // line 110
            echo "        ";
            if (($this->getAttribute($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "filter", array()), "showLabel", array()) === true)) {
                // line 111
                echo "            <script type=\"text/javascript\">
                var interval;

                \$(\"#";
                // line 114
                echo twig_escape_filter($this->env, ($context["filter_id_selector"] ?? $this->getContext($context, "filter_id_selector")), "html", null, true);
                echo "-range-label\").html(\$(\"#";
                echo twig_escape_filter($this->env, ($context["filter_id_selector"] ?? $this->getContext($context, "filter_id_selector")), "html", null, true);
                echo "\").val());

                \$(\"#";
                // line 116
                echo twig_escape_filter($this->env, ($context["filter_id_selector"] ?? $this->getContext($context, "filter_id_selector")), "html", null, true);
                echo "\").mousedown(function(event) {
                    interval = setInterval(function() {
                        \$(\"#";
                // line 118
                echo twig_escape_filter($this->env, ($context["filter_id_selector"] ?? $this->getContext($context, "filter_id_selector")), "html", null, true);
                echo "-range-label\").html(\$(\"#";
                echo twig_escape_filter($this->env, ($context["filter_id_selector"] ?? $this->getContext($context, "filter_id_selector")), "html", null, true);
                echo "\").val());
                    }, 15);
                });

                \$(\"#";
                // line 122
                echo twig_escape_filter($this->env, ($context["filter_id_selector"] ?? $this->getContext($context, "filter_id_selector")), "html", null, true);
                echo "\").mouseup(function(event) {
                    clearInterval(interval);
                });

                \$(\"#";
                // line 126
                echo twig_escape_filter($this->env, ($context["filter_id_selector"] ?? $this->getContext($context, "filter_id_selector")), "html", null, true);
                echo "\").change(function(event) {
                    \$(\"#";
                // line 127
                echo twig_escape_filter($this->env, ($context["filter_id_selector"] ?? $this->getContext($context, "filter_id_selector")), "html", null, true);
                echo "-range-label\").html(\$(\"#";
                echo twig_escape_filter($this->env, ($context["filter_id_selector"] ?? $this->getContext($context, "filter_id_selector")), "html", null, true);
                echo "\").val());
                });
            </script>
        ";
            }
            // line 131
            echo "    ";
        }
        $context["filter_input_range_label_js"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 133
        echo "
";
        // line 134
        $this->displayBlock('html', $context, $blocks);
        // line 150
        echo "
";
        // line 151
        $this->displayBlock('javascript', $context, $blocks);
        
        $__internal_272b56d1a9a183bcd86e8080a50d180a10a1d8b4e4c84318b0b897ec5a141a2a->leave($__internal_272b56d1a9a183bcd86e8080a50d180a10a1d8b4e4c84318b0b897ec5a141a2a_prof);

        
        $__internal_3fef76d5c08e836927d4ff9b6a1b5001e675767aade8f790f2d98132c49d86df->leave($__internal_3fef76d5c08e836927d4ff9b6a1b5001e675767aade8f790f2d98132c49d86df_prof);

    }

    // line 134
    public function block_html($context, array $blocks = array())
    {
        $__internal_9e8e68f40dc0ddb10e8eba0d96adf7b2a2dd74b82e00400a9c08c88e65a0bc1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e8e68f40dc0ddb10e8eba0d96adf7b2a2dd74b82e00400a9c08c88e65a0bc1c->enter($__internal_9e8e68f40dc0ddb10e8eba0d96adf7b2a2dd74b82e00400a9c08c88e65a0bc1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "html"));

        $__internal_4608da545dc9bbc7f3af6203cf54083fcfcae7c950faa59761c6be9c4ee3a912 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4608da545dc9bbc7f3af6203cf54083fcfcae7c950faa59761c6be9c4ee3a912->enter($__internal_4608da545dc9bbc7f3af6203cf54083fcfcae7c950faa59761c6be9c4ee3a912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "html"));

        // line 135
        echo "    <input ";
        echo twig_escape_filter($this->env, ($context["filter_input_type"] ?? $this->getContext($context, "filter_input_type")), "html", null, true);
        echo "            ";
        // line 136
        echo "            ";
        echo twig_escape_filter($this->env, ($context["filter_selector"] ?? $this->getContext($context, "filter_selector")), "html", null, true);
        echo "             ";
        // line 137
        echo "            ";
        echo twig_escape_filter($this->env, ($context["filter_classes"] ?? $this->getContext($context, "filter_classes")), "html", null, true);
        echo "              ";
        // line 138
        echo "            ";
        echo twig_escape_filter($this->env, ($context["filter_width"] ?? $this->getContext($context, "filter_width")), "html", null, true);
        echo "                ";
        // line 139
        echo "            ";
        echo twig_escape_filter($this->env, ($context["filter_input_placeholder"] ?? $this->getContext($context, "filter_input_placeholder")), "html", null, true);
        echo "    ";
        // line 140
        echo "            ";
        echo twig_escape_filter($this->env, ($context["filter_search_column_index"] ?? $this->getContext($context, "filter_search_column_index")), "html", null, true);
        echo "  ";
        // line 141
        echo "            ";
        echo twig_escape_filter($this->env, ($context["filter_column_name"] ?? $this->getContext($context, "filter_column_name")), "html", null, true);
        echo "          ";
        // line 142
        echo "            ";
        echo twig_escape_filter($this->env, ($context["filter_input_minmax"] ?? $this->getContext($context, "filter_input_minmax")), "html", null, true);
        echo "         ";
        // line 143
        echo "            ";
        echo twig_escape_filter($this->env, ($context["filter_input_datalist"] ?? $this->getContext($context, "filter_input_datalist")), "html", null, true);
        echo "       ";
        // line 144
        echo "            ";
        echo twig_escape_filter($this->env, ($context["filter_input_initial_search"] ?? $this->getContext($context, "filter_input_initial_search")), "html", null, true);
        echo " ";
        // line 145
        echo "    />
    ";
        // line 146
        echo twig_escape_filter($this->env, ($context["filter_input_datalist_values"] ?? $this->getContext($context, "filter_input_datalist_values")), "html", null, true);
        echo "        ";
        // line 147
        echo "    ";
        echo twig_escape_filter($this->env, ($context["cancel_button_html"] ?? $this->getContext($context, "cancel_button_html")), "html", null, true);
        echo "
    ";
        // line 148
        echo twig_escape_filter($this->env, ($context["filter_input_range_label_html"] ?? $this->getContext($context, "filter_input_range_label_html")), "html", null, true);
        echo "
";
        
        $__internal_4608da545dc9bbc7f3af6203cf54083fcfcae7c950faa59761c6be9c4ee3a912->leave($__internal_4608da545dc9bbc7f3af6203cf54083fcfcae7c950faa59761c6be9c4ee3a912_prof);

        
        $__internal_9e8e68f40dc0ddb10e8eba0d96adf7b2a2dd74b82e00400a9c08c88e65a0bc1c->leave($__internal_9e8e68f40dc0ddb10e8eba0d96adf7b2a2dd74b82e00400a9c08c88e65a0bc1c_prof);

    }

    // line 151
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_63c14a3daad92c9c246840482b8fd2e67df868c4e2af4f2cc850aeb337d2f5a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63c14a3daad92c9c246840482b8fd2e67df868c4e2af4f2cc850aeb337d2f5a6->enter($__internal_63c14a3daad92c9c246840482b8fd2e67df868c4e2af4f2cc850aeb337d2f5a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_4a2a23afebd434ee3abcdb207f563d922234603e841850414bc4779002a40475 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a2a23afebd434ee3abcdb207f563d922234603e841850414bc4779002a40475->enter($__internal_4a2a23afebd434ee3abcdb207f563d922234603e841850414bc4779002a40475_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 152
        echo "    ";
        echo twig_escape_filter($this->env, ($context["cancel_button_js"] ?? $this->getContext($context, "cancel_button_js")), "html", null, true);
        echo "
    ";
        // line 153
        echo twig_escape_filter($this->env, ($context["filter_input_range_label_js"] ?? $this->getContext($context, "filter_input_range_label_js")), "html", null, true);
        echo "
";
        
        $__internal_4a2a23afebd434ee3abcdb207f563d922234603e841850414bc4779002a40475->leave($__internal_4a2a23afebd434ee3abcdb207f563d922234603e841850414bc4779002a40475_prof);

        
        $__internal_63c14a3daad92c9c246840482b8fd2e67df868c4e2af4f2cc850aeb337d2f5a6->leave($__internal_63c14a3daad92c9c246840482b8fd2e67df868c4e2af4f2cc850aeb337d2f5a6_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:filter:input.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  451 => 153,  446 => 152,  437 => 151,  425 => 148,  420 => 147,  417 => 146,  414 => 145,  410 => 144,  406 => 143,  402 => 142,  398 => 141,  394 => 140,  390 => 139,  386 => 138,  382 => 137,  378 => 136,  374 => 135,  365 => 134,  355 => 151,  352 => 150,  350 => 134,  347 => 133,  343 => 131,  334 => 127,  330 => 126,  323 => 122,  314 => 118,  309 => 116,  302 => 114,  297 => 111,  294 => 110,  291 => 109,  289 => 108,  286 => 107,  275 => 99,  271 => 98,  267 => 97,  264 => 96,  261 => 95,  259 => 94,  256 => 93,  252 => 91,  246 => 89,  243 => 88,  240 => 87,  238 => 86,  235 => 85,  227 => 80,  224 => 79,  221 => 78,  219 => 77,  211 => 74,  209 => 73,  205 => 70,  201 => 68,  192 => 66,  188 => 65,  183 => 64,  180 => 63,  177 => 62,  175 => 61,  172 => 60,  164 => 58,  162 => 57,  159 => 56,  155 => 54,  149 => 52,  146 => 51,  143 => 50,  141 => 49,  138 => 48,  127 => 45,  124 => 44,  122 => 43,  119 => 42,  111 => 40,  109 => 39,  106 => 38,  100 => 36,  98 => 35,  95 => 34,  84 => 31,  81 => 30,  79 => 29,  76 => 28,  68 => 26,  66 => 25,  63 => 24,  54 => 22,  52 => 21,  47 => 18,  45 => 17,  37 => 14,  35 => 13,  29 => 10,  27 => 9,);
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
{% set filter_input_type %}
    type=\"{{ column.filter.type }}\"
{% endset %}

{%- set filter_id_selector -%}
    sg-datatables-{{ datatable_name }}-{{ position }}-filter-{{ column.index }}
{%- endset -%}

{%- set filter_selector -%}
    id=\"{{ filter_id_selector }}\"
{%- endset -%}

{% set filter_classes %}
    class=\"sg-datatables-individual-filtering form-control input-sm{% if column.filter.classes is not same as(null) %} {{ column.filter.classes }}{% endif %}\"
{% endset %}

{% set filter_width %}
    {% if column.width is not same as(null) %}style=\"width:{{ column.width }};\"{% endif %}
{% endset %}

{% set filter_input_placeholder %}
    {% if column.filter.placeholder is same as(true) %}
        placeholder=\"{% if column.filter.placeholderText is not same as(null) %}{{ column.filter.placeholderText }}{% else %}{{ column.title|striptags|trim }}{% endif %}\"
    {% endif %}
{% endset %}

{% set filter_search_column_index %}
    data-search-column-index=\"{{ search_column_index }}\"
{% endset %}

{% set filter_column_name %}
    {% if column.name is not same as(null) %}name=\"{{ column.name }}\"{% endif %}
{% endset %}

{% set filter_input_minmax %}
    {% if 'number' == column.filter.type or 'range' == column.filter.type %}
        min=\"{{ column.filter.min }}\" max=\"{{ column.filter.max }}\" step=\"{{ column.filter.step }}\"
    {% endif %}
{% endset %}

{% set filter_input_datalist %}
    {% if 'number' == column.filter.type or 'range' == column.filter.type %}
        {% if column.filter.datalist is not same as(null) %}
            list=\"{{ filter_id_selector }}-datalist\"
        {% endif %}
    {% endif %}
{% endset %}

{% set filter_input_initial_search %}
    {% if column.filter.initialSearch %}value=\"{{ column.filter.initialSearch }}\"{% endif %}
{% endset %}

{% set filter_input_datalist_values %}
    {% if 'number' == column.filter.type or 'range' == column.filter.type %}
        {% if column.filter.datalist is not same as(null) %}
            <datalist id=\"{{ filter_id_selector }}-datalist\">
                {% for key, name in column.filter.datalist %}
                    <option>{{ name }}</option>
                {% endfor %}
            </datalist>
        {% endif %}
    {% endif %}
{% endset %}

{%- set cancel_button_id_selector -%}
    sg-datatables-{{ datatable_name }}-{{ position }}-filter-cancel-{{ column.index }}
{%- endset -%}

{% set cancel_button_html %}
    {% if column.filter.cancelButton is same as(true) %}
        <button type=\"button\"
                id=\"{{ cancel_button_id_selector }}\"
                class=\"btn btn-default btn-xs\"
        >&times;</button>
    {% endif %}
{% endset %}

{% set filter_input_range_label_html %}
    {% if 'number' == column.filter.type or 'range' == column.filter.type %}
        {% if column.filter.showLabel is same as(true) %}
            <span id=\"{{ filter_id_selector }}-range-label\"></span>
        {% endif %}
    {% endif %}
{% endset %}

{% set cancel_button_js %}
    {% if column.filter.cancelButton is same as(true) %}
        <script type=\"text/javascript\">
            \$(\"#{{ cancel_button_id_selector }}\").click(function() {
                if ('' != \$(\"#{{ filter_id_selector }}\").val()) {
                    \$(\"#{{ filter_id_selector }}\")
                        .val('')
                        .change();
                }
            });
        </script>
    {% endif %}
{% endset %}

{% set filter_input_range_label_js %}
    {% if 'number' == column.filter.type or 'range' == column.filter.type %}
        {% if column.filter.showLabel is same as(true) %}
            <script type=\"text/javascript\">
                var interval;

                \$(\"#{{ filter_id_selector }}-range-label\").html(\$(\"#{{ filter_id_selector }}\").val());

                \$(\"#{{ filter_id_selector }}\").mousedown(function(event) {
                    interval = setInterval(function() {
                        \$(\"#{{ filter_id_selector }}-range-label\").html(\$(\"#{{ filter_id_selector }}\").val());
                    }, 15);
                });

                \$(\"#{{ filter_id_selector }}\").mouseup(function(event) {
                    clearInterval(interval);
                });

                \$(\"#{{ filter_id_selector }}\").change(function(event) {
                    \$(\"#{{ filter_id_selector }}-range-label\").html(\$(\"#{{ filter_id_selector }}\").val());
                });
            </script>
        {% endif %}
    {% endif %}
{% endset %}

{% block html %}
    <input {{ filter_input_type }}            {# type = \"\" text, number or range #}
            {{ filter_selector }}             {# id = \"\" #}
            {{ filter_classes }}              {# class = \"\" #}
            {{ filter_width }}                {# style = \"width:\" #}
            {{ filter_input_placeholder }}    {# placeholder = \"\" #}
            {{ filter_search_column_index }}  {# data-search-column-index = \"\" #}
            {{ filter_column_name }}          {# name = \"\" #}
            {{ filter_input_minmax }}         {# min = \"\" max = \"\" step = \"\" #}
            {{ filter_input_datalist }}       {# list = \"\" #}
            {{ filter_input_initial_search }} {# value = \"\" #}
    />
    {{ filter_input_datalist_values }}        {# <datalist> #}
    {{ cancel_button_html }}
    {{ filter_input_range_label_html }}
{% endblock %}

{% block javascript %}
    {{ cancel_button_js }}
    {{ filter_input_range_label_js }}
{% endblock %}
", "SgDatatablesBundle:filter:input.html.twig", "/root/Schreibtisch/devops/vendor/sg/datatablesbundle/Resources/views/filter/input.html.twig");
    }
}
