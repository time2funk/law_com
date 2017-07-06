<?php

/* PluginsPracticAreaBundle:PracticArea:show_pa.html.twig */
class __TwigTemplate_c2c6d8e39ccb1cb38343da7a7890b9240e00228c678e4a1b1408b25dc7d22f67 extends Twig_Template
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
        echo "
<!-- ////////////////////////////////////////// -->
<style>
    #pa-filtered{
      display: none;
    }
</style>

<div class=\"content\">
<!-- _________________ -->
  ";
        // line 11
        if ((($context["section"] ?? $this->getContext($context, "section")) == "home")) {
            // line 12
            echo "<!-- _________________ -->
    ";
            // line 13
            $this->loadTemplate("default/breadcrumbs.html.twig", "PluginsPracticAreaBundle:PracticArea:show_pa.html.twig", 13)->display(array_merge($context, array("elements" => array(0 => array("url" => "plugins_practic_area_homepage", "name" => "Practice areas")), "currentPage" => $this->getAttribute(            // line 15
($context["page"] ?? $this->getContext($context, "page")), "name", array()), "home" => true)));
            // line 17
            echo "    <div id='static-show'>


    ";
            // line 20
            $context["area"] = array(0 => "criminal-defense", 1 => "family-law", 2 => "_civil-appeal", 3 => "civil-litigation", 4 => "criminal-appeals");
            // line 27
            echo "
    ";
            // line 28
            echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("PluginsPracticAreaBundle:PracticArea:practicMozaicItemsHard", array("area" => ($context["area"] ?? $this->getContext($context, "area")))), array());
            // line 46
            echo "      <div class=\"sub-text\">
        <div class=\"txt\">
          ";
            // line 48
            echo $this->getAttribute(($context["page"] ?? $this->getContext($context, "page")), "content", array());
            echo "
          <hr>
          ";
            // line 50
            $this->loadTemplate("default/fb.html.twig", "PluginsPracticAreaBundle:PracticArea:show_pa.html.twig", 50)->display($context);
            // line 51
            echo "        </div>
      </div>
    </div>
