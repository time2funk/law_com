<?php

/* default/fb.html.twig */
class __TwigTemplate_49f532971cdacb3adb805d1a89443e3288f673dfea1eec58ef9845de7dbf6b69 extends Twig_Template
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
        echo "<div class=\"fb\">
\t<div
\tclass=\"fb-like\"
\tdata-share=\"true\"
\tdata-width=\"450\"
\tdata-show-faces=\"false\">
\t</div>
\t<div>
\t\t<a href=\"https://twitter.com/sharova_law\" class=\"twitter-follow-button\" data-lang=\"en\" data-show-count=\"false\">@sharova_law</a>
\t\t<script async src=\"//platform.twitter.com/widgets.js\" charset=\"utf-8\"></script>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "default/fb.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"fb\">
\t<div
\tclass=\"fb-like\"
\tdata-share=\"true\"
\tdata-width=\"450\"
\tdata-show-faces=\"false\">
\t</div>
\t<div>
\t\t<a href=\"https://twitter.com/sharova_law\" class=\"twitter-follow-button\" data-lang=\"en\" data-show-count=\"false\">@sharova_law</a>
\t\t<script async src=\"//platform.twitter.com/widgets.js\" charset=\"utf-8\"></script>
\t</div>
</div>
", "default/fb.html.twig", "/home/szpaklabs/work/projects/sharovalaw-com/app/Resources/views/default/fb.html.twig");
    }
}
