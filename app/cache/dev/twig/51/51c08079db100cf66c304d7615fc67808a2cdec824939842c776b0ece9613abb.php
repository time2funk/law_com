<?php

/* PluginsPracticAreaBundle:Admin:base_edit.html.twig */
class __TwigTemplate_d4c6b87ad17394d4ea323e8f73515a28225be4f330f88752b8c94e7dfbd39469 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $_trait_0 = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit_form.html.twig", "PluginsPracticAreaBundle:Admin:base_edit.html.twig", 109);
        // line 109
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."SonataAdminBundle:CRUD:base_edit_form.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        if (!isset($_trait_0_blocks["form"])) {
            throw new Twig_Error_Runtime(sprintf('Block "form" is not defined in trait "SonataAdminBundle:CRUD:base_edit_form.html.twig".'));
        }

        $_trait_0_blocks["parentForm"] = $_trait_0_blocks["form"]; unset($_trait_0_blocks["form"]);

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'javascripts' => array($this, 'block_javascripts'),
                'title' => array($this, 'block_title'),
                'navbar_title' => array($this, 'block_navbar_title'),
                'actions' => array($this, 'block_actions'),
                'tab_menu' => array($this, 'block_tab_menu'),
                'form' => array($this, 'block_form'),
            )
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(($context["base_template"] ?? $this->getContext($context, "base_template")), "PluginsPracticAreaBundle:Admin:base_edit.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 110
        $context["form_helper"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit_form_macro.html.twig", "PluginsPracticAreaBundle:Admin:base_edit.html.twig", 110);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
    <script type=\"text/javascript\">

        \$(document).ready(function(){
            updateTopics = function (){
                return function () {
                    var categoryId = \$(\"#";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "uniqId", array()), "html", null, true);
        echo "_blogCategory option:selected\").val(),
                        topicId = \$(\"#";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "uniqId", array()), "html", null, true);
        echo "_blogTopic option:selected\").val(),
                        blogTopic = \$(\"#";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "uniqId", array()), "html", null, true);
        echo "_blogTopic\");
                    blogTopic.empty();

                    // Fix not remove if first change
                    if (!topicId) {
                        blogTopic.select2(\"val\", \"\");
                    }
                    blogTopic.trigger(\"liszt:updated\");

                    var objectId = '";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "id", array(0 => ($context["object"] ?? $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "',
                        url = Routing.generate('plugins_blog_get_topic_options', {'categoryId': categoryId, _sonata_admin: 'sonata.admin.blog_post', 'topicId': topicId, id: objectId });
                    \$.post(url, { categoryId: categoryId }, function(data){
                        blogTopic.empty().append(data);
                        blogTopic.trigger(\"liszt:updated\");
                    },\"text\");

                    blogTopic.val(\"option:first\").attr(\"selected\", true);
                };
            };

            var blogCategory = \$(\"#";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "uniqId", array()), "html", null, true);
        echo "_blogCategory\");
            console.log(blogCategory);
            blogCategory.change(updateTopics()); // Bind the function to updateTopics
            blogCategory.change(); // Manual trigger to update topics in Document load.

        });
    </script>
    <script type=\"text/javascript\">
\t\t\t\t\t\$(document).ready(function() {
\t\t\t\t\t\t\t\tvar max_title = 70;
\t\t\t\t\t\t\t\tvar max_desc = 155;
\t\t\t\t\t\t\t\tvar max_keyw = 155;
\t\t\t\t\t\t\t\tvar length_title = \$('#";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "uniqId", array()), "html", null, true);
        echo "_metatitle').val().length;
\t\t\t\t\t\t\t\tvar length_desc = \$('#";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "uniqId", array()), "html", null, true);
        echo "_metadescription').val().length;
\t\t\t\t\t\t\t\tvar length_keyw = \$('#";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "uniqId", array()), "html", null, true);
        echo "_metakeywords').val().length;

\t\t\t\t\t\t\t\t\$('#counter_metatitle').html('titile: ' + length_title);
\t\t\t\t\t\t\t\t\$('#counter_metadescription').html('desc: ' + length_desc);
\t\t\t\t\t\t\t\t\$('#counter_metakeywords').html('keyw: ' + length_keyw);

\t\t\t\t\t\t\t\t\$('#";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "uniqId", array()), "html", null, true);
        echo "_metatitle').keyup(function() {
\t\t\t\t\t\t\t\t\t\t\tvar length_title = \$('#";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "uniqId", array()), "html", null, true);
        echo "_metatitle').val().length;
\t\t\t\t\t\t\t\t\t\t\tvar text_remaining = max_title - length_title;

\t\t\t\t\t\t\t\t\t\t\t\$('#counter_metatitle').html('titile: ' + length_title);
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\$('#";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "uniqId", array()), "html", null, true);
        echo "_metadescription').keyup(function() {
\t\t\t\t\t\t\t\t\t\t\tvar length_desc = \$('#";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "uniqId", array()), "html", null, true);
        echo "_metadescription').val().length;
\t\t\t\t\t\t\t\t\t\t\tvar text_remaining = max_desc - length_desc;

\t\t\t\t\t\t\t\t\t\t\t\$('#counter_metadescription').html('desc: ' + length_desc);
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\$('#";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "uniqId", array()), "html", null, true);
        echo "_metakeywords').keyup(function() {
\t\t\t\t\t\t\t\t\t\t\tvar length_keyw = \$('#";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "uniqId", array()), "html", null, true);
        echo "_metakeywords').val().length;
\t\t\t\t\t\t\t\t\t\t\tvar text_remaining = max_keyw - length_keyw;

\t\t\t\t\t\t\t\t\t\t\t\$('#counter_metakeywords').html('keyw: ' + length_keyw);
\t\t\t\t\t\t\t\t});
\t\t\t\t\t});
\t\t</script>
";
    }

    // line 87
    public function block_title($context, array $blocks = array())
    {
        // line 88
        echo "    ";
        if ( !(null === $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "id", array(0 => ($context["object"] ?? $this->getContext($context, "object"))), "method"))) {
            // line 89
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_edit", array("%name%" => twig_truncate_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "toString", array(0 => ($context["object"] ?? $this->getContext($context, "object"))), "method"), 15)), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        } else {
            // line 91
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_create", array(), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        }
    }

    // line 95
    public function block_navbar_title($context, array $blocks = array())
    {
        // line 96
        echo "    ";
        $this->displayBlock("title", $context, $blocks);
        echo "
";
    }

    // line 99
    public function block_actions($context, array $blocks = array())
    {
        // line 100
        echo "    <li>";
        $this->loadTemplate("SonataAdminBundle:Button:show_button.html.twig", "PluginsPracticAreaBundle:Admin:base_edit.html.twig", 100)->display($context);
        echo "</li>
    <li>";
        // line 101
        $this->loadTemplate("SonataAdminBundle:Button:history_button.html.twig", "PluginsPracticAreaBundle:Admin:base_edit.html.twig", 101)->display($context);
        echo "</li>
    <li>";
        // line 102
        $this->loadTemplate("SonataAdminBundle:Button:acl_button.html.twig", "PluginsPracticAreaBundle:Admin:base_edit.html.twig", 102)->display($context);
        echo "</li>
    <li>";
        // line 103
        $this->loadTemplate("SonataAdminBundle:Button:list_button.html.twig", "PluginsPracticAreaBundle:Admin:base_edit.html.twig", 103)->display($context);
        echo "</li>
    <li>";
        // line 104
        $this->loadTemplate("SonataAdminBundle:Button:create_button.html.twig", "PluginsPracticAreaBundle:Admin:base_edit.html.twig", 104)->display($context);
        echo "</li>
";
    }

    // line 107
    public function block_tab_menu($context, array $blocks = array())
    {
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "sidemenu", array(0 => ($context["action"] ?? $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute(($context["admin_pool"] ?? $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
    }

    // line 112
    public function block_form($context, array $blocks = array())
    {
        // line 113
        echo "    ";
        $this->displayBlock("parentForm", $context, $blocks);
        echo "


\t\t\t<style media=\"screen\">
\t\t\t\t.counters {
\t\t\t\t\tposition: fixed;
\t\t\t\t\tleft: 20px;
\t\t\t\t\twidth: 120px;
\t\t\t\t\theight: 30px;
\t\t\t\t\tbackground-color: #fff;
\t\t\t\t\t/*padding: 5px 10px;*/
\t\t\t\t\tcolor: #000;
\t\t\t\t\tfont-weight: 900;
\t\t\t\t\tz-index: 1;
\t\t\t\t\topacity: .6;
\t\t\t\t\ttext-align: center;
\t\t\t\t\tvertical-align: middle;
\t\t\t\t\tfont-size: 20px;
\t\t\t\t}
\t\t\t\t#counter_metatitle {
\t\t\t\t\tbottom: 120px;
\t\t\t\t}
\t\t\t\t#counter_metadescription {
\t\t\t\t\tbottom: 80px;
\t\t\t\t}
\t\t\t\t#counter_metakeywords {
\t\t\t\t\tbottom: 40px;
\t\t\t\t}
\t\t\t</style>

\t\t\t<div id=\"counters\">
\t\t\t\t<div id=\"counter_metatitle\" class=\"counters btn-success\"></div>
\t\t\t\t<div id=\"counter_metadescription\" class=\"counters btn-info\"></div>
\t\t\t\t<div id=\"counter_metakeywords\" class=\"counters btn-warning\"></div>
\t\t\t</div>
";
    }

    public function getTemplateName()
    {
        return "PluginsPracticAreaBundle:Admin:base_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 113,  242 => 112,  236 => 107,  230 => 104,  226 => 103,  222 => 102,  218 => 101,  213 => 100,  210 => 99,  203 => 96,  200 => 95,  192 => 91,  186 => 89,  183 => 88,  180 => 87,  168 => 78,  164 => 77,  156 => 72,  152 => 71,  144 => 66,  140 => 65,  131 => 59,  127 => 58,  123 => 57,  108 => 45,  94 => 34,  82 => 25,  78 => 24,  74 => 23,  65 => 17,  61 => 16,  56 => 15,  53 => 14,  49 => 12,  47 => 110,  41 => 12,  12 => 109,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends base_template %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('bundles/fosjsrouting/js/router.js') }}\"></script>
    <script src=\"{{ path('fos_js_routing_js', {'callback': 'fos.Router.setData'}) }}\"></script>
    <script type=\"text/javascript\">

        \$(document).ready(function(){
            updateTopics = function (){
                return function () {
                    var categoryId = \$(\"#{{ admin.uniqId }}_blogCategory option:selected\").val(),
                        topicId = \$(\"#{{ admin.uniqId }}_blogTopic option:selected\").val(),
                        blogTopic = \$(\"#{{ admin.uniqId }}_blogTopic\");
                    blogTopic.empty();

                    // Fix not remove if first change
                    if (!topicId) {
                        blogTopic.select2(\"val\", \"\");
                    }
                    blogTopic.trigger(\"liszt:updated\");

                    var objectId = '{{ admin.id(object) }}',
                        url = Routing.generate('plugins_blog_get_topic_options', {'categoryId': categoryId, _sonata_admin: 'sonata.admin.blog_post', 'topicId': topicId, id: objectId });
                    \$.post(url, { categoryId: categoryId }, function(data){
                        blogTopic.empty().append(data);
                        blogTopic.trigger(\"liszt:updated\");
                    },\"text\");

                    blogTopic.val(\"option:first\").attr(\"selected\", true);
                };
            };

            var blogCategory = \$(\"#{{ admin.uniqId }}_blogCategory\");
            console.log(blogCategory);
            blogCategory.change(updateTopics()); // Bind the function to updateTopics
            blogCategory.change(); // Manual trigger to update topics in Document load.

        });
    </script>
    <script type=\"text/javascript\">
\t\t\t\t\t\$(document).ready(function() {
\t\t\t\t\t\t\t\tvar max_title = 70;
\t\t\t\t\t\t\t\tvar max_desc = 155;
\t\t\t\t\t\t\t\tvar max_keyw = 155;
\t\t\t\t\t\t\t\tvar length_title = \$('#{{ admin.uniqId }}_metatitle').val().length;
\t\t\t\t\t\t\t\tvar length_desc = \$('#{{ admin.uniqId }}_metadescription').val().length;
\t\t\t\t\t\t\t\tvar length_keyw = \$('#{{ admin.uniqId }}_metakeywords').val().length;

\t\t\t\t\t\t\t\t\$('#counter_metatitle').html('titile: ' + length_title);
\t\t\t\t\t\t\t\t\$('#counter_metadescription').html('desc: ' + length_desc);
\t\t\t\t\t\t\t\t\$('#counter_metakeywords').html('keyw: ' + length_keyw);

\t\t\t\t\t\t\t\t\$('#{{ admin.uniqId }}_metatitle').keyup(function() {
\t\t\t\t\t\t\t\t\t\t\tvar length_title = \$('#{{ admin.uniqId }}_metatitle').val().length;
\t\t\t\t\t\t\t\t\t\t\tvar text_remaining = max_title - length_title;

\t\t\t\t\t\t\t\t\t\t\t\$('#counter_metatitle').html('titile: ' + length_title);
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\$('#{{ admin.uniqId }}_metadescription').keyup(function() {
\t\t\t\t\t\t\t\t\t\t\tvar length_desc = \$('#{{ admin.uniqId }}_metadescription').val().length;
\t\t\t\t\t\t\t\t\t\t\tvar text_remaining = max_desc - length_desc;

\t\t\t\t\t\t\t\t\t\t\t\$('#counter_metadescription').html('desc: ' + length_desc);
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\$('#{{ admin.uniqId }}_metakeywords').keyup(function() {
\t\t\t\t\t\t\t\t\t\t\tvar length_keyw = \$('#{{ admin.uniqId }}_metakeywords').val().length;
\t\t\t\t\t\t\t\t\t\t\tvar text_remaining = max_keyw - length_keyw;

\t\t\t\t\t\t\t\t\t\t\t\$('#counter_metakeywords').html('keyw: ' + length_keyw);
\t\t\t\t\t\t\t\t});
\t\t\t\t\t});
\t\t</script>
{% endblock %}

{% block title %}
    {% if admin.id(object) is not null %}
        {{ \"title_edit\"|trans({'%name%': admin.toString(object)|truncate(15) }, 'SonataAdminBundle') }}
    {% else %}
        {{ \"title_create\"|trans({}, 'SonataAdminBundle') }}
    {% endif %}
{% endblock %}

{% block navbar_title %}
    {{ block('title') }}
{% endblock %}

{% block actions %}
    <li>{% include 'SonataAdminBundle:Button:show_button.html.twig' %}</li>
    <li>{% include 'SonataAdminBundle:Button:history_button.html.twig' %}</li>
    <li>{% include 'SonataAdminBundle:Button:acl_button.html.twig' %}</li>
    <li>{% include 'SonataAdminBundle:Button:list_button.html.twig' %}</li>
    <li>{% include 'SonataAdminBundle:Button:create_button.html.twig' %}</li>
{% endblock %}

{% block tab_menu %}{{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': admin_pool.getTemplate('tab_menu_template')}, 'twig') }}{% endblock %}

{% use 'SonataAdminBundle:CRUD:base_edit_form.html.twig' with form as parentForm %}
{% import \"SonataAdminBundle:CRUD:base_edit_form_macro.html.twig\" as form_helper %}

{% block form %}
    {{ block('parentForm') }}


\t\t\t<style media=\"screen\">
\t\t\t\t.counters {
\t\t\t\t\tposition: fixed;
\t\t\t\t\tleft: 20px;
\t\t\t\t\twidth: 120px;
\t\t\t\t\theight: 30px;
\t\t\t\t\tbackground-color: #fff;
\t\t\t\t\t/*padding: 5px 10px;*/
\t\t\t\t\tcolor: #000;
\t\t\t\t\tfont-weight: 900;
\t\t\t\t\tz-index: 1;
\t\t\t\t\topacity: .6;
\t\t\t\t\ttext-align: center;
\t\t\t\t\tvertical-align: middle;
\t\t\t\t\tfont-size: 20px;
\t\t\t\t}
\t\t\t\t#counter_metatitle {
\t\t\t\t\tbottom: 120px;
\t\t\t\t}
\t\t\t\t#counter_metadescription {
\t\t\t\t\tbottom: 80px;
\t\t\t\t}
\t\t\t\t#counter_metakeywords {
\t\t\t\t\tbottom: 40px;
\t\t\t\t}
\t\t\t</style>

\t\t\t<div id=\"counters\">
\t\t\t\t<div id=\"counter_metatitle\" class=\"counters btn-success\"></div>
\t\t\t\t<div id=\"counter_metadescription\" class=\"counters btn-info\"></div>
\t\t\t\t<div id=\"counter_metakeywords\" class=\"counters btn-warning\"></div>
\t\t\t</div>
{% endblock %}
", "PluginsPracticAreaBundle:Admin:base_edit.html.twig", "/home/szpaklabs/work/projects/sharovalaw-com/src/Plugins/PracticAreaBundle/Resources/views/Admin/base_edit.html.twig");
    }
}
