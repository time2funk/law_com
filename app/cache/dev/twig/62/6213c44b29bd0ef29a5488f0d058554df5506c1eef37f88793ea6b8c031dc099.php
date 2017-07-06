<?php

/* PluginsBlogBundle:Blog:show_blog.html.twig */
class __TwigTemplate_480ce9475708c2be1bad47cd1054fb1f34bf169f385c4d1eef969bcbe23a8a78 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<style>
    #blog-filtered{
      display: none;
    }
</style>

<div class=\"content\">
  <div  id='static-show'>
<!-- _________________ -->
  ";
        // line 10
        if (twig_test_empty(($context["category"] ?? $this->getContext($context, "category")))) {
            // line 11
            echo "      ";
            if (twig_test_empty(($context["queries"] ?? $this->getContext($context, "queries")))) {
                // line 12
                echo "          ";
                $this->loadTemplate("default/breadcrumbs.html.twig", "PluginsBlogBundle:Blog:show_blog.html.twig", 12)->display(array_merge($context, array("currentPage" => "Blog", "elements" => null, "home" => false)));
                // line 13
                echo "      ";
            } else {
                // line 14
                echo "          ";
                $this->loadTemplate("default/breadcrumbs.html.twig", "PluginsBlogBundle:Blog:show_blog.html.twig", 14)->display(array_merge($context, array("currentPage" => ($context["queries"] ?? $this->getContext($context, "queries")), "elements" => array(0 => array("url" => "plugins_blog_homepage", "name" => "Blog")), "home" => false)));
                // line 19
                echo "      ";
            }
            // line 20
            echo "
      <!-- <h1 id=\"blog-h1\">Blog ";
            // line 21
            $this->loadTemplate("PluginsBlogBundle:Blog:page_to_name.html.twig", "PluginsBlogBundle:Blog:show_blog.html.twig", 21)->display(array_merge($context, array("pages" => ($context["pages"] ?? $this->getContext($context, "pages")), "page" => ($context["page"] ?? $this->getContext($context, "page")))));
            echo "</h1> -->

  ";
        } elseif (twig_test_empty(        // line 23
($context["topic"] ?? $this->getContext($context, "topic")))) {
            // line 24
            echo "      ";
            $this->loadTemplate("default/breadcrumbs.html.twig", "PluginsBlogBundle:Blog:show_blog.html.twig", 24)->display(array_merge($context, array("currentPage" => $this->getAttribute(($context["category"] ?? $this->getContext($context, "category")), "name", array()), "elements" => array(0 => array("url" => "plugins_blog_homepage", "name" => "Blog")), "home" => false)));
            // line 29
            echo "      <!-- <h1 id=\"blog-h1\">";
            $this->loadTemplate("PluginsBlogBundle:Blog:cat_name.html.twig", "PluginsBlogBundle:Blog:show_blog.html.twig", 29)->display(array_merge($context, array("currentPage" => $this->getAttribute(($context["category"] ?? $this->getContext($context, "category")), "name", array()))));
            echo "</h1> -->
  ";
        } else {
            // line 31
            echo "      ";
            $this->loadTemplate("default/breadcrumbs.html.twig", "PluginsBlogBundle:Blog:show_blog.html.twig", 31)->display(array_merge($context, array("currentPage" => $this->getAttribute(($context["topic"] ?? $this->getContext($context, "topic")), "name", array()), "elements" => array(0 => array("url" => "plugins_blog_homepage", "name" => "Blog"), 1 => array("url" => "plugins_blog_view_category", "name" => $this->getAttribute(            // line 34
($context["category"] ?? $this->getContext($context, "category")), "name", array()), "params" => array("categoryUrl" => $this->getAttribute(($context["category"] ?? $this->getContext($context, "category")), "url", array())))), "home" => false)));
            // line 37
            echo "      ";
            $this->loadTemplate("PluginsBlogBundle:Blog:cat_name.html.twig", "PluginsBlogBundle:Blog:show_blog.html.twig", 37)->display(array_merge($context, array("currentPage" => $this->getAttribute(($context["category"] ?? $this->getContext($context, "category")), "name", array()), "elements" => array(0 => array("url" => "plugins_blog_homepage", "name" => "Blog")))));
            // line 42
            echo "      <!-- <h1 id=\"blog-h1\">";
            $this->loadTemplate("PluginsBlogBundle:Blog:cat_name.html.twig", "PluginsBlogBundle:Blog:show_blog.html.twig", 42)->display(array_merge($context, array("currentPage" => $this->getAttribute(($context["category"] ?? $this->getContext($context, "category")), "name", array()))));
            echo "</h1> -->
  ";
        }
        // line 44
        echo "
    <div class=\"list\">

    ";
        // line 47
        if (twig_test_empty(($context["category"] ?? $this->getContext($context, "category")))) {
            // line 48
            echo "
    ";
            // line 49
            $context["previews"] = array(0 => "Criminal defense", 1 => "Family law", 2 => "Civil litigation");
            // line 54
            echo "
    ";
            // line 55
            if (twig_test_empty(($context["posts"] ?? $this->getContext($context, "posts")))) {
                // line 56
                echo "        <div class=\"blog-subtitle\">No posts found</div>
    ";
            } else {
                // line 58
                echo "      ";
                $context["break"] = false;
                // line 59
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(0, 2));
                foreach ($context['_seq'] as $context["_key"] => $context["step"]) {
                    // line 60
                    echo "          <div class=\"blog-subtitle\">
            ";
                    // line 61
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["previews"] ?? $this->getContext($context, "previews")), $context["step"], array(), "array"), "html", null, true);
                    echo " latest posts
          </div>
          ";
                    // line 63
                    $context["break"] = false;
                    // line 64
                    echo "          ";
                    $context["count"] = 0;
                    // line 65
                    echo "          <ul>
            ";
                    // line 66
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["allposts"] ?? $this->getContext($context, "allposts")));
                    foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                        if ( !($context["break"] ?? $this->getContext($context, "break"))) {
                            // line 67
                            echo "              ";
                            if (twig_test_empty($this->getAttribute($context["post"], "blogTopic", array()))) {
                                // line 68
                                echo "                  ";
                                $context["postUrl"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("plugins_blog_view_post_without_topic", array("categoryUrl" => $this->getAttribute($this->getAttribute($context["post"], "blogCategory", array()), "url", array()), "id" => $this->getAttribute($context["post"], "id", array()), "postUrl" => $this->getAttribute($context["post"], "url", array())));
                                // line 69
                                echo "              ";
                            } else {
                                // line 70
                                echo "                  ";
                                $context["postUrl"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("plugins_blog_view_post", array("categoryUrl" => $this->getAttribute($this->getAttribute($context["post"], "blogCategory", array()), "url", array()), "topicUrl" => $this->getAttribute($this->getAttribute($context["post"], "blogTopic", array()), "url", array()), "id" => $this->getAttribute($context["post"], "id", array()), "postUrl" => $this->getAttribute($context["post"], "url", array())));
                                // line 71
                                echo "              ";
                            }
                            // line 72
                            echo "              ";
                            if (($this->getAttribute($this->getAttribute($context["post"], "blogCategory", array()), "name", array()) == $this->getAttribute(($context["previews"] ?? $this->getContext($context, "previews")), $context["step"], array(), "array"))) {
                                // line 73
                                echo "                  <li class=\"item\">
                    <a href=\"";
                                // line 74
                                echo twig_escape_filter($this->env, ($context["postUrl"] ?? $this->getContext($context, "postUrl")), "html", null, true);
                                echo "\" title=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "name", array()), "html", null, true);
                                echo "\"><h3>";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "name", array()), "html", null, true);
                                echo "</h3></a>
                    <div class=\"short\">
                      ";
                                // line 76
                                echo $this->getAttribute($context["post"], "short", array());
                                echo "
                    </div>
                    <hr>
                    <div class=\"info\">
                      <div class=\"row\">
                        <div class=\"dc\">
                          <div class=\"pattr\"><span>date:</span>";
                                // line 82
                                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "dateUsFormat", array()), "html", null, true);
                                echo "</div>
                          <div class=\"pattr\"><span>category:</span>";
                                // line 83
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "blogCategory", array()), "name", array()), "html", null, true);
                                echo "</div>
                        </div>
                        <div class=\"readmore\"><a href=\"";
                                // line 85
                                echo twig_escape_filter($this->env, ($context["postUrl"] ?? $this->getContext($context, "postUrl")), "html", null, true);
                                echo "\"><span class=\"pbtn\">read more</span></a></div>
                      </div>
                    </div>
                  </li>
                  ";
                                // line 89
                                $context["count"] = (($context["count"] ?? $this->getContext($context, "count")) + 1);
                                // line 90
                                echo "                  ";
                                if ((($context["count"] ?? $this->getContext($context, "count")) == 5)) {
                                    // line 91
                                    echo "                    ";
                                    $context["break"] = true;
                                    // line 92
                                    echo "                  ";
                                }
                                // line 93
                                echo "              ";
                            }
                            // line 94
                            echo "            ";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 95
                    echo "          </ul>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['step'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 97
                echo "    ";
            }
            // line 98
            echo "
    ";
        } else {
            // line 100
            echo "
      ";
            // line 101
            if (twig_test_empty(($context["posts"] ?? $this->getContext($context, "posts")))) {
                // line 102
                echo "        <div class=\"blog-subtitle\">No posts found</div>
      ";
            } else {
                // line 104
                echo "        <ul>
        ";
                // line 105
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? $this->getContext($context, "posts")));
                foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                    // line 106
                    echo "            ";
                    if (twig_test_empty($this->getAttribute($context["post"], "blogTopic", array()))) {
                        // line 107
                        echo "              ";
                        $context["postUrl"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("plugins_blog_view_post_without_topic", array("categoryUrl" => $this->getAttribute($this->getAttribute($context["post"], "blogCategory", array()), "url", array()), "id" => $this->getAttribute($context["post"], "id", array()), "postUrl" => $this->getAttribute($context["post"], "url", array())));
                        // line 108
                        echo "            ";
                    } else {
                        // line 109
                        echo "              ";
                        $context["postUrl"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("plugins_blog_view_post", array("categoryUrl" => $this->getAttribute($this->getAttribute($context["post"], "blogCategory", array()), "url", array()), "topicUrl" => $this->getAttribute($this->getAttribute($context["post"], "blogTopic", array()), "url", array()), "id" => $this->getAttribute($context["post"], "id", array()), "postUrl" => $this->getAttribute($context["post"], "url", array())));
                        // line 110
                        echo "            ";
                    }
                    // line 111
                    echo "            <li class=\"item\">
              <a href=\"";
                    // line 112
                    echo twig_escape_filter($this->env, ($context["postUrl"] ?? $this->getContext($context, "postUrl")), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "name", array()), "html", null, true);
                    echo "\"><h3>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "name", array()), "html", null, true);
                    echo "</h3></a>
              <div class=\"short\">
                ";
                    // line 114
                    echo $this->getAttribute($context["post"], "short", array());
                    echo "
              </div>
              <hr>
              <div class=\"info\">
                <div class=\"row\">
                  <div class=\"dc\">
                    <div class=\"pattr\"><span>date:</span>";
                    // line 120
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "dateUsFormat", array()), "html", null, true);
                    echo "</div>
                    <div class=\"pattr\"><span>category:</span>";
                    // line 121
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "blogCategory", array()), "name", array()), "html", null, true);
                    echo "</div>
                  </div>
                  <div class=\"readmore\"><a href=\"";
                    // line 123
                    echo twig_escape_filter($this->env, ($context["postUrl"] ?? $this->getContext($context, "postUrl")), "html", null, true);
                    echo "\"><span class=\"pbtn\">read more</span></a></div>
                </div>
              </div>
            </li>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 128
                echo "        </ul>
      ";
            }
            // line 130
            echo "
    ";
        }
        // line 132
        echo "
    ";
        // line 133
        if ( !twig_test_empty(($context["category"] ?? $this->getContext($context, "category")))) {
            // line 134
            echo "
    ";
            // line 135
            $context["params"] = null;
            // line 136
            echo "    ";
            if (($context["queries"] ?? $this->getContext($context, "queries"))) {
                // line 137
                echo "        ";
                $context["params"] = array("q" => twig_urlencode_filter(($context["queries"] ?? $this->getContext($context, "queries"))));
                // line 138
                echo "    ";
            }
            // line 139
            echo "    ";
            $this->loadTemplate("AppBundle:App:pagination.html.twig", "PluginsBlogBundle:Blog:show_blog.html.twig", 139)->display(array_merge($context, array("pages" => ($context["pages"] ?? $this->getContext($context, "pages")), "page" => ($context["page"] ?? $this->getContext($context, "page")), "params" => ($context["parameters"] ?? $this->getContext($context, "parameters")), "queries" => ($context["params"] ?? $this->getContext($context, "params")), "route" => ($context["route"] ?? $this->getContext($context, "route")), "limit" => null)));
            // line 140
            echo "    ";
        }
        // line 141
        echo "    </div>

