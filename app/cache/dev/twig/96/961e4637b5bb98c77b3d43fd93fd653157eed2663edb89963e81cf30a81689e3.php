<?php

/* PluginsBlogBundle:Blog:index.html.twig */
class __TwigTemplate_9ea476f528477a6f53d31c1e42df7415230c065bc0517f345a3b0b0274c94c4f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "PluginsBlogBundle:Blog:index.html.twig", 1);
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
        $this->loadTemplate("PluginsBlogBundle:Blog:page_to_meta.html.twig", "PluginsBlogBundle:Blog:index.html.twig", 3)->display(array_merge($context, array("pages" => ($context["pages"] ?? $this->getContext($context, "pages")), "page" => ($context["page"] ?? $this->getContext($context, "page")))));
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
        $this->loadTemplate("PluginsBlogBundle:Blog:page_to_meta.html.twig", "PluginsBlogBundle:Blog:index.html.twig", 5)->display(array_merge($context, array("pages" => ($context["pages"] ?? $this->getContext($context, "pages")), "page" => ($context["page"] ?? $this->getContext($context, "page")))));
    }

    // line 6
    public function block_og_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["content"] ?? $this->getContext($context, "content")), "metatitle", array())) ? ($this->getAttribute(($context["content"] ?? $this->getContext($context, "content")), "metatitle", array())) : ($this->renderParentBlock("og_title", $context, $blocks))), "html", null, true);
        $this->loadTemplate("PluginsBlogBundle:Blog:page_to_meta.html.twig", "PluginsBlogBundle:Blog:index.html.twig", 6)->display(array_merge($context, array("pages" => ($context["pages"] ?? $this->getContext($context, "pages")), "page" => ($context["page"] ?? $this->getContext($context, "page")))));
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
        // line 12
        $context["np_params"] = null;
        // line 13
        if (($context["queries"] ?? $this->getContext($context, "queries"))) {
            // line 14
            echo "\t\t";
            $context["params"] = array("q" => twig_urlencode_filter(($context["queries"] ?? $this->getContext($context, "queries"))));
        }
        // line 16
        $this->loadTemplate("default/next-prev.html.twig", "PluginsBlogBundle:Blog:index.html.twig", 16)->display(array_merge($context, array("pages" => ($context["pages"] ?? $this->getContext($context, "pages")), "page" => ($context["page"] ?? $this->getContext($context, "page")), "np_params" => ($context["parameters"] ?? $this->getContext($context, "parameters")), "queries" => ($context["np_params"] ?? $this->getContext($context, "np_params")), "route" => ($context["route"] ?? $this->getContext($context, "route")), "limit" => null)));
    }

    // line 19
    public function block_bodyId($context, array $blocks = array())
    {
        echo "blog";
    }

    // line 20
    public function block_bodyClass($context, array $blocks = array())
    {
        echo "blog";
    }

    // line 22
    public function block_content($context, array $blocks = array())
    {
        // line 23
        echo "<wrapper>
\t\t<section id=\"blog\" class=\"parent container-fluid\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"submenu\">

\t\t\t\t\t\t\t<div id=\"side_menu\">

\t\t\t\t\t\t\t\t";
        // line 30
        if (twig_test_empty(($context["posts"] ?? $this->getContext($context, "posts")))) {
            // line 31
            echo "
\t\t\t\t\t\t\t\t";
        } else {
            // line 33
            echo "
\t\t\t\t\t\t\t\t\t";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? $this->getContext($context, "posts")));
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 35
                echo "\t\t\t\t\t\t\t\t\t\t";
                if (twig_test_empty(($context["category"] ?? $this->getContext($context, "category")))) {
                    // line 36
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    $context["postname"] = "Blog";
                    // line 37
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    $context["hometrig"] = true;
                    // line 38
                    echo "\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 39
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    $context["postname"] = $this->getAttribute(($context["category"] ?? $this->getContext($context, "category")), "name", array());
                    // line 40
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    $context["hometrig"] = true;
                    // line 41
                    echo "\t\t\t\t\t\t\t\t\t\t";
                }
                // line 42
                echo "\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "\t\t\t\t\t\t\t\t\t";
            if ((($context["hometrig"] ?? $this->getContext($context, "hometrig")) == true)) {
                // line 44
                echo "\t\t\t\t\t\t\t\t\t\t<h1>";
                echo twig_escape_filter($this->env, ($context["postname"] ?? $this->getContext($context, "postname")), "html", null, true);
                echo " ";
                $this->loadTemplate("PluginsBlogBundle:Blog:page_to_name.html.twig", "PluginsBlogBundle:Blog:index.html.twig", 44)->display(array_merge($context, array("pages" => ($context["pages"] ?? $this->getContext($context, "pages")), "page" => ($context["page"] ?? $this->getContext($context, "page")))));
                echo "</h1>
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 46
                echo "\t\t\t\t\t\t\t\t\t  <h2>";
                echo twig_escape_filter($this->env, ($context["postname"] ?? $this->getContext($context, "postname")), "html", null, true);
                echo " ";
                $this->loadTemplate("PluginsBlogBundle:Blog:page_to_name.html.twig", "PluginsBlogBundle:Blog:index.html.twig", 46)->display(array_merge($context, array("pages" => ($context["pages"] ?? $this->getContext($context, "pages")), "page" => ($context["page"] ?? $this->getContext($context, "page")))));
                echo "</h2>
\t\t\t\t\t\t\t\t\t";
            }
            // line 48
            echo "
\t\t\t\t\t\t\t\t\t<div class=\"psearch\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id='search'>
\t\t\t\t\t\t\t\t\t\t\t<!-- <i class=\"fa fa-search\" aria-hidden=\"true\"></i> -->
\t\t\t\t\t\t\t\t\t\t\t<img class=\"s_pbtn\" src=\"/img/s-icon.svg\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t";
            // line 56
            echo "\t\t\t\t\t\t\t\t\t<!-- QUERRIES!!! -->

\t\t\t\t\t\t\t\t\t";
            // line 58
            echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("PluginsBlogBundle:Blog:blogVerticalMenu", array("categoryId" => ((($context["category"] ?? $this->getContext($context, "category"))) ? ($this->getAttribute(($context["category"] ?? $this->getContext($context, "category")), "id", array())) : (null)), "topicId" => ((($context["topic"] ?? $this->getContext($context, "topic"))) ? ($this->getAttribute(($context["topic"] ?? $this->getContext($context, "topic")), "id", array())) : (null)), "home" => ($context["hometrig"] ?? $this->getContext($context, "hometrig")), "name" => ($context["postname"] ?? $this->getContext($context, "postname")))), array());
            // line 59
            echo "
\t\t\t\t\t\t\t\t";
        }
        // line 61
        echo "\t\t\t\t\t\t\t\t<!-- ";
        $this->loadTemplate("PluginsPracticAreaBundle:PracticArea:google_map_pa.html.twig", "PluginsBlogBundle:Blog:index.html.twig", 61)->display($context);
        echo " -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"fb-square\">";
        // line 63
        $this->loadTemplate("default/fb-square.html.twig", "PluginsBlogBundle:Blog:index.html.twig", 63)->display($context);
        echo "</div>
