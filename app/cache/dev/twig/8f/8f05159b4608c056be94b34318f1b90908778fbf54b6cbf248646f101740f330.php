<?php

/* default/next-prev.html.twig */
class __TwigTemplate_f8a291b7cc7dc9befb67a91d14da39e901bd8ecffdbb18a2033bd577279c03d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'nextPrev' => array($this, 'block_nextPrev'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('nextPrev', $context, $blocks);
    }

    public function block_nextPrev($context, array $blocks = array())
    {
        // line 2
        echo "
\t";
        // line 3
        $context["np_params"] = ((($context["queries"] ?? $this->getContext($context, "queries"))) ? (twig_array_merge(($context["np_params"] ?? $this->getContext($context, "np_params")), ($context["queries"] ?? $this->getContext($context, "queries")))) : (($context["np_params"] ?? $this->getContext($context, "np_params"))));
        // line 4
        echo "
\t";
        // line 5
        if ((($context["pages"] ?? $this->getContext($context, "pages")) > 1)) {
            // line 6
            echo "
\t\t\t";
            // line 7
            if ((($context["page"] ?? $this->getContext($context, "page")) == 1)) {
                // line 8
                echo "
\t\t\t\t\t";
                // line 9
                $context["np_params"] = twig_array_merge(($context["np_params"] ?? $this->getContext($context, "np_params")), array("page" => (($context["page"] ?? $this->getContext($context, "page")) + 1)));
                // line 10
                echo "\t\t\t\t\t<link rel=\"next\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["route"] ?? $this->getContext($context, "route")), ($context["np_params"] ?? $this->getContext($context, "np_params"))), "html", null, true);
                echo "\">

\t\t\t";
            }
            // line 13
            echo "
\t\t\t";
            // line 14
            if ((($context["pages"] ?? $this->getContext($context, "pages")) > 2)) {
                // line 15
                echo "
\t\t\t\t\t";
                // line 16
                if (((($context["page"] ?? $this->getContext($context, "page")) != 1) && (($context["page"] ?? $this->getContext($context, "page")) != ($context["pages"] ?? $this->getContext($context, "pages"))))) {
                    // line 17
                    echo "\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
                    // line 18
                    $context["np_params"] = twig_array_merge(($context["np_params"] ?? $this->getContext($context, "np_params")), array("page" => (($context["page"] ?? $this->getContext($context, "page")) - 1)));
                    // line 19
                    echo "\t\t\t\t\t\t\t\t\t<link rel=\"prev\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["route"] ?? $this->getContext($context, "route")), ($context["np_params"] ?? $this->getContext($context, "np_params"))), "html", null, true);
                    echo "\">

\t\t\t\t\t\t\t\t\t";
                    // line 21
                    $context["np_params"] = twig_array_merge(($context["np_params"] ?? $this->getContext($context, "np_params")), array("page" => (($context["page"] ?? $this->getContext($context, "page")) + 1)));
                    // line 22
                    echo "\t\t\t\t\t\t\t\t\t<link rel=\"next\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["route"] ?? $this->getContext($context, "route")), ($context["np_params"] ?? $this->getContext($context, "np_params"))), "html", null, true);
                    echo "\">

\t\t\t\t\t";
                }
                // line 25
                echo "
\t\t\t";
            }
            // line 27
            echo "
\t\t\t";
            // line 28
            if ((($context["page"] ?? $this->getContext($context, "page")) == ($context["pages"] ?? $this->getContext($context, "pages")))) {
                // line 29
                echo "
\t\t\t\t\t";
                // line 30
                $context["np_params"] = twig_array_merge(($context["np_params"] ?? $this->getContext($context, "np_params")), array("page" => (($context["page"] ?? $this->getContext($context, "page")) - 1)));
                // line 31
                echo "\t\t\t\t\t<link rel=\"prev\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["route"] ?? $this->getContext($context, "route")), ($context["np_params"] ?? $this->getContext($context, "np_params"))), "html", null, true);
                echo "\">

\t\t\t";
            }
            // line 34
            echo "
\t";
        }
        // line 36
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/next-prev.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  108 => 36,  104 => 34,  97 => 31,  95 => 30,  92 => 29,  90 => 28,  87 => 27,  83 => 25,  76 => 22,  74 => 21,  68 => 19,  66 => 18,  63 => 17,  61 => 16,  58 => 15,  56 => 14,  53 => 13,  46 => 10,  44 => 9,  41 => 8,  39 => 7,  36 => 6,  34 => 5,  31 => 4,  29 => 3,  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block nextPrev %}

\t{% set np_params = queries ? np_params|merge(queries) : np_params %}

\t{% if (pages > 1) %}

\t\t\t{% if (page == 1) %}

\t\t\t\t\t{% set np_params = np_params|merge({'page': page+1}) %}
\t\t\t\t\t<link rel=\"next\" href=\"{{ path(route, np_params) }}\">

\t\t\t{% endif %}

\t\t\t{% if (pages > 2) %}

\t\t\t\t\t{% if (page != 1 and page != pages) %}
\t\t\t\t\t
\t\t\t\t\t\t\t\t\t{% set np_params = np_params|merge({'page': page-1}) %}
\t\t\t\t\t\t\t\t\t<link rel=\"prev\" href=\"{{ path(route, np_params) }}\">

\t\t\t\t\t\t\t\t\t{% set np_params = np_params|merge({'page': page+1}) %}
\t\t\t\t\t\t\t\t\t<link rel=\"next\" href=\"{{ path(route, np_params) }}\">

\t\t\t\t\t{% endif %}

\t\t\t{% endif %}

\t\t\t{% if (page == pages) %}

\t\t\t\t\t{% set np_params = np_params|merge({'page': page-1}) %}
\t\t\t\t\t<link rel=\"prev\" href=\"{{ path(route, np_params) }}\">

\t\t\t{% endif %}

\t{% endif %}

{% endblock %}
", "default/next-prev.html.twig", "/home/szpaklabs/work/projects/sharovalaw-com/app/Resources/views/default/next-prev.html.twig");
    }
}
