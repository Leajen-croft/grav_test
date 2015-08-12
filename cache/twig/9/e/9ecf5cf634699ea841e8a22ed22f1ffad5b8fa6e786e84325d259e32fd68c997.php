<?php

/* forms/fields/toggle/toggle.html.twig */
class __TwigTemplate_9ecf5cf634699ea841e8a22ed22f1ffad5b8fa6e786e84325d259e32fd68c997 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/toggle/toggle.html.twig", 1);
        $this->blocks = array(
            'global_attributes' => array($this, 'block_global_attributes'),
            'input' => array($this, 'block_input'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "forms/field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["value"] = (((null === (isset($context["value"]) ? $context["value"] : null))) ? ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "default", array())) : ((isset($context["value"]) ? $context["value"] : null)));
        // line 4
        $context["value"] = ((((isset($context["value"]) ? $context["value"] : null) === false)) ? (0) : ((isset($context["value"]) ? $context["value"] : null)));
        // line 6
        $context["has_hidden"] = false;
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "options", array()));
        foreach ($context['_seq'] as $context["key"] => $context["text"]) {
            // line 8
            if (twig_test_empty($context["key"])) {
                // line 9
                $context["has_hidden"] = true;
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['text'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_global_attributes($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        $this->displayParentBlock("global_attributes", $context, $blocks);
        echo "
    data-grav-field-name=\"";
        // line 15
        echo $this->env->getExtension('GravTwigExtension')->fieldNameFilter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array()));
        echo "\"
";
    }

    // line 18
    public function block_input($context, array $blocks = array())
    {
        // line 19
        echo "
    <div class=\"switch-toggle switch-grav ";
        // line 20
        echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "size", array());
        echo " switch-";
        echo twig_length_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "options", array()));
        echo "\">
        ";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "options", array()));
        foreach ($context['_seq'] as $context["key"] => $context["text"]) {
            // line 22
            echo "            ";
            $context["id"] = (("toggle_" . $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array())) . $context["key"]);
            // line 23
            echo "
            <input type=\"radio\"
                   value=\"";
            // line 25
            echo $context["key"];
            echo "\"
                   id=\"";
            // line 26
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "\"
                   name=\"";
            // line 27
            echo $this->env->getExtension('GravTwigExtension')->fieldNameFilter(((isset($context["scope"]) ? $context["scope"] : null) . $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array())));
            echo "\"
                   ";
            // line 28
            if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "highlight", array(), "any", true, true)) {
                // line 29
                echo "                   class=\"";
                echo ((($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "highlight", array()) == ("" . $context["key"]))) ? ("highlight") : (""));
                echo "\"
                   ";
            }
            // line 31
            echo "                   ";
            if ((("" . $context["key"]) == ("" . (isset($context["value"]) ? $context["value"] : null)))) {
                echo "checked=\"checked\" ";
            }
            // line 32
            echo "                   ";
            if ((array_key_exists("value", $context) && (($context["key"] == 1) || ($context["key"] == "1")))) {
                echo "checked=\"checked\" ";
            }
            // line 33
            echo "                   ";
            if (twig_in_filter($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "validate", array()), "required", array()), array(0 => "on", 1 => "true", 2 => 1))) {
                echo "required=\"required\"";
            }
            // line 34
            echo "            />
            <label for=\"";
            // line 35
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "\">";
            echo $context["text"];
            echo "</label>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['text'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        <a></a>
    </div>
";
    }

    public function getTemplateName()
    {
        return "forms/fields/toggle/toggle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 37,  124 => 35,  121 => 34,  116 => 33,  111 => 32,  106 => 31,  100 => 29,  98 => 28,  94 => 27,  90 => 26,  86 => 25,  82 => 23,  79 => 22,  75 => 21,  69 => 20,  66 => 19,  63 => 18,  57 => 15,  52 => 14,  49 => 13,  45 => 1,  38 => 9,  36 => 8,  32 => 7,  30 => 6,  28 => 4,  26 => 3,  11 => 1,);
    }
}
