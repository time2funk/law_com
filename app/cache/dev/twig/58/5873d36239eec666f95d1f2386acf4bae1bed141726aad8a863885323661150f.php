<?php

/* SonataAdminBundle:Core:add_block.html.twig */
class __TwigTemplate_f47823865acc6e5610ace99b3ecff0a4ba2c1520b13a496390407e4c0e7a800e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'user_block' => array($this, 'block_user_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('user_block', $context, $blocks);
    }

    public function block_user_block($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["items_per_column"] = $this->getAttribute(($context["admin_pool"] ?? $this->getContext($context, "admin_pool")), "getOption", array(0 => "dropdown_number_groups_per_colums"), "method");
        // line 3
        echo "    ";
        $context["groups"] = array();
        // line 4
        echo "
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["admin_pool"] ?? $this->getContext($context, "admin_pool")), "dashboardgroups", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 6
            echo "        ";
            $context["display_group"] = false;
            // line 7
            echo "
        ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "items", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                if ((($context["display_group"] ?? $this->getContext($context, "display_group")) == false)) {
                    // line 9
                    echo "            ";
                    if (($this->getAttribute($context["admin"], "hasRoute", array(0 => "create"), "method") && $this->getAttribute($context["admin"], "isGranted", array(0 => "CREATE"), "method"))) {
                        // line 10
                        echo "                ";
                        $context["display_group"] = true;
                        // line 11
                        echo "                ";
                        $context["groups"] = twig_array_merge(array(0 => $context["group"]), ($context["groups"] ?? $this->getContext($context, "groups")));
                        // line 12
                        echo "            ";
                    }
                    // line 13
                    echo "        ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "
    ";
        // line 16
        $context["column_count"] = twig_round((twig_length_filter($this->env, ($context["groups"] ?? $this->getContext($context, "groups"))) / ($context["items_per_column"] ?? $this->getContext($context, "items_per_column"))), 0, "ceil");
        // line 17
        echo "
    <div class=\"dropdown-menu multi-column dropdown-add\"
        ";
        // line 19
        if ((($context["column_count"] ?? $this->getContext($context, "column_count")) > 1)) {
            echo "style=\"width: ";
            echo twig_escape_filter($this->env, (($context["column_count"] ?? $this->getContext($context, "column_count")) * 140), "html", null, true);
            echo "px;\"";
        }
        // line 20
        echo "            >
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, ($context["groups"] ?? $this->getContext($context, "groups"))));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 22
            echo "            ";
            $context["display"] = (twig_test_empty($this->getAttribute($context["group"], "roles", array())) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SONATA_ADMIN"));
            // line 23
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "roles", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                if ( !($context["display"] ?? $this->getContext($context, "display"))) {
                    // line 24
                    echo "                ";
                    $context["display"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted($context["role"]);
                    // line 25
                    echo "            ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "
            ";
            // line 27
            if (($context["display"] ?? $this->getContext($context, "display"))) {
                // line 28
                echo "
                ";
                // line 29
                if (($this->getAttribute($context["loop"], "first", array()) || (($this->getAttribute($context["loop"], "index0", array()) % ($context["items_per_column"] ?? $this->getContext($context, "items_per_column"))) == 0))) {
                    // line 30
                    echo "                    ";
                    if ($this->getAttribute($context["loop"], "first", array())) {
                        // line 31
                        echo "                        <div class=\"container-fluid\">
                            <div class=\"row\">
                    ";
                    } else {
                        // line 34
                        echo "                        </ul>
                    ";
                    }
                    // line 36
                    echo "
                    <ul class=\"dropdown-menu";
                    // line 37
                    if ((($context["column_count"] ?? $this->getContext($context, "column_count")) > 1)) {
                        echo " col-md-";
                        echo twig_escape_filter($this->env, twig_round((12 / ($context["column_count"] ?? $this->getContext($context, "column_count")))), "html", null, true);
                    }
                    echo "\">
                ";
                }
                // line 39
                echo "
                ";
                // line 40
                if ((($this->getAttribute($context["loop"], "index0", array()) % ($context["items_per_column"] ?? $this->getContext($context, "items_per_column"))) != 0)) {
                    // line 41
                    echo "                    <li role=\"presentation\" class=\"divider\"></li>
                ";
                }
                // line 43
                echo "                <li role=\"presentation\" class=\"dropdown-header\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["group"], "label", array()), array(), $this->getAttribute($context["group"], "label_catalogue", array())), "html", null, true);
                echo "</li>

                ";
                // line 45
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "items", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                    // line 46
                    echo "                    ";
                    if (($this->getAttribute($context["admin"], "hasRoute", array(0 => "create"), "method") && $this->getAttribute($context["admin"], "isGranted", array(0 => "CREATE"), "method"))) {
                        // line 47
                        echo "                        <li role=\"presentation\">
                            <a role=\"menuitem\" tabindex=\"-1\" href=\"";
                        // line 48
                        echo twig_escape_filter($this->env, $this->getAttribute($context["admin"], "generateUrl", array(0 => "create"), "method"), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["admin"], "label", array()), array(), $this->getAttribute($context["admin"], "translationdomain", array())), "html", null, true);
                        echo "</a>
                        </li>
                    ";
                    }
                    // line 51
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 52
                echo "
                ";
                // line 53
                if ($this->getAttribute($context["loop"], "last", array())) {
                    // line 54
                    echo "                            </ul>
                        </div>
                    </div>
                ";
                }
                // line 58
                echo "
            ";
            }
            // line 60
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:add_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  230 => 61,  216 => 60,  212 => 58,  206 => 54,  204 => 53,  201 => 52,  195 => 51,  187 => 48,  184 => 47,  181 => 46,  177 => 45,  171 => 43,  167 => 41,  165 => 40,  162 => 39,  154 => 37,  151 => 36,  147 => 34,  142 => 31,  139 => 30,  137 => 29,  134 => 28,  132 => 27,  129 => 26,  122 => 25,  119 => 24,  113 => 23,  110 => 22,  93 => 21,  90 => 20,  84 => 19,  80 => 17,  78 => 16,  75 => 15,  69 => 14,  62 => 13,  59 => 12,  56 => 11,  53 => 10,  50 => 9,  45 => 8,  42 => 7,  39 => 6,  35 => 5,  32 => 4,  29 => 3,  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block user_block %}
    {% set items_per_column = admin_pool.getOption('dropdown_number_groups_per_colums') %}
    {% set groups = [] %}

    {% for group in admin_pool.dashboardgroups %}
        {% set display_group = false %}

        {% for admin in group.items if display_group == false %}
            {% if admin.hasRoute('create') and admin.isGranted('CREATE') %}
                {% set display_group = true %}
                {% set groups = [group]|merge(groups) %}
            {% endif %}
        {% endfor %}
    {% endfor %}

    {% set column_count = (groups|length / items_per_column)|round(0, 'ceil') %}

    <div class=\"dropdown-menu multi-column dropdown-add\"
        {% if column_count > 1 %}style=\"width: {{ column_count*140 }}px;\"{% endif %}
            >
        {% for group in groups|reverse %}
            {% set display = (group.roles is empty or is_granted('ROLE_SONATA_ADMIN') ) %}
            {% for role in group.roles if not display %}
                {% set display = is_granted(role) %}
            {% endfor %}

            {% if display %}

                {% if loop.first or loop.index0 % items_per_column == 0 %}
                    {% if loop.first %}
                        <div class=\"container-fluid\">
                            <div class=\"row\">
                    {% else %}
                        </ul>
                    {% endif %}

                    <ul class=\"dropdown-menu{% if column_count > 1 %} col-md-{{ (12/column_count)|round }}{% endif %}\">
                {% endif %}

                {% if loop.index0 % items_per_column != 0 %}
                    <li role=\"presentation\" class=\"divider\"></li>
                {% endif %}
                <li role=\"presentation\" class=\"dropdown-header\">{{ group.label|trans({}, group.label_catalogue) }}</li>

                {% for admin in group.items %}
                    {% if admin.hasRoute('create') and admin.isGranted('CREATE') %}
                        <li role=\"presentation\">
                            <a role=\"menuitem\" tabindex=\"-1\" href=\"{{ admin.generateUrl('create')}}\">{{ admin.label|trans({}, admin.translationdomain) }}</a>
                        </li>
                    {% endif %}
                {% endfor %}

                {% if loop.last %}
                            </ul>
                        </div>
                    </div>
                {% endif %}

            {% endif %}
        {% endfor %}
    </div>
{% endblock %}
", "SonataAdminBundle:Core:add_block.html.twig", "/home/szpaklabs/work/projects/sharovalaw-com/vendor/sonata-project/admin-bundle/Resources/views/Core/add_block.html.twig");
    }
}
