<?php

/* default/breadcrumbs.html.twig */
class __TwigTemplate_849226e24f0c84fd7fe57f03026846a772bc9fcff8b9e954bcf1c595ef8d8247 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'breadcrumbsSection' => array($this, 'block_breadcrumbsSection'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('breadcrumbsSection', $context, $blocks);
    }

    public function block_breadcrumbsSection($context, array $blocks = array())
    {
        // line 2
        echo "<div class=\"crumbs\">
\t\t";
        // line 3
        if (array_key_exists("elements", $context)) {
            // line 4
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["elements"] ?? $this->getContext($context, "elements")));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 5
                echo "\t\t\t\t\t\t";
                if ( !$this->getAttribute($context["element"], "params", array(), "any", true, true)) {
                    // line 6
                    echo "\t\t\t\t\t\t\t\t";
                    $context["params"] = array();
                    // line 7
                    echo "\t\t\t\t\t\t";
                } else {
                    // line 8
                    echo "\t\t\t\t\t\t\t\t";
                    $context["params"] = $this->getAttribute($context["element"], "params", array());
                    // line 9
                    echo "\t\t\t\t\t\t";
                }
                // line 10
                echo "\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($context["element"], "url", array()), ($context["params"] ?? $this->getContext($context, "params"))), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["element"], "name", array()), "html", null, true);
                echo "\"><span>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["element"], "name", array()), "html", null, true);
                echo "</span></a>
\t\t\t\t\t\t<img src=\"/img/grey.svg\">
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "\t\t";
        }
        // line 14
        echo "\t\t";
        if ((($context["home"] ?? $this->getContext($context, "home")) != true)) {
            // line 15
            echo "\t\t<span class=\"hl\">";
            echo twig_escape_filter($this->env, ($context["currentPage"] ?? $this->getContext($context, "currentPage")), "html", null, true);
            echo "</span>
\t\t";
        }
        // line 17
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "default/breadcrumbs.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  77 => 17,  71 => 15,  68 => 14,  65 => 13,  51 => 10,  48 => 9,  45 => 8,  42 => 7,  39 => 6,  36 => 5,  31 => 4,  29 => 3,  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block breadcrumbsSection %}
<div class=\"crumbs\">
\t\t{% if elements is defined %}
\t\t\t\t{% for element in elements %}
\t\t\t\t\t\t{% if not element.params is defined %}
\t\t\t\t\t\t\t\t{% set params = {} %}
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t{% set params = element.params %}
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t<a href=\"{{ path(element.url, params) }}\" title=\"{{ element.name }}\"><span>{{ element.name }}</span></a>
\t\t\t\t\t\t<img src=\"/img/grey.svg\">
\t\t\t\t{% endfor %}
\t\t{% endif %}
\t\t{% if home != true %}
\t\t<span class=\"hl\">{{ currentPage }}</span>
\t\t{% endif %}
</div>
{% endblock %}
", "default/breadcrumbs.html.twig", "/home/szpaklabs/work/projects/sharovalaw-com/app/Resources/views/default/breadcrumbs.html.twig");
    }
}
