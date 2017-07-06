<?php

/* AppBundle:App:about_us.html.twig */
class __TwigTemplate_96c9f45a2341a04ac758330179c5c69a77adc63433ee1dcd8f23a7b591100c28 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:App:about_us.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'meta_keywords' => array($this, 'block_meta_keywords'),
            'meta_description' => array($this, 'block_meta_description'),
            'og_title' => array($this, 'block_og_title'),
            'og_descr' => array($this, 'block_og_descr'),
            'last_updated_block' => array($this, 'block_last_updated_block'),
            'bodyId' => array($this, 'block_bodyId'),
            'bodyClass' => array($this, 'block_bodyClass'),
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

    // line 11
    public function block_bodyClass($context, array $blocks = array())
    {
        echo "home";
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "
<div id=\"static-menu\" class=\"home\">
\t<ul>
\t\t<li class='cur'><a href=\"#sub-about\">About Us</a></li>
\t\t<li><a href=\"#sub-pa-block\">Practice Areas</a></li>
\t\t<li><a href=\"#sub-region-text\">Regions</a></li>
\t\t<li><a href=\"#sub-team-list\">Our Team</a></li>
\t\t<li><a href=\"#contact-baner\">Contact Us</a></li>
\t</ul>
</div>

<wrapper>
\t<section id='home-about' class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"sub-block\" id='sub-about'>
\t\t\t\t<h2>About us</h2>
\t\t\t\t<p>At Sharova Law Firm, we believe that communication is the first and most effective line of defense. When it comes to legal matters, we know how important it is for you to be heard and represented. We go above and beyond for our clients, priding ourselves on our availability and responsiveness.</p>
\t\t\t\t<p>By being sensitive to your situation and tough in the courtroom, we will work with you to resolve your case in a professional and timely manner. We have been there for our clients through thick and thin, and will be there for you when you need us most. Even in complicated scenarios, we are able to navigate the complex legal systems in New York, New Jersey and the federal government.</p>
\t\t\t</div>

\t\t\t<div class=\"sub-block\" id='sub-pa-text'>
\t\t\t\t<div class=\"middle\">
\t\t\t\t\t<h2>Experienced Lawyers on Your Side</h2>
\t\t\t\t\t<p>We know that you have many choices when it comes to deciding which New York or New Jersey law firm to hire. What makes us different is that we have extensive experience in a wide array of areas and we are equally qualified in each of them. We know what’s necessary in order to navigate the legal system on your behalf, particularly in the following areas of practice:</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"sub-block\" id='sub-pa-block'>
\t\t\t\t";
        // line 41
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("PluginsPracticAreaBundle:PracticArea:practicAreasShortAbout"), array());
        // line 42
        echo "\t\t\t</div>

\t\t\t<div class=\"sub-block\" id=\"sub-region-img\">

\t\t\t</div>
\t\t\t<div class=\"sub-block\" id=\"sub-region-text\">
\t\t\t\t<h2>Proudly Serving New York and New Jersey</h2>
\t\t\t\t<p>While our offices are located in the heart of New York City, our ability to provide legal representation and consultation extends to the following regions:</p>
\t\t\t\t<ul>
\t\t\t\t\t<li>● Eastern New York</li>
\t\t\t\t\t<li>● Southern New York</li>
\t\t\t\t\t<li>● Northern New York District Courts</li>
\t\t\t\t\t<li>● The State of New Jersey</li>
\t\t\t\t\t<li>● District Court of New Jersey</li>
\t\t\t\t</ul>
\t\t\t\t<p>We belong to the following associations:</p>
\t\t\t\t<ul>
\t\t\t\t\t<li>● New York County Bar Association (Manhattan)</li>
\t\t\t\t\t<li>● Queens County Bar Association</li>
\t\t\t\t\t<li>● Kings County Bar Association</li>
\t\t\t\t\t<li>● Richmond County Bar Association</li>
\t\t\t\t\t<li>● Nassau County Bar Association</li>
\t\t\t\t\t<li>● Union County New Jersey Bar Association</li>
\t\t\t\t\t<li>● Middlesex County New Jersey Bar Association</li>
\t\t\t\t</ul>
\t\t\t</div>

\t\t\t<div class=\"sub-block\" id=\"hor-text\">
\t\t\t\t<p>Whether your case involves a settlement, collaborative divorce, or the necessity of upfront resources, Sharova Law Firm will guide you through the process. As your trusted legal team, we will work toward the best possible outcome for your individual case, and provide you with the resources you need to move forward in your life.</p>
\t\t\t</div>


\t\t\t<div class=\"sub-block\" id=\"sub-team-text\">
\t\t\t\t<h2>Working In Your Best Interests <br>Every Step Of The Way</h2>

