<?php

/* PluginsPracticAreaBundle:PracticArea:practic_areas_short_about.html.twig */
class __TwigTemplate_3c0d5a6143f8d1061461dbd30f07c74c7bce5a6b8b775ed9e82e1073052bc454 extends Twig_Template
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
        // line 1
        echo "<div class=\"panel-group\" id=\"practice-short\">

\t";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["areas"] ?? $this->getContext($context, "areas")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["area"]) {
            // line 4
            echo "\t<div class=\"panel panel-default\">
\t\t<div id=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($context["area"], "areaId", array()), "html", null, true);
            echo "\" class=\"panel-collapse collapse ";
            echo (($this->getAttribute($context["loop"], "first", array())) ? ("in act") : (""));
            echo "\">
\t\t\t<div class=\"panel-body\">
\t\t\t\t";
            // line 7
            echo $this->getAttribute($context["area"], "short", array());
            echo "
\t\t\t\t<a href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("plugins_practic_area_view", array("url" => $this->getAttribute($context["area"], "url", array()))), "html", null, true);
            echo "\">
\t\t\t\t\tRead More
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"panel-heading\">
\t\t\t<a data-toggle=\"collapse\" data-parent=\"#practice-short\" href=\"#";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["area"], "areaId", array()), "html", null, true);
            echo "\">
\t\t\t\t<h4 class=\"panel-title\">
\t\t\t\t\t";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["area"], "name", array()), "html", null, true);
            echo "
\t\t\t\t</h4>
\t\t\t\t<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>
\t\t\t</a>
\t\t</div>
\t</div>
\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['area'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "PluginsPracticAreaBundle:PracticArea:practic_areas_short_about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 24,  69 => 17,  64 => 15,  54 => 8,  50 => 7,  43 => 5,  40 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"panel-group\" id=\"practice-short\">

\t{% for area in areas %}
\t<div class=\"panel panel-default\">
\t\t<div id=\"{{ area.areaId }}\" class=\"panel-collapse collapse {{ loop.first ? \"in act\" }}\">
\t\t\t<div class=\"panel-body\">
\t\t\t\t{{ area.short | raw }}
\t\t\t\t<a href=\"{{ path(\"plugins_practic_area_view\", { \"url\" : area.url }) }}\">
\t\t\t\t\tRead More
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"panel-heading\">
\t\t\t<a data-toggle=\"collapse\" data-parent=\"#practice-short\" href=\"#{{ area.areaId }}\">
\t\t\t\t<h4 class=\"panel-title\">
\t\t\t\t\t{{ area.name }}
\t\t\t\t</h4>
\t\t\t\t<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>
\t\t\t</a>
\t\t</div>
\t</div>
\t{% endfor %}

</div>
", "PluginsPracticAreaBundle:PracticArea:practic_areas_short_about.html.twig", "/home/szpaklabs/work/projects/sharovalaw-com/src/Plugins/PracticAreaBundle/Resources/views/PracticArea/practic_areas_short_about.html.twig");
    }
}
