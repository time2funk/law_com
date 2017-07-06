<?php

/* AppBundle:App:main.static.html.twig */
class __TwigTemplate_c53bb7f63e60314af7fb9c5f4bab9f952a0e849fac527b118a2987d609f77b5c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<section  id=\"pvideo\">
    <div class=\"container parent\">
        <div class=\"_text\">
          <h2>WHO WE ARE</h2>
        </div>
        <div class=\"video\">
          <div class=\"pslider\">
            <ul class='slides a'>
              <li class='cur'>
                <video src=\"/video/video1.mov\" controls=\"false\">
                  <source src=\"/video/video1.mov\" type=\"video/mov\">
                </video>
              </li>
              <li>
                <video src=\"/video/video1.mov\" controls=\"false\">
                  <source src=\"/video/video1.mov\" type=\"video/mov\">
                </video>
              </li>
              <li>
                <video src=\"/video/video1.mov\" controls=\"false\">
                  <source src=\"/video/video1.mov\" type=\"video/mov\">
                </video>
              </li>
              <li>
                <video src=\"/video/video1.mov\" controls=\"false\">
                  <source src=\"/video/video1.mov\" type=\"video/mov\">
                </video>
              </li>
            </ul>
            <div class=\"cntrls noselect\">
              <a href=\"javascript:void(0);\"><div class=\"prev cntrl\"></div></a>
              <a href=\"javascript:void(0);\"><div class=\"next cntrl\"></div></a>
            </div>
          </div>
        </div>
        <div class=\"_text\">
\t\t\t\t\t";
        // line 37
        echo $this->getAttribute(($context["whyUsBlock"] ?? $this->getContext($context, "whyUsBlock")), "content", array());
        echo "
        </div>

        <button type=\"button\" name=\"button\"><a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_about_us");
        echo "\">learn more</a></button>

    </div>

</section>

