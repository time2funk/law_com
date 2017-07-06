<?php

/* PluginsNewsBundle:News:show_news.html.twig */
class __TwigTemplate_e85b9a204bfab635c899bf1f92ed4412ba294a40f76e16e9e590db45ed8c7f99 extends Twig_Template
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
    #news-filtered{
      display: none;
    }
</style>

<div class=\"content\">
<!-- _________________ -->
  ";
        // line 9
        if ((($context["home"] ?? $this->getContext($context, "home")) == true)) {
            // line 10
            echo "<!-- _________________ -->
    ";
            // line 11
            $this->loadTemplate("default/breadcrumbs.html.twig", "PluginsNewsBundle:News:show_news.html.twig", 11)->display(array_merge($context, array("currentPage" => "News & Views", "elements" => array(0 => array("url" => "plugins_news_homepage", "name" => "News & Views")), "home" => true)));
            // line 14
            echo "    <div class=\"list\" id=\"news-show\">
      <ul id='statis_show'>
        ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["elements"] ?? $this->getContext($context, "elements")));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 17
                echo "        <li class=\"item\">
          <a href=\"";
                // line 18
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("plugins_news_view", array("url" => $this->getAttribute($context["entity"], "url", array()))), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "name", array()), "html", null, true);
                echo "\"><h3>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "name", array()), "html", null, true);
                echo "</h3></a>
          <div class=\"short\">
            ";
                // line 20
                echo $this->getAttribute($context["entity"], "short", array());
                echo "
          </div>
          <hr>
          <div class=\"info\">
            <div class=\"row\">
              <div class=\"dc\">
                <div class=\"pattr\"><span>date:</span>";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "dateUsFormat", array()), "html", null, true);
                echo "</div>
              </div>
              <div class=\"readmore\"><a href=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("plugins_news_view", array("url" => $this->getAttribute($context["entity"], "url", array()))), "html", null, true);
                echo "\"><span class=\"pbtn\">read more</span></a></div>
            </div>
          </div>
        </li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "      </ul>
    </div>
<!-- _________________ -->
  ";
        } else {
            // line 37
            echo "<!-- _________________ -->
\t  ";
            // line 38
            $this->loadTemplate("default/breadcrumbs.html.twig", "PluginsNewsBundle:News:show_news.html.twig", 38)->display(array_merge($context, array("currentPage" => $this->getAttribute(($context["element"] ?? $this->getContext($context, "element")), "name", array()), "elements" => array(0 => array("url" => "plugins_news_homepage", "name" => "News & Views")), "home" => false)));
            // line 39
            echo "    <div class=\"txt\" id=\"news-show\">
      ";
            // line 40
            if (($context["element"] ?? $this->getContext($context, "element"))) {
                // line 41
                echo "      <h1>";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["element"] ?? $this->getContext($context, "element")), "name", array()), "html", null, true);
                echo "</h1>
      <div class=\"postdate\">";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute(($context["element"] ?? $this->getContext($context, "element")), "dateUsFormat", array()), "html", null, true);
                echo "</div>
      ";
                // line 43
                echo $this->getAttribute(($context["element"] ?? $this->getContext($context, "element")), "content", array());
                echo "
      ";
            }
            // line 45
            echo "      <hr>
      ";
            // line 46
            $this->loadTemplate("default/fb.html.twig", "PluginsNewsBundle:News:show_news.html.twig", 46)->display($context);
            // line 47
            echo "    </div>
<!-- _________________ -->
  ";
        }
        // line 50
        echo "<!-- _________________ -->
  <div class=\"list\" id=\"news-filtered\">
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
        // line 78
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("news_ajax_search");
        echo "\",
                  data: {
                      'searchText' : value
                  },
                  success: function(msg){
                    console.log('responce');
                    //we need to check if the value is the same
                    if (value==\$(that).val()) {
                        var result = JSON.parse(msg);
                        console.log(result);

                        \$('#news-show').slideUp(\"fast\");
                        var content = '';
                        if(result.length == 0){
                          content += '<li>no result...</li>';
                        }else{
                          for(var i=0; i < result.length; i++){
                            content +=
                            '<li class=\"item\">'+
                              '<a href=\"/news/'+
                              result[i]['url']+
                              '\"title=\"'+result[i]['name']+'\">'+
                              '<h3>'+result[i]['name']+'</h3>'+
                              '</a>'+
                              // '<div class=\"short\">'+
                              //   result[i]['short']+
                              // '</div>'+
                              '<hr>'+
                              // '<div class=\"info\">'+
                              //   '<div class=\"row\">'+
                                  // '<div class=\"dc\">'+
                                  //   '<div class=\"pattr\">'+
                                  //   '<span>date:</span>'+
                                  //   'time....'+
                                  //   '</div>'+
                                  // '</div>'+
                              //     '<div class=\"readmore\">'+
                              //     '<a href=\"news/'+
                              //     result[i]['url']+
                              //     '\"><span class=\"pbtn\">'+
                              //     'read more'+
                              //     '</span>'+
                              //     '</a>'+
                              //     '</div>'+
                              //   '</div>'+
                              // '</div>'+
                            '</li>';
                          }
                        }
                        \$('#search_show').append(content);
                        \$('#news-filtered').slideDown('fast');
                      }
                   }
              });
          }// if( \$(this).val().length > 0 )
          else{
            \$('#news-filtered').slideUp('fast');
            \$('#news-show').slideDown('fast');
          }

        });// #search on 'keyup'
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "PluginsNewsBundle:News:show_news.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 78,  121 => 50,  116 => 47,  114 => 46,  111 => 45,  106 => 43,  102 => 42,  97 => 41,  95 => 40,  92 => 39,  90 => 38,  87 => 37,  81 => 33,  70 => 28,  65 => 26,  56 => 20,  47 => 18,  44 => 17,  40 => 16,  36 => 14,  34 => 11,  31 => 10,  29 => 9,  19 => 1,);
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
    #news-filtered{
      display: none;
    }
