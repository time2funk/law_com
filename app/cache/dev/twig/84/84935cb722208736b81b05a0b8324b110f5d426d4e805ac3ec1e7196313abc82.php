<?php

/* default/footer.html.twig */
class __TwigTemplate_1666a9188fcb90d9b2681c43fd2798791bf33393f40f5f423b07ba30cd91c890 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'footerContent' => array($this, 'block_footerContent'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('footerContent', $context, $blocks);
    }

    public function block_footerContent($context, array $blocks = array())
    {
        // line 2
        echo "    <footer>
\t\t\t\t";
        // line 3
        $this->loadTemplate("default/uptotop.html.twig", "default/footer.html.twig", 3)->display($context);
        // line 4
        echo "\t\t    <span itemprop=\"address\" itemscope itemtype=\"http://schema.org/PostalAddress\" class=\"address\">
            <div class=\"txt-cent container\">
\t\t\t\t\t\t\t\t";
        // line 6
        if (($context["home"] ?? $this->getContext($context, "home"))) {
            // line 7
            echo "                \t";
            $this->loadTemplate("default/hidecontent.html.twig", "default/footer.html.twig", 7)->display($context);
            // line 8
            echo "\t\t\t\t\t\t\t\t";
        }
        // line 9
        echo "
\t\t\t\t\t\t\t<div class=\"row\">
                <div class=\"side a\">
                    <img id='big' src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("/img/logo_footer.svg"), "html", null, true);
        echo "\" alt=\"Sharova Law Firm\">
\t\t\t\t\t\t\t\t\t\t<img id='wide' src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("/img/logo.png"), "html", null, true);
        echo "\" alt=\"Sharova Law Firm\">
                </div>
                <div class=\"side b\">
                    <div class=\"pcol a\">
                        <h4>
                            <a href=\"index.html\">home</a>
                        </h4>
                        <ul>
                            <li>
                                <a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_about_us");
        echo "\" title=\"about us\">about us</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("plugins_practic_area_homepage");
        echo "\" title=\"practic areas\">Practice areas</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("plugins_blog_homepage");
        echo "\" title=\"blog\">blog</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("plugins_news_homepage");
        echo "\" title=\"news & views\">new & views</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_contact");
        echo "\" title=\"contact us\">contact us</a>
                            </li>
                        </ul>
                    </div>
                    <div class=\"pcol b\">
                        <h4>contact us</h4>
                        <ul>
                            <li>phone:</li>
                            <li>";
        // line 42
        echo twig_escape_filter($this->env, ($context["contact_phone"] ?? $this->getContext($context, "contact_phone")), "html", null, true);
        echo "</li>
                            <li>Fax:</li>
                            <li>";
        // line 44
        echo twig_escape_filter($this->env, ($context["contact_fax"] ?? $this->getContext($context, "contact_fax")), "html", null, true);
        echo "</li>
                        </ul>
                    </div>
                    <div class=\"pcol c\">
                        <h4>Info</h4>
                        <ul>
                            <li itemprop=\"streetAddress\">";
        // line 50
        echo twig_escape_filter($this->env, ($context["contact_address_part1"] ?? $this->getContext($context, "contact_address_part1")), "html", null, true);
        echo "</li>
                            <li>";
        // line 51
        echo twig_escape_filter($this->env, ($context["contact_address_part2"] ?? $this->getContext($context, "contact_address_part2")), "html", null, true);
        echo "</li>
                            <li>
                                <span itemprop=\"postalCode\">";
        // line 53
        echo ($context["contact_zip1"] ?? $this->getContext($context, "contact_zip1"));
        echo "</span>
                                <span itemprop=\"addressLocality\">";
        // line 54
        echo ($context["contact_address_city"] ?? $this->getContext($context, "contact_address_city"));
        echo "</span>
                            </li>
                            <li>
                                <a class=\"mail\" href=\"mailto:";
        // line 57
        echo twig_escape_filter($this->env, ($context["contact_email1"] ?? $this->getContext($context, "contact_email1")), "html", null, true);
        echo "?subject=From Web Page\">
                                    <span itemprop=\"email\">";
        // line 58
        echo twig_escape_filter($this->env, ($context["contact_email1"] ?? $this->getContext($context, "contact_email1")), "html", null, true);
        echo "</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class=\"pcol d\">
                        <h4>follow us</h4>
                        <ul>
                            <li>
                                <a href=\"\">
                                    <i class=\"fa fa-facebook\" aria-hidden=\"true\"></i>
                                </a>
                            </li>
                            <li>
                                <a href=\"\">
                                    <i class=\"fa fa-twitter\" aria-hidden=\"true\"></i>
                                </a>
                            </li>
                            <li>
                                <a href=\"\">
                                    <i class=\"fa fa-linkedin-square\" aria-hidden=\"true\"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
\t\t\t\t\t\t\t</div>
            </div>
            <div class=\"bot\">
                <p class=\"ptext\">
                    <span itemprop=\"name\">";
        // line 88
        echo ($context["contact_office"] ?? $this->getContext($context, "contact_office"));
        echo "</span>
                    © 2017 - Practice in
                    <span itemprop=\"addressRegion\">";
        // line 90
        echo ($context["contact_state1"] ?? $this->getContext($context, "contact_state1"));
        echo "</span>
                    and New Jersey
                </p>
