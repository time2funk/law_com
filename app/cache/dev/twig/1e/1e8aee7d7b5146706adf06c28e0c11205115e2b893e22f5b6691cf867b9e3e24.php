<?php

/* AppBundle::layout.html.twig */
class __TwigTemplate_7322f69bd5ac06ceb261563c2ef1772f240844ab0d775cdd4d03d8179f3b6d33 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle::layout.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        $this->displayBlock('header', $context, $blocks);
        // line 8
        echo "
    ";
        // line 9
        $this->displayBlock('content', $context, $blocks);
        // line 11
        echo "
    ";
        // line 12
        $this->displayBlock('footer', $context, $blocks);
        // line 15
        echo "
    ";
        // line 16
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:App:analytics"), array());
    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        // line 6
        echo "        ";
        $this->loadTemplate("default/header.html.twig", "AppBundle::layout.html.twig", 6)->display($context);
        // line 7
        echo "    ";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "    ";
    }

    // line 12
    public function block_footer($context, array $blocks = array())
    {
        // line 13
        echo "        ";
        $this->loadTemplate("default/footer.html.twig", "AppBundle::layout.html.twig", 13)->display(array_merge($context, array("home" => false)));
        // line 14
        echo "    ";
    }

    public function getTemplateName()
    {
        return "AppBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 14,  74 => 13,  71 => 12,  67 => 10,  64 => 9,  60 => 7,  57 => 6,  54 => 5,  50 => 16,  47 => 15,  45 => 12,  42 => 11,  40 => 9,  37 => 8,  34 => 5,  31 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# app/Resources/AppBundle/views/layout.html.twig #}
{% extends '::base.html.twig' %}

{% block body %}
    {% block header %}
        {% include \"default/header.html.twig\" %}
    {% endblock %}

    {% block content %}
    {% endblock %}

    {% block footer %}
        {% include \"default/footer.html.twig\" with {'home' : false}  %}
    {% endblock %}

    {% render controller(\"AppBundle:App:analytics\") %}
{% endblock %}
", "AppBundle::layout.html.twig", "/home/szpaklabs/work/projects/sharovalaw-com/app/Resources/AppBundle/views/layout.html.twig");
    }
}
