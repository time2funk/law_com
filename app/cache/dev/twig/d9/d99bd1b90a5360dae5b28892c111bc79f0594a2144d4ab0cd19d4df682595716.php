<?php

/* AppBundle:Contact:form.html.twig */
class __TwigTemplate_849626c081584bba7cc0dff3c5d10496fa6b2a81248ffece6083d2ddd54e4078 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'contactForm' => array($this, 'block_contactForm'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('contactForm', $context, $blocks);
    }

    public function block_contactForm($context, array $blocks = array())
    {
        // line 2
        echo "\t\t<form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_contact_send");
        echo "\" method=\"post\" id=\"contact-form\" novalidate>
\t\t\t<div class=\"form-data\">
\t\t\t\t<lable class=\"action\">name</lable>
\t\t\t\t";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "name", array()), 'widget', array("attr" => array("placeholder" => " ")));
        echo "
\t\t\t</div>
\t\t\t<div class=\"form-data\">
\t\t\t\t<lable class=\"action\">email</lable>
\t\t\t\t";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("placeholder" => " ", "type" => "email")));
        echo "
\t\t\t</div>
\t\t\t<div class=\"form-data\">
\t\t\t\t<lable class=\"action\">phone</lable>
\t\t\t\t";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "phone", array()), 'widget', array("attr" => array("placeholder" => " ", "type" => "tel")));
        echo "
\t\t\t</div>
\t\t\t<div class=\"form-data\">
\t\t\t\t<lable>message</lable>
\t\t\t\t";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "message", array()), 'widget', array("attr" => array("placeholder" => "Tell Us About Your Case")));
        echo "
\t\t\t</div>

\t\t\t<button type=\"submit\" class=\"pbtn btn btn-primary\">contact us</button>
\t\t</form>
<script>
\$(document).ready(function() {
    Form.init({
        target: \"#";
        // line 25
        echo twig_escape_filter($this->env, ($context["formName"] ?? $this->getContext($context, "formName")), "html", null, true);
        echo "-form\",
        validation: {
            rules: {
                \"";
        // line 28
        echo twig_escape_filter($this->env, ($context["formName"] ?? $this->getContext($context, "formName")), "html", null, true);
        echo "[name]\": {
                    required: true,
                    minlength: 3,
                    maxlength: 200
                },
                \"";
        // line 33
        echo twig_escape_filter($this->env, ($context["formName"] ?? $this->getContext($context, "formName")), "html", null, true);
        echo "[email]\": {
                    required: true,
                    minlength: 3,
                    maxlength: 255
                },
                \"";
        // line 38
        echo twig_escape_filter($this->env, ($context["formName"] ?? $this->getContext($context, "formName")), "html", null, true);
        echo "[phone]\": {
                    required: true,
                    phone: true
                },
                \"";
        // line 42
        echo twig_escape_filter($this->env, ($context["formName"] ?? $this->getContext($context, "formName")), "html", null, true);
        echo "[message]\": {
                    required: true,
                }
            },
            messages: {
                \"";
        // line 47
        echo twig_escape_filter($this->env, ($context["formName"] ?? $this->getContext($context, "formName")), "html", null, true);
        echo "[name]\": {
                    required: \"Name is required.\",
                    minlength: \"Name must be at least 3 characters.\",
                    maxlength: \"Name must be no more than 200 characters.\",
                },
                \"";
        // line 52
        echo twig_escape_filter($this->env, ($context["formName"] ?? $this->getContext($context, "formName")), "html", null, true);
        echo "[email]\": {
                    required: \"Email is required.\",
                    maxlength: \"Email must be no more than 255 characters.\",
                },
                \"";
        // line 56
        echo twig_escape_filter($this->env, ($context["formName"] ?? $this->getContext($context, "formName")), "html", null, true);
        echo "[phone]\": {
                    required: \"Phone is required.\",
                }
            }
        }
    });
});
</script>
";
    }

    public function getTemplateName()
    {
        return "AppBundle:Contact:form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  117 => 56,  110 => 52,  102 => 47,  94 => 42,  87 => 38,  79 => 33,  71 => 28,  65 => 25,  54 => 17,  47 => 13,  40 => 9,  33 => 5,  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block contactForm %}
\t\t<form action=\"{{ path('app_contact_send') }}\" method=\"post\" id=\"contact-form\" novalidate>
\t\t\t<div class=\"form-data\">
\t\t\t\t<lable class=\"action\">name</lable>
\t\t\t\t{{ form_widget(form.name, {'attr': {'placeholder': ' '}}) }}
\t\t\t</div>
\t\t\t<div class=\"form-data\">
\t\t\t\t<lable class=\"action\">email</lable>
\t\t\t\t{{ form_widget(form.email, {'attr': {'placeholder': ' ', 'type': 'email'}}) }}
\t\t\t</div>
\t\t\t<div class=\"form-data\">
\t\t\t\t<lable class=\"action\">phone</lable>
\t\t\t\t{{ form_widget(form.phone, {'attr': {'placeholder': ' ', 'type': 'tel'}}) }}
\t\t\t</div>
\t\t\t<div class=\"form-data\">
\t\t\t\t<lable>message</lable>
\t\t\t\t{{ form_widget(form.message, {'attr': {'placeholder': 'Tell Us About Your Case'}}) }}
\t\t\t</div>

\t\t\t<button type=\"submit\" class=\"pbtn btn btn-primary\">contact us</button>
\t\t</form>
<script>
\$(document).ready(function() {
    Form.init({
        target: \"#{{ formName }}-form\",
        validation: {
            rules: {
                \"{{ formName }}[name]\": {
                    required: true,
                    minlength: 3,
                    maxlength: 200
                },
                \"{{ formName }}[email]\": {
                    required: true,
                    minlength: 3,
                    maxlength: 255
                },
                \"{{ formName }}[phone]\": {
                    required: true,
                    phone: true
                },
                \"{{ formName }}[message]\": {
                    required: true,
                }
            },
            messages: {
                \"{{ formName }}[name]\": {
                    required: \"Name is required.\",
                    minlength: \"Name must be at least 3 characters.\",
                    maxlength: \"Name must be no more than 200 characters.\",
                },
                \"{{ formName }}[email]\": {
                    required: \"Email is required.\",
                    maxlength: \"Email must be no more than 255 characters.\",
                },
                \"{{ formName }}[phone]\": {
                    required: \"Phone is required.\",
                }
            }
        }
    });
});
</script>
{% endblock %}
", "AppBundle:Contact:form.html.twig", "/home/szpaklabs/work/projects/sharovalaw-com/src/AppBundle/Resources/views/Contact/form.html.twig");
    }
}
