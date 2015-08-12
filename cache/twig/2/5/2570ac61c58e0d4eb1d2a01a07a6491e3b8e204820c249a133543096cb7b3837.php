<?php

/* partials/javascript-config.html.twig */
class __TwigTemplate_2570ac61c58e0d4eb1d2a01a07a6491e3b8e204820c249a133543096cb7b3837 extends Twig_Template
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
        echo "<script type=\"text/javascript\">
\twindow.GravAdmin = window.GravAdmin || {};
\twindow.GravAdmin.config = {
\t\tbase_url_relative: '";
        // line 4
        echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
        echo "',
    param_sep: '";
        // line 5
        echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array());
        echo "'
\t};
</script>
";
    }

    public function getTemplateName()
    {
        return "partials/javascript-config.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 5,  24 => 4,  19 => 1,);
    }
}