<section id=\"pthird\">
  <div class=\"container-flued\">
    <div class=\"mid\">
      <h2>READ ABOUT US</h2>
      <div id=\"pCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
        <!-- Indicators -->
        <ol class=\"carousel-indicators\">
          <li data-target=\"#pCarousel\" data-slide-to=\"0\" class=\"active point\"></li>
          <li data-target=\"#pCarousel\" data-slide-to=\"1\" class=\"point\"></li>
          <li data-target=\"#pCarousel\" data-slide-to=\"2\" class=\"point\"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class=\"carousel-inner\">
          <div class=\"carousel-item active \">
            <div class=\"container\">
              <ul class='row its'>
                <li class=\"partner-item col-lg-4\">
                  <a href=\"\"><img src=\"/img/3-2.png\"></a>
                </li>
                <li class=\"partner-item col-lg-4\">
                  <a href=\"\"><img src=\"/img/3-4.png\"></a>
                </li>
                <li class=\"partner-item col-lg-4\">
                  <a href=\"\"><img src=\"/img/3-5.png\"></a>
                </li>
                <li class=\"partner-item col-lg-4\">
                  <a href=\"\"><img src=\"/img/3-5.png\"></a>
                </li>
                <li class=\"partner-item col-lg-4\">
                  <a href=\"\"><img src=\"/img/3-4.png\"></a>
                </li>
              </ul>
            </div>
          </div>

          <div class=\"carousel-item\">
            <div class=\"container\">
              <ul class='row its'>
                <li class=\"partner-item col-lg-4\">
                  <a href=\"\"><img src=\"/img/3-2.png\"></a>
                </li>
                <li class=\"partner-item col-lg-4\">
                  <a href=\"\"><img src=\"/img/3-2.png\"></a>
                </li>
                <li class=\"partner-item col-lg-4\">
                  <a href=\"\"><img src=\"/img/3-2.png\"></a>
                </li>
                <li class=\"partner-item col-lg-4\">
                  <a href=\"\"><img src=\"/img/3-2.png\"></a>
                </li>
                <li class=\"partner-item col-lg-4\">
                  <a href=\"\"><img src=\"/img/3-2.png\"></a>
                </li>
              </ul>
            </div>
          </div>

          <div class=\"carousel-item\">
            <div class=\"container\">
              <ul class='row its'>
                <li class=\"partner-item col-lg-4\">
                  <a href=\"\"><img src=\"/img/3-4.png\"></a>
                </li>
                <li class=\"partner-item col-lg-4\">
                  <a href=\"\"><img src=\"/img/3-4.png\"></a>
                </li>
                <li class=\"partner-item col-lg-4\">
                  <a href=\"\"><img src=\"/img/3-4.png\"></a>
                </li>
                <li class=\"partner-item col-lg-4\">
                  <a href=\"\"><img src=\"/img/3-4.png\"></a>
                </li>
                <li class=\"partner-item col-lg-4\">
                  <a href=\"\"><img src=\"/img/3-4.png\"></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id=\"p_benefits\">
  <div class=\"container\">
    <h2>";
        // line 133
        echo twig_escape_filter($this->env, $this->getAttribute(($context["whyUsBlock"] ?? $this->getContext($context, "whyUsBlock")), "name", array()), "html", null, true);
        echo "</h2>
    <ul class='row'>
      <li class=\"item col-lg-6\">
        <a href=\"\">
          <div class=\"inside\">
            <img src=\"/img/courthouse.svg\">
            <div class=\"shadow\"></div>
            <h3>Benefit #1</h3>
            <p class='ptext'>
              People like a “special” price or exclusive offer directed only to them.
            </p>
          </div>
        </a>
      </li>
      <li class=\"item col-lg-6\">
        <a href=\"\">
          <div class=\"inside\">
            <img src=\"/img/libra.svg\">
            <div class=\"shadow\"></div>
            <h3>Benefit #2</h3>
            <p class='ptext'>
              People like a “special” price or exclusive offer directed only to them.
            </p>
          </div>
        </a>
      </li>
      <li class=\"item col-lg-6\">
        <a href=\"\">
          <div class=\"inside\">
            <img src=\"/img/portfolio.svg\">
            <div class=\"shadow\"></div>
            <h3>Benefit #3</h3>
            <p class='ptext'>
              People like a “special” price or exclusive offer directed only to them.
            </p>
          </div>
        </a>
      </li>
      <li class=\"item col-lg-6\">
        <a href=\"\">
          <div class=\"inside\">
            <img src=\"/img/agreement.svg\">
            <div class=\"shadow\"></div>
            <h3>Benefit #4</h3>
            <p class='ptext'>
              People like a “special” price or exclusive offer directed only to them.
            </p>
          </div>
        </a>
      </li>
    </ul>
    <p class='bot'><a href=\"\"><span class=\"pbtn\">contact us</span></a></p>
  </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "AppBundle:App:main.static.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 133,  63 => 40,  57 => 37,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section  id=\"pvideo\">
    <div class=\"container parent\">
        <div class=\"_text\">
          <h2>WHO WE ARE</h2>
        </div>
        <div class=\"video\">
          <div class=\"pslider\">
            <ul class='slides a'>
              <li class='cur'>
                <video src=\"/video/video1.mov\" controls=\"false\">
                  <source src=\"/video/video1.mov\" type=\"video/mov\">
                </video>
              </li>
              <li>
                <video src=\"/video/video1.mov\" controls=\"false\">
                  <source src=\"/video/video1.mov\" type=\"video/mov\">
                </video>
              </li>
              <li>
                <video src=\"/video/video1.mov\" controls=\"false\">
                  <source src=\"/video/video1.mov\" type=\"video/mov\">
                </video>
              </li>
              <li>
                <video src=\"/video/video1.mov\" controls=\"false\">
                  <source src=\"/video/video1.mov\" type=\"video/mov\">
                </video>
              </li>
            </ul>
            <div class=\"cntrls noselect\">
              <a href=\"javascript:void(0);\"><div class=\"prev cntrl\"></div></a>
              <a href=\"javascript:void(0);\"><div class=\"next cntrl\"></div></a>
            </div>
          </div>
        </div>
        <div class=\"_text\">
\t\t\t\t\t{{ whyUsBlock.content | raw }}
        </div>

        <button type=\"button\" name=\"button\"><a href=\"{{ path('app_about_us') }}\">learn more</a></button>

    </div>

</section>

