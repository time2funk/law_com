<?php

/* AppBundle:App:index.html.twig */
class __TwigTemplate_6b464f7d704ae1d1fec593087daaf73dd2588bceed23ed1e831d208aaa0ba3ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:App:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'meta_keywords' => array($this, 'block_meta_keywords'),
            'meta_description' => array($this, 'block_meta_description'),
            'og_title' => array($this, 'block_og_title'),
            'og_descr' => array($this, 'block_og_descr'),
            'last_updated_block' => array($this, 'block_last_updated_block'),
            'content' => array($this, 'block_content'),
            'blogSection' => array($this, 'block_blogSection'),
            'footer' => array($this, 'block_footer'),
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
        echo twig_escape_filter($this->env, ($context["og_title"] ?? $this->getContext($context, "og_title")), "html", null, true);
    }

    // line 7
    public function block_og_descr($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, ($context["og_descr"] ?? $this->getContext($context, "og_descr")), "html", null, true);
    }

    // line 8
    public function block_last_updated_block($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? $this->getContext($context, "page")), "updatedAtDatetime", array()), "html", null, true);
    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        // line 11
        echo "
\t\t<wrapper>

      ";
        // line 14
        $this->loadTemplate("AppBundle:App:main-mozaic.html.twig", "AppBundle:App:index.html.twig", 14)->display($context);
        // line 15
        echo "
      ";
        // line 17
        echo "      ";
        $this->loadTemplate("AppBundle:App:main.static.html.twig", "AppBundle:App:index.html.twig", 17)->display($context);
        // line 18
        echo "
 \t\t\t";
        // line 19
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("PluginsPracticAreaBundle:PracticArea:practicAreasShortList"), array());
        // line 20
        echo "
 \t\t\t";
        // line 21
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("PluginsNewsBundle:News:lastMozaicList"), array());
        // line 22
        echo "
 \t\t\t";
        // line 23
        if ( !($context["blogDisable"] ?? $this->getContext($context, "blogDisable"))) {
            // line 24
            echo " \t\t\t\t\t";
            $this->displayBlock('blogSection', $context, $blocks);
            // line 30
            echo " \t\t\t";
        }
        // line 31
        echo " \t\t</wrapper>

\t\t";
        // line 36
        echo "
";
    }

    // line 24
    public function block_blogSection($context, array $blocks = array())
    {
        // line 25
        echo " \t\t\t\t\t<section class=\"contact-section content-row clearfix\">
 \t\t\t\t\t\t\t<!-- <h2 id=\"h2-blog\">Blog</h2> -->
 \t\t\t\t\t\t\t";
        // line 27
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("PluginsBlogBundle:Blog:short"), array());
        // line 28
        echo " \t\t\t\t\t</section>
 \t\t\t\t\t";
    }

    // line 38
    public function block_footer($context, array $blocks = array())
    {
        // line 39
        echo "\t\t";
        $this->loadTemplate("default/footer.html.twig", "AppBundle:App:index.html.twig", 39)->display(array_merge($context, array("home" => true)));
    }

    public function getTemplateName()
    {
        return "AppBundle:App:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 39,  132 => 38,  127 => 28,  125 => 27,  121 => 25,  118 => 24,  113 => 36,  109 => 31,  106 => 30,  103 => 24,  101 => 23,  98 => 22,  96 => 21,  93 => 20,  91 => 19,  88 => 18,  85 => 17,  82 => 15,  80 => 14,  75 => 11,  72 => 10,  66 => 8,  60 => 7,  54 => 6,  48 => 5,  42 => 4,  36 => 3,  11 => 1,);
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
{% block og_title %}{{ og_title }}{% endblock %}
{% block og_descr %}{{ og_descr }}{% endblock %}
{% block last_updated_block %}{{ page.updatedAtDatetime}}{% endblock %}

{% block content %}

\t\t<wrapper>

      {% include \"AppBundle:App:main-mozaic.html.twig\" %}

      {# STATIC HTML #}
      {% include \"AppBundle:App:main.static.html.twig\" %}

 \t\t\t{% render controller(\"PluginsPracticAreaBundle:PracticArea:practicAreasShortList\") %}

 \t\t\t{% render controller(\"PluginsNewsBundle:News:lastMozaicList\") %}

 \t\t\t{% if not blogDisable %}
 \t\t\t\t\t{% block blogSection %}
 \t\t\t\t\t<section class=\"contact-section content-row clearfix\">
 \t\t\t\t\t\t\t<!-- <h2 id=\"h2-blog\">Blog</h2> -->
 \t\t\t\t\t\t\t{% render controller(\"PluginsBlogBundle:Blog:short\") %}
 \t\t\t\t\t</section>
 \t\t\t\t\t{% endblock %}
 \t\t\t{% endif %}
 \t\t</wrapper>

\t\t{#
\t\t{% include \"AppBundle:App:main_old.html.twig\" %}
\t\t #}

{% endblock %}
{% block footer %}
\t\t{% include \"default/footer.html.twig\" with {'home' : true} %}
{% endblock %}
", "AppBundle:App:index.html.twig", "/home/szpaklabs/work/projects/sharovalaw-com/src/AppBundle/Resources/views/App/index.html.twig");
    }
}
