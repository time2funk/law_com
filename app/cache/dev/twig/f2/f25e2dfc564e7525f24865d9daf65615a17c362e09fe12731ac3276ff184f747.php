<?php

/* PluginsBlogBundle:Blog:page_to_name.html.twig */
class __TwigTemplate_422b765159011c3c58c36c9a762814116a950a78db63a613fe29ae91f5e72545 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'pageToName' => array($this, 'block_pageToName'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('pageToName', $context, $blocks);
    }

    public function block_pageToName($context, array $blocks = array())
    {
        // line 2
        echo "\t";
        ob_start();
        // line 3
        echo "    ";
        if ((($context["pages"] ?? $this->getContext($context, "pages")) > 1)) {
            // line 4
            echo "      ";
            if ((($context["page"] ?? $this->getContext($context, "page")) != 1)) {
                // line 5
                echo "        ";
                echo twig_escape_filter($this->env, ($context["page"] ?? $this->getContext($context, "page")), "html", null, true);
                echo "
      ";
            }
            // line 7
            echo "    ";
        }
        // line 8
        echo "\t";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "PluginsBlogBundle:Blog:page_to_name.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  44 => 8,  41 => 7,  35 => 5,  32 => 4,  29 => 3,  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block pageToName %}
\t{% spaceless %}
    {% if (pages > 1) %}
      {% if (page != 1) %}
        {{ page }}
      {% endif %}
    {% endif %}
\t{% endspaceless %}
{% endblock %}
", "PluginsBlogBundle:Blog:page_to_name.html.twig", "/home/szpaklabs/work/projects/sharovalaw-com/src/Plugins/BlogBundle/Resources/views/Blog/page_to_name.html.twig");
    }
}
