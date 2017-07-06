<?php

/* AppBundle:App:tmate.list.menu.html.twig */
class __TwigTemplate_175a229687add58d13430b9750942e4a55de7f90d739e158569d647e99b45338 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'tmateListMenu' => array($this, 'block_tmateListMenu'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('tmateListMenu', $context, $blocks);
    }

    public function block_tmateListMenu($context, array $blocks = array())
    {
        // line 2
        echo "<div id=\"static-menu\">
  <span class=\"back\">
    <a href=\"";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["back"] ?? $this->getContext($context, "back")));
        echo "\">
      <img src=\"/img/grey-l.svg\">
      back
    </a>
  </span>
  <ul>
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["attorneys"] ?? $this->getContext($context, "attorneys")));
        foreach ($context['_seq'] as $context["_key"] => $context["tmate"]) {
            // line 11
            echo "        ";
            if (($this->getAttribute($context["tmate"], "name", array()) == $this->getAttribute(($context["attorney"] ?? $this->getContext($context, "attorney")), "name", array()))) {
                // line 12
                echo "          <li class='cur'>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["tmate"], "name", array()), "html", null, true);
                echo "</li>
        ";
            } else {
                // line 14
                echo "          <li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["tmate"], "url", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["tmate"], "name", array()), "html", null, true);
                echo "</a></li>
        ";
            }
            // line 16
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tmate'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "  </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "AppBundle:App:tmate.list.menu.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 17,  60 => 16,  52 => 14,  46 => 12,  43 => 11,  39 => 10,  30 => 4,  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block tmateListMenu %}
<div id=\"static-menu\">
  <span class=\"back\">
    <a href=\"{{path(back)}}\">
      <img src=\"/img/grey-l.svg\">
      back
    </a>
  </span>
  <ul>
    {% for tmate in attorneys %}
        {% if  tmate.name == attorney.name %}
          <li class='cur'>{{ tmate.name }}</li>
        {% else %}
          <li><a href=\"{{ tmate.url }}\">{{ tmate.name }}</a></li>
        {% endif %}
    {% endfor %}
  </ul>
</div>
{% endblock %}
", "AppBundle:App:tmate.list.menu.html.twig", "/home/szpaklabs/work/projects/sharovalaw-com/src/AppBundle/Resources/views/App/tmate.list.menu.html.twig");
    }
}
