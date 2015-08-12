<?php

/* forms/fields/section/section.html.twig */
class __TwigTemplate_4e23920542fc080ab200f386ec7bdbbbde6b824f69fabf5afa3a969a9041926b extends Twig_Template
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
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "title", array())) {
            // line 2
            echo "<h1 ";
            if ( !$this->getAttribute((isset($context["field"]) ? $context["field"] : null), "underline", array())) {
                echo "class=\"no_underline\"";
            }
            echo ">";
            echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "title", array());
            echo "</h1>
";
        }
        // line 4
        echo "
";
        // line 5
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "text", array())) {
            // line 6
            echo "<p>";
            echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "text", array());
            echo "<p>
";
        }
        // line 8
        echo "
";
        // line 9
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "fields", array())) {
            // line 10
            echo "    <div class=\"form-section\">
    ";
            // line 11
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["field"], "fields", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 12
                echo "        ";
                if ($this->getAttribute($context["field"], "type", array())) {
                    // line 13
                    echo "            ";
                    $context["value"] = $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "value", array(0 => $this->getAttribute($context["field"], "name", array())), "method");
                    // line 14
                    echo "            ";
                    $this->loadTemplate(array(0 => (((("forms/fields/" . $this->getAttribute($context["field"], "type", array())) . "/") . $this->getAttribute($context["field"], "type", array())) . ".html.twig"), 1 => "forms/fields/text/text.html.twig"), "forms/fields/section/section.html.twig", 14)->display($context);
                    // line 15
                    echo "        ";
                }
                // line 16
                echo "    ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "forms/fields/section/section.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 17,  79 => 16,  76 => 15,  73 => 14,  70 => 13,  67 => 12,  50 => 11,  47 => 10,  45 => 9,  42 => 8,  36 => 6,  34 => 5,  31 => 4,  21 => 2,  19 => 1,);
    }
}
