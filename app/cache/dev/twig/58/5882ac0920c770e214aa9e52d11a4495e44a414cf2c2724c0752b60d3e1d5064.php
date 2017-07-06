<?php

/* PluginsPracticAreaBundle:PracticArea:random.html.twig */
class __TwigTemplate_2629f66885a956fadc0d099edf5c103e8448149a5ffde0bd5e22d57f681d8155 extends Twig_Template
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
        $context["chosen"] = twig_random($this->env, twig_length_filter($this->env, ($context["rand"] ?? $this->getContext($context, "rand"))));
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rand"] ?? $this->getContext($context, "rand")));
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
            // line 3
            echo "    ";
            if (($this->getAttribute($context["loop"], "index", array()) == ($context["chosen"] ?? $this->getContext($context, "chosen")))) {
                // line 4
                echo "\t\t\t<span><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("plugins_practic_area_view", array("url" => $this->getAttribute($context["item"], "url", array()))), "html", null, true);
                echo "\" title=\"practice areas\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array()), "html", null, true);
                echo "</a></span>
\t\t\t<p><a href=\"";
                // line 5
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("plugins_practic_area_view", array("url" => $this->getAttribute($context["item"], "url", array()))), "html", null, true);
                echo "\" title=\"practice areas\">practice areas</a></p>
\t\t";
            }
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
    }

    public function getTemplateName()
    {
        return "PluginsPracticAreaBundle:PracticArea:random.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 5,  41 => 4,  38 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set chosen = random(rand|length) %}
{% for item in rand %}
    {% if loop.index == chosen %}
\t\t\t<span><a href=\"{{ path(\"plugins_practic_area_view\", { \"url\" : item.url }) }}\" title=\"practice areas\">{{item.name}}</a></span>
\t\t\t<p><a href=\"{{ path(\"plugins_practic_area_view\", { \"url\" : item.url }) }}\" title=\"practice areas\">practice areas</a></p>
\t\t{% endif %}
{% endfor %}
", "PluginsPracticAreaBundle:PracticArea:random.html.twig", "/home/szpaklabs/work/projects/sharovalaw-com/src/Plugins/PracticAreaBundle/Resources/views/PracticArea/random.html.twig");
    }
}
