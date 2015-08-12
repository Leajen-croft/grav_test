<?php

/* partials/base.html.twig */
class __TwigTemplate_f15692032673205da1fffcdebd7667784280211d1e6a55c325dd48219828fd9f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'page' => array($this, 'block_page'),
            'navigation' => array($this, 'block_navigation'),
            'titlebar' => array($this, 'block_titlebar'),
            'messages' => array($this, 'block_messages'),
            'content_top' => array($this, 'block_content_top'),
            'content' => array($this, 'block_content'),
            'content_bottom' => array($this, 'block_content_bottom'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 66
        echo "</head>
<body>
    ";
        // line 68
        $this->displayBlock('page', $context, $blocks);
        // line 105
        echo "</body>
</html>
";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "    <meta charset=\"utf-8\" />
    <title>";
        // line 6
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array())) {
            echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array());
            echo " | ";
        }
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array());
        echo "</title>
    ";
        // line 7
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "description", array())) {
            // line 8
            echo "        <meta name=\"description\" content=\"";
            echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "description", array());
            echo "\">
    ";
        } else {
            // line 10
            echo "        <meta name=\"description\" content=\"";
            echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "description", array());
            echo "\">
    ";
        }
        // line 12
        echo "    ";
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "robots", array())) {
            // line 13
            echo "        <meta name=\"robots\" content=\"";
            echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "robots", array());
            echo "\">
    ";
        }
        // line 15
        echo "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 16
        echo (isset($context["base_url_relative_frontend"]) ? $context["base_url_relative_frontend"] : null);
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/favicon.png\">

    ";
        // line 18
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 34
        echo "
    ";
        // line 35
        $this->loadTemplate("partials/javascript-config.html.twig", "partials/base.html.twig", 35)->display($context);
        // line 36
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
    }

    // line 18
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 19
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => ((isset($context["theme_url"]) ? $context["theme_url"] : null) . "/css-compiled/nucleus.css")), "method");
        // line 20
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => ((isset($context["theme_url"]) ? $context["theme_url"] : null) . "/css-compiled/template.css")), "method");
        // line 21
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => ((isset($context["theme_url"]) ? $context["theme_url"] : null) . "/css/font-awesome.min.css")), "method");
        // line 22
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => ((isset($context["theme_url"]) ? $context["theme_url"] : null) . "/css/chartist.min.css")), "method");
        // line 23
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => ((isset($context["theme_url"]) ? $context["theme_url"] : null) . "/css/selectize.min.css")), "method");
        // line 24
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => ((isset($context["theme_url"]) ? $context["theme_url"] : null) . "/css/hint.base.min.css")), "method");
        // line 25
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => ((isset($context["theme_url"]) ? $context["theme_url"] : null) . "/css/datepicker/kendo.common.core.min.css")), "method");
        // line 26
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => ((isset($context["theme_url"]) ? $context["theme_url"] : null) . "/css/datepicker/kendo.flat.min.css")), "method");
        // line 27
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => ((isset($context["theme_url"]) ? $context["theme_url"] : null) . "/css/datepicker/grav.overrides.css")), "method");
        // line 28
        echo "        ";
        if (((($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getBrowser", array()) == "msie") && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) >= 8)) && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) <= 9))) {
            // line 29
            echo "            ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => ((isset($context["theme_url"]) ? $context["theme_url"] : null) . "/css/nucleus-ie9.css")), "method");
            // line 30
            echo "            ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => ((isset($context["theme_url"]) ? $context["theme_url"] : null) . "/css/pure-0.5.0/grids-min.css")), "method");
            // line 31
            echo "        ";
        }
        // line 32
        echo "        ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "
    ";
    }

    // line 36
    public function block_javascripts($context, array $blocks = array())
    {
        // line 37
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "jquery", 1 => 101), "method");
        // line 38
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => ((isset($context["theme_url"]) ? $context["theme_url"] : null) . "/js/modernizr.custom.71422.js")), "method");
        // line 39
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => ((isset($context["theme_url"]) ? $context["theme_url"] : null) . "/js/chartist.min.js")), "method");
        // line 40
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => ((isset($context["theme_url"]) ? $context["theme_url"] : null) . "/js/selectize.min.js")), "method");
        // line 41
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => ((isset($context["theme_url"]) ? $context["theme_url"] : null) . "/js/toastr.min.js")), "method");
        // line 42
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => ((isset($context["theme_url"]) ? $context["theme_url"] : null) . "/js/jquery.remodal.min.js")), "method");
        // line 43
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => ((isset($context["theme_url"]) ? $context["theme_url"] : null) . "/js/ajax.js")), "method");
        // line 44
        echo "
        ";
        // line 45
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => ((isset($context["theme_url"]) ? $context["theme_url"] : null) . "/js/admin-all.js")), "method");
        // line 46
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => ((isset($context["theme_url"]) ? $context["theme_url"] : null) . "/js/dropdown.js")), "method");
        // line 47
        echo "
        ";
        // line 48
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => ((isset($context["theme_url"]) ? $context["theme_url"] : null) . "/js/datepicker/kendo.custom.min.js")), "method");
        // line 49
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => ((isset($context["theme_url"]) ? $context["theme_url"] : null) . "/js/datepicker/init.js")), "method");
        // line 50
        echo "
        ";
        // line 51
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => ((isset($context["theme_url"]) ? $context["theme_url"] : null) . "/js/forms/form.js")), "method");
        // line 52
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => ((isset($context["theme_url"]) ? $context["theme_url"] : null) . "/js/forms/fields/input.js")), "method");
        // line 53
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => ((isset($context["theme_url"]) ? $context["theme_url"] : null) . "/js/forms/fields/array.js")), "method");
        // line 54
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => ((isset($context["theme_url"]) ? $context["theme_url"] : null) . "/js/forms/fields/selectize.js")), "method");
        // line 55
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => ((isset($context["theme_url"]) ? $context["theme_url"] : null) . "/js/forms/fields/checkboxes.js")), "method");
        // line 56
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => ((isset($context["theme_url"]) ? $context["theme_url"] : null) . "/js/forms/fields/toggle.js")), "method");
        // line 57
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => ((isset($context["theme_url"]) ? $context["theme_url"] : null) . "/js/forms.js")), "method");
        // line 58
        echo "
        ";
        // line 59
        if (($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getBrowser", array()) == "msie")) {
            // line 60
            echo "            ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => ((isset($context["theme_url"]) ? $context["theme_url"] : null) . "/js/form-attr.polyfill.js")), "method");
            // line 61
            echo "        ";
        }
        // line 62
        echo "
        ";
        // line 63
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "
    ";
    }

    // line 68
    public function block_page($context, array $blocks = array())
    {
        // line 69
        echo "    <div class=\"remodal-bg\">

        ";
        // line 71
        $this->displayBlock('navigation', $context, $blocks);
        // line 74
        echo "
        <section id=\"admin-main\" >
            <div class=\"titlebar secondary-accent\">
                ";
        // line 77
        $this->displayBlock('titlebar', $context, $blocks);
        // line 78
        echo "            </div>

            <div class=\"grav-update\" data-gpm-grav>
            </div>

            <div class=\"content-padding\">
                <div>
                    ";
        // line 85
        $this->displayBlock('messages', $context, $blocks);
        // line 88
        echo "                    ";
        $this->displayBlock('content_top', $context, $blocks);
        // line 89
        echo "                    <div class=\"admin-block default-box-shadow\">
                        ";
        // line 90
        $this->displayBlock('content', $context, $blocks);
        // line 91
        echo "                    </div>
                    ";
        // line 92
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "admin", array()), "show_beta_msg", array())) {
            // line 93
            echo "                    <div class=\"notice alert\"><i class=\"fa fa-github\"></i> <a href=\"https://github.com/getgrav/grav-plugin-admin/issues\">";
            echo $this->env->getExtension('GravTwigExtension')->translate("ADMIN_REPORT_ISSUE");
            echo "</a></div>
                    ";
        }
        // line 95
        echo "                    ";
        $this->displayBlock('content_bottom', $context, $blocks);
        // line 96
        echo "                </div>
                 <footer id=\"footer\">
                    <a href=\"http://getgrav.org\">Grav</a> version <span class=\"grav-version\">";
        // line 98
        echo twig_constant("GRAV_VERSION");
        echo "</span> was made with <i class=\"fa fa-heart\"></i> by <a href=\"http://www.rockettheme.com\">RocketTheme</a>.
                </footer>
            </div>

        </section>
    </div>
    ";
    }

    // line 71
    public function block_navigation($context, array $blocks = array())
    {
        // line 72
        echo "            ";
        $this->loadTemplate("partials/nav.html.twig", "partials/base.html.twig", 72)->display($context);
        // line 73
        echo "        ";
    }

    // line 77
    public function block_titlebar($context, array $blocks = array())
    {
    }

    // line 85
    public function block_messages($context, array $blocks = array())
    {
        // line 86
        echo "                    ";
        $this->loadTemplate("partials/messages.html.twig", "partials/base.html.twig", 86)->display($context);
        // line 87
        echo "                    ";
    }

    // line 88
    public function block_content_top($context, array $blocks = array())
    {
    }

    // line 90
    public function block_content($context, array $blocks = array())
    {
    }

    // line 95
    public function block_content_bottom($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  337 => 95,  332 => 90,  327 => 88,  323 => 87,  320 => 86,  317 => 85,  312 => 77,  308 => 73,  305 => 72,  302 => 71,  291 => 98,  287 => 96,  284 => 95,  278 => 93,  276 => 92,  273 => 91,  271 => 90,  268 => 89,  265 => 88,  263 => 85,  254 => 78,  252 => 77,  247 => 74,  245 => 71,  241 => 69,  238 => 68,  232 => 63,  229 => 62,  226 => 61,  223 => 60,  221 => 59,  218 => 58,  215 => 57,  212 => 56,  209 => 55,  206 => 54,  203 => 53,  200 => 52,  198 => 51,  195 => 50,  192 => 49,  190 => 48,  187 => 47,  184 => 46,  182 => 45,  179 => 44,  176 => 43,  173 => 42,  170 => 41,  167 => 40,  164 => 39,  161 => 38,  158 => 37,  155 => 36,  148 => 32,  145 => 31,  142 => 30,  139 => 29,  136 => 28,  133 => 27,  130 => 26,  127 => 25,  124 => 24,  121 => 23,  118 => 22,  115 => 21,  112 => 20,  109 => 19,  106 => 18,  101 => 36,  99 => 35,  96 => 34,  94 => 18,  88 => 16,  85 => 15,  79 => 13,  76 => 12,  70 => 10,  64 => 8,  62 => 7,  54 => 6,  51 => 5,  48 => 4,  42 => 105,  40 => 68,  36 => 66,  34 => 4,  29 => 1,);
    }
}
