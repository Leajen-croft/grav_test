<?php

/* plugins.html.twig */
class __TwigTemplate_567833ca83ad76b81316b74973254e30afc2f07daf01149dfc152253135146b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "plugins.html.twig", 1);
        $this->blocks = array(
            'titlebar' => array($this, 'block_titlebar'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array())) {
            // line 4
            $context["installing"] = (is_string($__internal_43130f3de1a263dc36f9512bda28952d8871d28ea3932f992930fbf542295f69 = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array())) && is_string($__internal_8d49ca90785b78042cd7a2d680d13856ebf594dafa21c407c27e7179cd6c903f = "install") && ('' === $__internal_8d49ca90785b78042cd7a2d680d13856ebf594dafa21c407c27e7179cd6c903f || 0 === strpos($__internal_43130f3de1a263dc36f9512bda28952d8871d28ea3932f992930fbf542295f69, $__internal_8d49ca90785b78042cd7a2d680d13856ebf594dafa21c407c27e7179cd6c903f)));
            // line 5
            $context["installed"] = true;
            // line 8
            $context["package"] = $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "plugins", array(0 => true), "method"), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array()), array(), "array");
            // line 9
            if ( !(isset($context["package"]) ? $context["package"] : null)) {
                // line 10
                $context["package"] = $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "plugins", array(0 => false), "method"), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array()), array(), "array");
                // line 11
                $context["installed"] = false;
            }
            // line 14
            $context["plugin"] = $this->getAttribute((isset($context["package"]) ? $context["package"] : null), "toArray", array(), "method");
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 17
    public function block_titlebar($context, array $blocks = array())
    {
        // line 18
        echo "    ";
        if (( !$this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array()) || (isset($context["installing"]) ? $context["installing"] : null))) {
            // line 19
            echo "        <div class=\"button-bar\">
        ";
            // line 20
            if ((isset($context["installing"]) ? $context["installing"] : null)) {
                // line 21
                echo "            <a class=\"button\" href=\"";
                echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
                echo "/plugins\"><i class=\"fa fa-reply\"></i> Back</a>
        ";
            } else {
                // line 23
                echo "            <a class=\"button\" href=\"";
                echo (isset($context["base_url"]) ? $context["base_url"] : null);
                echo "\"><i class=\"fa fa-reply\"></i> Back</a>
            <a class=\"button\" href=\"";
                // line 24
                echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
                echo "/plugins/install\"><i class=\"fa fa-plus\"></i> Add</a>
            <button data-gpm-checkupdates=\"\" class=\"button\"><i class=\"fa fa-refresh\"></i> Check for Updates</button>
        ";
            }
            // line 27
            echo "        </div>
        <h1><i class=\"fa fa-fw fa-plug\"></i> Plugins</h1>
    ";
        } else {
            // line 30
            echo "        ";
            if ((isset($context["installed"]) ? $context["installed"] : null)) {
                // line 31
                echo "        <div class=\"button-bar\">
            <a class=\"button\" href=\"";
                // line 32
                echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
                echo "/plugins\"><i class=\"fa fa-arrow-left\"></i> Back to Plugins</a>
            <button class=\"button\" type=\"submit\" name=\"task\" value=\"save\" form=\"blueprints\"><i class=\"fa fa-check\"></i> Save</button>
        </div>
        ";
            } else {
                // line 36
                echo "        <div class=\"button-bar\">
            <a class=\"button\" href=\"";
                // line 37
                echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
                echo "/plugins/install\"><i class=\"fa fa-arrow-left\"></i> Back to Plugins</a>
        </div>
        ";
            }
            // line 40
            echo "
        <h1><i class=\"fa fa-fw fa-plug\"></i> Plugin: ";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "name", array()));
            echo "</h1>

    ";
        }
    }

    // line 46
    public function block_content($context, array $blocks = array())
    {
        // line 47
        echo "
    <div class=\"gpm gpm-plugins\">

        ";
        // line 50
        $this->loadTemplate("partials/messages.html.twig", "plugins.html.twig", 50)->display($context);
        // line 51
        echo "
        ";
        // line 52
        if (( !$this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array()) || (isset($context["installing"]) ? $context["installing"] : null))) {
            // line 53
            echo "            ";
            $this->loadTemplate("partials/plugins-list.html.twig", "plugins.html.twig", 53)->display($context);
            // line 54
            echo "        ";
        } else {
            // line 55
            echo "            ";
            $this->loadTemplate("partials/plugins-details.html.twig", "plugins.html.twig", 55)->display($context);
            // line 56
            echo "        ";
        }
        // line 57
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "plugins.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 57,  138 => 56,  135 => 55,  132 => 54,  129 => 53,  127 => 52,  124 => 51,  122 => 50,  117 => 47,  114 => 46,  106 => 41,  103 => 40,  97 => 37,  94 => 36,  87 => 32,  84 => 31,  81 => 30,  76 => 27,  70 => 24,  65 => 23,  59 => 21,  57 => 20,  54 => 19,  51 => 18,  48 => 17,  44 => 1,  41 => 14,  38 => 11,  36 => 10,  34 => 9,  32 => 8,  30 => 5,  28 => 4,  26 => 3,  11 => 1,);
    }
}