\t\t\t\t\t\t\t\t<p class=\"starttext\">
\t\t\t\t\t\t\t\t\t* The information on this website is for general information purposes only. Nothing on this site should be taken as legal advice for any individual case or situation.<br />
\t\t\t\t\t\t\t\t\tThis information is not intended to create, and receipt or viewing does not constitute, an attorney-client relationship.
                </p>
                <meta itemprop=\"url\" content=\"https://www.sharovalaw.com/\">
            </div>
\t\t    </span>
\t\t</footer>
";
    }

    public function getTemplateName()
    {
        return "default/footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  174 => 90,  169 => 88,  136 => 58,  132 => 57,  126 => 54,  122 => 53,  117 => 51,  113 => 50,  104 => 44,  99 => 42,  88 => 34,  82 => 31,  76 => 28,  70 => 25,  64 => 22,  52 => 13,  48 => 12,  43 => 9,  40 => 8,  37 => 7,  35 => 6,  31 => 4,  29 => 3,  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block footerContent %}
    <footer>
\t\t\t\t{% include \"default/uptotop.html.twig\" %}
\t\t    <span itemprop=\"address\" itemscope itemtype=\"http://schema.org/PostalAddress\" class=\"address\">
            <div class=\"txt-cent container\">
\t\t\t\t\t\t\t\t{% if home %}
                \t{% include \"default/hidecontent.html.twig\" %}
\t\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t<div class=\"row\">
                <div class=\"side a\">
                    <img id='big' src=\"{{ asset(\"/img/logo_footer.svg\") }}\" alt=\"Sharova Law Firm\">
\t\t\t\t\t\t\t\t\t\t<img id='wide' src=\"{{ asset(\"/img/logo.png\") }}\" alt=\"Sharova Law Firm\">
                </div>
                <div class=\"side b\">
                    <div class=\"pcol a\">
                        <h4>
                            <a href=\"index.html\">home</a>
                        </h4>
                        <ul>
                            <li>
                                <a href=\"{{ path('app_about_us') }}\" title=\"about us\">about us</a>
                            </li>
                            <li>
                                <a href=\"{{ path('plugins_practic_area_homepage') }}\" title=\"practic areas\">Practice areas</a>
                            </li>
                            <li>
                                <a href=\"{{ path('plugins_blog_homepage') }}\" title=\"blog\">blog</a>
                            </li>
                            <li>
                                <a href=\"{{ path('plugins_news_homepage') }}\" title=\"news & views\">new & views</a>
                            </li>
                            <li>
                                <a href=\"{{ path('app_contact') }}\" title=\"contact us\">contact us</a>
                            </li>
                        </ul>
                    </div>
                    <div class=\"pcol b\">
                        <h4>contact us</h4>
                        <ul>
                            <li>phone:</li>
                            <li>{{ contact_phone }}</li>
                            <li>Fax:</li>
                            <li>{{ contact_fax }}</li>
                        </ul>
                    </div>
                    <div class=\"pcol c\">
                        <h4>Info</h4>
                        <ul>
                            <li itemprop=\"streetAddress\">{{ contact_address_part1 }}</li>
                            <li>{{ contact_address_part2 }}</li>
                            <li>
                                <span itemprop=\"postalCode\">{{ contact_zip1 | raw}}</span>
                                <span itemprop=\"addressLocality\">{{ contact_address_city | raw}}</span>
                            </li>
                            <li>
                                <a class=\"mail\" href=\"mailto:{{ contact_email1 }}?subject=From Web Page\">
                                    <span itemprop=\"email\">{{ contact_email1 }}</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class=\"pcol d\">
                        <h4>follow us</h4>
                        <ul>
                            <li>
                                <a href=\"\">
                                    <i class=\"fa fa-facebook\" aria-hidden=\"true\"></i>
                                </a>
                            </li>
                            <li>
                                <a href=\"\">
                                    <i class=\"fa fa-twitter\" aria-hidden=\"true\"></i>
                                </a>
                            </li>
                            <li>
                                <a href=\"\">
                                    <i class=\"fa fa-linkedin-square\" aria-hidden=\"true\"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
\t\t\t\t\t\t\t</div>
            </div>
            <div class=\"bot\">
                <p class=\"ptext\">
                    <span itemprop=\"name\">{{ contact_office | raw }}</span>
                    © 2017 - Practice in
                    <span itemprop=\"addressRegion\">{{ contact_state1 | raw}}</span>
                    and New Jersey
                </p>
\t\t\t\t\t\t\t\t<p class=\"starttext\">
\t\t\t\t\t\t\t\t\t* The information on this website is for general information purposes only. Nothing on this site should be taken as legal advice for any individual case or situation.<br />
\t\t\t\t\t\t\t\t\tThis information is not intended to create, and receipt or viewing does not constitute, an attorney-client relationship.
                </p>
                <meta itemprop=\"url\" content=\"https://www.sharovalaw.com/\">
            </div>
\t\t    </span>
\t\t</footer>
{% endblock %}
", "default/footer.html.twig", "/home/szpaklabs/work/projects/sharovalaw-com/app/Resources/views/default/footer.html.twig");
    }
}
