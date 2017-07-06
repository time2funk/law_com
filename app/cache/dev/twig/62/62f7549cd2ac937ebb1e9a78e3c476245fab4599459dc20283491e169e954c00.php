<?php

/* PluginsNewsBundle:News:news_mozaic.html.twig */
class __TwigTemplate_d08bd927911848f2a935cd35ebe7be31426b2a9ee7414de318c83f9e44602aa4 extends Twig_Template
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
        echo "<section id='p_table'>

\t<div class=\"part f\">

\t";
        // line 5
        ob_start();
        $context["item"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 6
        echo "\t";
        $context["break"] = false;
        // line 7
        echo "\t";
        $context["type"] = array(1 => "f", 2 => "s", 3 => "t", 4 => "f", 5 => "s", 6 => "t", 7 => "fth", 8 => "f", 9 => "s", 10 => "t");
        // line 19
        echo "\t";
        $context["mask"] = array(1 => "a", 2 => "b", 3 => "b", 4 => "c", 5 => "a", 6 => "a", 7 => "c", 8 => "b", 9 => "a", 10 => "b");
        // line 31
        echo "

\t<!-- LOOP -->

\t";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["news"] ?? $this->getContext($context, "news")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            if ( !($context["break"] ?? $this->getContext($context, "break"))) {
                // line 36
                echo "
\t";
                // line 37
                if (($this->getAttribute($context["loop"], "index", array()) % 2 == 1)) {
                    // line 38
                    echo "    <div class=\"block back ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["type"] ?? $this->getContext($context, "type")), $this->getAttribute($context["loop"], "index", array()), array(), "array"), "html", null, true);
                    echo "\">
\t";
                } else {
                    // line 40
                    echo "    <div class=\"block ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["type"] ?? $this->getContext($context, "type")), $this->getAttribute($context["loop"], "index", array()), array(), "array"), "html", null, true);
                    echo "\">
\t";
                }
                // line 42
                echo "

\t\t\t<div class=\"mask ";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute(($context["mask"] ?? $this->getContext($context, "mask")), $this->getAttribute($context["loop"], "index", array()), array(), "array"), "html", null, true);
                echo "\"></div>
\t\t\t<div class=\"wrapper\">
\t\t\t\t<div class=\"cover\">
\t\t\t\t\t<a href=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("plugins_news_view", array("url" => $this->getAttribute($context["entity"], "url", array()))), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "name", array()), "html", null, true);
                echo "\">
\t\t\t\t\t\t<h3>";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "name", array()), "html", null, true);
                echo "</h3>
\t\t\t\t\t\t";
                // line 49
                if (($this->getAttribute(($context["mask"] ?? $this->getContext($context, "mask")), $this->getAttribute($context["loop"], "index", array()), array(), "array") == "a")) {
                    // line 50
                    echo "\t\t\t\t\t\t<span class=\"link\">
\t\t\t\t\t\t";
                } else {
                    // line 52
                    echo "\t\t\t\t\t\t<span class=\"link_gray\">
\t\t\t\t\t\t";
                }
                // line 54
                echo "\t\t\t\t\t\t\tread more
\t\t\t\t\t\t</span>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t";
                // line 61
                if (($this->getAttribute($context["loop"], "index", array()) == 3)) {
                    // line 62
                    echo "\t</div>

\t<div class=\"part s\">
\t";
                }
                // line 66
                echo "\t";
                if (($this->getAttribute($context["loop"], "index", array()) == 7)) {
                    // line 67
                    echo "\t</div>

\t<div class=\"part t\">
\t";
                }
                // line 71
                echo "\t";
                if (($this->getAttribute($context["loop"], "index", array()) == 10)) {
                    // line 72
                    echo "\t\t";
                    $context["break"] = true;
                    // line 73
                    echo "\t";
                }
                // line 74
                echo "\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "
\t<!-- END LOOP -->

\t</div>

</section>
";
    }

    public function getTemplateName()
    {
        return "PluginsNewsBundle:News:news_mozaic.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 75,  136 => 74,  133 => 73,  130 => 72,  127 => 71,  121 => 67,  118 => 66,  112 => 62,  110 => 61,  101 => 54,  97 => 52,  93 => 50,  91 => 49,  87 => 48,  81 => 47,  75 => 44,  71 => 42,  65 => 40,  59 => 38,  57 => 37,  54 => 36,  43 => 35,  37 => 31,  34 => 19,  31 => 7,  28 => 6,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id='p_table'>

\t<div class=\"part f\">

\t{% set item %}{% endset %}
\t{% set break = false %}
\t{% set type = {
\t\t1: 'f',
\t\t2: 's',
\t\t3: 't',
\t\t4: 'f',
\t\t5: 's',
\t\t6: 't',
\t\t7: 'fth',
\t\t8: 'f',
\t\t9: 's',
\t\t10: 't'
\t} %}
\t{% set mask = {
\t\t1: 'a',
\t\t2: 'b',
\t\t3: 'b',
\t\t4: 'c',
\t\t5: 'a',
\t\t6: 'a',
\t\t7: 'c',
\t\t8: 'b',
\t\t9: 'a',
\t\t10: 'b'
\t} %}


\t<!-- LOOP -->

\t{% for entity in news if not break %}

\t{% if loop.index is odd %}
    <div class=\"block back {{type[loop.index]}}\">
\t{% else %}
    <div class=\"block {{type[loop.index]}}\">
\t{% endif %}


\t\t\t<div class=\"mask {{mask[loop.index]}}\"></div>
\t\t\t<div class=\"wrapper\">
\t\t\t\t<div class=\"cover\">
\t\t\t\t\t<a href=\"{{ path('plugins_news_view', {'url' : entity.url}) }}\" title=\"{{ entity.name }}\">
\t\t\t\t\t\t<h3>{{ entity.name }}</h3>
\t\t\t\t\t\t{% if mask[loop.index] == 'a' %}
\t\t\t\t\t\t<span class=\"link\">
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t<span class=\"link_gray\">
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\tread more
\t\t\t\t\t\t</span>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t{% if loop.index == 3 %}
\t</div>

\t<div class=\"part s\">
\t{% endif %}
\t{% if loop.index == 7 %}
\t</div>

\t<div class=\"part t\">
\t{% endif %}
\t{% if loop.index == 10 %}
\t\t{% set break = true %}
\t{% endif %}
\t{% endfor %}

\t<!-- END LOOP -->

\t</div>

</section>
", "PluginsNewsBundle:News:news_mozaic.html.twig", "/home/szpaklabs/work/projects/sharovalaw-com/src/Plugins/NewsBundle/Resources/views/News/news_mozaic.html.twig");
    }
}