<section id=\"pthird\">
  <div class=\"container-flued\">
    <div class=\"mid\">
      <h2>READ ABOUT US</h2>
      <div id=\"pCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
        <!-- Indicators -->
        <ol class=\"carousel-indicators\">
          <li data-target=\"#pCarousel\" data-slide-to=\"0\" class=\"active point\"></li>
          <li data-target=\"#pCarousel\" data-slide-to=\"1\" class=\"point\"></li>
          <li data-target=\"#pCarousel\" data-slide-to=\"2\" class=\"point\"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class=\"carousel-inner\">
          <div class=\"carousel-item active \">
            <div class=\"container\">
              <ul class='row its'>
                <li class=\"partner-item col-lg-4\">
                  <a href=\"\"><img src=\"/img/3-2.png\"></a>
                </li>
                <li class=\"partner-item col-lg-4\">
                  <a href=\"\"><img src=\"/img/3-4.png\"></a>
                </li>
                <li class=\"partner-item col-lg-4\">
                  <a href=\"\"><img src=\"/img/3-5.png\"></a>
                </li>
                <li class=\"partner-item col-lg-4\">
                  <a href=\"\"><img src=\"/img/3-5.png\"></a>
                </li>
                <li class=\"partner-item col-lg-4\">
                  <a href=\"\"><img src=\"/img/3-4.png\"></a>
                </li>
              </ul>
            </div>
          </div>

          <div class=\"carousel-item\">
            <div class=\"container\">
              <ul class='row its'>
                <li class=\"partner-item col-lg-4\">
                  <a href=\"\"><img src=\"/img/3-2.png\"></a>
                </li>
                <li class=\"partner-item col-lg-4\">
                  <a href=\"\"><img src=\"/img/3-2.png\"></a>
                </li>
                <li class=\"partner-item col-lg-4\">
                  <a href=\"\"><img src=\"/img/3-2.png\"></a>
                </li>
                <li class=\"partner-item col-lg-4\">
                  <a href=\"\"><img src=\"/img/3-2.png\"></a>
                </li>
                <li class=\"partner-item col-lg-4\">
                  <a href=\"\"><img src=\"/img/3-2.png\"></a>
                </li>
              </ul>
            </div>
          </div>

          <div class=\"carousel-item\">
            <div class=\"container\">
              <ul class='row its'>
                <li class=\"partner-item col-lg-4\">
                  <a href=\"\"><img src=\"/img/3-4.png\"></a>
                </li>
                <li class=\"partner-item col-lg-4\">
                  <a href=\"\"><img src=\"/img/3-4.png\"></a>
                </li>
                <li class=\"partner-item col-lg-4\">
                  <a href=\"\"><img src=\"/img/3-4.png\"></a>
                </li>
                <li class=\"partner-item col-lg-4\">
                  <a href=\"\"><img src=\"/img/3-4.png\"></a>
                </li>
                <li class=\"partner-item col-lg-4\">
                  <a href=\"\"><img src=\"/img/3-4.png\"></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id=\"p_benefits\">
  <div class=\"container\">
    <h2>{{ whyUsBlock.name }}</h2>
    <ul class='row'>
      <li class=\"item col-lg-6\">
        <a href=\"\">
          <div class=\"inside\">
            <img src=\"/img/courthouse.svg\">
            <div class=\"shadow\"></div>
            <h3>Benefit #1</h3>
            <p class='ptext'>
              People like a “special” price or exclusive offer directed only to them.
            </p>
          </div>
        </a>
      </li>
      <li class=\"item col-lg-6\">
        <a href=\"\">
          <div class=\"inside\">
            <img src=\"/img/libra.svg\">
            <div class=\"shadow\"></div>
            <h3>Benefit #2</h3>
            <p class='ptext'>
              People like a “special” price or exclusive offer directed only to them.
            </p>
          </div>
        </a>
      </li>
      <li class=\"item col-lg-6\">
        <a href=\"\">
          <div class=\"inside\">
            <img src=\"/img/portfolio.svg\">
            <div class=\"shadow\"></div>
            <h3>Benefit #3</h3>
            <p class='ptext'>
              People like a “special” price or exclusive offer directed only to them.
            </p>
          </div>
        </a>
      </li>
      <li class=\"item col-lg-6\">
        <a href=\"\">
          <div class=\"inside\">
            <img src=\"/img/agreement.svg\">
            <div class=\"shadow\"></div>
            <h3>Benefit #4</h3>
            <p class='ptext'>
              People like a “special” price or exclusive offer directed only to them.
            </p>
          </div>
        </a>
      </li>
    </ul>
    <p class='bot'><a href=\"\"><span class=\"pbtn\">contact us</span></a></p>
  </div>
</section>
", "AppBundle:App:main.static.html.twig", "/home/szpaklabs/work/projects/sharovalaw-com/src/AppBundle/Resources/views/App/main.static.html.twig");
    }
}
