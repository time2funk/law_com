<?php

/* AppBundle:Amp:amp_link_block.html.twig */
class __TwigTemplate_9074a00994f6be88922f26c30e72dfed56b31b5d7fae172e62223b9f769e7c2d extends Twig_Template
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
        if (($context["name"] ?? $this->getContext($context, "name"))) {
            // line 2
            echo "    <link rel=\"amphtml\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl(($context["name"] ?? $this->getContext($context, "name")), ($context["params"] ?? $this->getContext($context, "params"))), "html", null, true);
            echo "\">
";
        }
    }

    public function getTemplateName()
    {
        return "AppBundle:Amp:amp_link_block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if name %}
    <link rel=\"amphtml\" href=\"{{ url(name, params) }}\">
{% endif %}
", "AppBundle:Amp:amp_link_block.html.twig", "/home/szpaklabs/work/projects/sharovalaw-com/src/AppBundle/Resources/views/Amp/amp_link_block.html.twig");
    }
}
