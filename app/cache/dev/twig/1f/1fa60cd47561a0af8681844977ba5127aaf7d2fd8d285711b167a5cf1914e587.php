<?php

/* PluginsPracticAreaBundle:PracticArea:view_sub_section.html.twig */
class __TwigTemplate_49f7f41d1ab1c6c919959477ae71b1d58756f987cab9f815f987dd4d4edb8df6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "PluginsPracticAreaBundle:PracticArea:view_sub_section.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'meta_keywords' => array($this, 'block_meta_keywords'),
            'meta_description' => array($this, 'block_meta_description'),
            'og_title' => array($this, 'block_og_title'),
            'og_descr' => array($this, 'block_og_descr'),
            'last_updated_block' => array($this, 'block_last_updated_block'),
            'ampLinkBlock' => array($this, 'block_ampLinkBlock'),
            'bodyId' => array($this, 'block_bodyId'),
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
        echo "sub";
    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        // line 16
        echo "\t\t<!-- <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl($this->getAttribute(($context["active"] ?? $this->getContext($context, "active")), "photoFullPath", array())), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["active"] ?? $this->getContext($context, "active")), "name", array()), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["active"] ?? $this->getContext($context, "active")), "name", array()), "html", null, true);
        echo "\"/> -->
\t\t<wrapper>
\t\t    <section id=\"sub_section\" class=\"parent container-fluid\">
\t\t        <div class=\"row\">
\t\t            <div class=\"submenu\">
\t\t\t\t\t\t\t\t\t<div id=\"side_menu\">
\t\t\t\t\t\t\t\t\t\t";
        // line 22
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("PluginsPracticAreaBundle:PracticArea:practicVerticalMenuShort", array("activeId" => $this->getAttribute(($context["practicArea"] ?? $this->getContext($context, "practicArea")), "id", array()), "activeSubSectionId" => $this->getAttribute(($context["active"] ?? $this->getContext($context, "active")), "id", array()))), array());
        // line 23
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
<!-- _________________ -->
\t";
        // line 26
        $this->loadTemplate("PluginsPracticAreaBundle:PracticArea:show_pa.html.twig", "PluginsPracticAreaBundle:PracticArea:view_sub_section.html.twig", 26)->display(array_merge($context, array("section" => "", "page" => ($context["active"] ?? $this->getContext($context, "active")), "pa" => ($context["practicArea"] ?? $this->getContext($context, "practicArea")))));
        // line 27
        echo "<!-- _________________ -->

\t\t            <div class=\"contactus\">
\t\t\t\t\t\t\t\t\t\t";
        // line 30
        $this->loadTemplate("AppBundle:Contact:contact_block_form.html.twig", "PluginsPracticAreaBundle:PracticArea:view_sub_section.html.twig", 30)->display($context);
        // line 31
        echo "\t\t            </div>
\t\t        </div>
\t\t    </section>
\t\t</wrapper>

";
    }

    public function getTemplateName()
    {
        return "PluginsPracticAreaBundle:PracticArea:view_sub_section.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 31,  117 => 30,  112 => 27,  110 => 26,  105 => 23,  103 => 22,  89 => 16,  86 => 15,  80 => 14,  75 => 11,  72 => 10,  66 => 8,  60 => 7,  54 => 6,  48 => 5,  42 => 4,  36 => 3,  11 => 1,);
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
{% block last_updated_block %}{{ page.updatedAtDatetime }}{% endblock %}

{% block ampLinkBlock %}
    {% render controller(\"AppBundle:Amp:ampLinkBlock\", {'request' : app.request }) %}
{% endblock %}

{% block bodyId %}sub{% endblock %}
{% block content %}
\t\t<!-- <img src=\"{{ asset(active.photoFullPath) }}\" alt=\"{{ active.name }}\" title=\"{{ active.name }}\"/> -->
\t\t<wrapper>
\t\t    <section id=\"sub_section\" class=\"parent container-fluid\">
\t\t        <div class=\"row\">
\t\t            <div class=\"submenu\">
\t\t\t\t\t\t\t\t\t<div id=\"side_menu\">
\t\t\t\t\t\t\t\t\t\t{% render controller(\"PluginsPracticAreaBundle:PracticArea:practicVerticalMenuShort\", {'activeId' : practicArea.id, 'activeSubSectionId' : active.id}) %}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
<!-- _________________ -->
\t{% include \"PluginsPracticAreaBundle:PracticArea:show_pa.html.twig\" with { 'section' : '', 'page' : active, 'pa' : practicArea}%}
<!-- _________________ -->

\t\t            <div class=\"contactus\">
\t\t\t\t\t\t\t\t\t\t{% include \"AppBundle:Contact:contact_block_form.html.twig\" %}
\t\t            </div>
\t\t        </div>
\t\t    </section>
\t\t</wrapper>

{% endblock %}
", "PluginsPracticAreaBundle:PracticArea:view_sub_section.html.twig", "/home/szpaklabs/work/projects/sharovalaw-com/src/Plugins/PracticAreaBundle/Resources/views/PracticArea/view_sub_section.html.twig");
    }
}
