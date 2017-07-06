<?php

/* PluginsPracticAreaBundle:PracticArea:pa_blocks.html.twig */
class __TwigTemplate_aa028d9c0737c743a4c20b80de87223eac49070530b9599d91bffef865a502dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'paBlocks' => array($this, 'block_paBlocks'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('paBlocks', $context, $blocks);
    }

    public function block_paBlocks($context, array $blocks = array())
    {
        // line 2
        $context["count"] = array(1 => "a", 2 => "b", 3 => "c", 4 => "d", 5 => "e");
        // line 9
        echo "<div id=\"pa_blocks\" class=\"row\">
\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["areasShort"] ?? $this->getContext($context, "areasShort")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 11
            echo "
\t<div class=\"block ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute(($context["count"] ?? $this->getContext($context, "count")), $this->getAttribute($context["loop"], "index", array()), array(), "array"), "html", null, true);
            echo "\">
\t\t
\t\t";
            // line 14
            if ($this->getAttribute($context["item"], "practicArea", array(), "any", true, true)) {
                // line 15
                echo "\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("plugins_practic_area_subsection_view", array("urlSection" => $this->getAttribute($this->getAttribute(                // line 16
$context["item"], "practicArea", array()), "url", array()), "url" => $this->getAttribute(                // line 17
$context["item"], "url", array()))), "html", null, true);
                echo "\">
\t\t";
            } else {
                // line 19
                echo "\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("plugins_practic_area_view", array("url" => $this->getAttribute($context["item"], "url", array()))), "html", null, true);
                echo "\">
\t\t";
            }
            // line 21
            echo "
\t\t\t\t<img src=\"/img/pa_";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute(($context["count"] ?? $this->getContext($context, "count")), $this->getAttribute($context["loop"], "index", array()), array(), "array"), "html", null, true);
            echo ".svg\">
\t\t\t\t<h3>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array()), "html", null, true);
            echo "</h3>
\t\t\t\t<span>LEARN MORE</span>
\t\t\t</a>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "</div>

";
    }

    public function getTemplateName()
    {
        return "PluginsPracticAreaBundle:PracticArea:pa_blocks.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  100 => 30,  79 => 23,  75 => 22,  72 => 21,  66 => 19,  61 => 17,  60 => 16,  58 => 15,  56 => 14,  51 => 12,  48 => 11,  31 => 10,  28 => 9,  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block paBlocks %}
{% set count = {
\t\t1: 'a',
\t\t2: 'b',
\t\t3: 'c',
\t\t4: 'd',
\t\t5: 'e'
} %}
<div id=\"pa_blocks\" class=\"row\">
\t{% for item in areasShort %}

\t<div class=\"block {{count[loop.index]}}\">
\t\t
\t\t{% if item.practicArea is defined %}
\t\t\t<a href=\"{{ path(\"plugins_practic_area_subsection_view\", {
\t\t\t \"urlSection\" : item.practicArea.url,
\t\t\t \"url\" : item.url }) }}\">
\t\t{% else %}
\t\t\t<a href=\"{{ path(\"plugins_practic_area_view\", { \"url\" : item.url }) }}\">
\t\t{% endif %}

\t\t\t\t<img src=\"/img/pa_{{count[loop.index]}}.svg\">
\t\t\t\t<h3>{{item.name}}</h3>
\t\t\t\t<span>LEARN MORE</span>
\t\t\t</a>
\t</div>


\t{% endfor %}
</div>

{% endblock %}
", "PluginsPracticAreaBundle:PracticArea:pa_blocks.html.twig", "/home/szpaklabs/work/projects/sharovalaw-com/src/Plugins/PracticAreaBundle/Resources/views/PracticArea/pa_blocks.html.twig");
    }
}
