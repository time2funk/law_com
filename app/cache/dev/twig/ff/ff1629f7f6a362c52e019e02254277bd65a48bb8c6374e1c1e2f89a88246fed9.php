<?php

/* PluginsBlogBundle:Blog:view_post.html.twig */
class __TwigTemplate_643c5187ddb09116eb279a023e863cc8a79e67e0be0e471fc3816f0a99de3716 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "PluginsBlogBundle:Blog:view_post.html.twig", 1);
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

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "metatitle", array())) ? ($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "metatitle", array())) : ("")), "html", null, true);
    }

    // line 5
    public function block_meta_keywords($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "metakeywords", array())) ? ($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "metakeywords", array())) : ($this->renderParentBlock("meta_keywords", $context, $blocks))), "html", null, true);
    }

    // line 6
    public function block_meta_description($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "metadescription", array())) ? ($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "metadescription", array())) : ($this->renderParentBlock("meta_description", $context, $blocks))), "html", null, true);
    }

    // line 7
    public function block_og_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "metatitle", array())) ? ($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "metatitle", array())) : ($this->renderParentBlock("og_title", $context, $blocks))), "html", null, true);
    }

    // line 8
    public function block_og_descr($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "metadescription", array())) ? ($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "metadescription", array())) : ($this->renderParentBlock("og_descr", $context, $blocks))), "html", null, true);
    }

    // line 9
    public function block_last_updated_block($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "updatedAtDatetime", array()), "html", null, true);
    }

    // line 11
    public function block_ampLinkBlock($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Amp:ampLinkBlock", array("request" => $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()))), array());
    }

    // line 15
    public function block_bodyId($context, array $blocks = array())
    {
        echo "blog";
    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        // line 18
        echo "<wrapper>
\t\t<section id=\"blog\" class=\"parent container-fluid\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"submenu\">

\t\t\t\t\t\t<div id=\"side_menu\">

\t\t\t\t\t\t\t<h2>Blog</h2>
\t\t\t\t\t\t\t<div class=\"psearch\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" id='search'>
\t\t\t\t\t\t\t\t\t<!-- <i class=\"fa fa-search\" aria-hidden=\"true\"></i> -->
\t\t\t\t\t\t\t\t\t<img class=\"s_pbtn\" src=\"/img/s-icon.svg\" alt=\"\">
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t";
        // line 32
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("PluginsBlogBundle:Blog:blogVerticalMenu", array("categoryId" => (($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "blogCategory", array())) ? ($this->getAttribute($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "blogCategory", array()), "id", array())) : (null)), "topicId" => (($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "blogTopic", array())) ? ($this->getAttribute($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "blogTopic", array()), "id", array())) : (null)), "home" => false, "name" => "Blog")), array());
        // line 33
        echo "
\t\t\t\t\t\t\t<!-- ";
        // line 34
        $this->loadTemplate("PluginsPracticAreaBundle:PracticArea:google_map_pa.html.twig", "PluginsBlogBundle:Blog:view_post.html.twig", 34)->display($context);
        echo " -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"fb-square\">";
        // line 36
        $this->loadTemplate("default/fb-square.html.twig", "PluginsBlogBundle:Blog:view_post.html.twig", 36)->display($context);
        echo "</div>
\t\t\t\t</div>
        ";
        // line 38
        $this->loadTemplate("PluginsBlogBundle:Blog:search.ajax.html.twig", "PluginsBlogBundle:Blog:view_post.html.twig", 38)->display($context);
        // line 39
        echo "\t\t\t\t<div class=\"content\">

          ";
        // line 48
        echo "
\t\t\t\t\t\t";
        // line 49
        $this->loadTemplate("default/breadcrumbs.html.twig", "PluginsBlogBundle:Blog:view_post.html.twig", 49)->display(array_merge($context, array("currentPage" => $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "name", array()), "elements" => array(0 => array("url" => "plugins_blog_homepage", "name" => "Blog")), "currentPage" => $this->getAttribute($this->getAttribute(        // line 52
($context["post"] ?? $this->getContext($context, "post")), "blogCategory", array()), "name", array()), "home" => false)));
        // line 54
        echo "
            <div  id='static-show'>
              <div class=\"txt\">
    \t\t\t\t\t\t<h1>";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "name", array()), "html", null, true);
        echo "</h1>
    \t\t\t\t\t\t<div class=\"postdate\">
                  ";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "dateUsFormat", array()), "html", null, true);
        echo "&nbsp;@&nbsp;
                  <a href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "blogCategory", array()), "url", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "blogCategory", array()), "name", array()), "html", null, true);
        echo "</a>
                </div>
    \t\t\t\t\t\t";
        // line 62
        echo $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "content", array());
        echo "

    \t\t\t\t\t\t<hr>
    \t\t\t\t\t\t";
        // line 65
        $this->loadTemplate("default/fb.html.twig", "PluginsBlogBundle:Blog:view_post.html.twig", 65)->display($context);
        // line 66
        echo "    \t\t\t\t\t</div>
            </div>
            <div class=\"list\" id=\"blog-filtered\">
              <ul id='search_show'>
              </ul>
            </div>
\t\t\t\t</div>

