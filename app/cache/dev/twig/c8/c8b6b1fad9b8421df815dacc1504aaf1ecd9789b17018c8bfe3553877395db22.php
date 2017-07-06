<?php

/* AppBundle:Secured:login.html.twig */
class __TwigTemplate_2ede92b45831858597fb0b72e47240a1237948b34758fe00e203c1e63c7c46d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Secured:login.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<section id=\"loginContent\">
    <div class=\"loginForm\">
        <h2>Login please</h2>
        <br />
        ";
        // line 8
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 9
            echo "            <div class=\"error\">Incorrect login or password</div>
        ";
        }
        // line 11
        echo "    
        <form action=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_security_check");
        echo "\" method=\"post\" id=\"login\">
            <div class=\"decore\">
                <label for=\"username\">Login:</label>
                <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />
            </div>
            <div class=\"clear\"></div>
            <div class=\"decore\">
                <label for=\"password\">Password:</label>
                <input type=\"password\" id=\"password\" name=\"_password\" />
            </div>
            <div class=\"clear\"></div>
            <input type=\"submit\" class=\"submit\" value=\"Submit\" />
            <div class=\"clear\"></div>
        </form>
    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "AppBundle:Secured:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 15,  46 => 12,  43 => 11,  39 => 9,  37 => 8,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'AppBundle::layout.html.twig' %}

{% block content %}
<section id=\"loginContent\">
    <div class=\"loginForm\">
        <h2>Login please</h2>
        <br />
        {% if error %}
            <div class=\"error\">Incorrect login or password</div>
        {% endif %}
    
        <form action=\"{{ path(\"_security_check\") }}\" method=\"post\" id=\"login\">
            <div class=\"decore\">
                <label for=\"username\">Login:</label>
                <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" />
            </div>
            <div class=\"clear\"></div>
            <div class=\"decore\">
                <label for=\"password\">Password:</label>
                <input type=\"password\" id=\"password\" name=\"_password\" />
            </div>
            <div class=\"clear\"></div>
            <input type=\"submit\" class=\"submit\" value=\"Submit\" />
            <div class=\"clear\"></div>
        </form>
    </div>
</section>
{% endblock %}", "AppBundle:Secured:login.html.twig", "/home/szpaklabs/work/projects/sharovalaw-com/src/AppBundle/Resources/views/Secured/login.html.twig");
    }
}
