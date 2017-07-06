<?php

/* SonataAdminBundle::layout.html.twig */
class __TwigTemplate_4e2d77f8ad9fd8c2da582301177139088feb01020e98e78ee796e43bdee164cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle::standard_layout.html.twig", "SonataAdminBundle::layout.html.twig", 1);
        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'logo' => array($this, 'block_logo'),
            'sonata_top_nav_menu' => array($this, 'block_sonata_top_nav_menu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle::standard_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_javascripts($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        // line 9
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "220acd7_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_220acd7_0") : $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("_controller/css/220acd7_admin_1.css");
            // line 13
            echo "        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\">
    ";
            // asset "220acd7_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_220acd7_1") : $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("_controller/css/220acd7_content_2.css");
            echo "        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\">
    ";
        } else {
            // asset "220acd7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_220acd7") : $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("_controller/css/220acd7.css");
            echo "        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\">
    ";
        }
        unset($context["asset_url"]);
    }

    // line 17
    public function block_logo($context, array $blocks = array())
    {
        // line 18
        echo "  <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("sonata_admin_dashboard");
        echo "\" class=\"logo\">
    <img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\"  alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin_pool"] ?? $this->getContext($context, "admin_pool")), "title", array()), "html", null, true);
        echo "\" height=\"43px\" width=\"150px\" />
  </a>
";
    }

    // line 23
    public function block_sonata_top_nav_menu($context, array $blocks = array())
    {
        // line 24
        echo "<div class=\"navbar-right\">
    <ul class=\"nav navbar-nav\">
\t\t\t\t<li>
\t\t\t\t\t<a class=\"home\" href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_index");
        echo "\" title=\"Law Office Of Yelena Sharova\">
\t\t\t\t\t\t\tHomepage
\t\t\t\t\t</a>
\t\t\t\t</li>
        <li class=\"dropdown\">
            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                <i class=\"fa fa-plus-square fa-fw\"></i> <i class=\"fa fa-caret-down\"></i>
            </a>
            ";
        // line 35
        $this->loadTemplate($this->getAttribute(($context["admin_pool"] ?? $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "add_block"), "method"), "SonataAdminBundle::layout.html.twig", 35)->display($context);
        // line 36
        echo "        </li>
        <li class=\"dropdown user-menu\">
            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                <i class=\"fa fa-user fa-fw\"></i> <i class=\"fa fa-caret-down\"></i>
            </a>
            <ul class=\"dropdown-menu dropdown-user\">
                <li><a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_logout");
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Logout", array(), "messages");
        echo "</a></li>
            </ul>
        </li>
    </ul>
</div>
";
        // line 47
        echo $this->env->getExtension('Stfalcon\Bundle\TinymceBundle\Twig\Extension\StfalconTinymceExtension')->tinymceInit();
        echo "
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 47,  121 => 42,  113 => 36,  111 => 35,  100 => 27,  95 => 24,  92 => 23,  83 => 19,  78 => 18,  75 => 17,  53 => 13,  49 => 9,  44 => 8,  41 => 7,  34 => 4,  31 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'SonataAdminBundle::standard_layout.html.twig' %}

{% block javascripts %}
    {{ parent() }}
{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    {% stylesheets
            'styles/admin.css'
            'styles/content.css'
    %}
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset_url }}\">
    {% endstylesheets %}
{% endblock %}

{% block logo %}
  <a href=\"{{ url('sonata_admin_dashboard') }}\" class=\"logo\">
    <img src=\"{{ asset('images/logo.png') }}\"  alt=\"{{ admin_pool.title }}\" height=\"43px\" width=\"150px\" />
  </a>
{% endblock %}

{% block sonata_top_nav_menu %}
<div class=\"navbar-right\">
    <ul class=\"nav navbar-nav\">
\t\t\t\t<li>
\t\t\t\t\t<a class=\"home\" href=\"{{ path('app_index') }}\" title=\"Law Office Of Yelena Sharova\">
\t\t\t\t\t\t\tHomepage
\t\t\t\t\t</a>
\t\t\t\t</li>
        <li class=\"dropdown\">
            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                <i class=\"fa fa-plus-square fa-fw\"></i> <i class=\"fa fa-caret-down\"></i>
            </a>
            {% include admin_pool.getTemplate('add_block') %}
        </li>
        <li class=\"dropdown user-menu\">
            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                <i class=\"fa fa-user fa-fw\"></i> <i class=\"fa fa-caret-down\"></i>
            </a>
            <ul class=\"dropdown-menu dropdown-user\">
                <li><a href=\"{{ path('_logout') }}\">{% trans %}Logout{% endtrans %}</a></li>
            </ul>
        </li>
    </ul>
</div>
{{ tinymce_init() }}
{% endblock %}
", "SonataAdminBundle::layout.html.twig", "/home/szpaklabs/work/projects/sharovalaw-com/app/Resources/SonataAdminBundle/views/layout.html.twig");
    }
}