<!-- _________________ -->
  ";
        } elseif ((        // line 55
($context["section"] ?? $this->getContext($context, "section")) == "sub")) {
            // line 56
            echo "<!-- _________________ -->
    ";
            // line 57
            $this->loadTemplate("default/breadcrumbs.html.twig", "PluginsPracticAreaBundle:PracticArea:show_pa.html.twig", 57)->display(array_merge($context, array("elements" => array(0 => array("url" => "plugins_practic_area_homepage", "name" => "Practice areas")), "currentPage" => $this->getAttribute(($context["page"] ?? $this->getContext($context, "page")), "name", array()), "home" => false)));
            // line 58
            echo "
    <div  id='static-show'>
      <div class=\"sub-text\">

        ";
            // line 62
            $this->loadTemplate("default/top_section.html.twig", "PluginsPracticAreaBundle:PracticArea:show_pa.html.twig", 62)->display(array_merge($context, array("section_name" => $this->getAttribute(($context["page"] ?? $this->getContext($context, "page")), "name", array()), "section_desc" => $this->getAttribute(($context["page"] ?? $this->getContext($context, "page")), "metadescription", array()), "backgroundImage" => $this->getAttribute(($context["page"] ?? $this->getContext($context, "page")), "photoFullPath", array()))));
            // line 63
            echo "
        <div class=\"txt\">
          ";
            // line 65
            echo $this->getAttribute(($context["page"] ?? $this->getContext($context, "page")), "content", array());
            echo "
          <hr>
          ";
            // line 67
            $this->loadTemplate("default/fb.html.twig", "PluginsPracticAreaBundle:PracticArea:show_pa.html.twig", 67)->display($context);
            // line 68
            echo "        </div>
      </div>
    </div>
<!-- _________________ -->
  ";
        } else {
            // line 73
            echo "<!-- _________________ -->
";
            // line 74
            $this->loadTemplate("default/breadcrumbs.html.twig", "PluginsPracticAreaBundle:PracticArea:show_pa.html.twig", 74)->display(array_merge($context, array("elements" => array(0 => array("url" => "plugins_practic_area_homepage", "name" => "Practice areas"), 1 => array("url" => "plugins_practic_area_view", "name" => $this->getAttribute(            // line 76
($context["pa"] ?? $this->getContext($context, "pa")), "name", array()), "params" => array("url" => $this->getAttribute(($context["pa"] ?? $this->getContext($context, "pa")), "url", array())))), "currentPage" => $this->getAttribute(            // line 77
($context["page"] ?? $this->getContext($context, "page")), "name", array()), "home" => false)));
            // line 79
            echo "<div  id='static-show'>
  <div class=\"sub-text\">
    ";
            // line 81
            $this->loadTemplate("default/top_section.html.twig", "PluginsPracticAreaBundle:PracticArea:show_pa.html.twig", 81)->display(array_merge($context, array("section_name" => $this->getAttribute(($context["page"] ?? $this->getContext($context, "page")), "name", array()), "section_desc" => $this->getAttribute(($context["page"] ?? $this->getContext($context, "page")), "metadescription", array()), "backgroundImage" => $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl($this->getAttribute(            // line 82
($context["active"] ?? $this->getContext($context, "active")), "photoFullPath", array())))));
            // line 83
            echo "    <div class=\"txt\">
      ";
            // line 84
            if (($this->getAttribute(($context["page"] ?? $this->getContext($context, "page")), "createdAtDatetime", array()) <= "2016-01-25")) {
                // line 85
                echo "      <h2>
          ";
                // line 86
                echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? $this->getContext($context, "page")), "name", array()), "html", null, true);
                echo "
      </h2>
      ";
            }
            // line 89
            echo "      ";
            echo $this->getAttribute(($context["page"] ?? $this->getContext($context, "page")), "content", array());
            echo "
      <!-- ";
            // line 90
            $this->loadTemplate("PluginsPracticAreaBundle:PracticArea:additional_description.html.twig", "PluginsPracticAreaBundle:PracticArea:show_pa.html.twig", 90)->display($context);
            echo " -->
      <hr>
      ";
            // line 92
            $this->loadTemplate("default/fb.html.twig", "PluginsPracticAreaBundle:PracticArea:show_pa.html.twig", 92)->display($context);
            // line 93
            echo "    </div>
  </div>
</div>
<!-- _________________ -->
  ";
        }
        // line 98
        echo "<!-- _________________ -->
    <div class=\"list\" id=\"pa-filtered\">
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
        // line 126
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pa_ajax_search");
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
                              '<a href=\"/practic-areas/'+
                              result[i]['subfolder']+
                              '/'+
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
                        \$('#pa-filtered').slideDown('fast');
                      }
                   }
              });
          }// if( \$(this).val().length > 0 )
          else{
            \$('#pa-filtered').slideUp('fast');
            \$('#static-show').slideDown('fast');
          }
        });// #search on 'keyup'
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "PluginsPracticAreaBundle:PracticArea:show_pa.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 126,  148 => 98,  141 => 93,  139 => 92,  134 => 90,  129 => 89,  123 => 86,  120 => 85,  118 => 84,  115 => 83,  113 => 82,  112 => 81,  108 => 79,  106 => 77,  105 => 76,  104 => 74,  101 => 73,  94 => 68,  92 => 67,  87 => 65,  83 => 63,  81 => 62,  75 => 58,  73 => 57,  70 => 56,  68 => 55,  62 => 51,  60 => 50,  55 => 48,  51 => 46,  49 => 28,  46 => 27,  44 => 20,  39 => 17,  37 => 15,  36 => 13,  33 => 12,  31 => 11,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<!-- ////////////////////////////////////////// -->
<style>
    #pa-filtered{
      display: none;
    }
</style>

<div class=\"content\">
<!-- _________________ -->
  {% if section == 'home' %}