\t\t\t\t\t\t</div>
<!-- _________________ -->
\t\t\t\t\t\t\t\t";
        // line 66
        $this->loadTemplate("PluginsBlogBundle:Blog:show_blog.html.twig", "PluginsBlogBundle:Blog:index.html.twig", 66)->display(array_merge($context, array("category" =>         // line 67
($context["category"] ?? $this->getContext($context, "category")), "queries" =>         // line 68
($context["queries"] ?? $this->getContext($context, "queries")), "pages" =>         // line 69
($context["pages"] ?? $this->getContext($context, "pages")), "topic" =>         // line 70
($context["topic"] ?? $this->getContext($context, "topic")), "posts" =>         // line 71
($context["posts"] ?? $this->getContext($context, "posts")), "allposts" =>         // line 72
($context["allposts"] ?? $this->getContext($context, "allposts")))));
        // line 74
        echo "<!-- _________________ -->
\t\t\t\t\t\t<!--  -->
\t\t\t\t\t\t";
        // line 213
        echo "\t\t\t\t\t\t<div class=\"contactus\">
\t\t\t\t\t\t\t\t";
        // line 214
        $this->loadTemplate("AppBundle:Contact:contact_block_form.html.twig", "PluginsBlogBundle:Blog:index.html.twig", 214)->display($context);
        // line 215
        echo "\t\t\t\t\t\t\t\t<div class=\"fb-square\">";
        $this->loadTemplate("default/fb-square.html.twig", "PluginsBlogBundle:Blog:index.html.twig", 215)->display($context);
        echo "</div>
