<?php

/* partials/plugin-data.html.twig */
class __TwigTemplate_f1f8e9389e22098c73e46750fb0ca10592fe8e22c8bf9c2ddd9369816ba7e03e extends Twig_Template
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
        echo "<table>
    ";
        // line 2
        if ($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "author", array())) {
            // line 3
            echo "    <tr>
        <td>Author:</td>
        <td>
            ";
            // line 6
            if ($this->getAttribute($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "author", array()), "url", array())) {
                // line 7
                echo "                <a href=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "author", array()), "url", array());
                echo "\" target=\"_blank\">";
                echo $this->getAttribute($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "author", array()), "name", array());
                echo "</a>
            ";
            } else {
                // line 9
                echo "                ";
                echo $this->getAttribute($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "author", array()), "name", array());
                echo "
            ";
            }
            // line 11
            echo "            ";
            if ($this->getAttribute($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "author", array()), "email", array())) {
                // line 12
                echo "                - <a href=\"mailto:";
                echo $this->getAttribute($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "author", array()), "email", array());
                echo "\">";
                echo $this->getAttribute($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "author", array()), "email", array());
                echo "</a>
            ";
            }
            // line 14
            echo "        </td>
    </tr>
    ";
        }
        // line 17
        echo "    ";
        if ($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "homepage", array())) {
            // line 18
            echo "        <tr>
            <td>Homepage:</td>
            <td><a href=\"";
            // line 20
            echo $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "homepage", array());
            echo "\" target=\"_blank\">";
            echo $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "homepage", array());
            echo "</a></td>
        </tr>
    ";
        }
        // line 23
        echo "    ";
        if ($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "demo", array())) {
            // line 24
            echo "        <tr>
            <td>Demo:</td>
            <td><a href=\"";
            // line 26
            echo $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "demo", array());
            echo "\" target=\"_blank\">";
            echo $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "demo", array());
            echo "</a></td>
        </tr>
    ";
        }
        // line 29
        echo "    ";
        if ($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "bugs", array())) {
            // line 30
            echo "        <tr>
            <td>Bug Tracker:</td>
            <td><a href=\"";
            // line 32
            echo $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "bugs", array());
            echo "\" target=\"_blank\">";
            echo $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "bugs", array());
            echo "</a></td>
        </tr>
    ";
        }
        // line 35
        echo "    ";
        if ($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "keywords", array())) {
            // line 36
            echo "        <tr>
            <td>Keywords:</td>
            <td>";
            // line 38
            echo twig_join_filter($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "keywords", array()), ", ");
            echo "</td>
        </tr>
    ";
        }
        // line 41
        echo "    ";
        if ($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "license", array())) {
            // line 42
            echo "        <tr>
            <td>License:</td>
            <td>";
            // line 44
            echo $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "license", array());
            echo "</td>
        </tr>
    ";
        }
        // line 47
        echo "
    ";
        // line 48
        if ($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "description", array())) {
            // line 49
            echo "        <tr>
            <td>Description:</td>
            <td>";
            // line 51
            echo $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "description_html", array());
            echo "</td>
        </tr>
    ";
        }
        // line 54
        echo "
    ";
        // line 55
        if (($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "readme", array()) || $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "homepage", array()))) {
            // line 56
            echo "        ";
            $context["readme_link"] = (($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "readme", array())) ? ($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "readme", array())) : (($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "homepage", array()) . "/blob/develop/README.md")));
            // line 57
            echo "        <tr>
            <td>Readme:</td>
            <td><a href=\"";
            // line 59
            echo (isset($context["readme_link"]) ? $context["readme_link"] : null);
            echo "\" target=\"_blank\">";
            echo (isset($context["readme_link"]) ? $context["readme_link"] : null);
            echo "</a></td>
        </tr>
    ";
        }
        // line 62
        echo "
</table>
";
    }

    public function getTemplateName()
    {
        return "partials/plugin-data.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 62,  159 => 59,  155 => 57,  152 => 56,  150 => 55,  147 => 54,  141 => 51,  137 => 49,  135 => 48,  132 => 47,  126 => 44,  122 => 42,  119 => 41,  113 => 38,  109 => 36,  106 => 35,  98 => 32,  94 => 30,  91 => 29,  83 => 26,  79 => 24,  76 => 23,  68 => 20,  64 => 18,  61 => 17,  56 => 14,  48 => 12,  45 => 11,  39 => 9,  31 => 7,  29 => 6,  24 => 3,  22 => 2,  19 => 1,);
    }
}