<!-- _________________ -->
  </div>
<!-- _________________ -->
    <div class=\"list\" id=\"blog-filtered\">
      <ul id='search_show'>
      </ul>
    </div>
<!-- _________________ -->
</div>

<script type=\"text/javascript\">
    jQuery(document).ready(function() {
      var searchRequest = null;
      \$(\"#search\").val('');

      console.log('search');

      \$(\"#search\").on('keyup',function() {

          var that = this;
          var value = \$(this).val();

          var entitySelector = \$(\"#search_show\").html('');
          if ( \$(this).val().length > 0 ) {
              if (searchRequest != null)
                  searchRequest.abort();
              \$('#search_show').empty()

              \$.ajax({
                  type: \"POST\",
                  url: \"";
        // line 173
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_ajax_search");
        echo "\",
                  data: {
                      'searchText' : value
                  },
                  success: function(msg){
                    console.log('responce');
                    console.log(msg);

                    if (value==\$(that).val()) {
                        var result = JSON.parse(msg);
                        console.log(result);

                        \$('#static-show').slideUp(\"fast\");
                        var content = '';
                        if(result.length == 0){
                          content += '<li>no result...</li>';
                        }else{
                          for(var i=0; i < result.length; i++){
                            content +=
                            '<li class=\"item\">'+
                              '<a href=\"/blog/'+
                              result[i]['short_home']+
                              '/'+
                              result[i]['id']+
                              '-'+
                              result[i]['url']+
                              '\"title=\"'+
                              result[i]['name']+'\">'+
                              '<h3>'+result[i]['name']+'</h3>'+
                              '</a>'+
                              '<hr>'+
                            '</li>';
                          }
                        }
                        \$('#search_show').append(content);
                        \$('#blog-filtered').slideDown('fast');
                      }
                   }
              });
          }// if( \$(this).val().length > 0 )
          else{
            \$('#blog-filtered').slideUp('fast');
            \$('#static-show').slideDown('fast');
          }
        });// #search on 'keyup'
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "PluginsBlogBundle:Blog:show_blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  358 => 173,  324 => 141,  321 => 140,  318 => 139,  315 => 138,  312 => 137,  309 => 136,  307 => 135,  304 => 134,  302 => 133,  299 => 132,  295 => 130,  291 => 128,  280 => 123,  275 => 121,  271 => 120,  262 => 114,  253 => 112,  250 => 111,  247 => 110,  244 => 109,  241 => 108,  238 => 107,  235 => 106,  231 => 105,  228 => 104,  224 => 102,  222 => 101,  219 => 100,  215 => 98,  212 => 97,  205 => 95,  198 => 94,  195 => 93,  192 => 92,  189 => 91,  186 => 90,  184 => 89,  177 => 85,  172 => 83,  168 => 82,  159 => 76,  150 => 74,  147 => 73,  144 => 72,  141 => 71,  138 => 70,  135 => 69,  132 => 68,  129 => 67,  124 => 66,  121 => 65,  118 => 64,  116 => 63,  111 => 61,  108 => 60,  103 => 59,  100 => 58,  96 => 56,  94 => 55,  91 => 54,  89 => 49,  86 => 48,  84 => 47,  79 => 44,  73 => 42,  70 => 37,  68 => 34,  66 => 31,  60 => 29,  57 => 24,  55 => 23,  50 => 21,  47 => 20,  44 => 19,  41 => 14,  38 => 13,  35 => 12,  32 => 11,  30 => 10,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<style>
    #blog-filtered{
      display: none;
    }
</style>

<div class=\"content\">
  <div  id='static-show'>
<!-- _________________ -->
  {% if category is empty %}
      {% if queries is empty %}
          {% include \"default/breadcrumbs.html.twig\" with { 'currentPage': 'Blog', 'elements': null, 'home' : false } %}
      {% else %}
          {% include \"default/breadcrumbs.html.twig\" with { 'currentPage': queries, 'elements':
              {
                  0: {'url': \"plugins_blog_homepage\", 'name': \"Blog\" },
              }, 'home' : false
          } %}
      {% endif %}

      <!-- <h1 id=\"blog-h1\">Blog {% include \"PluginsBlogBundle:Blog:page_to_name.html.twig\" with {'pages': pages, 'page': page} %}</h1> -->

  {% elseif topic is empty %}
      {% include \"default/breadcrumbs.html.twig\" with { 'currentPage': category.name, 'elements':
              {
                  0: {'url': \"plugins_blog_homepage\", 'name': \"Blog\" },
              }, 'home' : false
          } %}
      <!-- <h1 id=\"blog-h1\">{% include \"PluginsBlogBundle:Blog:cat_name.html.twig\" with { 'currentPage': category.name } %}</h1> -->
  {% else %}
      {% include \"default/breadcrumbs.html.twig\" with { 'currentPage': topic.name, 'elements':
              {
                  0: {'url': \"plugins_blog_homepage\", 'name': \"Blog\" },
                  1: {'url': \"plugins_blog_view_category\", 'name': category.name, 'params': {'categoryUrl' : category.url}},
              }, 'home' : false
          } %}
      {% include \"PluginsBlogBundle:Blog:cat_name.html.twig\" with { 'currentPage': category.name, 'elements':
              {
                  0: {'url': \"plugins_blog_homepage\", 'name': \"Blog\" },
              }
      } %}
      <!-- <h1 id=\"blog-h1\">{% include \"PluginsBlogBundle:Blog:cat_name.html.twig\" with { 'currentPage': category.name } %}</h1> -->
  {% endif %}

    <div class=\"list\">

    {% if category is empty %}

    {% set previews = {
            0: \"Criminal defense\",
            1: \"Family law\",
            2: \"Civil litigation\"
    } %}

    {% if posts is empty %}
        <div class=\"blog-subtitle\">No posts found</div>
    {% else %}
      {% set break = false %}
        {% for step in 0..2 %}
          <div class=\"blog-subtitle\">
            {{previews[step]}} latest posts
          </div>
          {% set break = false %}
          {% set count = 0 %}
          <ul>
            {% for post in allposts if not break %}
              {% if post.blogTopic is empty %}
                  {% set postUrl = path(\"plugins_blog_view_post_without_topic\", {categoryUrl: post.blogCategory.url, id: post.id, postUrl: post.url}) %}
              {% else %}
                  {% set postUrl = path(\"plugins_blog_view_post\", {categoryUrl: post.blogCategory.url, topicUrl: post.blogTopic.url, id: post.id, postUrl: post.url}) %}
              {% endif %}
              {% if post.blogCategory.name == previews[step] %}
                  <li class=\"item\">
                    <a href=\"{{ postUrl }}\" title=\"{{ post.name }}\"><h3>{{ post.name }}</h3></a>
                    <div class=\"short\">
                      {{ post.short | raw }}
                    </div>
                    <hr>
                    <div class=\"info\">
                      <div class=\"row\">
                        <div class=\"dc\">
                          <div class=\"pattr\"><span>date:</span>{{ post.dateUsFormat }}</div>
                          <div class=\"pattr\"><span>category:</span>{{ post.blogCategory.name }}</div>
                        </div>
                        <div class=\"readmore\"><a href=\"{{ postUrl }}\"><span class=\"pbtn\">read more</span></a></div>
                      </div>
                    </div>
                  </li>
                  {% set count = count + 1 %}
                  {% if count == 5 %}
                    {% set break = true %}
                  {% endif %}
              {% endif %}
            {% endfor %}
          </ul>
        {% endfor %}
    {% endif %}

    {% else %}

      {% if posts is empty %}
        <div class=\"blog-subtitle\">No posts found</div>
      {% else %}
        <ul>
        {% for post in posts %}
            {% if post.blogTopic is empty %}
              {% set postUrl = path(\"plugins_blog_view_post_without_topic\", {categoryUrl: post.blogCategory.url, id: post.id, postUrl: post.url}) %}
            {% else %}
              {% set postUrl = path(\"plugins_blog_view_post\", {categoryUrl: post.blogCategory.url, topicUrl: post.blogTopic.url, id: post.id, postUrl: post.url}) %}
            {% endif %}
            <li class=\"item\">
              <a href=\"{{ postUrl }}\" title=\"{{ post.name }}\"><h3>{{ post.name }}</h3></a>
              <div class=\"short\">
                {{ post.short | raw }}
              </div>
              <hr>
              <div class=\"info\">
                <div class=\"row\">
                  <div class=\"dc\">
                    <div class=\"pattr\"><span>date:</span>{{ post.dateUsFormat }}</div>
                    <div class=\"pattr\"><span>category:</span>{{ post.blogCategory.name }}</div>
                  </div>
                  <div class=\"readmore\"><a href=\"{{ postUrl }}\"><span class=\"pbtn\">read more</span></a></div>
                </div>
              </div>
            </li>
        {% endfor %}
        </ul>
      {% endif %}

    {% endif %}

    {% if category is not empty %}

    {% set params = null %}
    {% if queries %}
        {% set params = {'q' : queries|url_encode} %}
    {% endif %}
    {% include \"AppBundle:App:pagination.html.twig\" with {'pages': pages, 'page': page, 'params': parameters, 'queries': params, 'route': route, 'limit': null} %}
    {% endif %}
    </div>

<!-- _________________ -->
  </div>
<!-- _________________ -->
    <div class=\"list\" id=\"blog-filtered\">
      <ul id='search_show'>
      </ul>
    </div>
<!-- _________________ -->
</div>

<script type=\"text/javascript\">
    jQuery(document).ready(function() {
      var searchRequest = null;
      \$(\"#search\").val('');

      console.log('search');

      \$(\"#search\").on('keyup',function() {

          var that = this;
          var value = \$(this).val();

          var entitySelector = \$(\"#search_show\").html('');
          if ( \$(this).val().length > 0 ) {
              if (searchRequest != null)
                  searchRequest.abort();
              \$('#search_show').empty()

              \$.ajax({
                  type: \"POST\",
                  url: \"{{ path('blog_ajax_search') }}\",
                  data: {
                      'searchText' : value
                  },
                  success: function(msg){
                    console.log('responce');
                    console.log(msg);

                    if (value==\$(that).val()) {
                        var result = JSON.parse(msg);
                        console.log(result);

                        \$('#static-show').slideUp(\"fast\");
                        var content = '';
                        if(result.length == 0){
                          content += '<li>no result...</li>';
                        }else{
                          for(var i=0; i < result.length; i++){
                            content +=
                            '<li class=\"item\">'+
                              '<a href=\"/blog/'+
                              result[i]['short_home']+
                              '/'+
                              result[i]['id']+
                              '-'+
                              result[i]['url']+
                              '\"title=\"'+
                              result[i]['name']+'\">'+
                              '<h3>'+result[i]['name']+'</h3>'+
                              '</a>'+
                              '<hr>'+
                            '</li>';
                          }
                        }
                        \$('#search_show').append(content);
                        \$('#blog-filtered').slideDown('fast');
                      }
                   }
              });
          }// if( \$(this).val().length > 0 )
          else{
            \$('#blog-filtered').slideUp('fast');
            \$('#static-show').slideDown('fast');
          }
        });// #search on 'keyup'
    });
</script>
", "PluginsBlogBundle:Blog:show_blog.html.twig", "/home/szpaklabs/work/projects/sharovalaw-com/src/Plugins/BlogBundle/Resources/views/Blog/show_blog.html.twig");
    }
}
