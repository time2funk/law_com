<?php

/* default/parallax.html.twig */
class __TwigTemplate_7e8eaa343b85461c9408fdaacbae527d78c4b572c36bda7eb71b25764a8b2b87 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'parallax' => array($this, 'block_parallax'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('parallax', $context, $blocks);
    }

    public function block_parallax($context, array $blocks = array())
    {
        // line 2
        echo "<script>
\t// (function( \$ ){
\t\t\$(document).ready(function(){
\t\tvar \$window = \$(window);
\t\tvar windowHeight = \$window.height();

\t\t\$window.resize(function () {
\t\t\twindowHeight = \$window.height();
\t\t});

\t\t\$.fn.parallax = function(xpos, speedFactor, outerHeight) {
\t\t\tvar \$this = \$(this);
\t\t\tvar getHeight;
\t\t\tvar firstTop;
\t\t\tvar paddingTop = 0;

\t\t\t//get the starting position of each element to have parallax applied to it
\t\t\t\$this.each(function(){
\t\t\t    firstTop = \$this.offset().top;
\t\t\t});

\t\t\tif (outerHeight) {
\t\t\t\tgetHeight = function(jqo) {
\t\t\t\t\treturn jqo.outerHeight(true);
\t\t\t\t};
\t\t\t} else {
\t\t\t\tgetHeight = function(jqo) {
\t\t\t\t\treturn jqo.height();
\t\t\t\t};
\t\t\t}

\t\t\t// setup defaults if arguments aren't specified
\t\t\tif (arguments.length < 1 || xpos === null) xpos = \"50%\";
\t\t\tif (arguments.length < 2 || speedFactor === null) speedFactor = 0.1;
\t\t\tif (arguments.length < 3 || outerHeight === null) outerHeight = true;

\t// xpos

\t\t\t// function to be called whenever the window is scrolled or resized
\t\t\tfunction update(){
\t\t\t\tvar pos = \$window.scrollTop();

\t\t\t\t\$this.each(function(){
\t\t\t\t\tvar \$element = \$(this);
\t\t\t\t\tvar top = \$element.offset().top;
\t\t\t\t\tvar height = getHeight(\$element);

\t\t\t\t\t// Check if totally above or totally below viewport
\t\t\t\t\tif (top + height < pos || top > pos + windowHeight) {
\t\t\t\t\t\treturn;
\t\t\t\t\t}

\t\t\t\t\t// \$this.css('backgroundPosition', xpos + \" \" + Math.round((firstTop - pos) * speedFactor) + \"px\");
\t\t\t\t\tvar sign;
\t\t\t\t\t(xpos == \"bottom\") ? sign = -1 : sign = 1;

\t\t\t\t\t\$this.css(xpos, Math.round((pos) * speedFactor * sign) + \"px\");
\t\t\t\t});
\t\t\t}

\t\t\t\$window.bind('scroll', update).resize(update);
\t\t\tupdate();
\t\t};
\t// })(jQuery);


\t\t\tconsole.log('parallax');
\t\t\t// \$('#parallax div.pback').parallax(\"top\", -0.1);
\t\t\t\$('#parallax div.overlay').parallax(\"bottom\", 0.4);
\t\t\t\$('#parallax div.ptext').parallax(\"top\", 0.5);
\t});
</script>
";
    }

    public function getTemplateName()
    {
        return "default/parallax.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block parallax %}
<script>
\t// (function( \$ ){
\t\t\$(document).ready(function(){
\t\tvar \$window = \$(window);
\t\tvar windowHeight = \$window.height();

\t\t\$window.resize(function () {
\t\t\twindowHeight = \$window.height();
\t\t});

\t\t\$.fn.parallax = function(xpos, speedFactor, outerHeight) {
\t\t\tvar \$this = \$(this);
\t\t\tvar getHeight;
\t\t\tvar firstTop;
\t\t\tvar paddingTop = 0;

\t\t\t//get the starting position of each element to have parallax applied to it
\t\t\t\$this.each(function(){
\t\t\t    firstTop = \$this.offset().top;
\t\t\t});

\t\t\tif (outerHeight) {
\t\t\t\tgetHeight = function(jqo) {
\t\t\t\t\treturn jqo.outerHeight(true);
\t\t\t\t};
\t\t\t} else {
\t\t\t\tgetHeight = function(jqo) {
\t\t\t\t\treturn jqo.height();
\t\t\t\t};
\t\t\t}

\t\t\t// setup defaults if arguments aren't specified
\t\t\tif (arguments.length < 1 || xpos === null) xpos = \"50%\";
\t\t\tif (arguments.length < 2 || speedFactor === null) speedFactor = 0.1;
\t\t\tif (arguments.length < 3 || outerHeight === null) outerHeight = true;

\t// xpos

\t\t\t// function to be called whenever the window is scrolled or resized
\t\t\tfunction update(){
\t\t\t\tvar pos = \$window.scrollTop();

\t\t\t\t\$this.each(function(){
\t\t\t\t\tvar \$element = \$(this);
\t\t\t\t\tvar top = \$element.offset().top;
\t\t\t\t\tvar height = getHeight(\$element);

\t\t\t\t\t// Check if totally above or totally below viewport
\t\t\t\t\tif (top + height < pos || top > pos + windowHeight) {
\t\t\t\t\t\treturn;
\t\t\t\t\t}

\t\t\t\t\t// \$this.css('backgroundPosition', xpos + \" \" + Math.round((firstTop - pos) * speedFactor) + \"px\");
\t\t\t\t\tvar sign;
\t\t\t\t\t(xpos == \"bottom\") ? sign = -1 : sign = 1;

\t\t\t\t\t\$this.css(xpos, Math.round((pos) * speedFactor * sign) + \"px\");
\t\t\t\t});
\t\t\t}

\t\t\t\$window.bind('scroll', update).resize(update);
\t\t\tupdate();
\t\t};
\t// })(jQuery);


\t\t\tconsole.log('parallax');
\t\t\t// \$('#parallax div.pback').parallax(\"top\", -0.1);
\t\t\t\$('#parallax div.overlay').parallax(\"bottom\", 0.4);
\t\t\t\$('#parallax div.ptext').parallax(\"top\", 0.5);
\t});
</script>
{% endblock %}
", "default/parallax.html.twig", "/home/szpaklabs/work/projects/sharovalaw-com/app/Resources/views/default/parallax.html.twig");
    }
}
