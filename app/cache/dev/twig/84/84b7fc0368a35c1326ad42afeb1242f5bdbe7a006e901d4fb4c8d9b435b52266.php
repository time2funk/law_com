<?php

/* PluginsBlogBundle:Blog:vertical_menu.html.twig */
class __TwigTemplate_10e18316cad4b772217bf6ca05e4a95d42bf850d85cc44f0bc218d8d2d63f5e5 extends Twig_Template
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
        echo "\t\t<ul class=\"first\">
\t\t";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["elements"] ?? $this->getContext($context, "elements")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 4
            echo "\t\t\t";
            if ((($context["home"] ?? $this->getContext($context, "home")) == true)) {
                // line 5
                echo "\t\t\t\t<li class=\"link two-lvl\">
\t\t\t\t\t<a href=\"";
                // line 6
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("plugins_blog_view_category", array("categoryUrl" => $this->getAttribute($context["category"], "url", array()))), "html", null, true);
                echo "\"
\t\t\t\t\t\t title=\"";
                // line 7
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                echo "\"><span>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                echo "</span></a>
\t\t\t\t</li>
\t\t\t";
            } elseif ((            // line 9
($context["home"] ?? $this->getContext($context, "home")) != true)) {
                // line 10
                echo "\t\t\t\t";
                if (true) {
                    // line 11
                    echo "\t\t\t\t<li class=\"link two-lvl\">
\t\t\t\t";
                } else {
                    // line 13
                    echo "\t\t\t\t<li class=\"link two-lvl focus\">
\t\t\t\t";
                }
                // line 15
                echo "\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("plugins_blog_view_category", array("categoryUrl" => $this->getAttribute($context["category"], "url", array()))), "html", null, true);
                echo "\"
\t\t\t\t\t title=\"";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                echo "\"><span>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                echo "</span></a>
\t\t\t\t</li>
\t\t\t";
            }
            // line 19
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "\t\t</ul>
";
    }

    public function getTemplateName()
    {
        return "PluginsBlogBundle:Blog:vertical_menu.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  82 => 20,  76 => 19,  68 => 16,  63 => 15,  59 => 13,  55 => 11,  52 => 10,  50 => 9,  43 => 7,  39 => 6,  36 => 5,  33 => 4,  29 => 3,  26 => 2,  20 => 1,);
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
\t\t<ul class=\"first\">
\t\t{% for category in elements %}
\t\t\t{% if home == true %}
\t\t\t\t<li class=\"link two-lvl\">
\t\t\t\t\t<a href=\"{{ path(\"plugins_blog_view_category\", { \"categoryUrl\" : category.url}) }}\"
\t\t\t\t\t\t title=\"{{ category.name }}\"><span>{{ category.name }}</span></a>
\t\t\t\t</li>
\t\t\t{% elseif home != true %}
\t\t\t\t{% if true %}
\t\t\t\t<li class=\"link two-lvl\">
\t\t\t\t{% else %}
\t\t\t\t<li class=\"link two-lvl focus\">
\t\t\t\t{% endif %}
\t\t\t\t<a href=\"{{ path(\"plugins_blog_view_category\", { \"categoryUrl\" : category.url}) }}\"
\t\t\t\t\t title=\"{{ category.name }}\"><span>{{ category.name }}</span></a>
\t\t\t\t</li>
\t\t\t{% endif %}
\t\t{% endfor %}
\t\t</ul>
{% endblock %}
", "PluginsBlogBundle:Blog:vertical_menu.html.twig", "/home/szpaklabs/work/projects/sharovalaw-com/src/Plugins/BlogBundle/Resources/views/Blog/vertical_menu.html.twig");
    }
}
