<?php

/* PluginsPracticAreaBundle:PracticArea:search_practice.html.twig */
class __TwigTemplate_9417861cf65d13ffb05bbc20151aca2fe0d17dc5d62ec75d4fe88d6b0b7092c6 extends Twig_Template
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
        echo "\t\t<div class=\"psearch\" >
\t\t\t\t<input type=\"text\" id='search'>
\t\t\t\t<!-- <i class=\"fa fa-search\" aria-hidden=\"true\"></i> -->
\t\t\t\t<img class=\"s_pbtn\" src=\"/img/s-icon.svg\" alt=\"\">
\t\t</div>
";
    }

    public function getTemplateName()
    {
        return "PluginsPracticAreaBundle:PracticArea:search_practice.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 2,  20 => 1,);
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
\t\t<div class=\"psearch\" >
\t\t\t\t<input type=\"text\" id='search'>
\t\t\t\t<!-- <i class=\"fa fa-search\" aria-hidden=\"true\"></i> -->
\t\t\t\t<img class=\"s_pbtn\" src=\"/img/s-icon.svg\" alt=\"\">
\t\t</div>
{% endblock %}
", "PluginsPracticAreaBundle:PracticArea:search_practice.html.twig", "/home/szpaklabs/work/projects/sharovalaw-com/src/Plugins/PracticAreaBundle/Resources/views/PracticArea/search_practice.html.twig");
    }
}