\t\t\t\t<div class=\"contactus\">
\t\t\t\t\t\t";
        // line 75
        $this->loadTemplate("AppBundle:Contact:contact_block_form.html.twig", "PluginsBlogBundle:Blog:view_post.html.twig", 75)->display($context);
        // line 76
        echo "\t\t\t\t\t\t<div class=\"fb-square\">";
        $this->loadTemplate("default/fb-square.html.twig", "PluginsBlogBundle:Blog:view_post.html.twig", 76)->display($context);
        echo "</div>
\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t</section>
\t</wrapper>
";
    }

    public function getTemplateName()
    {
        return "PluginsBlogBundle:Blog:view_post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 76,  172 => 75,  161 => 66,  159 => 65,  153 => 62,  146 => 60,  142 => 59,  137 => 57,  132 => 54,  130 => 52,  129 => 49,  126 => 48,  122 => 39,  120 => 38,  115 => 36,  110 => 34,  107 => 33,  105 => 32,  89 => 18,  86 => 17,  80 => 15,  75 => 12,  72 => 11,  66 => 9,  60 => 8,  54 => 7,  48 => 6,  42 => 5,  36 => 4,  11 => 1,);
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

{# {% block title %}{{- post.metatitle ? post.metatitle : '' }} - Law office of Yelena Sharova{% endblock %} #}
{% block title %}{{- post.metatitle ? post.metatitle : '' }}{% endblock %}
{% block meta_keywords %}{{- post.metakeywords ? post.metakeywords : parent() }}{% endblock %}
{% block meta_description %}{{- post.metadescription ? post.metadescription : parent() }}{% endblock %}
{% block og_title %}{{- post.metatitle ? post.metatitle : parent() -}}{% endblock %}
{% block og_descr %}{{- post.metadescription ? post.metadescription : parent() -}}{% endblock %}
{% block last_updated_block %}{{ post.updatedAtDatetime}}{% endblock %}

{% block ampLinkBlock %}
    {% render controller(\"AppBundle:Amp:ampLinkBlock\", {'request' : app.request }) %}
{% endblock %}

{% block bodyId %}blog{% endblock %}

{% block content %}
<wrapper>
\t\t<section id=\"blog\" class=\"parent container-fluid\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"submenu\">

\t\t\t\t\t\t<div id=\"side_menu\">

\t\t\t\t\t\t\t<h2>Blog</h2>
\t\t\t\t\t\t\t<div class=\"psearch\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" id='search'>
\t\t\t\t\t\t\t\t\t<!-- <i class=\"fa fa-search\" aria-hidden=\"true\"></i> -->
\t\t\t\t\t\t\t\t\t<img class=\"s_pbtn\" src=\"/img/s-icon.svg\" alt=\"\">
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t{% render controller(\"PluginsBlogBundle:Blog:blogVerticalMenu\", {categoryId: post.blogCategory ? post.blogCategory.id : null, topicId: post.blogTopic ? post.blogTopic.id : null, home : false, name : 'Blog' }) %}

\t\t\t\t\t\t\t<!-- {% include \"PluginsPracticAreaBundle:PracticArea:google_map_pa.html.twig\" %} -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"fb-square\">{% include 'default/fb-square.html.twig' %}</div>
\t\t\t\t</div>
        {% include \"PluginsBlogBundle:Blog:search.ajax.html.twig\" %}
\t\t\t\t<div class=\"content\">

          {#
          {% include \"default/breadcrumbs.html.twig\" with { 'elements': {
                  0: {'url': \"plugins_blog_homepage\", 'name': \"Blog\" },
                  1: {'url': post.blogCategory.url, 'name': post.blogCategory.name}
              }, 'currentPage': post.name, 'home' : false }
          %}
          #}

\t\t\t\t\t\t{% include \"default/breadcrumbs.html.twig\" with { 'currentPage': post.name, 'elements':
\t\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\t\t\t0: {'url': \"plugins_blog_homepage\", 'name': \"Blog\" }
\t\t\t\t\t\t\t\t}, 'currentPage': post.blogCategory.name, 'home' : false
\t\t\t\t\t\t} %}

            <div  id='static-show'>
              <div class=\"txt\">
    \t\t\t\t\t\t<h1>{{ post.name }}</h1>
    \t\t\t\t\t\t<div class=\"postdate\">
                  {{ post.dateUsFormat }}&nbsp;@&nbsp;
                  <a href=\"{{ post.blogCategory.url }}\">{{ post.blogCategory.name }}</a>
                </div>
    \t\t\t\t\t\t{{ post.content | raw }}

    \t\t\t\t\t\t<hr>
    \t\t\t\t\t\t{% include \"default/fb.html.twig\" %}
    \t\t\t\t\t</div>
            </div>
            <div class=\"list\" id=\"blog-filtered\">
              <ul id='search_show'>
              </ul>
            </div>
\t\t\t\t</div>

\t\t\t\t<div class=\"contactus\">
\t\t\t\t\t\t{% include \"AppBundle:Contact:contact_block_form.html.twig\" %}
\t\t\t\t\t\t<div class=\"fb-square\">{% include 'default/fb-square.html.twig' %}</div>
\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t</section>
\t</wrapper>
{% endblock %}
", "PluginsBlogBundle:Blog:view_post.html.twig", "/home/szpaklabs/work/projects/sharovalaw-com/src/Plugins/BlogBundle/Resources/views/Blog/view_post.html.twig");
    }
}
