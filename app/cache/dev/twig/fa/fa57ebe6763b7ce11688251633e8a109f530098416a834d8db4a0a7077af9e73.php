<?php

/* PluginsPracticAreaBundle:PracticArea:additional_description.html.twig */
class __TwigTemplate_6529f39cdeb697e91ced076d9dd00917550f39ce737232b06994844c1689a97f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'additionalDescription' => array($this, 'block_additionalDescription'),
            'barAssociationsBlock' => array($this, 'block_barAssociationsBlock'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('additionalDescription', $context, $blocks);
    }

    public function block_additionalDescription($context, array $blocks = array())
    {
        // line 2
        echo "    <div class=\"clear\"></div>
    ";
        // line 3
        $this->displayBlock('barAssociationsBlock', $context, $blocks);
    }

    public function block_barAssociationsBlock($context, array $blocks = array())
    {
        // line 4
        echo "    <section class=\"bar-association-section short\">
        ";
        // line 5
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:App:barAssociationBlock"), array());
        // line 6
        echo "    </section>
    ";
    }

    public function getTemplateName()
    {
        return "PluginsPracticAreaBundle:PracticArea:additional_description.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  41 => 6,  39 => 5,  36 => 4,  30 => 3,  27 => 2,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block additionalDescription %}
    <div class=\"clear\"></div>
    {% block barAssociationsBlock %}
    <section class=\"bar-association-section short\">
        {% render controller(\"AppBundle:App:barAssociationBlock\") %}
    </section>
    {% endblock %}
{% endblock %}
", "PluginsPracticAreaBundle:PracticArea:additional_description.html.twig", "/home/szpaklabs/work/projects/sharovalaw-com/src/Plugins/PracticAreaBundle/Resources/views/PracticArea/additional_description.html.twig");
    }
}
