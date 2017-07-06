<?php

/* PluginsPracticAreaBundle:PracticArea:view.html.twig */
class __TwigTemplate_c7215331aea0e268f3fcaa66f3b56e6200043c412e74a4a9a30f110294e0c22a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "PluginsPracticAreaBundle:PracticArea:view.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'meta_keywords' => array($this, 'block_meta_keywords'),
            'meta_description' => array($this, 'block_meta_description'),
            'og_title' => array($this, 'block_og_title'),
            'og_descr' => array($this, 'block_og_descr'),
            'last_updated_block' => array($this, 'block_last_updated_block'),
            'ampLinkBlock' => array($this, 'block_ampLinkBlock'),
            'bodyId' => array($this, 'block_bodyId'),
            'bodyClass' => array($this, 'block_bodyClass'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["page"] ?? $this->getContext($context, "page")), "metatitle", array())) ? ($this->getAttribute(($context["page"] ?? $this->getContext($context, "page")), "metatitle", array())) : ($this->renderParentBlock("title", $context, $blocks))), "html", null, true);
    }

    // line 4
    public function block_meta_keywords($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["page"] ?? $this->getContext($context, "page")), "metakeywords", array())) ? ($this->getAttribute(($context["page"] ?? $this->getContext($context, "page")), "metakeywords", array())) : ($this->renderParentBlock("meta_keywords", $context, $blocks))), "html", null, true);
    }

    // line 5
    public function block_meta_description($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["page"] ?? $this->getContext($context, "page")), "metadescription", array())) ? ($this->getAttribute(($context["page"] ?? $this->getContext($context, "page")), "metadescription", array())) : ($this->renderParentBlock("meta_description", $context, $blocks))), "html", null, true);
    }

    // line 6
    public function block_og_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["page"] ?? $this->getContext($context, "page")), "metatitle", array())) ? ($this->getAttribute(($context["page"] ?? $this->getContext($context, "page")), "metatitle", array())) : ($this->renderParentBlock("og_title", $context, $blocks))), "html", null, true);
    }

    // line 7
    public function block_og_descr($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["page"] ?? $this->getContext($context, "page")), "metadescription", array())) ? ($this->getAttribute(($context["page"] ?? $this->getContext($context, "page")), "metadescription", array())) : ($this->renderParentBlock("og_descr", $context, $blocks))), "html", null, true);
    }

    // line 8
    public function block_last_updated_block($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? $this->getContext($context, "page")), "updatedAtDatetime", array()), "html", null, true);
    }

    // line 10
    public function block_ampLinkBlock($context, array $blocks = array())
    {
        // line 11
        echo "    ";
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Amp:ampLinkBlock", array("request" => $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()))), array());
    }

    // line 14
    public function block_bodyId($context, array $blocks = array())
    {
        echo "pa";
    }

    // line 15
    public function block_bodyClass($context, array $blocks = array())
    {
        echo "section";
    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        // line 17
        echo "\t\t<wrapper>
\t\t    <section id=\"sub_section\" class=\"parent container-fluid\">
\t\t        <div class=\"row\">
\t\t            <div class=\"submenu\">

\t\t\t\t\t\t\t\t\t<div id=\"side_menu\">
\t\t\t\t\t\t\t\t\t\t";
        // line 23
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("PluginsPracticAreaBundle:PracticArea:practicVerticalMenuShort", array("activeId" => $this->getAttribute(($context["active"] ?? $this->getContext($context, "active")), "id", array()))), array());
        // line 24
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
<!-- _________________ -->
  ";
        // line 27
        $this->loadTemplate("PluginsPracticAreaBundle:PracticArea:show_pa.html.twig", "PluginsPracticAreaBundle:PracticArea:view.html.twig", 27)->display(array_merge($context, array("section" => "sub", "page" => ($context["active"] ?? $this->getContext($context, "active")))));
        // line 28
        echo "<!-- _________________ -->

\t\t            <div class=\"contactus\">
\t\t\t\t\t\t\t\t\t\t";
        // line 31
        $this->loadTemplate("AppBundle:Contact:contact_block_form.html.twig", "PluginsPracticAreaBundle:PracticArea:view.html.twig", 31)->display($context);
        // line 32
        echo "\t\t            </div>
\t\t        </div>
\t\t    </section>
\t\t</wrapper>
";
    }

    public function getTemplateName()
    {
        return "PluginsPracticAreaBundle:PracticArea:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 32,  118 => 31,  113 => 28,  111 => 27,  106 => 24,  104 => 23,  96 => 17,  93 => 16,  87 => 15,  81 => 14,  76 => 11,  73 => 10,  67 => 8,  61 => 7,  55 => 6,  49 => 5,  43 => 4,  37 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'AppBundle::layout.html.twig' %}

{% block title %}{{- page.metatitle ? page.metatitle : parent() -}}{% endblock %}
{% block meta_keywords %}{{- page.metakeywords ? page.metakeywords : parent() -}}{% endblock %}
{% block meta_description %}{{- page.metadescription ? page.metadescription : parent() -}}{% endblock %}
{% block og_title %}{{- page.metatitle ? page.metatitle : parent() -}}{% endblock %}
{% block og_descr %}{{- page.metadescription ? page.metadescription : parent() -}}{% endblock %}
{% block last_updated_block %}{{ page.updatedAtDatetime}}{% endblock %}

{% block ampLinkBlock %}
    {% render controller(\"AppBundle:Amp:ampLinkBlock\", {'request' : app.request }) %}
{% endblock %}

{% block bodyId %}pa{% endblock %}
{% block bodyClass %}section{% endblock %}
{% block content %}
\t\t<wrapper>
\t\t    <section id=\"sub_section\" class=\"parent container-fluid\">
\t\t        <div class=\"row\">
\t\t            <div class=\"submenu\">

\t\t\t\t\t\t\t\t\t<div id=\"side_menu\">
\t\t\t\t\t\t\t\t\t\t{% render controller(\"PluginsPracticAreaBundle:PracticArea:practicVerticalMenuShort\", {'activeId' : active.id}) %}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
<!-- _________________ -->
  {% include \"PluginsPracticAreaBundle:PracticArea:show_pa.html.twig\" with { 'section' : 'sub', 'page' : active}%}
<!-- _________________ -->

\t\t            <div class=\"contactus\">
\t\t\t\t\t\t\t\t\t\t{% include \"AppBundle:Contact:contact_block_form.html.twig\" %}
\t\t            </div>
\t\t        </div>
\t\t    </section>
\t\t</wrapper>
{% endblock %}
", "PluginsPracticAreaBundle:PracticArea:view.html.twig", "/home/szpaklabs/work/projects/sharovalaw-com/src/Plugins/PracticAreaBundle/Resources/views/PracticArea/view.html.twig");
    }
}
