<?php

/* default/header.html.twig */
class __TwigTemplate_54488b6f633553ce88c32a4162fda5269ee91b44c85a0eeff4e4332e942654fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'headerContent' => array($this, 'block_headerContent'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('headerContent', $context, $blocks);
    }

    public function block_headerContent($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["route"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method");
        // line 3
        echo "\t\t<header id=\"header\" class=\"container-fluid\">
\t\t\t<div class=\"top_menu\">
\t\t\t\t<div class=\"container justify-content-end\">
\t\t\t\t\t<span class=\"text\">Call Today for a Free Consultation</span>
\t\t\t\t\t<span class=\"phone\">";
        // line 7
        echo twig_escape_filter($this->env, ($context["contact_phone"] ?? $this->getContext($context, "contact_phone")), "html", null, true);
        echo "</span>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t";
        // line 11
        $this->loadTemplate("default/menu_section.html.twig", "default/header.html.twig", 11)->display($context);
        // line 12
        echo "\t\t</header>
";
    }

    public function getTemplateName()
    {
        return "default/header.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  44 => 12,  42 => 11,  35 => 7,  29 => 3,  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block headerContent %}
    {% set route = app.request.attributes.get('_route') %}
\t\t<header id=\"header\" class=\"container-fluid\">
\t\t\t<div class=\"top_menu\">
\t\t\t\t<div class=\"container justify-content-end\">
\t\t\t\t\t<span class=\"text\">Call Today for a Free Consultation</span>
\t\t\t\t\t<span class=\"phone\">{{ contact_phone }}</span>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t{% include \"default/menu_section.html.twig\" %}
\t\t</header>
{% endblock %}
", "default/header.html.twig", "/home/szpaklabs/work/projects/sharovalaw-com/app/Resources/views/default/header.html.twig");
    }
}