<!-- _________________ -->
    {% include \"default/breadcrumbs.html.twig\" with { 'elements': {
            0: {'url': \"plugins_practic_area_homepage\", 'name': \"Practice areas\" }
        }, 'currentPage': page.name, 'home' : true }
    %}
    <div id='static-show'>


    {% set area = [
    'criminal-defense',
    'family-law',
    '_civil-appeal',
    'civil-litigation',
    'criminal-appeals'
    ]%}

    {% render controller(\"PluginsPracticAreaBundle:PracticArea:practicMozaicItemsHard\", {'area' : area}) %}
{#
{% render controller(\"PluginsPracticAreaBundle:PracticArea:practicMozaicItems2\", {
        'area[0]' : 'criminal-defense',
        'area[1]' : 'family-law',
        'area[2]' : 'civil-appeal',
        'area[3]' : 'civil-litigation',
        'area[4]' : 'criminal-appeals'
}) %}

{% render controller(\"PluginsPracticAreaBundle:PracticArea:practicMozaicItems\", {
        'area1' : 'criminal-defense',
        'area2' : 'family-law',
        'area3' : 'civil-appeal',
        'area4' : 'civil-litigation',
        'area5' : 'criminal-appeals'
}) %}
#}
      <div class=\"sub-text\">
        <div class=\"txt\">
          {{ page.content | raw }}
          <hr>
          {% include \"default/fb.html.twig\" %}
        </div>
      </div>
    </div>
<!-- _________________ -->
  {% elseif section == 'sub' %}
<!-- _________________ -->
    {% include \"default/breadcrumbs.html.twig\" with { 'elements': { 0: {'url': \"plugins_practic_area_homepage\", 'name': \"Practice areas\" }}, 'currentPage': page.name, 'home' : false } %}

    <div  id='static-show'>
      <div class=\"sub-text\">

        {% include \"default/top_section.html.twig\" with { 'section_name': page.name, 'section_desc': page.metadescription, 'backgroundImage': page.photoFullPath } %}

        <div class=\"txt\">
          {{ page.content | raw }}
          <hr>
          {% include \"default/fb.html.twig\" %}
        </div>
      </div>
    </div>
<!-- _________________ -->
  {% else %}
<!-- _________________ -->
{% include \"default/breadcrumbs.html.twig\" with { 'elements': {
        0: {'url': \"plugins_practic_area_homepage\", 'name': \"Practice areas\" },
        1: {'url': \"plugins_practic_area_view\", 'name': pa.name, \"params\" : {\"url\" : pa.url} }
    }, 'currentPage': page.name, 'home' : false }
%}
<div  id='static-show'>
  <div class=\"sub-text\">
    {% include \"default/top_section.html.twig\" with { 'section_name': page.name, 'section_desc': page.metadescription,
    'backgroundImage': asset(active.photoFullPath) } %}
    <div class=\"txt\">
      {% if page.createdAtDatetime <= '2016-01-25' %}
      <h2>
          {{ page.name }}
      </h2>
      {% endif %}
      {{ page.content | raw }}
      <!-- {% include \"PluginsPracticAreaBundle:PracticArea:additional_description.html.twig\" %} -->
      <hr>
      {% include \"default/fb.html.twig\" %}
    </div>
  </div>
</div>
<!-- _________________ -->
  {% endif %}
<!-- _________________ -->
    <div class=\"list\" id=\"pa-filtered\">
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
                  url: \"{{ path('pa_ajax_search') }}\",
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
                              '<a href=\"/practic-areas/'+
                              result[i]['subfolder']+
                              '/'+
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
                        \$('#pa-filtered').slideDown('fast');
                      }
                   }
              });
          }// if( \$(this).val().length > 0 )
          else{
            \$('#pa-filtered').slideUp('fast');
            \$('#static-show').slideDown('fast');
          }
        });// #search on 'keyup'
    });
</script>
", "PluginsPracticAreaBundle:PracticArea:show_pa.html.twig", "/home/szpaklabs/work/projects/sharovalaw-com/src/Plugins/PracticAreaBundle/Resources/views/PracticArea/show_pa.html.twig");
    }
}
