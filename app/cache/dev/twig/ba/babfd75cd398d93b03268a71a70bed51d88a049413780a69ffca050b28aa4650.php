<?php

/* default/menu_section.html.twig */
class __TwigTemplate_71570ed0b73b1c48aee566df614a549a039126cd256f7d1ea213f887983a31d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'menuSection' => array($this, 'block_menuSection'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('menuSection', $context, $blocks);
    }

    public function block_menuSection($context, array $blocks = array())
    {
        // line 2
        echo "<div class=\"main_menu\" id=\"top_menu\">
\t<div class=\"left_side side\">
\t";
        // line 4
        ob_start();
        // line 5
        echo "\t\t<ul class=\"menu_ul\">
\t\t\t\t<li id=\"menu-pa\" class=\"menu_li\">
\t\t\t\t\t";
        // line 7
        if ((is_string($__internal_c37284865675260be4fa06c4222654dc9e622e6849783eb11939cd2ce7aa99d9 = ($context["route"] ?? $this->getContext($context, "route"))) && is_string($__internal_5f3a6d4b855e60e9eac8938389c5fbec1642511966d352c943ad621370b4e5d6 = "plugins_practic_area_") && ('' === $__internal_5f3a6d4b855e60e9eac8938389c5fbec1642511966d352c943ad621370b4e5d6 || 0 === strpos($__internal_c37284865675260be4fa06c4222654dc9e622e6849783eb11939cd2ce7aa99d9, $__internal_5f3a6d4b855e60e9eac8938389c5fbec1642511966d352c943ad621370b4e5d6)))) {
            // line 8
            echo "\t\t\t\t\t\t\t";
            $context["selected"] = "selected";
            // line 9
            echo "\t\t\t\t\t";
        } else {
            // line 10
            echo "\t\t\t\t\t\t\t";
            $context["selected"] = "";
            // line 11
            echo "\t\t\t\t\t";
        }
        // line 12
        echo "\t\t\t\t\t<a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("plugins_practic_area_homepage");
        echo "\" title=\"practic areas\" class=\"";
        echo twig_escape_filter($this->env, ($context["selected"] ?? $this->getContext($context, "selected")), "html", null, true);
        echo "\">practice areas</a>
\t\t\t\t</li>
\t\t\t<li id=\"menu-news\" class=\"menu_li space\">
\t\t\t\t";
        // line 15
        if ((is_string($__internal_dc0947320486eddd245725976acc04dbb5a8c3d3c52ff183a2d5a771673457d2 = ($context["route"] ?? $this->getContext($context, "route"))) && is_string($__internal_0c2c9365771a0276e2effc1d865f274d377155e807c4b7addfb72213c0bb2910 = "plugins_news_") && ('' === $__internal_0c2c9365771a0276e2effc1d865f274d377155e807c4b7addfb72213c0bb2910 || 0 === strpos($__internal_dc0947320486eddd245725976acc04dbb5a8c3d3c52ff183a2d5a771673457d2, $__internal_0c2c9365771a0276e2effc1d865f274d377155e807c4b7addfb72213c0bb2910)))) {
            // line 16
            echo "\t\t\t\t\t\t";
            $context["selected"] = "selected";
            // line 17
            echo "\t\t\t\t";
        } else {
            // line 18
            echo "\t\t\t\t\t\t";
            $context["selected"] = "";
            // line 19
            echo "\t\t\t\t";
        }
        // line 20
        echo "\t\t\t\t<a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("plugins_news_homepage");
        echo "\" title=\"news & views\" class=\"";
        echo twig_escape_filter($this->env, ($context["selected"] ?? $this->getContext($context, "selected")), "html", null, true);
        echo "\">news & views</a>
\t\t\t</li>
\t\t\t<div class=\"hever_line\"></div>
\t\t</ul>
\t";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 25
        echo "\t</div>

\t<div class=\"center\">
\t\t<div class=\"logo\">
\t\t\t<a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_index");
        echo "\">
\t\t\t\t<img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("/img/logo.png"), "html", null, true);
        echo "\" alt=\"Sharova Law Firm\">
