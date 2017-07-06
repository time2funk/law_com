<?php

/* PluginsNewsBundle:News:page_to_meta_news.html.twig */
class __TwigTemplate_ac3934e1ffad7ac192b39ad5ee0248b23a92fd7a79a1d88ba9f1e583e266025b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'pageToMetaNews' => array($this, 'block_pageToMetaNews'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('pageToMetaNews', $context, $blocks);
    }

    public function block_pageToMetaNews($context, array $blocks = array())
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
                // line 6
                echo "\t&nbsp;- Page ";
                echo twig_escape_filter($this->env, ($context["page"] ?? $this->getContext($context, "page")), "html", null, true);
                echo "
\t";
            }
            // line 8
            echo "\t";
        }
        // line 9
        echo "\t";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "PluginsNewsBundle:News:page_to_meta_news.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  49 => 9,  46 => 8,  40 => 6,  37 => 5,  34 => 4,  29 => 3,  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block pageToMetaNews %}
\t{% spaceless %}
\t{% if (page == 1) %} - Law office of Yelena Sharova{% endif %}
\t{% if (pages > 1) %}
\t{% if (page != 1) %}
\t&nbsp;- Page {{ page }}
\t{% endif %}
\t{% endif %}
\t{% endspaceless %}
{% endblock %}
", "PluginsNewsBundle:News:page_to_meta_news.html.twig", "/home/szpaklabs/work/projects/sharovalaw-com/src/Plugins/NewsBundle/Resources/views/News/page_to_meta_news.html.twig");
    }
}