\t\t\t\t<p>The first step when you come to Sharova Law Firm is for us to listen closely to what your particular legal matter entails and look at it from every angle possible. Your priorities are our priorities throughout the entire process. Especially in family law and divorce cases, the welfare of your children and your safety are of the utmost importance to us as your legal team.</p>

\t\t\t\t<p>Negotiation first, mediation next, and litigation last is the way we conduct ourselves here at Sharova Law Firm. We make sure that your matters are resolved with as little time, money, and stress as possible, while working tirelessly toward your desired outcome. Of course, we are always ready to take the actions necessary to proceed in your best interest, providing you with every potential option that might be available to you. We also know that cost may be a concern, but rest assured that we put your needs before our bottom line to make your representation as cost-effective as possible.</p>

\t\t\t\t<p>Contact a law firm that truly cares about your wellbeing. We will do whatever it takes to find a resolution to your matter, no matter how complex your case may be.</p>

\t\t\t</div>

\t\t\t<div class=\"sub-block\" id=\"sub-team-list\">
\t\t\t\t<h2>Our Team</h2>

\t\t\t\t<ul>
\t\t\t\t\t<li>
\t          <a href=\"#\"><img src=\"/img/persona/per-w.png\"></a>
\t          <div class=\"block\">
\t            <h3>Nettie Norton</h3>
\t            <div class=\"info-block\">
\t              <h4>Type something</h4>
\t              <p>
\t                People like a “special” price or exclusive offer directed
\t              </p>
\t            </div>
\t            <div class=\"stat-block\">
\t              <h4><a href=\"\">Click to discover</a></h4>
\t              <div class=\"statistic\">
\t                <ul>
\t                  <li>
\t                    <span>233</span>
\t                    <h5>Completed Casess</h5>
\t                  </li>
\t                  <li>
\t                    <span>33</span>
\t                    <h5>Years of practice</h5>
\t                  </li>
\t                  <li>
\t                    <span>97%</span>
\t                    <h5>wining rate</h5>
\t                  </li>
\t                </ul>
\t              </div>
\t            </div>
\t          </div>
\t        </li>
\t        <li>
\t          <a href=\"#\"><img src=\"/img/persona/per-m.png\"></a>
\t          <div class=\"block\">
\t            <h3>Henry Harper</h3>
\t            <div class=\"info-block\">
\t              <h4>Type something</h4>
\t              <p>
\t                People like a “special” price or exclusive offer directed
\t              </p>
\t            </div>
\t            <div class=\"stat-block\">
\t              <h4><a href=\"\">Click to discover</a></h4>
\t              <div class=\"statistic\">
\t                <ul>
\t                  <li>
\t                    <span>233</span>
\t                    <h5>Completed Casess</h5>
\t                  </li>
\t                  <li>
\t                    <span>33</span>
\t                    <h5>Years of practice</h5>
\t                  </li>
\t                  <li>
\t                    <span>97%</span>
\t                    <h5>wining rate</h5>
\t                  </li>
\t                </ul>
\t              </div>
\t            </div>
\t          </div>
\t        </li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</section>
\t<section id=\"contact-baner\" class=\"home\">
\t\t<div class=\"back\">
\t\t\t<div class=\"cover\"></div>
\t\t</div>
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"side a\">
\t\t\t\t\t<a href=\"app_dev.php\"><img src=\"/img/lgog.svg\"></a>
\t\t\t\t\t<br>
\t\t\t\t\t<span>
\t\t\t\t\t\tContact a law firm that truly cares about your wellbeing. We will do whatever it takes to find a resolution to your matter, no matter how complex your case may be.
\t\t\t\t\t</span>
\t\t\t\t</div>
\t\t\t\t<div class=\"side b\">
\t\t\t\t\t<div id=\"contactus\">
\t\t\t\t\t\t<h2>Contact us now</h2>
\t\t\t\t\t\t<p>Leave your message in the form below</p>
\t\t\t\t\t\t<form action=\"\">
\t\t\t\t\t\t\t<div class=\"form-data\">
\t\t\t\t\t\t\t\t<lable class='action'>name</lable>
\t\t\t\t\t\t\t\t<input type=\"text\" name='name'>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-data input\">
\t\t\t\t\t\t\t\t<lable class='action'>email</lable>
\t\t\t\t\t\t\t\t<input type=\"text\" name='name'>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-data input\">
\t\t\t\t\t\t\t\t<lable class='action'>phone</lable>
\t\t\t\t\t\t\t\t<input type=\"text\" name='name'>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-data\">
\t\t\t\t\t\t\t\t<lable>message</lable>
\t\t\t\t\t\t\t\t<textarea name=\"msg\" placeholder='Tell us about your case'></textarea>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<a href=\"\"><div class=\"pbtn\">contact us</div></a>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t</section>
</wrapper>
";
    }

    public function getTemplateName()
    {
        return "AppBundle:App:about_us.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 42,  116 => 41,  87 => 14,  84 => 13,  78 => 11,  72 => 10,  66 => 8,  60 => 7,  54 => 6,  48 => 5,  42 => 4,  36 => 3,  11 => 1,);
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
{% block bodyClass %}home{% endblock %}

{% block content %}

<div id=\"static-menu\" class=\"home\">
\t<ul>
\t\t<li class='cur'><a href=\"#sub-about\">About Us</a></li>
\t\t<li><a href=\"#sub-pa-block\">Practice Areas</a></li>
\t\t<li><a href=\"#sub-region-text\">Regions</a></li>
\t\t<li><a href=\"#sub-team-list\">Our Team</a></li>
\t\t<li><a href=\"#contact-baner\">Contact Us</a></li>
\t</ul>
</div>

<wrapper>
\t<section id='home-about' class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"sub-block\" id='sub-about'>
\t\t\t\t<h2>About us</h2>
\t\t\t\t<p>At Sharova Law Firm, we believe that communication is the first and most effective line of defense. When it comes to legal matters, we know how important it is for you to be heard and represented. We go above and beyond for our clients, priding ourselves on our availability and responsiveness.</p>
\t\t\t\t<p>By being sensitive to your situation and tough in the courtroom, we will work with you to resolve your case in a professional and timely manner. We have been there for our clients through thick and thin, and will be there for you when you need us most. Even in complicated scenarios, we are able to navigate the complex legal systems in New York, New Jersey and the federal government.</p>
\t\t\t</div>

\t\t\t<div class=\"sub-block\" id='sub-pa-text'>
\t\t\t\t<div class=\"middle\">
\t\t\t\t\t<h2>Experienced Lawyers on Your Side</h2>
\t\t\t\t\t<p>We know that you have many choices when it comes to deciding which New York or New Jersey law firm to hire. What makes us different is that we have extensive experience in a wide array of areas and we are equally qualified in each of them. We know what’s necessary in order to navigate the legal system on your behalf, particularly in the following areas of practice:</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"sub-block\" id='sub-pa-block'>
\t\t\t\t{% render controller(\"PluginsPracticAreaBundle:PracticArea:practicAreasShortAbout\") %}
\t\t\t</div>

\t\t\t<div class=\"sub-block\" id=\"sub-region-img\">

\t\t\t</div>
\t\t\t<div class=\"sub-block\" id=\"sub-region-text\">
\t\t\t\t<h2>Proudly Serving New York and New Jersey</h2>
\t\t\t\t<p>While our offices are located in the heart of New York City, our ability to provide legal representation and consultation extends to the following regions:</p>
\t\t\t\t<ul>
\t\t\t\t\t<li>● Eastern New York</li>
\t\t\t\t\t<li>● Southern New York</li>
\t\t\t\t\t<li>● Northern New York District Courts</li>
\t\t\t\t\t<li>● The State of New Jersey</li>
\t\t\t\t\t<li>● District Court of New Jersey</li>
\t\t\t\t</ul>
\t\t\t\t<p>We belong to the following associations:</p>
\t\t\t\t<ul>
\t\t\t\t\t<li>● New York County Bar Association (Manhattan)</li>
\t\t\t\t\t<li>● Queens County Bar Association</li>
\t\t\t\t\t<li>● Kings County Bar Association</li>
\t\t\t\t\t<li>● Richmond County Bar Association</li>
\t\t\t\t\t<li>● Nassau County Bar Association</li>
\t\t\t\t\t<li>● Union County New Jersey Bar Association</li>
\t\t\t\t\t<li>● Middlesex County New Jersey Bar Association</li>
\t\t\t\t</ul>
\t\t\t</div>

\t\t\t<div class=\"sub-block\" id=\"hor-text\">
\t\t\t\t<p>Whether your case involves a settlement, collaborative divorce, or the necessity of upfront resources, Sharova Law Firm will guide you through the process. As your trusted legal team, we will work toward the best possible outcome for your individual case, and provide you with the resources you need to move forward in your life.</p>
\t\t\t</div>


\t\t\t<div class=\"sub-block\" id=\"sub-team-text\">
\t\t\t\t<h2>Working In Your Best Interests <br>Every Step Of The Way</h2>

\t\t\t\t<p>The first step when you come to Sharova Law Firm is for us to listen closely to what your particular legal matter entails and look at it from every angle possible. Your priorities are our priorities throughout the entire process. Especially in family law and divorce cases, the welfare of your children and your safety are of the utmost importance to us as your legal team.</p>

\t\t\t\t<p>Negotiation first, mediation next, and litigation last is the way we conduct ourselves here at Sharova Law Firm. We make sure that your matters are resolved with as little time, money, and stress as possible, while working tirelessly toward your desired outcome. Of course, we are always ready to take the actions necessary to proceed in your best interest, providing you with every potential option that might be available to you. We also know that cost may be a concern, but rest assured that we put your needs before our bottom line to make your representation as cost-effective as possible.</p>

\t\t\t\t<p>Contact a law firm that truly cares about your wellbeing. We will do whatever it takes to find a resolution to your matter, no matter how complex your case may be.</p>

\t\t\t</div>

\t\t\t<div class=\"sub-block\" id=\"sub-team-list\">
\t\t\t\t<h2>Our Team</h2>

\t\t\t\t<ul>
\t\t\t\t\t<li>
\t          <a href=\"#\"><img src=\"/img/persona/per-w.png\"></a>
\t          <div class=\"block\">
\t            <h3>Nettie Norton</h3>
\t            <div class=\"info-block\">
\t              <h4>Type something</h4>
\t              <p>
\t                People like a “special” price or exclusive offer directed
\t              </p>
\t            </div>
\t            <div class=\"stat-block\">
\t              <h4><a href=\"\">Click to discover</a></h4>
\t              <div class=\"statistic\">
\t                <ul>
\t                  <li>
\t                    <span>233</span>
\t                    <h5>Completed Casess</h5>
\t                  </li>
\t                  <li>
\t                    <span>33</span>
\t                    <h5>Years of practice</h5>
\t                  </li>
\t                  <li>
\t                    <span>97%</span>
\t                    <h5>wining rate</h5>
\t                  </li>
\t                </ul>
\t              </div>
\t            </div>
\t          </div>
\t        </li>
\t        <li>
\t          <a href=\"#\"><img src=\"/img/persona/per-m.png\"></a>
\t          <div class=\"block\">
\t            <h3>Henry Harper</h3>
\t            <div class=\"info-block\">
\t              <h4>Type something</h4>
\t              <p>
\t                People like a “special” price or exclusive offer directed
\t              </p>
\t            </div>
\t            <div class=\"stat-block\">
\t              <h4><a href=\"\">Click to discover</a></h4>
\t              <div class=\"statistic\">
\t                <ul>
\t                  <li>
\t                    <span>233</span>
\t                    <h5>Completed Casess</h5>
\t                  </li>
\t                  <li>
\t                    <span>33</span>
\t                    <h5>Years of practice</h5>
\t                  </li>
\t                  <li>
\t                    <span>97%</span>
\t                    <h5>wining rate</h5>
\t                  </li>
\t                </ul>
\t              </div>
\t            </div>
\t          </div>
\t        </li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</section>
\t<section id=\"contact-baner\" class=\"home\">
\t\t<div class=\"back\">
\t\t\t<div class=\"cover\"></div>
\t\t</div>
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"side a\">
\t\t\t\t\t<a href=\"app_dev.php\"><img src=\"/img/lgog.svg\"></a>
\t\t\t\t\t<br>
\t\t\t\t\t<span>
\t\t\t\t\t\tContact a law firm that truly cares about your wellbeing. We will do whatever it takes to find a resolution to your matter, no matter how complex your case may be.
\t\t\t\t\t</span>
\t\t\t\t</div>
\t\t\t\t<div class=\"side b\">
\t\t\t\t\t<div id=\"contactus\">
\t\t\t\t\t\t<h2>Contact us now</h2>
\t\t\t\t\t\t<p>Leave your message in the form below</p>
\t\t\t\t\t\t<form action=\"\">
\t\t\t\t\t\t\t<div class=\"form-data\">
\t\t\t\t\t\t\t\t<lable class='action'>name</lable>
\t\t\t\t\t\t\t\t<input type=\"text\" name='name'>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-data input\">
\t\t\t\t\t\t\t\t<lable class='action'>email</lable>
\t\t\t\t\t\t\t\t<input type=\"text\" name='name'>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-data input\">
\t\t\t\t\t\t\t\t<lable class='action'>phone</lable>
\t\t\t\t\t\t\t\t<input type=\"text\" name='name'>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-data\">
\t\t\t\t\t\t\t\t<lable>message</lable>
\t\t\t\t\t\t\t\t<textarea name=\"msg\" placeholder='Tell us about your case'></textarea>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<a href=\"\"><div class=\"pbtn\">contact us</div></a>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t</section>
</wrapper>
{% endblock %}
", "AppBundle:App:about_us.html.twig", "/home/szpaklabs/work/projects/sharovalaw-com/src/AppBundle/Resources/views/App/about_us.html.twig");
    }
}