\t\t\t</a>
\t\t</div>
\t</div>

\t<div class=\"right_side side\">
\t";
        // line 36
        ob_start();
        // line 37
        echo "\t\t<ul class=\"menu_ul\">
\t\t\t<li id=\"menu-about\" class=\"menu_li space\">
\t\t\t\t<a href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_about_us");
        echo "\" title=\"about us\" class=\"";
        echo (((($context["route"] ?? $this->getContext($context, "route")) == "app_about_us")) ? ("selected") : (""));
        echo "\">about us</a>
\t\t\t</li>
\t\t\t<li id=\"menu-contacts\" class=\"menu_li\">
\t\t\t\t<a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_contact");
        echo "\" title=\"contact us\" class=\"";
        echo (((($context["route"] ?? $this->getContext($context, "route")) == "app_contact")) ? ("selected") : (""));
        echo "\">contact us</a>
\t\t\t</li>
\t\t\t<div class=\"hever_line\"></div>
\t\t</ul>
\t";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 47
        echo "\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "default/menu_section.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  127 => 47,  117 => 42,  109 => 39,  105 => 37,  103 => 36,  94 => 30,  90 => 29,  84 => 25,  73 => 20,  70 => 19,  67 => 18,  64 => 17,  61 => 16,  59 => 15,  50 => 12,  47 => 11,  44 => 10,  41 => 9,  38 => 8,  36 => 7,  32 => 5,  30 => 4,  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block menuSection %}
<div class=\"main_menu\" id=\"top_menu\">
\t<div class=\"left_side side\">
\t{% spaceless %}
\t\t<ul class=\"menu_ul\">
\t\t\t\t<li id=\"menu-pa\" class=\"menu_li\">
\t\t\t\t\t{% if route starts with 'plugins_practic_area_' %}
\t\t\t\t\t\t\t{% set selected = 'selected' %}
\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t{% set selected = '' %}
\t\t\t\t\t{% endif %}
\t\t\t\t\t<a href=\"{{ path('plugins_practic_area_homepage') }}\" title=\"practic areas\" class=\"{{ selected }}\">practice areas</a>
\t\t\t\t</li>
\t\t\t<li id=\"menu-news\" class=\"menu_li space\">
\t\t\t\t{% if route starts with 'plugins_news_' %}
\t\t\t\t\t\t{% set selected = 'selected' %}
\t\t\t\t{% else %}
\t\t\t\t\t\t{% set selected = '' %}
\t\t\t\t{% endif %}
\t\t\t\t<a href=\"{{ path('plugins_news_homepage') }}\" title=\"news & views\" class=\"{{ selected }}\">news & views</a>
\t\t\t</li>
\t\t\t<div class=\"hever_line\"></div>
\t\t</ul>
\t{% endspaceless %}
\t</div>

\t<div class=\"center\">
\t\t<div class=\"logo\">
\t\t\t<a href=\"{{ path('app_index') }}\">
\t\t\t\t<img src=\"{{ asset(\"/img/logo.png\") }}\" alt=\"Sharova Law Firm\">
\t\t\t</a>
\t\t</div>
\t</div>

\t<div class=\"right_side side\">
\t{% spaceless %}
\t\t<ul class=\"menu_ul\">
\t\t\t<li id=\"menu-about\" class=\"menu_li space\">
\t\t\t\t<a href=\"{{ path('app_about_us') }}\" title=\"about us\" class=\"{{ route == 'app_about_us' ? 'selected' }}\">about us</a>
\t\t\t</li>
\t\t\t<li id=\"menu-contacts\" class=\"menu_li\">
\t\t\t\t<a href=\"{{ path('app_contact') }}\" title=\"contact us\" class=\"{{ route == 'app_contact' ? 'selected' }}\">contact us</a>
\t\t\t</li>
\t\t\t<div class=\"hever_line\"></div>
\t\t</ul>
\t{% endspaceless %}
\t</div>
</div>
{% endblock %}
", "default/menu_section.html.twig", "/home/szpaklabs/work/projects/sharovalaw-com/app/Resources/views/default/menu_section.html.twig");
    }
}
