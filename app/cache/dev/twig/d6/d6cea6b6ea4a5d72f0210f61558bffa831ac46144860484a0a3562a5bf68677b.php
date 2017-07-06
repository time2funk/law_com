<?php

/* PluginsNewsBundle:News:main-mozaic-news-item.html.twig */
class __TwigTemplate_07cfd221e340e3bd80b83c69c8b8909776e350edcf93bb2ebc32af11565e11be extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["news"] ?? $this->getContext($context, "news")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2
            echo "\t";
            $context["x"] = 0;
            // line 3
            echo "\t";
            $context["break"] = false;
            // line 4
            echo "\t";
            ob_start();
            $context["name"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 5
            echo "\t";
            $context["text"] = twig_split_filter($this->env, $this->getAttribute($context["item"], "name", array()), " ");
            // line 6
            echo "
\t<span>
\t\t<a href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("plugins_news_view", array("url" => $this->getAttribute($context["item"], "url", array()))), "html", null, true);
            echo "\">

\t\t\t";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["text"] ?? $this->getContext($context, "text")));
            foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
                if ( !($context["break"] ?? $this->getContext($context, "break"))) {
                    // line 11
                    echo "\t\t\t\t";
                    $context["x"] = (($context["x"] ?? $this->getContext($context, "x")) + twig_length_filter($this->env, $context["t"]));
                    // line 12
                    echo "\t\t\t\t";
                    if ((($context["x"] ?? $this->getContext($context, "x")) < 38)) {
                        // line 13
                        echo "\t\t\t\t\t";
                        echo twig_escape_filter($this->env, $context["t"], "html", null, true);
                        echo "
\t\t\t\t";
                    } else {
                        // line 15
                        echo "\t\t\t\t...
\t\t\t\t\t";
                        // line 16
                        $context["break"] = true;
                        // line 17
                        echo "\t\t\t\t";
                    }
                    // line 18
                    echo "\t\t\t";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "
\t\t</a>
\t</span>


\t<p><a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("plugins_news_view", array("url" => $this->getAttribute($context["item"], "url", array()))), "html", null, true);
            echo "\" title=\"news & views\">news & views</a></p>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "PluginsNewsBundle:News:main-mozaic-news-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 24,  77 => 19,  70 => 18,  67 => 17,  65 => 16,  62 => 15,  56 => 13,  53 => 12,  50 => 11,  45 => 10,  40 => 8,  36 => 6,  33 => 5,  29 => 4,  26 => 3,  23 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for item in news %}
\t{% set x = 0 %}
\t{% set break = false %}
\t{% set name %}{% endset %}
\t{% set text = item.name | split(' ') %}

\t<span>
\t\t<a href=\"{{ path('plugins_news_view', {'url' : item.url}) }}\">

\t\t\t{% for t in text if not break %}
\t\t\t\t{% set x = (x + t|length) %}
\t\t\t\t{% if (x) < 38 %}
\t\t\t\t\t{{t}}
\t\t\t\t{% else %}
\t\t\t\t...
\t\t\t\t\t{% set break = true %}
\t\t\t\t{% endif %}
\t\t\t{% endfor %}

\t\t</a>
\t</span>


\t<p><a href=\"{{ path('plugins_news_view', {'url' : item.url}) }}\" title=\"news & views\">news & views</a></p>

{% endfor %}
", "PluginsNewsBundle:News:main-mozaic-news-item.html.twig", "/home/szpaklabs/work/projects/sharovalaw-com/src/Plugins/NewsBundle/Resources/views/News/main-mozaic-news-item.html.twig");
    }
}
