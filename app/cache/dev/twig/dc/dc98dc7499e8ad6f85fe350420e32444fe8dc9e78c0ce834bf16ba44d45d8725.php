<?php

/* ::base.html.twig */
class __TwigTemplate_536d40b66fdfda68634d45c6f572541f17785ecdb1217aef7b7395a0e1749c49 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'meta_description' => array($this, 'block_meta_description'),
            'meta_keywords' => array($this, 'block_meta_keywords'),
            'ampLinkBlock' => array($this, 'block_ampLinkBlock'),
            'canonicalLinkBlock' => array($this, 'block_canonicalLinkBlock'),
            'og_title' => array($this, 'block_og_title'),
            'og_descr' => array($this, 'block_og_descr'),
            'bodyId' => array($this, 'block_bodyId'),
            'bodyClass' => array($this, 'block_bodyClass'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"UTF-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
        ";
        // line 6
        ob_start();
        echo "<title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 7
        echo "        <meta name=\"description\" content=\"";
        ob_start();
        $this->displayBlock('meta_description', $context, $blocks);
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        echo "\">
        <meta name=\"keywords\" content=\"";
        // line 8
        ob_start();
        $this->displayBlock('meta_keywords', $context, $blocks);
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        echo "\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
        ";
        // line 10
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "119673b_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_119673b_0") : $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("_controller/css/119673b_font-awesome.min_1.css");
            // line 15
            echo "           <link rel=\"stylesheet\" type=\"text/css\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\">
        ";
            // asset "119673b_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_119673b_1") : $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("_controller/css/119673b_jquery.popup_2.css");
            echo "           <link rel=\"stylesheet\" type=\"text/css\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\">
        ";
            // asset "119673b_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_119673b_2") : $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("_controller/css/119673b_style_3.css");
            echo "           <link rel=\"stylesheet\" type=\"text/css\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\">
        ";
        } else {
            // asset "119673b"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_119673b") : $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("_controller/css/119673b.css");
            echo "           <link rel=\"stylesheet\" type=\"text/css\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\">
        ";
        }
        unset($context["asset_url"]);
        // line 17
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "a4fec1c_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a4fec1c_0") : $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("_controller/js/a4fec1c_jquery-1.11.3.min_1.js");
            // line 18
            echo "

            <script type=\"text/javascript\" src=\"";
            // line 20
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        } else {
            // asset "a4fec1c"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a4fec1c") : $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("_controller/js/a4fec1c.js");
            // line 18
            echo "

            <script type=\"text/javascript\" src=\"";
            // line 20
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        }
        unset($context["asset_url"]);
        // line 22
        echo "
        ";
        // line 23
        $this->displayBlock('ampLinkBlock', $context, $blocks);
        // line 26
        echo "
        ";
        // line 27
        $this->displayBlock('canonicalLinkBlock', $context, $blocks);
        // line 29
        echo "
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <meta property=\"og:url\"           content=\"";
        // line 31
        echo twig_escape_filter($this->env, twig_replace_filter((($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl($this->getAttribute($this->getAttribute($this->getAttribute(        // line 32
($context["app"] ?? $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route_params"), "method"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("homepage"))), array("http://" => "https://")), "html", null, true);
        // line 33
        echo "\" />
        <meta property=\"og:type\"          content=\"website\" />
        <meta property=\"og:title\"         content=\"";
        // line 35
        ob_start();
        $this->displayBlock('og_title', $context, $blocks);
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        echo "\" />
        <meta property=\"og:description\"   content=\"";
        // line 36
        ob_start();
        $this->displayBlock('og_descr', $context, $blocks);
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        echo "\" />
        <meta property=\"og:image\"         content=\"";
        // line 37
        echo twig_escape_filter($this->env, twig_replace_filter(($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "getSchemeAndHttpHost", array(), "method") . $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("/images/logo_og.png")), array("http://" => "https://")), "html", null, true);
        echo "\" />

\t\t\t\t<link rel=\"stylesheet\" href=\"/css/sass.css\">

    </head>
    <body id=\"";
        // line 42
        $this->displayBlock('bodyId', $context, $blocks);
        echo "\" class=\"";
        $this->displayBlock('bodyClass', $context, $blocks);
        echo "\">
        <article itemscope itemtype=\"http://schema.org/LocalBusiness\">
\t\t\t\t<meta itemprop=\"name\" content=\"Law Office Of Yelena Sharova\">
            ";
        // line 45
        $this->displayBlock('body', $context, $blocks);
        // line 46
        echo "        </article>
        ";
        // line 47
        $this->displayBlock('javascripts', $context, $blocks);
        // line 74
        echo "        <script type=\"text/javascript\">
            \$(function(){
                // btn карта сайта
                \$('#smap').click(function(){
                    var block = \$(\".phidden\");
                    block.slideToggle('slow');
                });
                //магнит для меню
                // var stickyHeaderTop = \$('#pheader').offset().top;

                \$(window).scroll(function(){
                    if( \$(window).scrollTop() > 0 )
                        \$('#pheader').addClass(\"fix\");
                    else
                        \$('#pheader').removeClass(\"fix\");
                });
            });
        </script>
        <script async>
          window.fbAsyncInit = function() {
            FB.init({
              appId      : '1061690967254744',
              xfbml      : true,
              version    : 'v2.7'
            });
          };

          (function(d, s, id){
             var js, fjs = d.getElementsByTagName(s)[0];
             if (d.getElementById(id)) {return;}
             js = d.createElement(s); js.id = id;
             js.src = \"//connect.facebook.net/en_US/sdk.js\";
             fjs.parentNode.insertBefore(js, fjs);
           }(document, 'script', 'facebook-jssdk'));
          </script>
          <div id=\"fb-root\"></div>
          <script >
            (function(d, s, id) {
              var js, fjs = d.getElementsByTagName(s)[0];
              if (d.getElementById(id)) return;
              js = d.createElement(s); js.id = id;
              js.src = \"//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.7&appId=1061690967254744\";
              fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
          </script>
    </body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Law office of Yelena Sharova";
    }

    // line 7
    public function block_meta_description($context, array $blocks = array())
    {
    }

    // line 8
    public function block_meta_keywords($context, array $blocks = array())
    {
    }

    // line 23
    public function block_ampLinkBlock($context, array $blocks = array())
    {
        // line 24
        echo "            ";
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Amp:ampLinkBlock", array("request" => $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()))), array());
        // line 25
        echo "        ";
    }

    // line 27
    public function block_canonicalLinkBlock($context, array $blocks = array())
    {
        // line 28
        echo "        ";
    }

    // line 35
    public function block_og_title($context, array $blocks = array())
    {
    }

    // line 36
    public function block_og_descr($context, array $blocks = array())
    {
    }

    // line 42
    public function block_bodyId($context, array $blocks = array())
    {
        echo "body-block";
    }

    public function block_bodyClass($context, array $blocks = array())
    {
    }

    // line 45
    public function block_body($context, array $blocks = array())
    {
    }

    // line 47
    public function block_javascripts($context, array $blocks = array())
    {
        // line 48
        echo "            ";
        // line 49
        echo "
            ";
        // line 50
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "7cd82f0_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_7cd82f0_0") : $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("_controller/js/7cd82f0_jquery_1.js");
            // line 55
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
            // asset "7cd82f0_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_7cd82f0_1") : $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("_controller/js/7cd82f0_jquery.validate_2.js");
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
            // asset "7cd82f0_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_7cd82f0_2") : $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("_controller/js/7cd82f0_jquery.popup_3.js");
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
        } else {
            // asset "7cd82f0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_7cd82f0") : $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("_controller/js/7cd82f0.js");
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
        }
        unset($context["asset_url"]);
        // line 57
        echo "            ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "03f8bff_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_03f8bff_0") : $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("_controller/js/03f8bff_Popup_1.js");
            // line 63
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" async></script>
            ";
            // asset "03f8bff_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_03f8bff_1") : $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("_controller/js/03f8bff_Validate_2.js");
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" async></script>
            ";
            // asset "03f8bff_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_03f8bff_2") : $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("_controller/js/03f8bff_Form_3.js");
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" async></script>
            ";
            // asset "03f8bff_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_03f8bff_3") : $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("_controller/js/03f8bff_bootstrap_4.js");
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" async></script>
            ";
        } else {
            // asset "03f8bff"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_03f8bff") : $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("_controller/js/03f8bff.js");
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" async></script>
            ";
        }
        unset($context["asset_url"]);
        // line 65
        echo "            ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "4b3ecb9_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_4b3ecb9_0") : $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("_controller/js/4b3ecb9_jquery_1.js");
            // line 71
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" async></script>
            ";
            // asset "4b3ecb9_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_4b3ecb9_1") : $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("_controller/js/4b3ecb9_bootstrap.min_2.js");
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" async></script>
            ";
            // asset "4b3ecb9_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_4b3ecb9_2") : $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("_controller/js/4b3ecb9_script_3.js");
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" async></script>
            ";
        } else {
            // asset "4b3ecb9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_4b3ecb9") : $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("_controller/js/4b3ecb9.js");
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" async></script>
            ";
        }
        unset($context["asset_url"]);
        // line 73
        echo "        ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  387 => 73,  361 => 71,  356 => 65,  324 => 63,  319 => 57,  293 => 55,  289 => 50,  286 => 49,  284 => 48,  281 => 47,  276 => 45,  266 => 42,  261 => 36,  256 => 35,  252 => 28,  249 => 27,  245 => 25,  242 => 24,  239 => 23,  234 => 8,  229 => 7,  223 => 6,  172 => 74,  170 => 47,  167 => 46,  165 => 45,  157 => 42,  149 => 37,  143 => 36,  137 => 35,  133 => 33,  131 => 32,  130 => 31,  126 => 30,  123 => 29,  121 => 27,  118 => 26,  116 => 23,  113 => 22,  107 => 20,  103 => 18,  96 => 20,  92 => 18,  87 => 17,  61 => 15,  57 => 10,  50 => 8,  43 => 7,  37 => 6,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"UTF-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
        {% spaceless %}<title>{% block title %}Law office of Yelena Sharova{% endblock %}</title>{% endspaceless %}
        <meta name=\"description\" content=\"{% spaceless %}{% block meta_description %}{% endblock %}{% endspaceless %}\">
        <meta name=\"keywords\" content=\"{% spaceless %}{% block meta_keywords %}{% endblock %}{% endspaceless %}\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
        {% stylesheets
                        'css/font-awesome.min.css'
                        'styles/jquery.popup.css'
\t\t\t\t\t\t\t\t\t\t\t\t'css/style.css'
                filter='yui_css' %}
           <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset_url }}\">
        {% endstylesheets %}
        {% javascripts 'scripts/libs/jquery-1.11.3.min.js' %}


            <script type=\"text/javascript\" src=\"{{ asset_url }}\"></script>
        {% endjavascripts %}

        {% block ampLinkBlock %}
            {% render controller(\"AppBundle:Amp:ampLinkBlock\", {'request' : app.request }) %}
        {% endblock %}

        {% block canonicalLinkBlock %}
        {% endblock %}

        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        <meta property=\"og:url\"           content=\"{{ (app.request.attributes.get('_route') ?
                    url(app.request.attributes.get('_route'), app.request.attributes.get('_route_params')):
                    url('homepage')) | replace({'http://' : 'https://'}) }}\" />
        <meta property=\"og:type\"          content=\"website\" />
        <meta property=\"og:title\"         content=\"{% spaceless %}{% block og_title %}{% endblock %}{% endspaceless %}\" />
        <meta property=\"og:description\"   content=\"{% spaceless %}{% block og_descr %}{% endblock %}{% endspaceless %}\" />
        <meta property=\"og:image\"         content=\"{{ (app.request.getSchemeAndHttpHost() ~ asset(\"/images/logo_og.png\")) | replace({'http://' : 'https://'})}}\" />

\t\t\t\t<link rel=\"stylesheet\" href=\"/css/sass.css\">

    </head>
    <body id=\"{% block bodyId %}body-block{% endblock %}\" class=\"{% block bodyClass %}{% endblock %}\">
        <article itemscope itemtype=\"http://schema.org/LocalBusiness\">
\t\t\t\t<meta itemprop=\"name\" content=\"Law Office Of Yelena Sharova\">
            {% block body %}{% endblock %}
        </article>
        {% block javascripts %}
            {#<script src=\"http://maps.googleapis.com/maps/api/js\" async></script>#}

            {% javascripts
                        'js/jquery.js'
                        'scripts/libs/jquery.validate.js'
                        'scripts/libs/jquery.popup.js'
            %}
                <script type=\"text/javascript\" src=\"{{ asset_url }}\"></script>
            {% endjavascripts %}
            {% javascripts
                        'scripts/Popup.js'
                        'scripts/Validate.js'
                        'scripts/Form.js'
                        'js/bootstrap.js'
            %}
                <script type=\"text/javascript\" src=\"{{ asset_url }}\" async></script>
            {% endjavascripts %}
            {% javascripts
                        'js/jquery.js'
                        'js/bootstrap.min.js'

\t\t\t\t\t\t\t\t\t\t\t\t'js/script.js'
            %}
                <script type=\"text/javascript\" src=\"{{ asset_url }}\" async></script>
            {% endjavascripts %}
        {% endblock %}
        <script type=\"text/javascript\">
            \$(function(){
                // btn карта сайта
                \$('#smap').click(function(){
                    var block = \$(\".phidden\");
                    block.slideToggle('slow');
                });
                //магнит для меню
                // var stickyHeaderTop = \$('#pheader').offset().top;

                \$(window).scroll(function(){
                    if( \$(window).scrollTop() > 0 )
                        \$('#pheader').addClass(\"fix\");
                    else
                        \$('#pheader').removeClass(\"fix\");
                });
            });
        </script>
        <script async>
          window.fbAsyncInit = function() {
            FB.init({
              appId      : '1061690967254744',
              xfbml      : true,
              version    : 'v2.7'
            });
          };

          (function(d, s, id){
             var js, fjs = d.getElementsByTagName(s)[0];
             if (d.getElementById(id)) {return;}
             js = d.createElement(s); js.id = id;
             js.src = \"//connect.facebook.net/en_US/sdk.js\";
             fjs.parentNode.insertBefore(js, fjs);
           }(document, 'script', 'facebook-jssdk'));
          </script>
          <div id=\"fb-root\"></div>
          <script >
            (function(d, s, id) {
              var js, fjs = d.getElementsByTagName(s)[0];
              if (d.getElementById(id)) return;
              js = d.createElement(s); js.id = id;
              js.src = \"//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.7&appId=1061690967254744\";
              fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
          </script>
    </body>
</html>
", "::base.html.twig", "/home/szpaklabs/work/projects/sharovalaw-com/app/Resources/views/base.html.twig");
    }
}
