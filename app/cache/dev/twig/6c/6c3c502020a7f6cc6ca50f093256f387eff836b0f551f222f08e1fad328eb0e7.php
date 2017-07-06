<?php

/* AppBundle:App:main-mozaic.html.twig */
class __TwigTemplate_570e9f42bb2ed36a550bcf70543c48f695c8537f862a1c07a70a54ef67a7d2c0 extends Twig_Template
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
        echo "<section id=\"p_startpage\"style=\"height: calc(100vh - 160px);\">
  <div class=\"container tbl\">
      <div class=\"row tbl-c\">
        <div class=\"pblock\">
          <div class=\"pmain\">
            <div class=\"_up\">

              <img src=\"/img/logo-gold.svg\">
              <div class=\"box first\">
                <div class=\"_text\">
                  <span><a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_about_us");
        echo "\">65 Years<br> of Combined Legal Experience!</a></span>
                  <p><a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_about_us");
        echo "\">about us</a></p>
                </div>
              </div>
            </div>
            <div class=\"_down\">
              <div class=\"box second\">
\t\t\t\t\t\t\t\t<div class=\"back\"></div>
                <div class=\"_text\">
                  ";
        // line 20
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("PluginsBlogBundle:Blog:blogMozaicItems", array("catreq" => "criminal-defense")), array());
        // line 21
        echo "                </div>
              </div>
              <div class=\"box third\">
                <div class=\"_text\">
                  ";
        // line 25
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("PluginsNewsBundle:News:newsMozaicItems"), array());
        // line 26
        echo "                </div>
              </div>
            </div>
          </div>

          <div class=\"pfour\">
            ";
        // line 32
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("PluginsPracticAreaBundle:PracticArea:practicMozaicItems", array("area1" => "criminal-defense", "area2" => "family-law", "area3" => "civil-litigation", "area4" => "criminal-appeals")), array());
        // line 38
        echo "          </div>

          <div class=\"pthree\">
            <div class=\"box first\">
\t\t\t\t\t\t\t<div class=\"back\"></div>
              <div class=\"_text\">
                ";
        // line 44
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("PluginsBlogBundle:Blog:blogMozaicItems", array("catreq" => "family-law")), array());
        // line 45
        echo "              </div>
            </div>
            <div class=\"box second\">
              <div class=\"_text\">
                ";
        // line 49
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("PluginsBlogBundle:Blog:blogMozaicItems", array("catreq" => "civil-litigation")), array());
        // line 50
        echo "              </div>
            </div>
            <div class=\"box third\">
\t\t\t\t\t\t\t<div class=\"back\"></div>
            <div class=\"_text\">
\t\t\t\t\t\t\t";
        // line 55
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("PluginsPracticAreaBundle:PracticArea:randomArea"), array());
        // line 56
        echo "            </div>
          </div>
          </div>
        </div>
      </div>
    </div>
  <div class=\"pbot noselect\">
    <a id=\"go_down\" href=\"#psecond\" class='anchor'>
      <div class=\"arrow-down\">
          <img src=\"/img/shapeup.svg\" >
      </div>
    </a>
  </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "AppBundle:App:main-mozaic.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 56,  91 => 55,  84 => 50,  82 => 49,  76 => 45,  74 => 44,  66 => 38,  64 => 32,  56 => 26,  54 => 25,  48 => 21,  46 => 20,  35 => 12,  31 => 11,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"p_startpage\"style=\"height: calc(100vh - 160px);\">
  <div class=\"container tbl\">
      <div class=\"row tbl-c\">
        <div class=\"pblock\">
          <div class=\"pmain\">
            <div class=\"_up\">

              <img src=\"/img/logo-gold.svg\">
              <div class=\"box first\">
                <div class=\"_text\">
                  <span><a href=\"{{ path('app_about_us') }}\">65 Years<br> of Combined Legal Experience!</a></span>
                  <p><a href=\"{{ path('app_about_us') }}\">about us</a></p>
                </div>
              </div>
            </div>
            <div class=\"_down\">
              <div class=\"box second\">
\t\t\t\t\t\t\t\t<div class=\"back\"></div>
                <div class=\"_text\">
                  {% render controller(\"PluginsBlogBundle:Blog:blogMozaicItems\", { 'catreq' : 'criminal-defense' }) %}
                </div>
              </div>
              <div class=\"box third\">
                <div class=\"_text\">
                  {% render controller(\"PluginsNewsBundle:News:newsMozaicItems\") %}
                </div>
              </div>
            </div>
          </div>

          <div class=\"pfour\">
            {% render controller(\"PluginsPracticAreaBundle:PracticArea:practicMozaicItems\", {
\t\t\t\t\t\t \t'area1' : 'criminal-defense',
\t\t\t\t\t\t \t'area2' : 'family-law',
\t\t\t\t\t\t \t'area3' : 'civil-litigation',
\t\t\t\t\t\t \t'area4' : 'criminal-appeals'
\t\t\t\t\t\t}) %}
          </div>

          <div class=\"pthree\">
            <div class=\"box first\">
\t\t\t\t\t\t\t<div class=\"back\"></div>
              <div class=\"_text\">
                {% render controller(\"PluginsBlogBundle:Blog:blogMozaicItems\", { 'catreq' : 'family-law' }) %}
              </div>
            </div>
            <div class=\"box second\">
              <div class=\"_text\">
                {% render controller(\"PluginsBlogBundle:Blog:blogMozaicItems\", { 'catreq' : 'civil-litigation' }) %}
              </div>
            </div>
            <div class=\"box third\">
\t\t\t\t\t\t\t<div class=\"back\"></div>
            <div class=\"_text\">
\t\t\t\t\t\t\t{% render controller(\"PluginsPracticAreaBundle:PracticArea:randomArea\") %}
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>
  <div class=\"pbot noselect\">
    <a id=\"go_down\" href=\"#psecond\" class='anchor'>
      <div class=\"arrow-down\">
          <img src=\"/img/shapeup.svg\" >
      </div>
    </a>
  </div>
</section>
", "AppBundle:App:main-mozaic.html.twig", "/home/szpaklabs/work/projects/sharovalaw-com/src/AppBundle/Resources/views/App/main-mozaic.html.twig");
    }
}
