<?php

/* PluginsPracticAreaBundle:PracticArea:index.html.twig */
class __TwigTemplate_25d1f0ad422fd3fcb7552d3d863b4eec576ab2492b7fdf78ee73afe39a81c2e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "PluginsPracticAreaBundle:PracticArea:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'meta_keywords' => array($this, 'block_meta_keywords'),
            'meta_description' => array($this, 'block_meta_description'),
            'og_title' => array($this, 'block_og_title'),
            'og_descr' => array($this, 'block_og_descr'),
            'last_updated_block' => array($this, 'block_last_updated_block'),
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
    public function block_bodyId($context, array $blocks = array())
    {
        echo "pa";
    }

    // line 11
    public function block_bodyClass($context, array $blocks = array())
    {
        echo "home";
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "
";
        // line 14
        $this->loadTemplate("default/parallax.html.twig", "PluginsPracticAreaBundle:PracticArea:index.html.twig", 14)->display($context);
        // line 15
        echo "
\t\t<wrapper>
\t\t\t\t<section id=\"parallax\">
\t\t\t\t\t<div class=\"pback\">
\t\t\t\t\t\t<div class=\"light-gray\">

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"side-gray\">

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<img src=\"/img/ny.jpg\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"ptext\" style=\"top: 0px;\">
\t\t\t\t\t\t<h1>
\t\t\t\t\t\t\t";
        // line 29
        echo $this->getAttribute(($context["page"] ?? $this->getContext($context, "page")), "name", array());
        echo "
\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t<span>";
        // line 31
        echo ($context["contact_office"] ?? $this->getContext($context, "contact_office"));
        echo "</span>
\t\t\t\t\t\t</h1>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"overlay\" style=\"bottom: 0px;\">
\t\t\t\t\t\t<img src=\"/img/court.png\">
\t\t\t\t\t</div>
\t\t\t\t</section>
\t\t    <section id=\"pa_section\" class=\"parent container-fluid\">
\t\t        <div class=\"row\">
\t\t            <div class=\"submenu\">

\t\t\t\t\t\t\t\t\t<div id=\"side_menu\">
\t\t\t\t\t\t\t\t\t\t";
        // line 43
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("PluginsPracticAreaBundle:PracticArea:practicVerticalMenuShort", array("activeId" => $this->getAttribute(($context["page"] ?? $this->getContext($context, "page")), "id", array()), "home" => true)), array());
        // line 44
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
<!-- _________________ -->
\t\t\t\t\t\t\t\t";
        // line 47
        $this->loadTemplate("PluginsPracticAreaBundle:PracticArea:show_pa.html.twig", "PluginsPracticAreaBundle:PracticArea:index.html.twig", 47)->display(array_merge($context, array("section" => "home", "page" => ($context["page"] ?? $this->getContext($context, "page")))));
        // line 48
        echo "<!-- _________________ -->

\t\t            <div class=\"contactus\">
\t\t\t\t\t\t\t\t\t\t";
        // line 51
        $this->loadTemplate("AppBundle:Contact:contact_block_form.html.twig", "PluginsPracticAreaBundle:PracticArea:index.html.twig", 51)->display($context);
        // line 52
        echo "\t\t            </div>
\t\t        </div>
\t\t    </section>
\t\t</wrapper>


";
    }

    public function getTemplateName()
    {
        return "PluginsPracticAreaBundle:PracticArea:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 52,  142 => 51,  137 => 48,  135 => 47,  130 => 44,  128 => 43,  113 => 31,  108 => 29,  92 => 15,  90 => 14,  87 => 13,  84 => 12,  78 => 11,  72 => 10,  66 => 8,  60 => 7,  54 => 6,  48 => 5,  42 => 4,  36 => 3,  11 => 1,);
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

{% block bodyId %}pa{% endblock %}
{% block bodyClass %}home{% endblock %}
{% block content %}

{% include \"default/parallax.html.twig\" %}

\t\t<wrapper>
\t\t\t\t<section id=\"parallax\">
\t\t\t\t\t<div class=\"pback\">
\t\t\t\t\t\t<div class=\"light-gray\">

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"side-gray\">

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<img src=\"/img/ny.jpg\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"ptext\" style=\"top: 0px;\">
\t\t\t\t\t\t<h1>
\t\t\t\t\t\t\t{{ page.name | raw }}
\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t<span>{{ contact_office | raw }}</span>
\t\t\t\t\t\t</h1>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"overlay\" style=\"bottom: 0px;\">
\t\t\t\t\t\t<img src=\"/img/court.png\">
\t\t\t\t\t</div>
\t\t\t\t</section>
\t\t    <section id=\"pa_section\" class=\"parent container-fluid\">
\t\t        <div class=\"row\">
\t\t            <div class=\"submenu\">

\t\t\t\t\t\t\t\t\t<div id=\"side_menu\">
\t\t\t\t\t\t\t\t\t\t{% render controller(\"PluginsPracticAreaBundle:PracticArea:practicVerticalMenuShort\", {'activeId' : page.id, 'home' : true }) %}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
<!-- _________________ -->
\t\t\t\t\t\t\t\t{% include \"PluginsPracticAreaBundle:PracticArea:show_pa.html.twig\" with { 'section' : 'home', 'page' : page}%}
<!-- _________________ -->

\t\t            <div class=\"contactus\">
\t\t\t\t\t\t\t\t\t\t{% include \"AppBundle:Contact:contact_block_form.html.twig\" %}
\t\t            </div>
\t\t        </div>
\t\t    </section>
\t\t</wrapper>


{% endblock %}
", "PluginsPracticAreaBundle:PracticArea:index.html.twig", "/home/szpaklabs/work/projects/sharovalaw-com/src/Plugins/PracticAreaBundle/Resources/views/PracticArea/index.html.twig");
    }
}
