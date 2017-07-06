<?php

/* default/social_block.html.twig */
class __TwigTemplate_b39eb8e3f10df42a2c370488113a80fd1aabc3fd777cf1b7f737d614a3fa9dac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'socialBlock' => array($this, 'block_socialBlock'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('socialBlock', $context, $blocks);
    }

    public function block_socialBlock($context, array $blocks = array())
    {
        // line 2
        echo "<div class=\"soc\">
  <ul>
    <li><a href=\"\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
    <li><a href=\"\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
    <li><a href=\"\"><i class=\"fa fa-linkedin-square\" aria-hidden=\"true\"></i></a></li>
  </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "default/social_block.html.twig";
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
        return new Twig_Source("{% block socialBlock %}
<div class=\"soc\">
  <ul>
    <li><a href=\"\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
    <li><a href=\"\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
    <li><a href=\"\"><i class=\"fa fa-linkedin-square\" aria-hidden=\"true\"></i></a></li>
  </ul>
</div>
{% endblock %}
", "default/social_block.html.twig", "/home/szpaklabs/work/projects/sharovalaw-com/app/Resources/views/default/social_block.html.twig");
    }
}
