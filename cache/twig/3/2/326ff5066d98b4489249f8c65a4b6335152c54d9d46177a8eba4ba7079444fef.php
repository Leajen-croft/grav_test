<?php

/* forms/field.html.twig */
class __TwigTemplate_326ff5066d98b4489249f8c65a4b6335152c54d9d46177a8eba4ba7079444fef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field' => array($this, 'block_field'),
            'contents' => array($this, 'block_contents'),
            'label' => array($this, 'block_label'),
            'global_attributes' => array($this, 'block_global_attributes'),
            'group' => array($this, 'block_group'),
            'input' => array($this, 'block_input'),
            'input_attributes' => array($this, 'block_input_attributes'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["originalValue"] = ((array_key_exists("originalValue", $context)) ? ((isset($context["originalValue"]) ? $context["originalValue"] : null)) : ((isset($context["value"]) ? $context["value"] : null)));
        // line 2
        $context["value"] = (((null === (isset($context["value"]) ? $context["value"] : null))) ? ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "default", array())) : ((isset($context["value"]) ? $context["value"] : null)));
        // line 3
        $context["vertical"] = ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "style", array()) == "vertical");
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('field', $context, $blocks);
    }

    public function block_field($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"form-field grid";
        if ((isset($context["vertical"]) ? $context["vertical"] : null)) {
            echo " vertical";
        }
        echo "\">
        ";
        // line 7
        $this->displayBlock('contents', $context, $blocks);
        // line 67
        echo "    </div>
";
    }

    // line 7
    public function block_contents($context, array $blocks = array())
    {
        // line 8
        echo "            <div class=\"form-label";
        if ( !(isset($context["vertical"]) ? $context["vertical"] : null)) {
            echo " block size-1-3";
        }
        echo "\">
                ";
        // line 9
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "toggleable", array())) {
            // line 10
            echo "                    <span class=\"checkboxes toggleable\" data-grav-field=\"toggleable\" data-grav-field-name=\"";
            echo $this->env->getExtension('GravTwigExtension')->fieldNameFilter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array()));
            echo "\">
                        <input type=\"checkbox\"
                               id=\"toggleable_";
            // line 12
            echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array());
            echo "\"
                               ";
            // line 13
            if (( !(null === (isset($context["originalValue"]) ? $context["originalValue"] : null)) &&  !twig_test_empty((isset($context["originalValue"]) ? $context["originalValue"] : null)))) {
                echo "value=\"1\"";
            }
            // line 14
            echo "                               name=\"toggleable_";
            echo $this->env->getExtension('GravTwigExtension')->fieldNameFilter(((isset($context["scope"]) ? $context["scope"] : null) . $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array())));
            echo "\"
                               ";
            // line 15
            if (( !(null === (isset($context["originalValue"]) ? $context["originalValue"] : null)) &&  !twig_test_empty((isset($context["originalValue"]) ? $context["originalValue"] : null)))) {
                echo "checked=\"checked\"";
            }
            // line 16
            echo "                        >
                        <label for=\"toggleable_";
            // line 17
            echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array());
            echo "\"></label>
                    </span>
                ";
        }
        // line 20
        echo "                <label class=\"";
        echo (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "toggleable", array())) ? ("toggleable") : (""));
        echo "\">
                ";
        // line 21
        $this->displayBlock('label', $context, $blocks);
        // line 29
        echo "                </label>
            </div>
            <div class=\"form-data";
        // line 31
        if ( !(isset($context["vertical"]) ? $context["vertical"] : null)) {
            echo " block size-2-3";
        }
        echo "\"
                ";
        // line 32
        $this->displayBlock('global_attributes', $context, $blocks);
        // line 37
        echo "            >
                ";
        // line 38
        $this->displayBlock('group', $context, $blocks);
        // line 65
        echo "            </div>
        ";
    }

    // line 21
    public function block_label($context, array $blocks = array())
    {
        // line 22
        echo "                    ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "help", array())) {
            // line 23
            echo "                    <span class=\"hint--bottom\" data-hint=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "help", array()));
            echo "\">";
            echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array());
            echo "</span>
                    ";
        } else {
            // line 25
            echo "                    ";
            echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array());
            echo "
                    ";
        }
        // line 27
        echo "                    ";
        echo ((twig_in_filter($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "validate", array()), "required", array()), array(0 => "on", 1 => "true", 2 => 1))) ? ("<span class=\"required\">*</span>") : (""));
        echo "
                ";
    }

    // line 32
    public function block_global_attributes($context, array $blocks = array())
    {
        // line 33
        echo "                data-grav-field=\"";
        echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "type", array());
        echo "\"
                data-grav-disabled=\"";
        // line 34
        echo (((null === (isset($context["originalValue"]) ? $context["originalValue"] : null))) ? ("true") : ("false"));
        echo "\"
                data-grav-default=\"";
        // line 35
        echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "default", array())), "html_attr");
        echo "\"
                ";
    }

    // line 38
    public function block_group($context, array $blocks = array())
    {
        // line 39
        echo "                    ";
        $this->displayBlock('input', $context, $blocks);
        // line 64
        echo "                ";
    }

    // line 39
    public function block_input($context, array $blocks = array())
    {
        // line 40
        echo "                        <div class=\"form-input-wrapper ";
        echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "size", array());
        echo "\">
                            <input
                                ";
        // line 43
        echo "                                name=\"";
        echo $this->env->getExtension('GravTwigExtension')->fieldNameFilter(((isset($context["scope"]) ? $context["scope"] : null) . $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array())));
        echo "\"
                                value=\"";
        // line 44
        echo twig_join_filter((isset($context["value"]) ? $context["value"] : null), ", ");
        echo "\"
                                ";
        // line 46
        echo "                                ";
        $this->displayBlock('input_attributes', $context, $blocks);
        // line 61
        echo "                                />
                        </div>
                    ";
    }

    // line 46
    public function block_input_attributes($context, array $blocks = array())
    {
        // line 47
        echo "                                    ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "classes", array(), "any", true, true)) {
            echo "class=\"";
            echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "classes", array());
            echo "\" ";
        }
        // line 48
        echo "                                    ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "id", array(), "any", true, true)) {
            echo "id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "id", array()));
            echo "\" ";
        }
        // line 49
        echo "                                    ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "style", array(), "any", true, true)) {
            echo "style=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "style", array()));
            echo "\" ";
        }
        // line 50
        echo "                                    ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "disabled", array())) {
            echo "disabled=\"disabled\"";
        }
        // line 51
        echo "                                    ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "placeholder", array())) {
            echo "placeholder=\"";
            echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "placeholder", array());
            echo "\"";
        }
        // line 52
        echo "                                    ";
        if (twig_in_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "autofocus", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "autofocus=\"autofocus\"";
        }
        // line 53
        echo "                                    ";
        if (twig_in_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "novalidate", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "novalidate=\"novalidate\"";
        }
        // line 54
        echo "                                    ";
        if (twig_in_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "readonly", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "readonly=\"readonly\"";
        }
        // line 55
        echo "                                    ";
        if (twig_in_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "autocomplete", array()), array(0 => "on", 1 => "off"))) {
            echo "autocomplete=\"";
            echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "autocomplete", array());
            echo "\"";
        }
        // line 56
        echo "                                    ";
        if (twig_in_filter($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "validate", array()), "required", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "required=\"required\"";
        }
        // line 57
        echo "                                    ";
        if ($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "validate", array()), "pattern", array())) {
            echo "pattern=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "validate", array()), "pattern", array());
            echo "\"";
        }
        // line 58
        echo "                                    ";
        if ($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "validate", array()), "message", array())) {
            echo "title=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "validate", array()), "message", array());
            echo "\"
                                    ";
        } elseif ($this->getAttribute(        // line 59
(isset($context["field"]) ? $context["field"] : null), "title", array(), "any", true, true)) {
            echo "title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "title", array()));
            echo "\" ";
        }
        // line 60
        echo "                                ";
    }

    public function getTemplateName()
    {
        return "forms/field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  293 => 60,  287 => 59,  280 => 58,  273 => 57,  268 => 56,  261 => 55,  256 => 54,  251 => 53,  246 => 52,  239 => 51,  234 => 50,  227 => 49,  220 => 48,  213 => 47,  210 => 46,  204 => 61,  201 => 46,  197 => 44,  192 => 43,  186 => 40,  183 => 39,  179 => 64,  176 => 39,  173 => 38,  167 => 35,  163 => 34,  158 => 33,  155 => 32,  148 => 27,  142 => 25,  134 => 23,  131 => 22,  128 => 21,  123 => 65,  121 => 38,  118 => 37,  116 => 32,  110 => 31,  106 => 29,  104 => 21,  99 => 20,  93 => 17,  90 => 16,  86 => 15,  81 => 14,  77 => 13,  73 => 12,  67 => 10,  65 => 9,  58 => 8,  55 => 7,  50 => 67,  48 => 7,  41 => 6,  35 => 5,  32 => 4,  30 => 3,  28 => 2,  26 => 1,);
    }
}
