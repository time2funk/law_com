<?php

/* default/top_section.html.twig */
class __TwigTemplate_6fc33d7e9179b949df25b1f55d301eb935bb8223e8a54f7b326c34059322837e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'topSection' => array($this, 'block_topSection'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('topSection', $context, $blocks);
    }

    public function block_topSection($context, array $blocks = array())
    {
        // line 2
        echo "\t<div class=\"headings\">
\t\t<div class=\"title-box\">
\t\t\t<h1>";
        // line 4
        echo twig_escape_filter($this->env, ($context["section_name"] ?? $this->getContext($context, "section_name")), "html", null, true);
        echo "</h1>
\t\t\t";
        // line 5
        if ((array_key_exists("section_desc", $context) &&  !twig_test_empty(($context["section_desc"] ?? $this->getContext($context, "section_desc"))))) {
            // line 6
            echo "\t\t\t<div class=\"short\">";
            echo twig_escape_filter($this->env, ($context["section_desc"] ?? $this->getContext($context, "section_desc")), "html", null, true);
            echo "</div>
\t\t\t";
        }
        // line 8
        echo "\t\t</div>
\t\t";
        // line 9
        if (array_key_exists("backgroundImage", $context)) {
            // line 10
            echo "\t\t\t<img src=\"";
            echo twig_escape_filter($this->env, ($context["backgroundImage"] ?? $this->getContext($context, "backgroundImage")), "html", null, true);
            echo "\" alt=\"Sharova Law Firm\">
\t\t";
        } else {
            // line 12
            echo "\t\t\t<img src=\"../../../../../../img/29_CYBER CRIMES.jpg\" alt=\"Sharova Law Firm\">
\t\t";
        }
        // line 14
        echo "\t</div>
";
    }

    public function getTemplateName()
    {
        return "default/top_section.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  57 => 14,  53 => 12,  47 => 10,  45 => 9,  42 => 8,  36 => 6,  34 => 5,  30 => 4,  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block topSection %}
\t<div class=\"headings\">
\t\t<div class=\"title-box\">
\t\t\t<h1>{{ section_name }}</h1>
\t\t\t{% if section_desc is defined and not section_desc is empty %}
\t\t\t<div class=\"short\">{{ section_desc }}</div>
\t\t\t{% endif %}
\t\t</div>
\t\t{% if backgroundImage is defined %}
\t\t\t<img src=\"{{ backgroundImage }}\" alt=\"Sharova Law Firm\">
\t\t{% else %}
\t\t\t<img src=\"../../../../../../img/29_CYBER CRIMES.jpg\" alt=\"Sharova Law Firm\">
\t\t{% endif %}
\t</div>
{% endblock %}
", "default/top_section.html.twig", "/home/szpaklabs/work/projects/sharovalaw-com/app/Resources/views/default/top_section.html.twig");
    }
}
