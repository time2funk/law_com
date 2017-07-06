<?php

/* PluginsBlogBundle:Blog:search.ajax.html.twig */
class __TwigTemplate_3396340c46e191b5aa9ed547fda1e237037ce116a9c2c6d554d19d800c035a68 extends Twig_Template
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
        echo "<script type=\"text/javascript\">
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
        // line 21
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
        return "PluginsBlogBundle:Blog:search.ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 21,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<script type=\"text/javascript\">
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
", "PluginsBlogBundle:Blog:search.ajax.html.twig", "/home/szpaklabs/work/projects/sharovalaw-com/src/Plugins/BlogBundle/Resources/views/Blog/search.ajax.html.twig");
    }
}
