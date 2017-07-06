<?php

/* AppBundle:App:attorney_view.html.twig */
class __TwigTemplate_9498d6c2169bb5c691b4c115f75424726a00c7a2365eeb9e583acb767c9bbf2d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:App:attorney_view.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'meta_keywords' => array($this, 'block_meta_keywords'),
            'meta_description' => array($this, 'block_meta_description'),
            'og_title' => array($this, 'block_og_title'),
            'og_descr' => array($this, 'block_og_descr'),
            'last_updated_block' => array($this, 'block_last_updated_block'),
            'bodyId' => array($this, 'block_bodyId'),
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
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["page"] ?? $this->getContext($context, "page")), "metatitle", array())) ? ($this->getAttribute(($context["page"] ?? $this->getContext($context, "page")), "metatitle", array())) : ($this->renderParentBlock("title", $context, $blocks))), "html", null, true);
    }

    // line 4
    public function block_meta_keywords($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["page"] ?? $this->getContext($context, "page")), "metakeywords", array())) ? ($this->getAttribute(($context["page"] ?? $this->getContext($context, "page")), "metakeywords", array())) : ($this->renderParentBlock("meta_keywords", $context, $blocks))), "html", null, true);
    }

    // line 5
    public function block_meta_description($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["page"] ?? $this->getContext($context, "page")), "metadescription", array())) ? ($this->getAttribute(($context["page"] ?? $this->getContext($context, "page")), "metadescription", array())) : ($this->renderParentBlock("meta_description", $context, $blocks))), "html", null, true);
    }

    // line 6
    public function block_og_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["page"] ?? $this->getContext($context, "page")), "metatitle", array())) ? ($this->getAttribute(($context["page"] ?? $this->getContext($context, "page")), "metatitle", array())) : ($this->renderParentBlock("og_title", $context, $blocks))), "html", null, true);
    }

    // line 7
    public function block_og_descr($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["page"] ?? $this->getContext($context, "page")), "metadescription", array())) ? ($this->getAttribute(($context["page"] ?? $this->getContext($context, "page")), "metadescription", array())) : ($this->renderParentBlock("og_descr", $context, $blocks))), "html", null, true);
    }

    // line 8
    public function block_last_updated_block($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? $this->getContext($context, "page")), "updatedAtDatetime", array()), "html", null, true);
    }

    // line 10
    public function block_bodyId($context, array $blocks = array())
    {
        echo "about";
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        // line 13
        $this->loadTemplate("AppBundle:App:tmate.list.menu.html.twig", "AppBundle:App:attorney_view.html.twig", 13)->display(array_merge($context, array("back" => "app_about_us")));
        // line 14
        echo "
<wrapper>
  <section id=\"personal-info\">
    <div class=\"container\">
      <div class=\"side a\">
        <div id=\"persona-front\">
          <img src=\"/img/persona/persona.png\"  alt=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["attorney"] ?? $this->getContext($context, "attorney")), "name", array()), "html", null, true);
        echo "\">
          ";
        // line 24
        echo "        </div>
        <div class=\"statistic\">
          <ul>
            <li>
              <span>233</span>
              <h5>Completed Casess</h5>
            </li>
            <li>
              <span>33</span>
              <h5>Years of practice</h5>
            </li>
            <li>
              <span>97%</span>
              <h5>wining rate</h5>
            </li>
          </ul>
        </div>
      </div>
      <div class=\"side b\">

  \t\t\t";
        // line 44
        $this->loadTemplate("default/breadcrumbs.html.twig", "AppBundle:App:attorney_view.html.twig", 44)->display(array_merge($context, array("elements" => array(0 => array("url" => "app_about_us", "name" => "About us")), "currentPage" => $this->getAttribute(($context["attorney"] ?? $this->getContext($context, "attorney")), "name", array()), "home" => false)));
        // line 45
        echo "
        <h2>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute(($context["attorney"] ?? $this->getContext($context, "attorney")), "name", array()), "html", null, true);
        echo "</h2>
        <h4>type something</h4>

        ";
        // line 49
        $this->loadTemplate("default/social_block.html.twig", "AppBundle:App:attorney_view.html.twig", 49)->display($context);
        // line 50
        echo "        ";
        echo $this->getAttribute(($context["attorney"] ?? $this->getContext($context, "attorney")), "description", array());
        echo "

      </div>
    </div>
  </section>

  <section id=\"team-show\">
    <div class=\"container\">
      <div class=\"_text\">
        <h2>our team</h2>
      </div>
      <!-- <div class=\"pslider\">
        <ul class='slides a'>
          <li class='cur'>

          </li>
          <li>

          </li>
        </ul>
        <div class=\"cntrls noselect\">
          <a href=\"javascript:void(0);\"><div class=\"prev cntrl\"></div></a>
          <a href=\"javascript:void(0);\"><div class=\"next cntrl\"></div></a>
        </div>
      </div> -->

      <ul class='team'>
        ";
        // line 112
        echo "        <li>
          <a href=\"#\"><img src=\"/img/persona/per-w.png\"></a>
          <div class=\"block\">
            <h3>Nettie Norton</h3>
            <div class=\"info-block\">
              <h4>Type something</h4>
              <p>
                People like a “special” price or exclusive offer directed
              </p>
            </div>
            <div class=\"stat-block\">
              <h4><a href=\"\">Click to discover</a></h4>
              <div class=\"statistic\">
                <ul>
                  <li>
                    <span>233</span>
                    <h5>Completed Casess</h5>
                  </li>
                  <li>
                    <span>33</span>
                    <h5>Years of practice</h5>
                  </li>
                  <li>
                    <span>97%</span>
                    <h5>wining rate</h5>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </li>
        <li>
          <a href=\"#\"><img src=\"/img/persona/per-m.png\"></a>
          <div class=\"block\">
            <h3>Henry Harper</h3>
            <div class=\"info-block\">
              <h4>Type something</h4>
              <p>
                People like a “special” price or exclusive offer directed
              </p>
            </div>
            <div class=\"stat-block\">
              <h4><a href=\"\">Click to discover</a></h4>
              <div class=\"statistic\">
                <ul>
                  <li>
                    <span>233</span>
                    <h5>Completed Casess</h5>
                  </li>
                  <li>
                    <span>33</span>
                    <h5>Years of practice</h5>
                  </li>
                  <li>
                    <span>97%</span>
                    <h5>wining rate</h5>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </li>
        <li>
          <a href=\"#\"><img src=\"/img/persona/per-w.png\"></a>
          <div class=\"block\">
            <h3>Nettie Norton</h3>
            <div class=\"info-block\">
              <h4>Type something</h4>
              <p>
                People like a “special” price or exclusive offer directed
              </p>
            </div>
            <div class=\"stat-block\">
              <h4><a href=\"\">Click to discover</a></h4>
              <div class=\"statistic\">
                <ul>
                  <li>
                    <span>233</span>
                    <h5>Completed Casess</h5>
                  </li>
                  <li>
                    <span>33</span>
                    <h5>Years of practice</h5>
                  </li>
                  <li>
                    <span>97%</span>
                    <h5>wining rate</h5>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </li>
        <li>
          <a href=\"#\"><img src=\"/img/persona/per-n.svg\"></a>
          <div class=\"block\">
            <h3>Nettie Norton</h3>
            <div class=\"info-block\">
              <h4>Type something</h4>
              <p>
                People like a “special” price or exclusive offer directed
              </p>
            </div>
            <div class=\"stat-block\">
              <h4><a href=\"\">Click to discover</a></h4>
              <div class=\"statistic\">
                <ul>
                  <li>
                    <span>233</span>
                    <h5>Completed Casess</h5>
                  </li>
                  <li>
                    <span>33</span>
                    <h5>Years of practice</h5>
                  </li>
                  <li>
                    <span>97%</span>
                    <h5>wining rate</h5>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </li>
      </ul>
    </div>


  </section>
  <section id=\"contact-baner\">
    <div class=\"back\">
      <div class=\"cover\"></div>
    </div>
      <div class=\"container\">
        <div class=\"side a\">
          <a href=\"app_dev.php\"><img src=\"/img/lgog.svg\"></a>
          <h3>
            Working In Your <br>
            Best Interests Every <br>
            Step Of The Way
          </h3>
        </div>
        <div class=\"side b\">
      \t\t\t\t";
        // line 255
        $this->loadTemplate("AppBundle:Contact:contact_block_form.html.twig", "AppBundle:App:attorney_view.html.twig", 255)->display($context);
        // line 256
        echo "      \t\t\t\t<div class=\"fb-square\">
          <!-- <div id=\"contactus\">
            <h2>Contact us now</h2>
            <p>Leave your message in the form below</p>
            <form action=\"\">
              <div class=\"form-data\">
                <lable class='action'>name</lable>
                <input type=\"text\" name='name'>
              </div>
              <div class=\"form-data input\">
                <lable class='action'>email</lable>
                <input type=\"text\" name='name'>
              </div>
              <div class=\"form-data input\">
                <lable class='action'>phone</lable>
                <input type=\"text\" name='name'>
              </div>
              <div class=\"form-data\">
                <lable>message</lable>
                <textarea name=\"msg\" placeholder='Tell us about your case'></textarea>
              </div>

              <a href=\"\"><div class=\"pbtn\">contact us</div></a>
            </form>
          </div> -->
        </div>
      </div>
  </section>
