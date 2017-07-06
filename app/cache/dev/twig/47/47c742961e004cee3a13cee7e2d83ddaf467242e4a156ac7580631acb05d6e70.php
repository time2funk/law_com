<?php

/* AppBundle:App:bar_association_block.html.twig */
class __TwigTemplate_93f6b29ada75865ed9e8042725d0fd108fc9037893bee715900f731ab650c3a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'contactSection' => array($this, 'block_contactSection'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('contactSection', $context, $blocks);
    }

    public function block_contactSection($context, array $blocks = array())
    {
        // line 2
        echo "  ";
        echo $this->getAttribute(($context["barAssociationBlock"] ?? $this->getContext($context, "barAssociationBlock")), "content", array());
        echo "
";
    }

    public function getTemplateName()
    {
        return "AppBundle:App:bar_association_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block contactSection %}
  {{ barAssociationBlock.content | raw }}
{% endblock %}
", "AppBundle:App:bar_association_block.html.twig", "/home/szpaklabs/work/projects/sharovalaw-com/src/AppBundle/Resources/views/App/bar_association_block.html.twig");
    }
}
