<?php

/* PluginsBlogBundle:Blog:search_form.html.twig */
class __TwigTemplate_2660b575632c357abb0655d9a4612efeea6918b2e40fa0853197a0abe1d3a2a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'searchForm' => array($this, 'block_searchForm'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('searchForm', $context, $blocks);
    }

    public function block_searchForm($context, array $blocks = array())
    {
        // line 2
        echo "    <div class=\"psearch\" >
        <form action=\"";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("plugins_blog_homepage");
        echo "\" method=\"get\" id=\"search-form\">
              <input id=\"blog-queries\" type=\"text\" placeholder=\"\" name=\"q\" value=\"";
        // line 4
        echo twig_escape_filter($this->env, ($context["queries"] ?? $this->getContext($context, "queries")), "html", null, true);
        echo "\"
                     class=\"form-control\"/>
              <button type=\"submit\" class=\"search-submit\"><img class=\"s_pbtn\" src=\"/img/s-icon.svg\" alt=\"\"></button>
        </form>
    </div>
";
    }

    public function getTemplateName()
    {
        return "PluginsBlogBundle:Blog:search_form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  29 => 3,  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block searchForm %}
    <div class=\"psearch\" >
        <form action=\"{{ path(\"plugins_blog_homepage\") }}\" method=\"get\" id=\"search-form\">
              <input id=\"blog-queries\" type=\"text\" placeholder=\"\" name=\"q\" value=\"{{ queries }}\"
                     class=\"form-control\"/>
              <button type=\"submit\" class=\"search-submit\"><img class=\"s_pbtn\" src=\"/img/s-icon.svg\" alt=\"\"></button>
        </form>
    </div>
{% endblock %}
", "PluginsBlogBundle:Blog:search_form.html.twig", "/home/szpaklabs/work/projects/sharovalaw-com/src/Plugins/BlogBundle/Resources/views/Blog/search_form.html.twig");
    }
}