</wrapper>
";
    }

    public function getTemplateName()
    {
        return "AppBundle:App:attorney_view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  307 => 256,  305 => 255,  160 => 112,  129 => 50,  127 => 49,  121 => 46,  118 => 45,  116 => 44,  94 => 24,  90 => 20,  82 => 14,  80 => 13,  77 => 12,  71 => 10,  65 => 8,  59 => 7,  53 => 6,  47 => 5,  41 => 4,  35 => 3,  11 => 1,);
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

{% block title %}{{- page.metatitle ? page.metatitle : parent() -}}{% endblock %}
{% block meta_keywords %}{{- page.metakeywords ? page.metakeywords : parent() -}}{% endblock %}
{% block meta_description %}{{- page.metadescription ? page.metadescription : parent() -}}{% endblock %}
{% block og_title %}{{- page.metatitle ? page.metatitle : parent() -}}{% endblock %}
{% block og_descr %}{{- page.metadescription ? page.metadescription : parent() -}}{% endblock %}
{% block last_updated_block %}{{ page.updatedAtDatetime }}{% endblock %}

{% block bodyId %}about{% endblock %}

{% block content %}
{% include \"AppBundle:App:tmate.list.menu.html.twig\" with {'back': 'app_about_us'} %}

<wrapper>
  <section id=\"personal-info\">
    <div class=\"container\">
      <div class=\"side a\">
        <div id=\"persona-front\">
          <img src=\"/img/persona/persona.png\"  alt=\"{{ attorney.name }}\">
          {#
          <img src=\"{{ asset(attorney.photoFullPath) }}\" alt=\"{{ attorney.name }}\">
          #}
        </div>
        <div class=\"statistic\">
          <ul>
            <li>
              <span>233</span>
              <h5>Completed Casess</h5>
            </li>
            <li>
              <span>33</span>
              <h5>Years of practice</h5>
            </li>
            <li>
              <span>97%</span>
              <h5>wining rate</h5>
            </li>
          </ul>
        </div>
      </div>
      <div class=\"side b\">

  \t\t\t{% include \"default/breadcrumbs.html.twig\" with { 'elements': { 0: {'url': \"app_about_us\", 'name': \"About us\" }}, 'currentPage': attorney.name, 'home' : false } %}

        <h2>{{ attorney.name }}</h2>
        <h4>type something</h4>

        {% include \"default/social_block.html.twig\" %}
        {{ attorney.description | raw }}

      </div>
    </div>
  </section>

  <section id=\"team-show\">
    <div class=\"container\">
      <div class=\"_text\">
        <h2>our team</h2>
      </div>
      <!-- <div class=\"pslider\">
        <ul class='slides a'>
          <li class='cur'>

          </li>
          <li>

          </li>
        </ul>
        <div class=\"cntrls noselect\">
          <a href=\"javascript:void(0);\"><div class=\"prev cntrl\"></div></a>
          <a href=\"javascript:void(0);\"><div class=\"next cntrl\"></div></a>
        </div>
      </div> -->

      <ul class='team'>
        {#
        {% for teammate in attorneys %}
        <li>
          <a href=\"{{ teammate.url }}\"><img src=\"{{ asset(teammate.photoFullPath) }}\"></a>
          <div class=\"block\">
            <h3>{{ teammate.name }}</h3>
            <div class=\"info-block\">
              <h4>Type something</h4>
              <p>
                People like a “special” price or exclusive offer directed
              </p>
            </div>
            <div class=\"stat-block\">
              <h4><a href=\"{{ teammate.url }}\">Click to discover</a></h4>
              <div class=\"statistic\">
                <ul>
                  <li>
                    <span>233</span>
                    <h5>Completed Casess</h5>
                  </li>
                  <li>
                    <span>33</span>
                    <h5>Years of practice</h5>
                  </li>
                  <li>
                    <span>97%</span>
                    <h5>wining rate</h5>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </li>
      {% endfor %}
      #}
        <li>
          <a href=\"#\"><img src=\"/img/persona/per-w.png\"></a>
          <div class=\"block\">
            <h3>Nettie Norton</h3>
            <div class=\"info-block\">
              <h4>Type something</h4>
              <p>
                People like a “special” price or exclusive offer directed
              </p>
            </div>
            <div class=\"stat-block\">
              <h4><a href=\"\">Click to discover</a></h4>
              <div class=\"statistic\">
                <ul>
                  <li>
                    <span>233</span>
                    <h5>Completed Casess</h5>
                  </li>
                  <li>
                    <span>33</span>
                    <h5>Years of practice</h5>
                  </li>
                  <li>
                    <span>97%</span>
                    <h5>wining rate</h5>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </li>
        <li>
          <a href=\"#\"><img src=\"/img/persona/per-m.png\"></a>
          <div class=\"block\">
            <h3>Henry Harper</h3>
            <div class=\"info-block\">
              <h4>Type something</h4>
              <p>
                People like a “special” price or exclusive offer directed
              </p>
            </div>
            <div class=\"stat-block\">
              <h4><a href=\"\">Click to discover</a></h4>
              <div class=\"statistic\">
                <ul>
                  <li>
                    <span>233</span>
                    <h5>Completed Casess</h5>
                  </li>
                  <li>
                    <span>33</span>
                    <h5>Years of practice</h5>
                  </li>
                  <li>
                    <span>97%</span>
                    <h5>wining rate</h5>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </li>
        <li>
          <a href=\"#\"><img src=\"/img/persona/per-w.png\"></a>
          <div class=\"block\">
            <h3>Nettie Norton</h3>
            <div class=\"info-block\">
              <h4>Type something</h4>
              <p>
                People like a “special” price or exclusive offer directed
              </p>
            </div>
            <div class=\"stat-block\">
              <h4><a href=\"\">Click to discover</a></h4>
              <div class=\"statistic\">
                <ul>
                  <li>
                    <span>233</span>
                    <h5>Completed Casess</h5>
                  </li>
                  <li>
                    <span>33</span>
                    <h5>Years of practice</h5>
                  </li>
                  <li>
                    <span>97%</span>
                    <h5>wining rate</h5>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </li>
        <li>
          <a href=\"#\"><img src=\"/img/persona/per-n.svg\"></a>
          <div class=\"block\">
            <h3>Nettie Norton</h3>
            <div class=\"info-block\">
              <h4>Type something</h4>
              <p>
                People like a “special” price or exclusive offer directed
              </p>
            </div>
            <div class=\"stat-block\">
              <h4><a href=\"\">Click to discover</a></h4>
              <div class=\"statistic\">
                <ul>
                  <li>
                    <span>233</span>
                    <h5>Completed Casess</h5>
                  </li>
                  <li>
                    <span>33</span>
                    <h5>Years of practice</h5>
                  </li>
                  <li>
                    <span>97%</span>
                    <h5>wining rate</h5>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </li>
      </ul>
    </div>


  </section>
  <section id=\"contact-baner\">
    <div class=\"back\">
      <div class=\"cover\"></div>
    </div>
      <div class=\"container\">
        <div class=\"side a\">
          <a href=\"app_dev.php\"><img src=\"/img/lgog.svg\"></a>
          <h3>
            Working In Your <br>
            Best Interests Every <br>
            Step Of The Way
          </h3>
        </div>
        <div class=\"side b\">
      \t\t\t\t{% include \"AppBundle:Contact:contact_block_form.html.twig\" %}
      \t\t\t\t<div class=\"fb-square\">
          <!-- <div id=\"contactus\">
            <h2>Contact us now</h2>
            <p>Leave your message in the form below</p>
            <form action=\"\">
              <div class=\"form-data\">
                <lable class='action'>name</lable>
                <input type=\"text\" name='name'>
              </div>
              <div class=\"form-data input\">
                <lable class='action'>email</lable>
                <input type=\"text\" name='name'>
              </div>
              <div class=\"form-data input\">
                <lable class='action'>phone</lable>
                <input type=\"text\" name='name'>
              </div>
              <div class=\"form-data\">
                <lable>message</lable>
                <textarea name=\"msg\" placeholder='Tell us about your case'></textarea>
              </div>

              <a href=\"\"><div class=\"pbtn\">contact us</div></a>
            </form>
          </div> -->
        </div>
      </div>
  </section>
</wrapper>
{% endblock %}
", "AppBundle:App:attorney_view.html.twig", "/home/szpaklabs/work/projects/sharovalaw-com/src/AppBundle/Resources/views/App/attorney_view.html.twig");
    }
}
