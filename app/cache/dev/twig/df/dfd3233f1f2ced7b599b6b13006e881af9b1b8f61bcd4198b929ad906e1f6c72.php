<?php

/* PluginsBlogBundle:Blog:short.html.twig */
class __TwigTemplate_da4da3e66ba79ded6a713c480b49da5429d16760b2bd14ae61ec94b7b19ef0c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'shortBlog' => array($this, 'block_shortBlog'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('shortBlog', $context, $blocks);
    }

    public function block_shortBlog($context, array $blocks = array())
    {
        // line 2
        echo "<section id='p_blog' class=\"parent\">
\t\t<div class=\"submenu\">
\t\t\t<div id=\"side_menu\">
\t\t\t\t<h2>Blog</h2>
\t\t\t\t";
        // line 9
        echo "
\t\t\t\t<div class=\"psearch\">
\t\t\t\t\t\t<input type=\"text\" id='search'>
\t\t\t\t\t\t<!-- <i class=\"fa fa-search\" aria-hidden=\"true\"></i> -->
\t\t\t\t\t\t<img class=\"s_pbtn\" src=\"/img/s-icon.svg\" alt=\"\">
\t\t\t\t</div>
\t\t\t\t";
        // line 15
        $this->loadTemplate("PluginsBlogBundle:Blog:search.ajax.html.twig", "PluginsBlogBundle:Blog:short.html.twig", 15)->display($context);
        // line 16
        echo "
\t\t\t\t<ul class=\"blogShortList\">
\t\t\t\t\t";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? $this->getContext($context, "categories")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 19
            echo "
\t\t\t\t\t\t\t<li class=\"short-blog-link link ";
            // line 20
            echo (($this->getAttribute($context["loop"], "first", array())) ? ("focus") : (""));
            echo "\" id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<span class=\"link-short\">";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "        </ul>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"content\">
\t\t\t<div  id='static-show'>
\t\t<!-- _________________ -->
\t\t\t";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? $this->getContext($context, "categories")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 32
            echo "\t\t\t";
            $context["break"] = 1;
            // line 33
            echo "\t\t\t<ul class=\"short-blog-category category ";
            echo (( !$this->getAttribute($context["loop"], "first", array())) ? ("hidden") : (""));
            echo "\" id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "-details\">
\t\t\t<div class=\"crumbs\">
\t\t\t\t<h2>";
            // line 35
            echo twig_escape_filter($this->env, $context["category"], "html", null, true);
            echo "</h2>
\t\t\t</div>

\t\t\t\t";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category"], "blogPosts", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                if (($context["break"] ?? $this->getContext($context, "break"))) {
                    // line 39
                    echo "\t\t\t\t\t\t";
                    if ($this->getAttribute($context["post"], "shown", array())) {
                        // line 40
                        echo "\t\t\t\t\t\t\t\t";
                        if (twig_test_empty($this->getAttribute($context["post"], "blogTopic", array()))) {
                            // line 41
                            echo "\t\t\t\t\t\t\t\t\t\t";
                            $context["postUrl"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("plugins_blog_view_post_without_topic", array("categoryUrl" => $this->getAttribute($this->getAttribute($context["post"], "blogCategory", array()), "url", array()), "id" => $this->getAttribute($context["post"], "id", array()), "postUrl" => $this->getAttribute($context["post"], "url", array())));
                            // line 42
                            echo "\t\t\t\t\t\t\t\t";
                        } else {
                            // line 43
                            echo "\t\t\t\t\t\t\t\t\t\t";
                            $context["postUrl"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("plugins_blog_view_post", array("categoryUrl" => $this->getAttribute($this->getAttribute($context["post"], "blogCategory", array()), "url", array()), "topicUrl" => $this->getAttribute($this->getAttribute($context["post"], "blogTopic", array()), "url", array()), "id" => $this->getAttribute($context["post"], "id", array()), "postUrl" => $this->getAttribute($context["post"], "url", array())));
                            // line 44
                            echo "\t\t\t\t\t\t\t\t";
                        }
                        // line 45
                        echo "\t\t\t\t\t\t\t\t\t\t<li class=\"item ";
                        echo (($this->getAttribute($context["loop"], "first", array())) ? ("first") : (""));
                        echo " ";
                        echo (((($this->getAttribute($context["loop"], "index", array()) == 15) || ($this->getAttribute($context["loop"], "index", array()) == twig_length_filter($this->env, $this->getAttribute($context["category"], "blogPosts", array()))))) ? ("last") : (""));
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t<h3><a href=\"";
                        // line 46
                        echo twig_escape_filter($this->env, ($context["postUrl"] ?? $this->getContext($context, "postUrl")), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "name", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "name", array()), "html", null, true);
                        echo "</a></h3>
\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 48
                        if (twig_test_empty($this->getAttribute($context["post"], "shortHome", array()))) {
                            // line 49
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            $context["x"] = 0;
                            // line 50
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            $context["text"] = twig_split_filter($this->env, $this->getAttribute($context["post"], "short", array()), ".");
                            // line 51
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(($context["text"] ?? $this->getContext($context, "text")));
                            foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
                                // line 52
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                $context["x"] = (($context["x"] ?? $this->getContext($context, "x")) + twig_length_filter($this->env, $context["t"]));
                                // line 53
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                if ((($context["x"] ?? $this->getContext($context, "x")) < 450)) {
                                    // line 54
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    if ((((twig_last($this->env, $context["t"]) == ".") || (twig_last($this->env, $context["t"]) == " ")) || (twig_last($this->env, $context["t"]) == ">"))) {
                                        // line 55
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                        echo $context["t"];
                                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    } else {
                                        // line 57
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                        echo $context["t"];
                                        echo ".
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    }
                                    // line 59
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                // line 60
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 61
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 62
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            echo $this->getAttribute($context["post"], "shortHome", array());
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 64
                        echo "\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"info\">
\t\t\t\t\t\t\t          <div class=\"row\">
\t\t\t\t\t\t\t            <div class=\"dc\">
\t\t\t\t\t\t\t              <div class=\"pattr\"><span>date:</span>";
                        // line 69
                        echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "dateUsFormat", array()), "html", null, true);
                        echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pattr\"><span>category:</span>";
                        // line 70
                        echo twig_escape_filter($this->env, $context["category"], "html", null, true);
                        echo "</div>
\t\t\t\t\t\t\t            </div>
\t\t\t\t\t\t\t            <div class=\"readmore\"><a href=\"";
                        // line 72
                        echo twig_escape_filter($this->env, ($context["postUrl"] ?? $this->getContext($context, "postUrl")), "html", null, true);
                        echo "\"><span class=\"pbtn\">read more</span></a></div>
\t\t\t\t\t\t\t          </div>
\t\t\t\t\t\t\t        </div>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t";
                        // line 76
                        if (($this->getAttribute($context["loop"], "index", array()) == 15)) {
                            // line 77
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                            $context["break"] = 0;
                            // line 78
                            echo "\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 79
                        echo "\t\t\t\t\t\t\t\t";
                    }
                    // line 80
                    echo "\t\t\t\t\t\t";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "
\t\t\t</ul>
\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "\t\t\t<a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("plugins_blog_homepage");
        echo "\"><p class='ptext'>Link to full Blog page</p></a>
\t\t\t<!-- _________________ -->
\t\t\t  </div>
\t\t\t<!-- _________________ -->
\t\t\t    <div class=\"list\" id=\"blog-filtered\">
\t\t\t      <ul id='search_show'>
\t\t\t      </ul>
\t\t\t    </div>
\t\t\t<!-- _________________ -->
\t\t</div>


\t\t<div class=\"contactus\">
\t\t\t\t";
        // line 97
        $this->loadTemplate("AppBundle:Contact:contact_block_form.html.twig", "PluginsBlogBundle:Blog:short.html.twig", 97)->display($context);
        // line 98
        echo "\t\t\t\t<div class=\"fb-square\">";
        $this->loadTemplate("default/fb-square.html.twig", "PluginsBlogBundle:Blog:short.html.twig", 98)->display($context);
        echo "</div>
\t\t</div>

    <script type=\"text/javascript\">
\t\t\tconsole.log('azaza');
\t\t\t\t\tconsole.log('ururu');
            \$(\".short-blog-link\").click(function () {
                var self = this,
                        id = \$(self).attr(\"id\");
\t\t\t\t\t\t\t\t\t\t\t\tconsole.log(\"#\" + id);
                \$(\".short-blog-category\").addClass(\"hidden\");
                \$(\".short-blog-link\").removeClass(\"focus\");

                \$(\"#\" + id + \"-details\").removeClass(\"hidden\");
                \$(\"#\" + id).addClass(\"focus\");
            });
    </script>

</section>
";
    }

    public function getTemplateName()
    {
        return "PluginsBlogBundle:Blog:short.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  308 => 98,  306 => 97,  289 => 84,  273 => 81,  263 => 80,  260 => 79,  257 => 78,  254 => 77,  252 => 76,  245 => 72,  240 => 70,  236 => 69,  229 => 64,  223 => 62,  220 => 61,  214 => 60,  211 => 59,  205 => 57,  199 => 55,  196 => 54,  193 => 53,  190 => 52,  185 => 51,  182 => 50,  179 => 49,  177 => 48,  168 => 46,  161 => 45,  158 => 44,  155 => 43,  152 => 42,  149 => 41,  146 => 40,  143 => 39,  132 => 38,  126 => 35,  118 => 33,  115 => 32,  98 => 31,  90 => 25,  72 => 21,  66 => 20,  63 => 19,  46 => 18,  42 => 16,  40 => 15,  32 => 9,  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block shortBlog %}
<section id='p_blog' class=\"parent\">
\t\t<div class=\"submenu\">
\t\t\t<div id=\"side_menu\">
\t\t\t\t<h2>Blog</h2>
\t\t\t\t{#
\t\t\t\t{% include \"PluginsBlogBundle:Blog:search_form.html.twig\" with { 'queries': null } %}
\t\t\t\t#}

\t\t\t\t<div class=\"psearch\">
\t\t\t\t\t\t<input type=\"text\" id='search'>
\t\t\t\t\t\t<!-- <i class=\"fa fa-search\" aria-hidden=\"true\"></i> -->
\t\t\t\t\t\t<img class=\"s_pbtn\" src=\"/img/s-icon.svg\" alt=\"\">
\t\t\t\t</div>
\t\t\t\t{% include \"PluginsBlogBundle:Blog:search.ajax.html.twig\" %}

\t\t\t\t<ul class=\"blogShortList\">
\t\t\t\t\t{% for category in categories %}

\t\t\t\t\t\t\t<li class=\"short-blog-link link {{ loop.first ? 'focus' }}\" id=\"{{ loop.index }}\">
\t\t\t\t\t\t\t\t<span class=\"link-short\">{{ category.name }}</span>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t{% endfor %}
        </ul>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"content\">
\t\t\t<div  id='static-show'>
\t\t<!-- _________________ -->
\t\t\t{% for category in categories %}
\t\t\t{% set break = 1 %}
\t\t\t<ul class=\"short-blog-category category {{ not loop.first ? 'hidden' }}\" id=\"{{ loop.index }}-details\">
\t\t\t<div class=\"crumbs\">
\t\t\t\t<h2>{{category}}</h2>
\t\t\t</div>

\t\t\t\t{% for post in category.blogPosts if break %}
\t\t\t\t\t\t{% if post.shown %}
\t\t\t\t\t\t\t\t{% if post.blogTopic is empty %}
\t\t\t\t\t\t\t\t\t\t{% set postUrl = path(\"plugins_blog_view_post_without_topic\", {categoryUrl: post.blogCategory.url, id: post.id, postUrl: post.url}) %}
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t{% set postUrl = path(\"plugins_blog_view_post\", {categoryUrl: post.blogCategory.url, topicUrl: post.blogTopic.url, id: post.id, postUrl: post.url}) %}
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t<li class=\"item {{ loop.first ? \"first\" }} {{ (loop.index == 15) or (loop.index == category.blogPosts | length) ? \"last\" }}\">
\t\t\t\t\t\t\t\t\t\t\t<h3><a href=\"{{ postUrl }}\" title=\"{{ post.name }}\">{{ post.name }}</a></h3>
\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t{% if post.shortHome is empty %}
\t\t\t\t\t\t\t\t\t\t\t\t\t{% set x = 0 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t{% set text = post.short | split('.') %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% for t in text %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% set x = (x + t|length) %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if (x) < 450 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if (t|last == '.') or (t|last == ' ') or (t|last == '>') %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ t | raw }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ t | raw }}.
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t{{ post.shortHome | raw }}
\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"info\">
\t\t\t\t\t\t\t          <div class=\"row\">
\t\t\t\t\t\t\t            <div class=\"dc\">
\t\t\t\t\t\t\t              <div class=\"pattr\"><span>date:</span>{{ post.dateUsFormat }}</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pattr\"><span>category:</span>{{ category }}</div>
\t\t\t\t\t\t\t            </div>
\t\t\t\t\t\t\t            <div class=\"readmore\"><a href=\"{{ postUrl }}\"><span class=\"pbtn\">read more</span></a></div>
\t\t\t\t\t\t\t          </div>
\t\t\t\t\t\t\t        </div>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t{% if loop.index == 15 %}
\t\t\t\t\t\t\t\t\t\t\t\t{% set break = 0 %}
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% endfor %}

\t\t\t</ul>
\t\t\t{% endfor %}
\t\t\t<a href=\"{{ path('plugins_blog_homepage') }}\"><p class='ptext'>Link to full Blog page</p></a>
\t\t\t<!-- _________________ -->
\t\t\t  </div>
\t\t\t<!-- _________________ -->
\t\t\t    <div class=\"list\" id=\"blog-filtered\">
\t\t\t      <ul id='search_show'>
\t\t\t      </ul>
\t\t\t    </div>
\t\t\t<!-- _________________ -->
\t\t</div>


\t\t<div class=\"contactus\">
\t\t\t\t{% include \"AppBundle:Contact:contact_block_form.html.twig\" %}
\t\t\t\t<div class=\"fb-square\">{% include 'default/fb-square.html.twig' %}</div>
\t\t</div>

    <script type=\"text/javascript\">
\t\t\tconsole.log('azaza');
\t\t\t\t\tconsole.log('ururu');
            \$(\".short-blog-link\").click(function () {
                var self = this,
                        id = \$(self).attr(\"id\");
\t\t\t\t\t\t\t\t\t\t\t\tconsole.log(\"#\" + id);
                \$(\".short-blog-category\").addClass(\"hidden\");
                \$(\".short-blog-link\").removeClass(\"focus\");

                \$(\"#\" + id + \"-details\").removeClass(\"hidden\");
                \$(\"#\" + id).addClass(\"focus\");
            });
    </script>

</section>
{% endblock %}
", "PluginsBlogBundle:Blog:short.html.twig", "/home/szpaklabs/work/projects/sharovalaw-com/src/Plugins/BlogBundle/Resources/views/Blog/short.html.twig");
    }
}
