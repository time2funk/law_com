<?php

/* PluginsBlogBundle:Blog:main-mozaic-blog-item.html.twig */
class __TwigTemplate_ae7437c1134e342d21d63cde2ce49d1c343f987b42e72f3f2810729e5c926f21 extends Twig_Template
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
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? $this->getContext($context, "posts")));
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
            echo "\t";
            if (($this->getAttribute($context["item"], "blogCategory", array()) == ($context["category"] ?? $this->getContext($context, "category")))) {
                // line 7
                echo "
\t\t<span>
\t\t\t<a href=\"";
                // line 9
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("plugins_blog_view_post_without_topic", array("categoryUrl" => $this->getAttribute($this->getAttribute($context["item"], "blogCategory", array()), "url", array()), "id" => $this->getAttribute($context["item"], "id", array()), "postUrl" => $this->getAttribute($context["item"], "url", array()))), "html", null, true);
                echo "\">

\t\t\t\t";
                // line 11
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["text"] ?? $this->getContext($context, "text")));
                foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
                    if ( !($context["break"] ?? $this->getContext($context, "break"))) {
                        // line 12
                        echo "\t\t\t\t\t";
                        $context["x"] = (($context["x"] ?? $this->getContext($context, "x")) + twig_length_filter($this->env, $context["t"]));
                        // line 13
                        echo "\t\t\t\t\t";
                        if ((($context["x"] ?? $this->getContext($context, "x")) < 79)) {
                            // line 14
                            echo "\t\t\t\t\t\t";
                            echo twig_escape_filter($this->env, $context["t"], "html", null, true);
                            echo "
\t\t\t\t\t";
                        } else {
                            // line 16
                            echo "\t\t\t\t\t\t";
                            $context["break"] = true;
                            // line 17
                            echo "\t\t\t\t\t";
                        }
                        // line 18
                        echo "\t\t\t\t";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 19
                echo "
\t\t\t</a>
\t\t</span>

\t";
            } else {
                // line 24
                echo "
\t\t<span><a href=\"";
                // line 25
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("plugins_blog_homepage");
                echo "\">Blog</a></span>

\t";
            }
            // line 28
            echo "
\t<p><a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("plugins_blog_view_post_without_topic", array("categoryUrl" => $this->getAttribute($this->getAttribute($context["item"], "blogCategory", array()), "url", array()), "id" => $this->getAttribute($context["item"], "id", array()), "postUrl" => $this->getAttribute($context["item"], "url", array()))), "html", null, true);
            echo "\">blog</a></p>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "PluginsBlogBundle:Blog:main-mozaic-blog-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 29,  94 => 28,  88 => 25,  85 => 24,  78 => 19,  71 => 18,  68 => 17,  65 => 16,  59 => 14,  56 => 13,  53 => 12,  48 => 11,  43 => 9,  39 => 7,  36 => 6,  33 => 5,  29 => 4,  26 => 3,  23 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for item in posts %}
\t{% set x = 0 %}
\t{% set break = false %}
\t{% set name %}{% endset %}
\t{% set text = item.name | split(' ') %}
\t{% if item.blogCategory == category %}

\t\t<span>
\t\t\t<a href=\"{{ path(\"plugins_blog_view_post_without_topic\", {categoryUrl: item.blogCategory.url, id: item.id, postUrl: item.url}) }}\">

\t\t\t\t{% for t in text if not break %}
\t\t\t\t\t{% set x = (x + t|length) %}
\t\t\t\t\t{% if (x) < 79 %}
\t\t\t\t\t\t{{t}}
\t\t\t\t\t{% else %}
\t\t\t\t\t\t{% set break = true %}
\t\t\t\t\t{% endif %}
\t\t\t\t{% endfor %}

\t\t\t</a>
\t\t</span>

\t{% else %}

\t\t<span><a href=\"{{ path('plugins_blog_homepage') }}\">Blog</a></span>

\t{% endif %}

\t<p><a href=\"{{ path(\"plugins_blog_view_post_without_topic\", {categoryUrl: item.blogCategory.url, id: item.id, postUrl: item.url}) }}\">blog</a></p>

{% endfor %}
", "PluginsBlogBundle:Blog:main-mozaic-blog-item.html.twig", "/home/szpaklabs/work/projects/sharovalaw-com/src/Plugins/BlogBundle/Resources/views/Blog/main-mozaic-blog-item.html.twig");
    }
}
