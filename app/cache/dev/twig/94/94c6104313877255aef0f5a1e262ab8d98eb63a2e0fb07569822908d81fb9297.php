<?php

/* PluginsPracticAreaBundle:PracticArea:main-mozaic-practice-item.html.twig */
class __TwigTemplate_4fe36f08b8938b096e7cc6684bde6580d02e547206740db8c5bef1ec65d34fcd extends Twig_Template
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
        $context["break"] = false;
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["areasShort"] ?? $this->getContext($context, "areasShort")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            if ( !($context["break"] ?? $this->getContext($context, "break"))) {
                // line 3
                echo "
";
                // line 4
                $context["classes"] = array(1 => "first", 2 => "second", 3 => "third", 4 => "fourth");
                // line 10
                $context["images"] = array(1 => "/img/page-1.png", 2 => "/img/page-1_3.png", 3 => "/img/page-1_2.png", 4 => "/img/page-1.png");
                // line 16
                echo "
\t<div class=\"box ";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute(($context["classes"] ?? $this->getContext($context, "classes")), $this->getAttribute($context["loop"], "index", array()), array(), "array"), "html", null, true);
                echo "\">
\t\t<img src=\"";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute(($context["images"] ?? $this->getContext($context, "images")), $this->getAttribute($context["loop"], "index", array()), array(), "array"), "html", null, true);
                echo "\" >
\t\t<div class=\"_text\">
\t\t\t<span><a href=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("plugins_practic_area_view", array("url" => $this->getAttribute($context["item"], "url", array()))), "html", null, true);
                echo "\" title=\"practice areas\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array()), "html", null, true);
                echo "</a></span>
\t\t\t<p><a href=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("plugins_practic_area_view", array("url" => $this->getAttribute($context["item"], "url", array()))), "html", null, true);
                echo "\" title=\"practice areas\">practice areas</a></p>
\t\t</div>
\t</div>

\t";
                // line 25
                if (($this->getAttribute($context["loop"], "index", array()) == 4)) {
                    // line 26
                    echo "\t\t";
                    $context["break"] = true;
                    // line 27
                    echo "\t";
                }
                // line 28
                echo "
";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "PluginsPracticAreaBundle:PracticArea:main-mozaic-practice-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 28,  69 => 27,  66 => 26,  64 => 25,  57 => 21,  51 => 20,  46 => 18,  42 => 17,  39 => 16,  37 => 10,  35 => 4,  32 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set break = false %}
{% for item in areasShort if not break %}

{% set classes = {
\t1: 'first',
\t2: 'second',
\t3: 'third',
\t4: 'fourth'
} %}
{% set images = {
\t1: '/img/page-1.png',
\t2: '/img/page-1_3.png',
\t3: '/img/page-1_2.png',
\t4: '/img/page-1.png'
} %}

\t<div class=\"box {{classes[loop.index]}}\">
\t\t<img src=\"{{images[loop.index]}}\" >
\t\t<div class=\"_text\">
\t\t\t<span><a href=\"{{ path(\"plugins_practic_area_view\", { \"url\" : item.url }) }}\" title=\"practice areas\">{{item.name}}</a></span>
\t\t\t<p><a href=\"{{ path(\"plugins_practic_area_view\", { \"url\" : item.url }) }}\" title=\"practice areas\">practice areas</a></p>
\t\t</div>
\t</div>

\t{% if loop.index == 4 %}
\t\t{% set break = true %}
\t{% endif %}

{% endfor %}
", "PluginsPracticAreaBundle:PracticArea:main-mozaic-practice-item.html.twig", "/home/szpaklabs/work/projects/sharovalaw-com/src/Plugins/PracticAreaBundle/Resources/views/PracticArea/main-mozaic-practice-item.html.twig");
    }
}
