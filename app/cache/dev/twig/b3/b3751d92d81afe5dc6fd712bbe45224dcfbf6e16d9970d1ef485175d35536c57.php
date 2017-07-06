<?php

/* PluginsNewsBundle:News:news.html.twig */
class __TwigTemplate_628812da4e9d0de84614f0c304f6a9c5fd99948bb9e77dcffb6cc73a81e76163 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "PluginsNewsBundle:News:news.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'meta_keywords' => array($this, 'block_meta_keywords'),
            'meta_description' => array($this, 'block_meta_description'),
            'og_title' => array($this, 'block_og_title'),
            'og_descr' => array($this, 'block_og_descr'),
            'last_updated_block' => array($this, 'block_last_updated_block'),
            'canonicalLinkBlock' => array($this, 'block_canonicalLinkBlock'),
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
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["content"] ?? $this->getContext($context, "content")), "metatitle", array())) ? ($this->getAttribute(($context["content"] ?? $this->getContext($context, "content")), "metatitle", array())) : ($this->renderParentBlock("title", $context, $blocks))), "html", null, true);
        $this->loadTemplate("PluginsNewsBundle:News:page_to_meta_news.html.twig", "PluginsNewsBundle:News:news.html.twig", 3)->display(array_merge($context, array("pages" => ($context["pages"] ?? $this->getContext($context, "pages")), "page" => ($context["page"] ?? $this->getContext($context, "page")))));
    }

    // line 4
    public function block_meta_keywords($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["content"] ?? $this->getContext($context, "content")), "metakeywords", array())) ? ($this->getAttribute(($context["content"] ?? $this->getContext($context, "content")), "metakeywords", array())) : ($this->renderParentBlock("meta_keywords", $context, $blocks))), "html", null, true);
    }

    // line 5
    public function block_meta_description($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["content"] ?? $this->getContext($context, "content")), "metadescription", array())) ? ($this->getAttribute(($context["content"] ?? $this->getContext($context, "content")), "metadescription", array())) : ($this->renderParentBlock("meta_description", $context, $blocks))), "html", null, true);
        $this->loadTemplate("PluginsBlogBundle:Blog:page_to_meta.html.twig", "PluginsNewsBundle:News:news.html.twig", 5)->display(array_merge($context, array("pages" => ($context["pages"] ?? $this->getContext($context, "pages")), "page" => ($context["page"] ?? $this->getContext($context, "page")))));
    }

    // line 6
    public function block_og_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["content"] ?? $this->getContext($context, "content")), "metatitle", array())) ? ($this->getAttribute(($context["content"] ?? $this->getContext($context, "content")), "metatitle", array())) : ($this->renderParentBlock("og_title", $context, $blocks))), "html", null, true);
        $this->loadTemplate("PluginsBlogBundle:Blog:page_to_meta.html.twig", "PluginsNewsBundle:News:news.html.twig", 6)->display(array_merge($context, array("pages" => ($context["pages"] ?? $this->getContext($context, "pages")), "page" => ($context["page"] ?? $this->getContext($context, "page")))));
    }

    // line 7
    public function block_og_descr($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["content"] ?? $this->getContext($context, "content")), "metadescription", array())) ? ($this->getAttribute(($context["content"] ?? $this->getContext($context, "content")), "metadescription", array())) : ($this->renderParentBlock("og_descr", $context, $blocks))), "html", null, true);
    }

    // line 8
    public function block_last_updated_block($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute(($context["content"] ?? $this->getContext($context, "content")), "updatedAtDatetime", array()), "html", null, true);
    }

    // line 10
    public function block_canonicalLinkBlock($context, array $blocks = array())
    {
    }

    // line 14
    public function block_bodyId($context, array $blocks = array())
    {
        echo "news";
    }

    // line 15
    public function block_bodyClass($context, array $blocks = array())
    {
        echo "news";
    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        // line 18
        echo "<wrapper>

\t\t";
        // line 23
        echo "
\t\t";
        // line 24
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("PluginsNewsBundle:News:lastMozaicList"), array());
        // line 25
        echo "
\t\t<section id=\"blog\" class=\"parent container-fluid\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"submenu\">

\t\t\t\t\t\t\t<div id=\"side_menu\">

\t\t\t\t\t\t\t\t<h2>News & Views</h2>
\t\t\t\t\t\t\t\t<div class=\"psearch\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id='search'>
\t\t\t\t\t\t\t\t\t\t<!-- <i class=\"fa fa-search\" aria-hidden=\"true\"></i> -->
\t\t\t\t\t\t\t\t\t\t<img class=\"s_pbtn\" src=\"/img/s-icon.svg\" alt=\"\">
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t";
        // line 40
        echo "\t\t\t\t\t\t\t\t<!-- QUERRIES!!! -->

\t\t\t\t\t\t\t\t";
        // line 43
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"fb-square\">";
        // line 45
        $this->loadTemplate("default/fb-square.html.twig", "PluginsNewsBundle:News:news.html.twig", 45)->display($context);
        echo "</div>
\t\t\t\t\t\t</div>


\t\t\t\t\t\t";
        // line 49
        $this->loadTemplate("PluginsNewsBundle:News:show_news.html.twig", "PluginsNewsBundle:News:news.html.twig", 49)->display(array_merge($context, array("home" => true, "elements" => ($context["elements"] ?? $this->getContext($context, "elements")))));
        // line 78
        echo "
