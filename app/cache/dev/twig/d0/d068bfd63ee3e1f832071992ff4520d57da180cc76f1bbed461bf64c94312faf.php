<?php

/* PluginsPracticAreaBundle:PracticArea:practic_areas_short_list.html.twig */
class __TwigTemplate_978684548d85626868eab5019ed0755454413bd394a4cd0476176627d3d66a9a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'articlesList' => array($this, 'block_articlesList'),
            'barAssociationsBlock' => array($this, 'block_barAssociationsBlock'),
            'avvo' => array($this, 'block_avvo'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('articlesList', $context, $blocks);
    }

    public function block_articlesList($context, array $blocks = array())
    {
        // line 2
        echo "<section id='p_collapse'>
\t\t<div class=\"container parent\" style=\"height: 100%;\">
\t\t\t<div class=\"side a\">

        <h2>Practice areas</h2>

        <div class=\"panel-group\" id=\"practice-short\">

\t\t\t\t\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["areas"] ?? $this->getContext($context, "areas")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["area"]) {
            // line 11
            echo "\t\t\t\t  <div class=\"panel panel-default\">
\t\t\t\t\t\t<div id=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["area"], "areaId", array()), "html", null, true);
            echo "\" class=\"panel-collapse collapse ";
            echo (($this->getAttribute($context["loop"], "first", array())) ? ("in act") : (""));
            echo "\">
              <div class=\"panel-body\">
\t\t\t\t\t\t\t\t";
            // line 14
            echo $this->getAttribute($context["area"], "short", array());
            echo "
\t\t\t\t\t\t\t\t<a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("plugins_practic_area_view", array("url" => $this->getAttribute($context["area"], "url", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\tRead More
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
            </div>

            <div class=\"panel-heading\">
\t\t\t\t\t\t\t<a data-toggle=\"collapse\" data-parent=\"#practice-short\" href=\"#";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["area"], "areaId", array()), "html", null, true);
            echo "\">
\t              <h4 class=\"panel-title\">
\t\t\t\t\t\t\t\t\t";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["area"], "name", array()), "html", null, true);
            echo "
\t              </h4>
\t              <i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t</a>
            </div>
\t\t\t\t\t</div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['area'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "
\t\t\t\t</div>

\t\t\t</div>

\t\t\t";
        // line 36
        $this->displayBlock('barAssociationsBlock', $context, $blocks);
        // line 39
        echo "
\t\t\t<div class=\"vert\"></div>

      <div class=\"side b\">
        <div class=\"vert\"></div>
        <div class=\"pslider\">
\t\t\t\t\t";
        // line 45
        $this->displayBlock('avvo', $context, $blocks);
        // line 48
        echo "          <div class=\"cntrls noselect\">
            <a href=\"javascript:void(0);\"><div class=\"prev cntrl\"></div></a>
            <a href=\"javascript:void(0);\"><div class=\"next cntrl\"></div></a>
          </div>
        </div>
      </div>

    </div>
    <img class='bck'  src=\"/img/man.png\">
  </section>
";
    }

    // line 36
    public function block_barAssociationsBlock($context, array $blocks = array())
    {
        // line 37
        echo "\t      ";
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:App:barAssociationBlock"), array());
        // line 38
        echo "\t    ";
    }

    // line 45
    public function block_avvo($context, array $blocks = array())
    {
        // line 46
        echo "\t\t        ";
        $this->loadTemplate("AppBundle:App:avvo.html.twig", "PluginsPracticAreaBundle:PracticArea:practic_areas_short_list.html.twig", 46)->display($context);
        // line 47
        echo "\t\t\t    ";
    }

    public function getTemplateName()
    {
        return "PluginsPracticAreaBundle:PracticArea:practic_areas_short_list.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  154 => 47,  151 => 46,  148 => 45,  144 => 38,  141 => 37,  138 => 36,  124 => 48,  122 => 45,  114 => 39,  112 => 36,  105 => 31,  84 => 24,  79 => 22,  69 => 15,  65 => 14,  58 => 12,  55 => 11,  38 => 10,  28 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block articlesList %}
<section id='p_collapse'>
\t\t<div class=\"container parent\" style=\"height: 100%;\">
\t\t\t<div class=\"side a\">

        <h2>Practice areas</h2>

        <div class=\"panel-group\" id=\"practice-short\">

\t\t\t\t\t{% for area in areas %}
\t\t\t\t  <div class=\"panel panel-default\">
\t\t\t\t\t\t<div id=\"{{ area.areaId }}\" class=\"panel-collapse collapse {{ loop.first ? \"in act\" }}\">
              <div class=\"panel-body\">
\t\t\t\t\t\t\t\t{{ area.short | raw }}
\t\t\t\t\t\t\t\t<a href=\"{{ path(\"plugins_practic_area_view\", { \"url\" : area.url }) }}\">
\t\t\t\t\t\t\t\t\tRead More
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
            </div>

            <div class=\"panel-heading\">
\t\t\t\t\t\t\t<a data-toggle=\"collapse\" data-parent=\"#practice-short\" href=\"#{{ area.areaId }}\">
\t              <h4 class=\"panel-title\">
\t\t\t\t\t\t\t\t\t{{ area.name }}
\t              </h4>
\t              <i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t</a>
            </div>
\t\t\t\t\t</div>
\t\t\t\t\t{% endfor %}

\t\t\t\t</div>

\t\t\t</div>

\t\t\t{% block barAssociationsBlock %}
\t      {% render controller(\"AppBundle:App:barAssociationBlock\") %}
\t    {% endblock %}

\t\t\t<div class=\"vert\"></div>

      <div class=\"side b\">
        <div class=\"vert\"></div>
        <div class=\"pslider\">
\t\t\t\t\t{% block avvo %}
\t\t        {% include \"AppBundle:App:avvo.html.twig\" %}
\t\t\t    {% endblock %}
          <div class=\"cntrls noselect\">
            <a href=\"javascript:void(0);\"><div class=\"prev cntrl\"></div></a>
            <a href=\"javascript:void(0);\"><div class=\"next cntrl\"></div></a>
          </div>
        </div>
      </div>

    </div>
    <img class='bck'  src=\"/img/man.png\">
  </section>
{% endblock %}
", "PluginsPracticAreaBundle:PracticArea:practic_areas_short_list.html.twig", "/home/szpaklabs/work/projects/sharovalaw-com/src/Plugins/PracticAreaBundle/Resources/views/PracticArea/practic_areas_short_list.html.twig");
    }
}
