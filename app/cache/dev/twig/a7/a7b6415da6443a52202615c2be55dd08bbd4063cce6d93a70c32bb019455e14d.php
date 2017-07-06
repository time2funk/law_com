<?php

/* PluginsPracticAreaBundle:PracticArea:google_map_pa.html.twig */
class __TwigTemplate_f4d00257f12209d6ecd4545d4e2ddbc5a19b146dee88f42ae77accf3e783ca01 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'googleMapPA' => array($this, 'block_googleMapPA'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('googleMapPA', $context, $blocks);
    }

    public function block_googleMapPA($context, array $blocks = array())
    {
        // line 2
        echo "<div class=\"contactMap\">
\t<div class=\"map-sidebar\">
\t\t<a href=\"";
        // line 4
        echo twig_escape_filter($this->env, ($context["map_a"] ?? $this->getContext($context, "map_a")), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, ($context["map_alt"] ?? $this->getContext($context, "map_alt")), "html", null, true);
        echo "\">
\t\t\t<div class=\"map-stuff\">
\t\t\t\t<div class=\"map-stuff-container\">
\t\t\t\t\t";
        // line 7
        echo twig_escape_filter($this->env, ($context["contact_address_short1"] ?? $this->getContext($context, "contact_address_short1")), "html", null, true);
        echo " <br> ";
        echo twig_escape_filter($this->env, ($context["contact_address_state"] ?? $this->getContext($context, "contact_address_state")), "html", null, true);
        echo "<br>
\t\t\t\t\t<span>View larger map</span>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<img src=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["map_img_sidebar"] ?? $this->getContext($context, "map_img_sidebar")), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, ($context["map_alt"] ?? $this->getContext($context, "map_alt")), "html", null, true);
        echo "\" />
\t\t</a>
\t</div>
  <div class=\"title\">Law Office of Yelena Sharova</div>
  <address>
      745 Fifth Avenue, Suite 500
      <br>
      New York, New York 10151
  </address>
</div>
";
    }

    public function getTemplateName()
    {
        return "PluginsPracticAreaBundle:PracticArea:google_map_pa.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  47 => 11,  38 => 7,  30 => 4,  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block googleMapPA %}
<div class=\"contactMap\">
\t<div class=\"map-sidebar\">
\t\t<a href=\"{{ map_a }}\" alt=\"{{ map_alt }}\">
\t\t\t<div class=\"map-stuff\">
\t\t\t\t<div class=\"map-stuff-container\">
\t\t\t\t\t{{ contact_address_short1 }} <br> {{ contact_address_state }}<br>
\t\t\t\t\t<span>View larger map</span>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<img src=\"{{ map_img_sidebar }}\" alt=\"{{ map_alt }}\" />
\t\t</a>
\t</div>
  <div class=\"title\">Law Office of Yelena Sharova</div>
  <address>
      745 Fifth Avenue, Suite 500
      <br>
      New York, New York 10151
  </address>
</div>
{% endblock %}
", "PluginsPracticAreaBundle:PracticArea:google_map_pa.html.twig", "/home/szpaklabs/work/projects/sharovalaw-com/src/Plugins/PracticAreaBundle/Resources/views/PracticArea/google_map_pa.html.twig");
    }
}