\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t</section>
</wrapper>
";
    }

    public function getTemplateName()
    {
        return "PluginsBlogBundle:Blog:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 215,  220 => 214,  217 => 213,  213 => 74,  211 => 72,  210 => 71,  209 => 70,  208 => 69,  207 => 68,  206 => 67,  205 => 66,  199 => 63,  193 => 61,  189 => 59,  187 => 58,  183 => 56,  174 => 48,  166 => 46,  158 => 44,  155 => 43,  149 => 42,  146 => 41,  143 => 40,  140 => 39,  137 => 38,  134 => 37,  131 => 36,  128 => 35,  124 => 34,  121 => 33,  117 => 31,  115 => 30,  106 => 23,  103 => 22,  97 => 20,  91 => 19,  87 => 16,  83 => 14,  81 => 13,  79 => 12,  76 => 10,  70 => 8,  64 => 7,  57 => 6,  50 => 5,  44 => 4,  37 => 3,  11 => 1,);
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

{% block title %}{{- content.metatitle ? content.metatitle : parent() -}}{% include \"PluginsBlogBundle:Blog:page_to_meta.html.twig\" with {'pages': pages, 'page': page} %}{% endblock %}
{% block meta_keywords %}{{- content.metakeywords ? content.metakeywords : parent() -}}{% endblock %}
{% block meta_description %}{{- content.metadescription ? content.metadescription : parent() -}}{% include \"PluginsBlogBundle:Blog:page_to_meta.html.twig\" with {'pages': pages, 'page': page} %}{% endblock %}
{% block og_title %}{{- content.metatitle ? content.metatitle : parent() -}}{% include \"PluginsBlogBundle:Blog:page_to_meta.html.twig\" with {'pages': pages, 'page': page} %}{% endblock %}
{% block og_descr %}{{- content.metadescription ? content.metadescription : parent() -}}{% endblock %}
{% block last_updated_block %}{{ content.updatedAtDatetime}}{% endblock %}

{% block canonicalLinkBlock %}
{# include \"default/canonical.html.twig\" #}
{% set np_params = null %}
{% if queries %}
\t\t{% set params = {'q' : queries|url_encode} %}
{% endif %}
{% include \"default/next-prev.html.twig\" with {'pages': pages, 'page': page, 'np_params': parameters, 'queries': np_params, 'route': route, 'limit': null} %}
{% endblock %}

{% block bodyId %}blog{% endblock %}
{% block bodyClass %}blog{% endblock %}

{% block content %}
<wrapper>
\t\t<section id=\"blog\" class=\"parent container-fluid\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"submenu\">

\t\t\t\t\t\t\t<div id=\"side_menu\">

\t\t\t\t\t\t\t\t{% if posts is empty %}

\t\t\t\t\t\t\t\t{% else %}

\t\t\t\t\t\t\t\t\t{% for post in posts %}
\t\t\t\t\t\t\t\t\t\t{% if category is empty %}
\t\t\t\t\t\t\t\t\t\t\t{% set postname = 'Blog' %}
\t\t\t\t\t\t\t\t\t\t\t{% set hometrig = true %}
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t{% set postname = category.name %}
\t\t\t\t\t\t\t\t\t\t\t{% set hometrig = true %}
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t{% if hometrig == true %}
\t\t\t\t\t\t\t\t\t\t<h1>{{ postname }} {% include \"PluginsBlogBundle:Blog:page_to_name.html.twig\" with {'pages': pages, 'page': page} %}</h1>
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t  <h2>{{ postname }} {% include \"PluginsBlogBundle:Blog:page_to_name.html.twig\" with {'pages': pages, 'page': page} %}</h2>
\t\t\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t\t\t<div class=\"psearch\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id='search'>
\t\t\t\t\t\t\t\t\t\t\t<!-- <i class=\"fa fa-search\" aria-hidden=\"true\"></i> -->
\t\t\t\t\t\t\t\t\t\t\t<img class=\"s_pbtn\" src=\"/img/s-icon.svg\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t{# {% include \"PluginsBlogBundle:Blog:search_form.html.twig\" with { 'queries': queries } %} #}
\t\t\t\t\t\t\t\t\t<!-- QUERRIES!!! -->

\t\t\t\t\t\t\t\t\t{% render controller(\"PluginsBlogBundle:Blog:blogVerticalMenu\", {categoryId: category ? category.id : null, topicId: topic ? topic.id : null, home : hometrig, name : postname }) %}

\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t<!-- {% include \"PluginsPracticAreaBundle:PracticArea:google_map_pa.html.twig\" %} -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"fb-square\">{% include 'default/fb-square.html.twig' %}</div>
\t\t\t\t\t\t</div>
<!-- _________________ -->
\t\t\t\t\t\t\t\t{% include \"PluginsBlogBundle:Blog:show_blog.html.twig\" with {
\t\t\t\t\t\t\t\t'category' : category,
\t\t\t\t\t\t\t\t'queries' : queries,
\t\t\t\t\t\t\t\t'pages' : pages,
\t\t\t\t\t\t\t\t'topic' : topic,
\t\t\t\t\t\t\t\t'posts' : posts,
\t\t\t\t\t\t\t\t'allposts' : allposts
\t\t\t\t\t\t\t\t}%}
<!-- _________________ -->
\t\t\t\t\t\t<!--  -->
\t\t\t\t\t\t{#
\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t{% if category is empty %}
\t\t\t\t\t\t\t\t\t{% if queries is empty %}
\t\t\t\t\t\t\t\t\t\t\t{% include \"default/breadcrumbs.html.twig\" with { 'currentPage': 'Blog', 'elements': null, 'home' : false } %}
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t{% include \"default/breadcrumbs.html.twig\" with { 'currentPage': queries, 'elements':
\t\t\t\t\t\t\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t0: {'url': \"plugins_blog_homepage\", 'name': \"Blog\" },
\t\t\t\t\t\t\t\t\t\t\t\t\t}, 'home' : false
\t\t\t\t\t\t\t\t\t\t\t} %}
\t\t\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t\t\t<!-- <h1 id=\"blog-h1\">Blog {% include \"PluginsBlogBundle:Blog:page_to_name.html.twig\" with {'pages': pages, 'page': page} %}</h1> -->

\t\t\t\t\t\t\t{% elseif topic is empty %}
\t\t\t\t\t\t\t\t\t{% include \"default/breadcrumbs.html.twig\" with { 'currentPage': category.name, 'elements':
\t\t\t\t\t\t\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t0: {'url': \"plugins_blog_homepage\", 'name': \"Blog\" },
\t\t\t\t\t\t\t\t\t\t\t\t\t}, 'home' : false
\t\t\t\t\t\t\t\t\t\t\t} %}
\t\t\t\t\t\t\t\t\t<!-- <h1 id=\"blog-h1\">{% include \"PluginsBlogBundle:Blog:cat_name.html.twig\" with { 'currentPage': category.name } %}</h1> -->
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t{% include \"default/breadcrumbs.html.twig\" with { 'currentPage': topic.name, 'elements':
\t\t\t\t\t\t\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t0: {'url': \"plugins_blog_homepage\", 'name': \"Blog\" },
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t1: {'url': \"plugins_blog_view_category\", 'name': category.name, 'params': {'categoryUrl' : category.url}},
\t\t\t\t\t\t\t\t\t\t\t\t\t}, 'home' : false
\t\t\t\t\t\t\t\t\t\t\t} %}
\t\t\t\t\t\t\t\t\t{% include \"PluginsBlogBundle:Blog:cat_name.html.twig\" with { 'currentPage': category.name, 'elements':
\t\t\t\t\t\t\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t0: {'url': \"plugins_blog_homepage\", 'name': \"Blog\" },
\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t} %}
\t\t\t\t\t\t\t\t\t<!-- <h1 id=\"blog-h1\">{% include \"PluginsBlogBundle:Blog:cat_name.html.twig\" with { 'currentPage': category.name } %}</h1> -->
\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t\t<div class=\"list\">

\t\t\t\t\t\t\t\t{% if category is empty %}

\t\t\t\t\t\t\t\t{% set previews = {
\t\t\t\t\t\t\t\t\t\t\t\t0: \"Criminal defense\",
\t\t\t\t\t\t\t\t\t\t\t\t1: \"Family law\",
\t\t\t\t\t\t\t\t\t\t\t\t2: \"Civil litigation\"
\t\t\t\t\t\t\t\t} %}

\t\t\t\t\t\t\t\t{% if posts is empty %}
\t\t\t\t\t\t\t\t\t\t<div class=\"blog-subtitle\">No posts found</div>
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t{% set break = false %}
\t\t\t\t\t\t\t\t\t\t{% for step in 0..2 %}
\t\t\t\t\t\t\t\t\t\t\t<div class=\"blog-subtitle\">
\t\t\t\t\t\t\t\t\t\t\t\t{{previews[step]}} latest posts
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t{% set break = false %}
\t\t\t\t\t\t\t\t\t\t\t{% set count = 0 %}
\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t{% for post in allposts if not break %}
\t\t\t\t\t\t\t\t\t\t\t\t\t{% if post.blogTopic is empty %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% set postUrl = path(\"plugins_blog_view_post_without_topic\", {categoryUrl: post.blogCategory.url, id: post.id, postUrl: post.url}) %}
\t\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% set postUrl = path(\"plugins_blog_view_post\", {categoryUrl: post.blogCategory.url, topicUrl: post.blogTopic.url, id: post.id, postUrl: post.url}) %}
\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t{% if post.blogCategory.name == previews[step] %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ postUrl }}\" title=\"{{ post.name }}\"><h3>{{ post.name }}</h3></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"short\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ post.short | raw }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dc\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pattr\"><span>date:</span>{{ post.dateUsFormat }}</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pattr\"><span>category:</span>{{ post.blogCategory.name }}</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"readmore\"><a href=\"{{ postUrl }}\"><span class=\"pbtn\">read more</span></a></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% set count = count + 1 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if count == 5 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% set break = true %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t\t{% else %}

\t\t\t\t\t\t\t\t\t{% if posts is empty %}
\t\t\t\t\t\t\t\t\t\t<div class=\"blog-subtitle\">No posts found</div>
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t{% for post in posts %}
\t\t\t\t\t\t\t\t\t\t\t\t{% if post.blogTopic is empty %}
\t\t\t\t\t\t\t\t\t\t\t\t\t{% set postUrl = path(\"plugins_blog_view_post_without_topic\", {categoryUrl: post.blogCategory.url, id: post.id, postUrl: post.url}) %}
\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t{% set postUrl = path(\"plugins_blog_view_post\", {categoryUrl: post.blogCategory.url, topicUrl: post.blogTopic.url, id: post.id, postUrl: post.url}) %}
\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t              <li class=\"item\">
\t\t\t\t\t                <a href=\"{{ postUrl }}\" title=\"{{ post.name }}\"><h3>{{ post.name }}</h3></a>
\t\t\t\t\t                <div class=\"short\">
\t\t\t\t\t                  {{ post.short | raw }}
\t\t\t\t\t                </div>
\t\t\t\t\t                <hr>
\t\t\t\t\t                <div class=\"info\">
\t\t\t\t\t                  <div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dc\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pattr\"><span>date:</span>{{ post.dateUsFormat }}</div>
\t\t\t\t\t\t\t                  <div class=\"pattr\"><span>category:</span>{{ post.blogCategory.name }}</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t                  <div class=\"readmore\"><a href=\"{{ postUrl }}\"><span class=\"pbtn\">read more</span></a></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t                </div>
\t\t\t\t\t              </li>
\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t            </ul>
\t\t\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t\t{% if category is not empty %}

\t\t\t\t\t\t\t\t{% set params = null %}
\t\t\t\t\t\t\t\t{% if queries %}
\t\t\t\t\t\t\t\t\t\t{% set params = {'q' : queries|url_encode} %}
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t{% include \"AppBundle:App:pagination.html.twig\" with {'pages': pages, 'page': page, 'params': parameters, 'queries': params, 'route': route, 'limit': null} %}
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--  -->
\t\t\t\t\t\t#}
\t\t\t\t\t\t<div class=\"contactus\">
\t\t\t\t\t\t\t\t{% include \"AppBundle:Contact:contact_block_form.html.twig\" %}
\t\t\t\t\t\t\t\t<div class=\"fb-square\">{% include 'default/fb-square.html.twig' %}</div>
\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t</section>
</wrapper>
{% endblock %}
", "PluginsBlogBundle:Blog:index.html.twig", "/home/szpaklabs/work/projects/sharovalaw-com/src/Plugins/BlogBundle/Resources/views/Blog/index.html.twig");
    }
}
