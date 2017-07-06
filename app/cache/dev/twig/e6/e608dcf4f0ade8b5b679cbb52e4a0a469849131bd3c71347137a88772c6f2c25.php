<?php

/* PluginsPracticAreaBundle:PracticArea:vertical_menu_short.html.twig */
class __TwigTemplate_6088413149133404244dc01c2407312caff005f878d1969d60ed414042795ae6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'verticalMenu' => array($this, 'block_verticalMenu'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('verticalMenu', $context, $blocks);
    }

    public function block_verticalMenu($context, array $blocks = array())
    {
        // line 2
        echo "\t\t<h2>Practice areas</h2>
\t\t";
        // line 3
        $this->loadTemplate("PluginsPracticAreaBundle:PracticArea:search_practice.html.twig", "PluginsPracticAreaBundle:PracticArea:vertical_menu_short.html.twig", 3)->display($context);
        // line 4
        echo "\t\t<!-- QUERRIES!!! -->
\t\t\t\t<ul class=\"first\">
\t\t\t\t";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["areas"] ?? $this->getContext($context, "areas")));
        foreach ($context['_seq'] as $context["_key"] => $context["area"]) {
            // line 7
            if ((($this->getAttribute($context["area"], "id", array()) == ($context["activeId"] ?? $this->getContext($context, "activeId"))) && (($context["home"] ?? $this->getContext($context, "home")) != true))) {
                // line 8
                echo "
\t\t\t\t\t\t";
                // line 9
                if ((($this->getAttribute($context["area"], "id", array()) == ($context["activeId"] ?? $this->getContext($context, "activeId"))) &&  !($context["activeSubSectionId"] ?? $this->getContext($context, "activeSubSectionId")))) {
                    // line 10
                    echo "\t\t\t\t\t\t<li class=\"link two-lvl top\">
\t\t\t\t\t\t\t<!-- <a href=\"";
                    // line 11
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("plugins_practic_area_view", array("url" => $this->getAttribute($context["area"], "url", array()))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["area"], "name", array()), "html", null, true);
                    echo "\" class=\"itself\"> -->
\t\t\t\t\t\t\t\t\t <span>";
                    // line 12
                    echo twig_escape_filter($this->env, $this->getAttribute($context["area"], "name", array()), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t\t <hr>
\t\t\t\t\t\t\t<!-- </a> -->
\t\t\t\t\t\t";
                } else {
                    // line 16
                    echo "\t\t\t\t\t\t<li class=\"link two-lvl  top\">
\t\t\t\t\t\t\t<!-- <a href=\"";
                    // line 17
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("plugins_practic_area_view", array("url" => $this->getAttribute($context["area"], "url", array()))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["area"], "name", array()), "html", null, true);
                    echo "\" class=\"itself\"> -->
\t\t\t\t\t\t\t\t\t <span>";
                    // line 18
                    echo twig_escape_filter($this->env, $this->getAttribute($context["area"], "name", array()), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t\t <hr>
\t\t\t\t\t\t\t<!-- </a> -->
\t\t\t\t\t\t";
                }
                // line 22
                echo "

\t\t\t\t";
                // line 24
                if ( !twig_test_empty($this->getAttribute($context["area"], "practicAreaSubSections", array()))) {
                    // line 25
                    echo "\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                    // line 26
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["area"], "practicAreaSubSections", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["subSection"]) {
                        // line 27
                        echo "
\t\t\t\t\t\t\t";
                        // line 28
                        if (($this->getAttribute($context["subSection"], "id", array()) == ($context["activeSubSectionId"] ?? $this->getContext($context, "activeSubSectionId")))) {
                            // line 29
                            echo "\t\t\t\t\t\t\t<li class=\"link two-lvl focus\">

\t\t\t\t\t\t\t";
                        } else {
                            // line 32
                            echo "\t\t\t\t\t\t\t<li class=\"link two-lvl\">

\t\t\t\t\t\t\t";
                        }
                        // line 35
                        echo "\t\t\t\t\t\t\t\t<a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("plugins_practic_area_subsection_view", array("url" => $this->getAttribute($context["subSection"], "url", array()), "urlSection" => $this->getAttribute($context["area"], "url", array()))), "html", null, true);
                        echo "\"
\t\t\t\t\t\t\t\t\t title=\"";
                        // line 36
                        echo twig_escape_filter($this->env, $this->getAttribute($context["subSection"], "name", array()), "html", null, true);
                        echo "\">
\t\t\t\t\t\t\t\t\t<span>";
                        // line 37
                        echo twig_escape_filter($this->env, $this->getAttribute($context["subSection"], "name", array()), "html", null, true);
                        echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subSection'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 41
                    echo "\t\t\t\t</ul>
\t\t\t\t";
                }
            } elseif ((            // line 43
($context["home"] ?? $this->getContext($context, "home")) == true)) {
                // line 44
                echo "\t\t\t\t\t<li class=\"link two-lvl practice\">
\t\t\t\t\t\t\t<a href=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("plugins_practic_area_view", array("url" => $this->getAttribute($context["area"], "url", array()))), "html", null, true);
                echo "\" class=\"itself\">
\t\t\t\t\t\t\t\t\t <span>";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute($context["area"], "name", array()), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<i class=\"fa fa-angle-down\" aria-hidden=\"true\"></i>

\t\t\t\t\t";
                // line 50
                if ( !twig_test_empty($this->getAttribute($context["area"], "practicAreaSubSections", array()))) {
                    // line 51
                    echo "\t\t\t\t\t\t<ul class=\"second\">
\t\t\t\t\t\t\t";
                    // line 52
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["area"], "practicAreaSubSections", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["subSection"]) {
                        // line 53
                        echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
                        // line 54
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("plugins_practic_area_subsection_view", array("url" => $this->getAttribute($context["subSection"], "url", array()), "urlSection" => $this->getAttribute($context["area"], "url", array()))), "html", null, true);
                        echo "\"
\t\t\t\t\t\t\t\t\t\t title=\"";
                        // line 55
                        echo twig_escape_filter($this->env, $this->getAttribute($context["subSection"], "name", array()), "html", null, true);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t";
                        // line 56
                        echo twig_escape_filter($this->env, $this->getAttribute($context["subSection"], "name", array()), "html", null, true);
                        echo "
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subSection'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 60
                    echo "\t\t\t\t\t\t</ul>

\t\t\t\t\t";
                }
                // line 63
                echo "\t\t\t\t\t</li>
";
            }
            // line 65
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['area'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "\t\t\t\t</ul>
";
    }

    public function getTemplateName()
    {
        return "PluginsPracticAreaBundle:PracticArea:vertical_menu_short.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  190 => 66,  184 => 65,  180 => 63,  175 => 60,  165 => 56,  161 => 55,  157 => 54,  154 => 53,  150 => 52,  147 => 51,  145 => 50,  138 => 46,  134 => 45,  131 => 44,  129 => 43,  125 => 41,  115 => 37,  111 => 36,  106 => 35,  101 => 32,  96 => 29,  94 => 28,  91 => 27,  87 => 26,  84 => 25,  82 => 24,  78 => 22,  71 => 18,  65 => 17,  62 => 16,  55 => 12,  49 => 11,  46 => 10,  44 => 9,  41 => 8,  39 => 7,  35 => 6,  31 => 4,  29 => 3,  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block verticalMenu %}
\t\t<h2>Practice areas</h2>
\t\t{% include \"PluginsPracticAreaBundle:PracticArea:search_practice.html.twig\"%}
\t\t<!-- QUERRIES!!! -->
\t\t\t\t<ul class=\"first\">
\t\t\t\t{% for area in areas %}
{% if area.id == activeId and home != true %}

\t\t\t\t\t\t{% if area.id == activeId and not activeSubSectionId %}
\t\t\t\t\t\t<li class=\"link two-lvl top\">
\t\t\t\t\t\t\t<!-- <a href=\"{{ path(\"plugins_practic_area_view\", { \"url\" : area.url }) }}\" title=\"{{ area.name }}\" class=\"itself\"> -->
\t\t\t\t\t\t\t\t\t <span>{{ area.name }}</span>
\t\t\t\t\t\t\t\t\t <hr>
\t\t\t\t\t\t\t<!-- </a> -->
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t<li class=\"link two-lvl  top\">
\t\t\t\t\t\t\t<!-- <a href=\"{{ path(\"plugins_practic_area_view\", { \"url\" : area.url }) }}\" title=\"{{ area.name }}\" class=\"itself\"> -->
\t\t\t\t\t\t\t\t\t <span>{{ area.name }}</span>
\t\t\t\t\t\t\t\t\t <hr>
\t\t\t\t\t\t\t<!-- </a> -->
\t\t\t\t\t\t{% endif %}


\t\t\t\t{% if not area.practicAreaSubSections is empty %}
\t\t\t\t\t\t</li>
\t\t\t\t\t\t{% for subSection in area.practicAreaSubSections %}

\t\t\t\t\t\t\t{% if subSection.id == activeSubSectionId %}
\t\t\t\t\t\t\t<li class=\"link two-lvl focus\">

\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<li class=\"link two-lvl\">

\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t<a href=\"{{ path(\"plugins_practic_area_subsection_view\", { \"url\" : subSection.url, \"urlSection\" : area.url }) }}\"
\t\t\t\t\t\t\t\t\t title=\"{{ subSection.name }}\">
\t\t\t\t\t\t\t\t\t<span>{{ subSection.name }}</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t{% endfor %}
\t\t\t\t</ul>
\t\t\t\t{% endif %}
{% elseif home == true %}
\t\t\t\t\t<li class=\"link two-lvl practice\">
\t\t\t\t\t\t\t<a href=\"{{ path(\"plugins_practic_area_view\", { \"url\" : area.url }) }}\" class=\"itself\">
\t\t\t\t\t\t\t\t\t <span>{{ area.name }}</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<i class=\"fa fa-angle-down\" aria-hidden=\"true\"></i>

\t\t\t\t\t{% if not area.practicAreaSubSections is empty %}
\t\t\t\t\t\t<ul class=\"second\">
\t\t\t\t\t\t\t{% for subSection in area.practicAreaSubSections %}
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path(\"plugins_practic_area_subsection_view\", { \"url\" : subSection.url, \"urlSection\" : area.url }) }}\"
\t\t\t\t\t\t\t\t\t\t title=\"{{ subSection.name }}\">
\t\t\t\t\t\t\t\t\t\t{{ subSection.name }}
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</ul>

\t\t\t\t\t{% endif %}
\t\t\t\t\t</li>
{% endif %}
\t\t\t\t{% endfor %}
\t\t\t\t</ul>
{% endblock %}
", "PluginsPracticAreaBundle:PracticArea:vertical_menu_short.html.twig", "/home/szpaklabs/work/projects/sharovalaw-com/src/Plugins/PracticAreaBundle/Resources/views/PracticArea/vertical_menu_short.html.twig");
    }
}
