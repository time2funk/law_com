<?php

/* PluginsBlogBundle:Blog:page_to_meta.html.twig */
class __TwigTemplate_24dc85ff87263130502c9b680bd2d63545b5f1f0738948e9e6fa05286a314924 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'pageToMeta' => array($this, 'block_pageToMeta'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('pageToMeta', $context, $blocks);
    }

    public function block_pageToMeta($context, array $blocks = array())
    {
        // line 2
        echo "\t";
        ob_start();
        // line 3
        echo "\t";
        if ((($context["page"] ?? $this->getContext($context, "page")) == 1)) {
            echo " - Law office of Yelena Sharova";
        }
        // line 4
        echo "\t";
        if ((($context["pages"] ?? $this->getContext($context, "pages")) > 1)) {
            // line 5
            echo "\t";
            if ((($context["page"] ?? $this->getContext($context, "page")) != 1)) {
                echo " - Page ";
                echo twig_escape_filter($this->env, ($context["page"] ?? $this->getContext($context, "page")), "html", null, true);
            }
            // line 6
            echo "\t";
        }
        // line 7
        echo "\t";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "PluginsBlogBundle:Blog:page_to_meta.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  46 => 7,  43 => 6,  37 => 5,  34 => 4,  29 => 3,  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block pageToMeta %}
\t{% spaceless %}
\t{% if (page == 1) %} - Law office of Yelena Sharova{% endif %}
\t{% if (pages > 1) %}
\t{% if (page != 1) %} - Page {{ page }}{% endif %}
\t{% endif %}
\t{% endspaceless %}
{% endblock %}
", "PluginsBlogBundle:Blog:page_to_meta.html.twig", "/home/szpaklabs/work/projects/sharovalaw-com/src/Plugins/BlogBundle/Resources/views/Blog/page_to_meta.html.twig");
    }
}