</style>

<div class=\"content\">
<!-- _________________ -->
  {% if home == true %}
<!-- _________________ -->
    {% include \"default/breadcrumbs.html.twig\" with { 'currentPage': 'News & Views', 'elements': {
            0: {'url': \"plugins_news_homepage\", 'name': \"News & Views\" }
        }, 'home' : true } %}
    <div class=\"list\" id=\"news-show\">
      <ul id='statis_show'>
        {% for entity in elements %}
        <li class=\"item\">
          <a href=\"{{ path('plugins_news_view', {'url' : entity.url}) }}\" title=\"{{ entity.name }}\"><h3>{{ entity.name }}</h3></a>
          <div class=\"short\">
            {{ entity.short | raw }}
          </div>
          <hr>
          <div class=\"info\">
            <div class=\"row\">
              <div class=\"dc\">
                <div class=\"pattr\"><span>date:</span>{{ entity.dateUsFormat }}</div>
              </div>
              <div class=\"readmore\"><a href=\"{{ path('plugins_news_view', {'url' : entity.url}) }}\"><span class=\"pbtn\">read more</span></a></div>
            </div>
          </div>
        </li>
      {% endfor %}
      </ul>
    </div>
<!-- _________________ -->
  {% else %}
<!-- _________________ -->
\t  {% include \"default/breadcrumbs.html.twig\" with { 'currentPage': element.name, 'elements': { 0: {'url': \"plugins_news_homepage\", 'name': \"News & Views\" }}, 'home' : false } %}
    <div class=\"txt\" id=\"news-show\">
      {% if element %}
      <h1>{{ element.name }}</h1>
      <div class=\"postdate\">{{ element.dateUsFormat }}</div>
      {{ element.content | raw }}
      {% endif %}
      <hr>
      {% include \"default/fb.html.twig\" %}
    </div>
<!-- _________________ -->
  {% endif %}
<!-- _________________ -->
  <div class=\"list\" id=\"news-filtered\">
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
                  url: \"{{ path('news_ajax_search') }}\",
                  data: {
                      'searchText' : value
                  },
                  success: function(msg){
                    console.log('responce');
                    //we need to check if the value is the same
                    if (value==\$(that).val()) {
                        var result = JSON.parse(msg);
                        console.log(result);

                        \$('#news-show').slideUp(\"fast\");
                        var content = '';
                        if(result.length == 0){
                          content += '<li>no result...</li>';
                        }else{
                          for(var i=0; i < result.length; i++){
                            content +=
                            '<li class=\"item\">'+
                              '<a href=\"/news/'+
                              result[i]['url']+
                              '\"title=\"'+result[i]['name']+'\">'+
                              '<h3>'+result[i]['name']+'</h3>'+
                              '</a>'+
                              // '<div class=\"short\">'+
                              //   result[i]['short']+
                              // '</div>'+
                              '<hr>'+
                              // '<div class=\"info\">'+
                              //   '<div class=\"row\">'+
                                  // '<div class=\"dc\">'+
                                  //   '<div class=\"pattr\">'+
                                  //   '<span>date:</span>'+
                                  //   'time....'+
                                  //   '</div>'+
                                  // '</div>'+
                              //     '<div class=\"readmore\">'+
                              //     '<a href=\"news/'+
                              //     result[i]['url']+
                              //     '\"><span class=\"pbtn\">'+
                              //     'read more'+
                              //     '</span>'+
                              //     '</a>'+
                              //     '</div>'+
                              //   '</div>'+
                              // '</div>'+
                            '</li>';
                          }
                        }
                        \$('#search_show').append(content);
                        \$('#news-filtered').slideDown('fast');
                      }
                   }
              });
          }// if( \$(this).val().length > 0 )
          else{
            \$('#news-filtered').slideUp('fast');
            \$('#news-show').slideDown('fast');
          }

        });// #search on 'keyup'
    });
</script>
", "PluginsNewsBundle:News:show_news.html.twig", "/home/szpaklabs/work/projects/sharovalaw-com/src/Plugins/NewsBundle/Resources/views/News/show_news.html.twig");
    }
}
