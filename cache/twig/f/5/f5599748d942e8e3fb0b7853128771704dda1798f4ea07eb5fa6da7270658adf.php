<?php

/* partials/plugins-list.html.twig */
class __TwigTemplate_f5599748d942e8e3fb0b7853128771704dda1798f4ea07eb5fa6da7270658adf extends Twig_Template
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
        echo "<div class=\"grav-update plugins\"></div>

<h1>
    ";
        // line 4
        echo (((isset($context["installing"]) ? $context["installing"] : null)) ? ("Available") : ("Installed"));
        echo "  Plugins
</h1>

<table>
    ";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "plugins", array(0 =>  !(isset($context["installing"]) ? $context["installing"] : null)), "method"));
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
        foreach ($context['_seq'] as $context["slug"] => $context["package"]) {
            // line 9
            echo "        ";
            $context["plugin"] = $this->getAttribute($context["package"], "toArray", array(), "method");
            // line 10
            echo "        ";
            $context["data"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "data", array(0 => ("plugins/" . $context["slug"])), "method");
            // line 11
            echo "
        <tr data-gpm-plugin=\"";
            // line 12
            echo twig_urlencode_filter($context["slug"]);
            echo "\">
            <td class=\"gpm-name\">
                <i class=\"fa fa-fw fa-";
            // line 14
            echo $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "icon", array());
            echo "\"></i>
                <a href=\"";
            // line 15
            echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
            echo "/plugins/";
            echo twig_urlencode_filter($context["slug"]);
            echo "\">";
            echo $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "name", array());
            echo "</a>
                ";
            // line 16
            if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "isTeamGrav", array(0 => (isset($context["plugin"]) ? $context["plugin"] : null)), "method")) {
                // line 17
                echo "                    <small><span class=\"info-reverse\"><i class=\"fa fa-check-circle\" title=\"Grav Official Plugin\"></i></span></small>
                ";
            }
            // line 19
            echo "                ";
            if ($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "symlink", array())) {
                // line 20
                echo "                <span class=\"hint--bottom\"  data-hint=\"This plugin is symbolically linked. Updates won't be detected.\">
                    <i class=\"fa fa-fw fa-link\"></i>
                </span>
                ";
            }
            // line 24
            echo "                <span class=\"gpm-version\">v";
            echo $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "version", array());
            echo "</span>
            </td>
            <td class=\"gpm-actions\">
                ";
            // line 27
            if ((( !(isset($context["installing"]) ? $context["installing"] : null) && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "form", array()), "fields", array()), "enabled", array())) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "form", array()), "fields", array()), "enabled", array()), "type", array()) != "hidden"))) {
                // line 28
                echo "                    <a class=\"";
                echo (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "get", array(0 => "enabled"), "method")) ? ("enabled") : ("disabled"));
                echo "\" href=\"";
                echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
                echo "/plugins/";
                echo $context["slug"];
                echo "/task";
                echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array());
                echo (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "get", array(0 => "enabled"), "method")) ? ("disable") : ("enable"));
                echo "\">
                        <i class=\"fa fa-fw fa-toggle-";
                // line 29
                echo (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "get", array(0 => "enabled"), "method")) ? ("on") : ("off"));
                echo "\"></i>
                    </a>
                ";
            } elseif (            // line 31
(isset($context["installing"]) ? $context["installing"] : null)) {
                // line 32
                echo "                    <a class=\"button\" href=\"";
                echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
                echo "/plugins/";
                echo $context["slug"];
                echo "/task";
                echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array());
                echo "install\"><i class=\"fa fa-plus\"></i> Install</a>
                ";
            }
            // line 34
            echo "                <span class=\"gpm-details-expand\"><i class=\"fa fa-chevron-down\"></i></span>
            </td>
            <td class=\"gpm-details\">
                <div class=\"table-wrapper\">
                    ";
            // line 38
            $this->loadTemplate("partials/plugin-data.html.twig", "partials/plugins-list.html.twig", 38)->display(array_merge($context, array("plugin" => (isset($context["plugin"]) ? $context["plugin"] : null))));
            // line 39
            echo "                </div>
            </td>
        </tr>
    ";
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
        unset($context['_seq'], $context['_iterated'], $context['slug'], $context['package'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "</table>
";
    }

    public function getTemplateName()
    {
        return "partials/plugins-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 43,  135 => 39,  133 => 38,  127 => 34,  117 => 32,  115 => 31,  110 => 29,  98 => 28,  96 => 27,  89 => 24,  83 => 20,  80 => 19,  76 => 17,  74 => 16,  66 => 15,  62 => 14,  57 => 12,  54 => 11,  51 => 10,  48 => 9,  31 => 8,  24 => 4,  19 => 1,);
    }
}