\t\t\t\t\t\t<div class=\"contactus\">
\t\t\t\t\t\t\t\t";
        // line 80
        $this->loadTemplate("AppBundle:Contact:contact_block_form.html.twig", "PluginsNewsBundle:News:news.html.twig", 80)->display($context);
        // line 81
        echo "\t\t\t\t\t\t\t\t<div class=\"fb-square\">";
        $this->loadTemplate("default/fb-square.html.twig", "PluginsNewsBundle:News:news.html.twig", 81)->display($context);
        echo "</div>
\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t</section>
</wrapper>
";
    }

    public function getTemplateName()
    {
        return "PluginsNewsBundle:News:news.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 81,  142 => 80,  138 => 78,  136 => 49,  129 => 45,  125 => 43,  121 => 40,  105 => 25,  103 => 24,  100 => 23,  96 => 18,  93 => 17,  87 => 15,  81 => 14,  76 => 10,  70 => 8,  64 => 7,  57 => 6,  50 => 5,  44 => 4,  37 => 3,  11 => 1,);
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

{% block title %}{{- content.metatitle ? content.metatitle : parent() -}}{% include \"PluginsNewsBundle:News:page_to_meta_news.html.twig\" with {'pages': pages, 'page': page} %}{% endblock %}
{% block meta_keywords %}{{- content.metakeywords ? content.metakeywords : parent() -}}{% endblock %}
{% block meta_description %}{{- content.metadescription ? content.metadescription : parent() -}}{% include \"PluginsBlogBundle:Blog:page_to_meta.html.twig\" with {'pages': pages, 'page': page} %}{% endblock %}
{% block og_title %}{{- content.metatitle ? content.metatitle : parent() -}}{% include \"PluginsBlogBundle:Blog:page_to_meta.html.twig\" with {'pages': pages, 'page': page} %}{% endblock %}
{% block og_descr %}{{- content.metadescription ? content.metadescription : parent() -}}{% endblock %}
{% block last_updated_block %}{{ content.updatedAtDatetime}}{% endblock %}

{% block canonicalLinkBlock %}
{# include \"default/canonical.html.twig\" #}
{% endblock %}

{% block bodyId %}news{% endblock %}
{% block bodyClass %}news{% endblock %}

{% block content %}
<wrapper>

\t\t{#
\t\t\t{% include \"PluginsNewsBundle:News:news_mozaic.html.twig\" with { 'elements' : elements}%}
\t\t#}

\t\t{% render controller(\"PluginsNewsBundle:News:lastMozaicList\") %}

\t\t<section id=\"blog\" class=\"parent container-fluid\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"submenu\">

\t\t\t\t\t\t\t<div id=\"side_menu\">

\t\t\t\t\t\t\t\t<h2>News & Views</h2>
\t\t\t\t\t\t\t\t<div class=\"psearch\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id='search'>
\t\t\t\t\t\t\t\t\t\t<!-- <i class=\"fa fa-search\" aria-hidden=\"true\"></i> -->
\t\t\t\t\t\t\t\t\t\t<img class=\"s_pbtn\" src=\"/img/s-icon.svg\" alt=\"\">
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t{# {% include \"PluginsBlogBundle:Blog:search_form.html.twig\" with { 'queries': queries } %} #}
\t\t\t\t\t\t\t\t<!-- QUERRIES!!! -->

\t\t\t\t\t\t\t\t{# {% render controller(\"PluginsBlogBundle:Blog:blogVerticalMenu\", {categoryId: null, topicId: null, home : false, name : 'News & Vews' }) %} #}

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"fb-square\">{% include 'default/fb-square.html.twig' %}</div>
\t\t\t\t\t\t</div>


\t\t\t\t\t\t{% include \"PluginsNewsBundle:News:show_news.html.twig\" with { 'home' : true, 'elements' : elements}%}
{#
\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t{% include \"default/breadcrumbs.html.twig\" with { 'currentPage': 'News & Views', 'elements': {
\t\t\t\t\t\t\t\t\t\t\t0: {'url': \"plugins_news_homepage\", 'name': \"News & Views\" }
\t\t\t\t\t\t\t\t\t}, 'home' : true } %}
\t\t\t\t\t\t\t<div class=\"list\">
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t{% for entity in elements %}
\t\t\t\t\t\t\t\t\t<li class=\"item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('plugins_news_view', {'url' : entity.url}) }}\" title=\"{{ entity.name }}\"><h3>{{ entity.name }}</h3></a>
\t\t\t\t\t\t\t\t\t\t<div class=\"short\">
\t\t\t\t\t\t\t\t\t\t\t{{ entity.short | raw }}
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t\t\t<div class=\"info\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dc\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pattr\"><span>date:</span>{{ entity.dateUsFormat }}</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"readmore\"><a href=\"{{ path('plugins_news_view', {'url' : entity.url}) }}\"><span class=\"pbtn\">read more</span></a></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
#}

\t\t\t\t\t\t<div class=\"contactus\">
\t\t\t\t\t\t\t\t{% include \"AppBundle:Contact:contact_block_form.html.twig\" %}
\t\t\t\t\t\t\t\t<div class=\"fb-square\">{% include 'default/fb-square.html.twig' %}</div>
\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t</section>
</wrapper>
{% endblock %}
", "PluginsNewsBundle:News:news.html.twig", "/home/szpaklabs/work/projects/sharovalaw-com/src/Plugins/NewsBundle/Resources/views/News/news.html.twig");
    }
}
