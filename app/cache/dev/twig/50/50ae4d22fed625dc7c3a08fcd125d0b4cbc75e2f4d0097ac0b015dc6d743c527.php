<?php

/* AppBundle:Contact:contact_block_form.html.twig */
class __TwigTemplate_6659567990911aa7d4e9b55949662b4feecd9ec81c7c309e2b9b591f8fdc780a extends Twig_Template
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
        echo "\t\t<div id=\"contactus\">
\t\t\t<h2>Contact us now</h2>
\t\t\t<p>Leave your message in the form below</p>
\t\t\t";
        // line 5
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Contact:form"), array());
        // line 6
        echo "\t\t</div>
";
    }

    public function getTemplateName()
    {
        return "AppBundle:Contact:contact_block_form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  33 => 6,  31 => 5,  26 => 2,  20 => 1,);
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
\t\t<div id=\"contactus\">
\t\t\t<h2>Contact us now</h2>
\t\t\t<p>Leave your message in the form below</p>
\t\t\t{% render controller(\"AppBundle:Contact:form\") %}
\t\t</div>
{% endblock %}
", "AppBundle:Contact:contact_block_form.html.twig", "/home/szpaklabs/work/projects/sharovalaw-com/src/AppBundle/Resources/views/Contact/contact_block_form.html.twig");
    }
}
